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
        <div class="container-fluid dashboard-default-sec">
          <div class="row">

            <div class="col-xl-12 recent-order-sec">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <h5>Users</h5>
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                            <th>
                              <div class="setting-list">
                                <ul class="list-unstyled setting-option">
                                  <li>
                                    <div class="setting-primary"><i class="icon-settings"> </i></div>
                                  </li>
                                  <li><i class="view-html fa fa-code font-primary"></i></li>
                                  <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                  <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                  <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                  <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                </ul>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-1.png" alt="" data-original-title="" title="">
                                <div class="media-body"><a href="product-page.html"><span>Yellow New Nike
                                      shoes</span></a></div>
                              </div>
                            </td>
                            <td>
                              <p>16 August</p>
                            </td>
                            <td>
                              <p>54146</p>
                            </td>
                            <td><img class="img-fluid" src="../assets/images/dashboard/graph-1.png" alt="" data-original-title="" title=""></td>
                            <td>
                              <p>$210326</p>
                            </td>

                          </tr>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-2.png" alt="" data-original-title="" title="">
                                <div class="media-body"><a href="product-page.html"><span>Sony Brand New
                                      Headphone</span></a></div>
                              </div>
                            </td>
                            <td>
                              <p>2 October</p>
                            </td>
                            <td>
                              <p>32015</p>
                            </td>
                            <td><img class="img-fluid" src="../assets/images/dashboard/graph-2.png" alt="" data-original-title="" title=""></td>
                            <td>
                              <p>$548526</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-3.png" alt="" data-original-title="" title="">
                                <div class="media-body"><a href="product-page.html"><span>Beautiful Golden Tree
                                      plant</span></a></div>
                              </div>
                            </td>
                            <td>
                              <p>21 March</p>
                            </td>
                            <td>
                              <p>12548</p>
                            </td>
                            <td><img class="img-fluid" src="../assets/images/dashboard/graph-3.png" alt="" data-original-title="" title=""></td>
                            <td>
                              <p>$589565</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-4.png" alt="" data-original-title="" title="">
                                <div class="media-body"><a href="product-page.html"><span>Marco M Kely
                                      Handbeg</span></a></div>
                              </div>
                            </td>
                            <td>
                              <p>31 December</p>
                            </td>
                            <td>
                              <p>15495</p>
                            </td>
                            <td><img class="img-fluid" src="../assets/images/dashboard/graph-4.png" alt="" data-original-title="" title=""></td>
                            <td>
                              <p>$125424 </p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                <div class="media-body"><a href="product-page.html"><span>Being Human Branded T-Shirt
                                    </span></a></div>
                              </div>
                            </td>
                            <td>
                              <p>26 January</p>
                            </td>
                            <td>
                              <p>56625</p>
                            </td>
                            <td><img class="img-fluid" src="../assets/images/dashboard/graph-5.png" alt="" data-original-title="" title=""></td>
                            <td>
                              <p>$112103</p>
                            </td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            
            
          </div>
        </div>

      </div>
        
            <?php

include 'Footer.php';

?>
        </div>
    </div>

   <?php
include 'JSCdn.php';


?>


</body>