
<?php
session_start();
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// for get data from O2_I2_Q_F
$form_data = array();
$form_data['success'] = false;
$form_data['posted'] = 'Failed to save data. Try again! ';

$_SESSION['O2_I2'] = isset($_SESSION['O2_I2']) ? $_SESSION['O2_I2'] : array();
 //$_SESSION['O2_file_name'] = isset($_SESSION['O2_file_name']) ? $_SESSION['O2_file_name'] : $_POST['O2_file_name'];
//$_SESSION['O2_file_name'] = $_POST['O2_file_name'];

if(empty($_POST['O2_I2_AC'])){
      $value_O2_I2_AC = 'NULL';
}else 
    $value_O2_I2_AC = $_POST['O2_I2_AC'];

if(empty($_POST['O2_I2_R'])){
      $value_O2_I2_R = 'NULL';
}else 
    $value_O2_I2_R = $_POST['O2_I2_R'];

if(empty($_POST['O2_I2_A'])){
      $value_O2_I2_A = 'NULL';
}else 
    $value_O2_I2_A = $_POST['O2_I2_A'];

if (!strlen(trim($_POST['O2_I2_A_EXP']))){
      $value_O2_I2_A_EXP = 'Not available';
}else 
    $value_O2_I2_A_EXP = $_POST['O2_I2_A_EXP'];

if(empty($_POST['O2_I2_JUMP'])){
     $value_O2_I2_JUMP = 'NULL';
}else 
    $value_O2_I2_JUMP = $_POST['O2_I2_JUMP'];

if(empty($_POST['O2_I2_B'])){
      $value_O2_I2_B = 'NULL';
}else 
      $value_O2_I2_B = $_POST['O2_I2_B'];

if (!strlen(trim($_POST['O2_I2_B_EXP']))){
     $value_O2_I2_B_EXP = 'Not available';
}else 
    $value_O2_I2_B_EXP = $_POST['O2_I2_B_EXP'];
 
    $checkbox = $_POST['O2_I2_R_SRC'];

if (!strlen(trim($_POST['O2_I2_R_EXP']))){
     $value_O2_I2_R_EXP = 'Not available';
}else 
    $value_O2_I2_R_EXP = $_POST['O2_I2_R_EXP'];

  $list = array ();
  $list[''] = '';
  $list['Outcome 2 Item 2'] = '';
  
  $list[ 'Case Applicable '] = $value_O2_I2_AC;
  $list[ 'Question 2A '] = $value_O2_I2_A;
  $list[ 'Question 2A_Explanation '] = $value_O2_I2_A_EXP;

  $list[ 'Question 2B '] = $value_O2_I2_B;
  $list[ 'Question 2B_B_Explanation '] = $value_O2_I2_B_EXP;
  
  $list[' '] = ' ';
  $list[' '] = ' ';
  $list[' '] = ' ';
  $list['Item 2 Rating'] = ' ';
 
  $list[ 'Item 2 Rating '] = $value_O2_I2_R;
  $list[ 'Item 2 Rating_Explanation '] = $value_O2_I2_R_EXP;
  
 for($i=0; $i<count($checkbox); $i++)
    {
       //echo $checkbox[$i]."<br>";
      $list[ 'Item 2 Rating Sources_'.$i] = $checkbox[$i];
    }
 //echo 'O2_I2_R_EXP '.$value_O2_I2_R_EXP."<br>";
    

  $_SESSION['O2_I2'] = $list;
 /*
  foreach ($list as $key => $val)
  
 {
    $_SESSION['O2_I2'][$key]=$val;
 }
 
  */
 // $final_I2 = $list;
 //write record into file
 $parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
// $filename = 'Outcome2_I2'.date("Ymd").'_'.rand(1, 100); // add userID or something here
 $filename = $_SESSION['O1_file_name'].'_Outcome2_Item2';

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
  
  if(file_exists($sub_dir.$filename.'.csv')) // if file already exists, delete it
      unlink ($sub_dir.$filename.'.csv');
          
  $fp = fopen($sub_dir.$filename.'.csv', 'w') ;

  foreach ( $_SESSION['O2_I2'] as $key => $val)
 {
     //echo "$key";
     //fputcsv($fp, );
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
  fclose($fp);

  $form_data['success'] = true;
  $form_data['posted'] = 'Data Saved Successfully ';
        
  echo json_encode($form_data);
?>
