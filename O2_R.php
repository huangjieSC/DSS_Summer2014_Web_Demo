
<?php
session_start();

//include "O2_I2_Q_F.php";
//include "O2_I3_Q_F.php";
// for get data from O2_I3
//$list = $_SESSION['O2_I2'];
//$list2 = $_SESSION['O2_I3'];
  
$form_data = array();
$form_data['success'] = false;
$form_data['posted'] = 'Failed to save data. Try again! ';

$_SESSION['O2'] = isset($_SESSION['O2']) ? $_SESSION['O2'] : array();

 $list3 = array ();
 $list3[' '] = ' ';
 $list3[' '] = ' ';

 $list3['Outcome 2 Rating'] = '';
 
if(empty($_POST['O2'])){
      $list3['Outcome 2 Rating'] = 'NULL';
}else 
      $list3['Outcome 2 Rating'] = $_POST['O2'];

foreach ($list3 as $key => $val)
 {
    $_SESSION['O2'][$key]=$val;
 }
  
 //write record into file
 $parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
 //$filename = $_SESSION['login_user'].'_Outcome2_'.date("Ymd").'_'.rand(1, 100); // add userID or something here
 $filename = $_SESSION['O1_file_name'].'_Outcome2';
 
// $_SESSION['login_user']
  if(!empty($foldername))
      {
            $sub_folder = $foldername.'/';
            $sub_dir = $parent_dir.$sub_folder;
            if(!file_exists($parent_dir.$foldername))
                {
        //      $form_data['posted']='folder name not empty. sub folder path is '.$sub_dir;
                mkdir($sub_dir);
            }
        }
  else
       $sub_dir = $parent_dir;
  
//  if(file_exists($sub_dir.$filename.'.csv')) // if file already exists, delete it
//      unlink ($sub_dir.$filename.'.csv');
          
  $fp = fopen($sub_dir.$filename.'.csv', 'w') ;
  
  
   foreach ($_SESSION['O2_I2'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
 
  foreach ($_SESSION['O2_I3'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
  
  foreach ($_SESSION['O2'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
  
  
  fclose($fp);
  
  $form_data['success'] = true;
  $form_data['posted'] = 'Data Saved Successfully ';        
  echo json_encode($form_data);   
?>

