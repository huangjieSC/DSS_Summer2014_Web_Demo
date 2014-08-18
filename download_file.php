<?php

$list = array();
 $list[' '] = ' ';
if(empty($_POST['comments'])){
      $value_comments = 'NULL';
}else 
    $value_comments = $_POST['comments'];
  $list['Comment: '] =  $value_comments;
  
if(empty($_POST['sex'])){
      $value_sex = 'NULL';
}else 
    $value_sex = $_POST['sex'];
  $list['Gender'] =  $value_sex;
  
$fruit = $_POST['fruit'];
// initialize all checkbox values in the record to NULL
//$fruitArray = array("Apple", "Grape", "Banana");
$fruitArray = array(
    "Apple" => "1",
    "Grape" => "2",
    "Banana" => "3",
);
    

foreach ($fruitArray as $key => $value){
   $list['Fruit_'.$value] = 'NULL';
}

for($i=0; $i<count($fruit); $i++)
{   
    foreach ($fruitArray as $key => $value){
        if($key == $fruit[$i]){
            $list['Fruit_'.$value] = $fruit[$i];
        }
    }  
}


/*
for($i=0; $i<3; $i++)
{
    $list['Fruit_'.$fruitArray[$i]] = 'NULL';
}


for($i=0; $i<count($fruit); $i++)
{   
    
    $list['Fruit_'.$fruit[$i]] = $fruit[$i];
}

*/

 $file_name = "Case_Jie_Huang_0721.csv";     //file name
// $file_name = $_POST["filename1"];
$file_dir = "./test_file/";        //file directory

 $fp = fopen($file_dir . $file_name, 'w') ;
     //   $fp = fopen('test_file/'.$filename.'.csv', 'w') ;
        //$fp = fopen('file.csv', 'w');
        foreach ($list as $key => $val) {
            $fields = array($key,$val);
            fputcsv($fp, $fields);
        }
fclose($fp);

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
    $fruitOUT = "";
    
    for($i=0; $i<count($fruit); $i++)
    {    
        $fruitOUT.=$fruit[$i]."  "; 
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
                Comment
            </th>
            <th>
                Gender
            </th>
             <th>
                Fruit
            </th>
        </tr>
            
        <tr>
            <td>".
               $list['Comment: ']. 
            "</td>
            <td>".
                $list['Gender'].
            "</td>
             <td>".
                 $fruitOUT.
            "</td>
        </tr>
    </table>
";
}

?>

    
</body>
</html>