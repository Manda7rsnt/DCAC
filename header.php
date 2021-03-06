<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DCAC</title>

        <!-- Styles -->
        <link href="fonts.googleapis.com/css.css" rel="stylesheet" type="text/css"><!-- Google web fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
        <link href="js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
        <link href="js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
        <link href="js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
        <link href="css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
        <link href="css/nav-tabs.css" rel="stylesheet" type="text/css"><!-- theme styles -->
            <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prism.css" rel="stylesheet" />
    <link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

    </head>
    
    <style>
    


.styledrow{
    
    padding: 30px 0px 30px 0px;
}
  .college{
  text-align: left;
  color: #3C566C;
  font-family: 'Oswald';
  font-size: 40px;
  
  font-weight: 400;
  margin: 40px 0px 20px 0px;

}

.university{
  text-align: left;
  font-color: #f85c37;
  font-family: 'Raleway';
  font-size: 28px;
  font-weight: 600;
  margin: 30px 0px 40px 0px;

}

.logo {
  margin: 30px auto;
  text-align: center;
}

header{
    background-image: url("textures/light_wool.png");
}

.bg-color{
  background-color: #ffffff;
}

body {
	background-image: url("textures/light_wool.png");
}
        
        
        
::-webkit-scrollbar {
	width: 8px;
}

::-webkit-scrollbar-track {
	background-color: #121212;
} 

::-webkit-scrollbar-thumb {
	background-color: #f85c37;
	-webkit-border-radius: 2px;
	   -moz-border-radius: 2px;
	    -ms-border-radius: 2px;
		 -o-border-radius: 2px;
			border-radius: 2px;
} 

::-webkit-scrollbar-button {
	display: none;
} 

::-webkit-scrollbar-corner {
	background-color: #000000;
}

#scrollUp {
	bottom: 20px;
	right: 20px;
	height: 38px;  /* Height of image */
	width: 38px; /* Width of image */
	background: url(../img/top.png) no-repeat;
}
        <!---->
        <!---->
        
        <!---->
        <!---->
        
</style>

<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

    <body role="document">

        <!-- device test, don't remove. javascript needed! -->
        <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
        <!-- device test end -->
        
        <!---->
         <header class='header'>  
            
            <div class='header-main container'>
                <div class='logo col-md-2 col-sm-2'>
                    <a href="index.php"><img src="img/logo.gif"></a>
                    
                </div><!--//logo-->           
                <div class='col-md-8 col-sm-8'>
                    <p class='college'><a href="index.php">Delhi College of Arts and Commerce</a></h1> 
                        <p class='university'><a href = "http://www.du.ac.in/du/">University of Delhi</a></h1>
                    
                    
                <div class='col-md-2 col-sm-2'>
                </div>
                   
                </div><!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->
        <!---->




        <div id="k-body"><!-- content wrapper -->

            <div class="container"><!-- container -->

                <br>


                <!--******************************************LOG IN********************************************-->


                <!--******************************************NAVBAR********************************************-->

                <div class="navbar bg-color">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle = "collapse" data-target = ".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--a href="#" class=" navbar-brand">DCAC</a-->
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">

                            <li><a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="index-new.php" class="dropdown-toggle" data-toggle = "dropdown">About Us<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href = "PrincipalDesk.php" > Principal's Desk</a></li>
                                        <li> <a href = "history.php" > History</a></li>
                                        <li> <a href = "lifeatdcac.php" > Life at DCAC</a></li>
                                        <li> <a href = "allPDFs/AnnualReport.pdf" > Annual Report</a></li>

                                    </ul>
                                </li>
                                <!--<li><a href="faculty.php"></a>Faculty</li>-->
                                <li class="dropdown">
                                    <a href="faculty.php" class="dropdown-toggle" data-toggle = "dropdown">People<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="faculty.php" > Faculty</a></li>
                                        <li> <a href="AdministrativeStaff.php" > Administrative Staff</a></li>
                                        <li> <a href = "student.php" > Student</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Academics<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href = "admissions.php" > Admission</a></li>
                                        <li> <a href = "courses.php" > Courses</a></li>
                                        <li> <a href = "addoncourses.php" > Add On Courses</a></li>
                                        <li> <a href = "allPDFs/AcademicCalender.pdf" > Academic Calender</a></li>
                                        <li> <a href = "timetable.php" > Time Table</a></li>
                                        <li> <a href = "attendance.php" > Attendance</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Administration<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href = "commitee.php" > Commitee</a></li>
                                        <li> <a href = "allPDFs/ordinance.pdf" > Ordinance On Internal Assessment</a></li>
                                        <li> <a href = "allPDFs/ordinance1.pdf" > Ordinance On Ragging Sexual Harassment</a></li>
                                        <li> <a href = "allPDFs/Minimum_Critical_Disclosure.pdf" > Minimum Disclosure Norms</a></li>

                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle = "dropdown">Research Journal<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href = "allPDFs/Journal-I.pdf" > Intellectual Resonance Vol-I Issue No.-1</a></li>
                                        <li> <a href = "allPDFs/Journal-II.pdf" > Intellectual Resonance Vol-I Issue No.-2</a></li>
                                        <li> <a href = "allPDFs/Journal-III.pdf" > Intellectual Resonance Vol-I Issue No.-3</a></li>
                                        <li> <a href = "allPDFs/Guidelines.pdf" > Guidelines</a></li>

                                    </ul>
                                </li>

                                <li><a href="RightToInformation.php">Right to Information</a></li>

                                <li><a href="placement.php">Placement</a></li>
                                <li><a href="alumni.php">Alumni</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle = "dropdown">Login<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li> <a href = "profiles/login.php" > Faculty</a></li>
                                        <li> <a href = "profiles/admin-login.php" > Admin</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

           
