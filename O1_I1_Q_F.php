<?php
session_start();
/*
 * input sanitization
 * http://www.dreamhost.com/dreamscape/2013/05/22/php-security-user-validation-and-sanitization-for-the-beginner/
 */
// for get data from O1_I1
$form_data = array();
$form_data['success'] = false;
$form_data['posted'] = 'Failed to save data. Try again! ';

// Need to change the codes below

$_SESSION['O1_I1'] = isset($_SESSION['O1_I1']) ? $_SESSION['O1_I1'] : array();
$_SESSION['O1_I1_A1_Table'] = isset($_SESSION['O1_I1_A1_Table']) ? $_SESSION['O1_I1_A1_Table'] : array();
// $_SESSION['O1_file_name'] = isset($_SESSION['O1_file_name']) ? $_SESSION['O1_file_name'] : $_POST['O1_file_name'];
//$_SESSION['O1_file_name'] = $_POST['O1_file_name'];

//for case applicable
if(empty($_POST['O1_I1_AC'])){
      $value_O1_I1_AC = 'NULL';
}else 
    $value_O1_I1_AC = $_POST['O1_I1_AC'];

//for table O1_I1_A1
// for Row 0
if(empty($_POST['O1_I1_A1_R0_C0'])){
      $value_O1_I1_A1_R0_C0 = 'NULL';
}else 
    $value_O1_I1_A1_R0_C0 = $_POST['O1_I1_A1_R0_C0'];

if(empty($_POST['O1_I1_A1_R0_C1'])){
      $value_O1_I1_A1_R0_C1 = 'NULL';
}else
    $value_O1_I1_A1_R0_C1 = $_POST['O1_I1_A1_R0_C1'];

if(empty($_POST['O1_I1_A1_R0_C2'])){
      $value_O1_I1_A1_R0_C2 = 'NULL';
}else
    $value_O1_I1_A1_R0_C2 = $_POST['O1_I1_A1_R0_C2'];

if(empty($_POST['O1_I1_A1_R0_C3'])){
      $value_O1_I1_A1_R0_C3 = 'NULL';
}else
    $value_O1_I1_A1_R0_C3 = $_POST['O1_I1_A1_R0_C3'];

if(empty($_POST['O1_I1_A1_R0_C4'])){
      $value_O1_I1_A1_R0_C4 = 'NULL';
}else
    $value_O1_I1_A1_R0_C4 = $_POST['O1_I1_A1_R0_C4'];

if(empty($_POST['O1_I1_A1_R0_C5'])){
      $value_O1_I1_A1_R0_C5 = 'NULL';
}else
    $value_O1_I1_A1_R0_C5 = $_POST['O1_I1_A1_R0_C5'];

if(empty($_POST['O1_I1_A1_R0_C6'])){
      $value_O1_I1_A1_R0_C6 = 'NULL';
}else
    $value_O1_I1_A1_R0_C6 = $_POST['O1_I1_A1_R0_C6'];

if(empty($_POST['O1_I1_A1_R0_C7'])){
      $value_O1_I1_A1_R0_C7 = 'NULL';
}else
    $value_O1_I1_A1_R0_C7 = $_POST['O1_I1_A1_R0_C7'];

if(empty($_POST['O1_I1_A1_R0_C8'])){
      $value_O1_I1_A1_R0_C8 = 'NULL';
}else
    $value_O1_I1_A1_R0_C8 = $_POST['O1_I1_A1_R0_C8'];

if(empty($_POST['O1_I1_A1_R0_C9'])){
      $value_O1_I1_A1_R0_C9 = 'NULL';
}else
    $value_O1_I1_A1_R0_C9 = $_POST['O1_I1_A1_R0_C9'];

////////////for R1
if(empty($_POST['O1_I1_A1_R1_C0'])){
      $value_O1_I1_A1_R1_C0 = 'NULL';
}else
    $value_O1_I1_A1_R1_C0 = $_POST['O1_I1_A1_R1_C0'];

if(empty($_POST['O1_I1_A1_R1_C1'])){
      $value_O1_I1_A1_R1_C1 = 'NULL';
}else
    $value_O1_I1_A1_R1_C1 = $_POST['O1_I1_A1_R1_C1'];

if(empty($_POST['O1_I1_A1_R1_C2'])){
      $value_O1_I1_A1_R1_C2 = 'NULL';
}else
    $value_O1_I1_A1_R1_C2 = $_POST['O1_I1_A1_R1_C2'];

if(empty($_POST['O1_I1_A1_R1_C3'])){
      $value_O1_I1_A1_R1_C3 = 'NULL';
}else
    $value_O1_I1_A1_R1_C3 = $_POST['O1_I1_A1_R1_C3'];

if(empty($_POST['O1_I1_A1_R1_C4'])){
      $value_O1_I1_A1_R1_C4 = 'NULL';
}else
    $value_O1_I1_A1_R1_C4 = $_POST['O1_I1_A1_R1_C4'];

if(empty($_POST['O1_I1_A1_R1_C5'])){
      $value_O1_I1_A1_R1_C5 = 'NULL';
}else
    $value_O1_I1_A1_R1_C5 = $_POST['O1_I1_A1_R1_C5'];

if(empty($_POST['O1_I1_A1_R1_C6'])){
      $value_O1_I1_A1_R1_C6 = 'NULL';
}else
    $value_O1_I1_A1_R1_C6 = $_POST['O1_I1_A1_R1_C6'];

if(empty($_POST['O1_I1_A1_R1_C7'])){
      $value_O1_I1_A1_R1_C7 = 'NULL';
}else
    $value_O1_I1_A1_R1_C7 = $_POST['O1_I1_A1_R1_C7'];

if(empty($_POST['O1_I1_A1_R1_C8'])){
      $value_O1_I1_A1_R1_C8 = 'NULL';
}else
    $value_O1_I1_A1_R1_C8 = $_POST['O1_I1_A1_R1_C8'];

if(empty($_POST['O1_I1_A1_R1_C9'])){
      $value_O1_I1_A1_R1_C9 = 'NULL';
}else
    $value_O1_I1_A1_R1_C9 = $_POST['O1_I1_A1_R1_C9'];

////////////for R2
if(empty($_POST['O1_I1_A1_R2_C0'])){
      $value_O1_I1_A1_R2_C0 = 'NULL';
}else 
    $value_O1_I1_A1_R2_C0 = $_POST['O1_I1_A1_R2_C0'];

if(empty($_POST['O1_I1_A1_R2_C1'])){
      $value_O1_I1_A1_R2_C1 = 'NULL';
}else
    $value_O1_I1_A1_R2_C1 = $_POST['O1_I1_A1_R2_C1'];

if(empty($_POST['O1_I1_A1_R2_C2'])){
      $value_O1_I1_A1_R2_C2 = 'NULL';
}else
    $value_O1_I1_A1_R2_C2 = $_POST['O1_I1_A1_R2_C2'];

if(empty($_POST['O1_I1_A1_R2_C3'])){
      $value_O1_I1_A1_R2_C3 = 'NULL';
}else
    $value_O1_I1_A1_R2_C3 = $_POST['O1_I1_A1_R2_C3'];

if(empty($_POST['O1_I1_A1_R2_C4'])){
      $value_O1_I1_A1_R2_C4 = 'NULL';
}else
    $value_O1_I1_A1_R2_C4 = $_POST['O1_I1_A1_R2_C4'];

if(empty($_POST['O1_I1_A1_R2_C5'])){
      $value_O1_I1_A1_R2_C5 = 'NULL';
}else
    $value_O1_I1_A1_R2_C5 = $_POST['O1_I1_A1_R2_C5'];

if(empty($_POST['O1_I1_A1_R2_C6'])){
      $value_O1_I1_A1_R2_C6 = 'NULL';
}else
    $value_O1_I1_A1_R2_C6 = $_POST['O1_I1_A1_R2_C6'];

if(empty($_POST['O1_I1_A1_R2_C7'])){
      $value_O1_I1_A1_R2_C7 = 'NULL';
}else
    $value_O1_I1_A1_R2_C7 = $_POST['O1_I1_A1_R2_C7'];

if(empty($_POST['O1_I1_A1_R2_C8'])){
      $value_O1_I1_A1_R2_C8 = 'NULL';
}else
    $value_O1_I1_A1_R2_C8 = $_POST['O1_I1_A1_R2_C8'];

if(empty($_POST['O1_I1_A1_R2_C9'])){
      $value_O1_I1_A1_R2_C9 = 'NULL';
}else
    $value_O1_I1_A1_R2_C9 = $_POST['O1_I1_A1_R2_C9'];

////////////for R3
if(empty($_POST['O1_I1_A1_R3_C0'])){
      $value_O1_I1_A1_R3_C0 = 'NULL';
}else
    $value_O1_I1_A1_R3_C0 = $_POST['O1_I1_A1_R3_C0'];

if(empty($_POST['O1_I1_A1_R3_C1'])){
      $value_O1_I1_A1_R3_C1 = 'NULL';
}else
    $value_O1_I1_A1_R3_C1 = $_POST['O1_I1_A1_R3_C1'];

if(empty($_POST['O1_I1_A1_R3_C2'])){
      $value_O1_I1_A1_R3_C2 = 'NULL';
}else
    $value_O1_I1_A1_R3_C2 = $_POST['O1_I1_A1_R3_C2'];

if(empty($_POST['O1_I1_A1_R3_C3'])){
      $value_O1_I1_A1_R3_C3 = 'NULL';
}else
    $value_O1_I1_A1_R3_C3 = $_POST['O1_I1_A1_R3_C3'];

if(empty($_POST['O1_I1_A1_R3_C4'])){
      $value_O1_I1_A1_R3_C4 = 'NULL';
}else
    $value_O1_I1_A1_R3_C4 = $_POST['O1_I1_A1_R3_C4'];

if(empty($_POST['O1_I1_A1_R3_C5'])){
      $value_O1_I1_A1_R3_C5 = 'NULL';
}else
    $value_O1_I1_A1_R3_C5 = $_POST['O1_I1_A1_R3_C5'];

if(empty($_POST['O1_I1_A1_R3_C6'])){
      $value_O1_I1_A1_R3_C6 = 'NULL';
}else
    $value_O1_I1_A1_R3_C6 = $_POST['O1_I1_A1_R3_C6'];

if(empty($_POST['O1_I1_A1_R3_C7'])){
      $value_O1_I1_A1_R3_C7 = 'NULL';
}else
    $value_O1_I1_A1_R3_C7 = $_POST['O1_I1_A1_R3_C7'];

if(empty($_POST['O1_I1_A1_R3_C8'])){
      $value_O1_I1_A1_R3_C8 = 'NULL';
}else
    $value_O1_I1_A1_R3_C8 = $_POST['O1_I1_A1_R3_C8'];

if(empty($_POST['O1_I1_A1_R3_C9'])){
      $value_O1_I1_A1_R3_C9 = 'NULL';
}else
    $value_O1_I1_A1_R3_C9 = $_POST['O1_I1_A1_R3_C9'];

////////////for R4
if(empty($_POST['O1_I1_A1_R4_C0'])){
      $value_O1_I1_A1_R4_C0 = 'NULL';
}else
    $value_O1_I1_A1_R4_C0 = $_POST['O1_I1_A1_R4_C0'];

if(empty($_POST['O1_I1_A1_R4_C1'])){
      $value_O1_I1_A1_R4_C1 = 'NULL';
}else
    $value_O1_I1_A1_R4_C1 = $_POST['O1_I1_A1_R4_C1'];

if(empty($_POST['O1_I1_A1_R4_C2'])){
      $value_O1_I1_A1_R4_C2 = 'NULL';
}else
    $value_O1_I1_A1_R4_C2 = $_POST['O1_I1_A1_R4_C2'];

if(empty($_POST['O1_I1_A1_R4_C3'])){
      $value_O1_I1_A1_R4_C3 = 'NULL';
}else
    $value_O1_I1_A1_R4_C3 = $_POST['O1_I1_A1_R4_C3'];

if(empty($_POST['O1_I1_A1_R4_C4'])){
      $value_O1_I1_A1_R4_C4 = 'NULL';
}else
    $value_O1_I1_A1_R4_C4 = $_POST['O1_I1_A1_R4_C4'];

if(empty($_POST['O1_I1_A1_R4_C5'])){
      $value_O1_I1_A1_R4_C5 = 'NULL';
}else
    $value_O1_I1_A1_R4_C5 = $_POST['O1_I1_A1_R4_C5'];

if(empty($_POST['O1_I1_A1_R4_C6'])){
      $value_O1_I1_A1_R4_C6 = 'NULL';
}else
    $value_O1_I1_A1_R4_C6 = $_POST['O1_I1_A1_R4_C6'];

if(empty($_POST['O1_I1_A1_R4_C7'])){
      $value_O1_I1_A1_R4_C7 = 'NULL';
}else
    $value_O1_I1_A1_R4_C7 = $_POST['O1_I1_A1_R4_C7'];

if(empty($_POST['O1_I1_A1_R4_C8'])){
      $value_O1_I1_A1_R4_C8 = 'NULL';
}else
    $value_O1_I1_A1_R4_C8 = $_POST['O1_I1_A1_R4_C8'];

if(empty($_POST['O1_I1_A1_R4_C9'])){
      $value_O1_I1_A1_R4_C9 = 'NULL';
}else
    $value_O1_I1_A1_R4_C9 = $_POST['O1_I1_A1_R4_C9'];

////////////for R5
if(empty($_POST['O1_I1_A1_R5_C0'])){
      $value_O1_I1_A1_R5_C0 = 'NULL';
}else
    $value_O1_I1_A1_R5_C0 = $_POST['O1_I1_A1_R5_C0'];

if(empty($_POST['O1_I1_A1_R5_C1'])){
      $value_O1_I1_A1_R5_C1 = 'NULL';
}else
    $value_O1_I1_A1_R5_C1 = $_POST['O1_I1_A1_R5_C1'];

if(empty($_POST['O1_I1_A1_R5_C2'])){
      $value_O1_I1_A1_R5_C2 = 'NULL';
}else
    $value_O1_I1_A1_R5_C2 = $_POST['O1_I1_A1_R5_C2'];

if(empty($_POST['O1_I1_A1_R5_C3'])){
      $value_O1_I1_A1_R5_C3 = 'NULL';
}else
    $value_O1_I1_A1_R5_C3 = $_POST['O1_I1_A1_R5_C3'];

if(empty($_POST['O1_I1_A1_R5_C4'])){
      $value_O1_I1_A1_R5_C4 = 'NULL';
}else
    $value_O1_I1_A1_R5_C4 = $_POST['O1_I1_A1_R5_C4'];

if(empty($_POST['O1_I1_A1_R5_C5'])){
      $value_O1_I1_A1_R5_C5 = 'NULL';
}else
    $value_O1_I1_A1_R5_C5 = $_POST['O1_I1_A1_R5_C5'];

if(empty($_POST['O1_I1_A1_R5_C6'])){
      $value_O1_I1_A1_R5_C6 = 'NULL';
}else
    $value_O1_I1_A1_R5_C6 = $_POST['O1_I1_A1_R5_C6'];

if(empty($_POST['O1_I1_A1_R5_C7'])){
      $value_O1_I1_A1_R5_C7 = 'NULL';
}else
    $value_O1_I1_A1_R5_C7 = $_POST['O1_I1_A1_R5_C7'];

if(empty($_POST['O1_I1_A1_R5_C8'])){
      $value_O1_I1_A1_R5_C8 = 'NULL';
}else
    $value_O1_I1_A1_R5_C8 = $_POST['O1_I1_A1_R5_C8'];

if(empty($_POST['O1_I1_A1_R5_C9'])){
      $value_O1_I1_A1_R5_C9 = 'NULL';
}else
    $value_O1_I1_A1_R5_C9 = $_POST['O1_I1_A1_R5_C9'];

////////////for R6
if(empty($_POST['O1_I1_A1_R6_C0'])){
      $value_O1_I1_A1_R6_C0 = 'NULL';
}else
    $value_O1_I1_A1_R6_C0 = $_POST['O1_I1_A1_R6_C0'];

if(empty($_POST['O1_I1_A1_R6_C1'])){
      $value_O1_I1_A1_R6_C1 = 'NULL';
}else
    $value_O1_I1_A1_R6_C1 = $_POST['O1_I1_A1_R6_C1'];

if(empty($_POST['O1_I1_A1_R6_C2'])){
      $value_O1_I1_A1_R6_C2 = 'NULL';
}else
    $value_O1_I1_A1_R6_C2 = $_POST['O1_I1_A1_R6_C2'];

if(empty($_POST['O1_I1_A1_R6_C3'])){
      $value_O1_I1_A1_R6_C3 = 'NULL';
}else
    $value_O1_I1_A1_R6_C3 = $_POST['O1_I1_A1_R6_C3'];

if(empty($_POST['O1_I1_A1_R6_C4'])){
      $value_O1_I1_A1_R6_C4 = 'NULL';
}else
    $value_O1_I1_A1_R6_C4 = $_POST['O1_I1_A1_R6_C4'];

if(empty($_POST['O1_I1_A1_R6_C5'])){
      $value_O1_I1_A1_R6_C5 = 'NULL';
}else
    $value_O1_I1_A1_R6_C5 = $_POST['O1_I1_A1_R6_C5'];

if(empty($_POST['O1_I1_A1_R6_C6'])){
      $value_O1_I1_A1_R6_C6 = 'NULL';
}else
    $value_O1_I1_A1_R6_C6 = $_POST['O1_I1_A1_R6_C6'];

if(empty($_POST['O1_I1_A1_R6_C7'])){
      $value_O1_I1_A1_R6_C7 = 'NULL';
}else
    $value_O1_I1_A1_R6_C7 = $_POST['O1_I1_A1_R6_C7'];

if(empty($_POST['O1_I1_A1_R6_C8'])){
      $value_O1_I1_A1_R6_C8 = 'NULL';
}else
    $value_O1_I1_A1_R6_C8 = $_POST['O1_I1_A1_R6_C8'];

if(empty($_POST['O1_I1_A1_R6_C9'])){
      $value_O1_I1_A1_R6_C9 = 'NULL';
}else
    $value_O1_I1_A1_R6_C9 = $_POST['O1_I1_A1_R6_C9'];
//end table

if(!strlen(trim($_POST['O1_I1_A1']))){
      $value_O1_I1_A1 = 'Not available';
}else 
    $value_O1_I1_A1 = $_POST['O1_I1_A1'];

if(!strlen(trim($_POST['O1_I1_B']))){
      $value_O1_I1_B = 'Not available';
}else
    $value_O1_I1_B = $_POST['O1_I1_B'];

if(empty($_POST['O1_I1_C'])){
      $value_O1_I1_C = 'NULL';
}else
    $value_O1_I1_C = $_POST['O1_I1_C'];

if (!strlen(trim($_POST['O1_I1_C_EX']))){
      $value_O1_I1_C_EX = 'Not available';
}else 
    $value_O1_I1_C_EX = $_POST['O1_I1_C_EX'];

if(empty($_POST['O1_I1_R'])){
      $value_O1_I1_R = 'NULL';
}else 
    $value_O1_I1_R = $_POST['O1_I1_R'];

$checkbox = $_POST['O1_I1_R_SRC'];

if(!strlen(trim($_POST['O1_I1_R_EXP']))){
      $value_O1_I1_R_EXP = 'Not available';
}else
    $value_O1_I1_R_EXP = $_POST['O1_I1_R_EXP'];


  $list = array ();
  $list[' '] = ' ';
  $list['Outcome 1 Item 1'] = '';
  
  $list[ 'Case Applicable '] = $value_O1_I1_AC;
//  $list['A1 Reports Table'] = '';
 // $list['Column Name'] =  
  $list[ 'Question 1A '] = $value_O1_I1_A1;
  $list[ 'Question 1B '] = $value_O1_I1_B;
  $list[ 'Question 1C '] = $value_O1_I1_C;
  $list[ 'Question 1_C_Explanation '] = $value_O1_I1_C_EX;

  $list[' '] = ' ';
  $list[' '] = ' ';
  $list[' '] = ' ';
  $list['Item 1 Rating'] = ' ';
 
  $list[ 'Item 1 Rating '] = $value_O1_I1_R;
  $list[ 'Item 1 Rating_Explanation '] = $value_O1_I1_R_EXP;
  
 for($i=0; $i<count($checkbox); $i++)
    {
      $list[ 'Item 1 Rating Sources_'.$i] = $checkbox[$i];
    }
    
  $_SESSION['O1_I1'] = $list;

 //write record into file
 $parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
// $filename = 'Outcome2_I2'.date("Ymd").'_'.rand(1, 100); // add userID or something here
// $filename = $_SESSION['O1_file_name'].'_Outcome1_Item1';
 $filename = $_POST['O1_file_name'].'_Outcome1_Item1';

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

  foreach ( $_SESSION['O1_I1'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
  fclose($fp);
 
 // Save A1 table to file
  $csv_hdr = "Report Date, First Name of Child, Allegation, Priority Level, Assessment or Investigation, Date Assigned for an Investigation or Assessment, Date Investigation or Assessment Initiated, "
          . "Date of Face-to-Face Contact With Child, Relationship of Alleged Perpetrator to Child, Disposition";
  $csv_output="\n";
  $csv_output.=", ".", ".", ".", "."A1 Reports Table".", ".", ".", ".", ".", ";
  $csv_output .= "\n".$csv_hdr;
  $csv_output .= "\n";
  $csv_output .=  
          $value_O1_I1_A1_R0_C0 . ", ".$value_O1_I1_A1_R0_C1 . ", ".$value_O1_I1_A1_R0_C2 . ", ".$value_O1_I1_A1_R0_C3 . ", ".$value_O1_I1_A1_R0_C4 . ", ".
          $value_O1_I1_A1_R0_C5 . ", ".$value_O1_I1_A1_R0_C6 . ", ".$value_O1_I1_A1_R0_C7 . ", ".$value_O1_I1_A1_R0_C8 . ", ".$value_O1_I1_A1_R0_C9 . ", "."\n".
          $value_O1_I1_A1_R1_C0 . ", ".$value_O1_I1_A1_R1_C1 . ", ".$value_O1_I1_A1_R1_C2 . ", ".$value_O1_I1_A1_R1_C3 . ", ".$value_O1_I1_A1_R1_C4 . ", ".
          $value_O1_I1_A1_R1_C5 . ", ".$value_O1_I1_A1_R1_C6 . ", ".$value_O1_I1_A1_R1_C7 . ", ".$value_O1_I1_A1_R1_C8 . ", ".$value_O1_I1_A1_R1_C9 . ", "."\n".
          $value_O1_I1_A1_R2_C0 . ", ".$value_O1_I1_A1_R2_C1 . ", ".$value_O1_I1_A1_R2_C2 . ", ".$value_O1_I1_A1_R2_C3 . ", ".$value_O1_I1_A1_R2_C4 . ", ".
          $value_O1_I1_A1_R2_C5 . ", ".$value_O1_I1_A1_R2_C6 . ", ".$value_O1_I1_A1_R2_C7 . ", ".$value_O1_I1_A1_R2_C8 . ", ".$value_O1_I1_A1_R2_C9 . ", "."\n".
          $value_O1_I1_A1_R3_C0 . ", ".$value_O1_I1_A1_R3_C1 . ", ".$value_O1_I1_A1_R3_C2 . ", ".$value_O1_I1_A1_R3_C3 . ", ".$value_O1_I1_A1_R3_C4 . ", ".
          $value_O1_I1_A1_R3_C5 . ", ".$value_O1_I1_A1_R3_C6 . ", ".$value_O1_I1_A1_R3_C7 . ", ".$value_O1_I1_A1_R3_C8 . ", ".$value_O1_I1_A1_R3_C9 . ", "."\n".
          $value_O1_I1_A1_R4_C0 . ", ".$value_O1_I1_A1_R4_C1 . ", ".$value_O1_I1_A1_R4_C2 . ", ".$value_O1_I1_A1_R4_C3 . ", ".$value_O1_I1_A1_R4_C4 . ", ".
          $value_O1_I1_A1_R4_C5 . ", ".$value_O1_I1_A1_R4_C6 . ", ".$value_O1_I1_A1_R4_C7 . ", ".$value_O1_I1_A1_R4_C8 . ", ".$value_O1_I1_A1_R4_C9 . ", "."\n".
          $value_O1_I1_A1_R5_C0 . ", ".$value_O1_I1_A1_R5_C1 . ", ".$value_O1_I1_A1_R5_C2 . ", ".$value_O1_I1_A1_R5_C3 . ", ".$value_O1_I1_A1_R5_C4 . ", ".
          $value_O1_I1_A1_R5_C5 . ", ".$value_O1_I1_A1_R5_C6 . ", ".$value_O1_I1_A1_R5_C7 . ", ".$value_O1_I1_A1_R5_C8 . ", ".$value_O1_I1_A1_R5_C9 . ", "."\n".
           $value_O1_I1_A1_R6_C0 . ", ".$value_O1_I1_A1_R6_C1 . ", ".$value_O1_I1_A1_R6_C2 . ", ".$value_O1_I1_A1_R6_C3 . ", ".$value_O1_I1_A1_R6_C4 . ", ".
          $value_O1_I1_A1_R6_C5 . ", ".$value_O1_I1_A1_R6_C6 . ", ".$value_O1_I1_A1_R6_C7 . ", ".$value_O1_I1_A1_R6_C8 . ", ".$value_O1_I1_A1_R6_C9 . ", "."\n"
          ;
   
 $_SESSION['O1_I1_A1_Table'] = $csv_output;
file_put_contents($sub_dir.$filename.'.csv',$csv_output, FILE_APPEND);
 
// 0721 file donwload
if (! file_exists ( $sub_dir.$filename.'.csv' )) {
        echo "Cannot find file!";
        exit ();
    } 
    else {
        //Open file
        $file = fopen ( $sub_dir.$filename.'.csv', "r" );
   
        Header ( "Content-type: application//vnd.ms-excel; charset=utf-8" );
        //Header ( "Content-type: application/octet-stream" );
        Header ( "Accept-Ranges: bytes" );
        Header ( "Accept-Length: " . filesize ( $sub_dir.$filename.'.csv' ) );
        Header ( "Content-Disposition: attachment; filename=" . $filename.'.csv' );
        //output file content
        //read file content and transmit to browser so that file can be downloaded on client side
        echo fread ( $file, filesize ( $sub_dir.$filename.'.csv' ) );
        fclose ( $file );
        exit ();
    }

// end of 0721 file download

  $form_data['success'] = true;
  $form_data['posted'] = 'Data Saved Successfully ';
        
  echo json_encode($form_data);
?>


