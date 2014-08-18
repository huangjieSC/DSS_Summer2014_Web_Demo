<?php

$list = array();
$list[' '] = ' ';

// ******************* Face Sheet ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Face Sheet'] = ' ';

$value_FS_A = isset($_POST['FS_A']) ? $_POST['FS_A'] : '';  
$list['FS_A'] =  $value_FS_A;

$value_FS_B = isset($_POST['FS_B']) ? $_POST['FS_B'] : '';  
$list['FS_B'] =  $value_FS_B;

$value_FS_C = isset($_POST['FS_C']) ? $_POST['FS_C'] : '';  
$list['FS_C'] =  $value_FS_C;

$value_FS_D_RN = isset($_POST['FS_D_RN']) ? $_POST['FS_D_RN'] : '';  
$list['FS_D_RN'] =  $value_FS_D_RN;

$value_FS_D_QACB = isset($_POST['FS_D_QACB']) ? $_POST['FS_D_QACB'] : '';  
$list['FS_D_QACB'] =  $value_FS_D_QACB;

$value_FS_E = isset($_POST['FS_E']) ? $_POST['FS_E'] : '';  
$list['FS_E'] =  $value_FS_E;

//for table FS_F1
$list['FS_F1_Table'] = ' ';
// for Row 0 
$value_FS_F1_RO_C0 = isset($_POST['FS_F1_RO_C0']) ? $_POST['FS_F1_RO_C0'] : '';
$value_FS_F1_RO_C1 = isset($_POST['FS_F1_RO_C1']) ? $_POST['FS_F1_RO_C1'] : '';
$value_FS_F1_RO_C2 = isset($_POST['FS_F1_RO_C2']) ? $_POST['FS_F1_RO_C2'] : '';
$value_FS_F1_RO_C3 = isset($_POST['FS_F1_RO_C3']) ? $_POST['FS_F1_RO_C3'] : '';
$value_FS_F1_RO_C4 = isset($_POST['FS_F1_RO_C4']) ? $_POST['FS_F1_RO_C4'] : '';
$value_FS_F1_RO_C5 = isset($_POST['FS_F1_RO_C5']) ? $_POST['FS_F1_RO_C5'] : '';
$value_FS_F1_RO_C6 = isset($_POST['FS_F1_RO_C6']) ? $_POST['FS_F1_RO_C6'] : '';

$list['FS_F1_RO_C0'] =  $value_FS_F1_RO_C0;
$list['FS_F1_RO_C1'] =  $value_FS_F1_RO_C1;
$list['FS_F1_RO_C2'] =  $value_FS_F1_RO_C2;
$list['FS_F1_RO_C3'] =  $value_FS_F1_RO_C3;
$list['FS_F1_RO_C4'] =  $value_FS_F1_RO_C4;
$list['FS_F1_RO_C5'] =  $value_FS_F1_RO_C5;
$list['FS_F1_RO_C6'] =  $value_FS_F1_RO_C6;

// for Row 1 
$value_FS_F1_R1_C0 = isset($_POST['FS_F1_R1_C0']) ? $_POST['FS_F1_R1_C0'] : '';
$value_FS_F1_R1_C1 = isset($_POST['FS_F1_R1_C1']) ? $_POST['FS_F1_R1_C1'] : '';
$value_FS_F1_R1_C2 = isset($_POST['FS_F1_R1_C2']) ? $_POST['FS_F1_R1_C2'] : '';
$value_FS_F1_R1_C3 = isset($_POST['FS_F1_R1_C3']) ? $_POST['FS_F1_R1_C3'] : '';
$value_FS_F1_R1_C4 = isset($_POST['FS_F1_R1_C4']) ? $_POST['FS_F1_R1_C4'] : '';
$value_FS_F1_R1_C5 = isset($_POST['FS_F1_R1_C5']) ? $_POST['FS_F1_R1_C5'] : '';
$value_FS_F1_R1_C6 = isset($_POST['FS_F1_R1_C6']) ? $_POST['FS_F1_R1_C6'] : '';

$list['FS_F1_R1_C0'] =  $value_FS_F1_R1_C0;
$list['FS_F1_R1_C1'] =  $value_FS_F1_R1_C1;
$list['FS_F1_R1_C2'] =  $value_FS_F1_R1_C2;
$list['FS_F1_R1_C3'] =  $value_FS_F1_R1_C3;
$list['FS_F1_R1_C4'] =  $value_FS_F1_R1_C4;
$list['FS_F1_R1_C5'] =  $value_FS_F1_R1_C5;
$list['FS_F1_R1_C6'] =  $value_FS_F1_R1_C6;

// for Row 2
$value_FS_F1_R2_C0 = isset($_POST['FS_F1_R2_C0']) ? $_POST['FS_F1_R2_C0'] : '';
$value_FS_F1_R2_C1 = isset($_POST['FS_F1_R2_C1']) ? $_POST['FS_F1_R2_C1'] : '';
$value_FS_F1_R2_C2 = isset($_POST['FS_F1_R2_C2']) ? $_POST['FS_F1_R2_C2'] : '';
$value_FS_F1_R2_C3 = isset($_POST['FS_F1_R2_C3']) ? $_POST['FS_F1_R2_C3'] : '';
$value_FS_F1_R2_C4 = isset($_POST['FS_F1_R2_C4']) ? $_POST['FS_F1_R2_C4'] : '';
$value_FS_F1_R2_C5 = isset($_POST['FS_F1_R2_C5']) ? $_POST['FS_F1_R2_C5'] : '';
$value_FS_F1_R2_C6 = isset($_POST['FS_F1_R2_C6']) ? $_POST['FS_F1_R2_C6'] : '';

$list['FS_F1_R2_C0'] =  $value_FS_F1_R2_C0;
$list['FS_F1_R2_C1'] =  $value_FS_F1_R2_C1;
$list['FS_F1_R2_C2'] =  $value_FS_F1_R2_C2;
$list['FS_F1_R2_C3'] =  $value_FS_F1_R2_C3;
$list['FS_F1_R2_C4'] =  $value_FS_F1_R2_C4;
$list['FS_F1_R2_C5'] =  $value_FS_F1_R2_C5;
$list['FS_F1_R2_C6'] =  $value_FS_F1_R2_C6;

// for Row 3
$value_FS_F1_R3_C0 = isset($_POST['FS_F1_R3_C0']) ? $_POST['FS_F1_R3_C0'] : '';
$value_FS_F1_R3_C1 = isset($_POST['FS_F1_R3_C1']) ? $_POST['FS_F1_R3_C1'] : '';
$value_FS_F1_R3_C2 = isset($_POST['FS_F1_R3_C2']) ? $_POST['FS_F1_R3_C2'] : '';
$value_FS_F1_R3_C3 = isset($_POST['FS_F1_R3_C3']) ? $_POST['FS_F1_R3_C3'] : '';
$value_FS_F1_R3_C4 = isset($_POST['FS_F1_R3_C4']) ? $_POST['FS_F1_R3_C4'] : '';
$value_FS_F1_R3_C5 = isset($_POST['FS_F1_R3_C5']) ? $_POST['FS_F1_R3_C5'] : '';
$value_FS_F1_R3_C6 = isset($_POST['FS_F1_R3_C6']) ? $_POST['FS_F1_R3_C6'] : '';

$list['FS_F1_R3_C0'] =  $value_FS_F1_R3_C0;
$list['FS_F1_R3_C1'] =  $value_FS_F1_R3_C1;
$list['FS_F1_R3_C2'] =  $value_FS_F1_R3_C2;
$list['FS_F1_R3_C3'] =  $value_FS_F1_R3_C3;
$list['FS_F1_R3_C4'] =  $value_FS_F1_R3_C4;
$list['FS_F1_R3_C5'] =  $value_FS_F1_R3_C5;
$list['FS_F1_R3_C6'] =  $value_FS_F1_R3_C6;

// for Row 4
$value_FS_F1_R4_C0 = isset($_POST['FS_F1_R4_C0']) ? $_POST['FS_F1_R4_C0'] : '';
$value_FS_F1_R4_C1 = isset($_POST['FS_F1_R4_C1']) ? $_POST['FS_F1_R4_C1'] : '';
$value_FS_F1_R4_C2 = isset($_POST['FS_F1_R4_C2']) ? $_POST['FS_F1_R4_C2'] : '';
$value_FS_F1_R4_C3 = isset($_POST['FS_F1_R4_C3']) ? $_POST['FS_F1_R4_C3'] : '';
$value_FS_F1_R4_C4 = isset($_POST['FS_F1_R4_C4']) ? $_POST['FS_F1_R4_C4'] : '';
$value_FS_F1_R4_C5 = isset($_POST['FS_F1_R4_C5']) ? $_POST['FS_F1_R4_C5'] : '';
$value_FS_F1_R4_C6 = isset($_POST['FS_F1_R4_C6']) ? $_POST['FS_F1_R4_C6'] : '';

$list['FS_F1_R4_C0'] =  $value_FS_F1_R4_C0;
$list['FS_F1_R4_C1'] =  $value_FS_F1_R4_C1;
$list['FS_F1_R4_C2'] =  $value_FS_F1_R4_C2;
$list['FS_F1_R4_C3'] =  $value_FS_F1_R4_C3;
$list['FS_F1_R4_C4'] =  $value_FS_F1_R4_C4;
$list['FS_F1_R4_C5'] =  $value_FS_F1_R4_C5;
$list['FS_F1_R4_C6'] =  $value_FS_F1_R4_C6;

// for Row 5
$value_FS_F1_R5_C0 = isset($_POST['FS_F1_R5_C0']) ? $_POST['FS_F1_R5_C0'] : '';
$value_FS_F1_R5_C1 = isset($_POST['FS_F1_R5_C1']) ? $_POST['FS_F1_R5_C1'] : '';
$value_FS_F1_R5_C2 = isset($_POST['FS_F1_R5_C2']) ? $_POST['FS_F1_R5_C2'] : '';
$value_FS_F1_R5_C3 = isset($_POST['FS_F1_R5_C3']) ? $_POST['FS_F1_R5_C3'] : '';
$value_FS_F1_R5_C4 = isset($_POST['FS_F1_R5_C4']) ? $_POST['FS_F1_R5_C4'] : '';
$value_FS_F1_R5_C5 = isset($_POST['FS_F1_R5_C5']) ? $_POST['FS_F1_R5_C5'] : '';
$value_FS_F1_R5_C6 = isset($_POST['FS_F1_R5_C6']) ? $_POST['FS_F1_R5_C6'] : '';

$list['FS_F1_R5_C0'] =  $value_FS_F1_R5_C0;
$list['FS_F1_R5_C1'] =  $value_FS_F1_R5_C1;
$list['FS_F1_R5_C2'] =  $value_FS_F1_R5_C2;
$list['FS_F1_R5_C3'] =  $value_FS_F1_R5_C3;
$list['FS_F1_R5_C4'] =  $value_FS_F1_R5_C4;
$list['FS_F1_R5_C5'] =  $value_FS_F1_R5_C5;
$list['FS_F1_R5_C6'] =  $value_FS_F1_R5_C6;
//end table   

//for table FS_F2
$list['FS_F2_Table'] = ' ';
$other = 'Other';
// for Row 0 
$value_FS_F2_R0_C0 = isset($_POST['FS_F2_R0_C0']) ? $_POST['FS_F2_R0_C0'] : '';
$value_FS_F2_R0_C1 = isset($_POST['FS_F2_R0_C1']) ? $_POST['FS_F2_R0_C1'] : '';
$value_FS_F2_R0_C2 = isset($_POST['FS_F2_R0_C2']) ? $_POST['FS_F2_R0_C2'] : '';
$value_FS_F2_R0_C3 = isset($_POST['FS_F2_R0_C3']) ? $_POST['FS_F2_R0_C3'] : '';
$value_FS_F2_R0_C1_Other = isset($_POST['FS_F2_R0_C1_Other']) ? $_POST['FS_F2_R0_C1_Other'] : '';
if($value_FS_F2_R0_C1=== $other)  // If user chose other
        $value_FS_F2_R0_C1_Other = $value_FS_F2_R0_C1.": ".$value_FS_F2_R0_C1_Other;
else
        $value_FS_F2_R0_C1 = $value_FS_F2_R0_C1;

$list['FS_F2_R0_C0'] =  $value_FS_F2_R0_C0;
$list['FS_F2_R0_C1'] =  $value_FS_F2_R0_C1;
$list['FS_F2_R0_C1_Other'] =  $value_FS_F2_R0_C1_Other;
$list['FS_F2_R0_C2'] =  $value_FS_F2_R0_C2;
$list['FS_F2_R0_C3'] =  $value_FS_F2_R0_C3;

// for Row 1 
$value_FS_F2_R1_C0 = isset($_POST['FS_F2_R1_C0']) ? $_POST['FS_F2_R1_C0'] : '';
$value_FS_F2_R1_C1 = isset($_POST['FS_F2_R1_C1']) ? $_POST['FS_F2_R1_C1'] : '';
$value_FS_F2_R1_C2 = isset($_POST['FS_F2_R1_C2']) ? $_POST['FS_F2_R1_C2'] : '';
$value_FS_F2_R1_C3 = isset($_POST['FS_F2_R1_C3']) ? $_POST['FS_F2_R1_C3'] : '';
$value_FS_F2_R1_C1_Other = isset($_POST['FS_F2_R1_C1_Other']) ? $_POST['FS_F2_R1_C1_Other'] : '';
if($value_FS_F2_R1_C1=== $other)  // If user chose other
        $value_FS_F2_R1_C1_Other = $value_FS_F2_R1_C1.": ".$value_FS_F2_R1_C1_Other;
else
        $value_FS_F2_R1_C1 = $value_FS_F2_R1_C1;

$list['FS_F2_R1_C0'] =  $value_FS_F2_R1_C0;
$list['FS_F2_R1_C1'] =  $value_FS_F2_R1_C1;
$list['FS_F2_R1_C1_Other'] =  $value_FS_F2_R1_C1_Other;
$list['FS_F2_R1_C2'] =  $value_FS_F2_R1_C2;
$list['FS_F2_R1_C3'] =  $value_FS_F2_R1_C3;

// for Row 2 
$value_FS_F2_R2_C0 = isset($_POST['FS_F2_R2_C0']) ? $_POST['FS_F2_R2_C0'] : '';
$value_FS_F2_R2_C1 = isset($_POST['FS_F2_R2_C1']) ? $_POST['FS_F2_R2_C1'] : '';
$value_FS_F2_R2_C2 = isset($_POST['FS_F2_R2_C2']) ? $_POST['FS_F2_R2_C2'] : '';
$value_FS_F2_R2_C3 = isset($_POST['FS_F2_R2_C3']) ? $_POST['FS_F2_R2_C3'] : '';
$value_FS_F2_R2_C1_Other = isset($_POST['FS_F2_R2_C1_Other']) ? $_POST['FS_F2_R2_C1_Other'] : '';
if($value_FS_F2_R2_C1=== $other)  // If user chose other
        $value_FS_F2_R2_C1_Other = $value_FS_F2_R2_C1.": ".$value_FS_F2_R2_C1_Other;
else
        $value_FS_F2_R2_C1 = $value_FS_F2_R2_C1;

$list['FS_F2_R2_C0'] =  $value_FS_F2_R2_C0;
$list['FS_F2_R2_C1'] =  $value_FS_F2_R2_C1;
$list['FS_F2_R2_C1_Other'] =  $value_FS_F2_R2_C1_Other;
$list['FS_F2_R2_C2'] =  $value_FS_F2_R2_C2;
$list['FS_F2_R2_C3'] =  $value_FS_F2_R2_C3;

// for Row 3 
$value_FS_F2_R3_C0 = isset($_POST['FS_F2_R3_C0']) ? $_POST['FS_F2_R3_C0'] : '';
$value_FS_F2_R3_C1 = isset($_POST['FS_F2_R3_C1']) ? $_POST['FS_F2_R3_C1'] : '';
$value_FS_F2_R3_C2 = isset($_POST['FS_F2_R3_C2']) ? $_POST['FS_F2_R3_C2'] : '';
$value_FS_F2_R3_C3 = isset($_POST['FS_F2_R3_C3']) ? $_POST['FS_F2_R3_C3'] : '';
$value_FS_F2_R3_C1_Other = isset($_POST['FS_F2_R3_C1_Other']) ? $_POST['FS_F2_R3_C1_Other'] : '';
if($value_FS_F2_R3_C1=== $other)  // If user chose other
        $value_FS_F2_R3_C1_Other = $value_FS_F2_R3_C1.": ".$value_FS_F2_R3_C1_Other;
else
        $value_FS_F2_R3_C1 = $value_FS_F2_R3_C1;

$list['FS_F2_R3_C0'] =  $value_FS_F2_R3_C0;
$list['FS_F2_R3_C1'] =  $value_FS_F2_R3_C1;
$list['FS_F2_R3_C1_Other'] =  $value_FS_F2_R3_C1_Other;
$list['FS_F2_R3_C2'] =  $value_FS_F2_R3_C2;
$list['FS_F2_R3_C3'] =  $value_FS_F2_R3_C3;

// for Row 4 
$value_FS_F2_R4_C0 = isset($_POST['FS_F2_R4_C0']) ? $_POST['FS_F2_R4_C0'] : '';
$value_FS_F2_R4_C1 = isset($_POST['FS_F2_R4_C1']) ? $_POST['FS_F2_R4_C1'] : '';
$value_FS_F2_R4_C2 = isset($_POST['FS_F2_R4_C2']) ? $_POST['FS_F2_R4_C2'] : '';
$value_FS_F2_R4_C3 = isset($_POST['FS_F2_R4_C3']) ? $_POST['FS_F2_R4_C3'] : '';
$value_FS_F2_R4_C1_Other = isset($_POST['FS_F2_R4_C1_Other']) ? $_POST['FS_F2_R4_C1_Other'] : '';
if($value_FS_F2_R4_C1=== $other)  // If user chose other
        $value_FS_F2_R4_C1_Other = $value_FS_F2_R4_C1.": ".$value_FS_F2_R4_C1_Other;
else
        $value_FS_F2_R4_C1 = $value_FS_F2_R4_C1;

$list['FS_F2_R4_C0'] =  $value_FS_F2_R4_C0;
$list['FS_F2_R4_C1'] =  $value_FS_F2_R4_C1;
$list['FS_F2_R4_C1_Other'] =  $value_FS_F2_R4_C1_Other;
$list['FS_F2_R4_C2'] =  $value_FS_F2_R4_C2;
$list['FS_F2_R4_C3'] =  $value_FS_F2_R4_C3;

// for Row 5 
$value_FS_F2_R5_C0 = isset($_POST['FS_F2_R5_C0']) ? $_POST['FS_F2_R5_C0'] : '';
$value_FS_F2_R5_C1 = isset($_POST['FS_F2_R5_C1']) ? $_POST['FS_F2_R5_C1'] : '';
$value_FS_F2_R5_C2 = isset($_POST['FS_F2_R5_C2']) ? $_POST['FS_F2_R5_C2'] : '';
$value_FS_F2_R5_C3 = isset($_POST['FS_F2_R5_C3']) ? $_POST['FS_F2_R5_C3'] : '';
$value_FS_F2_R5_C1_Other = isset($_POST['FS_F2_R5_C1_Other']) ? $_POST['FS_F2_R5_C1_Other'] : '';
if($value_FS_F2_R5_C1=== $other)  // If user chose other
        $value_FS_F2_R5_C1_Other = $value_FS_F2_R5_C1.": ".$value_FS_F2_R5_C1_Other;
else
        $value_FS_F2_R5_C1 = $value_FS_F2_R5_C1;

$list['FS_F2_R5_C0'] =  $value_FS_F2_R5_C0;
$list['FS_F2_R5_C1'] =  $value_FS_F2_R5_C1;
$list['FS_F2_R5_C1_Other'] =  $value_FS_F2_R5_C1_Other;
$list['FS_F2_R5_C2'] =  $value_FS_F2_R5_C2;
$list['FS_F2_R5_C3'] =  $value_FS_F2_R5_C3;

// for Row 6 
$value_FS_F2_R6_C0 = isset($_POST['FS_F2_R6_C0']) ? $_POST['FS_F2_R6_C0'] : '';
$value_FS_F2_R6_C1 = isset($_POST['FS_F2_R6_C1']) ? $_POST['FS_F2_R6_C1'] : '';
$value_FS_F2_R6_C2 = isset($_POST['FS_F2_R6_C2']) ? $_POST['FS_F2_R6_C2'] : '';
$value_FS_F2_R6_C3 = isset($_POST['FS_F2_R6_C3']) ? $_POST['FS_F2_R6_C3'] : '';
$value_FS_F2_R6_C1_Other = isset($_POST['FS_F2_R6_C1_Other']) ? $_POST['FS_F2_R6_C1_Other'] : '';
if($value_FS_F2_R6_C1=== $other)  // If user chose other
        $value_FS_F2_R6_C1_Other = $value_FS_F2_R6_C1.": ".$value_FS_F2_R6_C1_Other;
else
        $value_FS_F2_R6_C1 = $value_FS_F2_R6_C1;

$list['FS_F2_R6_C0'] =  $value_FS_F2_R6_C0;
$list['FS_F2_R6_C1'] =  $value_FS_F2_R6_C1;
$list['FS_F2_R6_C1_Other'] =  $value_FS_F2_R6_C1_Other;
$list['FS_F2_R6_C2'] =  $value_FS_F2_R6_C2;
$list['FS_F2_R6_C3'] =  $value_FS_F2_R6_C3;

// for Row 7 
$value_FS_F2_R7_C0 = isset($_POST['FS_F2_R7_C0']) ? $_POST['FS_F2_R7_C0'] : '';
$value_FS_F2_R7_C1 = isset($_POST['FS_F2_R7_C1']) ? $_POST['FS_F2_R7_C1'] : '';
$value_FS_F2_R7_C2 = isset($_POST['FS_F2_R7_C2']) ? $_POST['FS_F2_R7_C2'] : '';
$value_FS_F2_R7_C3 = isset($_POST['FS_F2_R7_C3']) ? $_POST['FS_F2_R7_C3'] : '';
$value_FS_F2_R7_C1_Other = isset($_POST['FS_F2_R7_C1_Other']) ? $_POST['FS_F2_R7_C1_Other'] : '';
if($value_FS_F2_R7_C1=== $other)  // If user chose other
        $value_FS_F2_R7_C1_Other = $value_FS_F2_R7_C1.": ".$value_FS_F2_R7_C1_Other;
else
        $value_FS_F2_R7_C1 = $value_FS_F2_R7_C1;

$list['FS_F2_R7_C0'] =  $value_FS_F2_R7_C0;
$list['FS_F2_R7_C1'] =  $value_FS_F2_R7_C1;
$list['FS_F2_R7_C1_Other'] =  $value_FS_F2_R7_C1_Other;
$list['FS_F2_R7_C2'] =  $value_FS_F2_R7_C2;
$list['FS_F2_R7_C3'] =  $value_FS_F2_R7_C3;
//end table  

if(empty($_POST['FS_G'])){
      $value_FS_G = 'NULL';
}else
    $value_FS_G = $_POST['FS_G'];
$list['FS_G'] =  $value_FS_G;

if(empty($_POST['FS_H'])){
      $value_FS_H = 'NULL';
}else
    $value_FS_H = $_POST['FS_H'];
$list['FS_H'] =  $value_FS_H;

$value_FS_I = isset($_POST['FS_I']) ? $_POST['FS_I'] : '';  
$list['FS_I'] =  $value_FS_I;

$value_FS_J = isset($_POST['FS_J']) ? $_POST['FS_J'] : '';  
$list['FS_J'] =  $value_FS_J;

if(empty($_POST['FS_J_NA'])){
      $value_FS_J_NA = 'NULL';
}else
    $value_FS_J_NA = $_POST['FS_J_NA'];
$list['FS_J_NA'] =  $value_FS_J_NA;

$value_FS_K = isset($_POST['FS_K']) ? $_POST['FS_K'] : '';  
$list['FS_K'] =  $value_FS_K;

if(empty($_POST['FS_K_RADIO'])){
      $value_FS_K_RADIO = 'NULL';
}else
    $value_FS_K_RADIO = $_POST['FS_K_RADIO'];
$list['FS_K_RADIO'] =  $value_FS_K_RADIO;

$value_FS_L = isset($_POST['FS_L']) ? $_POST['FS_L'] : '';  
$list['FS_L'] =  $value_FS_L;

if(empty($_POST['FS_L_RADIO'])){
      $value_FS_L_RADIO = 'NULL';
}else
    $value_FS_L_RADIO = $_POST['FS_L_RADIO'];
$list['FS_L_RADIO'] =  $value_FS_L_RADIO;


$FS_M1_CHECK_Array = array(
    "Physical abuse" => "1",
    "Abandonment" => "2",
    "Substance abuse by child" => "3",
    "Sexual abuse" => "4",
    "Mental/physical health of parent" => "5",
    "Domestic violence in child's home" => "6",
    "Emotional maltreatment" => "7",    
    "Mental/physical health of child" => "8",
    "Child in juvenile justice system" => "9",
    "Neglect (not including medical neglect)" => "10",
    "Substance abuse by parent(s)" => "11",
    "Other (specify)" => "12",
    "Medical neglect" => "13",
    "Child's behavior" => "14",
);
    
// initialize all checkbox values in the record to NULL
foreach ($FS_M1_CHECK_Array as $key => $value){
   $list['FS_M1_SRC_'.$value] = 'NULL';
}

if(isset($_POST['FS_M1'])){
    $FS_M1_CHECK = $_POST['FS_M1'];
    for($i=0; $i<count($FS_M1_CHECK); $i++)
    {   
        foreach ($FS_M1_CHECK_Array as $key => $value){
            if($key == $FS_M1_CHECK[$i]){
                $list['FS_M1_SRC_'.$value] = $FS_M1_CHECK[$i];
            }
        }  
    }
}

if(empty($_POST['FS_M2'])){
      $value_FS_M2 = 'NULL';
}else
    $value_FS_M2 = $_POST['FS_M2'];
$list['FS_M2'] =  $value_FS_M2;

// ******************* ITEM 1 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Item 1'] = ' ';

if(empty($_POST['O1_I1_AC'])){
      $value_comments = 'NULL';
}else 
    $value_comments = $_POST['O1_I1_AC'];
  $list['O1_I1_AC'] =  $value_comments;

 $value_O1_I1_A1 = isset($_POST['O1_I1_A1'])? $_POST['O1_I1_A1']: ""; 
 $list['O1_I1_A1'] =  $value_O1_I1_A1;

//for table O1_I1_A1
$list['O1_I1_A1_Table'] = ' ';
// for Row 0 
$value_O1_I1_A1_R0_C0 = isset($_POST['O1_I1_A1_R0_C0']) ? $_POST['O1_I1_A1_R0_C0'] : '';
$value_O1_I1_A1_R0_C1 = isset($_POST['O1_I1_A1_R0_C1']) ? $_POST['O1_I1_A1_R0_C1'] : '';
$value_O1_I1_A1_R0_C2 = isset($_POST['O1_I1_A1_R0_C2']) ? $_POST['O1_I1_A1_R0_C2'] : '';
$value_O1_I1_A1_R0_C3 = isset($_POST['O1_I1_A1_R0_C3']) ? $_POST['O1_I1_A1_R0_C3'] : '';
$value_O1_I1_A1_R0_C4 = isset($_POST['O1_I1_A1_R0_C4']) ? $_POST['O1_I1_A1_R0_C4'] : '';
$value_O1_I1_A1_R0_C5 = isset($_POST['O1_I1_A1_R0_C5']) ? $_POST['O1_I1_A1_R0_C5'] : '';
$value_O1_I1_A1_R0_C6 = isset($_POST['O1_I1_A1_R0_C6']) ? $_POST['O1_I1_A1_R0_C6'] : '';
$value_O1_I1_A1_R0_C7 = isset($_POST['O1_I1_A1_R0_C7']) ? $_POST['O1_I1_A1_R0_C7'] : '';
$value_O1_I1_A1_R0_C8 = isset($_POST['O1_I1_A1_R0_C8']) ? $_POST['O1_I1_A1_R0_C8'] : '';
$value_O1_I1_A1_R0_C9 = isset($_POST['O1_I1_A1_R0_C9']) ? $_POST['O1_I1_A1_R0_C9'] : '';

$list['O1_I1_A1_R0_C0'] =  $value_O1_I1_A1_R0_C0;
$list['O1_I1_A1_R0_C1'] =  $value_O1_I1_A1_R0_C1;
$list['O1_I1_A1_R0_C2'] =  $value_O1_I1_A1_R0_C2;
$list['O1_I1_A1_R0_C3'] =  $value_O1_I1_A1_R0_C3;
$list['O1_I1_A1_R0_C4'] =  $value_O1_I1_A1_R0_C4;
$list['O1_I1_A1_R0_C5'] =  $value_O1_I1_A1_R0_C5;
$list['O1_I1_A1_R0_C6'] =  $value_O1_I1_A1_R0_C6;
$list['O1_I1_A1_R0_C7'] =  $value_O1_I1_A1_R0_C7;
$list['O1_I1_A1_R0_C8'] =  $value_O1_I1_A1_R0_C8;
$list['O1_I1_A1_R0_C9'] =  $value_O1_I1_A1_R0_C9;

////////////for R1
$value_O1_I1_A1_R1_C0 = isset($_POST['O1_I1_A1_R1_C0']) ? $_POST['O1_I1_A1_R1_C0'] : '';
$value_O1_I1_A1_R1_C1 = isset($_POST['O1_I1_A1_R1_C1']) ? $_POST['O1_I1_A1_R1_C1'] : '';
$value_O1_I1_A1_R1_C2 = isset($_POST['O1_I1_A1_R1_C2']) ? $_POST['O1_I1_A1_R1_C2'] : '';
$value_O1_I1_A1_R1_C3 = isset($_POST['O1_I1_A1_R1_C3']) ? $_POST['O1_I1_A1_R1_C3'] : '';
$value_O1_I1_A1_R1_C4 = isset($_POST['O1_I1_A1_R1_C4']) ? $_POST['O1_I1_A1_R1_C4'] : '';
$value_O1_I1_A1_R1_C5 = isset($_POST['O1_I1_A1_R1_C5']) ? $_POST['O1_I1_A1_R1_C5'] : '';
$value_O1_I1_A1_R1_C6 = isset($_POST['O1_I1_A1_R1_C6']) ? $_POST['O1_I1_A1_R1_C6'] : '';
$value_O1_I1_A1_R1_C7 = isset($_POST['O1_I1_A1_R1_C7']) ? $_POST['O1_I1_A1_R1_C7'] : '';
$value_O1_I1_A1_R1_C8 = isset($_POST['O1_I1_A1_R1_C8']) ? $_POST['O1_I1_A1_R1_C8'] : '';
$value_O1_I1_A1_R1_C9 = isset($_POST['O1_I1_A1_R1_C9']) ? $_POST['O1_I1_A1_R1_C9'] : '';

$list['O1_I1_A1_R1_C0'] =  $value_O1_I1_A1_R1_C0;
$list['O1_I1_A1_R1_C1'] =  $value_O1_I1_A1_R1_C1;
$list['O1_I1_A1_R1_C2'] =  $value_O1_I1_A1_R1_C2;
$list['O1_I1_A1_R1_C3'] =  $value_O1_I1_A1_R1_C3;
$list['O1_I1_A1_R1_C4'] =  $value_O1_I1_A1_R1_C4;
$list['O1_I1_A1_R1_C5'] =  $value_O1_I1_A1_R1_C5;
$list['O1_I1_A1_R1_C6'] =  $value_O1_I1_A1_R1_C6;
$list['O1_I1_A1_R1_C7'] =  $value_O1_I1_A1_R1_C7;
$list['O1_I1_A1_R1_C8'] =  $value_O1_I1_A1_R1_C8;
$list['O1_I1_A1_R1_C9'] =  $value_O1_I1_A1_R1_C9;

////////////for R2
$value_O1_I1_A1_R2_C0 = isset($_POST['O1_I1_A1_R2_C0']) ? $_POST['O1_I1_A1_R2_C0'] : '';
$value_O1_I1_A1_R2_C1 = isset($_POST['O1_I1_A1_R2_C1']) ? $_POST['O1_I1_A1_R2_C1'] : '';
$value_O1_I1_A1_R2_C2 = isset($_POST['O1_I1_A1_R2_C2']) ? $_POST['O1_I1_A1_R2_C2'] : '';
$value_O1_I1_A1_R2_C3 = isset($_POST['O1_I1_A1_R2_C3']) ? $_POST['O1_I1_A1_R2_C3'] : '';
$value_O1_I1_A1_R2_C4 = isset($_POST['O1_I1_A1_R2_C4']) ? $_POST['O1_I1_A1_R2_C4'] : '';
$value_O1_I1_A1_R2_C5 = isset($_POST['O1_I1_A1_R2_C5']) ? $_POST['O1_I1_A1_R2_C5'] : '';
$value_O1_I1_A1_R2_C6 = isset($_POST['O1_I1_A1_R2_C6']) ? $_POST['O1_I1_A1_R2_C6'] : '';
$value_O1_I1_A1_R2_C7 = isset($_POST['O1_I1_A1_R2_C7']) ? $_POST['O1_I1_A1_R2_C7'] : '';
$value_O1_I1_A1_R2_C8 = isset($_POST['O1_I1_A1_R2_C8']) ? $_POST['O1_I1_A1_R2_C8'] : '';
$value_O1_I1_A1_R2_C9 = isset($_POST['O1_I1_A1_R2_C9']) ? $_POST['O1_I1_A1_R2_C9'] : '';

$list['O1_I1_A1_R2_C0'] =  $value_O1_I1_A1_R2_C0;
$list['O1_I1_A1_R2_C1'] =  $value_O1_I1_A1_R2_C1;
$list['O1_I1_A1_R2_C2'] =  $value_O1_I1_A1_R2_C2;
$list['O1_I1_A1_R2_C3'] =  $value_O1_I1_A1_R2_C3;
$list['O1_I1_A1_R2_C4'] =  $value_O1_I1_A1_R2_C4;
$list['O1_I1_A1_R2_C5'] =  $value_O1_I1_A1_R2_C5;
$list['O1_I1_A1_R2_C6'] =  $value_O1_I1_A1_R2_C6;
$list['O1_I1_A1_R2_C7'] =  $value_O1_I1_A1_R2_C7;
$list['O1_I1_A1_R2_C8'] =  $value_O1_I1_A1_R2_C8;
$list['O1_I1_A1_R2_C9'] =  $value_O1_I1_A1_R2_C9;

////////////for R3
$value_O1_I1_A1_R3_C0 = isset($_POST['O1_I1_A1_R3_C0']) ? $_POST['O1_I1_A1_R3_C0'] : '';
$value_O1_I1_A1_R3_C1 = isset($_POST['O1_I1_A1_R3_C1']) ? $_POST['O1_I1_A1_R3_C1'] : '';
$value_O1_I1_A1_R3_C2 = isset($_POST['O1_I1_A1_R3_C2']) ? $_POST['O1_I1_A1_R3_C2'] : '';
$value_O1_I1_A1_R3_C3 = isset($_POST['O1_I1_A1_R3_C3']) ? $_POST['O1_I1_A1_R3_C3'] : '';
$value_O1_I1_A1_R3_C4 = isset($_POST['O1_I1_A1_R3_C4']) ? $_POST['O1_I1_A1_R3_C4'] : '';
$value_O1_I1_A1_R3_C5 = isset($_POST['O1_I1_A1_R3_C5']) ? $_POST['O1_I1_A1_R3_C5'] : '';
$value_O1_I1_A1_R3_C6 = isset($_POST['O1_I1_A1_R3_C6']) ? $_POST['O1_I1_A1_R3_C6'] : '';
$value_O1_I1_A1_R3_C7 = isset($_POST['O1_I1_A1_R3_C7']) ? $_POST['O1_I1_A1_R3_C7'] : '';
$value_O1_I1_A1_R3_C8 = isset($_POST['O1_I1_A1_R3_C8']) ? $_POST['O1_I1_A1_R3_C8'] : '';
$value_O1_I1_A1_R3_C9 = isset($_POST['O1_I1_A1_R3_C9']) ? $_POST['O1_I1_A1_R3_C9'] : '';

$list['O1_I1_A1_R3_C0'] =  $value_O1_I1_A1_R3_C0;
$list['O1_I1_A1_R3_C1'] =  $value_O1_I1_A1_R3_C1;
$list['O1_I1_A1_R3_C2'] =  $value_O1_I1_A1_R3_C2;
$list['O1_I1_A1_R3_C3'] =  $value_O1_I1_A1_R3_C3;
$list['O1_I1_A1_R3_C4'] =  $value_O1_I1_A1_R3_C4;
$list['O1_I1_A1_R3_C5'] =  $value_O1_I1_A1_R3_C5;
$list['O1_I1_A1_R3_C6'] =  $value_O1_I1_A1_R3_C6;
$list['O1_I1_A1_R3_C7'] =  $value_O1_I1_A1_R3_C7;
$list['O1_I1_A1_R3_C8'] =  $value_O1_I1_A1_R3_C8;
$list['O1_I1_A1_R3_C9'] =  $value_O1_I1_A1_R3_C9;

////////////for R4
$value_O1_I1_A1_R4_C0 = isset($_POST['O1_I1_A1_R4_C0']) ? $_POST['O1_I1_A1_R4_C0'] : '';
$value_O1_I1_A1_R4_C1 = isset($_POST['O1_I1_A1_R4_C1']) ? $_POST['O1_I1_A1_R4_C1'] : '';
$value_O1_I1_A1_R4_C2 = isset($_POST['O1_I1_A1_R4_C2']) ? $_POST['O1_I1_A1_R4_C2'] : '';
$value_O1_I1_A1_R4_C3 = isset($_POST['O1_I1_A1_R4_C3']) ? $_POST['O1_I1_A1_R4_C3'] : '';
$value_O1_I1_A1_R4_C4 = isset($_POST['O1_I1_A1_R4_C4']) ? $_POST['O1_I1_A1_R4_C4'] : '';
$value_O1_I1_A1_R4_C5 = isset($_POST['O1_I1_A1_R4_C5']) ? $_POST['O1_I1_A1_R4_C5'] : '';
$value_O1_I1_A1_R4_C6 = isset($_POST['O1_I1_A1_R4_C6']) ? $_POST['O1_I1_A1_R4_C6'] : '';
$value_O1_I1_A1_R4_C7 = isset($_POST['O1_I1_A1_R4_C7']) ? $_POST['O1_I1_A1_R4_C7'] : '';
$value_O1_I1_A1_R4_C8 = isset($_POST['O1_I1_A1_R4_C8']) ? $_POST['O1_I1_A1_R4_C8'] : '';
$value_O1_I1_A1_R4_C9 = isset($_POST['O1_I1_A1_R4_C9']) ? $_POST['O1_I1_A1_R4_C9'] : '';

$list['O1_I1_A1_R4_C0'] =  $value_O1_I1_A1_R4_C0;
$list['O1_I1_A1_R4_C1'] =  $value_O1_I1_A1_R4_C1;
$list['O1_I1_A1_R4_C2'] =  $value_O1_I1_A1_R4_C2;
$list['O1_I1_A1_R4_C3'] =  $value_O1_I1_A1_R4_C3;
$list['O1_I1_A1_R4_C4'] =  $value_O1_I1_A1_R4_C4;
$list['O1_I1_A1_R4_C5'] =  $value_O1_I1_A1_R4_C5;
$list['O1_I1_A1_R4_C6'] =  $value_O1_I1_A1_R4_C6;
$list['O1_I1_A1_R4_C7'] =  $value_O1_I1_A1_R4_C7;
$list['O1_I1_A1_R4_C8'] =  $value_O1_I1_A1_R4_C8;
$list['O1_I1_A1_R4_C9'] =  $value_O1_I1_A1_R4_C9;

////////////for R5
$value_O1_I1_A1_R5_C0 = isset($_POST['O1_I1_A1_R5_C0']) ? $_POST['O1_I1_A1_R5_C0'] : '';
$value_O1_I1_A1_R5_C1 = isset($_POST['O1_I1_A1_R5_C1']) ? $_POST['O1_I1_A1_R5_C1'] : '';
$value_O1_I1_A1_R5_C2 = isset($_POST['O1_I1_A1_R5_C2']) ? $_POST['O1_I1_A1_R5_C2'] : '';
$value_O1_I1_A1_R5_C3 = isset($_POST['O1_I1_A1_R5_C3']) ? $_POST['O1_I1_A1_R5_C3'] : '';
$value_O1_I1_A1_R5_C4 = isset($_POST['O1_I1_A1_R5_C4']) ? $_POST['O1_I1_A1_R5_C4'] : '';
$value_O1_I1_A1_R5_C5 = isset($_POST['O1_I1_A1_R5_C5']) ? $_POST['O1_I1_A1_R5_C5'] : '';
$value_O1_I1_A1_R5_C6 = isset($_POST['O1_I1_A1_R5_C6']) ? $_POST['O1_I1_A1_R5_C6'] : '';
$value_O1_I1_A1_R5_C7 = isset($_POST['O1_I1_A1_R5_C7']) ? $_POST['O1_I1_A1_R5_C7'] : '';
$value_O1_I1_A1_R5_C8 = isset($_POST['O1_I1_A1_R5_C8']) ? $_POST['O1_I1_A1_R5_C8'] : '';
$value_O1_I1_A1_R5_C9 = isset($_POST['O1_I1_A1_R5_C9']) ? $_POST['O1_I1_A1_R5_C9'] : '';

$list['O1_I1_A1_R5_C0'] =  $value_O1_I1_A1_R5_C0;
$list['O1_I1_A1_R5_C1'] =  $value_O1_I1_A1_R5_C1;
$list['O1_I1_A1_R5_C2'] =  $value_O1_I1_A1_R5_C2;
$list['O1_I1_A1_R5_C3'] =  $value_O1_I1_A1_R5_C3;
$list['O1_I1_A1_R5_C4'] =  $value_O1_I1_A1_R5_C4;
$list['O1_I1_A1_R5_C5'] =  $value_O1_I1_A1_R5_C5;
$list['O1_I1_A1_R5_C6'] =  $value_O1_I1_A1_R5_C6;
$list['O1_I1_A1_R5_C7'] =  $value_O1_I1_A1_R5_C7;
$list['O1_I1_A1_R5_C8'] =  $value_O1_I1_A1_R5_C8;
$list['O1_I1_A1_R5_C9'] =  $value_O1_I1_A1_R5_C9;

////////////for R6
$value_O1_I1_A1_R6_C0 = isset($_POST['O1_I1_A1_R6_C0']) ? $_POST['O1_I1_A1_R6_C0'] : '';
$value_O1_I1_A1_R6_C1 = isset($_POST['O1_I1_A1_R6_C1']) ? $_POST['O1_I1_A1_R6_C1'] : '';
$value_O1_I1_A1_R6_C2 = isset($_POST['O1_I1_A1_R6_C2']) ? $_POST['O1_I1_A1_R6_C2'] : '';
$value_O1_I1_A1_R6_C3 = isset($_POST['O1_I1_A1_R6_C3']) ? $_POST['O1_I1_A1_R6_C3'] : '';
$value_O1_I1_A1_R6_C4 = isset($_POST['O1_I1_A1_R6_C4']) ? $_POST['O1_I1_A1_R6_C4'] : '';
$value_O1_I1_A1_R6_C5 = isset($_POST['O1_I1_A1_R6_C5']) ? $_POST['O1_I1_A1_R6_C5'] : '';
$value_O1_I1_A1_R6_C6 = isset($_POST['O1_I1_A1_R6_C6']) ? $_POST['O1_I1_A1_R6_C6'] : '';
$value_O1_I1_A1_R6_C7 = isset($_POST['O1_I1_A1_R6_C7']) ? $_POST['O1_I1_A1_R6_C7'] : '';
$value_O1_I1_A1_R6_C8 = isset($_POST['O1_I1_A1_R6_C8']) ? $_POST['O1_I1_A1_R6_C8'] : '';
$value_O1_I1_A1_R6_C9 = isset($_POST['O1_I1_A1_R6_C9']) ? $_POST['O1_I1_A1_R6_C9'] : '';

$list['O1_I1_A1_R6_C0'] =  $value_O1_I1_A1_R6_C0;
$list['O1_I1_A1_R6_C1'] =  $value_O1_I1_A1_R6_C1;
$list['O1_I1_A1_R6_C2'] =  $value_O1_I1_A1_R6_C2;
$list['O1_I1_A1_R6_C3'] =  $value_O1_I1_A1_R6_C3;
$list['O1_I1_A1_R6_C4'] =  $value_O1_I1_A1_R6_C4;
$list['O1_I1_A1_R6_C5'] =  $value_O1_I1_A1_R6_C5;
$list['O1_I1_A1_R6_C6'] =  $value_O1_I1_A1_R6_C6;
$list['O1_I1_A1_R6_C7'] =  $value_O1_I1_A1_R6_C7;
$list['O1_I1_A1_R6_C8'] =  $value_O1_I1_A1_R6_C8;
$list['O1_I1_A1_R6_C9'] =  $value_O1_I1_A1_R6_C9;

//end table   
// Save A1 table to a variable
/*  $csv_hdr = "Report Date, First Name of Child, Allegation, Priority Level, Assessment or Investigation, Date Assigned for an Investigation or Assessment, Date Investigation or Assessment Initiated, "
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
 
 */
// end saving table 
  
  
$value_O1_I1_B = isset($_POST['O1_I1_B']) ? $_POST['O1_I1_B'] : '';  
$list['O1_I1_B'] =  $value_O1_I1_B;
  
if(empty($_POST['O1_I1_C'])){
      $value_O1_I1_C = '';
}else 
    $value_O1_I1_C = $_POST['O1_I1_C'];
  $list['O1_I1_C'] =  $value_O1_I1_C;
  
if(empty($_POST['O1_I1_C_EX'])){
      $value_O1_I1_C_EX = '';
}else 
    $value_O1_I1_C_EX = $_POST['O1_I1_C_EX'];
  $list['O1_I1_C_EX'] =  $value_O1_I1_C_EX;
  
if(empty($_POST['O1_I1_R'])){
      $value_O1_I1_R = 'NULL';
}else 
    $value_O1_I1_R = $_POST['O1_I1_R'];
  $list['O1_I1_R'] =  $value_O1_I1_R;
  

// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$O1_I1_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);
    

foreach ($O1_I1_R_CHECK_Array as $key => $value){
   $list['O1_I1_R_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O1_I1_R_SRC'])){
    $O1_I1_R_CHECK = $_POST['O1_I1_R_SRC'];
    for($i=0; $i<count($O1_I1_R_CHECK); $i++)
    {   
        foreach ($O1_I1_R_CHECK_Array as $key => $value){
            if($key == $O1_I1_R_CHECK[$i]){
                $list['O1_I1_R_SRC_'.$value] = $O1_I1_R_CHECK[$i];
            }
        }  
    }
}

if(empty($_POST['O1_I1_R_EXP'])){
      $value_O1_I1_R_EXP = '';
}else 
    $value_O1_I1_R_EXP = $_POST['O1_I1_R_EXP'];
  $list['O1_I1_R_EXP'] =  $value_O1_I1_R_EXP;

// ******************* Safety Outcome 1 ********************************************************************
if(empty($_POST['O1_R'])){
      $value_O1_R = '';
}else 
    $value_O1_R = $_POST['O1_R'];
  $list['O1_R'] =  $value_O1_R;

// ******************* ITEM 2 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Item 2'] = ' ';  

if(empty($_POST['O2_I2_AC'])){
      $value_O2_I2_AC = 'null';
}else
    $value_O2_I2_AC = $_POST['O2_I2_AC'];
  $list['O2_I2_AC'] =  $value_O2_I2_AC;

if(empty($_POST['O2_I2_A'])){
      $value_O2_I2_A = 'null';
}else
    $value_O2_I2_A = $_POST['O2_I2_A'];
  $list['O2_I2_A'] =  $value_O2_I2_A;

if(empty($_POST['O2_I2_A_EXP'])){
      $value_O2_I2_A_EXP = '';
}else
    $value_O2_I2_A_EXP = $_POST['O2_I2_A_EXP'];
  $list['O2_I2_A_EXP'] =  $value_O2_I2_A_EXP;

if(empty($_POST['O2_I2_B'])){
      $value_O2_I2_B = 'null';
}else
    $value_O2_I2_B = $_POST['O2_I2_B'];
  $list['O2_I2_B'] =  $value_O2_I2_B;

if(empty($_POST['O2_I2_B_EXP'])){
      $value_O2_I2_B_EXP = '';
}else
    $value_O2_I2_B_EXP = $_POST['O2_I2_B_EXP'];
  $list['O2_I2_B_EXP'] =  $value_O2_I2_B_EXP;

 if(empty($_POST['O2_I2_R'])){
      $value_O2_I2_R = 'null';
}else
    $value_O2_I2_R = $_POST['O2_I2_R'];
  $list['O2_I2_R'] =  $value_O2_I2_R;


// initialize all checkbox values in the record to NULL

$O2_I2_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);


foreach ($O2_I2_R_CHECK_Array as $key => $value){
   $list['O2_I2_R_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O2_I2_R_SRC'])){
    $O2_I2_R_CHECK = $_POST['O2_I2_R_SRC'];
    for($i=0; $i<count($O2_I2_R_CHECK); $i++)
    {
        foreach ($O2_I2_R_CHECK_Array as $key => $value){
            if($key == $O2_I2_R_CHECK[$i]){
                $list['O2_I2_R_SRC_'.$value] = $O2_I2_R_CHECK[$i];
            }
        }
    }
}

if(empty($_POST['O2_I2_R_EXP'])){
      $value_O2_I2_R_EXP = '';
}else
    $value_O2_I2_R_EXP = $_POST['O2_I2_R_EXP'];
  $list['O2_I2_R_EXP'] =  $value_O2_I2_R_EXP;  
  
// ******************* ITEM 3 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Item 3'] = ' ';



$O2_I3_A1_CHECK_Array = array(
    "There were maltreatment allegations on the family that were reported to the agency but were inappropriately screened out (based on your judgments)" => "1",
    "There were maltreatment allegations on the family but they were never formally reported or formally investigated" => "2",
    "There were maltreatment allegations that were not substantiated despite evidence that would support substantiation" => "3",
);
foreach ($O2_I3_A1_CHECK_Array as $key => $value){
   $list['O2_I3_A1_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O2_I3_A1'])){
    $O2_I3_A1_CHECK = $_POST['O2_I3_A1'];
    for($i=0; $i<count($O2_I3_A1_CHECK); $i++)
    {   
        foreach ($O2_I3_A1_CHECK_Array as $key => $value){
            if($key == $O2_I3_A1_CHECK[$i]){
                $list['O2_I3_A1_SRC_'.$value] = $O2_I3_A1_CHECK[$i];
            }
        }  
    }  
}

if(empty($_POST['O2_I3_A'])){
      $value_O2_I3_A = 'NULL';
}else 
    $value_O2_I3_A = $_POST['O2_I3_A'];
$list['O2_I3_A'] =  $value_O2_I3_A;

if(empty($_POST['O2_I3_A_EXP'])){
      $value_O2_I3_A_EXP = '';
}else 
    $value_O2_I3_A_EXP = $_POST['O2_I3_A_EXP'];
$list['O2_I3_A_EXP'] =  $value_O2_I3_A_EXP;


if(empty($_POST['O2_I3_B'])){
      $value_O2_I3_B = 'NULL';
}else 
    $value_O2_I3_B = $_POST['O2_I3_B'];
$list['O2_I3_B'] =  $value_O2_I3_B;

if(empty($_POST['O2_I3_B_EXP'])){
      $value_O2_I3_B_EXP = '';
}else 
    $value_O2_I3_B_EXP = $_POST['O2_I3_B_EXP'];
$list['O2_I3_B_EXP'] =  $value_O2_I3_B_EXP;


if(empty($_POST['O2_I3_C'])){
      $value_O2_I3_C = 'NULL';
}else 
    $value_O2_I3_C = $_POST['O2_I3_C'];
$list['O2_I3_C'] =  $value_O2_I3_C;

if(empty($_POST['O2_I3_C_EXP'])){
      $value_O2_I3_C_EXP = '';
}else 
    $value_O2_I3_C_EXP = $_POST['O2_I3_C_EXP'];
$list['O2_I3_C_EXP'] =  $value_O2_I3_C_EXP;


$O2_I3_D1_CHECK_Array = array(
    "Recurring maltreatment" => "1",
    "Recurring safety concerns" => "2",
    "The case was closed" => "3",
    "Other" => "4",
);
foreach ($O2_I3_D1_CHECK_Array as $key => $value){
   $list['O2_I3_D1_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O2_I3_D1'])){
    $O2_I3_D1_CHECK = $_POST['O2_I3_D1'];
    for($i=0; $i<count($O2_I3_D1_CHECK); $i++)
    {   
        foreach ($O2_I3_D1_CHECK_Array as $key => $value){
            if($key == $O2_I3_D1_CHECK[$i]){
                $list['O2_I3_D1_SRC_'.$value] = $O2_I3_D1_CHECK[$i];
            }
        }  
    }  
}

if(empty($_POST['O2_I3_D'])){
      $value_O2_I3_D = 'NULL';
}else 
    $value_O2_I3_D = $_POST['O2_I3_D'];
$list['O2_I3_D'] =  $value_O2_I3_D;


$O2_I3_E1_CHECK_Array = array(
    "Sufficient monitoring of visitation by parents/caretakers or other family members was not ensured" => "1",
    "Unsupervised visitation was allowed when it was not appropriate" => "2",
    "Visitation was court-ordered despite safety concerns that could not be controlled with supervision" => "3",
    "Other (describe the safety concerns that existed with visitation)" => "4",
);
foreach ($O2_I3_E1_CHECK_Array as $key => $value){
   $list['O2_I3_E1_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O2_I3_E1'])){
    $O2_I3_E1_CHECK = $_POST['O2_I3_E1'];
    for($i=0; $i<count($O2_I3_E1_CHECK); $i++)
    {   
        foreach ($O2_I3_E1_CHECK_Array as $key => $value){
            if($key == $O2_I3_E1_CHECK[$i]){
                $list['O2_I3_E1_SRC_'.$value] = $O2_I3_E1_CHECK[$i];
            }
        }  
    }  
}

if(empty($_POST['O2_I3_E'])){
      $value_O2_I3_E = 'NULL';
}else 
    $value_O2_I3_E = $_POST['O2_I3_E'];
$list['O2_I3_E'] =  $value_O2_I3_E;


$O2_I3_F1_CHECK_Array = array(
    "There was a substantiated allegation of maltreatment of the child by a foster parent" => "1",
    "There was a critical incident report or other major issue relevant to noncompliance by foster parents or facility staff that could potentially make the child unsafe, and the agency could have prevented it or did not provide an adequate response after it occurred." => "2",
    "The child's placement during the period under review presented other risks to the child that are not being addressed, even though no allegation was made and no critical incident reports were filed" => "3",
    "You discover that there are safety concerns related to the child in the foster home that the agency is unaware of because of inadequate monitoring" => "4",
    "Other (describe the safety concerns that existed with the child’s foster placement)" => "5",
);
foreach ($O2_I3_F1_CHECK_Array as $key => $value){
   $list['O2_I3_F1_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O2_I3_F1'])){
    $O2_I3_F1_CHECK = $_POST['O2_I3_F1'];
    for($i=0; $i<count($O2_I3_F1_CHECK); $i++)
    {   
        foreach ($O2_I3_F1_CHECK_Array as $key => $value){
            if($key == $O2_I3_F1_CHECK[$i]){
                $list['O2_I3_F1_SRC_'.$value] = $O2_I3_F1_CHECK[$i];
            }
        }  
    }  
}

if(empty($_POST['O2_I3_F'])){
      $value_O2_I3_F = 'NULL';
}else 
    $value_O2_I3_F = $_POST['O2_I3_F'];
$list['O2_I3_F'] =  $value_O2_I3_F;


if(empty($_POST['O2_I3_R'])){
      $value_O2_I3_R = 'NULL';
}else 
    $value_O2_I3_R = $_POST['O2_I3_R'];
$list['O2_I3_R'] =  $value_O2_I3_R;


$O2_I3_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);
foreach ($O2_I3_R_CHECK_Array as $key => $value){
   $list['O2_I3_R_SRC_'.$value] = 'NULL';
}

if(isset($_POST['O2_I3_R_SRC'])){
    $O2_I3_R_CHECK = $_POST['O2_I3_R_SRC'];
    for($i=0; $i<count($O2_I3_R_CHECK); $i++)
    {   
        foreach ($O2_I3_R_CHECK_Array as $key => $value){
            if($key == $O2_I3_R_CHECK[$i]){
                $list['O2_I3_R_SRC_'.$value] = $O2_I3_R_CHECK[$i];
            }
        }  
    }  
}

if(empty($_POST['O2_I3_R_EXP'])){
      $value_O2_I3_R_EXP = 'NULL';
}else 
    $value_O2_I3_R_EXP = $_POST['O2_I3_R_EXP'];
$list['O2_I3_R_EXP'] =  $value_O2_I3_R_EXP;


// ******************* Safety Outcome 2 ********************************************************************
if(empty($_POST['O2_R'])){
      $value_O2_R = '';
}else 
    $value_O2_R = $_POST['O2_R'];
  $list['O2_R'] =  $value_O2_R;

// ******************* ITEM 4 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Item 4'] = ' ';  

$value_S2_I4_A = isset($_POST['S2_I4_A']) ? $_POST['S2_I4_A'] : '';  
$list['S2_I4_A'] =  $value_S2_I4_A;

//for table I4_A1
$list['I4_A1_Table'] = ' ';
// for Row 0 
$value_S2_I4_A1_R0_C0 = isset($_POST['S2_I4_A1_R0_C0']) ? $_POST['S2_I4_A1_R0_C0'] : '';
$value_S2_I4_A1_R0_C1 = isset($_POST['S2_I4_A1_R0_C1']) ? $_POST['S2_I4_A1_R0_C1'] : '';
$value_S2_I4_A1_R0_C2 = isset($_POST['S2_I4_A1_R0_C2']) ? $_POST['S2_I4_A1_R0_C2'] : '';
$value_S2_I4_A1_R0_C2_OTHER = isset($_POST['S2_I4_A1_R0_C2_OTHER']) ? $_POST['S2_I4_A1_R0_C2_OTHER'] : '';

$list['S2_I4_A1_R0_C0'] =  $value_S2_I4_A1_R0_C0;
$list['S2_I4_A1_R0_C1'] =  $value_S2_I4_A1_R0_C1;
$list['S2_I4_A1_R0_C2'] =  $value_S2_I4_A1_R0_C2;
$list['S2_I4_A1_R0_C2_OTHER'] =  $value_S2_I4_A1_R0_C2_OTHER;

// for Row 1 
$value_S2_I4_A1_R1_C0 = isset($_POST['S2_I4_A1_R1_C0']) ? $_POST['S2_I4_A1_R1_C0'] : '';
$value_S2_I4_A1_R1_C1 = isset($_POST['S2_I4_A1_R1_C1']) ? $_POST['S2_I4_A1_R1_C1'] : '';
$value_S2_I4_A1_R1_C2 = isset($_POST['S2_I4_A1_R1_C2']) ? $_POST['S2_I4_A1_R1_C2'] : '';
$value_S2_I4_A1_R1_C2_OTHER = isset($_POST['S2_I4_A1_R1_C2_OTHER']) ? $_POST['S2_I4_A1_R1_C2_OTHER'] : '';

$list['S2_I4_A1_R1_C0'] =  $value_S2_I4_A1_R1_C0;
$list['S2_I4_A1_R1_C1'] =  $value_S2_I4_A1_R1_C1;
$list['S2_I4_A1_R1_C2'] =  $value_S2_I4_A1_R1_C2;
$list['S2_I4_A1_R1_C2_OTHER'] =  $value_S2_I4_A1_R1_C2_OTHER;

// for Row 2 
$value_S2_I4_A1_R2_C0 = isset($_POST['S2_I4_A1_R2_C0']) ? $_POST['S2_I4_A1_R2_C0'] : '';
$value_S2_I4_A1_R2_C1 = isset($_POST['S2_I4_A1_R2_C1']) ? $_POST['S2_I4_A1_R2_C1'] : '';
$value_S2_I4_A1_R2_C2 = isset($_POST['S2_I4_A1_R2_C2']) ? $_POST['S2_I4_A1_R2_C2'] : '';
$value_S2_I4_A1_R2_C2_OTHER = isset($_POST['S2_I4_A1_R2_C2_OTHER']) ? $_POST['S2_I4_A1_R2_C2_OTHER'] : '';

$list['S2_I4_A1_R2_C0'] =  $value_S2_I4_A1_R2_C0;
$list['S2_I4_A1_R2_C1'] =  $value_S2_I4_A1_R2_C1;
$list['S2_I4_A1_R2_C2'] =  $value_S2_I4_A1_R2_C2;
$list['S2_I4_A1_R2_C2_OTHER'] =  $value_S2_I4_A1_R2_C2_OTHER;

// for Row 3 
$value_S2_I4_A1_R3_C0 = isset($_POST['S2_I4_A1_R3_C0']) ? $_POST['S2_I4_A1_R3_C0'] : '';
$value_S2_I4_A1_R3_C1 = isset($_POST['S2_I4_A1_R3_C1']) ? $_POST['S2_I4_A1_R3_C1'] : '';
$value_S2_I4_A1_R3_C2 = isset($_POST['S2_I4_A1_R3_C2']) ? $_POST['S2_I4_A1_R3_C2'] : '';
$value_S2_I4_A1_R3_C2_OTHER = isset($_POST['S2_I4_A1_R3_C2_OTHER']) ? $_POST['S2_I4_A1_R3_C2_OTHER'] : '';

$list['S2_I4_A1_R3_C0'] =  $value_S2_I4_A1_R3_C0;
$list['S2_I4_A1_R3_C1'] =  $value_S2_I4_A1_R3_C1;
$list['S2_I4_A1_R3_C2'] =  $value_S2_I4_A1_R3_C2;
$list['S2_I4_A1_R3_C2_OTHER'] =  $value_S2_I4_A1_R3_C2_OTHER;

// for Row 4 
$value_S2_I4_A1_R4_C0 = isset($_POST['S2_I4_A1_R4_C0']) ? $_POST['S2_I4_A1_R4_C0'] : '';
$value_S2_I4_A1_R4_C1 = isset($_POST['S2_I4_A1_R4_C1']) ? $_POST['S2_I4_A1_R4_C1'] : '';
$value_S2_I4_A1_R4_C2 = isset($_POST['S2_I4_A1_R4_C2']) ? $_POST['S2_I4_A1_R4_C2'] : '';
$value_S2_I4_A1_R4_C2_OTHER = isset($_POST['S2_I4_A1_R4_C2_OTHER']) ? $_POST['S2_I4_A1_R4_C2_OTHER'] : '';

$list['S2_I4_A1_R4_C0'] =  $value_S2_I4_A1_R4_C0;
$list['S2_I4_A1_R4_C1'] =  $value_S2_I4_A1_R4_C1;
$list['S2_I4_A1_R4_C2'] =  $value_S2_I4_A1_R4_C2;
$list['S2_I4_A1_R4_C2_OTHER'] =  $value_S2_I4_A1_R4_C2_OTHER;

if(empty($_POST['S2_I4_B'])){
      $value_S2_I4_B = '';
}else 
    $value_S2_I4_B = $_POST['S2_I4_B'];
  $list['S2_I4_B'] =  $value_S2_I4_B;

  
$S2_I4_C1_CHECK_Array = array(
    "The child's current placement is in a temporary shelter or other temporary setting." => "1",
    "There is information indicating that the child's current substitute care provider may not be able to continue to care for the child." => "2",
    "There are problems in the current placement that threaten the stability of the placement but that the agency is not addressing." => "3",
    "The child has run away from this placement more than once in the past, or is in runaway status at the time of the review." => "4",
    "Other (describe reasons why the current placement is not stable):" => "5",
);
foreach ($S2_I4_C1_CHECK_Array as $key => $value){
   $list['S2_I4_C1_SRC_'.$value] = 'NULL';
}

if(isset($_POST['S2_I4_C1'])){
    $S2_I4_C1_CHECK = $_POST['S2_I4_C1'];
    for($i=0; $i<count($S2_I4_C1_CHECK); $i++)
    {   
        foreach ($S2_I4_C1_CHECK_Array as $key => $value){
            if($key == $S2_I4_C1_CHECK[$i]){
                $list['S2_I4_C1_SRC_'.$value] = $S2_I4_C1_CHECK[$i];
            }
        }  
    }  
}  

$value_S2_I4_C1_other = isset($_POST['S2_I4_C1_other']) ? $_POST['S2_I4_C1_other'] : '';  
$list['S2_I4_C1_other'] =  $value_S2_I4_C1_other;

if(empty($_POST['S2_I4_C'])){
      $value_S2_I4_C = '';
}else 
    $value_S2_I4_C = $_POST['S2_I4_C'];
  $list['S2_I4_C'] =  $value_S2_I4_C;
  
if(empty($_POST['S2_I4_R'])){
      $value_S2_I4_R = '';
}else 
    $value_S2_I4_R = $_POST['S2_I4_R'];
  $list['S2_I4_R'] =  $value_S2_I4_R;

$S2_I4_R_SRC_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);
foreach ($S2_I4_R_SRC_CHECK_Array as $key => $value){
   $list['S2_I4_R_SRC_'.$value] = 'NULL';
}

if(isset($_POST['S2_I4_R_SRC'])){
    $S2_I4_R_SRC_CHECK = $_POST['S2_I4_R_SRC'];
    for($i=0; $i<count($S2_I4_R_SRC_CHECK); $i++)
    {   
        foreach ($S2_I4_R_SRC_CHECK_Array as $key => $value){
            if($key == $S2_I4_R_SRC_CHECK[$i]){
                $list['S2_I4_R_SRC_'.$value] = $S2_I4_R_SRC_CHECK[$i];
            }
        }  
    }  
}
  
$value_S2_I4_R_EXP = isset($_POST['S2_I4_R_EXP']) ? $_POST['S2_I4_R_EXP'] : '';  
$list['S2_I4_R_EXP'] =  $value_S2_I4_R_EXP;  

// ******************* ITEM 5 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Item 5'] = ' ';  

if(empty($_POST['S2_I5_AC'])){
      $value_S2_I5_AC = '';
}else 
    $value_S2_I5_AC = $_POST['S2_I5_AC'];
  $list['S2_I5_AC'] =  $value_S2_I5_AC;

$value_S2_I5_A1_G1 = isset($_POST['S2_I5_A1_G1']) ? $_POST['S2_I5_A1_G1'] : '';  
$list['S2_I5_A1_G1'] =  $value_S2_I5_A1_G1;

$value_S2_I5_A1_G2 = isset($_POST['S2_I5_A1_G2']) ? $_POST['S2_I5_A1_G2'] : '';  
$list['S2_I5_A1_G2'] =  $value_S2_I5_A1_G2;

if(empty($_POST['S2_I5_A2'])){
      $value_S2_I5_A2 = '';
}else 
    $value_S2_I5_A2 = $_POST['S2_I5_A2'];
$list['S2_I5_A2'] =  $value_S2_I5_A2;


if(empty($_POST['S2_I5_B'])){
      $value_S2_I5_B = '';
}else 
    $value_S2_I5_B = $_POST['S2_I5_B'];
$list['S2_I5_B'] =  $value_S2_I5_B;

$value_S2_I5_B_EXP = isset($_POST['S2_I5_B_EXP']) ? $_POST['S2_I5_B_EXP'] : '';  
$list['S2_I5_B_EXP'] =  $value_S2_I5_B_EXP;

$list['I5_B1_Table'] = ' ';
// for Row 0 
$value_S2_I5_B1_R0_C0 = isset($_POST['S2_I5_B1_R0_C0']) ? $_POST['S2_I5_B1_R0_C0'] : '';
$value_S2_I5_B1_R0_C1 = isset($_POST['S2_I5_B1_R0_C1']) ? $_POST['S2_I5_B1_R0_C1'] : '';
$value_S2_I5_B1_R0_C2 = isset($_POST['S2_I5_B1_R0_C2']) ? $_POST['S2_I5_B1_R0_C2'] : '';
$value_S2_I5_B1_R0_C3 = isset($_POST['S2_I5_B1_R0_C3']) ? $_POST['S2_I5_B1_R0_C3'] : '';
$value_S2_I5_B1_R0_C4 = isset($_POST['S2_I5_B1_R0_C4']) ? $_POST['S2_I5_B1_R0_C4'] : '';

$list['S2_I5_B1_R0_C0'] =  $value_S2_I5_B1_R0_C0;
$list['S2_I5_B1_R0_C1'] =  $value_S2_I5_B1_R0_C1;
$list['S2_I5_B1_R0_C2'] =  $value_S2_I5_B1_R0_C2;
$list['S2_I5_B1_R0_C3'] =  $value_S2_I5_B1_R0_C3;
$list['S2_I5_B1_R0_C4'] =  $value_S2_I5_B1_R0_C4;

// for Row 1 
$value_S2_I5_B1_R1_C0 = isset($_POST['S2_I5_B1_R1_C0']) ? $_POST['S2_I5_B1_R1_C0'] : '';
$value_S2_I5_B1_R1_C1 = isset($_POST['S2_I5_B1_R1_C1']) ? $_POST['S2_I5_B1_R1_C1'] : '';
$value_S2_I5_B1_R1_C2 = isset($_POST['S2_I5_B1_R1_C2']) ? $_POST['S2_I5_B1_R1_C2'] : '';
$value_S2_I5_B1_R1_C3 = isset($_POST['S2_I5_B1_R1_C3']) ? $_POST['S2_I5_B1_R1_C3'] : '';
$value_S2_I5_B1_R1_C4 = isset($_POST['S2_I5_B1_R1_C4']) ? $_POST['S2_I5_B1_R1_C4'] : '';

$list['S2_I5_B1_R1_C0'] =  $value_S2_I5_B1_R1_C0;
$list['S2_I5_B1_R1_C1'] =  $value_S2_I5_B1_R1_C1;
$list['S2_I5_B1_R1_C2'] =  $value_S2_I5_B1_R1_C2;
$list['S2_I5_B1_R1_C3'] =  $value_S2_I5_B1_R1_C3;
$list['S2_I5_B1_R1_C4'] =  $value_S2_I5_B1_R1_C4;

// for Row 2 
$value_S2_I5_B1_R2_C0 = isset($_POST['S2_I5_B1_R2_C0']) ? $_POST['S2_I5_B1_R2_C0'] : '';
$value_S2_I5_B1_R2_C1 = isset($_POST['S2_I5_B1_R2_C1']) ? $_POST['S2_I5_B1_R2_C1'] : '';
$value_S2_I5_B1_R2_C2 = isset($_POST['S2_I5_B1_R2_C2']) ? $_POST['S2_I5_B1_R2_C2'] : '';
$value_S2_I5_B1_R2_C3 = isset($_POST['S2_I5_B1_R2_C3']) ? $_POST['S2_I5_B1_R2_C3'] : '';
$value_S2_I5_B1_R2_C4 = isset($_POST['S2_I5_B1_R2_C4']) ? $_POST['S2_I5_B1_R2_C4'] : '';

$list['S2_I5_B1_R2_C0'] =  $value_S2_I5_B1_R2_C0;
$list['S2_I5_B1_R2_C1'] =  $value_S2_I5_B1_R2_C1;
$list['S2_I5_B1_R2_C2'] =  $value_S2_I5_B1_R2_C2;
$list['S2_I5_B1_R2_C3'] =  $value_S2_I5_B1_R2_C3;
$list['S2_I5_B1_R2_C4'] =  $value_S2_I5_B1_R2_C4;
// end of table

if(empty($_POST['S2_I5_C'])){
      $value_S2_I5_C = '';
}else 
    $value_S2_I5_C = $_POST['S2_I5_C'];
$list['S2_I5_C'] =  $value_S2_I5_C;

$value_S2_I5_C_EXP = isset($_POST['S2_I5_C_EXP']) ? $_POST['S2_I5_C_EXP'] : '';  
$list['S2_I5_C_EXP'] =  $value_S2_I5_C_EXP;

if(empty($_POST['S2_I5_D'])){
      $value_S2_I5_D = '';
}else 
    $value_S2_I5_D = $_POST['S2_I5_D'];
$list['S2_I5_D'] =  $value_S2_I5_D;

if(empty($_POST['S2_I5_E'])){
      $value_S2_I5_E = '';
}else 
    $value_S2_I5_E = $_POST['S2_I5_E'];
$list['S2_I5_E'] =  $value_S2_I5_E;

if(empty($_POST['S2_I5_F'])){
      $value_S2_I5_F = '';
}else 
    $value_S2_I5_F = $_POST['S2_I5_F'];
$list['S2_I5_F'] =  $value_S2_I5_F;

if(empty($_POST['S2_I5_G1_NA'])){
      $value_S2_I5_G1_NA = '';
}else 
    $value_S2_I5_G1_NA = $_POST['S2_I5_G1_NA'];
$list['S2_I5_G1_NA'] =  $value_S2_I5_G1_NA;

if(empty($_POST['S2_I5_G1_1'])){
      $value_S2_I5_G1_1 = '';
}else 
    $value_S2_I5_G1_1 = $_POST['S2_I5_G1_1'];
$list['S2_I5_G1_1'] =  $value_S2_I5_G1_1;

if(empty($_POST['S2_I5_G1_2'])){
      $value_S2_I5_G1_2 = '';
}else 
    $value_S2_I5_G1_2 = $_POST['S2_I5_G1_2'];
$list['S2_I5_G1_2'] =  $value_S2_I5_G1_2;

if(empty($_POST['S2_I5_G1_3'])){
      $value_S2_I5_G1_3 = '';
}else 
    $value_S2_I5_G1_3 = $_POST['S2_I5_G1_3'];
$list['S2_I5_G1_3'] =  $value_S2_I5_G1_3;

if(empty($_POST['S2_I5_G'])){
      $value_S2_I5_G = '';
}else 
    $value_S2_I5_G = $_POST['S2_I5_G'];
$list['S2_I5_G'] =  $value_S2_I5_G;

if(empty($_POST['S2_I5_R'])){
      $value_S2_I5_R = '';
}else 
    $value_S2_I5_R = $_POST['S2_I5_R'];
$list['S2_I5_R'] =  $value_S2_I5_R;

$S2_I5_R_SRC_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);
foreach ($S2_I5_R_SRC_CHECK_Array as $key => $value){
   $list['S2_I5_R_SRC_'.$value] = 'NULL';
}

if(isset($_POST['S2_I5_R_SRC'])){
    $S2_I5_R_SRC_CHECK = $_POST['S2_I5_R_SRC'];
    for($i=0; $i<count($S2_I5_R_SRC_CHECK); $i++)
    {   
        foreach ($S2_I5_R_SRC_CHECK_Array as $key => $value){
            if($key == $S2_I5_R_SRC_CHECK[$i]){
                $list['S2_I5_R_SRC_'.$value] = $S2_I5_R_SRC_CHECK[$i];
            }
        }  
    }  
}

$value_S2_I5_R_EXP = isset($_POST['S2_I5_R_EXP']) ? $_POST['S2_I5_R_EXP'] : '';  
$list['S2_I5_R_EXP'] =  $value_S2_I5_R_EXP;

// ******************* ITEM 6 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Item 6'] = ' ';  

if(empty($_POST['S2_I6_A1'])){
      $value_S2_I6_A1 = '';
}else 
    $value_S2_I6_A1 = $_POST['S2_I6_A1'];
$list['S2_I6_A1'] =  $value_S2_I6_A1;

if(empty($_POST['S2_I6_A2'])){
      $value_S2_I6_A2 = '';
}else 
    $value_S2_I6_A2 = $_POST['S2_I6_A2'];
$list['S2_I6_A2'] =  $value_S2_I6_A2;

$value_S2_I6_A2_OTHER_EXP = isset($_POST['S2_I6_A2_OTHER_EXP']) ? $_POST['S2_I6_A2_OTHER_EXP'] : '';  
$list['S2_I6_A2_OTHER_EXP'] =  $value_S2_I6_A2_OTHER_EXP;

$value_S2_I6_A3 = isset($_POST['S2_I6_A3']) ? $_POST['S2_I6_A3'] : '';  
$list['S2_I6_A3'] =  $value_S2_I6_A3;

$value_S2_I6_A4 = isset($_POST['S2_I6_A4']) ? $_POST['S2_I6_A4'] : '';  
$list['S2_I6_A4'] =  $value_S2_I6_A4;

if(empty($_POST['S2_I6_A5_NA'])){
      $value_S2_I6_A5_NA = '';
}else 
    $value_S2_I6_A5_NA = $_POST['S2_I6_A5_NA'];
$list['S2_I6_A5_NA'] =  $value_S2_I6_A5_NA;

$value_S2_I6_A5 = isset($_POST['S2_I6_A5']) ? $_POST['S2_I6_A5'] : '';  
$list['S2_I6_A5'] =  $value_S2_I6_A5;


if(empty($_POST['S2_I6_A6_NA'])){
      $value_S2_I6_A6_NA = '';
}else 
    $value_S2_I6_A6_NA = $_POST['S2_I6_A6_NA'];
$list['S2_I6_A6_NA'] =  $value_S2_I6_A6_NA;

$value_S2_I6_A6 = isset($_POST['S2_I6_A6']) ? $_POST['S2_I6_A6'] : '';  
$list['S2_I6_A6'] =  $value_S2_I6_A6;

if(empty($_POST['S2_I6_B'])){
      $value_S2_I6_B = '';
}else 
    $value_S2_I6_B = $_POST['S2_I6_B'];
$list['S2_I6_B'] =  $value_S2_I6_B;

$value_S2_I6_B_EXP = isset($_POST['S2_I6_B_EXP']) ? $_POST['S2_I6_B_EXP'] : '';  
$list['S2_I6_B_EXP'] =  $value_S2_I6_B_EXP;

if(empty($_POST['S2_I6_C'])){
      $value_S2_I6_C = '';
}else 
    $value_S2_I6_C = $_POST['S2_I6_C'];
$list['S2_I6_C'] =  $value_S2_I6_C;

$value_S2_I6_C_EXP = isset($_POST['S2_I6_C_EXP']) ? $_POST['S2_I6_C_EXP'] : '';  
$list['S2_I6_C_EXP'] =  $value_S2_I6_C_EXP;

if(empty($_POST['S2_I6_R'])){
      $value_S2_I6_R = '';
}else 
    $value_S2_I6_R = $_POST['S2_I6_R'];
$list['S2_I6_R'] =  $value_S2_I6_R;

$S2_I6_R_SRC_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);
foreach ($S2_I6_R_SRC_CHECK_Array as $key => $value){
   $list['S2_I6_R_SRC_'.$value] = 'NULL';
}

if(isset($_POST['S2_I6_R_SRC'])){
    $S2_I6_R_SRC_CHECK = $_POST['S2_I6_R_SRC'];
    for($i=0; $i<count($S2_I6_R_SRC_CHECK); $i++)
    {   
        foreach ($S2_I6_R_SRC_CHECK_Array as $key => $value){
            if($key == $S2_I6_R_SRC_CHECK[$i]){
                $list['S2_I6_R_SRC_'.$value] = $S2_I6_R_SRC_CHECK[$i];
            }
        }  
    }  
}

$value_S2_I6_R_EXP = isset($_POST['S2_I6_R_EXP']) ? $_POST['S2_I6_R_EXP'] : '';  
$list['S2_I6_R_EXP'] =  $value_S2_I6_R_EXP;

// ******************* Outcome 1 ********************************************************************
$list[' '] = ' ';
$list[' '] = ' ';
$list['Permanancy Outcome 1'] = ' ';  

if(empty($_POST['S2_O1'])){
      $value_S2_O1 = '';
}else 
    $value_S2_O1 = $_POST['S2_O1'];
$list['S2_O1'] =  $value_S2_O1;

// ****************** Item 7 ********************************************************************************
if(empty($_POST['S2_O2_I7'])){
      $value_S2_O2_I7 = 'null';
}else
    $value_S2_O2_I7 = $_POST['S2_O2_I7'];
  $list['S2_O2_I7'] =  $value_S2_O2_I7;

if(empty($_POST['S2_I7_A'])){
      $value_S2_I7_A = 'null';
}else
    $value_S2_I7_A = $_POST['S2_I7_A'];
  $list['S2_I7_A'] =  $value_S2_I7_A;

if(empty($_POST['S2_I7_B'])){
      $value_S2_I7_B = 'null';
}else
    $value_S2_I7_B = $_POST['S2_I7_B'];
  $list['S2_I7_B'] =  $value_S2_I7_B;

if(empty($_POST['S2_I7_B_EXP'])){
      $value_S2_I7_B_EXP = '';
}else
    $value_S2_I7_B_EXP = $_POST['S2_I7_B_EXP'];
  $list['S2_I7_B_EXP'] =  $value_S2_I7_B_EXP;

 if(empty($_POST['S2_I7_R'])){
      $value_S2_I7_R = 'null';
}else
    $value_S2_I7_R = $_POST['S2_I7_R'];
  $list['S2_I7_R'] =  $value_S2_I7_R;

if(isset($_POST['S2_I7_R_SRC'])){
$S2_I7_R_CHECK = $_POST['S2_I7_R_SRC'];

//// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I7_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);


foreach ($S2_I7_R_CHECK_Array as $key => $value){
   $list['S2_I7_R_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I7_R_CHECK); $i++)
{
    foreach ($S2_I7_R_CHECK_Array as $key => $value){
        if($key == $S2_I7_R_CHECK[$i]){
             $list['S2_I7_R_SRC_'.$value] = $S2_I7_R_CHECK[$i];
        }
    }
}
}

if(empty($_POST['S2_I7_R_EXP'])){
      $value_S2_I7_R_EXP = '';
}else
    $value_S2_I7_R_EXP = $_POST['S2_I7_R_EXP'];
  $list['S2_I7_R_EXP'] =  $value_S2_I7_R_EXP;

// ****************** Item 8 ********************************************************************************
if(empty($_POST['S2_I8_AC'])){
      $value_S2_I8_AC = 'null';
}else
    $value_S2_I8_AC = $_POST['S2_I8_AC'];
  $list['S2_I8_AC'] =  $value_S2_I8_AC;

if(empty($_POST['S2_I8_A1'])){
      $value_S2_I8_A1 = 'null';
}else
    $value_S2_O2_I7 = $_POST['S2_I8_A1'];
  $list['S2_I8_A1'] =  $value_S2_I8_A1;

if(empty($_POST['S2_I8_A'])){
      $value_S2_I8_A = 'null';
}else
    $value_S2_I8_A = $_POST['S2_I8_A'];
  $list['S2_I8_A'] =  $value_S2_I8_A;

if(empty($_POST['S2_I8_B1'])){
      $value_S2_I8_B1 = 'null';
}else
    $value_S2_I8_B1 = $_POST['S2_I8_B1'];
  $list['S2_I8_B1'] =  $value_S2_I8_B1;

if(empty($_POST['S2_I8_B'])){
      $value_S2_I8_B = 'null';
}else
    $value_S2_I8_B = $_POST['S2_I8_B'];
  $list['S2_I8_B'] =  $value_S2_I8_B;

if(empty($_POST['S2_I8_C'])){
      $value_S2_I8_C = 'null';
}else
    $value_S2_I8_C = $_POST['S2_I8_C'];
  $list['S2_I8_C'] =  $value_S2_I8_C;

if(empty($_POST['S2_I8_D'])){
      $value_S2_I8_D = 'null';
}else
    $value_S2_I8_D = $_POST['S2_I8_D'];
  $list['S2_I8_D'] =  $value_S2_I8_D;

if(empty($_POST['S2_I8_E1'])){
      $value_S2_I8_E1 = 'null';
}else
    $value_S2_I8_E1 = $_POST['S2_I8_E1'];
  $list['S2_I8_E1'] =  $value_S2_I8_E1;

if(empty($_POST['S2_I8_E'])){
      $value_S2_I8_E = 'null';
}else
    $value_S2_I8_E = $_POST['S2_I8_E'];
  $list['S2_I8_E'] =  $value_S2_I8_E;

if(empty($_POST['S2_I8_F'])){
      $value_S2_I8_F = 'null';
}else
    $value_S2_I8_F = $_POST['S2_I8_F'];
  $list['S2_I8_F'] =  $value_S2_I8_F;

 if(empty($_POST['S2_I8_R'])){
      $value_S2_I8_R = 'null';
}else
    $value_S2_I8_R = $_POST['S2_I8_R'];
  $list['S2_I8_R'] =  $value_S2_I8_R;

if(isset($_POST['S2_I8_R_SRC'])){
    $S2_I8_R_CHECK = $_POST['S2_I8_R_SRC'];

// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I8_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);


foreach ($S2_I8_R_CHECK_Array as $key => $value){
   $list['S2_I8_R_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I8_R_CHECK); $i++)
{
    foreach ($S2_I8_R_CHECK_Array as $key => $value){
        if($key == $S2_I8_R_CHECK[$i]){
             $list['S2_I8_R_SRC_'.$value] = $S2_I8_R_CHECK[$i];
        }
    }
}
}
if(empty($_POST['S2_I8_R_EXP'])){
      $value_S2_I8_R_EXP = '';
}else
    $value_S2_I8_R_EXP = $_POST['S2_I8_R_EXP'];
  $list['S2_I8_R_EXP'] =  $value_S2_I8_R_EXP;
  
// ****************** Item 9 ********************************************************************************
if(empty($_POST['S2_I9_AC'])){
      $value_S2_I9_AC = 'null';
}else
    $value_S2_I9_AC = $_POST['S2_I9_AC'];
  $list['S2_I9_AC'] =  $value_S2_I9_AC;

if(empty($_POST['S2_I9_A'])){
      $value_S2_I9_A = 'null';
}else
    $value_S2_I9_A = $_POST['S2_I9_A'];
  $list['S2_I9_A'] =  $value_S2_I9_A;

if(empty($_POST['S2_I9_B'])){
      $value_S2_I9_B = 'null';
}else
    $value_S2_I9_B = $_POST['S2_I9_B'];
  $list['S2_I9_B'] =  $value_S2_I9_B;

if(empty($_POST['S2_I9_C'])){
      $value_S2_I9_C = 'null';
}else
    $value_S2_I9_C = $_POST['S2_I9_C'];
  $list['S2_I9_C'] =  $value_S2_I9_C;

if(empty($_POST['S2_I9_D'])){
      $value_S2_I9_D = 'null';
}else
    $value_S2_I9_D = $_POST['S2_I9_D'];
  $list['S2_I9_D'] =  $value_S2_I9_D;
  
 if(empty($_POST['S2_I9_R'])){
      $value_S2_I9_R = 'null';
}else
    $value_S2_I9_R = $_POST['S2_I9_R'];
  $list['S2_I9_R'] =  $value_S2_I9_R;

if(isset($_POST['S2_I9_R_SRC'])){
    $S2_I9_R_CHECK = $_POST['S2_I9_R_SRC'];

// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I9_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);


foreach ($S2_I9_R_CHECK_Array as $key => $value){
   $list['S2_I9_R_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I9_R_CHECK); $i++)
{
    foreach ($S2_I9_R_CHECK_Array as $key => $value){
        if($key == $S2_I9_R_CHECK[$i]){
             $list['S2_I9_R_SRC_'.$value] = $S2_I9_R_CHECK[$i];
        }
    }
}
}

if(empty($_POST['S2_I9_R_EXP'])){
      $value_S2_I9_R_EXP = '';
}else
    $value_S2_I9_R_EXP = $_POST['S2_I9_R_EXP'];
  $list['S2_I9_R_EXP'] =  $value_S2_I9_R_EXP;  

// ****************** Item 10 ********************************************************************************  
if(empty($_POST['S2_I10_AC'])){
      $value_S2_I10_AC = 'null';
}else
    $value_S2_I10_AC = $_POST['S2_I10_AC'];
  $list['S2_I10_AC'] =  $value_S2_I10_AC;

if(empty($_POST['S2_I10_A1'])){
      $value_S2_I10_A1 = 'null';
}else
    $value_S2_I10_A1 = $_POST['S2_I10_A1'];
  $list['S2_I10_A1'] =  $value_S2_I10_A1;

if(empty($_POST['S2_I10_A2'])){
      $value_S2_I10_A2 = 'null';
}else
    $value_S2_I10_A2 = $_POST['S2_I10_A2'];
  $list['S2_I10_A2'] =  $value_S2_I10_A2;

if(empty($_POST['S2_I10_B'])){
      $value_S2_I10_B = 'null';
}else
    $value_S2_I10_B = $_POST['S2_I10_B'];
  $list['S2_I10_B'] =  $value_S2_I10_B;

if(empty($_POST['S2_I10_B_SP'])){
      $value_S2_I10_B_SP = 'null';
}else
    $value_S2_I10_B_SP = $_POST['S2_I10_B_SP'];
  $list['S2_I10_B_SP'] =  $value_S2_I10_B_SP;

if(empty($_POST['S2_I10_C'])){
      $value_S2_I10_C = 'null';
}else
    $value_S2_I10_C = $_POST['S2_I10_C'];
  $list['S2_I10_C'] =  $value_S2_I10_C;

 if(empty($_POST['S2_I10_R'])){
      $value_S2_I10_R = 'null';
}else
    $value_S2_I10_R = $_POST['S2_I10_R'];
  $list['S2_I10_R'] =  $value_S2_I10_R;

if(isset($_POST['S2_I10_R_SRC'])){
 $S2_I10_R_CHECK = $_POST['S2_I10_R_SRC'];

// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I10_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);

foreach ($S2_I10_R_CHECK_Array as $key => $value){
   $list['S2_I10_R_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I10_R_CHECK); $i++)
{
    foreach ($S2_I10_R_CHECK_Array as $key => $value){
        if($key == $S2_I10_R_CHECK[$i]){
             $list['S2_I10_R_SRC_'.$value] = $S2_I10_R_CHECK[$i];
        }
    }
}
}

if(empty($_POST['S2_I10_R_EXP'])){
      $value_S2_I10_R_EXP = '';
}else
    $value_S2_I10_R_EXP = $_POST['S2_I10_R_EXP'];
  $list['S2_I10_R_EXP'] =  $value_S2_I10_R_EXP;

// ****************** Item 11 ********************************************************************************  
if(empty($_POST['S2_I11_AC'])){
      $value_S2_I11_AC = 'null';
}else
    $value_S2_I11_AC = $_POST['S2_I11_AC'];
  $list['S2_I11_AC'] =  $value_S2_I11_AC;

if(empty($_POST['S2_I11_A'])){
      $value_S2_I11_A = 'null';
}else
    $value_S2_I11_A = $_POST['S2_I11_A'];
  $list['S2_I11_A'] =  $value_S2_I11_A;


    $S2_I11_A1_CHECK = $_POST['S2_I11_A1'];

// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I11_A1_CHECK_Array = array(
    "NA" => "1",
    "None" => "2",
    "Encouraged the mother's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?" => "3",
    "Provided or arranged for transportation or provided funds for transportation so that the mother could attend the child's special activities and doctors' appointments?" => "4",
    "Provided opportunities for therapeutic situations to help the mother and child strengthen their relationship?" => "5",
    "Encouraged the foster parents to provide mentoring or serve as role models to the mother to assist her in appropriate parenting?" => "6",
    "Encouraged and facilitated contact with the incarcerated mother (where appropriate) or with the mother not living in close proximity to the child?" => "7",
);


foreach ($S2_I11_A1_CHECK_Array as $key => $value){
   $list['S2_I11_A1_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I11_A1_CHECK); $i++)
{
    foreach ($S2_I11_A1_CHECK_Array as $key => $value){
        if($key == $S2_I11_A1_CHECK[$i]){
             $list['S2_I11_A1_SRC_'.$value] = $S2_I11_A1_CHECK[$i];
        }
    }
}

if(empty($_POST['S2_I11_B'])){
      $value_S2_I11_B = 'null';
}else
    $value_S2_I11_B = $_POST['S2_I11_B'];
  $list['S2_I11_B'] =  $value_S2_I11_B;

 $S2_I11_B1_CHECK = $_POST['S2_I11_B1'];
// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I11_B1_CHECK_Array = array(
    "NA" => "1",
    "None" => "2",
    "Encouraged the father's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?" => "3",
    "Provided or arranged for transportation or provided funds for transportation so that the father could attend the child's special activities and doctors' appointments?" => "4",
    "Provided opportunities for therapeutic situations to help the father and child strengthen their relationship?" => "5",
    "Encouraged the foster parents to provide mentoring or serve as role models to the father to assist him in appropriate parenting?" => "6",
    "Encouraged and facilitated contact with the incarcerated father (where appropriate) or with the father not living in close proximity to the child?" => "7",
);


foreach ($S2_I11_B1_CHECK_Array as $key => $value){
   $list['S2_I11_B1_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I11_B1_CHECK); $i++)
{
    foreach ($S2_I11_B1_CHECK_Array as $key => $value){
        if($key == $S2_I11_B1_CHECK[$i]){
             $list['S2_I11_B1_SRC_'.$value] = $S2_I11_B1_CHECK[$i];
        }
    }
}

 if(empty($_POST['S2_I11_R'])){
      $value_S2_I11_R = 'null';
}else
    $value_S2_I11_R = $_POST['S2_I11_R'];
  $list['S2_I11_R'] =  $value_S2_I11_R;

if(isset($_POST['S2_I11_R_SRC'])){
  $S2_I11_R_CHECK = $_POST['S2_I11_R_SRC'];

// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$S2_I11_R_CHECK_Array = array(
    "case file" => "1",
    "mother interview" => "2",
    "father interview" => "3",
    "foster parent interview" => "4",
    "child interview" => "5",
    "caseworker/supervisor interview" => "6",
    "other interview" => "7",
);


foreach ($S2_I11_R_CHECK_Array as $key => $value){
   $list['S2_I11_R_SRC_'.$value] = 'NULL';
}

for($i=0; $i<count($S2_I11_R_CHECK); $i++)
{
    foreach ($S2_I11_R_CHECK_Array as $key => $value){
        if($key == $S2_I11_R_CHECK[$i]){
             $list['S2_I11_R_SRC_'.$value] = $S2_I11_R_CHECK[$i];
        }
    }
}
}
if(empty($_POST['S2_I11_R_EXP'])){
      $value_S2_I11_R_EXP = '';
}else
    $value_S2_I11_R_EXP = $_POST['S2_I11_R_EXP'];
  $list['S2_I11_R_EXP'] =  $value_S2_I11_R_EXP;

// ****************** S2_Outcome2 ********************************************************************************  
   
if(empty($_POST['S2_O2'])){
      $value_S2_O2 = 'null';
}else
    $value_S2_O2 = $_POST['S2_O2'];
  $list['S2_O2_R'] =  $value_S2_O2;  
/********************************************  Items_End  **********************************************************/


/*
 $file_name = "Case_Jie_Huang_0721.csv";     //file name
// $file_name = $_POST["filename1"];
$file_dir = "./test_file/";        //file directory
*/
  
//write record into file
 $parent_dir = 'test_file/';
 $foldername = 'SafetyOutcome1_Demo';
// $filename = 'Outcome2_I2'.date("Ymd").'_'.rand(1, 100); // add userID or something here
// $filename = $_SESSION['O1_file_name'].'_Outcome1_Item1';
 $O1_file_name = isset($_POST['O1_file_name'])? $_POST['O1_file_name']: "";
 $file_name = $O1_file_name.'_Item1_Item11'.'.csv';
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
  if(file_exists($sub_dir.$file_name)) // if file already exists, delete it
      unlink ($sub_dir.$file_name);
  
  $file_dir = $sub_dir;
  
 $fp = fopen($file_dir . $file_name, 'w') ;
     //   $fp = fopen('test_file/'.$filename.'.csv', 'w') ;
        //$fp = fopen('file.csv', 'w');
        foreach ($list as $key => $val) {
            $fields = array($key,$val);
            fputcsv($fp, $fields);
        }
fclose($fp);
// file_put_contents($file_dir . $file_name, $csv_output, FILE_APPEND);


if(isset($_POST['TEMP_SUBMIT'])){
    if (! file_exists ( $file_dir . $file_name )) {
        echo "Cannot find file!";
        exit ();
    } 
    else {
        //Open file
        $file = fopen ( $file_dir . $file_name, "r" );
   
        Header ( "Content-type: application/octet-stream" );
        Header ( "Accept-Ranges: bytes" );
        Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );
        Header ( "Content-Disposition: attachment; filename=" . $file_name );
        //output file content
        //read file content and transmit to browser so that file can be downloaded on client side
        echo fread ( $file, filesize ( $file_dir . $file_name ) );
        fclose ( $file );
        exit ();
    }
}
else if(isset($_POST['FINAL_SUBMIT'])){
    $O1_I1_R_SRC_OUT = "";
    
    for($i=0; $i<count($O1_I1_R_CHECK); $i++)
    {    
        $O1_I1_R_SRC_OUT.=$O1_I1_R_CHECK[$i]."  "; 
    }
    
    $O2_I2_R_SRC_OUT = "";

    for($i=0; $i<count($O2_I2_R_CHECK); $i++)
    {
        $O2_I2_R_SRC_OUT.=$O2_I2_R_CHECK[$i]."  ";
    }
    
    echo "
        <html>
<head>
<title>Uploading Complete</title>
<style>
    body{background-color: #81F7BE;}
    table, th, td{margin:auto; border: 1px solid #000;}
    h2, h3{text-align: center; color: blue;}
</style>
</head>
<body>

    <h3>South Carolina Child Welfare Service Quality Assurance Review</h3>
    <h2>Case Debriefing Report</h2>
    <table>
        <tr>
            <th>
                Item 1 Case Applicable
            </th>
            <th>
                Question A1
            </th>
             <th>
               Question B
            </th>
            <th>
               Question C
            </th>
            <th>
               Question C EXP
            </th>
            <th>
               Item 1 Rating
            </th>
            <th>
               Item 1 Rating SRC
            </th>
            <th>
               Item 1 Rating EXP
            </th>
            <th>
               Outcome 1 Rating 
            </th>
            
            <th>
                Item 2 Case Applicable
            </th>
            <th>
                Question 2A
            </th>
            <th>
                Question 2A EXP
            </th>
             <th>
               Question 2B
            </th>
            <th>
                Question 2B EXP
            </th>
            <th>
               Item 2 Rating
            </th>
            <th>
               Item 2 Rating SRC
            </th>
            <th>
               Item 2 Rating EXP
            </th>
            <th>
               Outcome 2 Rating 
            </th>
        </tr>
            
        <tr>
            <td>".
                $list['O1_I1_AC']. 
            "</td>
            <td>".
                 $list['O1_I1_A1'].
            "</td>
             <td>".
                  $list['O1_I1_B'].
            "</td>
             <td>".
                  $list['O1_I1_C'].
            "</td>  
            <td>".
                  $list['O1_I1_C_EX'].
            "</td> 
            <td>".
                  $list['O1_I1_R'].
            "</td> 
             <td>".
                  $O1_I1_R_SRC_OUT.
            "</td> 
             <td>".
                   $list['O1_I1_R_EXP'].
            "</td> 
            <td>".
                  $list['O1_R'].
            "</td> 
                
            <td>".
                $list['O2_I2_AC'].
            "</td>
            <td>".
                 $list['O2_I2_A'].
            "</td>
             <td>".
                  $list['O2_I2_A_EXP'].
            "</td>
             <td>".
                  $list['O2_I2_A'].
            "</td>
            <td>".
                  $list['O2_I2_B_EXP'].
            "</td>
             <td>".
                  $list['O2_I2_R'].
            "</td>
             <td>".
                  $O2_I2_R_SRC_OUT.
            "</td>
             <td>".
                   $list['O2_I2_R_EXP'].
            "</td>
            <td>".
                  $list['O2_R'].
            "</td> 
        </tr>
    </table>
";
}

?>

    
</body>
</html>

