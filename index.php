<?php
    require_once('db/koneksi.php');
    
    //include_once('component/ipmac/get_ip_mac.php'); //mengambil ip dan mac address
    
    if(!isset($_SESSION['id']))
    {
        header('location:login.php');
    }
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require_once 'css_library.php' ?>
        <?php require_once 'theme_init.php' ?>
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> Admin Produk</div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> <span class="name">
    			      <?php echo $_SESSION['nama']; ?>
    			    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="page/logout.php"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <?php include 'sidebar.php' ?>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                
                <?php                               
                if(isset($_GET['page']))
                    {
                        $pagee  = mysqli_real_escape_string($link, $_GET['page']);
                        $page   = htmlentities($pagee);
                    }
                    else
                    {
                        $page = "home.php";
                    }

                $file   = "page/$page.php";
                $cek    = strlen($page);

                    
                if($cek>30 || !file_exists($file) || empty($page))
                    {
                        require_once ("page/home.php");
                    }
                    else
                    {
                        require_once ($file);
                    }           
                ?> 

                

            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <?php require_once 'js_library.php' ?>
    </body>

</html>