<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="libs/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li >
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                        
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-database"></i> <span class="nav-label">Product</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <!-- <li class="active"><a href="index.html">Dashboard v.1</a></li>
                            <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                            <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                            <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                            <li><a href="dashboard_5.html">Dashboard v.5 </a></li> -->
                            <li><a href="./getProductsByBand">Tìm kiếm tổng hợp</a></li>
                            <li><a href="./ProductController/getOrderCustomer">Order Customer</a></li>
                            
                            <?php
                            // require_once './MVC/models/ProductModel.php';
                            // $productModel = new ProductModel();
                            // $result = $productModel->getRecords("tblcategory_product");
                            // while ($row = mysqli_fetch_assoc($result)){
                            //     $categoryName = $row['category_name'];
                            //     $categoryLink = $row['category_link'];
                            //     echo "<li> <a href='$categoryLink'> $categoryName</a></li>";
                            // }                          
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                            <li><a href="c3.html">c3 charts</a></li>
                            <li><a href="graph_peity.html">Peity Charts</a></li>
                            <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>