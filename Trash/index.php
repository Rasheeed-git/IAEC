
<!--
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="bootstrap5/jquery/jquery.js"></script>
    <script src="bootstrap5/chosen/chosen.jquery.js"></script>
    <link rel="stylesheet" href="bootstrap5/chosen/chosen.css"/>
    <title>Document</title>
  </head>
  <body>
    <p>The collected Name Is</p>
    <h1>Subscribe to What About Coding</h1>
    <select data-placeholder="Choose a name..." class="ch">
      <option></option>
      <option>Milli</option>
      <option>Jhon</option>
      <option>Harry</option>
      <option>Jessica</option>
      <option>illi</option>
      <option>hon</option>
      <option>arry</option>
      <option>essica</option>
      <option>lli</option>
      <option>on</option>
      <option>rry</option>
      <option>ssica</option>
      <option>li</option>
      <option>n</option>
      <option>ry</option>
      <option>sica</option>
    </select>

    <script>
      $(document).ready(function () {
        $(".ch").chosen({
          width: "50%",
        });
      });
    </script>
 
  </body>
</html>
   -->

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   </head>
   <body>


        <form id='perpetual' class='input-group-perpetual'>
            <div class="select-div">
                <input type='text'class='field1' id="Name" name = "Name" onkeyup="filter(this)" autocomplete="off" onfocus="this.value=''" required>
            </div>
            <ul class="the-dropdown-list" id="therealitems" style="display:none;">
                        <li class="the-dropdown-item">Javascript</li>
                        <li class="the-dropdown-item">JAVA</li>
                        <li class="the-dropdown-item">C#</li>
                        <li class="the-dropdown-item">Python</li>
                        <li class="the-dropdown-item">Golang</li>
                        <li class="the-dropdown-item">HTML 5</li>
                        <li class="the-dropdown-item">CSS</li>
                        <li class="the-dropdown-item">Ruby</li>
                        <li class="the-dropdown-item">Scala</li>
                        <li class="the-dropdown-item">Swift</li>
                        <li class="the-dropdown-item">Elm</li>
                        <li class="the-dropdown-item">Rust</li>
            </ul>
            <button type='submit' name ="submit" class='submit-btn2'><b>Log in</b></button>
            <a href="" class = "Dashboard-link2"><i class="fa-solid fa-xmark"></i> Close</a>
        </form>



                    <div class="form-group" id="">
                          <form role="form" action=".php" method="post" id=""> 
                          <div class="select-div">
                              <label for="" class="heading ml-2">Matric Number</label>
                              <input type="text" class="form-control field1  col-sm-11 ml-2" onkeyup="filter(this)" autocomplete="off" onfocus="this.value=''" id="name" placeholder="Enter Admission Number" name="name" autocomplete="off">
                          </div>
                              

                                <ul class="the-dropdown-list" id="therealitems" style="display:none">
                                    <li class="the-dropdown-item">Javascript</li>
                                    <li class="the-dropdown-item">JAVA</li>
                                    <li class="the-dropdown-item">C#</li>
                                    <li class="the-dropdown-item">Python</li>
                                    <li class="the-dropdown-item">Golang</li>
                                    <li class="the-dropdown-item">HTML 5</li>
                                    <li class="the-dropdown-item">CSS</li>
                                    <li class="the-dropdown-item">Ruby</li>
                                    <li class="the-dropdown-item">Scala</li>
                                    <li class="the-dropdown-item">Swift</li>
                                    <li class="the-dropdown-item">Elm</li>
                                    <li class="the-dropdown-item">Rust</li>
                                </ul>
                              <button type="submit" class="btn Submit-btn mt-2 ml-2" id="">Submit</button>
                            </form> 
                      </div>  
     
    
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

            $('.field1').on('keypress', function(e) {
                if (e.key === 'Enter' || e.keyCode === 13) {
                    $('.field1').val(searchValue.innerText);
                    e.preventDefault();
                    $('.the-dropdown-list').slideUp('fast');
                }
            });

        }
        $(document).ready(function() {

            $('.field1').on('click', function() {
                $(this).parent().next().slideDown('fast');
            });

            $('.the-select-btn').on('click', function() {
                $('.the-dropdown-list').slideUp('fast');

                if (!$(this).prev().attr('disabled')) {
                    $(this).prev().trigger('click');
                }
            });

            $('.field1').width($('.select-div').width() - $('.the-select-btn').width() - 13);

            $('.the-dropdown-list').width($('.select-div').width());

            $('.field1').val('');

            $('li.the-dropdown-item').on('click', function() {
                var text = $(this).html();
                $(this).parent().prev().find('.field1').val(text);
                $('.the-dropdown-list').slideUp('fast');
            });

            $(document).on('click', function(event) {
                if ($(event.target).closest(".field1, .the-select-btn").length)
                    return;
                $('.the-dropdown-list').slideUp('fast');
                event.stopPropagation();
            });

        });
    </script>
   </body>
   </html>