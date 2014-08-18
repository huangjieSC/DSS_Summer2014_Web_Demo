<?php
/* http://www.tizag.com/phpT/fileupload.php
 * http://www.tutorialspoint.com/php/php_file_uploading.htm
 *  */

class CSVData{
    public $file;
    public $data;
    public $dataOUT;
    public $fp;
    public $caption=true;
    public function CSVData($file=''){
        if ($file!='') getData($file);
    }
    function getData($file){
        if (strpos($file, 'tp://')!==false){
            copy ($file, '/tmp/csvdata.csv');
            if ($this->fp=fopen('/tmp/csvdata.csv', 'r')!==FALSE){
                $dataOUT = $this->readCSV(); //
                if($dataOUT == NULL){
              //      echo "In class 1....... NULL result!!!";
                }
                else{
              //      echo "In class 1: data value is: ". $dataOUT['Comment: ']."\r\n"; // new           
                }

                unlink('tmp/csvdata.csv');
            }
        } else {
            $this->fp=fopen($file, 'r');
             $dataOUT = $this->readCSV(); //
              if($dataOUT == NULL){
              //     echo "In class 2....... NULL result!!!";
               }
              else{
             //     echo "In class 2: data value is: ". $dataOUT['Comment: ']."\r\n"; // new               
              }
                  
        }
        fclose($this->fp);
        return $dataOUT;
        
    }
    private function readCSV(){
        if ($this->caption==true){
            if (($captions=fgetcsv($this->fp, 1000, ","))==false) return false;
        }
        $row=0;
        
        $dataOUT = array();
        $dataOUT[' '] = ' ';
        
        while (($data = fgetcsv($this->fp, 1000, ",")) !== FALSE) {
            for ($c=0; $c < count($data); $c++) {
             //   $this->data[$row][$c]=$data[$c];
                 
               
                $data_key = $data[$c]; // new
                $c++;
                $data_value = $data[$c];
                
                $dataOUT[$data_key] =$data_value;
                
              //  if ($this->caption==true){
                //    $this->data[$row][$captions[$c]]=$data[$c];
              ///  }
            }
           // $row++;
        }
         return $dataOUT;
    }
   
}




$target_path = "test_file/0719test/";
$target_path = $target_path.basename( $_FILES['file']['name']); 
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded\n";
} else{
    echo "There was an error uploading the file, please try again!";
}

$o=new CSVData();
// $dataOUT = $o->getData('test_file/0719test/Case_Jie_Huang_002.csv');
$dataOUT = $o->getData($target_path);
// $data=$o->dataOUT;
// print_r($data["Comment: "]);
if($dataOUT == NULL){
    echo "NULL result!!!";
}
else{
   /*
    echo "\r\n OUTPUT: comment is : ".$dataOUT['Comment: ']."\r\n";
    echo "\r\n OUTPUT: gender is : ".$dataOUT['Gender']."\r\n";
    echo "\r\n OUTPUT: Selected fruit 1 is : ".$dataOUT['Fruit_1']."\r\n";
    echo "\r\n OUTPUT: Selected fruit 2 is : ".$dataOUT['Fruit_2']."\r\n";
    echo "\r\n OUTPUT: Selected fruit 3 is : ".$dataOUT['Fruit_3']."\r\n";
    * */
    
}


if( $_FILES['file']['name'] != "" )
{
 //  copy( $_FILES['file']['name'], "/test_file/0719test.txt" ) or 
 //          die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
    <!--
    <h3>File Upload:</h3>
                Select a file to upload: <br />
            <form action="file_uploader.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" size="50" />
                <br />
                <input type="submit" value="Upload File" />
            </form>
             
    <h2>Uploaded File Info:</h2>
    <ul>
        <li>Sent file: <?php echo $_FILES['file']['name'];  ?>
        <li>File size: <?php echo $_FILES['file']['size'];  ?> 
        <li>File type: <?php echo $_FILES['file']['type'];  ?>
    </ul>
     --> 
    <form method="post" action="download_file.php">
        <textarea id="textarea" name="comments"><?php $username = isset($_POST['comments'])?$_POST['comments']:$dataOUT['Comment: ']; echo $username;?></textarea>
        <br>
    
        <input type="radio" name="sex" value="Male" <?php echo ($dataOUT['Gender']=='Male')?'checked':'' ?> size="17">Male
        <input type="radio" name="sex" value="Female" <?php echo ($dataOUT['Gender']=='Female')?'checked':'' ?> size="17">Female
        <br>
    
        <input type="checkbox" name="fruit[]" value="Apple" <?php echo ($dataOUT['Fruit_1']=='Apple')?'checked':'' ?> size="17">Apple
        <input type="checkbox" name="fruit[]" value="Grape" <?php echo ($dataOUT['Fruit_2']=='Grape')?'checked':'' ?> size="17">Grape
        <input type="checkbox" name="fruit[]" value="Banana" <?php echo ($dataOUT['Fruit_3']=='Banana')?'checked':'' ?> size="17">Banana
        
        <br>
        <input type="submit" name="TEMP_SUBMIT" value="Submit and Download" />  
        
        <input type="submit" name="FINAL_SUBMIT" value="Final Submit and View Debriefing Report" />  
    </form>
    
</body>
</html>

