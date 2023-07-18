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

        <h1 class="">Add <?php echo $_GET["Name"];
         ?> Product</h1>
        <br>

        <form action="" method="POST" id="form" enctype="multipart/form-data">

          <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="Pro_Name" id="Pro_Name"  placeholder="xxxxxxx@xyx.com"
                  class="form-control">

              </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group">
                <label>Description<span class="text-danger">*</span></label>
                <!-- <textarea row="10" cols="30" type="text" name="Product_Desc" required placeholder="********" class="form-control"> -->

                  <textarea name="Pro_Desc" id="Pro_Desc" class="form-control" cols="30" rows="2"></textarea>
              </div>
            </div>
          </div>



          <div class="row mt-2">

            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group">
                <label> Price <span class="text-danger">*</span></label>
                <input type="number" name="Price" id="Price" placeholder="********" maxlength="11" minlength="11" name="Product_Price"
                  class="form-control">

              </div>
            </div>


            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group  ml-4">

                <label>Select Type <span class="text-danger">*</span></label>
                <select name="Type" id="Type" class="form-control">
                  <?php
                   if(strcmp($_GET["Name"],"Gold")==0)
                   {
                    include '../Handler/Connection.php';

                    $Q="SELECT * FROM `gold_item` ";
                     $res=mysqli_query($con,$Q);
                    while($row=mysqli_fetch_assoc($res))
                    {
                       
?>

                  <option value="<?php echo $row["Name"] ?>"><?php echo $row["Name"] ?></option>
        <?php
                    }
                  }

                 else if(strcmp($_GET["Name"],"Diamond")==0)
                   {
                    include '../Handler/Connection.php';

                    $Q="SELECT * FROM `diamond_item` ";
                     $res=mysqli_query($con,$Q);
                    while($row=mysqli_fetch_assoc($res))
                    {
                       
?>

                  <option value="<?php echo $row["Name"] ?>"><?php echo $row["Name"] ?></option>
        <?php
                    }
                  }



                  else if(strcmp($_GET["Name"],"Silver")==0)
                  {
                   include '../Handler/Connection.php';

                   $Q="SELECT * FROM `silver_item` ";
                    $res=mysqli_query($con,$Q);
                   while($row=mysqli_fetch_assoc($res))
                   {
                      
?>

                 <option value="<?php echo $row["Name"] ?>"><?php echo $row["Name"] ?></option>
       <?php
                   }
                 }

                 else if(strcmp($_GET["Name"],"Platinum")==0)
                 {
                  include '../Handler/Connection.php';

                  $Q="SELECT * FROM `platinum_item` ";
                   $res=mysqli_query($con,$Q);
                  while($row=mysqli_fetch_assoc($res))
                  {
                     
?>

                <option value="<?php echo $row["Name"] ?>"><?php echo $row["Name"] ?></option>
      <?php
                  }
                }


                  ?>





                </select>


              </div>
            </div>


          </div>

          <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group mt-1 ml-4">

                <div class="form-group">
                  <label>First Quality <span class="text-danger">*</span></label>
                  <input type="text" name="Quality1" id="Quality1" placeholder="********" maxlength="11" minlength="11" name="Product_Price"
                    class="form-control">

                </div>


              </div>
            </div>


            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group">
                <label>Second Quality <span class="text-danger">*</span></label>
                <input type="text" name="Quality2" id="Quality2" placeholder="********" maxlength="11" minlength="11" name="Product_Price"
                  class="form-control">

              </div>


             
            </div>


          </div>


          <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group mt-1 ml-4">

                  <label>Third Quality <span class="text-danger">*</span></label>
                  <input type="text" name="Quality3" id="Quality3" placeholder="********" maxlength="11" minlength="11" name="Product_Price"
                    class="form-control">

             

              </div>
            </div>


            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group mt-1">
                <label>Upload Picture <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="Img" accept="image/*" id="formFileMultiple"
                  multiple>


                <!-- <button type="submit" class="btn btn-primary" id="Add">Add</button> -->
              </div>



            </div>


          </div>


          <div class="row mt-2">
            <div class="col-md-6 col-lg-6 col-sm-12">

            </div>


            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="form-group">


                <button type="submit" class="btn btn-primary" id="Add">Add</button>
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
    $("#Add").on("click",function(event)
    {
      alert("djkdjd");


        event.preventDefault();

        var arr=$("#form").serializeArray();

       check=false;
         
        alert(arr);

        var obj={};
        for(int i=0;i<arr.length;i++)
        {
          if(arr[i].value=="")
          {
            check=true;
          }
            obj[arr[i].value]=arr[i].value;

        }
        // if(check)
        // {
        //   alert("Please Fill All Fields");

        // }

        alert(arr);

    })
  })
</script>
</body>