
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// for get data from O2_I2_Q_F
 $value_O2_I2_R = $_POST['O2_I2_R'];
 $value_O2_I2_A = $_POST['O2_I2_A'];
 $value_O2_I2_A_EXP = $_POST['O2_I2_A_EXP'];
 $value_O2_I2_JUMP = $_POST['O2_I2_JUMP'];
 $value_O2_I2_B = $_POST['O2_I2_B'];
 $value_O2_I2_B_EXP = $_POST['O2_I2_B_EXP'];
 $checkbox = $_POST['O2_I2_R_SRC'];
 $value_O2_I2_R_EXP = $_POST['O2_I2_R_EXP'];
  $list = array ();
//put record into $list
 //echo 'O2_I2_A '.$value_O2_I2_A."<br>";
 //echo 'O2_I2_A_EXP '.$value_O2_I2_A_EXP."<br>";
 //echo 'O2_I2_R '.$value_O2_I2_R."<br>";
 //echo 'O2_I2_JUMP '.$value_O2_I2_JUMP."<br>";
// echo 'O2_I2_B '.$value_O2_I2_B."<br>";
// echo 'O2_I2_B_EXP '.$value_O2_I2_B_EXP."<br>";
  $list[ 'O2_I2_A '] = $value_O2_I2_A;
  $list[ 'O2_I2_A_EXP '] = $value_O2_I2_A_EXP;
  $list[ 'O2_I2_R '] = $value_O2_I2_R;
  $list[ 'O2_I2_JUMP '] = $value_O2_I2_JUMP;
  $list[ 'O2_I2_B '] = $value_O2_I2_B;
  $list[ 'O2_I2_B_EXP '] = $value_O2_I2_B_EXP;
  
 for($i=0; $i<count($checkbox); $i++)
    {
       //echo $checkbox[$i]."<br>";
      $list[ 'O2_I2_R_SRC'.$i] = $checkbox[$i];
    }
 //echo 'O2_I2_R_EXP '.$value_O2_I2_R_EXP."<br>";
    $list[ 'O2_I2_R_EXP '] = $value_O2_I2_R_EXP;

 //write record into file
 $parent_dir = 'test_file/';
 $foldername = '02_I2_Q_F';
 $filename = '02_I2_Q_F'; // add userID or something here


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
 $fp = fopen($sub_dir.$filename.'.csv', 'w') ;

 foreach ($list as $key => $val)
 {
     //echo "$key";
     //fputcsv($fp, );
     $fields = array($key,$val);
     fputcsv($fp,$fields);
 }
 fclose($fp);
?>
