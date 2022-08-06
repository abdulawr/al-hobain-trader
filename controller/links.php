<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="journal.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>AB</b>H</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Al-Hobaib</b>Trader`s</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/icon2.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">Al-Hobaib Trader</span>
                                
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header" >
                                    <img src="dist/img/icon2.png" class="img-circle" alt="User Image">

                                    <p style="font-size:14px;">
                                       The system is developed by Abdul Basit (Software Engineer and Application Developer)
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer" style="width: 100%;">
                                <div class="pull-right"  style="width: 100%; ">
                                        <a href="AddBalance.php" class="btn btn-default btn-flat"  style="width: 100%;">Add Balance</a>
                                    </div>

                                    <div class="pull-right"  style="width: 100%;  margin-top:10px;">
                                        <a href="updateFBR_Rate.php" class="btn btn-default btn-flat"  style="width: 100%;">Update FBR Rate</a>
                                    </div>

                                <div class="pull-right"  style="width: 100%; margin-top:10px;">
                                        <a  style="width: 100%;" href="balanceSheet.php" class="btn btn-default btn-flat">Change Password</a>
                                    </div>
                                
                                    <div class="pull-right"  style="width: 100%; margin-top:10px;">
                                        <a href="model/signout.php" class="btn btn-default btn-flat"  style="width: 100%;">Sign out</a>
                                    </div>

                                </li>
                                
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li <?php if($array[0]){echo 'class="active treeview"';}?>><a href="journal.php"><i class="<?php if($array[0]){echo 'active';}?> fa fa-bookmark"></i> <span>Journal</span></a></li>
                    <li <?php if($array[1]){echo 'class="active treeview"';}?>><a href="ledger.php"><i class="<?php if($array[1]){echo 'active';}?> fa fa-table"></i> <span>Ledger</span></a></li>
                    <li <?php if($array[2]){echo 'class="active treeview"';}?>><a href="cash.php"><i class="<?php if($array[2]){echo 'active';}?> fa fa-usd"></i> <span>Cash Book</span></a></li>
                    <li <?php if($array[3]){echo 'class="active treeview"';}?>><a href="view_cash.php"><i class="<?php if($array[3]){echo 'active';}?> fa fa-indent"></i> <span>View Cash Book</span></a></li>
                    <li <?php if($array[4]){echo 'class="active treeview"';}?>><a href="monthly_report.php"><i class="<?php if($array[4]){echo 'active';}?> fa fa-bars"></i> <span>Monthly Report</span></a></li>
                    <li <?php if($array[5]){echo 'class="active treeview"';}?>><a href="fbr_report.php"><i class="<?php if($array[5]){echo 'active';}?> fa fa-building"></i> <span>FBR Report</span></a></li>
                    <li <?php if($array[8]){echo 'class="active treeview"';}?>><a href="search_dealer.php"><i class="<?php if($array[8]){echo 'active';}?> fa fa-search"></i> <span>Search Dealer</span></a></li>
                    <li <?php if($array[9]){echo 'class="active treeview"';}?>><a href="search_location.php" "><i class="<?php if($array[9]){echo 'active';}?> fa fa-map-marker "></i> <span>Search Location</span></a></li>
                    <li <?php if($array[6]){echo 'class="active treeview"';}?>><a href="add_dealer.php"><i class="<?php if($array[6]){echo 'active';}?> fa fa-user-plus"></i> <span>Add Dealer</span></a></li>
                    <li <?php if($array[7]){echo 'class="active treeview"';}?>><a href="addLocation.php"><i class="<?php if($array[7]){echo 'active';}?> fa fa-globe"></i> <span>Add Location</span></a></li>
                    <li <?php if($array[10]){echo 'class="active treeview"';}?>><a href="view_dealer_list.php"><i class="<?php if($array[10]){echo 'active';}?> fa fa-users"></i> <span>View Dealer List</span></a></li>
                   
       
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">
            <!-- Content Header (Page header) -->
            <section class="content-header ">
                <h1>
                    <?php echo $title;?>
                    <small><?php echo $sub;?></small>
                </h1>
            </section>
