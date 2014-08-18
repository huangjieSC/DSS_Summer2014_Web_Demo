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


$_SESSION['FS'] = isset($_SESSION['FS']) ? $_SESSION['FS'] : array();
$_SESSION['FS_F1_Table'] = isset($_SESSION['FS_F1_Table']) ? $_SESSION['FS_F1_Table'] : array();
$_SESSION['FS_F2_Table'] = isset($_SESSION['FS_F2_Table']) ? $_SESSION['FS_F2_Table'] : array();
// $_SESSION['O1_file_name'] = isset($_SESSION['O1_file_name']) ? $_SESSION['O1_file_name'] : $_POST['O1_file_name'];
$_SESSION['O1_file_name'] = $_POST['O1_file_name'];

//for FACE SHEET 
if(empty($_POST['FS_A'])){
      $value_FS_A = 'NULL';
}else 
    $value_FS_A = $_POST['FS_A'];

if(empty($_POST['FS_B'])){
      $value_FS_B = 'NULL';
}else 
    $value_FS_B = $_POST['FS_B'];

if(empty($_POST['FS_C'])){
      $value_FS_C = 'NULL';
}else 
    $value_FS_C = $_POST['FS_C'];

if(empty($_POST['FS_D_RN'])){
      $value_FS_D_RN = 'NULL';
}else 
    $value_FS_D_RN = $_POST['FS_D_RN'];

if(empty($_POST['FS_D_QACB'])){
      $value_FS_D_QACB = 'NULL';
}else 
    $value_FS_D_QACB = $_POST['FS_D_QACB'];

if(empty($_POST['FS_E'])){
      $value_FS_E = 'NULL';
}else 
    $value_FS_E = $_POST['FS_E'];


//for table FS_F1
// for Row 0
if(empty($_POST['FS_F1_RO_C0'])){
      $value_FS_F1_RO_C0 = 'NULL';
}else 
    $value_FS_F1_RO_C0 = $_POST['FS_F1_RO_C0'];

if(empty($_POST['FS_F1_RO_C1'])){
      $value_FS_F1_RO_C1 = 'NULL';
}else
    $value_FS_F1_RO_C1 = $_POST['FS_F1_RO_C1'];

if(empty($_POST['FS_F1_RO_C2'])){
      $value_FS_F1_RO_C2 = 'NULL';
}else
    $value_FS_F1_RO_C2 = $_POST['FS_F1_RO_C2'];

if(empty($_POST['FS_F1_RO_C3'])){
      $value_FS_F1_RO_C3 = 'NULL';
}else
    $value_FS_F1_RO_C3 = $_POST['FS_F1_RO_C3'];

if(empty($_POST['FS_F1_RO_C4'])){
      $value_FS_F1_RO_C4 = 'NULL';
}else
    $value_FS_F1_RO_C4 = $_POST['FS_F1_RO_C4'];

if(empty($_POST['FS_F1_RO_C5'])){
      $value_FS_F1_RO_C5 = 'NULL';
}else
    $value_FS_F1_RO_C5 = $_POST['FS_F1_RO_C5'];

if(empty($_POST['FS_F1_RO_C6'])){
      $value_FS_F1_RO_C6 = 'NULL';
}else
    $value_FS_F1_RO_C6 = $_POST['FS_F1_RO_C6'];

////////////for R1
if(empty($_POST['FS_F1_R1_C0'])){
      $value_FS_F1_R1_C0 = 'NULL';
}else 
    $value_FS_F1_R1_C0 = $_POST['FS_F1_R1_C0'];

if(empty($_POST['FS_F1_R1_C1'])){
      $value_FS_F1_R1_C1 = 'NULL';
}else
    $value_FS_F1_R1_C1 = $_POST['FS_F1_R1_C1'];

if(empty($_POST['FS_F1_R1_C2'])){
      $value_FS_F1_R1_C2 = 'NULL';
}else
    $value_FS_F1_R1_C2 = $_POST['FS_F1_R1_C2'];

if(empty($_POST['FS_F1_R1_C3'])){
      $value_FS_F1_R1_C3 = 'NULL';
}else
    $value_FS_F1_R1_C3 = $_POST['FS_F1_R1_C3'];

if(empty($_POST['FS_F1_R1_C4'])){
      $value_FS_F1_R1_C4 = 'NULL';
}else
    $value_FS_F1_R1_C4 = $_POST['FS_F1_R1_C4'];

if(empty($_POST['FS_F1_R1_C5'])){
      $value_FS_F1_R1_C5 = 'NULL';
}else
    $value_FS_F1_R1_C5 = $_POST['FS_F1_R1_C5'];

if(empty($_POST['FS_F1_R1_C6'])){
      $value_FS_F1_R1_C6 = 'NULL';
}else
    $value_FS_F1_R1_C6 = $_POST['FS_F1_R1_C6'];

////////////for R2
if(empty($_POST['FS_F1_R2_C0'])){
      $value_FS_F1_R2_C0 = 'NULL';
}else 
    $value_FS_F1_R2_C0 = $_POST['FS_F1_R2_C0'];

if(empty($_POST['FS_F1_R2_C1'])){
      $value_FS_F1_R2_C1 = 'NULL';
}else
    $value_FS_F1_R2_C1 = $_POST['FS_F1_R2_C1'];

if(empty($_POST['FS_F1_R2_C2'])){
      $value_FS_F1_R2_C2 = 'NULL';
}else
    $value_FS_F1_R2_C2 = $_POST['FS_F1_R2_C2'];

if(empty($_POST['FS_F1_R2_C3'])){
      $value_FS_F1_R2_C3 = 'NULL';
}else
    $value_FS_F1_R2_C3 = $_POST['FS_F1_R2_C3'];

if(empty($_POST['FS_F1_R2_C4'])){
      $value_FS_F1_R2_C4 = 'NULL';
}else
    $value_FS_F1_R2_C4 = $_POST['FS_F1_R2_C4'];

if(empty($_POST['FS_F1_R2_C5'])){
      $value_FS_F1_R2_C5 = 'NULL';
}else
    $value_FS_F1_R2_C5 = $_POST['FS_F1_R2_C5'];

if(empty($_POST['FS_F1_R2_C6'])){
      $value_FS_F1_R2_C6 = 'NULL';
}else
    $value_FS_F1_R2_C6 = $_POST['FS_F1_R2_C6'];

////////////for R3
if(empty($_POST['FS_F1_R3_C0'])){
      $value_FS_F1_R3_C0 = 'NULL';
}else 
    $value_FS_F1_R3_C0 = $_POST['FS_F1_R3_C0'];

if(empty($_POST['FS_F1_R3_C1'])){
      $value_FS_F1_R3_C1 = 'NULL';
}else
    $value_FS_F1_R3_C1 = $_POST['FS_F1_R3_C1'];

if(empty($_POST['FS_F1_R3_C2'])){
      $value_FS_F1_R3_C2 = 'NULL';
}else
    $value_FS_F1_R3_C2 = $_POST['FS_F1_R3_C2'];

if(empty($_POST['FS_F1_R3_C3'])){
      $value_FS_F1_R3_C3 = 'NULL';
}else
    $value_FS_F1_R3_C3 = $_POST['FS_F1_R3_C3'];

if(empty($_POST['FS_F1_R3_C4'])){
      $value_FS_F1_R3_C4 = 'NULL';
}else
    $value_FS_F1_R3_C4 = $_POST['FS_F1_R3_C4'];

if(empty($_POST['FS_F1_R3_C5'])){
      $value_FS_F1_R3_C5 = 'NULL';
}else
    $value_FS_F1_R3_C5 = $_POST['FS_F1_R3_C5'];

if(empty($_POST['FS_F1_R3_C6'])){
      $value_FS_F1_R3_C6 = 'NULL';
}else
    $value_FS_F1_R3_C6 = $_POST['FS_F1_R3_C6'];

////////////for R4
if(empty($_POST['FS_F1_R4_C0'])){
      $value_FS_F1_R4_C0 = 'NULL';
}else 
    $value_FS_F1_R4_C0 = $_POST['FS_F1_R4_C0'];

if(empty($_POST['FS_F1_R4_C1'])){
      $value_FS_F1_R4_C1 = 'NULL';
}else
    $value_FS_F1_R4_C1 = $_POST['FS_F1_R4_C1'];

if(empty($_POST['FS_F1_R4_C2'])){
      $value_FS_F1_R4_C2 = 'NULL';
}else
    $value_FS_F1_R4_C2 = $_POST['FS_F1_R4_C2'];

if(empty($_POST['FS_F1_R4_C3'])){
      $value_FS_F1_R4_C3 = 'NULL';
}else
    $value_FS_F1_R4_C3 = $_POST['FS_F1_R4_C3'];

if(empty($_POST['FS_F1_R4_C4'])){
      $value_FS_F1_R4_C4 = 'NULL';
}else
    $value_FS_F1_R4_C4 = $_POST['FS_F1_R4_C4'];

if(empty($_POST['FS_F1_R4_C5'])){
      $value_FS_F1_R4_C5 = 'NULL';
}else
    $value_FS_F1_R4_C5 = $_POST['FS_F1_R4_C5'];

if(empty($_POST['FS_F1_R4_C6'])){
      $value_FS_F1_R4_C6 = 'NULL';
}else
    $value_FS_F1_R4_C6 = $_POST['FS_F1_R4_C6'];

////////////for R5
if(empty($_POST['FS_F1_R5_C0'])){
      $value_FS_F1_R5_C0 = 'NULL';
}else 
    $value_FS_F1_R5_C0 = $_POST['FS_F1_R5_C0'];

if(empty($_POST['FS_F1_R5_C1'])){
      $value_FS_F1_R5_C1 = 'NULL';
}else
    $value_FS_F1_R5_C1 = $_POST['FS_F1_R5_C1'];

if(empty($_POST['FS_F1_R5_C2'])){
      $value_FS_F1_R5_C2 = 'NULL';
}else
    $value_FS_F1_R5_C2 = $_POST['FS_F1_R5_C2'];

if(empty($_POST['FS_F1_R5_C3'])){
      $value_FS_F1_R5_C3 = 'NULL';
}else
    $value_FS_F1_R5_C3 = $_POST['FS_F1_R5_C3'];

if(empty($_POST['FS_F1_R5_C4'])){
      $value_FS_F1_R5_C4 = 'NULL';
}else
    $value_FS_F1_R5_C4 = $_POST['FS_F1_R5_C4'];

if(empty($_POST['FS_F1_R5_C5'])){
      $value_FS_F1_R5_C5 = 'NULL';
}else
    $value_FS_F1_R5_C5 = $_POST['FS_F1_R5_C5'];

if(empty($_POST['FS_F1_R5_C6'])){
      $value_FS_F1_R5_C6 = 'NULL';
}else
    $value_FS_F1_R5_C6 = $_POST['FS_F1_R5_C6'];
//end table FS_F1

//for table FS_F2

$other = 'Other';

// for Row 0
if(empty($_POST['FS_F2_R0_C0'])){
      $value_FS_F2_R0_C0 = 'NULL';
}else 
    $value_FS_F2_R0_C0 = $_POST['FS_F2_R0_C0'];
/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R0_C1_Other'])){
      $value_FS_F2_R0_C1_Other = 'NULL';
}else 
    $value_FS_F2_R0_C1_Other = $_POST['FS_F2_R0_C1_Other'];

if(empty($_POST['FS_F2_R0_C1'])){
      $value_FS_F2_R0_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R0_C1']=== $other)  // If user chose other
        $value_FS_F2_R0_C1 = $_POST['FS_F2_R0_C1'].": ".$value_FS_F2_R0_C1_Other;
    else
        $value_FS_F2_R0_C1 = $_POST['FS_F2_R0_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R0_C2'])){
      $value_FS_F2_R0_C2 = 'NULL';
}else
    $value_FS_F2_R0_C2 = $_POST['FS_F2_R0_C2'];

if(empty($_POST['FS_F2_R0_C3'])){
      $value_FS_F2_R0_C3 = 'NULL';
}else
    $value_FS_F2_R0_C3 = $_POST['FS_F2_R0_C3'];


////////////for R1
if(empty($_POST['FS_F2_R1_C0'])){
      $value_FS_F2_R1_C0 = 'NULL';
}else 
    $value_FS_F2_R1_C0 = $_POST['FS_F2_R1_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R1_C1_Other'])){
      $value_FS_F2_R1_C1_Other = 'NULL';
}else 
    $value_FS_F2_R1_C1_Other = $_POST['FS_F2_R1_C1_Other'];

if(empty($_POST['FS_F2_R1_C1'])){
      $value_FS_F2_R1_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R1_C1']=== $other)  // If user chose other
        $value_FS_F2_R1_C1 = $_POST['FS_F2_R1_C1'].": ".$value_FS_F2_R1_C1_Other;
    else
        $value_FS_F2_R1_C1 = $_POST['FS_F2_R1_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R1_C2'])){
      $value_FS_F2_R1_C2 = 'NULL';
}else
    $value_FS_F2_R1_C2 = $_POST['FS_F2_R1_C2'];

if(empty($_POST['FS_F2_R1_C3'])){
      $value_FS_F2_R1_C3 = 'NULL';
}else
    $value_FS_F2_R1_C3 = $_POST['FS_F2_R1_C3'];


////////////for R2
if(empty($_POST['FS_F2_R2_C0'])){
      $value_FS_F2_R2_C0 = 'NULL';
}else 
    $value_FS_F2_R2_C0 = $_POST['FS_F2_R2_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R2_C1_Other'])){
    $value_FS_F2_R2_C1_Other = 'NULL';
}else 
    $value_FS_F2_R2_C1_Other = $_POST['FS_F2_R2_C1_Other'];

if(empty($_POST['FS_F2_R2_C1'])){
      $value_FS_F2_R2_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R2_C1']=== $other)  // If user chose other
        $value_FS_F2_R2_C1 = $_POST['FS_F2_R2_C1'].": ".$value_FS_F2_R2_C1_Other;
    else
        $value_FS_F2_R2_C1 = $_POST['FS_F2_R2_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R2_C2'])){
      $value_FS_F2_R2_C2 = 'NULL';
}else
    $value_FS_F2_R2_C2 = $_POST['FS_F2_R2_C2'];

if(empty($_POST['FS_F2_R2_C3'])){
      $value_FS_F2_R2_C3 = 'NULL';
}else
    $value_FS_F2_R2_C3 = $_POST['FS_F2_R2_C3'];


////////////for R3
if(empty($_POST['FS_F2_R3_C0'])){
      $value_FS_F2_R3_C0 = 'NULL';
}else 
    $value_FS_F2_R3_C0 = $_POST['FS_F2_R3_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R3_C1_Other'])){
    $value_FS_F2_R3_C1_Other = 'NULL';
}else 
    $value_FS_F2_R3_C1_Other = $_POST['FS_F2_R3_C1_Other'];

if(empty($_POST['FS_F2_R3_C1'])){
      $value_FS_F2_R3_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R3_C1']=== $other)  // If user chose other
        $value_FS_F2_R3_C1 = $_POST['FS_F2_R3_C1'].": ".$value_FS_F2_R3_C1_Other;
    else
        $value_FS_F2_R3_C1 = $_POST['FS_F2_R3_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R3_C2'])){
      $value_FS_F2_R3_C2 = 'NULL';
}else
    $value_FS_F2_R3_C2 = $_POST['FS_F2_R3_C2'];

if(empty($_POST['FS_F2_R3_C3'])){
      $value_FS_F2_R3_C3 = 'NULL';
}else
    $value_FS_F2_R3_C3 = $_POST['FS_F2_R3_C3'];

////////////for R4
if(empty($_POST['FS_F2_R4_C0'])){
      $value_FS_F2_R4_C0 = 'NULL';
}else 
    $value_FS_F2_R4_C0 = $_POST['FS_F2_R4_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R4_C1_Other'])){
    $value_FS_F2_R4_C1_Other = 'NULL';
}else 
    $value_FS_F2_R4_C1_Other = $_POST['FS_F2_R4_C1_Other'];

if(empty($_POST['FS_F2_R4_C1'])){
      $value_FS_F2_R4_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R4_C1']=== $other)  // If user chose other
        $value_FS_F2_R4_C1 = $_POST['FS_F2_R4_C1'].": ".$value_FS_F2_R4_C1_Other;
    else
        $value_FS_F2_R4_C1 = $_POST['FS_F2_R4_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R4_C2'])){
      $value_FS_F2_R4_C2 = 'NULL';
}else
    $value_FS_F2_R4_C2 = $_POST['FS_F2_R4_C2'];

if(empty($_POST['FS_F2_R4_C3'])){
      $value_FS_F2_R4_C3 = 'NULL';
}else
    $value_FS_F2_R4_C3 = $_POST['FS_F2_R4_C3'];

////////////for R5
if(empty($_POST['FS_F2_R5_C0'])){
      $value_FS_F2_R5_C0 = 'NULL';
}else 
    $value_FS_F2_R5_C0 = $_POST['FS_F2_R5_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R5_C1_Other'])){
    $value_FS_F2_R5_C1_Other = 'NULL';
}else 
    $value_FS_F2_R5_C1_Other = $_POST['FS_F2_R5_C1_Other'];

if(empty($_POST['FS_F2_R5_C1'])){
      $value_FS_F2_R5_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R5_C1']=== $other)  // If user chose other
        $value_FS_F2_R5_C1 = $_POST['FS_F2_R5_C1'].": ".$value_FS_F2_R5_C1_Other;
    else
        $value_FS_F2_R5_C1 = $_POST['FS_F2_R5_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R5_C2'])){
      $value_FS_F2_R5_C2 = 'NULL';
}else
    $value_FS_F2_R5_C2 = $_POST['FS_F2_R5_C2'];

if(empty($_POST['FS_F2_R5_C3'])){
      $value_FS_F2_R5_C3 = 'NULL';
}else
    $value_FS_F2_R5_C3 = $_POST['FS_F2_R5_C3'];

////////////for R6
if(empty($_POST['FS_F2_R6_C0'])){
      $value_FS_F2_R6_C0 = 'NULL';
}else 
    $value_FS_F2_R6_C0 = $_POST['FS_F2_R6_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R6_C1_Other'])){
    $value_FS_F2_R6_C1_Other = 'NULL';
}else 
    $value_FS_F2_R6_C1_Other = $_POST['FS_F2_R6_C1_Other'];

if(empty($_POST['FS_F2_R6_C1'])){
      $value_FS_F2_R6_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R6_C1']=== $other)  // If user chose other
        $value_FS_F2_R6_C1 = $_POST['FS_F2_R6_C1'].": ".$value_FS_F2_R6_C1_Other;
    else
        $value_FS_F2_R6_C1 = $_POST['FS_F2_R6_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R6_C2'])){
      $value_FS_F2_R6_C2 = 'NULL';
}else
    $value_FS_F2_R6_C2 = $_POST['FS_F2_R6_C2'];

if(empty($_POST['FS_F2_R6_C3'])){
      $value_FS_F2_R6_C3 = 'NULL';
}else
    $value_FS_F2_R6_C3 = $_POST['FS_F2_R6_C3'];

////////////for R7
if(empty($_POST['FS_F2_R7_C0'])){
      $value_FS_F2_R7_C0 = 'NULL';
}else 
    $value_FS_F2_R7_C0 = $_POST['FS_F2_R7_C0'];

/************************ if user chooses other, then get the value from FS_F2_R0_C1_Other as well ***********/
if(empty($_POST['FS_F2_R7_C1_Other'])){
    $value_FS_F2_R7_C1_Other = 'NULL';
}else 
    $value_FS_F2_R7_C1_Other = $_POST['FS_F2_R7_C1_Other'];

if(empty($_POST['FS_F2_R7_C1'])){
      $value_FS_F2_R7_C1 = 'NULL';
}else{
    if($_POST['FS_F2_R7_C1']=== $other)  // If user chose other
        $value_FS_F2_R7_C1 = $_POST['FS_F2_R7_C1'].": ".$value_FS_F2_R7_C1_Other;
    else
        $value_FS_F2_R7_C1 = $_POST['FS_F2_R7_C1'];
}
/************************************************************************************************************/

if(empty($_POST['FS_F2_R7_C2'])){
      $value_FS_F2_R7_C2 = 'NULL';
}else
    $value_FS_F2_R7_C2 = $_POST['FS_F2_R7_C2'];

if(empty($_POST['FS_F2_R7_C3'])){
      $value_FS_F2_R7_C3 = 'NULL';
}else
    $value_FS_F2_R7_C3 = $_POST['FS_F2_R7_C3'];

// end table FS_F2

if(empty($_POST['FS_G'])){
      $value_FS_G = 'NULL';
}else
    $value_FS_G = $_POST['FS_G'];

if(empty($_POST['FS_H'])){
      $value_FS_H = 'NULL';
}else
    $value_FS_H = $_POST['FS_H'];

/*
if(!strlen(trim($_POST['FS_I_MM']))){
      $value_FS_I_MM = 'NULL';
}else 
    $value_FS_I_MM = $_POST['FS_I_MM'];

if(!strlen(trim($_POST['FS_I_DD']))){
      $value_FS_I_DD = 'NULL';
}else
    $value_FS_I_DD = $_POST['FS_I_DD'];

if(!strlen(trim($_POST['FS_I_YYYY']))){
      $value_FS_I_YYYY = 'NULL';
}else
    $value_FS_I_YYYY = $_POST['FS_I_YYYY'];
*/
if(!strlen(trim($_POST['FS_I']))){
      $value_FS_I = 'NULL';
}else 
    $value_FS_I = $_POST['FS_I'];

/*
if(!strlen(trim($_POST['FS_J_MM']))){
      $value_FS_J_MM = 'NULL';
}else 
    $value_FS_J_MM = $_POST['FS_J_MM'];

if(!strlen(trim($_POST['FS_J_DD']))){
      $value_FS_J_DD = 'NULL';
}else
    $value_FS_J_DD = $_POST['FS_J_DD'];

if(!strlen(trim($_POST['FS_J_YYYY']))){
      $value_FS_J_YYYY = 'NULL';
}else
    $value_FS_J_YYYY = $_POST['FS_J_YYYY'];
*/

if(!strlen(trim($_POST['FS_J']))){
      $value_FS_J = 'NULL';
}else 
    $value_FS_J = $_POST['FS_J'];

if(empty($_POST['FS_J_NA'])){
      $value_FS_J_NA = 'NULL';
}else
    $value_FS_J_NA = $_POST['FS_J_NA'];

/*
if(!strlen(trim($_POST['FS_K_MM']))){
      $value_FS_K_MM = 'NULL';
}else 
    $value_FS_K_MM = $_POST['FS_K_MM'];

if(!strlen(trim($_POST['FS_K_DD']))){
      $value_FS_K_DD = 'NULL';
}else
    $value_FS_K_DD = $_POST['FS_K_DD'];

if(!strlen(trim($_POST['FS_K_YYYY']))){
      $value_FS_K_YYYY = 'NULL';
}else
    $value_FS_K_YYYY = $_POST['FS_K_YYYY'];
*/

if(!strlen(trim($_POST['FS_K']))){
      $value_FS_K = 'NULL';
}else 
    $value_FS_K = $_POST['FS_K'];

if(empty($_POST['FS_K_RADIO'])){
      $value_FS_K_RADIO = 'NULL';
}else
    $value_FS_K_RADIO = $_POST['FS_K_RADIO'];

/*
if(!strlen(trim($_POST['FS_L_MM']))){
      $value_FS_L_MM = 'NULL';
}else 
    $value_FS_L_MM = $_POST['FS_L_MM'];

if(!strlen(trim($_POST['FS_L_DD']))){
      $value_FS_L_DD = 'NULL';
}else
    $value_FS_L_DD = $_POST['FS_L_DD'];

if(!strlen(trim($_POST['FS_L_YYYY']))){
      $value_FS_L_YYYY = 'NULL';
}else
    $value_FS_L_YYYY = $_POST['FS_L_YYYY'];
*/

if(!strlen(trim($_POST['FS_L']))){
      $value_FS_L = 'NULL';
}else 
    $value_FS_L = $_POST['FS_L'];

if(empty($_POST['FS_L_RADIO'])){
      $value_FS_L_RADIO = 'NULL';
}else
    $value_FS_L_RADIO = $_POST['FS_L_RADIO'];


$checkbox = $_POST['FS_M1'];
if(empty($_POST['FS_M2'])){
      $value_FS_M2 = 'NULL';
}else
    $value_FS_M2 = $_POST['FS_M2'];

  $list = array ();
  $list[''] = '';
  $list['Face Sheet'] = '';
   
  $list[ 'A. Name of state and county: '] = $value_FS_A;
  $list[ 'B. Case name: '] = $value_FS_B;
  $list[ 'C. Period under review: '] = $value_FS_C;
  $list[ 'D1. Reviewer name(s): '] = $value_FS_D_RN;
  $list[ 'D2. QA Completed by: '] = $value_FS_D_QACB;
  $list[ 'E. Date case reviewed: '] = $value_FS_E;

  $list[' '] = ' ';
  $list[' '] = ' ';
  $list[' '] = ' ';
  $list['Question G.'] = $value_FS_G;
  $list['Question H.'] = $value_FS_H;
  $list['Question I.'] = $value_FS_I;
  if(!strlen(trim($_POST['FS_J']))){
      if(!empty($_POST['FS_J_NA']))
          $list['Question J.'] = $value_FS_J_NA;
  }
  else {
     $list['Question J.'] = $value_FS_J;
}
  

    if(!strlen(trim($_POST['FS_K']))){
      if(!empty($_POST['FS_K_RADIO']))
          $list['Question K.'] = $value_FS_K_RADIO;
  }
  else {
     $list['Question K.'] = $value_FS_K;
  }
     
   if(!strlen(trim($_POST['FS_L']))){
      if(!empty($_POST['FS_L_RADIO']))
          $list['Question L.'] = $value_FS_L_RADIO;
  }
  else {
     $list['Question L.'] = $value_FS_L;
  } 
     
     
 for($i=0; $i<count($checkbox); $i++)
    {
      $list[ 'Question M1 Reason(s)_'.$i] = $checkbox[$i];
    }
    
    $list['Question M2.'] = $value_FS_M2;
    
    
  $_SESSION['FS'] = $list;

 //write record into file
 $parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
// $filename = 'Outcome2_I2'.date("Ymd").'_'.rand(1, 100); // add userID or something here
 $filename = $_SESSION['O1_file_name'].'_Face_Sheet';

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

  foreach ( $_SESSION['FS'] as $key => $val)
 {
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
  fclose($fp);
 
 // Save A1 table to file
   $FS_F1_hdr = "Target Child(Yes/No), Child(ren)'s Name(s), Race(s), Ethnicity, Date(s) of Birth (MM/DD/YY):, Gender:, Interviewed (Yes/No), ";
   $FS_F1_output="\n";
   $FS_F1_output.=", ".", ".", "."F1 Child Table".", ".", ".", ".", ".", ";
   $FS_F1_output .= "\n".$FS_F1_hdr;
   $FS_F1_output .= "\n";
   $FS_F1_output .=  
           $value_FS_F1_RO_C0 . ", ". $value_FS_F1_RO_C1 . ", ". $value_FS_F1_RO_C2 . ", ". $value_FS_F1_RO_C3 . ", ". $value_FS_F1_RO_C4 . ", ".
           $value_FS_F1_RO_C5 . ", ". $value_FS_F1_RO_C6 . ", "."\n".
           $value_FS_F1_R1_C0 . ", ". $value_FS_F1_R1_C1 . ", ". $value_FS_F1_R1_C2 . ", ". $value_FS_F1_R1_C3 . ", ". $value_FS_F1_R1_C4 . ", ".
           $value_FS_F1_R1_C5 . ", ". $value_FS_F1_R1_C6 . ", "."\n".
           $value_FS_F1_R2_C0 . ", ". $value_FS_F1_R2_C1 . ", ". $value_FS_F1_R2_C2 . ", ". $value_FS_F1_R2_C3 . ", ". $value_FS_F1_R2_C4 . ", ".
           $value_FS_F1_R2_C5 . ", ". $value_FS_F1_R2_C6 . ", "."\n".
           $value_FS_F1_R3_C0 . ", ". $value_FS_F1_R3_C1 . ", ". $value_FS_F1_R3_C2 . ", ". $value_FS_F1_R3_C3 . ", ". $value_FS_F1_R3_C4 . ", ".
           $value_FS_F1_R3_C5 . ", ". $value_FS_F1_R3_C6 . ", "."\n".
           $value_FS_F1_R4_C0 . ", ". $value_FS_F1_R4_C1 . ", ". $value_FS_F1_R4_C2 . ", ". $value_FS_F1_R4_C3 . ", ". $value_FS_F1_R4_C4 . ", ".
           $value_FS_F1_R4_C5 . ", ". $value_FS_F1_R4_C6 . ", "."\n".
           $value_FS_F1_R5_C0 . ", ". $value_FS_F1_R5_C1 . ", ". $value_FS_F1_R5_C2 . ", ". $value_FS_F1_R5_C3 . ", ". $value_FS_F1_R5_C4 . ", ".
           $value_FS_F1_R5_C5 . ", ". $value_FS_F1_R5_C6 . ", "."\n"
          ;
   
$_SESSION['FS_F1_Table'] = $FS_F1_output;
file_put_contents($sub_dir.$filename.'.csv',$FS_F1_output, FILE_APPEND);
 

$FS_F2_hdr = "Name, Role, Relationship to Child, Interviewed (Yes/No),";
   $FS_F2_output="\n";
   $FS_F2_output.=", "."F2 Case Participant Table".", ".", ".", ".", ".", ";
   $FS_F2_output .= "\n".$FS_F2_hdr;
   $FS_F2_output .= "\n";
   $FS_F2_output .=  
           $value_FS_F2_R0_C0 . ", ". $value_FS_F2_R0_C1 . ", ". $value_FS_F2_R0_C2 . ", ". $value_FS_F2_R0_C3 . ", "."\n".
           $value_FS_F2_R1_C0 . ", ". $value_FS_F2_R1_C1 . ", ". $value_FS_F2_R1_C2 . ", ". $value_FS_F2_R1_C3 . ", "."\n".
           $value_FS_F2_R2_C0 . ", ". $value_FS_F2_R2_C1 . ", ". $value_FS_F2_R2_C2 . ", ". $value_FS_F2_R2_C3 . ", "."\n".
           $value_FS_F2_R3_C0 . ", ". $value_FS_F2_R3_C1 . ", ". $value_FS_F2_R3_C2 . ", ". $value_FS_F2_R3_C3 . ", "."\n".           
           $value_FS_F2_R4_C0 . ", ". $value_FS_F2_R4_C1 . ", ". $value_FS_F2_R4_C2 . ", ". $value_FS_F2_R4_C3 . ", "."\n".
           $value_FS_F2_R5_C0 . ", ". $value_FS_F2_R5_C1 . ", ". $value_FS_F2_R5_C2 . ", ". $value_FS_F2_R5_C3 . ", "."\n".
           $value_FS_F2_R6_C0 . ", ". $value_FS_F2_R6_C1 . ", ". $value_FS_F2_R6_C2 . ", ". $value_FS_F2_R6_C3 . ", "."\n".
           $value_FS_F2_R7_C0 . ", ". $value_FS_F2_R7_C1 . ", ". $value_FS_F2_R7_C2 . ", ". $value_FS_F2_R7_C3 . ", "."\n"
          ;
   
$_SESSION['FS_F2_Table'] = $FS_F2_output;
file_put_contents($sub_dir.$filename.'.csv',$FS_F2_output, FILE_APPEND);

  $form_data['success'] = true;
  $form_data['posted'] = 'Data Saved Successfully ';
        
  echo json_encode($form_data);


?>

