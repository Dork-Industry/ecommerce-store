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
            <!-- Page Sidebar Start-->
            
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php

include 'Footer.php';

?>
        </div>
    </div>

   <?php
include 'JSCdn.php';


?>
</body>