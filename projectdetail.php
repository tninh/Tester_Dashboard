<!DOCTYPE html>
<?php
SESSION_START();
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once("config.php");?>
    <title>Projects</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Tester Manager</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Tri Ninh</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Projects <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="projects.php">All Projects</a></li>
                      <li><a href="projectdetail.php">Current Project</a></li>
                     </ul>
                    </li>  
                  </li>
                  <li><a href="ranking.php"><i class="fa fa-edit"></i> Ranking <span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a href="report.php"><i class="fa fa-desktop"></i> Report <span class="fa fa-chevron-right"></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Tri Ninh
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>

                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Testers</span>
              <div class="count">5</div>
              <span class="count_bottom"><i class="green">15% </i> From last Week</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>List of Projects</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                  <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <!-- <th>
                            <input type="checkbox" id="check-all" class="flat">
                          </th> -->
                          <th class="column-title">ID </th>
                          <th class="column-title">Name </th>
                          <th class="column-title">Description </th>
                          <th class="column-title">Tool </th>
                          <!-- <th class="column-title">Status </th>
                          <th class="column-title">Amount </th> -->
                          <!-- <th class="column-title no-link last"><span class="nobr">Action</span>
                          </th> -->
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        <!-- <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000040</td>
                          <td class=" ">May 23, 2014 11:47:56 PM </td>
                          <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$7.45</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000039</td>
                          <td class=" ">May 23, 2014 11:30:12 PM</td>
                          <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                          </td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$741.20</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000038</td>
                          <td class=" ">May 24, 2014 10:55:33 PM</td>
                          <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                          </td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$432.26</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000037</td>
                          <td class=" ">May 24, 2014 10:52:44 PM</td>
                          <td class=" ">121000204</td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$333.21</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000040</td>
                          <td class=" ">May 24, 2014 11:47:56 PM </td>
                          <td class=" ">121000210</td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$7.45</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000039</td>
                          <td class=" ">May 26, 2014 11:30:12 PM</td>
                          <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                          </td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$741.20</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000038</td>
                          <td class=" ">May 26, 2014 10:55:33 PM</td>
                          <td class=" ">121000203</td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$432.26</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000037</td>
                          <td class=" ">May 26, 2014 10:52:44 PM</td>
                          <td class=" ">121000204</td>
                          <td class=" ">Mike Smith</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$333.21</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>

                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000040</td>
                          <td class=" ">May 27, 2014 11:47:56 PM </td>
                          <td class=" ">121000210</td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$7.45</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">121000039</td>
                          <td class=" ">May 28, 2014 11:30:12 PM</td>
                          <td class=" ">121000208</td>
                          <td class=" ">John Blank L</td>
                          <td class=" ">Paid</td>
                          <td class="a-right a-right ">$741.20</td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr> -->
                        <?php
                          try
                            {
                              $conn = getPDOConnection();
                              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                              $username = $_SESSION['user']; 
                            $query = " SELECT * from projects WHERE proj_id = (SELECT proj_id from user WHERE username = '$username') ";

                              //$params = array(':id' => $id);
                              $data = $conn -> query($query);
                            $data->setFetchMode(PDO::FETCH_ASSOC);


                              foreach ($data as $row) {
                                echo '<tr><td class=\"col-md-2\"><a href="index.php?id=">' . $row["proj_id"] . '</a></td>
                                <td class=\"col-md-2\"><a href="#">' . $row["proj_name"] . '</a></td>
                                <td class=\"col-md-2\"><a href="#">' . $row["proj_desc"] . '</a></td>
                                <td class=\"col-md-2\"><a href="#">' . $row["proj_tool"] . '</a></td>
                                </tr>';
                              }
                              }catch (Exception $ex)
                                {
                                      echo 'ERROR: ' . $ex->getMessage();
                                }


                            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="drop-down">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tools<span class="fa fa-chevron-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </div>
              </div>


                            <div class="col-md-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Log a Bug <small>in this project</small></h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <br />
                                  <form class="form-horizontal form-label-left" action="#" method="POST">

                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Bug Name</label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="bugName" placeholder="Bug Name">
                                      </div>
                                    </div>
                                    <!-- <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                      </div>
                                    </div> -->
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Bug Description <span class="required">*</span>
                                      </label>
                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="5" name="bugDesc" value="bugDesc" placeholder='Description'></textarea>
                                      </div>
                                    </div>


                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary">Cancel</button>
                                        <!-- <button type="reset" class="btn btn-primary">Reset</button> -->
                                        <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                                      </div>
                                    </div>

                                  </form>
                                </div>
                              </div>
                            </div>
                            <?php
                              extract($_POST);
                              if(isset($_POST['submit']))
                              {

                              }
                            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
      Community Tester Management
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>