<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
   <meta name="description"
      content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
   <meta name="robots" content="noindex,nofollow">
   <title>Dashboard</title>
   <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
   <!-- Custom CSS -->
   <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="../../dist/css/style.min.css" rel="stylesheet">
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
   <!-- ============================================================== -->
   <!-- Preloader - style you can find in spinners.css -->
   <!-- ============================================================== -->
   <div class="preloader">
      <div class="lds-ripple">
         <div class="lds-pos"></div>
         <div class="lds-pos"></div>
      </div>
   </div>
   <!-- ============================================================== -->
   <!-- Main wrapper - style you can find in pages.scss -->
   <!-- ============================================================== -->
   <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
      data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
         <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin5">
               <!-- This is for the sidebar toggle which is visible on mobile only -->
               <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                  <i class="ti-menu ti-close"></i>
               </a>
               <!-- ============================================================== -->
               <!-- Logo -->
               <!-- ============================================================== -->
               <div class="navbar-brand">
                  <a href="index.html" class="logo">
                     <!-- Logo icon -->
                     <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                     </b>
                     <!--End Logo icon -->
                     <!-- Logo text -->
                     <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                     </span>
                  </a>
               </div>
               <!-- ============================================================== -->
               <!-- End Logo -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- Toggle which is visible on mobile only -->
               <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
               <!-- ============================================================== -->
               <!-- toggle and nav items -->
               <!-- ============================================================== -->
               <ul class="navbar-nav float-start me-auto">
                  <!-- ============================================================== -->
                  <!-- Search -->
                  <!-- ============================================================== -->
                  <li class="nav-item search-box">
                     <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <div class="d-flex align-items-center">
                           <i class="mdi mdi-magnify font-20 me-1"></i>
                           <div class="ms-1 d-none d-sm-block">
                              <span>Search</span>
                           </div>
                        </div>
                     </a>
                     <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                           <i class="ti-close"></i>
                        </a>
                     </form>
                  </li>
               </ul>
               <!-- ============================================================== -->
               <!-- Right side toggle and nav items -->
               <!-- ============================================================== -->
               <ul class="navbar-nav float-end">
                  <!-- ============================================================== -->
                  <!-- User profile and search -->
                  <!-- ============================================================== -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle" width="31">
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/login"><i class="ti-user me-1 ms-1"></i>Log out</a>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
         <!-- Sidebar scroll-->
         <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
               <ul id="sidebarnav">
                  <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/manajer"
                        aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard</span>
                     </a>
                  </li>
                  <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/manajer"
                        aria-expanded="false">
                        <i class="mdi mdi-arrange-bring-forward"></i>
                        <span class="hide-menu">Menu</span>
                     </a>
                  </li>
                  <li class="sidebar-item">
                     <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/manajer/laporan"
                        aria-expanded="false">
                        <i class="mdi mdi-border-none"></i>
                        <span class="hide-menu">Laporan</span>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- End Sidebar navigation -->
         </div>
         <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">
         <div class="page-breadcrumb">
            <div class="row">
               <div class="col-5 align-self-center">
                  <h4 class="page-title">Dashboard Manager</h4>
                  <a href="/manajer/export-pdf" class="btn btn-danger mt-3 mb-3">Export PDF</a>
               </div>
               
               <table class="table table-bordered">
                  <tr>
                     <th>No</th>
                     <th>Nama Pelanggan</th>
                     <th>Menu</th>
                     <th>Jumlah</th>
                     <th>Total</th>
                     <th>Nama Pegawai</th>
                     <th>Tanggal</th>
                  </tr>
                  @foreach($laporan as $lp)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $lp->nama_pelanggan }}</td>
                      <td>{{ $lp->nama_menu }}</td>
                      <td>{{ $lp->jumlah }}</td>
                      <td>{{ 'Rp ' . number_format($lp->total_harga) }}</td>
                      <td>{{ $lp->nama_pegawai }}</td>
                      <td>{{ date('d-m-Y', strtotime($lp->created_at)) }}</td>
                  </tr>
                  @endforeach
               </table>
            </div>
         </div>
         <footer class="footer text-center">
            All Rights Reserved by Nice admin. Designed and Developed by
            <a href="https://www.wrappixel.com">WrapPixel</a>.
         </footer>
      </div>
   </div>
   <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap tether Core JavaScript -->
   <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <!-- slimscrollbar scrollbar JavaScript -->
   <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
   <!--Wave Effects -->
   <script src="../../dist/js/waves.js"></script>
   <!--Menu sidebar -->
   <script src="../../dist/js/sidebarmenu.js"></script>
   <!--Custom JavaScript -->
   <script src="../../dist/js/custom.min.js"></script>
   <!--This page JavaScript -->
   <!--chartis chart-->
   <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
   <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
   <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>