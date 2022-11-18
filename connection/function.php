<?php 
//include("db.php");

function getStudentProfile($admission_num){
	global $dbh;

	$sql_profile ="SELECT students_tbl.*,class_tbl.class_name,session_tbl.session_name,term_tbl.term_name,category.category_name,section_tbl.section_name
	FROM students_tbl
	JOIN class_tbl
	ON class_tbl.class_id = students_tbl.class_admitted
	AND class_tbl.class_id = students_tbl.current_class 
	JOIN session_tbl
	ON session_tbl.session_id = students_tbl.session_admitted
	AND session_tbl.session_id = students_tbl.current_session
	JOIN term_tbl
	ON term_tbl.term_id = students_tbl.term_admitted
	JOIN category
	ON category.id = students_tbl.category
	JOIN section_tbl
	ON section_tbl.section_id = class_tbl.section
	WHERE students_tbl.admission_num = :admission_num
	";

	$query = $dbh->prepare($sql_profile);
	$query->bindParam(':admission_num',$admission_num,PDO::PARAM_STR);
	$query->execute();
	$profile=$query->fetch(PDO::FETCH_OBJ);

		return $profile;

}

function getTermPayment($student_id, $term,$session) 
{
	global $dbh;
	$sql_query = "SELECT SUM(payment_tbl.amount_paid) as total_paid, students_tbl.student_id,students_tbl.first_name,students_tbl.surname,students_tbl.other_name,students_tbl.gender,students_tbl.date_o_b,students_tbl.admission_num,students_tbl.current_class,students_tbl.current_session,students_tbl.term_admitted,students_tbl.category,class_tbl.class_id,class_tbl.section,class_tbl.class_name,session_tbl.session_id,session_tbl.session_name,term_tbl.term_id,term_tbl.term_name,category.id,category.category_name,section_tbl.section_id,section_tbl.section_name,fees_tbl.fees_id,fees_tbl.fees_name,fees_tbl.amount,fees_tbl.section,fees_tbl.session,fees_tbl.category,payment_tbl.payment_id,payment_tbl.student_id,payment_tbl.admission_num,payment_tbl.section_id,payment_tbl.class_id,payment_tbl.category_id,payment_tbl.session_id,payment_tbl.term_id,payment_tbl.fees_id,payment_tbl.amount_paid,payment_tbl.date_created 
	FROM students_tbl 
	JOIN class_tbl 
	ON class_tbl.class_id = students_tbl.current_class 
	JOIN session_tbl 
	ON session_tbl.session_id = students_tbl.current_session 
	JOIN term_tbl 
	ON term_tbl.term_id = students_tbl.term_admitted 
	JOIN category 
	ON category.id = students_tbl.category 
	JOIN section_tbl 
	ON section_tbl.section_id = class_tbl.section 
	JOIN fees_tbl 
	ON fees_tbl.category = students_tbl.category AND class_tbl.section = fees_tbl.section 
	JOIN payment_tbl 
	ON payment_tbl.student_id = students_tbl.student_id AND payment_tbl.fees_id = fees_tbl.fees_id 
	WHERE students_tbl.student_id = :student_id AND payment_tbl.term_id = :term AND payment_tbl.session_id = :session GROUP BY payment_tbl.admission_num,payment_tbl.session_id,payment_tbl.term_id";

		$query = $dbh->prepare($sql_query);
		$query->bindParam(':student_id',$student_id,PDO::PARAM_STR);
		$query->bindParam(':term',$term,PDO::PARAM_STR);
		$query->bindParam(':session',$session,PDO::PARAM_STR);

		$query->execute();
		$results=$query->fetch(PDO::FETCH_OBJ);

		return $results;
}


function getTermStudent($student_id) 
{
	global $dbh;
	$sql_query = "SELECT  students_tbl.student_id,students_tbl.first_name,students_tbl.surname,students_tbl.other_name,students_tbl.gender,students_tbl.date_o_b,students_tbl.admission_num,students_tbl.current_class,students_tbl.current_session,students_tbl.term_admitted,students_tbl.category,class_tbl.class_id,class_tbl.section,class_tbl.class_name,category.id,category.category_name,section_tbl.section_id,section_tbl.section_name 
	FROM students_tbl 
	JOIN class_tbl 
	ON class_tbl.class_id = students_tbl.current_class 
	JOIN category 
	ON category.id = students_tbl.category 
	JOIN section_tbl 
	ON section_tbl.section_id = class_tbl.section 
	WHERE students_tbl.student_id = :student_id";

		$query = $dbh->prepare($sql_query);
		$query->bindParam(':student_id',$student_id,PDO::PARAM_STR);

		$query->execute();
		$results=$query->fetch(PDO::FETCH_OBJ);

		return $results;
}

function getStudentData($admission_num,$session) 
{
	global $dbh;
	$sql_report = "SELECT sict.class_id,sict.session,st.*,category.category_name,class_tbl.class_name,section_tbl.section_name,fees_tbl.amount
	FROM student_in_class_tbl AS sict
	JOIN students_tbl st
	ON sict.student_id = st.student_id
	JOIN class_tbl 
	ON class_tbl.class_id = sict.class_id 
	JOIN category 
	ON category.id = st.category 
	JOIN section_tbl 
	ON section_tbl.section_id = class_tbl.section
	JOIN fees_tbl
	ON fees_tbl.section = section_tbl.section_id
	AND fees_tbl.category = category.id
	WHERE st.admission_num = :admission_num 
	AND sict.session = :session
	";

	$query = $dbh->prepare($sql_report);
	$query->bindParam(':admission_num',$admission_num,PDO::PARAM_STR);
	$query->bindParam(':session',$session,PDO::PARAM_STR);
	$query->execute();
	$results_r=$query->fetch(PDO::FETCH_OBJ);

		return $results_r;
}

function amountToPay($section,$category){
	global $dbh;
	$sql="SELECT amount FROM fees_tbl WHERE section=:section AND category = :category";
	$query = $dbh->prepare($sql);
	$query->bindParam(':section',$section,PDO::PARAM_STR);
	$query->bindParam(':category',$category,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row['amount'];

}

function GetPreviousDebt($student_id,$current_class,$session){

	
	global $dbh;
	$sql="
	SELECT 
	sict.class_id,class_tbl.section,st.category 
	FROM student_in_class_tbl sict 
	JOIN class_tbl
	ON class_tbl.class_id = sict.class_id
	JOIN students_tbl st
	ON st.student_id = sict.student_id
	WHERE sict.student_id=:id AND sict.class_id < :current_class";
	$query = $dbh->prepare($sql);
	$query->bindParam(':id',$student_id,PDO::PARAM_STR);
	$query->bindParam(':current_class',$current_class,PDO::PARAM_STR);
	$query->execute();
	$rows = $query->fetchAll(PDO::FETCH_ASSOC);
	$total = '0';
	$total_paid = '0';
	foreach ($rows as $row) {
		$total = $total + amountToPay($row['section'],$row['category'])*3;
	}

	foreach ($rows as $row) {
		foreach(PreviousPayment($student_id,$session) as $pay){
			$total_paid = $total_paid + $pay['amount_paid'];
		}
	}


	return $total-$total_paid;

}

function PreviousTermPayment($student_id,$session,$term_id){

	global $dbh;
	$sql="SELECT amount_paid FROM payment_tbl WHERE student_id=:student_id AND session_id < :session AND term_id = :term_id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':student_id',$student_id,PDO::PARAM_STR);
	$query->bindParam(':session',$session,PDO::PARAM_STR);
	$query->bindParam(':term_id',$term_id,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row['amount_paid'];

}

function PreviousPayment($student_id,$session){

	global $dbh;
	$sql="SELECT amount_paid FROM payment_tbl WHERE student_id=:student_id AND session_id < :session";
	$query = $dbh->prepare($sql);
	$query->bindParam(':student_id',$student_id,PDO::PARAM_STR);
	$query->bindParam(':session',$session,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetchAll(PDO::FETCH_ASSOC);
	return $row;
}





?>