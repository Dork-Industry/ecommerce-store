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

    <h1 class="">Add <?php
    echo  $_GET["Name"]; ?>  Item</h1>
    <br>

    <form action=""  id="form" >

        <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="Name1" id="Name" required placeholder="xxxxxxx@xyx.com"
                        class="form-control">

                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Company Name<span class="text-danger">*</span></label>
                    <input type="text" name="ComName" id="ComName" required placeholder="********"
                        class="form-control">

                </div>
            </div>
        </div>



        <div class="row mt-2">

            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Starting Price <span class="text-danger">*</span></label>
                    <input type="number" placeholder="********" maxlength="11" minlength="11"
                        name="SPrice" id="SPrice" class="form-control">

                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group  ml-4">
                          
                          <label>Select Categorie <span class="text-danger">*</span></label>
                        <select name="Categorie" id="Categorie" class="form-control">
                          <option value="NEW ARRIVALS">NEW ARRIVALS</option>
                          <option value="BEST SELLER">BEST SELLER</option>
                          <option value="TRENDING
DESIGN">TRENDING
DESIGN</option>
                          <option value="TOP CATEGORIES">TOP CATEGORIES</option>
                        </select>
                          <!-- <input type="number" placeholder="********" maxlength="11" minlength="11"
                              name="Product_Price" class="form-control"> -->

                </div>
            </div>


        </div>

        <div class="row mt-2">
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="form-group mt-1 ml-4">
                    
                      


            </div>
        </div>


          <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group mt-1 ml-4">
                      
                        
                        <button type="submit" id="ItemSubmit" class="btn btn-primary" id="Add">Add</button>

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
    $(document).ready(function(event)
    {
         $("#ItemSubmit").on("click",function(event)
         {
            

            event.preventDefault();

var f=$("#form").serializeArray();


var obj={};
var counter=0;
var check=false;
for(var i=0;i<f.length;i++)
{
   if(f[i].value=="")
   {
    check=true;
   }

    obj[f[i].name]=f[i].value;

}
if(check)
{
    alert("Please fill all field");
}
else
{
    $.ajax(
        {
            url:"../Handler/Add_Item_Handler.php?Name=<?php echo $_GET['Name']; ?>",
            method:"POST",
            data:$("#form").serializeArray(),
            success:function(e)
            {
                var r=JSON.parse(e);
                 
                if(r["Message"]==true)
                {
                    alert("Item Successfully Added");
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