
<?php
session_start();
// for get data from O2_I3
//include "O2_I2_Q_F.php";

$form_data = array();
$form_data['success'] = false;
$form_data['posted'] = 'Failed to save data. Try again! ';

$_SESSION['O2_I3'] = isset($_SESSION['O2_I3']) ? $_SESSION['O2_I3'] : array();

$checkbox = $_POST['O2_I3_A1'];
$checkbox2 = $_POST['O2_I3_D1'];
$checkbox3 = $_POST['O2_I3_E1'];
$checkbox4 = $_POST['O2_I3_F1'];
$checkbox5 = $_POST['O2_I3_R_SRC'];

 $list2 = array ();
 $list2[''] = '';
 $list2['Outcome 2 Item 3'] = '';
 for($i=0; $i<count($checkbox); $i++)
    {
      $list2[ 'Qustion 3A1_Apply_'.$i] = $checkbox[$i];
    } 

if(empty($_POST['O2_I3_A'])){
      $list2['Question 3A'] = 'NULL';
}else 
      $list2['Question 3A'] = $_POST['O2_I3_A'];

if (!strlen(trim($_POST['O2_I3_A_EXP']))){
     $list2['Question 3A_Explanation'] = 'Not available';
}else 
    $list2['Question 3A_Explanation'] = $_POST['O2_I3_A_EXP'];

if(empty($_POST['O2_I3_B'])){
      $list2['Question 3B'] = 'NULL';
}else 
      $list2['Question 3B'] = $_POST['O2_I3_B'];

if (!strlen(trim($_POST['O2_I3_B_EXP']))){
     $list2['Question 3B_Explanation'] = 'Not available';
}else 
    $list2['Question 3B_Explanation'] = $_POST['O2_I3_B_EXP'];

if(empty($_POST['O2_I3_C'])){
      $list2['Question 3C'] = 'NULL';
}else 
      $list2['Question 3C'] = $_POST['O2_I3_C'];

if (!strlen(trim($_POST['O2_I3_C_EXP']))){
     $list2['Question 3C_Explanation'] = 'Not available';
}else 
    $list2['Question 3C_Explanation'] = $_POST['O2_I3_C_EXP'];

for($i=0; $i<count($checkbox2); $i++)
    {
      $list2[ 'Question 3D1_Apply_'.$i] = $checkbox2[$i];
    } 

if(empty($_POST['O2_I3_D'])){
      $list2['Question 3D'] = 'NULL';
}else 
      $list2['Question 3D'] = $_POST['O2_I3_D'];

  for($i=0; $i<count($checkbox3); $i++)
    {
      $list2[ 'Question 3E1_Apply_'.$i] = $checkbox3[$i];
    } 

if(empty($_POST['O2_I3_E'])){
      $list2['Question 3E'] = 'NULL';
}else 
      $list2['Question 3E'] = $_POST['O2_I3_E'];   

 for($i=0; $i<count($checkbox4); $i++)
    {
      $list2[ 'Question 3F1_Apply_'.$i] = $checkbox4[$i];
    } 

if(empty($_POST['O2_I3_F'])){
      $list2['Question 3F'] = 'NULL';
}else 
      $list2['Question 3F'] = $_POST['O2_I3_F']; 

  $list2[' '] = ' ';
  $list2[' '] = ' ';
  $list2[' '] = ' ';
  $list2['Item 3 Rating'] = ' ';

if(empty($_POST['O2_I3_R'])){
      $list2['Item 3 Rating'] = 'NULL';
}else 
      $list2['Item 3 Rating'] = $_POST['O2_I3_R']; 

for($i=0; $i<count($checkbox5); $i++)
    {
      $list2[ 'Item 3 Rating Sources_'.$i] = $checkbox5[$i];
    }

if (!strlen(trim($_POST['O2_I3_R_EXP']))){
     $list2['Item 3 Rating_Explanation'] = 'Not available';
}else 
    $list2['Item 3 Rating_Explanation'] = $_POST['O2_I3_R_EXP'];

$_SESSION['O2_I3'] = $list2;
/*
foreach ($list2 as $key => $val)
 {
    $_SESSION['O2_I3'][$key]=$val;
 }
 */
// $final_I3 = $list2;
   
 //write record into file
 $parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
// $filename = 'Outcome2_I3'.date("Ymd").'_'.rand(1, 100); // add userID or something here
 $filename = $_SESSION['O1_file_name'].'_Outcome2_Item3';
 
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

  foreach ($_SESSION['O2_I3'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
  fclose($fp);
  

  $form_data['success'] = true;
  $form_data['posted'] = 'Data Saved Successfully ';        
  echo json_encode($form_data);   
?>
