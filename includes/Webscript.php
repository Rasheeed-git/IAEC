	<!--HomePage Login Script-->
	<script>
        var x=document.getElementById('admin');
		var y=document.getElementById('staff');
		var z=document.getElementById('btn');
		function staff()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function admin()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<!--/HomePage Login Script-->

	<!--AdmissionType Script-->
	<script>
			var a =document.getElementById('provisional');
			var b =document.getElementById('perpetual');
			var c =document.getElementById('btn');
			function perpetual()
			{
				a.style.left='-400px';
				b.style.left='50px';
				c.style.left='150px';
			}
			function provisional()
			{
				a.style.left='50px';
				b.style.left='450px';
				c.style.left='0px';
			}
	</script>
	<!--/AdmissionType Script-->

	<!--Show Modal Script-->
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
	<!--/Show Modal Script-->

	<!--Show and Hide Password Script-->
	<script>
		$(".toggle-password").click(function() {

		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
		  input.attr("type", "text");
		} else {
 		 input.attr("type", "password");
		}
		});
	</script>
	<!--/Show and Hide Password Script-->
 <script>
    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");

    let formStepsNum = 0;

    nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
    });
    });

    prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
    });
    });

    function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
        formStep.classList.remove("form-step-active");
    });

    formSteps[formStepsNum].classList.add("form-step-active");
    }

    function updateProgressbar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
        progressStep.classList.add("progress-step-active");
        } else {
        progressStep.classList.remove("progress-step-active");
        }
    });

    const progressActive = document.querySelectorAll(".progress-step-active");

    progress.style.width =
        ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
    }
   </script>

    

	<!--Display Department script-->
	<script>
    function showDiv(prefix,chooser){
    var selectedOption = (chooser.options[chooser.selectedIndex].value);
    if(selectedOption == "1")
    {
        var div = document.getElementById(prefix + "1");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "2");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "3");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "4");
        div.style.display = 'None';
    }
    else if(selectedOption == "2")
    {
        var div = document.getElementById(prefix + "2");
        div.style.display = 'block';
		var div = document.getElementById(prefix + "1");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "3");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "4");
        div.style.display = 'None';
    }
    else if(selectedOption == "3")
    {
        var div = document.getElementById(prefix + "3");
        div.style.display = 'block';
		var div = document.getElementById(prefix + "1");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "2");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "4");
        div.style.display = 'None';
    }
    else if(selectedOption == "4")
    {
        var div = document.getElementById(prefix + "4");
        div.style.display = 'block';
		var div = document.getElementById(prefix + "1");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "2");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "3");
        div.style.display = 'None';
		
    }
    else{
        var div = document.getElementById(prefix + "1");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "2");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "3");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "4");
        div.style.display = 'None';
    }
}
	</script>

    <!--Mode Of Admission for Direct Entry-->
    <script>
        $(document).ready(function(){
            $('#EntryMode').on('change', function(){
                var demovalue = $(this).val(); 
                $("div.EntryMode").hide();
                $("#Show"+demovalue).show();
            });
        });
    </script> 
    <!--Tuition Type-->
    <script>
    function showDivType(prefix,chooser){
    var selectedOption = (chooser.options[chooser.selectedIndex].value);
    if(selectedOption == "Fresh")
    {
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
    }
    else if(selectedOption == "Returning")
    {
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'block';
    }
    else{
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
    }
}
    </script>
    <!--/Tuition Type-->

     <!--Examination Insert By-->
     <script>
    function showDivExam(prefix,chooser){
    var selectedOption = (chooser.options[chooser.selectedIndex].value);
    if(selectedOption == "Student")
    {
        var div = document.getElementById(prefix + "Student");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "Course");
        div.style.display = 'none';
    }
    else if(selectedOption == "Course")
    {
        var div = document.getElementById(prefix + "Student");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Course");
        div.style.display = 'block';
    }
    else{
        var div = document.getElementById(prefix + "Student");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Course");
        div.style.display = 'None';
    }
}
    </script>
    <!--/Examination Insert By-->


    <!--Payment Type-->
    <script>
    function showDivPay(prefix,chooser){
    var selectedOption = (chooser.options[chooser.selectedIndex].value);
    if(selectedOption == "Tuition")
    {
        var div = document.getElementById(prefix + "Tuition");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "CO");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Hostel");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Others");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
    }
    else if(selectedOption == "CO")
    {
        var div = document.getElementById(prefix + "Tuition");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "CO");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "Hostel");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Others");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
    }
    else if(selectedOption == "Hostel")
    {
        var div = document.getElementById(prefix + "Tuition");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "CO");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Hostel");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "Others");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
		
    }
    else if(selectedOption == "Others")
    {
        var div = document.getElementById(prefix + "Tuition");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "CO");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Hostel");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Others");
        div.style.display = 'block';
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
		
    }
    else{
        var div = document.getElementById(prefix + "Tuition");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "CO");
        div.style.display = 'None';
        var div = document.getElementById(prefix + "Hostel");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Others");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Fresh");
        div.style.display = 'none';
        var div = document.getElementById(prefix + "Returning");
        div.style.display = 'None';
    }
}
	</script>
    <!--/Payment Type-->

    <!--Open Page-->
        <script>
        document.getElementById('EntryMode').addEventListener('change', function() {
        val = $( "#EntryMode" ).val();
            
        console.log(val)
        if(val === 'Fresh') {
            location = "Fresh.php";
            }
        else if(val === 'Transfer') {
            location = "Transfer.php";
            }
        });
    </script>

    <!--Open Page-->
    <script>
    document.getElementById('EntryMode1').addEventListener('change', function() {
    val = $( "#EntryMode1" ).val();
        
    console.log(val)
    if(val === 'ND') {
        location = "ND.php";
        }
    if(val === 'NCE') {
        location = "NCE.php";
        }
    if(val === 'AND') {
    location = "Advance.php";
    }
    if(val === 'HND') {
    location = "HND.php";
    }
    if(val === 'BSC') {
    location = "BSC.php";
    }
    });

    </script>
    
    <!--/Mode Of Admission for Direct Entry-->
    <!--Accept Only Alphabet for Input-->
    <script>
      function alphaOnly() {
    let nameInput = document.querySelectorAll('.name');
      nameInput.forEach((input) => {
  
        input.addEventListener('keydown', (e) => {
          let charCode = e.keyCode;
  
          if ((charCode >= 65 && charCode <= 90) || charCode == 8 || charCode == 32) {
            null;
          } else {
            e.preventDefault();
          }
        });
      });
    }

     alphaOnly();
</script>
 <!--/Accept Only Alphabet for Input-->

 <!--Fresh Admission-->