<?php
    include_once 'successful_login.php';
    
    require 'database.php';
    $username = $_SESSION['login_username'];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users WHERE username like  '$username'";
    $q = $pdo->prepare($sql);
    $q->execute();
    $user = $q->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>

<html lang="en">
    <head>
      <title>Inter-Pacific Study and Migration Consultancy - Information System</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="./jquery-timepicker-1.3.2/jquery.timepicker.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="./jquery-timepicker-1.3.2/jquery.timepicker.min.css"></script>

      <link rel="stylesheet" href="./css_2/custom_style.css">
      <!-- Date picker-->
    <link rel="stylesheet" href="css_2/datepicker.css">
    <link rel="stylesheet" href="css_2/bootstrap-datetimepicker.min.css">

    <style>
        .panel {
            border: 1px solid #1a8cff; 
            border-radius:0;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-heading {
            color: #fff !important;
            background-color: #1a8cff !important;
            padding: 10px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        
        .panel:hover .panel-heading {
            color: #fff !important;
            background-color: #0066cc !important;
        }
        
        /* Add a dark background color to the footer */
        footer {
            background-color: #2d2d30;
            color: #f5f5f5;
            padding: 10px;
        }

        footer a {
            color: #f5f5f5;
        }

        footer a:hover {
            color: #777;
            text-decoration: none;
        }
        
        img {
            opacity: 0.8;
            filter: alpha(opacity=40); 
        }

        img:hover {
            opacity: 1.0;
            filter: alpha(opacity=100); 
        }
        .notification-container {
                    position: relative;
                    top: 0;
                    left: 0;
                }

                .notification-counter {   
                    position: absolute;
                    top: 25px;
                    left: 30px;
                    
                    background-color: rgba(212, 19, 13, 1);
                    color: #fff;
                    border-radius: 3px;
                    padding: 3px 3px 3px 3px;
                    font: 10px Verdana;
                }
                
                h4{
                    margin: 0;
                }
        </style>
        </head>
	<body>
        <!--HEADER-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                     
                    </button>
                    <a class="navbar-brand">
                        <img src="img/logo.png" id="brand-image" alt="IPSMC Logo" width="90" height="90" />
                    </a>
                </div>	
                <div class="collapse navbar-collapse" id="myNavbar"">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        
                        <?php if($user['usertype'] == 'Admin'){?>
                        
                        <li class="dropdown menus">
                            <a href="#" data-toggle="dropdown ">Entries</a>
                            <ul class="dropdown-menu submenus">
                                
                                <li><a href="visa_application.php" >Visa Application</a></li>
                                <li><a href="new_school.php">Colleges/Universities</a></li>
                                <li><a href="new_program.php">Program of Study</a></li>  
                                
                            </ul>
                        </li>
                        <?php } ?> 
                        <li class="dropdown menus">
                            <a href="#" data-toggle="dropdown ">List</a>
                            <ul class="dropdown-menu submenus">
                                <?php if($user['usertype'] == 'Admin'){?>
                                            <li><a href="users_view.php" >Users</a></li>
                                        
                                <?php } ?>  
                                <li><a href="client_view.php">Student/Tourist</a></li>
                                <li><a href="school_view.php">Colleges/Universities</a></li>
                                <li><a href="program_view.php">Program of Study</a></li>  
                            </ul>
                        </li>
                        <li class="dropdown menus">
                            <a href="#" data-toggle="dropdown">Matching</a>
                            <ul class="dropdown-menu submenus">
                                <li><a href="student_matching.php">Student</a></li>
                                <li><a href="tourist_matching.php">Tourist</a></li>
                            </ul>
                        </li>
                         <?php if($user['usertype'] == 'Admin'){ ?>
                        <li><a href="reports.php">Reports</a></li>
                         <?php } ?>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    
                        <li><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

                    </ul>

                </div>  
        </nav>

        <div class="container-fluid page_title_container">
        <div>
            <h1></h1>
        </div>
    </div> 
    <div class="container-fluid page_title_container">
        <div>
            <h1></h1>
        </div>
    </div> 
    </body>
</html>