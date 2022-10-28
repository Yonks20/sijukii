<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DashboardKit Bootstrap 5 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project." />
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template" />
    <meta name="author" content="DashboardKit " />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon" />

    <!-- font css -->
    <link rel="stylesheet" href="assets/fonts/feather.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/fonts/material.css" />

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link" />
  </head>

  <body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
      <div class="pcm-logo">
        <img src="assets/images/logo.svg" alt="" class="logo logo-lg" />
      </div>
      <div class="pcm-toolbar">
        <a href="#!" class="pc-head-link" id="mobile-collapse">
          <div class="hamburger hamburger--arrowturn">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </a>
        <a href="#!" class="pc-head-link" id="headerdrp-collapse">
          <i data-feather="align-right"></i>
        </a>
        <a href="#!" class="pc-head-link" id="header-collapse">
          <i data-feather="more-vertical"></i>
        </a>
      </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar">
      <div class="navbar-wrapper">
        <div class="m-header">
          <a href="index.html" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="assets/images/logo.svg" alt="" class="logo logo-lg" />
            <img src="assets/images/logo-sm.svg" alt="" class="logo logo-sm" />
          </a>
        </div>
        <div class="navbar-content">
          <ul class="pc-navbar">
            <li class="pc-item pc-caption">
              <label>Navigation</label>
            </li>
            <li class="pc-item">
              <a href="superadmin.php" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">home</i></span
                ><span class="pc-mtext">Dashboard</span></a
              >
            </li>
           
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">business_center</i></span
                ><span class="pc-mtext">Basic</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="bc_alert.html">Alert</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_button.html">Button</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_badges.html">Badges</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_card.html">Cards</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_collapse.html">Collapse</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_carousel.html">Carousel</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_progress.html">Progress</a></li>
                <li class="pc-item"><a class="pc-link" href="bc_modal.html">Modal</a></li>

                <li class="pc-item"><a class="pc-link" href="bc_typography.html">Typography</a></li>
              </ul>
            </li>
            <li class="pc-item">
              <a href="icon-feather.html" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">history_edu</i></span
                ><span class="pc-mtext">Icons</span></a
              >
            </li>
            <li class="pc-item pc-caption">
              <label>Forms</label>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">edit</i></span
                ><span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="form_elements.html">Form Basic</a></li>
                <li class="pc-item"><a class="pc-link" href="form2_input_group.html">Input Groups</a></li>
                <li class="pc-item"><a class="pc-link" href="form2_checkbox.html">Checkbox</a></li>
                <li class="pc-item"><a class="pc-link" href="form2_radio.html">Radio</a></li>
              </ul>
            </li>
            <li class="pc-item pc-caption">
              <label>table</label>
            </li>
            <li class="pc-item">
              <a href="tbl_bootstrap.html" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">table_rows</i></span
                ><span class="pc-mtext">Bootstrap table</span></a
              >
            </li>
            <li class="pc-item pc-caption">
              <label>Chart & Maps</label>
              <span>Tones of readymade charts</span>
            </li>
            <li class="pc-item">
              <a href="chart-apex.html" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">bubble_chart</i></span
                ><span class="pc-mtext">Chart</span></a
              >
            </li>
            <li class="pc-item">
              <a href="map-google.html" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">my_location</i></span
                ><span class="pc-mtext">Maps</span></a
              >
            </li>
            <li class="pc-item pc-caption">
              <label>Pages</label>
              <span>Redymade Pages</span>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">https</i></span
                ><span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="auth-signup.html" target="_blank">Sign up</a></li>
                <li class="pc-item"><a class="pc-link" href="auth-signin.html" target="_blank">Sign in</a></li>
              </ul>
            </li>
            <li class="pc-item pc-caption">
              <label>Other</label>
              <span>Extra more things</span>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span
                ><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Menu Level 2.1</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Menu level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                    <li class="pc-item pc-hasmenu">
                      <a href="#!" class="pc-link"
                        >Menu level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                      ></a>
                      <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Menu level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                    <li class="pc-item pc-hasmenu">
                      <a href="#!" class="pc-link"
                        >Menu level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                      ></a>
                      <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item">
              <a href="sample-page.html" class="pc-link"
                ><span class="pc-micon"><i class="material-icons-two-tone">storefront</i></span
                ><span class="pc-mtext">Sample page</span></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header">
      <div class="header-wrapper">
        <div class="mr-auto pc-mob-drp">
          <ul class="list-unstyled">
            <li class="dropdown pc-h-item">
              <a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Level </a>
              <div class="dropdown-menu pc-h-dropdown">
                <a href="#!" class="dropdown-item">
                  <i class="material-icons-two-tone">account_circle</i>
                  <span>My Account</span>
                </a>
                <div class="pc-level-menu">
                  <a href="#!" class="dropdown-item">
                    <i class="material-icons-two-tone">list_alt</i>
                    <span class="float-right"><i data-feather="chevron-right" class="mr-0"></i></span>
                    <span>Level2.1</span>
                  </a>
                  <div class="dropdown-menu pc-h-dropdown">
                    <a href="#!" class="dropdown-item">
                      <i class="fas fa-circle"></i>
                      <span>My Account</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="fas fa-circle"></i>
                      <span>Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="fas fa-circle"></i>
                      <span>Support</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="fas fa-circle"></i>
                      <span>Lock Screen</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="fas fa-circle"></i>
                      <span>Logout</span>
                    </a>
                  </div>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="material-icons-two-tone">settings</i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="material-icons-two-tone">support</i>
                  <span>Support</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="material-icons-two-tone">https</i>
                  <span>Lock Screen</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="material-icons-two-tone">chrome_reader_mode</i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="ml-auto">
          <ul class="list-unstyled">
            <li class="dropdown pc-h-item">
              <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="material-icons-two-tone">search</i>
              </a>
              <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                <form class="px-3">
                  <div class="form-group mb-0 d-flex align-items-center">
                    <i data-feather="search"></i>
                    <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
                  </div>
                </form>
              </div>
            </li>
            <li class="dropdown pc-h-item">
              <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
                <span>
                  <span class="user-name">Joseph William</span>
                  <span class="user-desc">Administrator</span>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                <div class="dropdown-header">
                  <h5 class="text-overflow m-0">
                    <span class="badge bg-light-primary"><a href="https://gumroad.com/dashboardkit" target="_blank">Upgrade to Pro</a></span>
                  </h5>
                </div>

                <a href="auth-signin.html" class="dropdown-item">
                  <i class="material-icons-two-tone">chrome_reader_mode</i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="page-header-title">
                  <h5 class="m-b-10">Dashboard sale</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Dashboard sale</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- support-section start -->
          <div class="col-xl-6 col-md-12">
            <div class="card flat-card">
              <div class="row-table">
                <div class="col-sm-6 card-body br">
                  <div class="row">
                    <div class="col-sm-4">
                      <i class="material-icons-two-tone text-primary mb-1">group</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                      <h5>1000</h5>
                      <span>Customers</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                  <div class="row">
                    <div class="col-sm-4">
                      <i class="material-icons-two-tone text-primary mb-1">language</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                      <h5>$1252</h5>
                      <span>Revenue</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <i class="material-icons-two-tone text-primary mb-1">unarchive</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                      <h5>600</h5>
                      <span>Growth</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-table">
                <div class="col-sm-6 card-body br">
                  <div class="row">
                    <div class="col-sm-4">
                      <i class="material-icons-two-tone text-primary mb-1">swap_horizontal_circle</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                      <h5>3550</h5>
                      <span>Returns</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                  <div class="row">
                    <div class="col-sm-4">
                      <i class="material-icons-two-tone text-primary mb-1">cloud_download</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                      <h5>3550</h5>
                      <span>Downloads</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <i class="material-icons-two-tone text-primary mb-1">shopping_cart</i>
                    </div>
                    <div class="col-sm-8 text-md-center">
                      <h5>100%</h5>
                      <span>Order</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card support-bar overflow-hidden">
                  <div class="card-body pb-0">
                    <h2 class="m-0">53.94%</h2>
                    <span class="text-primary">Conversion Rate</span>
                    <p class="mb-3 mt-3">Number of conversions divided by the total visitors.</p>
                  </div>
                  <div id="support-chart"></div>
                  <div class="card-footer border-0 bg-primary text-white background-pattern-white">
                    <div class="row text-center">
                      <div class="col">
                        <h4 class="m-0 text-white">10</h4>
                        <span>2018</span>
                      </div>
                      <div class="col">
                        <h4 class="m-0 text-white">15</h4>
                        <span>2017</span>
                      </div>
                      <div class="col">
                        <h4 class="m-0 text-white">13</h4>
                        <span>2016</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card support-bar overflow-hidden">
                  <div class="card-body pb-0">
                    <h2 class="m-0">1432</h2>
                    <span class="text-primary">Order delivered</span>
                    <p class="mb-3 mt-3">Total number of order delivered in this month.</p>
                  </div>
                  <div class="card-footer border-0">
                    <div class="row text-center">
                      <div class="col">
                        <h4 class="m-0">130</h4>
                        <span>May</span>
                      </div>
                      <div class="col">
                        <h4 class="m-0">251</h4>
                        <span>June</span>
                      </div>
                      <div class="col">
                        <h4 class="m-0">235</h4>
                        <span>July</span>
                      </div>
                    </div>
                  </div>
                  <div id="support-chart1"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Department wise monthly sales report</h5>
              </div>
              <div class="card-body">
                <div class="row pb-2">
                  <div class="col-auto m-b-10">
                    <h3 class="mb-1">$21,356.46</h3>
                    <span>Total Sales</span>
                  </div>
                  <div class="col-auto m-b-10">
                    <h3 class="mb-1">$1935.6</h3>
                    <span>Average</span>
                  </div>
                </div>
                <div id="account-chart"></div>
              </div>
            </div>
          </div>
          <!-- support-section end -->
          <!-- customer-section start -->
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-body">
                <h6>Customer Satisfaction</h6>
                <span>It takes continuous effort to maintain high customer satisfaction levels Internal and external.</span>
                <div class="row d-flex justify-content-center align-items-center">
                  <div class="col">
                    <div id="satisfaction-chart"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card table-card">
              <div class="card-header">
                <h5>New Products</h5>
              </div>
              <div class="pro-scroll" style="height: 255px; position: relative">
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>HeadPhone</td>
                          <td><img src="assets/images/widget/p1.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-warning">Pending</label></div>
                          </td>
                          <td>$10</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Iphone 6</td>
                          <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-danger">Cancel</label></div>
                          </td>
                          <td>$20</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Jacket</td>
                          <td><img src="assets/images/widget/p3.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-success">Success</label></div>
                          </td>
                          <td>$35</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Sofa</td>
                          <td><img src="assets/images/widget/p4.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-danger">Cancel</label></div>
                          </td>
                          <td>$85</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Iphone 6</td>
                          <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-success">Success</label></div>
                          </td>
                          <td>$20</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>HeadPhone</td>
                          <td><img src="assets/images/widget/p1.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-warning">Pending</label></div>
                          </td>
                          <td>$50</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Iphone 6</td>
                          <td><img src="assets/images/widget/p2.jpg" alt="" class="img-20" /></td>
                          <td>
                            <div><label class="badge bg-light-danger">Cancel</label></div>
                          </td>
                          <td>$30</td>
                          <td>
                            <a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="row">
              <div class="col-sm-6">
                <div class="card prod-p-card background-pattern">
                  <div class="card-body">
                    <div class="row align-items-center m-b-0">
                      <div class="col">
                        <h6 class="m-b-5">Total Profit</h6>
                        <h3 class="m-b-0">$1,783</h3>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons-two-tone text-primary">card_giftcard</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card prod-p-card bg-primary background-pattern-white">
                  <div class="card-body">
                    <div class="row align-items-center m-b-0">
                      <div class="col">
                        <h6 class="m-b-5 text-white">Total Orders</h6>
                        <h3 class="m-b-0 text-white">15,830</h3>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons-two-tone text-white">local_mall</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card prod-p-card bg-primary background-pattern-white">
                  <div class="card-body">
                    <div class="row align-items-center m-b-0">
                      <div class="col">
                        <h6 class="m-b-5 text-white">Average Price</h6>
                        <h3 class="m-b-0 text-white">$6,780</h3>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons-two-tone text-white">monetization_on</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card prod-p-card background-pattern">
                  <div class="card-body">
                    <div class="row align-items-center m-b-0">
                      <div class="col">
                        <h6 class="m-b-5">Product Sold</h6>
                        <h3 class="m-b-0">6,784</h3>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons-two-tone text-primary">local_offer</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card feed-card">
              <div class="card-header">
                <h5>Feeds</h5>
              </div>
              <div class="feed-scroll" style="height: 385px; position: relative">
                <div class="card-body">
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">30 min ago</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">1 hours ago</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">You have 2 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">4 hours ago</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">New order Done <span class="text-muted float-right f-14">Just Now</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">You have 5 pending tasks. <span class="text-muted float-right f-14">5 hours ago</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="row m-b-0 align-items-center">
                    <div class="col-auto p-r-0">
                      <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">2 hours ago</span></h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- customer-section end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
      <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br />to any of the following web browsers to access this website.</p>
        <div class="iew-container">
          <ul class="iew-download">
            <li>
              <a href="http://www.google.com/chrome/">
                <img src="assets/images/browser/chrome.png" alt="Chrome" />
                <div>Chrome</div>
              </a>
            </li>
            <li>
              <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="assets/images/browser/firefox.png" alt="Firefox" />
                <div>Firefox</div>
              </a>
            </li>
            <li>
              <a href="http://www.opera.com">
                <img src="assets/images/browser/opera.png" alt="Opera" />
                <div>Opera</div>
              </a>
            </li>
            <li>
              <a href="https://www.apple.com/safari/">
                <img src="assets/images/browser/safari.png" alt="Safari" />
                <div>Safari</div>
              </a>
            </li>
            <li>
              <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="assets/images/browser/ie.png" alt="" />
                <div>IE (11 & above)</div>
              </a>
            </li>
          </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
      </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    <!-- <script src="assets/js/uikit.min.js"></script> -->

    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script>
      $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
    </script>

    <!-- custom-chart js -->
    <script src="assets/js/pages/dashboard-sale.js"></script>
  </body>
</html>
