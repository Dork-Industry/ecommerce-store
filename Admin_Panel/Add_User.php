<?php
include 'Main.php';


?>

<body>

    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php

include 'Sidebar.php';

?>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">

        <?php

include 'Header.php';

?>



<div class="page-body">
    <br>

    <h1 class="">Add User</h1>
    <br>

    <form action="" method="POST" id="form" >

        <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="Email" name="Email" id="Name" required placeholder="xxxxxxx@xyx.com"
                        class="form-control">

                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Password<span class="text-danger">*</span></label>
                    <input type="password" name="Password" id="Password" required placeholder="********"
                        class="form-control">

                </div>
            </div>
        </div>



        <div class="row mt-2">

            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" placeholder="********" maxlength="11" minlength="11"
                        name="CPassword" class="form-control" id="cPassword">

                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group mt-1 ml-4">
                          <br>
                          

                    <button type="submit" id="UserLogin" class="btn btn-primary" id="Add">Add</button>
                </div>
            </div>


        </div>





        </div>

</div>



</form>
</div>

        
            <?php

include 'Footer.php';

?>
        </div>
    </div>

   <?php
include 'JSCdn.php';


?>

<script>
  $(document).ready(function()
  {
    $("#UserLogin").on("click",function(event)
    {
      event.preventDefault();

var arr=$("#form").serializeArray();

         
var Name=arr[0].value;
var Pass=arr[1].value;
var Cpass=arr[0].value;
 
              if(Name=="" || Pass=="" || Cpass=="")
              {
                alert("Please fill all field");

              }
              else if(Pass=!Cpass)
              {
                alert("Please enter same password");
              }
              else
              {
                $.ajax(
                  {
                    url:"../Handler/Register_Handler.php",
                    method:"POST",
                    data:$("#form").serializeArray(),
                    success:function(ev)
                    {
                      var e1=JSON.parse(ev);
                       
                      if(e1.Message==true)
                      {
                        alert("User Successfully Added");
                        $("input").val("");

                           
                      }

                    } 

                  }
                )
              }




    })
  })
</script>
</body>