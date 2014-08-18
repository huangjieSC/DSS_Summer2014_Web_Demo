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
        #p1{text-align: center;}
   #p1,#ul1{font-size: 14pt;}
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
     
     <div style="text-align: center">
    
        <?php
  $sub =  $_GET['sub_folder'];
$current_dir = 'test_file/'.$sub.'/';
$dir = opendir($current_dir);

echo '<p id="p1">File Listing:</p><ul id="ul1">';

while(false !== ($file = readdir($dir))){
    //strip out the two entries of . and ..
    if($file != "." && $file != "..")
    {
      if (is_dir($current_dir.$file)){
           echo '<li><p>/'.$file.'/</p><ul>';
            if ($dh = opendir($current_dir.$file)){
                while (($file3 = readdir($dh)) !== false){
                    if($file3 != "." && $file3 != ".."){
                     //  echo "true";
                         $downloadFile3 = $current_dir.$file.'/'.$file3;
                         echo "<li><a href='{$downloadFile3}'>{$file3}</a></li>";
                    }
                }
                 echo '</ul></li>';
            closedir($dh);
            }
  }
       else{
      //  if($file != "." && $file != "..")
  	//{
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

