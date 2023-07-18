    <?php
include 'Main.php';
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
                <div class="col-lg-5 col-md-10 col-sm-12 col-xs-12 Register" >
                    <h1 id="LoginHeading">Register</h1>  
                    <form action="" id="UserRegister" method="POST" >
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" required name="Email" id="Emails" placeholder="Email">
                          </div>
                        
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                            <input type="password" name="CPassword" class="form-control" id="CPassword" placeholder="Confirm Password">
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
                            <a href="login.html" class="dont">You already  have account ? </a>
                          </span>
                          <br>
                          <button type="button"  id="register" class="btn btn-warning Register_warning" >Register</button>
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
            $("#register").on("click",function(event)
            {
                
                event.preventDefault();

                var arr=$("#UserRegister").serializeArray();


var obj={};
for(var i=0;i<arr.length;i++)
{
    obj[arr[i].name]=arr[i].value;

}



  var  Email=obj.Email;
  var Pass=obj.Password;
  var Cpass=obj.CPassword;



if(Email=="" || Pass=="" || Cpass=="")
{
    $(".alert").css("display","inline-block");
    $(".alert").text("Please fill all fields");

    
   


}
// else 
// {


// }

else if(Pass!=Cpass)
{
    console.log(Pass);

    $(".alert").css("display","inline-block");
    $(".alert").text("Please fill same Password");

}
else if(!(Email=="" || Password=="" || CPassword==""))
{

    $(".alert").css("display","none");

    $.ajax({
                    url:"http://localhost/trendgold/Handler/Register_Handler.php",
                    type:'POST',
                    data:$('#UserRegister').serialize(),
                    success:function(e)
                    {


                        window.location.href="login.php";




                        
                    }
    
                 })
}


                
                 
            })

           
        })
    </script>