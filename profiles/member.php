<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else { include '_database/database.php';
        
?>
<!doctype html>
<?php include 'controllers/base/css.php' ?>

    <?php include 'controllers/base/font.php' ?>
<html>
<head>
<title>Admin</title>
 <div id="navigation" class="navbar navbar-default navbar-fixed-top">
	      <div class="fluid-container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
                <a class="navbar-brand" href="home.php"><b>Delhi college of Arts and Commerce</b></a>	        
            </div>
	        <div class="navbar-collapse collapse" id="navbar-collapse1">
                <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="admin-logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
                            </li>
                        
                    	
                </ul>    
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
</head>
<body>
<div class="container">
<?php $sql = "SELECT `user_id`,`user_prefix`, `user_firstname`, `user_lastname`, `user_papers`, `user_profession`, `user_password` FROM `user` WHERE 1";
    $result = mysqli_query($database,$sql) or die(mysqli_error()); 

while ($row = mysqli_fetch_array($result))  
{
    
    
    $department= $row["user_papers"];
    
    
        if($department!=$department2){
        
            
             if($num==0)
        {
        echo"<h2>"."Department of ".$department."</h2>";
            $count=0;
        
        echo '<table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Faculty Name</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>';
        $num=1;
        
    }
            else
        {    
            echo ' </tbody>
            </table>';
            
            echo"<h2>"."Department of ".$department."</h2>";
            $count=0;
            
            echo '<table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Faculty Name</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>';
            }
            
            
            
    }
    
    if($row["user_lastname"]=='lastname'){
        $row["user_lastname"]='';
    }
    
    $id=$row["user_id"];
    $count=$count+1;
   
    echo '<tr>';
    echo "<td>".$count."</td>";
    echo '<td>'.$row["user_prefix"].' '.$row["user_firstname"].' '.$row["user_lastname"].'</td>';
    
    echo '<td>'.$row["user_password"].'</td>' ;
    echo '</tr>';
    $department2=$row["user_papers"];
    
}    ?>
</div>
</body>
</html>
<?php
}
?>


