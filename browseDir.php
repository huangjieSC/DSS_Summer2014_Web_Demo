<?php
session_start();
if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != TRUE){

header("Location: demo.php");
}
if(isset($_GET['logout']))
{
	unset($_SESSION['logged_in']);
        header("Refresh: 0");
}
if (isset($_SESSION['logged_in'])) {
}
?>

<html>
<head>
  <title>Browse Directories</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <meta charset="utf-8">
  <title>Login - Safety Section</title>
  <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.css">
  <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.min.css">
  <link rel="stylesheet" href="style_css/style.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
  <style>
    .button:hover {
        border: none;
        text-decoration: underline;
    }
   /* .commentAreaBtn{font-size: 14pt; border-radius: 5px; background-color: #C0D4FF; width: 400px;}*/
   #browse{font-size: 16pt; float: right;text-decoration: underline; margin-top: -40px; color: green;}
   #p1{text-align: center;}
   #p1,#ul1{font-size: 14pt;}
  </style>
  </style>
</head>
<body>
    <div id="demoHead" class="top-bar">
        <a href="Demo_27_Jie.php" style="color: white;text-decoration: none;">
                <h1 class="middle3">Child and Family Services Reviews</h1>
                <h1 class="middle3">Onsite Review Instrument and Instructions</h1>
                <div class="top-bar-end"></div>
        </a>
    </div>
     <a style="float:right;" href="?logout=true"><span style="font-size: 16pt;color: red;">Logout?</span></a>
            
            <?php
                echo '
                <h1>Welcome, '.$_SESSION['login_user'].'! </h1>';
            ?>
     <div style="text-align: center;">
        <h1 style="text-align: center;">Browsing</h1>
        <?php
            $current_dir = 'test_file/';
            $dir = opendir($current_dir);
  
            echo '<p id="p1">Directory Listing:</p><ul id="ul1">';
  
            while(false !== ($file = readdir($dir))){
    //strip out the two entries of . and ..
                if($file != "." && $file != "..")
                {
                    if (is_dir($current_dir.$file)){
                        echo '<li><a href="sub.php?sub_folder='.$file.'">Go to '.$file.'</a></li>';
                    }
                    else{
                        $downloadFile = $current_dir.$file;
                        echo "<li><a href='{$downloadFile}'>{$file}</a></li>";
                    }
                }
            }  
            echo '</ul>';
            closedir($dir);
        ?>
      </div>
</body>
</html>
