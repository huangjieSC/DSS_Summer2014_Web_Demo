<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$form_data = array();
$form_data['success'] = false;
$form_data['posted'] = 'Failed to save data. Try again! ';

$_SESSION['O1_R'] = isset($_SESSION['O1_R']) ? $_SESSION['O1_R'] : array();

 $list3 = array ();
 $list3[' '] = ' ';
 $list3[' '] = ' ';

 $list3['Outcome 1 Rating'] = '';

if(empty($_POST['O1_R'])){
      $list3['Outcome 1 Rating'] = 'NULL';
}else
      $list3['Outcome 1 Rating'] = $_POST['O1_R'];

foreach ($list3 as $key => $val)
 {
    $_SESSION['O1_R'][$key]=$val;
 }

 //write record into file
 $parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
 //$filename = $_SESSION['login_user'].'_Outcome2_'.date("Ymd").'_'.rand(1, 100); // add userID or something here
 $filename = $_SESSION['O1_file_name'].'_Outcome1';

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


   foreach ($_SESSION['O1_I1'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
 
  foreach ($_SESSION['O1_R'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }

  fclose($fp);

file_put_contents($sub_dir.$filename.'.csv',$_SESSION['O1_I1_A1_Table'], FILE_APPEND);
  


  $form_data['success'] = true;
  $form_data['posted'] = 'Data Saved Successfully ';
  echo json_encode($form_data);  
  
  
?>
