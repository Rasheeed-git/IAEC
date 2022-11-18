<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','pay_lte');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

$query = $dbh -> prepare("
	SELECT settings.*, session_tbl.session_name, term_tbl.term_name FROM  settings 
	JOIN session_tbl
	ON settings.session_id = session_tbl.session_id 
	JOIN term_tbl
	ON term_tbl.term_id = settings.term_id
	WHERE id =1");
$query->execute();
$settings =$query->fetch(PDO::FETCH_OBJ);

$current_term_name = $settings->term_name;
$current_session_name = $settings->session_name;
$current_term_id = $settings->term_id;
$current_session_id = $settings->session_id;


function getSessionDetail($session_id)
{
	global $dbh;
	$sql="SELECT * FROM session_tbl where session_id=:id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':id',$session_id,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row;
}

function getClassName($class_id)
{
	global $dbh;
	$sql="SELECT class_name FROM class_tbl where class_id=:id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':id',$class_id,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row['class_name'];
}

function getTermName($term_id)
{
	global $dbh;
	$sql="SELECT term_name FROM term_tbl where term_id=:id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':id',$_POST['term'],PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row['term_name'];
}

function getExamName($id)
{
	global $dbh;
	$sql="SELECT exam_name FROM exam_type WHERE id=:id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':id',$id,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row['exam_name'];
}

function getExamYear($id)
{
	global $dbh;
	$sql="SELECT exam_year FROM exam_year WHERE id=:id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':id',$id,PDO::PARAM_STR);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	return $row['exam_year'];
}

?>