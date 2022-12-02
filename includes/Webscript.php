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
    <!--

    

    -->

    <script>
		const slidePage = document.querySelector(".slide-page");
			const nextBtnFirst = document.querySelector(".firstNext");
			const prevBtnSec = document.querySelector(".prev-1");
			const nextBtnSec = document.querySelector(".next-1");
			const prevBtnThird = document.querySelector(".prev-2");
			const submitBtn = document.querySelector(".submit");
			const progressText = document.querySelectorAll(".step p");
			const progressCheck = document.querySelectorAll(".step .check");
			const bullet = document.querySelectorAll(".step .bullet");
			let current = 1;

			nextBtnFirst.addEventListener("click", function(event){
			event.preventDefault();
			slidePage.style.marginLeft = "-25%";
			bullet[current - 1].classList.add("active");
			progressCheck[current - 1].classList.add("active");
			progressText[current - 1].classList.add("active");
			current += 1;
			});
			nextBtnSec.addEventListener("click", function(event){
			event.preventDefault();
			slidePage.style.marginLeft = "-50%";
			bullet[current - 1].classList.add("active");
			progressCheck[current - 1].classList.add("active");
			progressText[current - 1].classList.add("active");
			current += 1;
			});

			prevBtnSec.addEventListener("click", function(event){
			event.preventDefault();
			slidePage.style.marginLeft = "0%";
			bullet[current - 2].classList.remove("active");
			progressCheck[current - 2].classList.remove("active");
			progressText[current - 2].classList.remove("active");
			current -= 1;
			});
			prevBtnThird.addEventListener("click", function(event){
			event.preventDefault();
			slidePage.style.marginLeft = "-25%";
			bullet[current - 2].classList.remove("active");
			progressCheck[current - 2].classList.remove("active");
			progressText[current - 2].classList.remove("active");
			current -= 1;
			});
            
			submitBtn.addEventListener("click", function(){
			bullet[current - 1].classList.add("active");
			progressCheck[current - 1].classList.add("active");
			progressText[current - 1].classList.add("active");
			current += 1;
			});
			

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
	<!-- Payment Select script-->
    <script type="text/javascript">
        function filter(element) {
            var value = $(element).val().toLowerCase();
            var text;
            var searchValue;
            var liValue;

            $("#therealitems > li").each(function() {
                if ($(this).text().toLowerCase().search(value) > -1) {
                    $(this).show();
                    var text = $(this).show();
                    if (text.length === 1) {
                        searchValue = text[0];
                    }
                } else {
                    $(this).hide();
                }

            });

            $('.input-field1').on('keypress', function(e) {
                if (e.key === 'Enter' || e.keyCode === 13) {
                    $('.input-field1').val(searchValue.innerText);
                    e.preventDefault();
                    $('.the-dropdown-list').slideUp('fast');
                }
            });

        }
        $(document).ready(function() {

            $('.input-field1').on('click', function() {
                $(this).parent().next().slideDown('fast');
            });

            $('.the-select-btn').on('click', function() {
                $('.the-dropdown-list').slideUp('fast');

                if (!$(this).prev().attr('disabled')) {
                    $(this).prev().trigger('click');
                }
            });

            $('.input-field1').width($('.inputBox1').width() - $('.the-select-btn').width() - 13);

            $('.the-dropdown-list').width($('.inputBox1').width());

            $('.input-field1').val('');

            $('li.the-dropdown-item').on('click', function() {
                var text = $(this).html();
                $(this).parent().prev().find('.input-field1').val(text);
                $('.the-dropdown-list').slideUp('fast');
            });

            $(document).on('click', function(event) {
                if ($(event.target).closest(".input-field1, .the-select-btn").length)
                    return;
                $('.the-dropdown-list').slideUp('fast');
                event.stopPropagation();
            });

        });
    </script>

    