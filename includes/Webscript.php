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
	
	<!--Select Script for Mode of Entry-->
	<script>

		function handleChange (el) {
			document.querySelector('.center-select__text').innerHTML = el.value
		}

	</script>
	<!--/Select Script for Mode of Entry-->
	