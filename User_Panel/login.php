<?php
include 'header.php';

?>
        <section id="section-17">
            <div class="controls row">
                <div class="col-md-6" id="column-19">
                    <h1 id="heading-22">
                        RAGA<br>
                        COLLECTIONS<br>
                        
                    </h1>
                    <p id="paragraph-23">
                        Raga Collections are our premium collcetions we have, dispute free and single piece per design product.
                    </p><a class="btn btn-primary btn" href="#" id="button-24">View More</a> 
                </div>
                <div class="col-md-6">
                    <img id="image" src="img/6421700d869e3_1679912973.png">
                </div>
                
                <script>
                
                    var imageSources = ["img/6421700d869e3_1679912973.png", "img/Banner_01.png", "img/Banner_02.png"]
                    
                    var index = 0;
                    setInterval (function(){
                      if (index === imageSources.length) {
                        index = 0;
                      }
                      document.getElementById("image").src = imageSources[index];
                      index++;
                    } , 2000);
                
                </script>
            </div>
        </section>
       
        <div class="container">
            <div class="row">
               <div class="col-lg-3"></div>
                <div class="col-lg-5 col-md-10 col-sm-12 col-xs-12 Login" >
                    <h1 id="LoginHeading">Login</h1>  
                    <form action="" id="LoginForm">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="Email" name="Name" placeholder="Enter your email" >
                          </div>
                        
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter your password">
                          </div>
                        
                          <span style="
                           display:none;
                           font-family: 'Abhaya Libre';
    color: rgb( 237, 73, 86);
    line-height:10px;
     margin-left:0.8rem;
    font-size: 1.2em;
    font-weight: 700 !important;
    
    

    
                           " class="alert">
invalid password fofnfmn dildildj
                           </span>
                           <br>
                          <span class="dont">
                            <a href="Register.php" class="dont">You don't have account ? </a>
                          </span>
                          <br>
                          <button type="button" id="Loginbtn" class="btn btn-warning">Login</button>
                      </form>
                </div>
            </div>
        </div>

     <br>
     <br>

         

        <?php

include 'footer.php';


?>
<script>
    $(document).ready(function()
    {
        $("#Loginbtn").on("click",function(e)
        {
            e.preventDefault();

            var arr=$("#LoginForm").serializeArray();
            
            var Name=arr[0].value;

            var Pass=arr[1].value;


            

            if(Name=="" || Pass=="")
            {
        


                $(".alert").css("display","inline-block");
                $(".alert").text("Please fill all fields");

            }
            else 
            {
                $(".alert").css("display","none");
                $.ajax({
                    url:"../Handler/login_handler.php",
                    method:"POST",
                    data:$("#LoginForm").serializeArray(),
                    success:function(e1)
                    {
                        // var arr=parseResponse(e);

                         var e=JSON.parse(e1);



                        // alert(resp["Message"]);                       
                        

                       if(e.Message==true)
                       {


                      window.location.href="index.php";
                      


                       }
                       else if(e.Message==false)
                       {

                        $(".alert").css("display","inline-block");
                $(".alert").text("Please fill correct email or password");
                       
            }
                       else
                       {
                        console.log(e["Message"]);

                       }


                    }
                })

            }


            


        })
    })
</script>

