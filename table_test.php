<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
header('Content-type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=catalogo.xls");
    header("Pragma: no-cache");
    header("Expires: 0"); 

$table = "<table>";
$table .="<tr><td>Hello world</td></tr>";
$table .="</table>";

echo $table;
 */
$parent_dir = 'test_file/';
 $foldername = 'Outcome1_2';
 $filename = "myFile.csv";
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
  
  // $fp = fopen($sub_dir.$filename, 'w') ;
 
$csv_hdr = "Order ID, Ordered By, Email, Order Date, Completed Date, Line Items, Total, item 8, item 9, item 10";
   $csv_output="";
   $csv_output .= $csv_hdr;
$csv_output .= "\n";
   $csv_output .=  
          "111" . ", "."111" . ", "."111" . ", "."111" . ", "."111" . ", ".
          "222" . ", "."222" . ", "."222" . ", "."222" . ", "."222" . ", "."\n".
           "111" . ", "."111" . ", "."111" . ", "."111" . ", "."111" . ", ".
          "222" . ", "."222" . ", "."222" . ", "."222" . ", "."222" . ", "."\n".
            "111" . ", "."111" . ", "."111" . ", "."111" . ", "."111" . ", ".
          "222" . ", "."222" . ", "."222" . ", "."222" . ", "."222" . ", "."\n"
         ;


//header('Content-type: application/csv');
//header('Content-Disposition: attachment; filename='.$filename);

//echo $csv_output;

file_put_contents($sub_dir.$filename,$csv_output, FILE_APPEND);
// echo $csv_output;
// fclose($fp);