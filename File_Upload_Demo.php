<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo - Safety Section</title>
  <!--
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/cupertino/jquery-ui.css">
  -->
  <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.css">
  <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.min.css">
  <link rel="stylesheet" href="style_css/style.css">
 <!--
  <link href="css/bootstrap.min.css" rel="stylesheet">
-->

  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
-->
  <script src="js/demo.js"></script>
  <!--
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/bootstrap-tooltip.js"></script>
  <script src="js/popover.js"></script>
  -->
  <script>
     
    </script>

  <style>
   /* .commentAreaBtn{font-size: 14pt; border-radius: 5px; background-color: #C0D4FF; width: 400px;}*/
   #browse{font-size: 16pt; float: right;text-decoration: underline; margin-top: -50px; color: green;}
  </style>
</head>

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
?>




<body>
    <div style="text-align: center;">
<?php
$target_path = "test_file/TMP/";
$target_path = $target_path.basename( $_FILES['file']['name']); 
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
?>
     <div ><h3 id='FILE_UPLOAD_MSG' style="font-size: 12pt; color: green;"> </h3></div>
<?php
} else{
?>
    <div ><h3 id='FILE_UPLOAD_MSG2' style="font-size: 12pt; color: red;"></h3></div>
<?php
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
                    </div>
                    
    
    
    
        <div id="demoHead" class="top-bar">
            <a href="O1_I1_Populate_Demo.php" style="color: white;text-decoration: none;">
                <h1 class="middle3">Child and Family Services Reviews</h1>
                <h1 class="middle3">Onsite Review Instrument and Instructions</h1>
                <div class="top-bar-end"></div>
             </a>
        </div>
            
            <div id="tabs" >
		<ul>
                    <li><a href="#tabs-0">General Instructions</a></li>
                    <li><a href="#tabs-1">Face Sheet</a></li>
                    <li><a href="#tabs-2">SAFETY OUTCOME 1</a></li>
                    <li><a href="#tabs-3">SAFETY OUTCOME 2</a></li>
                    <li><a href="#tabs-4">PERMANENCY OUTCOME 1</a></li>
                    <li><a href="#tabs-5">PERMANENCY OUTCOME 2</a></li>
                    <li><a href="#tabs-6">WELL-BEING OUTCOME 1</a></li>
                    <li><a href="#tabs-7">WELL-BEING OUTCOME 2</a></li>
                    <li><a href="#tabs-8">WELL-BEING OUTCOME 3</a></li>
		</ul>
                
                <div id="tabs-0">
                    <header style="text-align: center; ">
                        <h2>Children's Bureau</h2>
                        <h3>Child and Family Services Reviews</h3>
                        <h3>Onsite Review Instrument and Instructions</h3>
                        <h3>General Instructions</h3>

                        <div>
                            <p> The Onsite Review Instrument and Instructions is used to review both foster care and in-home
                            services cases during the onsite review component of the Child and Family Services Reviews
                            (CFSRs) of state child welfare agencies. In completing the instrument, reviewers will conduct
                            case file reviews and case-related interviews with children, parents, foster parents,
                            caseworkers, and other professionals involved with the child.</p>
                            <p> The instrument is organized into a Face Sheet and three sections.  On the Face Sheet,
                reviewers document general information about a case, such as the type of case. The three
                sections focus on the outcome domains that form the basis of the CFSRs: safety, permanency,
                and child and family well-being.  For each outcome, reviewers collect information on a number
                of “items” related to that outcome.</p>
                            <p> Although reviewers use the instrument to review both foster care and in-home services cases,
                they should complete the permanency section only if the case under review is a foster care
                case. If reviewing an in-home services case, reviewers should select Not Applicable as the
                rating for the permanency items.</p>
                            <p>For children in foster care, reviewers should consider the safety items (1 through 3) for all
                children in the family, but complete the permanency items (4 through 11) and the child and
                family well-being items (12 through 18) only as they apply to the specific child whose case is
                under review.  For children receiving in-home services, reviewers should apply the safety and
                child and family well-being items to all the children in the family who are residing with, and
                included in services to, the family.</p>

                            <h3>Reviewing the Case</h3>
                            <p>Reviewers must answer all the questions for each applicable item.  If the question is Not
            Applicable to the case, then NA should be marked for that question.</p>
                            <p>Reviewers must indicate the source(s) of the information used to determine their responses to
            the item questions. The instrument provides some instructions on where to find information.
            Reviewers should use their professional judgment to determine how best to gather all the
            relevant information.  Further instructions for answering the questions relating to the individual
            items are provided below the relevant question. Reviewers should read all instructions carefully
            before responding to questions.</p>
                        </div>
                    </header>
                </div>
                
                <div id="tabs-1">
                    <header style="text-align: center; ">
				<h2>CHILD AND FAMILY SERVICES REVIEWS</h2>
				<h3>ONSITE REVIEW INSTRUMENT</h3>
				<h4>FaceSheet</h4>
				<h4>Case Information</h4>
                    </header>
                                        
                    <!-- /***************************** Form for face sheet ********************************************* -->
                      <!--  <form method="post" id="FS">  -->
			<!--<div id="accordion"> -->
                        <div>
                            <div style="margin:auto; text-align: center;">
                                <h3>File Upload:</h3>
                                Select a file to upload: <br />
                 
                                <form action="File_Upload_Demo.php" method="post" enctype="multipart/form-data">
                                    <input type="file" name="file" class="Btn" size="50" />
                                    <br>
                                    <br>
                                    <input type="submit" value="Upload File"  class="Btn"/>
                                </form>
                            </div>
                             <form method="post" id="O1_I1_Q_F" action="O1_I1_Q_F_Populate_Demo.php">   
                                 
				<h3>Step 1: Questions A through E</h3>
				<div>
					<h4>Instructions for Questions A through E below:</h4>
					<ul>
						<li>For the local area, use the name that is used by the state for the review. This may be a region rather than a county, or may be multiple counties.</li>
						<li>Enter the case name that is the official name on the case file.</li>
						<li>The period under review is the time frame used for making decisions about the case.</li>
					</ul>

                                        <p>A. Name of state and county (or local area): <input type="text" name="FS_A" id="FS_A" size="30" value=" <?php $FS_A = isset($_POST['FS_A'])?$_POST['FS_A'] : $dataOUT['FS_A']; echo $FS_A ; ?> " /></p>
						<p>B. Case name: <input type="text" name="FS_B" id="FS_B" size="30" value=" <?php $FS_B = isset($_POST['FS_B'])?$_POST['FS_B'] : $dataOUT['FS_B']; echo $FS_B ; ?> " /></p>
						<p>C. Period under review: <input type="text" name="FS_C" id="FS_C" size="30" value=" <?php $FS_C = isset($_POST['FS_C'])?$_POST['FS_C'] : $dataOUT['FS_C']; echo $FS_C ; ?> " /></p>
						<p>D. Reviewer name(s): <input type="text" name="FS_D_RN" id="FS_D_RN" size="30" value=" <?php $FS_D_RN = isset($_POST['FS_D_RN'])?$_POST['FS_D_RN'] : $dataOUT['FS_D_RN']; echo $FS_D_RN ; ?> " /></p>
						 <p>&nbsp; &nbsp; &nbsp;QA Completed by (name(s)): <input type="text" name="FS_D_QACB" id="FS_D_QACB" size="30" value=" <?php $FS_D_QACB = isset($_POST['FS_D_QACB'])?$_POST['FS_D_QACB'] : $dataOUT['FS_D_QACB']; echo $FS_D_QACB ; ?> " /></p>
						<p>E. Date case reviewed: <input type="text" class="datepicker" name="FS_E" id="FS_E" size="30" value="<?php $FS_E = isset($_POST['FS_E'])?$_POST['FS_E'] : $dataOUT['FS_E']; echo $FS_E ; ?> " /></p>
				</div>

		    <h3>Step 2: Question F</h3>
				<div>
					<p><span>F.</span> Case participants - complete F1 and F2 tables below:</p>
					<p><span>F1.</span> Child Table</p>
					<h4>Table F1 Instructions:</h4>
					<ul>
            <li>For both foster care cases and in-home services cases, enter the first and last names (first name first) of all
                children in the family as identified in the case file.  If the case is a foster care case, indicate "Yes" next to
                the name of the target child.  It is essential that the target child be clearly identified for all foster care cases.</li>
            <li>Enter the race and ethnicity information as provided in the case file.  If the child is of two or more races, list
                all that are provided in the case file (for example, White and Asian, or White and American Indian).  If you
                learn during the course of the interviews that a child is of a different race or ethnicity than is noted in the file
                or is of two or more races and only one is noted in the file (for example, Non-Hispanic instead of Hispanic,
                or both White and Native American), please change the race or ethnicity identification information
                presented below to reflect the accurate information.</li>
            <li>Select from the following options for ethnicity: Non-Hispanic or Hispanic</li>
            <li>Select from the following options for race:
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- American Indian or Alaskan Native </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Asian </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Black or African American </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Native Hawaiian or Other Pacific Islander </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- White </p>
            <p>&nbsp; &nbsp;&nbsp; &nbsp;- Unknown or Unable to Determine </p>
            </li>
            <li>Provide the date of birth for all children in the family, even if this is a foster care case.</li>
        	</ul><!--closure of inner ul tag-->
        	<div align="center">
            <h4 align="center">Child Table</h4>
            
            <table border="1" class="all_table">
              <tr>
                <td align="center">Target Child (Yes/No)</td>
                <td align="center">Child(ren)'s Name(s):</td>
                <td align="center">Race(s) </td>
                <td align="center">Ethnicity</td>
                <td align="center">Date(s) of Birth (MM/DD/YY):</td>
                <td align="center">Gender:</td>
                <td align="center">Interviewed (Yes/No)</td>
              </tr>
              <tr>
                  <td>
                      <select id="FS_F1_RO_C0" name="FS_F1_RO_C0" style="width:100%;">   
                        <option value="" <?php echo ($dataOUT['FS_F1_RO_C0'] == "" ? "selected" : ""); ?> ></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_RO_C0'] == "Yes" ? "selected" : ""); ?> >Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_RO_C0'] == "No" ? "selected" : ""); ?> >No</option>                   
                       </select>
                   </td>
                <td><input type="text" name="FS_F1_RO_C1" id="FS_F1_RO_C1" size="30" value=" <?php $FS_F1_RO_C1 = isset($_POST['FS_F1_RO_C1'])?$_POST['FS_F1_RO_C1'] : $dataOUT['FS_F1_RO_C1']; echo $FS_F1_RO_C1 ; ?> " /></td>
                <td>
                    <select id="FS_F1_RO_C2" name="FS_F1_RO_C2" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_RO_C2'] == "" ? "selected" : ""); ?>></option>
                        <option value="American Indian or Alaskan Native" <?php echo ($dataOUT['FS_F1_RO_C2'] == "American Indian or Alaskan Native" ? "selected" : ""); ?>>American Indian or Alaskan Native </option>
                        <option value="Asian" <?php echo ($dataOUT['FS_F1_RO_C2'] == "Asian" ? "selected" : ""); ?>>Asian</option> 
                        <option value="Black or African American" <?php echo ($dataOUT['FS_F1_RO_C2'] == "Black or African American" ? "selected" : ""); ?>>Black or African American</option> 
                        <option value="Native Hawaiian or Other Pacific Islander" <?php echo ($dataOUT['FS_F1_RO_C2'] == "Native Hawaiian or Other Pacific Islander" ? "selected" : ""); ?>>Native Hawaiian or Other Pacific Islander </option>
                        <option value="White" <?php echo ($dataOUT['FS_F1_RO_C2'] == "White" ? "selected" : ""); ?>>White</option>
                        <option value="Unknown or Unable to Determine" <?php echo ($dataOUT['FS_F1_RO_C2'] == "Unknown or Unable to Determine" ? "selected" : ""); ?>>Unknown or Unable to Determine </option>
                    </select>
                </td>
                <td>
                    <select id="FS_F1_RO_C3" name="FS_F1_RO_C3" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_RO_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Non-Hispanic" <?php echo ($dataOUT['FS_F1_RO_C3'] == "Non-Hispanic" ? "selected" : ""); ?>>Non-Hispanic</option>
                        <option value="Hispanic" <?php echo ($dataOUT['FS_F1_RO_C3'] == "Hispanic" ? "selected" : ""); ?>>Hispanic</option>                   
                    </select>
                </td>
                <td>   
                 <!--   <input type="text" name="FS_F1_RO_C4" id="FS_F1_RO_C4" size="10"/> -->
                    <input type="text" class="datepicker" name="FS_F1_RO_C4" id="FS_F1_RO_C4" style="width: 80%;" value=" <?php $FS_F1_RO_C4 = isset($_POST['FS_F1_RO_C4'])?$_POST['FS_F1_RO_C4'] : $dataOUT['FS_F1_RO_C4']; echo $FS_F1_RO_C4 ; ?> "/>

                </td>
                <td>
                    <select id="FS_F1_RO_C5" name="FS_F1_RO_C5" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_RO_C5'] == "" ? "selected" : ""); ?>></option>
                        <option value="Female" <?php echo ($dataOUT['FS_F1_RO_C5'] == "Female" ? "selected" : ""); ?>>Female</option>
                        <option value="Male" <?php echo ($dataOUT['FS_F1_RO_C5'] == "Male" ? "selected" : ""); ?>>Male</option>                   
                    </select>                   
                </td>
                <td>
                    <select id="FS_F1_RO_C6" name="FS_F1_RO_C6" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_RO_C6'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_RO_C6'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_RO_C6'] == "No" ? "selected" : ""); ?>>No</option>                   
                       </select>
                </td>
              </tr>
              <tr>
                  <td>
                      <select id="FS_F1_R1_C0" name="FS_F1_R1_C0" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R1_C0'] == "" ? "selected" : ""); ?> ></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R1_C0'] == "Yes" ? "selected" : ""); ?> >Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R1_C0'] == "No" ? "selected" : ""); ?> >No</option>                   
                       </select>
                   </td>
                <td><input type="text" name="FS_F1_R1_C1" id="FS_F1_R1_C1" size="30" value=" <?php $FS_F1_R1_C1 = isset($_POST['FS_F1_R1_C1'])?$_POST['FS_F1_R1_C1'] : $dataOUT['FS_F1_R1_C1']; echo $FS_F1_R1_C1 ; ?> " /></td>
                <td>
                    <select id="FS_F1_R1_C2" name="FS_F1_R1_C2" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R1_C2'] == "" ? "selected" : ""); ?>></option>
                        <option value="American Indian or Alaskan Native" <?php echo ($dataOUT['FS_F1_R1_C2'] == "American Indian or Alaskan Native" ? "selected" : ""); ?>>American Indian or Alaskan Native </option>
                        <option value="Asian" <?php echo ($dataOUT['FS_F1_R1_C2'] == "Asian" ? "selected" : ""); ?>>Asian</option> 
                        <option value="Black or African American" <?php echo ($dataOUT['FS_F1_R1_C2'] == "Black or African American" ? "selected" : ""); ?>>Black or African American</option> 
                        <option value="Native Hawaiian or Other Pacific Islander" <?php echo ($dataOUT['FS_F1_R1_C2'] == "Native Hawaiian or Other Pacific Islander" ? "selected" : ""); ?>>Native Hawaiian or Other Pacific Islander </option>
                        <option value="White" <?php echo ($dataOUT['FS_F1_R1_C2'] == "White" ? "selected" : ""); ?>>White</option>
                        <option value="Unknown or Unable to Determine" <?php echo ($dataOUT['FS_F1_R1_C2'] == "Unknown or Unable to Determine" ? "selected" : ""); ?>>Unknown or Unable to Determine </option>
                    </select>
                </td>
                <td>
                    <select id="FS_F1_R1_C3" name="FS_F1_R1_C3" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R1_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Non-Hispanic" <?php echo ($dataOUT['FS_F1_R1_C3'] == "Non-Hispanic" ? "selected" : ""); ?>>Non-Hispanic</option>
                        <option value="Hispanic" <?php echo ($dataOUT['FS_F1_R1_C3'] == "Hispanic" ? "selected" : ""); ?>>Hispanic</option>                         
                    </select>
                </td>
                <td>   
                 <!--   <input type="text" name="FS_F1_RO_C4" id="FS_F1_RO_C4" size="10"/> -->
                    <input type="text" class="datepicker" name="FS_F1_R1_C4" id="FS_F1_R1_C4" style="width: 80%;" value=" <?php $FS_F1_R1_C4 = isset($_POST['FS_F1_R1_C4'])?$_POST['FS_F1_R1_C4'] : $dataOUT['FS_F1_R1_C4']; echo $FS_F1_R1_C4 ; ?> " />

                </td>
                <td>
                    <select id="FS_F1_R1_C5" name="FS_F1_R1_C5" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R1_C5'] == "" ? "selected" : ""); ?>></option>
                        <option value="Female" <?php echo ($dataOUT['FS_F1_R1_C5'] == "Female" ? "selected" : ""); ?>>Female</option>
                        <option value="Male" <?php echo ($dataOUT['FS_F1_R1_C5'] == "Male" ? "selected" : ""); ?>>Male</option>                   
                    </select>                   
                </td>
                <td>
                    <select id="FS_F1_R1_C6" name="FS_F1_R1_C6" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R1_C6'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R1_C6'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R1_C6'] == "No" ? "selected" : ""); ?>>No</option>                 
                       </select>
                </td>
              </tr>
              <tr>
                  <td>
                      <select id="FS_F1_R2_C0" name="FS_F1_R2_C0" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R2_C0'] == "" ? "selected" : ""); ?> ></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R2_C0'] == "Yes" ? "selected" : ""); ?> >Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R2_C0'] == "No" ? "selected" : ""); ?> >No</option>                    
                       </select>
                   </td>
                <td><input type="text" name="FS_F1_R2_C1" id="FS_F1_R2_C1" size="30" value=" <?php $FS_F1_R2_C1 = isset($_POST['FS_F1_R2_C1'])?$_POST['FS_F1_R2_C1'] : $dataOUT['FS_F1_R2_C1']; echo $FS_F1_R2_C1 ; ?> " /></td>
                <td>
                    <select id="FS_F1_R2_C2" name="FS_F1_R2_C2" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R2_C2'] == "" ? "selected" : ""); ?>></option>
                        <option value="American Indian or Alaskan Native" <?php echo ($dataOUT['FS_F1_R2_C2'] == "American Indian or Alaskan Native" ? "selected" : ""); ?>>American Indian or Alaskan Native </option>
                        <option value="Asian" <?php echo ($dataOUT['FS_F1_R2_C2'] == "Asian" ? "selected" : ""); ?>>Asian</option> 
                        <option value="Black or African American" <?php echo ($dataOUT['FS_F1_R2_C2'] == "Black or African American" ? "selected" : ""); ?>>Black or African American</option> 
                        <option value="Native Hawaiian or Other Pacific Islander" <?php echo ($dataOUT['FS_F1_R2_C2'] == "Native Hawaiian or Other Pacific Islander" ? "selected" : ""); ?>>Native Hawaiian or Other Pacific Islander </option>
                        <option value="White" <?php echo ($dataOUT['FS_F1_R2_C2'] == "White" ? "selected" : ""); ?>>White</option>
                        <option value="Unknown or Unable to Determine" <?php echo ($dataOUT['FS_F1_R2_C2'] == "Unknown or Unable to Determine" ? "selected" : ""); ?>>Unknown or Unable to Determine </option>
                      </select>
                </td>
                <td>
                    <select id="FS_F1_R2_C3" name="FS_F1_R2_C3" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R2_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Non-Hispanic" <?php echo ($dataOUT['FS_F1_R2_C3'] == "Non-Hispanic" ? "selected" : ""); ?>>Non-Hispanic</option>
                        <option value="Hispanic" <?php echo ($dataOUT['FS_F1_R2_C3'] == "Hispanic" ? "selected" : ""); ?>>Hispanic</option>                        
                    </select>
                </td>
                <td>   
                 <!--   <input type="text" name="FS_F1_RO_C4" id="FS_F1_RO_C4" size="10"/> -->
                    <input type="text" class="datepicker" name="FS_F1_R2_C4" id="FS_F1_R2_C4" style="width: 80%;" value=" <?php $FS_F1_R2_C4 = isset($_POST['FS_F1_R2_C4'])?$_POST['FS_F1_R2_C4'] : $dataOUT['FS_F1_R2_C4']; echo $FS_F1_R2_C4 ; ?> " />

                </td>
                <td>
                    <select id="FS_F1_R2_C5" name="FS_F1_R2_C5" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R2_C5'] == "" ? "selected" : ""); ?>></option>
                        <option value="Female" <?php echo ($dataOUT['FS_F1_R2_C5'] == "Female" ? "selected" : ""); ?>>Female</option>
                        <option value="Male" <?php echo ($dataOUT['FS_F1_R2_C5'] == "Male" ? "selected" : ""); ?>>Male</option>                
                    </select>                   
                </td>
                <td>
                    <select id="FS_F1_R2_C6" name="FS_F1_R2_C6" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R2_C6'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R2_C6'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R2_C6'] == "No" ? "selected" : ""); ?>>No</option>                     
                       </select>
                </td>
              </tr>
              <tr>
                  <td>
                      <select id="FS_F1_R3_C0" name="FS_F1_R3_C0" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R3_C0'] == "" ? "selected" : ""); ?> ></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R3_C0'] == "Yes" ? "selected" : ""); ?> >Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R3_C0'] == "No" ? "selected" : ""); ?> >No</option>                  
                       </select>
                   </td>
                <td><input type="text" name="FS_F1_R3_C1" id="FS_F1_R3_C1" size="30" value=" <?php $FS_F1_R3_C1 = isset($_POST['FS_F1_R3_C1'])?$_POST['FS_F1_R3_C1'] : $dataOUT['FS_F1_R3_C1']; echo $FS_F1_R3_C1 ; ?> " /></td>
                <td>
                    <select id="FS_F1_R3_C2" name="FS_F1_R3_C2" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R3_C2'] == "" ? "selected" : ""); ?>></option>
                        <option value="American Indian or Alaskan Native" <?php echo ($dataOUT['FS_F1_R3_C2'] == "American Indian or Alaskan Native" ? "selected" : ""); ?>>American Indian or Alaskan Native </option>
                        <option value="Asian" <?php echo ($dataOUT['FS_F1_R3_C2'] == "Asian" ? "selected" : ""); ?>>Asian</option> 
                        <option value="Black or African American" <?php echo ($dataOUT['FS_F1_R3_C2'] == "Black or African American" ? "selected" : ""); ?>>Black or African American</option> 
                        <option value="Native Hawaiian or Other Pacific Islander" <?php echo ($dataOUT['FS_F1_R3_C2'] == "Native Hawaiian or Other Pacific Islander" ? "selected" : ""); ?>>Native Hawaiian or Other Pacific Islander </option>
                        <option value="White" <?php echo ($dataOUT['FS_F1_R3_C2'] == "White" ? "selected" : ""); ?>>White</option>
                        <option value="Unknown or Unable to Determine" <?php echo ($dataOUT['FS_F1_R3_C2'] == "Unknown or Unable to Determine" ? "selected" : ""); ?>>Unknown or Unable to Determine </option>
                    </select>
                </td>
                <td>
                    <select id="FS_F1_R3_C3" name="FS_F1_R3_C3" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R3_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Non-Hispanic" <?php echo ($dataOUT['FS_F1_R3_C3'] == "Non-Hispanic" ? "selected" : ""); ?>>Non-Hispanic</option>
                        <option value="Hispanic" <?php echo ($dataOUT['FS_F1_R3_C3'] == "Hispanic" ? "selected" : ""); ?>>Hispanic</option>                     
                    </select>
                </td>
                <td>   
                 <!--   <input type="text" name="FS_F1_RO_C4" id="FS_F1_RO_C4" size="10"/> -->
                    <input type="text" class="datepicker" name="FS_F1_R3_C4" id="FS_F1_R3_C4" style="width: 80%;" value=" <?php $FS_F1_R3_C4 = isset($_POST['FS_F1_R3_C4'])?$_POST['FS_F1_R3_C4'] : $dataOUT['FS_F1_R3_C4']; echo $FS_F1_R3_C4 ; ?> " />

                </td>
                <td>
                    <select id="FS_F1_R3_C5" name="FS_F1_R3_C5" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R3_C5'] == "" ? "selected" : ""); ?>></option>
                        <option value="Female" <?php echo ($dataOUT['FS_F1_R3_C5'] == "Female" ? "selected" : ""); ?>>Female</option>
                        <option value="Male" <?php echo ($dataOUT['FS_F1_R3_C5'] == "Male" ? "selected" : ""); ?>>Male</option>                    
                    </select>                   
                </td>
                <td>
                    <select id="FS_F1_R3_C6" name="FS_F1_R3_C6" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R3_C6'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R3_C6'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R3_C6'] == "No" ? "selected" : ""); ?>>No</option>                     
                       </select>
                </td>
              </tr>
              <tr>
                  <td>
                      <select id="FS_F1_R4_C0" name="FS_F1_R4_C0" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R4_C0'] == "" ? "selected" : ""); ?> ></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R4_C0'] == "Yes" ? "selected" : ""); ?> >Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R4_C0'] == "No" ? "selected" : ""); ?> >No</option>                    
                       </select>
                   </td>
                <td><input type="text" name="FS_F1_R4_C1" id="FS_F1_R4_C1" size="30" value=" <?php $FS_F1_R4_C1 = isset($_POST['FS_F1_R4_C1'])?$_POST['FS_F1_R4_C1'] : $dataOUT['FS_F1_R4_C1']; echo $FS_F1_R4_C1 ; ?> " /></td>
                <td>
                    <select id="FS_F1_R4_C2" name="FS_F1_R4_C2" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R4_C2'] == "" ? "selected" : ""); ?>></option>
                        <option value="American Indian or Alaskan Native" <?php echo ($dataOUT['FS_F1_R4_C2'] == "American Indian or Alaskan Native" ? "selected" : ""); ?>>American Indian or Alaskan Native </option>
                        <option value="Asian" <?php echo ($dataOUT['FS_F1_R4_C2'] == "Asian" ? "selected" : ""); ?>>Asian</option> 
                        <option value="Black or African American" <?php echo ($dataOUT['FS_F1_R4_C2'] == "Black or African American" ? "selected" : ""); ?>>Black or African American</option> 
                        <option value="Native Hawaiian or Other Pacific Islander" <?php echo ($dataOUT['FS_F1_R4_C2'] == "Native Hawaiian or Other Pacific Islander" ? "selected" : ""); ?>>Native Hawaiian or Other Pacific Islander </option>
                        <option value="White" <?php echo ($dataOUT['FS_F1_R4_C2'] == "White" ? "selected" : ""); ?>>White</option>
                        <option value="Unknown or Unable to Determine" <?php echo ($dataOUT['FS_F1_R4_C2'] == "Unknown or Unable to Determine" ? "selected" : ""); ?>>Unknown or Unable to Determine </option>
                    </select>
                </td>
                <td>
                    <select id="FS_F1_R4_C3" name="FS_F1_R4_C3" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R4_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Non-Hispanic" <?php echo ($dataOUT['FS_F1_R4_C3'] == "Non-Hispanic" ? "selected" : ""); ?>>Non-Hispanic</option>
                        <option value="Hispanic" <?php echo ($dataOUT['FS_F1_R4_C3'] == "Hispanic" ? "selected" : ""); ?>>Hispanic</option>                   
                    </select>
                </td>
                <td>   
                 <!--   <input type="text" name="FS_F1_RO_C4" id="FS_F1_R4_C4" size="10"/> -->
                    <input type="text" class="datepicker" name="FS_F1_R4_C4" id="FS_F1_R4_C4" style="width: 80%;"  value=" <?php $FS_F1_R4_C4 = isset($_POST['FS_F1_R4_C4'])?$_POST['FS_F1_R4_C4'] : $dataOUT['FS_F1_R4_C4']; echo $FS_F1_R4_C4 ; ?> "/>

                </td>
                <td>
                    <select id="FS_F1_R4_C5" name="FS_F1_R4_C5" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R4_C5'] == "" ? "selected" : ""); ?>></option>
                        <option value="Female" <?php echo ($dataOUT['FS_F1_R4_C5'] == "Female" ? "selected" : ""); ?>>Female</option>
                        <option value="Male" <?php echo ($dataOUT['FS_F1_R4_C5'] == "Male" ? "selected" : ""); ?>>Male</option>                 
                    </select>                   
                </td>
                <td>
                    <select id="FS_F1_R4_C6" name="FS_F1_R4_C6" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R4_C6'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R4_C6'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R4_C6'] == "No" ? "selected" : ""); ?>>No</option>                  
                    </select>
                </td>
              </tr>
              <tr>
                  <td>
                      <select id="FS_F1_R5_C0" name="FS_F1_R5_C0" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R5_C0'] == "" ? "selected" : ""); ?> ></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R5_C0'] == "Yes" ? "selected" : ""); ?> >Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R5_C0'] == "No" ? "selected" : ""); ?> >No</option>                
                    </select>
                   </td>
                <td><input type="text" name="FS_F1_R5_C1" id="FS_F1_R5_C1" size="30" value=" <?php $FS_F1_R5_C1 = isset($_POST['FS_F1_R5_C1'])?$_POST['FS_F1_R5_C1'] : $dataOUT['FS_F1_R5_C1']; echo $FS_F1_R5_C1 ; ?> " /></td>
                <td>
                    <select id="FS_F1_R5_C2" name="FS_F1_R5_C2" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R5_C2'] == "" ? "selected" : ""); ?>></option>
                        <option value="American Indian or Alaskan Native" <?php echo ($dataOUT['FS_F1_R5_C2'] == "American Indian or Alaskan Native" ? "selected" : ""); ?>>American Indian or Alaskan Native </option>
                        <option value="Asian" <?php echo ($dataOUT['FS_F1_R5_C2'] == "Asian" ? "selected" : ""); ?>>Asian</option> 
                        <option value="Black or African American" <?php echo ($dataOUT['FS_F1_R5_C2'] == "Black or African American" ? "selected" : ""); ?>>Black or African American</option> 
                        <option value="Native Hawaiian or Other Pacific Islander" <?php echo ($dataOUT['FS_F1_R5_C2'] == "Native Hawaiian or Other Pacific Islander" ? "selected" : ""); ?>>Native Hawaiian or Other Pacific Islander </option>
                        <option value="White" <?php echo ($dataOUT['FS_F1_R5_C2'] == "White" ? "selected" : ""); ?>>White</option>
                        <option value="Unknown or Unable to Determine" <?php echo ($dataOUT['FS_F1_R5_C2'] == "Unknown or Unable to Determine" ? "selected" : ""); ?>>Unknown or Unable to Determine </option>
                    </select>
                </td>
                <td>
                    <select id="FS_F1_R5_C3" name="FS_F1_R5_C3" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R5_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Non-Hispanic" <?php echo ($dataOUT['FS_F1_R5_C3'] == "Non-Hispanic" ? "selected" : ""); ?>>Non-Hispanic</option>
                        <option value="Hispanic" <?php echo ($dataOUT['FS_F1_R5_C3'] == "Hispanic" ? "selected" : ""); ?>>Hispanic</option>                      
                    </select>
                </td>
                <td>   
                 <!--   <input type="text" name="FS_F1_RO_C4" id="FS_F1_RO_C4" size="10"/> -->
                    <input type="text" class="datepicker" name="FS_F1_R5_C4" id="FS_F1_R5_C4" style="width: 80%;" value=" <?php $FS_F1_R5_C4 = isset($_POST['FS_F1_R5_C4'])?$_POST['FS_F1_R5_C4'] : $dataOUT['FS_F1_R5_C4']; echo $FS_F1_R5_C4 ; ?> " />

                </td>
                <td>
                    <select id="FS_F1_R5_C5" name="FS_F1_R5_C5" style="width:100%;">                   
                       <option value="" <?php echo ($dataOUT['FS_F1_R5_C5'] == "" ? "selected" : ""); ?>></option>
                        <option value="Female" <?php echo ($dataOUT['FS_F1_R5_C5'] == "Female" ? "selected" : ""); ?>>Female</option>
                        <option value="Male" <?php echo ($dataOUT['FS_F1_R5_C5'] == "Male" ? "selected" : ""); ?>>Male</option>                        
                    </select>                   
                </td>
                <td>
                    <select id="FS_F1_R5_C6" name="FS_F1_R5_C6" style="width:100%;">                   
                        <option value="" <?php echo ($dataOUT['FS_F1_R5_C6'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F1_R5_C6'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F1_R5_C6'] == "No" ? "selected" : ""); ?>>No</option>                   
                    </select>
                </td>
              </tr>
            </table>
          </div>

          <div>
            <p><span>F2.</span> Case Participant Table</p>
            <h4>Table F2 Instructions:</h4>
                <ul>
                    <li>In the Name column, for both foster care and in-home services cases, enter the first and last names (first
                        name first) of the key case participants who will be rated throughout the instrument as Mother(s) and
                        Father(s), as well as the names of other people being interviewed in the case.  Refer to the instructions in
                        the CFSR Procedures Manual for more information on whom to consider as case participants.</li>
                    <li>In the Role column, list one of the following options: Mother, Father, Foster Parent, Caseworker, Supervisor,
                        Other.  If Other, specify the type of role.</li>
                    <li>In the Relationship to Child column, explain what child the person is related to and how, and whether he or
                        she is/was living with the child and/or in a caretaking role.  For example: boyfriend of (child name)'s
                        mother, lives in the home and shares caretaking responsibility with mother; biological mother of (children's
                        names) not living in the home, not a caretaker and visits with children infrequently; legal father of (child's
                        name) but does not have any relationship with child. More than one person may be identified for each role.</li>
                    <li>In the Interviewed column, note whether the person has been interviewed regarding the case.</li>
            </ul><!--closure of inner ul tag-->
            <h4 align="center">Case Participant Table</h4>
            
            <table align="center" border="1">
              <tr>
                  <td align="center" style="width:30em;">Name</td>
                  <td align="center">Role</td>
                  <td align="center" style="width:30em;">Relationship to Child  </td>
                  <td align="center">Interviewed (Yes/No)</td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R0_C0" id="FS_F2_R0_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R0_C0 = isset($_POST['FS_F2_R0_C0'])?$_POST['FS_F2_R0_C0'] : $dataOUT['FS_F2_R0_C0']; echo $FS_F2_R0_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R0_C1" name="FS_F2_R0_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R0_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R0_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R0_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R0_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R0_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R0_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R0_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>         
                    </select>  
                       <input type="text" name="FS_F2_R0_C1_Other" id="FS_F2_R0_C1_Other" style="width:98%;" value=" <?php $FS_F2_R0_C1_Other = isset($_POST['FS_F2_R0_C1_Other'])?$_POST['FS_F2_R0_C1_Other'] : $dataOUT['FS_F2_R0_C1_Other']; echo $FS_F2_R0_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R0_C2" id="FS_F2_R0_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R0_C2 = isset($_POST['FS_F2_R0_C2'])?$_POST['FS_F2_R0_C2'] : $dataOUT['FS_F2_R0_C2']; echo $FS_F2_R0_C2 ; ?> "/></td>
                  <td>
                      <select id="FS_F2_R0_C3" name="FS_F2_R0_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R0_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R0_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R0_C3'] == "No" ? "selected" : ""); ?>>No</option>                   
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R1_C0" id="FS_F2_R1_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R1_C0 = isset($_POST['FS_F2_R1_C0'])?$_POST['FS_F2_R1_C0'] : $dataOUT['FS_F2_R1_C0']; echo $FS_F2_R1_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R1_C1" name="FS_F2_R1_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R1_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R1_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R1_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R1_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R1_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R1_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R1_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>         
                    </select>  
                    <input type="text" name="FS_F2_R1_C1_Other" id="FS_F2_R1_C1_Other" style="width:98%;" value=" <?php $FS_F2_R1_C1_Other = isset($_POST['FS_F2_R1_C1_Other'])?$_POST['FS_F2_R1_C1_Other'] : $dataOUT['FS_F2_R1_C1_Other']; echo $FS_F2_R1_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R1_C2" id="FS_F2_R1_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R1_C2 = isset($_POST['FS_F2_R1_C2'])?$_POST['FS_F2_R1_C2'] : $dataOUT['FS_F2_R1_C2']; echo $FS_F2_R1_C2 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R1_C3" name="FS_F2_R1_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R1_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R1_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R1_C3'] == "No" ? "selected" : ""); ?>>No</option>                     
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R2_C0" id="FS_F2_R2_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R2_C0 = isset($_POST['FS_F2_R2_C0'])?$_POST['FS_F2_R2_C0'] : $dataOUT['FS_F2_R2_C0']; echo $FS_F2_R2_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R2_C1" name="FS_F2_R2_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R2_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R2_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R2_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R2_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R2_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R2_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R2_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>        
                    </select>  
                    <input type="text" name="FS_F2_R2_C1_Other" id="FS_F2_R2_C1_Other" style="width:98%;" value=" <?php $FS_F2_R2_C1_Other = isset($_POST['FS_F2_R2_C1_Other'])?$_POST['FS_F2_R2_C1_Other'] : $dataOUT['FS_F2_R2_C1_Other']; echo $FS_F2_R2_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R2_C2" id="FS_F2_R2_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R2_C2 = isset($_POST['FS_F2_R2_C2'])?$_POST['FS_F2_R2_C2'] : $dataOUT['FS_F2_R2_C2']; echo $FS_F2_R2_C2 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R2_C3" name="FS_F2_R2_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R2_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R2_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R2_C3'] == "No" ? "selected" : ""); ?>>No</option>                    
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R3_C0" id="FS_F2_R3_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R3_C0 = isset($_POST['FS_F2_R3_C0'])?$_POST['FS_F2_R3_C0'] : $dataOUT['FS_F2_R3_C0']; echo $FS_F2_R3_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R3_C1" name="FS_F2_R3_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R3_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R3_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R3_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R3_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R3_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R3_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R3_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>        
                    </select>  
                    <input type="text" name="FS_F2_R3_C1_Other" id="FS_F2_R3_C1_Other" style="width:98%;" value=" <?php $FS_F2_R3_C1_Other = isset($_POST['FS_F2_R3_C1_Other'])?$_POST['FS_F2_R3_C1_Other'] : $dataOUT['FS_F2_R3_C1_Other']; echo $FS_F2_R3_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R3_C2" id="FS_F2_R3_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R3_C2 = isset($_POST['FS_F2_R3_C2'])?$_POST['FS_F2_R3_C2'] : $dataOUT['FS_F2_R3_C2']; echo $FS_F2_R3_C2 ; ?> "/></td>
                  <td>
                      <select id="FS_F2_R3_C3" name="FS_F2_R3_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R3_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R3_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R3_C3'] == "No" ? "selected" : ""); ?>>No</option>                 
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R4_C0" id="FS_F2_R4_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R4_C0 = isset($_POST['FS_F2_R4_C0'])?$_POST['FS_F2_R4_C0'] : $dataOUT['FS_F2_R4_C0']; echo $FS_F2_R4_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R4_C1" name="FS_F2_R4_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R4_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R4_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R4_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R4_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R4_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R4_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R4_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>      
                    </select>  
                    <input type="text" name="FS_F2_R4_C1_Other" id="FS_F2_R4_C1_Other" style="width:98%;" value=" <?php $FS_F2_R4_C1_Other = isset($_POST['FS_F2_R4_C1_Other'])?$_POST['FS_F2_R4_C1_Other'] : $dataOUT['FS_F2_R4_C1_Other']; echo $FS_F2_R4_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R4_C2" id="FS_F2_R4_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R4_C2 = isset($_POST['FS_F2_R4_C2'])?$_POST['FS_F2_R4_C2'] : $dataOUT['FS_F2_R4_C2']; echo $FS_F2_R4_C2 ; ?> "/></td>
                  <td>
                      <select id="FS_F2_R4_C3" name="FS_F2_R4_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R4_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R4_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R4_C3'] == "No" ? "selected" : ""); ?>>No</option>                   
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R5_C0" id="FS_F2_R5_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R5_C0 = isset($_POST['FS_F2_R5_C0'])?$_POST['FS_F2_R5_C0'] : $dataOUT['FS_F2_R5_C0']; echo $FS_F2_R5_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R5_C1" name="FS_F2_R5_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R5_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R5_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R5_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R5_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R5_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R5_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R5_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>         
                    </select>  
                    <input type="text" name="FS_F2_R5_C1_Other" id="FS_F2_R5_C1_Other" style="width:98%;" value=" <?php $FS_F2_R5_C1_Other = isset($_POST['FS_F2_R5_C1_Other'])?$_POST['FS_F2_R5_C1_Other'] : $dataOUT['FS_F2_R5_C1_Other']; echo $FS_F2_R5_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R5_C2" id="FS_F2_R5_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R5_C2 = isset($_POST['FS_F2_R5_C2'])?$_POST['FS_F2_R5_C2'] : $dataOUT['FS_F2_R5_C2']; echo $FS_F2_R5_C2 ; ?> "/></td>
                  <td>
                      <select id="FS_F2_R5_C3" name="FS_F2_R5_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R5_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R5_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R5_C3'] == "No" ? "selected" : ""); ?>>No</option>                
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R6_C0" id="FS_F2_R6_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R6_C0 = isset($_POST['FS_F2_R6_C0'])?$_POST['FS_F2_R6_C0'] : $dataOUT['FS_F2_R6_C0']; echo $FS_F2_R6_C0 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R6_C1" name="FS_F2_R6_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R6_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R6_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R6_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R6_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R6_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R6_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R6_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>       
                    </select>  
                    <input type="text" name="FS_F2_R6_C1_Other" id="FS_F2_R6_C1_Other" style="width:98%;" value=" <?php $FS_F2_R6_C1_Other = isset($_POST['FS_F2_R6_C1_Other'])?$_POST['FS_F2_R6_C1_Other'] : $dataOUT['FS_F2_R6_C1_Other']; echo $FS_F2_R6_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R6_C2" id="FS_F2_R6_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R6_C2 = isset($_POST['FS_F2_R6_C2'])?$_POST['FS_F2_R6_C2'] : $dataOUT['FS_F2_R6_C2']; echo $FS_F2_R6_C2 ; ?> "/></td>
                  <td>
                    <select id="FS_F2_R6_C3" name="FS_F2_R6_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R6_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R6_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R6_C3'] == "No" ? "selected" : ""); ?>>No</option>               
                    </select>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="FS_F2_R7_C0" id="FS_F2_R7_C0" style="width:98%;" size="20" value=" <?php $FS_F2_R7_C0 = isset($_POST['FS_F2_R7_C0'])?$_POST['FS_F2_R7_C0'] : $dataOUT['FS_F2_R7_C0']; echo $FS_F2_R7_C0 ; ?> "/></td>
                  <td>
                      <select id="FS_F2_R7_C1" name="FS_F2_R7_C1" style="width:100%; margin-bottom: 3px;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R7_C1'] == "" ? "selected" : ""); ?>></option>
                        <option value="Mother" <?php echo ($dataOUT['FS_F2_R7_C1'] == "Mother" ? "selected" : ""); ?>>Mother</option>
                        <option value="Father" <?php echo ($dataOUT['FS_F2_R7_C1'] == "Father" ? "selected" : ""); ?>>Father</option>  
                        <option value="Foster Parent" <?php echo ($dataOUT['FS_F2_R7_C1'] == "Foster Parent" ? "selected" : ""); ?>>Foster Parent</option>
                        <option value="Caseworker" <?php echo ($dataOUT['FS_F2_R7_C1'] == "Caseworker" ? "selected" : ""); ?>>Caseworker</option>         
                        <option value="Supervisor" <?php echo ($dataOUT['FS_F2_R7_C1'] == "Supervisor" ? "selected" : ""); ?>>Supervisor</option>
                        <option value="Other" <?php echo ($dataOUT['FS_F2_R7_C1'] == "Other" ? "selected" : ""); ?>>Other(specify the type of role below)</option>        
                    </select>  
                    <input type="text" name="FS_F2_R7_C1_Other" id="FS_F2_R7_C1_Other" style="width:98%;" value=" <?php $FS_F2_R7_C1_Other = isset($_POST['FS_F2_R7_C1_Other'])?$_POST['FS_F2_R7_C1_Other'] : $dataOUT['FS_F2_R7_C1_Other']; echo $FS_F2_R7_C1_Other ; ?> "/>
                  </td>
                  <td><input type="text" name="FS_F2_R7_C2" id="FS_F2_R7_C2" style="width:98%;" size="20" value=" <?php $FS_F2_R7_C2 = isset($_POST['FS_F2_R7_C2'])?$_POST['FS_F2_R7_C2'] : $dataOUT['FS_F2_R7_C2']; echo $FS_F2_R7_C2 ; ?> "/></td>
                  <td>
                      <select id="FS_F2_R7_C3" name="FS_F2_R7_C3" style="width:100%;">                   
                        <option value = "" <?php echo ($dataOUT['FS_F2_R7_C3'] == "" ? "selected" : ""); ?>></option>
                        <option value="Yes" <?php echo ($dataOUT['FS_F2_R7_C3'] == "Yes" ? "selected" : ""); ?>>Yes</option>
                        <option value="No" <?php echo ($dataOUT['FS_F2_R7_C3'] == "No" ? "selected" : ""); ?>>No</option>                  
                    </select>
                  </td>
              </tr>
            </table>
        </div>

				</div> <!-- end of question F section-->

    <h3>Step3: Question G </h3>
				<div>
					<p><span>G.</span> What is the type of case reviewed (select one type only)?</p>
          <h4>Question G Instructions:</h4>
          <ul>
            <li>The case is a foster care case if the target child was in foster care at any time during the period under review.  A child is considered to be in foster care if the state child welfare agency (hereafter "the agency") has placement and care responsibility for the child.  This includes a child who is placed by the agency with relatives or in other kin-type placements, but the agency maintains placement and care responsibility.  It does not include a child who is living with relatives (or caregivers other than parents) but who is not under the care and placement responsibility of the agency.</li>
            <li>The case is an in-home services case if no child in the family was in foster care at any time during the period under review, and the case was open for at least 45 days.</li>
          </ul><!--closure of inner ul tag-->

          <p> Select the appropriate response:</p>

          <p class="answerStyle">
				    <b>Answer to Question G:
				    </b>
			    </p>

          <input type="radio" id="FS_G_FC" name="FS_G" class="uniformBtn"  class="radio" value="Foster Care" <?php echo ($dataOUT['FS_G']=='Foster Care')?'checked':'' ?> ><label for="FS_G_FC" style="widht: 30px; margin-right: 100px;">Foster Care</label>
          <input type="radio" id="FS_G_IHS" name="FS_G" class="uniformBtn" class="radio" value="In-Home Services" <?php echo ($dataOUT['FS_G']=='In-Home Services')?'checked':'' ?>><label  for="FS_G_IHS" style="widht: 30px; margin-right: 100px;">In-Home Services</label>
          <input type="radio" id="FS_G_IHSDAR" name="FS_G" class="uniformBtn" class="radio" value="In Home Services - Differential/Alternative Response" <?php echo ($dataOUT['FS_G']=='In Home Services - Differential/Alternative Response')?'checked':'' ?>><label  for="FS_G_IHSDAR" style="widht: 30px; margin-right: 100px;">In-Home Services - Differential/Alternative Response</label>
				</div>

		<h3>Step 4: Question H</h3>
				<div>
					<p><span>H.</span> Was this case opened for reasons other than child abuse and neglect?</p>

          <h4>Question H Instructions:</h4>

          <p>Examples of cases opened for reasons other than child abuse or neglect include: (1) cases opened because ofthe child's behavior, including juvenile delinquency, substance abuse, or "child in need of supervision," andthere were no maltreatment concerns in the family; or (2) cases for which the reasons for contact with thefamily were not related to child abuse or neglect.</p>

          <p>Select the appropriate response:</p>
          <p class="answerStyle">
					   Answer to Question H:
					</p>

          <input type="radio" id="FS_H_Y" name="FS_H" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['FS_H']=='Yes')?'checked':'' ?>><label for="FS_H_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
          <input type="radio" id="FS_H_N" name="FS_H" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['FS_H']=='No')?'checked':'' ?>><label for="FS_H_N" style="widht: 30px; margin-right: 100px;">No</label>

				</div> <!-- end of question H section-->

		<h3>Step 5: Question I</h3>
				<div>
					 <p><span>I.</span>  What is the date of most recent case opening for all cases?</p>
            <h4>Question I Instructions:</h4>
            <ul>
                    <li>Using MM/DD/YYYY format, enter the date on which the case was actually opened within the agency.  If a
                        child was on a trial home visit and returned to a foster care placement, it is not considered a "case opening"
                        unless the trial home visit was longer than 6 months and there was no court order extending the trial home
                        visit beyond 6 months.</li>
                    <li>If the family received in-home services before the removal of a child and placement of the child in foster
                        care, and the case was not closed before placement, enter the date on which the case was opened for inhome services.
                        The date of the child's removal from home will be captured in the next item.</li>
            </ul><!--closure of inner ul tag-->

            <p>Select the appropriate response:</p>
            <p class="answerStyle">
				<b>Answer to Question I: &nbsp;&nbsp;
				</b>
                                <input type="text" class="datepicker" name="FS_I" id="FS_I" size="30" value=" <?php $FS_I = isset($_POST['FS_I'])?$_POST['FS_I'] : $dataOUT['FS_I']; echo $FS_I ; ?> " />
                                <!--
				<input type="text" name="FS_I_MM"  id="FS_I_MM" size="10" required/>&nbsp;/&nbsp;
                                <input type="text" name="FS_I_DD" id="FS_I_DD" size="10" required/>&nbsp;/&nbsp;
                                <input type="text" name="FS_I_YYYY" id="FS_I_YY" size="10" required/>
                                -->
            </p>
		</div> <!-- end of question I section-->

		<h3>Step 6: Question J</h3>
				<div id="FS_J_AREA">
					<p><span>J.</span> What is the date of the child's most recent entry into foster care? </p>
          <h4>Question J Definition</h4>
          <ul>
            <li>"Entry into foster care" refers to a child's removal from his or her normal place of residence and placement in a substitute care setting under the placement and care responsibility of the state or local title IV-B/IV-E agency. Children are considered to have entered foster care if the child has been in substitute care for 24 hours or more.</li>
          </ul><!--closure of inner ul tag-->

          <h4>Question J Instructions:</h4>
          <ul>
            <li>If in Question G, In-Home Services was selected, then J is Not Applicable: </li>
            <li>Using MM/DD/YYYY format, enter the date of the child's most recent entry into foster care.</li>
            <li>If a child was on a trial home visit and returned to a foster care placement, the return is not considered an "entry into foster care" unless the trial home visit was longer than 6 months and there was no court order extending the trial home visit beyond 6 months.</li>
          </ul><!--closure of inner ul tag-->

          <p class="answerStyle">
				    <b>Answer to Question J: &nbsp;&nbsp;
				    </b>
            <input type="text" class="datepicker" name="FS_J" id="FS_J" size="30" value=" <?php $FS_J = isset($_POST['FS_J'])?$_POST['FS_J'] : $dataOUT['FS_J']; echo $FS_J ; ?> " />&nbsp;/&nbsp;
            <!--
            <input type="text" name="FS_J_MM" id="FS_J_MM" size="10"/>&nbsp;/&nbsp;
            <input type="text" name="FS_J_DD" id="FS_J_DD" size="10"/>&nbsp;/&nbsp;
            <input type="text" name="FS_J_YYYY" id="FS_J_YY" size="10"/>&nbsp;/&nbsp;
            -->
            <input type="checkbox" id="FS_J_NA" name="FS_J_NA" class="uniformBtn"  value="NA" <?php echo ($dataOUT['FS_J_NA']=='NA')?'checked':'' ?>><label for="FS_J_NA" style="width: 30px; margin-right: 100px;">NA</label>
	
            <input type="button" id="FS_J_US" name="FS_J_US" class="Btn"  value="Re-do question J">
          </p>
		    </div> <!-- end of question J section-->

		<h3>Step 7: Question K</h3>
				<div id="FS_K_AREA">
					 <p><span>K.</span> What is the date of discharge from foster care for the most recent foster care episode? </p>
            <h4>Question K Definition</h4>
            <ul>
                    <li>"Discharge from foster care" is defined as the point when the child is no longer in foster care under the care
                        and placement responsibility or supervision of the agency.</li>
            </ul><!--closure of inner ul tag-->
            <h4>Question K Instructions:</h4>
            <ul>
                    <li>If in Question G, Foster Care was selected, but has not yet been discharged, then select Not Yet Discharged.</li>
                    <li>If in Question G, In-Home Services was selected, then K is Not Applicable:</li>
                    <li>Using MM/DD/YYYY format, enter the date of discharge from foster care for the most recent foster care
                        episode.</li>
                    <li>If a child returns home on a trial home visit and the agency retains responsibility or supervision of the child,
                        the child should be considered discharged from foster care only if the trial home visit was longer than 6
                        months, and there was no court order extending the trial home visit beyond 6 months.</li>

            </ul><!--closure of inner ul tag-->

            <p class="answerStyle">
				      <b>Answer to Question K: &nbsp;&nbsp;
				      </b>
                <input type="text" class="datepicker" name="FS_K" id="FS_K" size="30" value=" <?php $FS_K = isset($_POST['FS_K'])?$_POST['FS_K'] : $dataOUT['FS_K']; echo $FS_K ; ?> " />&nbsp;/&nbsp;
                <!--
                <input type="text" name="FS_K_MM"  id="FS_K_MM" size="10"/>&nbsp;/&nbsp;
                <input type="text" name="FS_K_DD" id="FS_K_DD" size="10"/>&nbsp;/&nbsp;
                <input type="text" name="FS_K_YYYY" id="FS_K_YY" size="10"/>&nbsp;/&nbsp;
                -->
                
              <input type="radio" id="FS_K_NYD" name="FS_K_RADIO" class="uniformBtn" class="radio" value="Not Yet Discharged" <?php echo ($dataOUT['FS_K_RADIO']=='Not Yet Discharged')?'checked':'' ?>><label for="FS_K_NYD" style="widht: 30px;">Not Yet Discharged</label>&nbsp;/&nbsp;
              <input type="radio" id="FS_K_NA" name="FS_K_RADIO" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['FS_K_RADIO']=='NA')?'checked':'' ?>><label for="FS_K_NA" style="widht: 30px; margin-right: 100px;">NA</label>
              <input type="button" id="FS_K_US" name="FS_K_US" class="Btn"  value="Re-do question K">
		
			</p>
		</div> <!-- end of question K section-->

		<h3>Step 8: Question L</h3>
				<div id="FS_L_AREA">
					 <p><span>L.</span> What is the date of case closure (for all cases)?</p>
            <h4>Question L Instructions:</h4>
            <ul>
                <li>If the case is still open at the time of review, select "Case not closed by time of review."</li>
                <li>Using MM/DD/YYYY format, enter the date on which the agency officially closed the case.  For foster care cases, this may or may not be the same as the discharge date.</li>
            </ul><!--closure of inner ul tag-->

            <p class="answerStyle">
              <b>Answer to Question L: &nbsp;&nbsp;
				      </b>
               <input type="text" class="datepicker" name="FS_L" id="FS_L" size="30" value=" <?php $FS_L = isset($_POST['FS_L'])?$_POST['FS_L'] : $dataOUT['FS_L']; echo $FS_L ; ?> "/>&nbsp;/&nbsp;
               <!--
              <input type="text" name="FS_L_MM" id="FS_L_MM" size="10"/>&nbsp;/&nbsp;
              <input type="text" name="FS_L_DD" id="FS_L_DD" size="10"/>&nbsp;/&nbsp;
              <input type="text" name="FS_L_YYYY" id="FS_L_YY" size="10"/>&nbsp;/&nbsp;
               -->
              <input type="checkbox" id="FS_L_CNCBTOR" name="FS_L_RADIO" class="uniformBtn"  value="Case not closed by time of review" <?php echo ($dataOUT['FS_L_RADIO']=='Case not closed by time of review')?'checked':'' ?>><label for="FS_L_CNCBTOR" style="widht: 30px; margin-right: 100px;">Case not closed by time of review</label>
              <input type="button" id="FS_L_US" name="FS_L_US" class="Btn"  value="Re-do question L">
            </p>
		    </div> <!-- end of question L section-->

		<h3>Step 9: Question M</h3>
				<div>
					<p><span>M.</span> What is the reason for agency involvement?</p>
            <h4>M1 Instructions:</h4>
            <ul>
                    <li>Indicate the reason(s) for the agency's involvement with this child or family for the most recent case
                        opening. Select all reasons that apply.</li>
            </ul><!--closure of inner ul tag-->
         <div id="CHECK_FS_M1">
            <p class="answerStyle">
				<b>Answer to Question M1: &nbsp;&nbsp;
				</b>
			</p>
                         <div id="FS_M1_CHECKBOX"></div>
			<div class="quesMcheck">
              <!--  <form action="" method="get" name="form3"> -->
                	<table>
                		<tr>
                			<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_PA" value="Physical abuse" <?php echo ($dataOUT['FS_M1_SRC_1']=='Physical abuse')?'checked':'' ?> />Physical abuse </label>		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_A" value="Abandonment" <?php echo ($dataOUT['FS_M1_SRC_2']=='Abandonment')?'checked':'' ?> />Abandonment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_SABC" value="Substance abuse by child" <?php echo ($dataOUT['FS_M1_SRC_3']=='Substance abuse by child')?'checked':'' ?> />Substance abuse by child </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_SA" value="Sexual abuse" <?php echo ($dataOUT['FS_M1_SRC_4']=='Sexual abuse')?'checked':'' ?> />Sexual abuse </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_MPHOP" value="Mental/physical health of parent" <?php echo ($dataOUT['FS_M1_SRC_5']=='Mental/physical health of parent')?'checked':'' ?> />Mental/physical health of parent </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_DVICH" value="Domestic violence in child's home" <?php echo ($dataOUT['FS_M1_SRC_6']=='Domestic violence in child\'s home')?'checked':'' ?> />Domestic violence in child's home </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_EM" value="Emotional maltreatment" <?php echo ($dataOUT['FS_M1_SRC_7']=='Emotional maltreatment')?'checked':'' ?> />Emotional maltreatment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_MPHOC" value="Mental/physical health of child" <?php echo ($dataOUT['FS_M1_SRC_8']=='Mental/physical health of child')?'checked':'' ?> />Mental/physical health of child </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_CIJJS" value="Child in juvenile justice system" <?php echo ($dataOUT['FS_M1_SRC_9']=='Child in juvenile justice system')?'checked':'' ?> />Child in juvenile justice system</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_N" value="Neglect (not including medical neglect)" <?php echo ($dataOUT['FS_M1_SRC_10']=='Neglect (not including medical neglect)')?'checked':'' ?> />Neglect (not including medical neglect)</label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_SABP" value="Substance abuse by parent(s)" <?php echo ($dataOUT['FS_M1_SRC_11']=='Substance abuse by parent(s)')?'checked':'' ?> />Substance abuse by parent(s) </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_O" value="Other (specify)" <?php echo ($dataOUT['FS_M1_SRC_12']=='Other (specify)')?'checked':'' ?> />Other (specify)</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_MN" value="Medical neglect" <?php echo ($dataOUT['FS_M1_SRC_13']=='Medical neglect')?'checked':'' ?> />Medical neglect</label>		</td>
                    		<td>
                    <label><input name="FS_M1[]" type="checkbox" id="FS_M_CB" value="Child's behavior"  <?php echo ($dataOUT['FS_M1_SRC_14']=='Child\'s behavior')?'checked':'' ?>/>Child's behavior </label>
                    		</td>
                    	</tr>

                	</table>
              <!--  </form> -->
            </div>
          </div> <!-- end of CHECKBOX_FS_M1 -->
            <h4>M2 Instructions:</h4>
            <ul>
                    <li>Select the <b>primary reason</b> the case was opened. </li>
            </ul><!--closure of inner ul tag-->

			 <p class="answerStyle">
				<b>Answer to Question M2: &nbsp;&nbsp;
				</b>
			</p>
			<div class="quesMcheck">
            <!--    <form action="" method="get" name="form4"> -->
                	<table>
                		<tr>
                			<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_PA" value="Physical abuse" <?php echo ($dataOUT['FS_M2']=='Physical abuse')?'checked':'' ?> />Physical abuse </label>		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_A" value="Abandonment" <?php echo ($dataOUT['FS_M2']=='Abandonment')?'checked':'' ?> />Abandonment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_SABC" value="Substance abuse by child" <?php echo ($dataOUT['FS_M2']=='Substance abuse by child')?'checked':'' ?> />Substance abuse by child </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_SA"  value="Sexual abuse" <?php echo ($dataOUT['FS_M2']=='Sexual abuse')?'checked':'' ?> />Sexual abuse </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_MPHOP" value="Mental/physical health of parent" <?php echo ($dataOUT['FS_M2']=='Mental/physical health of parent')?'checked':'' ?> />Mental/physical health of parent </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_DVICH" value="Domestic violence in child's home" <?php echo ($dataOUT['FS_M2']=='Domestic violence in child\'s home')?'checked':'' ?> />Domestic violence in child's home </label>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_EM" value="Emotional maltreatment" <?php echo ($dataOUT['FS_M2']=='Emotional maltreatment')?'checked':'' ?> />Emotional maltreatment </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_MPHCOP" value="Mental/physical health of child" <?php echo ($dataOUT['FS_M2']=='Mental/physical health of child')?'checked':'' ?> />Mental/physical health of child </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_CIJJS" value="Child in juvenile justice system" <?php echo ($dataOUT['FS_M2']=='Child in juvenile justice system')?'checked':'' ?> />Child in juvenile justice system</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_N" value="Neglect (not including medical neglect)" <?php echo ($dataOUT['FS_M2']=='Neglect (not including medical neglect)')?'checked':'' ?> />Neglect (not including medical neglect)</label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_SABP" value="Substance abuse by parent(s)" <?php echo ($dataOUT['FS_M2']=='Substance abuse by parent(s)')?'checked':'' ?> />Substance abuse by parent(s) </label>
                    		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_O" value="Other (specify)" <?php echo ($dataOUT['FS_M2']=='Other (specify)')?'checked':'' ?> />Other (specify)</label>
                    		</td>
                     	</tr>
                     	<tr>
                     		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_MN" value="Medical neglect" <?php echo ($dataOUT['FS_M2']=='Medical neglect')?'checked':'' ?> />Medical neglect</label>		</td>
                    		<td>
                    <label><input name="FS_M2" type="radio" id="FS_M_CB" value="Child's behavior" <?php echo ($dataOUT['FS_M2']=='Child\'s behavior')?'checked':'' ?> />Child's behavior </label>
                    		</td>
                    	</tr>

                	</table>
               
            </div>
		</div> <!-- end of question M section-->
                
	</div><!-- end of whole accordion -->
           <!--
            <div style="text-align: center;margin-top: 10px; font-size: 14pt; font-weight: bold;">
                Name your file: <input type="text" name="O1_file_name" pattern="^F[CP]+[A-Za-z0-9_]{1,30}$" title="File name must start with FP or FC and followed by letters, numbers, or underscores, maximum lengh: 30 characters" required>
            </div>
          
            <input type="submit" value="Submit" id="FS_SUBMIT" class="uniformBtn" style="display: block;margin: auto; margin-top: 20px; font-size: 16pt;" />     
         </form>
            -->
         <div id="successFS" style="display: block; margin: auto; text-align:center;"></div>
        </div> <!--  END OF TAB 1 -->
                
                <div id="tabs-2">
                    <header style="text-align: center;">
			<h2>SECTION I: SAFETY</h2>
			<h3>SAFETY OUTCOME 1: CHILDREN ARE, FIRST AND FOREMOST, PROTECTED FROM ABUSE AND NEGLECT.</h3>
                    </header>
                     <div id="accordionT2">
                               
            <h3>Item 1: Timelines of Initiating Investigations of Reports of Child Maltreatment</h3>
		<!--  <div id="accordion1_1"> -->
                <div>
                    
			<h3>Step 1: Purpose of Assessment</h3>
                            <div>
				<p>To determine whether responses to all accepted child maltreatment reports received during the period under review were initiated, and face-to-face contact with the child made, within the time frames established by agency policies or state statutes.
				</p>
                            </div>

                            <h3>Step 2: Item 1 Applicable Cases</h3>
                            <div>
				<ul>
                                    <li>Cases are applicable for an assessment of this item if an accepted child maltreatment report on any child in the family was received during the period under review. "Accepted" means that the report was assigned to the agency to conduct an assessment or investigation. This includes reports assigned for an "alternative response" assessment. Reports that are screened out are not considered "accepted." "Alternative response" refers to an agency's approach to addressing child maltreatment reports that meet agency criteria for acceptance but at the initial screening do not meet the agency's requirements for a mandated investigation. For example, the agency's policy may be that reports that appear to present low to moderate risk to the child may be referred for a family assessment, rather than an investigation. Under such a response, no determination of child maltreatment is made. The alternative response may include an assessment to determine the safety of the children, the risk of maltreatment, and the family's strengths and needs. The assessment may lead the state agency to provide services to eliminate or lessen the safety concerns and maltreatment risks.
                                    </li>
                                    <li>Cases are Not Applicable for an assessment of this item if, during the period under review, there were no child maltreatment reports on any child in the family, or if a report was received on a child in the family but it was "screened out"; that is, not referred for an assessment or investigation.
                                    </li>
                                </ul>

				<h4>Is this case applicable?</h4>
				<p>Select the appropriate response below. <b>If the response is "No," complete question A, then rate the case as Not Applicable in the ratings section and continue to item 2. </b></p>
				      
                                      <input type="radio" id="O1_I1_AC_Y" name="O1_I1_AC" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['O1_I1_AC']=='Yes')?'checked':'' ?> ><label for="O1_I1_AC_Y" style="margin-right: 100px;">Yes</label>
                                      <input type="radio" id="O1_I1_AC_N" name="O1_I1_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['O1_I1_AC']=='No')?'checked':'' ?>><label for="O1_I1_AC_N" style="margin-right: 100px;">No</label>

				  </div>

                         <script> /*  
                             $(function(){
                          //  $('input[name=O1_I1_AC]').click(function(){
                                if($('#O1_I1_AC_N').is(':checked')){
                                     $("#O1_I1_B").prop("disabled", true);
                                     $('input[name=O1_I1_C]').prop("disabled", true);
                                     $("#O1_I1_C_EX").prop("disabled", true);
                                     $("#O1_I1_R_NA").prop("checked", true);
                                    
                                }
                                /*
                                 $('#O1_I1_AC_N').click(function(){
                                      alert("Item 1 rating should be : " + $("input[name='O1_I1_R']:checked").val());
                                 });
                                */ /*
                                $('#O1_I1_AC_Y').click(function(){    
                                      $("#O1_I1_B").prop("disabled", false);
                                     $('input[name=O1_I1_C]').prop("disabled",false);
                                   //  $("input[name=O1_I1_C]").checkboxradio('enable');
                                     $("#O1_I1_C_EX").prop("disabled", false);
                                      $("#O1_I1_R_NA").prop("checked", false);
                                }); 
                         
                            
                         });
                        */    
                        </script>    
                            
                           
                            
          <h3>Step3: Questions </h3>
				      <h3 id="table1">A1. Reports Table</h3>
				      <h3>Table A1 Instructions: </h3>
				      <ul>
					   <li>Complete the following table for all accepted reports received during the period under review.
</li>
					    <li>If the state has policies outlining different priority levels for reports, indicate the priority level that was assigned.
</li>
					    <li>Indicate whether the report was assigned for an investigation or referred for an assessment.
</li>
					    <li>The date assigned for an investigation or assessment is the date the report is assigned to a specific worker to conduct the investigation or assessment.
</li>
                                            <li>The date the investigation or assessment was initiated is the date on which the agency made the first attempt to contact the family.
</li>
					    <li>In the last column, report the disposition of the case. If the case was investigated, indicate whether the report was "Substantiated" or "Not Substantiated" (this may be documented in the record as "founded" or "unfounded," or "indicated" or "not indicated"). If the investigation has not been completed as of the time of review, indicate "Investigation Pending." If the case was referred for an assessment, indicate whether it was "opened for services" or "not opened for services." If the assessment has not yet been completed, indicate "assessment still pending."
</li>
				      </ul>
<!--
              <p><b>Is table too large to fit in the screen? Click on any empty space outside the table and use right arrow key &rarr; to scroll to the right; use left arrow key &larr; to scroll back to the left.</b></p>
-->              		
              <div style="width: 80%x; overflow: scroll;">
                                    
				      <table border="2"  name="O1_I1_A1">
					       <caption>Reports Table</caption>
					       <tr>
						      <th style="width: 60px;">Report Date</th>
						      <th>First Name of Child</th>
						      <th>Allegation</th>
						      <th>Priority Level (if applicable) </th>
						      <th style="width: 60px;">Assessment or Investigation</th>
						      <th>Date Assigned for an Investigation or Assessment </th>
						      <th>Date Investigation or Assessment Initiated</th>
						      <th>Date of Face-to-Face Contact With Child</th>
						      <th>Relationship of Alleged Perpetrator to Child </th>
						      <th>Disposition </th>
					     </tr>
					     <tr>
						      <td>
                                                          <input type="text" class="datepicker" name="O1_I1_A1_R0_C0" id="O1_I1_A1_R0_C0" value=" <?php $O1_I1_A1_R0_C0 = isset($_POST['O1_I1_A1_R0_C0'])?$_POST['O1_I1_A1_R0_C0'] : $dataOUT['O1_I1_A1_R0_C0']; echo $O1_I1_A1_R0_C0 ; ?> "/>
                                                      </td>
						      <td><input name="O1_I1_A1_R0_C1" type="text"  value=" <?php $O1_I1_A1_R0_C1 = isset($_POST['O1_I1_A1_R0_C1'])?$_POST['O1_I1_A1_R0_C1'] : $dataOUT['O1_I1_A1_R0_C1']; echo $O1_I1_A1_R0_C1 ; ?> "></td>
						      <td><input name="O1_I1_A1_R0_C2" type="text" value=" <?php $O1_I1_A1_R0_C2 = isset($_POST['O1_I1_A1_R0_C2'])?$_POST['O1_I1_A1_R0_C2'] : $dataOUT['O1_I1_A1_R0_C2']; echo $O1_I1_A1_R0_C2 ; ?> "></td>
						      <td><input name="O1_I1_A1_R0_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R0_C3 = isset($_POST['O1_I1_A1_R0_C3'])?$_POST['O1_I1_A1_R0_C3'] : $dataOUT['O1_I1_A1_R0_C3']; echo $O1_I1_A1_R0_C3 ; ?> "></td>
						      <td>
                                                          <select id="O1_I1_A1_R0_C4" name="O1_I1_A1_R0_C4" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R0_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R0_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R0_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                   
                                                           </select>
                                                      </td>
						      <td>
                                                          <input type="text" class="datepicker" name="O1_I1_A1_R0_C5" id="O1_I1_A1_R0_C5" value=" <?php $O1_I1_A1_R0_C5 = isset($_POST['O1_I1_A1_R0_C5'])?$_POST['O1_I1_A1_R0_C5'] : $dataOUT['O1_I1_A1_R0_C5']; echo $O1_I1_A1_R0_C5 ; ?> "/>
                                                      </td>
						      <td>
                                                          <input type="text" class="datepicker" name="O1_I1_A1_R0_C6" id="O1_I1_A1_R0_C6" value=" <?php $O1_I1_A1_R0_C6 = isset($_POST['O1_I1_A1_R0_C6'])?$_POST['O1_I1_A1_R0_C6'] : $dataOUT['O1_I1_A1_R0_C6']; echo $O1_I1_A1_R0_C6 ; ?> "/>
                                                      </td>
						      <td>
                                                          <input type="text" class="datepicker" name="O1_I1_A1_R0_C7" id="O1_I1_A1_R0_C7" value=" <?php $O1_I1_A1_R0_C7 = isset($_POST['O1_I1_A1_R0_C7'])?$_POST['O1_I1_A1_R0_C7'] : $dataOUT['O1_I1_A1_R0_C7']; echo $O1_I1_A1_R0_C7 ; ?> "/>
                                                      </td>
						      <td><input name="O1_I1_A1_R0_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R0_C8 = isset($_POST['O1_I1_A1_R0_C8'])?$_POST['O1_I1_A1_R0_C8'] : $dataOUT['O1_I1_A1_R0_C8']; echo $O1_I1_A1_R0_C8 ; ?> "></td>
						      <td>
                                                          <select id="O1_I1_A1_R0_C9" name="O1_I1_A1_R0_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R0_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                           </select>
                                                      </td>
					     </tr>
					     <tr>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R1_C0" id="O1_I1_A1_R1_C0" value=" <?php $O1_I1_A1_R1_C0 = isset($_POST['O1_I1_A1_R1_C0'])?$_POST['O1_I1_A1_R1_C0'] : $dataOUT['O1_I1_A1_R1_C0']; echo $O1_I1_A1_R1_C0 ; ?> "/>
                                                </td>
						<td><input name="O1_I1_A1_R1_C1" type="text" value=" <?php $O1_I1_A1_R1_C1 = isset($_POST['O1_I1_A1_R1_C1'])?$_POST['O1_I1_A1_R1_C1'] : $dataOUT['O1_I1_A1_R1_C1']; echo $O1_I1_A1_R1_C1 ; ?> "></td>
						<td><input name="O1_I1_A1_R1_C2" type="text" value=" <?php $O1_I1_A1_R1_C2 = isset($_POST['O1_I1_A1_R1_C2'])?$_POST['O1_I1_A1_R1_C2'] : $dataOUT['O1_I1_A1_R1_C2']; echo $O1_I1_A1_R1_C2 ; ?> "></td>
						<td><input name="O1_I1_A1_R1_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R1_C3 = isset($_POST['O1_I1_A1_R1_C3'])?$_POST['O1_I1_A1_R1_C3'] : $dataOUT['O1_I1_A1_R1_C3']; echo $O1_I1_A1_R1_C3 ; ?> "></td>
						<td>
                                                    <select id="O1_I1_A1_R1_C4" name="O1_I1_A1_R1_C4" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R1_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R1_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R1_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                   
                                                    </select>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R1_C5" id="O1_I1_A1_R1_C5" value=" <?php $O1_I1_A1_R1_C5 = isset($_POST['O1_I1_A1_R1_C5'])?$_POST['O1_I1_A1_R1_C5'] : $dataOUT['O1_I1_A1_R1_C5']; echo $O1_I1_A1_R1_C5 ; ?> "/>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R1_C6" id="O1_I1_A1_R1_C6" value=" <?php $O1_I1_A1_R1_C6 = isset($_POST['O1_I1_A1_R1_C6'])?$_POST['O1_I1_A1_R1_C6'] : $dataOUT['O1_I1_A1_R1_C6']; echo $O1_I1_A1_R1_C6 ; ?> "/>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R1_C7" id="O1_I1_A1_R1_C7" value=" <?php $O1_I1_A1_R1_C7 = isset($_POST['O1_I1_A1_R1_C7'])?$_POST['O1_I1_A1_R1_C7'] : $dataOUT['O1_I1_A1_R1_C7']; echo $O1_I1_A1_R1_C7 ; ?> "/>
                                                </td>
						<td><input name="O1_I1_A1_R1_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R1_C8 = isset($_POST['O1_I1_A1_R1_C8'])?$_POST['O1_I1_A1_R1_C8'] : $dataOUT['O1_I1_A1_R1_C8']; echo $O1_I1_A1_R1_C8 ; ?> "></td>
						<td>
                                                    <select id="O1_I1_A1_R1_C9" name="O1_I1_A1_R1_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R1_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                    </select>
                                                </td>
					</tr>
					<tr>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R2_C0" id="O1_I1_A1_R2_C0" value=" <?php $O1_I1_A1_R2_C0 = isset($_POST['O1_I1_A1_R2_C0'])?$_POST['O1_I1_A1_R2_C0'] : $dataOUT['O1_I1_A1_R2_C0']; echo $O1_I1_A1_R2_C0 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R2_C1" type="text" value=" <?php $O1_I1_A1_R2_C1 = isset($_POST['O1_I1_A1_R2_C1'])?$_POST['O1_I1_A1_R2_C1'] : $dataOUT['O1_I1_A1_R2_C1']; echo $O1_I1_A1_R2_C1 ; ?> " ></td>
						<td><input name="O1_I1_A1_R2_C2" type="text" value=" <?php $O1_I1_A1_R2_C2 = isset($_POST['O1_I1_A1_R2_C2'])?$_POST['O1_I1_A1_R2_C2'] : $dataOUT['O1_I1_A1_R2_C2']; echo $O1_I1_A1_R2_C2 ; ?> " ></td>
						<td><input name="O1_I1_A1_R2_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R2_C3 = isset($_POST['O1_I1_A1_R2_C3'])?$_POST['O1_I1_A1_R2_C3'] : $dataOUT['O1_I1_A1_R2_C3']; echo $O1_I1_A1_R2_C3 ; ?> " ></td>
						<td>
                                                    <select id="O1_I1_A1_R2_C4" name="O1_I1_A1_R2_C4" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R2_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R2_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R2_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                 
                                                    </select>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R2_C5" id="O1_I1_A1_R2_C5" value=" <?php $O1_I1_A1_R2_C5 = isset($_POST['O1_I1_A1_R2_C5'])?$_POST['O1_I1_A1_R2_C5'] : $dataOUT['O1_I1_A1_R2_C5']; echo $O1_I1_A1_R2_C5 ; ?> " />
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R2_C6" id="O1_I1_A1_R2_C6" value=" <?php $O1_I1_A1_R2_C6 = isset($_POST['O1_I1_A1_R2_C6'])?$_POST['O1_I1_A1_R2_C6'] : $dataOUT['O1_I1_A1_R2_C6']; echo $O1_I1_A1_R2_C6 ; ?> " />
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R2_C7" id="O1_I1_A1_R2_C7" value=" <?php $O1_I1_A1_R2_C7 = isset($_POST['O1_I1_A1_R2_C7'])?$_POST['O1_I1_A1_R2_C7'] : $dataOUT['O1_I1_A1_R2_C7']; echo $O1_I1_A1_R2_C7 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R2_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R2_C8 = isset($_POST['O1_I1_A1_R2_C8'])?$_POST['O1_I1_A1_R2_C8'] : $dataOUT['O1_I1_A1_R2_C8']; echo $O1_I1_A1_R2_C8 ; ?> " ></td>
						<td>
                                                    <select id="O1_I1_A1_R2_C9" name="O1_I1_A1_R2_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R2_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                    </select>
                                                </td>
					</tr>
					<tr>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R3_C0" id="O1_I1_A1_R3_C0" value=" <?php $O1_I1_A1_R3_C0 = isset($_POST['O1_I1_A1_R3_C0'])?$_POST['O1_I1_A1_R3_C0'] : $dataOUT['O1_I1_A1_R3_C0']; echo $O1_I1_A1_R3_C0 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R3_C1" type="text" value=" <?php $O1_I1_A1_R3_C1 = isset($_POST['O1_I1_A1_R3_C1'])?$_POST['O1_I1_A1_R3_C1'] : $dataOUT['O1_I1_A1_R3_C1']; echo $O1_I1_A1_R3_C1 ; ?> " ></td>
						<td><input name="O1_I1_A1_R3_C2" type="text" value=" <?php $O1_I1_A1_R3_C2 = isset($_POST['O1_I1_A1_R3_C2'])?$_POST['O1_I1_A1_R3_C2'] : $dataOUT['O1_I1_A1_R3_C2']; echo $O1_I1_A1_R3_C2 ; ?> " ></td>
						<td><input name="O1_I1_A1_R3_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R3_C3 = isset($_POST['O1_I1_A1_R3_C3'])?$_POST['O1_I1_A1_R3_C3'] : $dataOUT['O1_I1_A1_R3_C3']; echo $O1_I1_A1_R3_C3 ; ?> " ></td>
						<td>
                                                    <select id="O1_I1_A1_R3_C4" name="O1_I1_A1_R3_C4" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R3_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R3_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R3_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                 
                                                    </select>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R3_C5" id="O1_I1_A1_R3_C5" value=" <?php $O1_I1_A1_R3_C5 = isset($_POST['O1_I1_A1_R3_C5'])?$_POST['O1_I1_A1_R3_C5'] : $dataOUT['O1_I1_A1_R3_C5']; echo $O1_I1_A1_R3_C5 ; ?> " />
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R3_C6" id="O1_I1_A1_R3_C6" value=" <?php $O1_I1_A1_R3_C6 = isset($_POST['O1_I1_A1_R3_C6'])?$_POST['O1_I1_A1_R3_C6'] : $dataOUT['O1_I1_A1_R3_C6']; echo $O1_I1_A1_R3_C6 ; ?> " />
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R3_C7" id="O1_I1_A1_R3_C7" value=" <?php $O1_I1_A1_R3_C7 = isset($_POST['O1_I1_A1_R3_C7'])?$_POST['O1_I1_A1_R3_C7'] : $dataOUT['O1_I1_A1_R3_C7']; echo $O1_I1_A1_R3_C7 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R3_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R3_C8 = isset($_POST['O1_I1_A1_R3_C8'])?$_POST['O1_I1_A1_R3_C8'] : $dataOUT['O1_I1_A1_R3_C8']; echo $O1_I1_A1_R3_C8 ; ?> " ></td>
						<td>
                                                    <select id="O1_I1_A1_R3_C9" name="O1_I1_A1_R3_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R3_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                    </select>
                                                </td>
					</tr>
					<tr>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R4_C0" id="O1_I1_A1_R4_C0" value=" <?php $O1_I1_A1_R4_C0 = isset($_POST['O1_I1_A1_R4_C0'])?$_POST['O1_I1_A1_R4_C0'] : $dataOUT['O1_I1_A1_R4_C0']; echo $O1_I1_A1_R4_C0 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R4_C1" type="text" value=" <?php $O1_I1_A1_R4_C1 = isset($_POST['O1_I1_A1_R4_C1'])?$_POST['O1_I1_A1_R4_C1'] : $dataOUT['O1_I1_A1_R4_C1']; echo $O1_I1_A1_R4_C1 ; ?> " ></td>
						<td><input name="O1_I1_A1_R4_C2" type="text" value=" <?php $O1_I1_A1_R4_C2 = isset($_POST['O1_I1_A1_R4_C2'])?$_POST['O1_I1_A1_R4_C2'] : $dataOUT['O1_I1_A1_R4_C2']; echo $O1_I1_A1_R4_C2 ; ?> " ></td>
						<td><input name="O1_I1_A1_R4_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R4_C3 = isset($_POST['O1_I1_A1_R4_C3'])?$_POST['O1_I1_A1_R4_C3'] : $dataOUT['O1_I1_A1_R4_C3']; echo $O1_I1_A1_R4_C3 ; ?> " ></td>
						<td>
                                                    <select id="O1_I1_A1_R4_C4" name="O1_I1_A1_R4_C4" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R4_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R4_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R4_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                     
                                                    </select>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R4_C5" id="O1_I1_A1_R4_C5" value=" <?php $O1_I1_A1_R4_C5 = isset($_POST['O1_I1_A1_R4_C5'])?$_POST['O1_I1_A1_R4_C5'] : $dataOUT['O1_I1_A1_R4_C5']; echo $O1_I1_A1_R4_C5 ; ?> " />
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R4_C6" id="O1_I1_A1_R4_C6" value=" <?php $O1_I1_A1_R4_C6 = isset($_POST['O1_I1_A1_R4_C6'])?$_POST['O1_I1_A1_R4_C6'] : $dataOUT['O1_I1_A1_R4_C6']; echo $O1_I1_A1_R4_C6 ; ?> " />
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R4_C7" id="O1_I1_A1_R4_C7" value=" <?php $O1_I1_A1_R4_C7 = isset($_POST['O1_I1_A1_R4_C7'])?$_POST['O1_I1_A1_R4_C7'] : $dataOUT['O1_I1_A1_R4_C7']; echo $O1_I1_A1_R4_C7 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R4_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R4_C8 = isset($_POST['O1_I1_A1_R4_C8'])?$_POST['O1_I1_A1_R4_C8'] : $dataOUT['O1_I1_A1_R4_C8']; echo $O1_I1_A1_R4_C8 ; ?> " ></td>
						<td>
                                                    <select id="O1_I1_A1_R4_C9" name="O1_I1_A1_R4_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R4_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                     </select>
                                                </td>
					</tr>
					<tr>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R5_C0" id="O1_I1_A1_R5_C0" value=" <?php $O1_I1_A1_R5_C0 = isset($_POST['O1_I1_A1_R5_C0'])?$_POST['O1_I1_A1_R5_C0'] : $dataOUT['O1_I1_A1_R5_C0']; echo $O1_I1_A1_R5_C0 ; ?> " />
                                                </td>
						<td><input name="O1_I1_A1_R5_C1" type="text" value=" <?php $O1_I1_A1_R5_C1 = isset($_POST['O1_I1_A1_R5_C1'])?$_POST['O1_I1_A1_R5_C1'] : $dataOUT['O1_I1_A1_R5_C1']; echo $O1_I1_A1_R5_C1 ; ?> "></td>
						<td><input name="O1_I1_A1_R5_C2" type="text" value=" <?php $O1_I1_A1_R5_C2 = isset($_POST['O1_I1_A1_R5_C2'])?$_POST['O1_I1_A1_R5_C2'] : $dataOUT['O1_I1_A1_R5_C2']; echo $O1_I1_A1_R5_C2 ; ?> "></td>
						<td><input name="O1_I1_A1_R5_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R5_C3 = isset($_POST['O1_I1_A1_R5_C3'])?$_POST['O1_I1_A1_R5_C3'] : $dataOUT['O1_I1_A1_R5_C3']; echo $O1_I1_A1_R5_C3 ; ?> "></td>
						<td>
                                                    <select id="O1_I1_A1_R5_C4" name="O1_I1_A1_R5_C4" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R5_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R5_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R5_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                       
                                                    </select>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R5_C5" id="O1_I1_A1_R5_C5" value=" <?php $O1_I1_A1_R5_C5 = isset($_POST['O1_I1_A1_R5_C5'])?$_POST['O1_I1_A1_R5_C5'] : $dataOUT['O1_I1_A1_R5_C5']; echo $O1_I1_A1_R5_C5 ; ?> "/>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R5_C6" id="O1_I1_A1_R5_C6" value=" <?php $O1_I1_A1_R5_C6 = isset($_POST['O1_I1_A1_R5_C6'])?$_POST['O1_I1_A1_R5_C6'] : $dataOUT['O1_I1_A1_R5_C6']; echo $O1_I1_A1_R5_C6 ; ?> "/>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R5_C7" id="O1_I1_A1_R5_C7" value=" <?php $O1_I1_A1_R5_C7 = isset($_POST['O1_I1_A1_R5_C7'])?$_POST['O1_I1_A1_R5_C7'] : $dataOUT['O1_I1_A1_R5_C7']; echo $O1_I1_A1_R5_C7 ; ?> "/>
                                                </td>
						<td><input name="O1_I1_A1_R5_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R5_C8 = isset($_POST['O1_I1_A1_R5_C8'])?$_POST['O1_I1_A1_R5_C8'] : $dataOUT['O1_I1_A1_R5_C8']; echo $O1_I1_A1_R5_C8 ; ?> "></td>
						<td>
                                                    <select id="O1_I1_A1_R5_C9" name="O1_I1_A1_R5_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R5_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                     </select>
                                                </td>
					</tr>
					<tr>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R6_C0" id="O1_I1_A1_R6_C0" value=" <?php $O1_I1_A1_R6_C0 = isset($_POST['O1_I1_A1_R6_C0'])?$_POST['O1_I1_A1_R6_C0'] : $dataOUT['O1_I1_A1_R6_C0']; echo $O1_I1_A1_R6_C0 ; ?> "/>
                                                </td>
						<td><input name="O1_I1_A1_R6_C1" type="text" value=" <?php $O1_I1_A1_R6_C1 = isset($_POST['O1_I1_A1_R6_C1'])?$_POST['O1_I1_A1_R6_C1'] : $dataOUT['O1_I1_A1_R6_C1']; echo $O1_I1_A1_R6_C1 ; ?> "></td>
						<td><input name="O1_I1_A1_R6_C2" type="text" value=" <?php $O1_I1_A1_R6_C2 = isset($_POST['O1_I1_A1_R6_C2'])?$_POST['O1_I1_A1_R6_C2'] : $dataOUT['O1_I1_A1_R6_C2']; echo $O1_I1_A1_R6_C2 ; ?> "></td>
						<td><input name="O1_I1_A1_R6_C3" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R6_C3 = isset($_POST['O1_I1_A1_R6_C3'])?$_POST['O1_I1_A1_R6_C3'] : $dataOUT['O1_I1_A1_R6_C3']; echo $O1_I1_A1_R6_C3 ; ?> "></td>
						<td>
                                                    <select id="O1_I1_A1_R6_C4" name="O1_I1_A1_R6_C4" style="width:100%;" value=" <?php $O1_I1_A1_R6_C4 = isset($_POST['O1_I1_A1_R6_C4'])?$_POST['O1_I1_A1_R6_C4'] : $dataOUT['O1_I1_A1_R6_C4']; echo $O1_I1_A1_R6_C4 ; ?> ">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R6_C4'] == "" ? "selected" : ""); ?>></option>
                                                                <option value="Assessment" <?php echo ($dataOUT['O1_I1_A1_R6_C4'] == "Assessment" ? "selected" : ""); ?>>Assessment</option>
                                                                <option value="Investigation" <?php echo ($dataOUT['O1_I1_A1_R6_C4'] == "Investigation" ? "selected" : ""); ?>>Investigation</option>                           
                                                    </select>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R6_C5" id="O1_I1_A1_R6_C5" value=" <?php $O1_I1_A1_R6_C5 = isset($_POST['O1_I1_A1_R6_C5'])?$_POST['O1_I1_A1_R6_C5'] : $dataOUT['O1_I1_A1_R6_C5']; echo $O1_I1_A1_R6_C5 ; ?> "/>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R6_C6" id="O1_I1_A1_R6_C6" value=" <?php $O1_I1_A1_R6_C6 = isset($_POST['O1_I1_A1_R6_C6'])?$_POST['O1_I1_A1_R6_C6'] : $dataOUT['O1_I1_A1_R6_C6']; echo $O1_I1_A1_R6_C6 ; ?> "/>
                                                </td>
						<td>
                                                    <input type="text" class="datepicker" name="O1_I1_A1_R6_C7" id="O1_I1_A1_R6_C7" value=" <?php $O1_I1_A1_R6_C7 = isset($_POST['O1_I1_A1_R6_C7'])?$_POST['O1_I1_A1_R6_C7'] : $dataOUT['O1_I1_A1_R6_C7']; echo $O1_I1_A1_R6_C7 ; ?> "/>
                                                </td>
						<td><input name="O1_I1_A1_R6_C8" type="text" style="width:97%;" value=" <?php $O1_I1_A1_R6_C8 = isset($_POST['O1_I1_A1_R6_C8'])?$_POST['O1_I1_A1_R6_C8'] : $dataOUT['O1_I1_A1_R6_C8']; echo $O1_I1_A1_R6_C8 ; ?> "></td>
						<td>
                                                    <select id="O1_I1_A1_R6_C9" name="O1_I1_A1_R6_C9" style="width:100%;">                   
                                                                <option value="" <?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "" ? "selected" : ""); ?> ></option>
                                                                <option value="Substantiated"<?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "Substantiated" ? "selected" : ""); ?> >Substantiated</option>
                                                                <option value="Not Substantiated" <?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "Not Substantiated" ? "selected" : ""); ?>>Not Substantiated</option> 
                                                                <option value="Investigation Pending" <?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "Investigation Pending" ? "selected" : ""); ?>>Investigation Pending</option>
                                                                <option value="Opened for services" <?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "Opened for services" ? "selected" : ""); ?>>Opened for services</option>
                                                                <option value="Not opened for services" <?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "Not opened for services" ? "selected" : ""); ?>>Not opened for services</option>
                                                                <option value="Assessment still pending" <?php echo ($dataOUT['O1_I1_A1_R6_C9'] == "Assessment still pending" ? "selected" : ""); ?>>Assessment still pending</option>
                                                      </select>
                                                </td>
					</tr>
				</table>
                        </div>        
				<p><b>A. </b>In how many of the reports listed in the table was the investigation or assessment NOT initiated in accordance with the state's time frames and requirements for a report of that priority?
				</p>
				<p>
					Enter the appropriate response:
				</p>
				<p class="answerStyle"><b>Answer to Question 1A:
          <input type="text" id="O1_I1_A1" name="O1_I1_A1"  class="textbox" pattern="^\s*$|([0-9\s*$]{1,4})" title="Only numbers allowed, maximum length: 4 digits" 
                 value=" <?php $O1_I1_A1 = isset($_POST['O1_I1_A1'])?trim($_POST['O1_I1_A1']) : trim($dataOUT['O1_I1_A1']); echo $O1_I1_A1 ; ?> " >
                                    </b>
				</p>                                  
                            <!--    
				<p>
					Did you choose "No" (case not applicable) in Step 2?
				</p>

            <input type="radio" id="O1_I1_A_Y"  class="uniformBtn" class="radio" value="outcome1SA"  name="O1_I1_A_AC" ><label for="O1_I1_A_Y" style="margin-right: 100px;">Yes</label>
            <input type="radio" id="O1_I1_A_N" class="uniformBtn" class="radio" value="outcome1NOTAch" name="O1_I1_A_AC"><label for="O1_I1_A_N" style="margin-right: 100px;">No</label>
                            -->

				<p><b>B. </b>In how many of the reports in the table was face-to-face contact with the child(ren) who is the subject of the report NOT made in accordance with the state's time frames and requirements for a report of that priority?
				</p>
				<p>
					Enter the appropriate response:
				</p>
				<p class="answerStyle"><b>Answer to Question 1B:
          <input type="text" id="O1_I1_B" name="O1_I1_B" class="textbox" pattern="^\s*$|([0-9\s*$]{1,4})" title="Only numbers allowed, maximum length: 4 digits" 
                 value=" <?php $O1_I1_B = isset($_POST['O1_I1_B'])?trim($_POST['O1_I1_B']) : trim($dataOUT['O1_I1_B']); echo $O1_I1_B ; ?> " ></b>
				</p>
                                <script>
                                     
                                </script>

				<p><b>C. </b>For all reports identified in A and B, were the reasons for the delays due to circumstances beyond the control of the agency?
				</p>
				<p id="Item1Comment1"><b>Question 1C Instructions:</b></p>
				<ul>
					<li>If the answers to both questions A and B are zero, the answer to question C should be Not Applicable.
					</li>
					<li>Delays in services provided by organizations or agencies under contract with the agency would not be considered to be beyond the control of the agency. However, where services are provided by another public state or local agency, such as law enforcement, the actions of these agencies may be beyond the control of the child welfare agency.
					</li>
				</ul>
				<p>
					Select the appropriate response:
				</p>
                                <div id="O1_I1_C">
				<p class="answerStyle">
					<b>Answer to Question 1C:</b>
      
            <input type="radio" id="O1_I1_C_Y" name="O1_I1_C" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['O1_I1_C']=='Yes')?'checked':'' ?>><label for="O1_I1_C_Y" style="margin-right: 100px;">Yes</label>
            <input type="radio" id="O1_I1_C_N" name="O1_I1_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['O1_I1_C']=='No')?'checked':'' ?>><label for="O1_I1_C_N" style="margin-right: 100px;">No</label>
            <input type="radio" id="O1_I1_C_NA" name="O1_I1_C" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['O1_I1_C']=='NA')?'checked':'' ?> ><label for="O1_I1_C_NA" style="margin-right: 100px;">NA</label>

				</p>
                             
                                </div>

<!-- BOOTSTRAP try ################################################################################################################  -->
<!--          Explain the reason for any delays related to reports identified in A and B in the narrative field below.
          <!--
          <a href="#Item1Comment1" rel="tooltip" title="The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize. "> <span style="font-size: 14pt;">Mouse over to see how to resize comment area</span></a>
        -->

        <!--
        
        
        <div id="dialog" title="Resizable Area">
          <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize.
          </p>
        </div>
        <button id="comment1" style="display:block; margin: auto; margin-top: 10px;">Click to see how to expand comment area below
        </button>

	-->			
	<textarea style="height:150px; width: 100%; margin-top: 10px;" name="O1_I1_C_EX" id="O1_I1_C_EX" class="explain" spellcheck="true">
            <?php $O1_I1_C_EX = isset($_POST['O1_I1_C_EX'])?$_POST['O1_I1_C_EX']:$dataOUT['O1_I1_C_EX']; echo $O1_I1_C_EX;?>
	</textarea>

	<p id="I1_Rating">
		<b>Item 1 Rating Criteria:</b>
	</p>

        <p>
          <b>Item 1 should be rated as Not Applicable if the response to the question of applicability is No.</b>
        </p>

				<p>
					<b>Item 1 should be rated as a Strength if either of the following applies: </b>
				</p>
				<ul>
					<li><b>The answers to A and B are zero. </b></li>
					<li><b>The answers to A or B are greater than zero, but the answer to C is Yes. </b> </li>
				</ul>

				<p>
					<b>Item 1 should be rated as an Area Needing Improvement if the following applies:</b>
				</p>
				<ul>
					<li><b>The answer to A or B is greater than zero, and the answer to C is No </b></li>
				</ul>

				<p>
					<b>Item 1 Rating (select one): </b> <input type="button" id="I1_BTN" name="I1_BTN" class="Btn"  value="Click to rate Item 1"> <div id="I1_BTN_MSG" style="color:red;"></div>
				</p>
        
            <input type="radio" id="O1_I1_R_S"  class="uniformBtn" class="radio" value="Strength"  name="O1_I1_R" <?php echo ($dataOUT['O1_I1_R']=='Strength')?'checked':'' ?>><label for="O1_I1_R_S" style="margin-right: 100px;">Strength</label>
            <input type="radio" id="O1_I1_R_ANI" class="uniformBtn" class="radio" value="Area Needing Improvement" name="O1_I1_R" <?php echo ($dataOUT['O1_I1_R']=='Area Needing Improvement')?'checked':'' ?>><label for="O1_I1_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
            <input type="radio" id="O1_I1_R_NA"  class="uniformBtn" class="radio" value="NA (Not Applicable)" name="O1_I1_R" <?php echo ($dataOUT['O1_I1_R']=='NA (Not Applicable)')?'checked':'' ?>><label for="O1_I1_R_NA" style="margin-right: 100px;">NA</label>
         

                  <div id="CHECK_O1_I1">
				<p id="Item1Comment2">
					<b>Sources of information that informed rating:</b>
				</p>
                                <div id="O1_I1_R_CHECKBOX"></div>
					<input type="checkbox" id="O1_I1_R_SRC_CF" value="case file"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_1']=='case file')?'checked':'' ?>>case file<br>
					<input type="checkbox" id="O1_I1_R_SRC_MI" value="mother interview"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_FI" value="father interview"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_FPI" value="foster parent interview"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_4']=='foster parent interview')?'checked':'' ?>>foster parent interview <br>
					<input type="checkbox" id="O1_I1_R_SRC_CI" value="child interview"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_CSI" value="caseworker/supervisor interview"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
					<input type="checkbox" id="O1_I1_R_SRC_OI" value="other interview"  name="O1_I1_R_SRC[]" class="checkbox" <?php echo ($dataOUT['O1_I1_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>


        
        <!-- ################################################################################################# BOOTSTRAP TRY-->

                  </div>
 <!--
          Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
          <!--
          <a href="#Item1Comment2" rel="tooltip" title="The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize. "> <span style="font-size: 14pt;">Mouse over to see how resize comment area</span></a>
        -->
        <!--
        <div id="dialog2" title="Resizable Area">
          <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize. </p>
        </div>
        <button id="comment2" style="display:block; margin: auto;">Click to see how to expand comment area below</button>
	-->			

        <br>
        <textarea style="height:150px; width: 100%; margin-top: 10px;" name="O1_I1_R_EXP" id="O1_I1_R_EX" class="explain" spellcheck="true">
            <?php $O1_I1_R_EXP = isset($_POST['O1_I1_R_EXP'])?$_POST['O1_I1_R_EXP']:$dataOUT['O1_I1_R_EXP']; echo $O1_I1_R_EXP;?>
	</textarea>
       <!-- <div style="text-align: center;margin-top: 10px; font-size: 14pt; font-weight: bold;">
            Name your file: <input type="text" name="O1_file_name" required>
        </div>
       -->

     
       
                <div id="successI1" style="display: block; margin: auto; text-align:center;"></div>
                  
        </div>          
                  
                  
                  <h3>RATING SAFETY OUTCOME 1 </h3>
                  
                        <div>
				<h3>Instructions</h3>
				<div id="Safety_O1">
					<p>What is the level of outcome achievement that best describes the extent to which this outcome is being or has been achieved, based on the rating for item 1?
					</p>
					<p>
						<b>
							Instructions:
						</b>
					</p>

					<p>Safety Outcome 1 should be rated as Substantially Achieved if the following applies:
					</p>
					<ul>
						<li>Item 1 is rated as a Strength. </li>
					</ul>

					<p>Safety Outcome 1 should be rated as Not Achieved if the following applies:
					</p>
					<ul>
						<li>Item 1 is rated as an Area Needing Improvement. </li>
					</ul>

					<p>Safety Outcome 1 should be rated as Not Applicable if the following applies:
					</p>
					<ul>
						<li>Item 1 is rated as Not Applicable </li>
					</ul>
          <!--

          <button id="outcome1help" style="display:block; margin: auto;" onclick="showItem1Rating();">Click to see item 1 rating you previously chose </button>
          -->

          <div id="outcome1helpDiag" title="Item 1 Rating">
<p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
<!--<button id="outcome1help1" style="display:block; margin: auto;">Click to see item 1 rating you previously chose.</button> -->

					<p>
						<b>Select the appropriate response:</b><input type="button" id="O1_BTN" name="O1_BTN" class="Btn"  value="Click to rate Outcome 1"> <div id="O1_BTN_MSG" style="color:red;"></div><br><br>
					</p>
                                        <!--
					<form method="post" id="O1_R">
                                        -->
						<input type="radio" id="O1_SA"  class="uniformBtn" class="radio" value="Substantially Achieved"  name="O1_R" <?php echo ($dataOUT['O1_R']=='Substantially Achieved')?'checked':'' ?>><label for="O1_SA" style="margin-right: 100px;">Substantially Achieved</label>
						<input type="radio" id="O1_NAC"  class="uniformBtn" class="radio" value="Not Achieved" name="O1_R" <?php echo ($dataOUT['O1_R']=='Not Achieved')?'checked':'' ?>><label for="O1_NAC" style="margin-right: 100px;">Not Achieved</label>
						<input type="radio" id="O1_NA" class="uniformBtn" class="radio" value="NA" name="O1_R" <?php echo ($dataOUT['O1_R']=='NA')?'checked':'' ?>><label for="O1_NA" style="margin-right: 100px;">NA</label>
                                           <!--     <input type="submit" value="Submit" id="O1_R_SUBMIT" class="uniformBtn" style="display: block;margin: auto; margin-top: 20px; font-size: 16pt;"/> -->
                                        <!--
                                        </form>
                                        -->
                                        <div id="successO1" style="display: block; margin: auto; text-align:center;"></div>
				</div>
                                
		</div> <!--  end of accordion 1_2 -->
            </div> <!-- end of accordionT2 -->
        </div> <!-- end of tab 2 -->
              
        
         <div id="tabs-3">
            <header style="text-align: center; ">
                <h2>SECTION I: SAFETY</h2>
                <h3>SAFETY OUTCOME 2: CHILDREN ARE SAFELY MAINTAINED IN THEIR HOMES WHENEVER POSSIBLE AND APPROPRIATE.</h3>
            </header>
             <div id="accordionT3">
<!-- ************************************************** ITEM 2    ****************************************************************************************** -->                      
               <h3>Item 2: Services to Family to Protect Child(ren) in the Home and Prevent Removal or Re-Entry Into Foster Care</h3>
               
    <div>

         <h3>Step 1: Purpose of Assessment</h3>
         <div>
        <p>To determine whether, during the period under review, the agency made concerted
            efforts to provide services to the family to prevent children's entry into foster care or re-entry after a
            reunification.
        </p>
      </div>

      <h3>Step 2: Item 2 Applicable Cases</h3>
      <div>
        <p><b>
          A case is applicable for an assessment of this item if it meets at least one of the following criteria:
        </b></p>
        <ul>
          <li>It is an in-home services case and the reviewer determines that there are concerns regarding the safety of at least one child in the family during the period under review.
          </li>
          <li>It is an in-home services case and services were provided for children at risk of foster care placement to remain safely in their homes.
          </li>
          <li>It is a foster care case and the child entered foster care during the period under review due to safety concerns.
          </li>
          <li>It is a foster care case, the child was reunified during the period under review or was returned home on a trial basis, and the reviewer determines that there are concerns regarding the safety of that child in the home.
          </li>
          <li>It is a foster care case, and although the target child entered foster care before the period under review and
                remained in care for the entire period under review, there are other children in the home and the reviewer determines that there are concerns regarding the safety of these children during the period under review.
          </li>
          </ul>

        <h4>Is this case applicable?</h4>

        <p>Select the appropriate response below.<b>If the response is "No," complete question A, then rate the case as Not Applicable in the ratings section and continue to item 3. </b></p>

            <input type="radio" id="O2_I2_AC_Y" name="O2_I2_AC" class="uniformBtn" class="radio" value="Yes"   <?php echo ($dataOUT['O2_I2_AC']=='Yes')?'checked':'' ?> ><label for="O2_I2_AC_Y" style=" margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_AC_N" name="O2_I2_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['O2_I2_AC']=='No')?'checked':'' ?>  ><label for="O2_I2_AC_N" style=" margin-right: 100px;">No</label>
      <!--
      </div>
      -->
      <h3>Step3: Questions </h3>
     <!-- <div> -->
    <!--   <form method="post" id="O2_I2_Q_F"> -->
        <p>
        <span style="font-size: 18pt;"><b>A. </b></span>For the period under review, did the agency make concerted efforts to provide or arrange for appropriate services for the family to protect children and prevent their entry into foster care or re-entry into foster care after a reunification? (Be sure to assess the entire period under review.)
        </p>

        <p><b>
          Question 2A Definitions:
        </b></p>

        <ul>
          <li>"Appropriate services"for purposes of item 2 are those that are provided to, or arranged for, the family withthe explicit goal of ensuring the child's safety. Some examples include: (1) if there are safety issues in thehome due to environmental hazards, homemaking services could be an appropriate safety-related service; (2) if there are safety concerns related to the parent's ability to manage specific child needs or childbehaviors, intensive in-home services could be an appropriate safety-related service; (3) child care services could be a safety-related service in cases where the child was being cared for in an unsafe setting or by an inappropriate caregiver; and (4) if there are safety concerns related to parental substance abuse, substance abuse treatment could be an appropriate safety-related service. If a child needs mental health services, education-related services, or services to address health issues, in most cases these would not be considered relevant to the child's safety if the child remained in the home. Efforts of the agency to meetthese service needs are assessed in other items. </li>

          <li>"Concerted efforts"for purposes of item 2 refers to the following activities: Working to engage families inneeded services, and facilitating a family's access to those services.</li>
        </ul>

          <p><b>
          Question 2A Instructions:
        </b></p>
        <ul>
          <li>In answering question A, focus only on whether the agency made concerted efforts to provide appropriate and relevant services to the family to address the safety issues in the family so that the child could remain in the home or would not re-enter foster care. Concerns about monitoring service participation and safety planning and assessment of progress made will be captured in item 3. </li>

          <li>If the agency removed the child from the home without making concerted efforts to provide services, the answer to question A should be No, even if the agency determined that it was necessary to remove the child for safety reasons. This issue will be addressed in question B. </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle"><b>Answer to Question 2A: </b>
        </p>

        <input type="radio" id="O2_I2_A_Y" name="O2_I2_A" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['O2_I2_A']=='Yes')?'checked':'' ?> ><label for="O2_I2_A_Y" style=" margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_A_N" name="O2_I2_A" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['O2_I2_A']=='No')?'checked':'' ?> ><label for="O2_I2_A_N" style=" margin-right: 100px;">No</label>

        <p>
          If no, explain any concerns in the narrative field below.
          <!--
        <div id="O2_I2_Diag" title="Resizable Area">
          <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize.
          </p>
        </div>
        
        <button id="O2_I2_Commt" style="display:block; margin: auto;">Click to see how to expand comment area below
        </button>
         -->

        <textarea style="height:150px; width: 100%;margin-top: 10px;" id="O2_I2_A_EXP" name="O2_I2_A_EXP" class="explain" spellcheck="true">
             <?php $O2_I2_A_EXP = isset($_POST['O2_I2_A_EXP'])?$_POST['O2_I2_A_EXP']:$dataOUT['O2_I2_A_EXP']; echo $O2_I2_A_EXP;?>
        </textarea>
    <!--
        <p>
          Did you choose "No" (case not applicable) in Step 2?
        </p>

        <input type="radio" id="O2_I2_JUMP_Y" name="O2_I2_JUMP" class="uniformBtn" class="radio" value="Yes"><label for="O2_I2_JUMP_Y" style="margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_JUMP_N" name="O2_I2_JUMP" class="uniformBtn" class="radio" value="No"><label for="O2_I2_JUMP_N" style=" margin-right: 100px;">No</label>
    -->

        <p>
          <span style="font-size: 18pt;"><b>B. </b></span> If, during the period under review, any child was removed from the home without providing or arranging for
          services, was this action necessary to ensure the childâ€™s safety?
        </p>

        <p><b>
          Question 2B Definitions:
        </b></p>

        <ul>
          <li>If the answer to question A is Yes, but, after making efforts to provide services, the child(ren) were removed from the home during the period under review due to safety concerns, the answer to question B should be Not Applicable.
          </li>

          <li>If the child was not removed from the home during the period under review, the answer to question B should be Not Applicable.
          </li>

          <li>In answering question A, focus only on whether the agency made concerted efforts to provide appropriate and relevant services to the family to address the safety issues in the family so that the child could remain in the home or would not re-enter foster care. Concerns about monitoring service participation and safety planning and assessment of progress made will be captured in item 3.
          </li>

          <li>Focus on whether the circumstances of the case suggest that services would not have been able to ensure the childâ€™s safety if the child remained in the home.  If the information indicates that it was necessary to remove the child to ensure the childâ€™s safety, the answer to question B should be Yes.  If the information indicates that services should have been provided to prevent removal but the child was removed without providing those services, this question should be answered No.
          </li>

          <li>  If services should have been offered to protect the child, but were not because those services were not available in the community, the answer to question B should be No.
          </li>
        </ul>

        <p>
          Select the appropriate response:
        </p>

        <p class="answerStyle">
          <b>Answer to Question 2B: </b>
        </p>

        <input type="radio" id="O2_I2_B_Y" name="O2_I2_B" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['O2_I2_B']=='Yes')?'checked':'' ?> ><label for="O2_I2_B_Y" style=" margin-right: 100px;">Yes</label>
        <input type="radio" id="O2_I2_B_N" name="O2_I2_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['O2_I2_B']=='No')?'checked':'' ?> ><label for="O2_I2_B_N" style=" margin-right: 100px;">No</label>
        <input type="radio" id="O2_I2_B_NA" name="O2_I2_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['O2_I2_B']=='NA')?'checked':'' ?> ><label for="O2_I2_B_NA" style="margin-right: 100px;">NA</label>

        <p>
          If no, explain any concerns in the narrative field below.
        </p>
        <textarea style="height:150px; width: 100%;" id="O2_I2_B_EXP" name="O2_I2_B_EXP" class="explain" spellcheck="true">
                        <?php $O2_I2_B_EXP = isset($_POST['O2_I2_B_EXP'])?$_POST['O2_I2_B_EXP']:$dataOUT['O2_I2_B_EXP']; echo $O2_I2_B_EXP;?>
        </textarea>
 <div id="I2">
        <p id="I2_Rating">
          <b>
          Item 2 Rating Criteria:
          </b>
        </p>

        <p>
          <b> This item should be rated as a Strength if either of the following applies:</b>
        </p>

        <ul>
          <li><b> The answer to question A is Yes, and the answer to question B is Not Applicable.</b>
          </li>

          <li><b> If the child was not removed from the home during the period under review, the answer to question B should be Not Applicable.</b>
          </li>
        </ul>

        <p>
          <b>
            This item should be rated as an Area Needing Improvement if either of the following applies:
          </b>
        </p>

        <ul>
          <li><b> The answer to question A is No, and the answer to question B is No.</b>
          </li>

          <li><b> The answer to question A is No, and the answer to question B is Not Applicable.</b>
          </li>
        </ul>

        <p>
          <b>
            Item 2 should be rated as Not Applicable if the response to the question of applicability is No.
          </b>
        </p>
    <div id="CHECK_O2_I2">
        <p class="answerStyle">
          <b>Item 2 Rating (select one): </b><input type="button" id="I2_BTN" name="I2_BTN" class="Btn"  value="Click to rate Item 2"> <div id="I2_BTN_MSG" style="color:red;"></div>
        </p>
        <br> 
        <input type="radio" id="O2_I2_R_S" name="O2_I2_R" class="uniformBtn" class="radio" value="Strength"   <?php echo ($dataOUT['O2_I2_R']=='Strength')?'checked':'' ?> ><label for="O2_I2_R_S" style=" margin-right: 100px;">Strength</label>
        <input type="radio" id="O2_I2_R_ANI" name="O2_I2_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['O2_I2_R']=='Area Needing Improvement')?'checked':'' ?>  ><label for="O2_I2_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
        <input type="radio" id="O2_I2_R_NA" name="O2_I2_R" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['O2_I2_R']=='NA (Not Applicable)')?'checked':'' ?> ><label for="O2_I2_R_NA" style="margin-right: 100px;">NA</label>

        <p>
          <b>
            Sources of information that informed rating:
          </b>
        </p>
        <div id="O2_I2_R_CHECKBOX"></div>
        <p>
          <input type="checkbox" id="O2_I2_R_SRC_CF" name="O2_I2_R_SRC[]" value="case file" <?php echo ($dataOUT['O2_I2_R_SRC_1']=='case file')?'checked':'' ?> >case file<br>

          <input type="checkbox" id="O2_I2_R_SRC_MI" name="O2_I2_R_SRC[]" value="mother interview" <?php echo ($dataOUT['O2_I2_R_SRC_2']=='mother interview')?'checked':'' ?> >mother interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_FI" name="O2_I2_R_SRC[]" value="father interview" <?php echo ($dataOUT['O2_I2_R_SRC_3']=='father interview')?'checked':'' ?> >father interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_FPI" name="O2_I2_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['O2_I2_R_SRC_4']=='foster parent interview')?'checked':'' ?> >foster parent interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_CI" name="O2_I2_R_SRC[]" value="child interview" <?php echo ($dataOUT['O2_I2_R_SRC_5']=='child interview')?'checked':'' ?> >child interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_CWI" name="O2_I2_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['O2_I2_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?> >caseworker/supervisor interview<br>

          <input type="checkbox" id="O2_I2_R_SRC_OI" name="O2_I2_R_SRC[]" value="other interview" <?php echo ($dataOUT['O2_I2_R_SRC_7']=='other interview')?'checked':'' ?> >other interview<br>
        </p>
      </div>
        <p>
          Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
        </p>

        <textarea style="height:150px; width: 100%;" name="O2_I2_R_EXP" id="O2_I2_R_EXP" class="explain" spellcheck="true">
            <?php $O2_I2_R_EXP = isset($_POST['O2_I2_R_EXP'])?$_POST['O2_I2_R_EXP']:$dataOUT['O2_I2_R_EXP']; echo $O2_I2_R_EXP;?>
        </textarea>

    
        <div id="success" style="display: block; margin: auto; text-align:center;"></div>
      </div>
      </div>
    </div> <!-- end of accordion I2 -->
                 
<!-- ************************************************** ITEM 3    ****************************************************************************************** -->                 
                <h3>Item 3: Risk and Safety Assessment and Management</h3>
                <!-- <div id="accordionI3"> -->
                <div>
                    <h3>Step 1: Purpose of Assessment</h3>
                    <div>
                        <p> To determine whether, during the period under review, the agency made concerted efforts to assess and address the risk and safety concerns relating to the child(ren) in their own homes or while in foster care.
                        </p>
                    </div>

                <h3>Step 2: Item 3 Applicable Cases</h3>
                <div>
                    <p>All cases are applicable for an assessment of this item.</p>
                </div>


                <h3>Step3: Questions</h3>
                <div>
                    <p>
                        <span style="font-size: 18pt;"><b>A1. </b></span>Did any of the following concerns exist  while the case was open for services?
                    </p>
                    <div id="O2_I3_A1_CHECKBOX">
                    <p>
                        <b>
                            Question 3A1 Instruction:
                        </b>
                        <br>
                        Select all that apply:<br><br>
                    </p>
                        <div id="O2_I3_A1_CHECKBOX_MSG"></div>
           
                        <input type="checkbox" id="O2_I3_A1_1" name="O2_I3_A1[]" <?php echo ($dataOUT['O2_I3_A1_SRC_1']=='There were maltreatment allegations on the family that were reported to the agency but were inappropriately screened out (based on your judgments)')?'checked':'' ?> value="There were maltreatment allegations on the family that were reported to the agency but were inappropriately screened out (based on your judgments)">There were maltreatment allegations on the family that were reported to the agency but were inappropriately screened out (based on your judgments).<br>
                        <input type="checkbox" id="O2_I3_A1_2" name="O2_I3_A1[]" <?php echo ($dataOUT['O2_I3_A1_SRC_2']=='There were maltreatment allegations on the family but they were never formally reported or formally investigated')?'checked':'' ?> value="There were maltreatment allegations on the family but they were never formally reported or formally investigated">There were maltreatment allegations on the family but they were never formally reported or formally investigated.<br>
                        <input type="checkbox" id="O2_I3_A1_3" name="O2_I3_A1[]" <?php echo ($dataOUT['O2_I3_A1_SRC_3']=='There were maltreatment allegations that were not substantiated despite evidence that would support substantiation')?'checked':'' ?> value="There were maltreatment allegations that were not substantiated despite evidence that would support substantiation">There were maltreatment allegations that were not substantiated despite evidence that would support substantiation.<br>
      
                    </div>
                    <p>
                        <span style="font-size: 18pt;"><b>A. </b></span>If the case was opened during the period under review, did the agency conduct an initial assessment that accurately assessed all risk and safety concerns for the target child in foster care and/or any child(ren) in the family remaining in the home?
                    </p>

                    <p>
                        <b>
                            Questions 3A and 3B Definitions:
                        </b>
                    </p>

                    <ul>
                        <li> "Risk" is defined as the likelihood that a child will be maltreated in the future.
                        </li>

                        <li> An assessment of safety is made to determine whether a child is in a safe environment.  A safe environment is one in which there are no threats that pose a danger or, if there are threats, there is a responsible adult in a caregiving role who demonstrates sufficient capacity to protect the child.
                        </li>

                        <li> "Target child" is defined as the child in a foster care case who is the subject of the case.
                        </li>
                    </ul>

                    <p>
                        <b>
                            Questions 3A and 3B Instructions:
                        </b>
                    </p>

                    <ul>
                        <li> Questions A and B should be answered for the target child in foster care or receiving in-home services and any other children in the family remaining in the home.
                        </li>

                        <li> In responding to questions A and B, consider any concerns selected in 3A1.</li>

                        <li> Question A should be answered Not Applicable if the case was opened before the period under review.
                        </li>
                    </ul>

                    <p>Select the appropriate response:</p>

                    <p class="answerStyle">
                        <b>Answer to Question 3A: </b>
                    </p>

                    <input type="radio" id="O2_I3_A_Y" name="O2_I3_A" <?php echo ($dataOUT['O2_I3_A']=='Yes')?'checked':'' ?> class="uniformBtn" class="radio" value="Yes" ><label for="O2_I3_A_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="O2_I3_A_N" name="O2_I3_A" <?php echo ($dataOUT['O2_I3_A']=='No')?'checked':'' ?> class="uniformBtn" class="radio" value="No"><label for="O2_I3_A_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="O2_I3_A_NA" name="O2_I3_A" <?php echo ($dataOUT['O2_I3_A']=='NA')?'checked':'' ?> class="uniformBtn" class="radio" value="NA"><label for="O2_I3_A_NA" style="margin-right: 100px;">NA</label>

                    <p>
                        If no, explain any concerns in the narrative field below.</p>
            <!--        <div id="O2_I3_Diag" title="Resizable Area">
                        <p>The text box below is resizable. Drag the lower right corner of the text box with mouse and move around to resize.
                        </p>
                    </div>
            
                    <button id="O2_I3_Commt" style="display:block; margin: auto;">Click to see how to expand comment area below
                    </button>   
            -->
                    <textarea style="height:150px; width: 100%;margin-top: 10px;" name="O2_I3_A_EXP" id="O2_I3_A_EXP" class="explain" spellcheck="true">
                        <?php $O2_I3_A_EXP = isset($_POST['O2_I3_A_EXP'])?$_POST['O2_I3_A_EXP']:$dataOUT['O2_I3_A_EXP']; echo $O2_I3_A_EXP;?>
                    </textarea>
        
                    <p>
                        <span style="font-size: 18pt;"><b>B. </b></span>During the period under review, did the agency conduct ongoing assessments that accurately assessed all of the risk and safety concerns for the target child in foster care and/or any child(ren) in the family remaining in the home?
                    </p>

                    <p>
                        <b>
                            Question 3B Instructions:
                        </b>
                    </p>

                    <ul>
                        <li> In responding to question B, determine whether ongoing assessments (formal or informal) were conducted during the period under review.  If the agency conducted an initial assessment of risk and safety at the onset of the case, but did not assess for risk and safety concerns on an ongoing basis (for example, when there were new allegations of abuse or neglect, changing family conditions, new people coming into the family home or having access to the children, changes to visitation, upon reunification, or at case closure) then the answer to question B should be No.
                        </li>

                        <li>Note that in some cases, the issue of ongoing assessments may not be relevant because the case was opened for a very short period of time (for example, if the case was opened shortly before the end of the period under review and during the initial assessment the agency determined that there were no risk or safety concerns, then it may be reasonable to conclude that the agency would not have conducted a second risk and safety assessment during the period under review).  In this case, determine whether the agency conducted ongoing assessments of both risk and safety and, if not, whether it should have, given the time frame and circumstances of the case. If you believe that ongoing assessments were not necessary, question B may be answered Not Applicable.
                        </li>

                        <li> If a case was closed during the period under review, determine whether the agency conducted a risk and safety assessment before closing the case.  If not, the answer to question B should be No.
                        </li>
                    </ul>

                    <p>
                        Select the appropriate response:
                    </p>

                    <p class="answerStyle">
                        <b>Answer to Question 3B: </b>
                    </p>

                    <input type="radio" id="O2_I3_B_Y" name="O2_I3_B" <?php echo ($dataOUT['O2_I3_B']=='Yes')?'checked':'' ?> class="uniformBtn" class="radio" value="Yes" ><label for="O2_I3_B_Y" style="margin-right: 100px;">Yes</label>
                    <input type="radio" id="O2_I3_B_N" name="O2_I3_B" <?php echo ($dataOUT['O2_I3_B']=='No')?'checked':'' ?> class="uniformBtn" class="radio" value="No"><label for="O2_I3_B_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="O2_I3_B_NA" name="O2_I3_B" <?php echo ($dataOUT['O2_I3_B']=='NA')?'checked':'' ?> class="uniformBtn" class="radio" value="NA"><label for="O2_I3_B_NA" style="margin-right: 100px;">NA</label>

                    <p>
                        If no, explain any concerns in the narrative field below.
                    </p>

                    <textarea style="height:150px; width: 100%;" name="O2_I3_B_EXP" id="O2_I3_B_EXP" class="explain" spellcheck="true">
                        <?php $O2_I3_B_EXP = isset($_POST['O2_I3_B_EXP'])?$_POST['O2_I3_B_EXP']:$dataOUT['O2_I3_B_EXP']; echo $O2_I3_B_EXP;?>
                    </textarea>
        
                    <p>
                        <span style="font-size: 18pt;"><b>C. </b></span> During the period under review, if safety concerns were present, did the agency: (1) develop an appropriate safety plan with the family and (2) continually monitor and update the safety plan as needed, including monitoring family engagement in any safety-related services?
                    </p>

                    <p>
                        <b>
                            Questions 3C and 3D Definitions:
                        </b>
                    </p>

                    <ul>
                        <li> "Safety plan" refers to a plan that describes strategies developed by the agency and family to ensure that the child(ren) is safe.  Safety plans should address safety threats and how those will be managed/addressed by the caregiver, caregiver capacity to implement the plan and report safety issues to the agency, and family involvement in implementation of the plan.  Safety plans may be separate from or integrated into the case plan.
                         </li>
                    </ul>

                    <p>
                        <b>
                            Questions 3C and 3D Instructions:
                        </b>
                    </p>

                    <ul>
                        <li> Questions C and D are applicable to all In-Home cases and to Foster Care cases in which there are other children remaining in the family home, or the target child in foster care returned home during the period under review.
                        </li>

                        <li> Questions C and D should be answered Not Applicable if the reviewer determines that during the period under review there were no apparent safety concerns for any child(ren) in the family remaining in the home.
                        </li>
                    </ul>

                    <p>
                        Select the appropriate response:
                    </p>

                    <p class="answerStyle">
                        <b>Answer to Question 3C: </b>
                    </p>

                    <input type="radio" id="O2_I3_C_Y" name="O2_I3_C" <?php echo ($dataOUT['O2_I3_C']=='Yes')?'checked':'' ?> class="uniformBtn" class="radio" value="Yes" ><label for="O2_I3_C_Y" style="margin-right: 100px;">Yes</label>
                    <input type="radio" id="O2_I3_C_N" name="O2_I3_C" <?php echo ($dataOUT['O2_I3_C']=='No')?'checked':'' ?> class="uniformBtn" class="radio" value="No"><label for="O2_I3_C_N" style="margin-right: 100px;">No</label>
                    <input type="radio" id="O2_I3_C_NA" name="O2_I3_C" <?php echo ($dataOUT['O2_I3_C']=='NA')?'checked':'' ?> class="uniformBtn" class="radio" value="NA"><label for="O2_I3_C_NA" style=" margin-right: 100px;">NA</label>

                    <p>
                        If no, explain any concerns in the narrative field below.
                    </p>

                    <textarea style="height:150px; width: 100%;" name="O2_I3_C_EXP" id="O2_I3_C_EXP" class="explain" spellcheck="true">
                        <?php $O2_I3_C_EXP = isset($_POST['O2_I3_C_EXP'])?$_POST['O2_I3_C_EXP']:$dataOUT['O2_I3_C_EXP']; echo $O2_I3_C_EXP;?>
                    </textarea>

                    <p>
                        <span style="font-size: 18pt;"><b>D1. </b></span> Did any of the following safety-related incidents occur while the case was open for services?
                    </p>
                    <div id="O2_I3_D1_CHECKBOX">
                        <p>
                            <b>
                                Question 3D1 Instructions:
                            </b>
                        </p>

                        <p>
                        Select all that apply:<br>
                        <div id="O2_I3_D1_CHECKBOX_MSG"></div>
                        <input type="checkbox" id="O2_I3_D1_1" name="O2_I3_D1[]"  <?php echo ($dataOUT['O2_I3_D1_SRC_1']=='Recurring maltreatment')?'checked':'' ?>  value="Recurring maltreatment"> Recurring maltreatment: There was at least one substantiated or indicated maltreatment report on any child in the family during the period under review AND there was another substantiated report within a 6-month period before or after that report that <b>involved the same or similar circumstances.</b> In determining the similarity of the circumstances, consider the perpetrator of the maltreatment and other individuals involved in the incident.<br><br>
                        <input type="checkbox" id="O2_I3_D1_2" name="O2_I3_D1[]" <?php echo ($dataOUT['O2_I3_D1_SRC_2']=='Recurring safety concerns')?'checked':'' ?> value="Recurring safety concerns"> Recurring safety concerns: There was at least one maltreatment report involving any child in the family during the period under review that was handled by an alternative response and resulted in opening the case for services to address safety concerns (this decision may have been made by the agency or by a private provider under contract with the agency) AND there was at least one additional maltreatment report within a 6-month period before or after that report that was handled by an alternative response and resulted in a decision to open the case for services<b> to address the same or similar safety concerns </b>(the case may have been opened for services by the agency or by a private provider under contract with the agency). In determining the similarity of the concerns, consider the perpetrator of the maltreatment, other individuals involved in the incident, and the type of safety issues that existed. <br><br>
                        <input type="checkbox" id="O2_I3_D1_3" name="O2_I3_D1[]" <?php echo ($dataOUT['O2_I3_D1_SRC_3']=='The case was closed')?'checked':'' ?> value="The case was closed"> The case was closed while significant safety concerns that were not adequately addressed still existed inthe home.<br><br>
                        <input type="checkbox" id="O2_I3_D1_4" name="O2_I3_D1[]" <?php echo ($dataOUT['O2_I3_D1_SRC_4']=='Other')?'checked':'' ?> value="Other">Other (describe the safety concerns that were not adequately addressed by the agency):<br>

          <!--<textarea style="height:150px; width: 100%;" name="O2_I3_D1_EXP" id="O2_I3_D1_EXP" class="explain"></textarea>
        -->
       
                    </div>
                    <p>
                        <span style="font-size: 18pt;"><b>D. </b></span> During the period under review, were there safety concerns pertaining to any child(ren) in the family remaining in the home that were not adequately or appropriately addressed by the agency?
                    </p>

                    <p>
                        <b>
                            Question 3D Instructions:
                        </b>
                     </p>

                    <ul>
                        <li>    Answer No to question D if any of the circumstances in D1 are selected.
                        </li>
                    </ul>
     
                    <p>
                        Select the appropriate response:
                    </p>

                    <p class="answerStyle">
                        <b>Answer to Question 3D: </b>
                    </p>

                    <input type="radio" id="O2_I3_D_Y" name="O2_I3_D" <?php echo ($dataOUT['O2_I3_D']=='Yes')?'checked':'' ?> class="uniformBtn" class="radio" value="Yes" ><label for="O2_I3_D_Y" style="margin-right: 100px;">Yes</label>
                    <input type="radio" id="O2_I3_D_N" name="O2_I3_D" <?php echo ($dataOUT['O2_I3_D']=='No')?'checked':'' ?> class="uniformBtn" class="radio" value="No"><label for="O2_I3_D_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="O2_I3_D_NA" name="O2_I3_D" <?php echo ($dataOUT['O2_I3_D']=='NA')?'checked':'' ?> class="uniformBtn" class="radio" value="NA"><label for="O2_I3_D_NA" style="margin-right: 100px;">NA</label>
        
                    <p>
                        <span style="font-size: 18pt;"><b>E1. </b></span>  Were any of the following safety concerns related to visitation present during the period under review?
                    </p>
                    <div id="O2_I3_E1_CHECKBOX">
                        <p>
                            <b>
                             Question 3E1 Instructions:
                            </b>
                        </p>

                        <p>
                            Select all that apply:<br>
                        </p>
                        <div id="O2_I3_E1_CHECKBOX_MSG"></div>
                        <input type="checkbox" id="O2_I3_E1_1" name="O2_I3_E1[]" <?php echo ($dataOUT['O2_I3_E1_SRC_1']=='Sufficient monitoring of visitation by parents/caretakers or other family members was not ensured')?'checked':'' ?> value="Sufficient monitoring of visitation by parents/caretakers or other family members was not ensured"> Sufficient monitoring of visitation by parents/caretakers or other family members was not ensured.<br>
                        <input type="checkbox" id="O2_I3_E1_2" name="O2_I3_E1[]" <?php echo ($dataOUT['O2_I3_E1_SRC_2']=='Unsupervised visitation was allowed when it was not appropriate')?'checked':'' ?> value="Unsupervised visitation was allowed when it was not appropriate"> Unsupervised visitation was allowed when it was not appropriate<br>
                        <input type="checkbox" id="O2_I3_E1_3" name="O2_I3_E1[]" <?php echo ($dataOUT['O2_I3_E1_SRC_3']=='Visitation was court-ordered despite safety concerns that could not be controlled with supervision')?'checked':'' ?> value="Visitation was court-ordered despite safety concerns that could not be controlled with supervision"> Visitation was court-ordered despite safety concerns that could not be controlled with supervision<br>
                        <input type="checkbox" id="O2_I3_E1_4" name="O2_I3_E1[]" <?php echo ($dataOUT['O2_I3_E1_SRC_4']=='Other (describe the safety concerns that existed with visitation)')?'checked':'' ?> value="Other (describe the safety concerns that existed with visitation)">Other (describe the safety concerns that existed with visitation):
                        <br>
                    </div>
          <!--
          <textarea style="height:150px; width: 100%;" name="O2_I3_E1_EXP" id="O2_I3_E1_EXP" class="explain">
          </textarea>
        -->
        
                    <p>
                        <span style="font-size: 18pt;"><b>E. </b></span>  During the period under review, was there a safety concern related to the target child in foster care during visitation with parents/caretakers or other family members?
                    </p>

                    <p>
                        <b>
                            Question 3E Instructions:
                        </b>
                    </p>

                    <ul>
                        <li>   Answer Yes to question E if any of the circumstances in E1 are selected.
                        </li>

                        <li>The answer to question E should be Not Applicable if this is not a foster care case.</li>

                        <li>If the child does not have visits with parents/caretakers or with other family members, the answer to
question E should be Not Applicable.</li>
                    </ul>

                    <p>
                        Select the appropriate response:
                    </p>

                    <p class="answerStyle">
                        <b>Answer to Question 3E: </b>
                    </p>

                    <input type="radio" id="O2_I3_E_Y" name="O2_I3_E" <?php echo ($dataOUT['O2_I3_E']=='Yes')?'checked':'' ?> class="uniformBtn" class="radio" value="Yes" ><label for="O2_I3_E_Y" style="margin-right: 100px;">Yes</label>
                    <input type="radio" id="O2_I3_E_N" name="O2_I3_E" <?php echo ($dataOUT['O2_I3_E']=='No')?'checked':'' ?> class="uniformBtn" class="radio" value="No"><label for="O2_I3_E_N" style="margin-right: 100px;">No</label>
                    <input type="radio" id="O2_I3_E_NA" name="O2_I3_E" <?php echo ($dataOUT['O2_I3_E']=='NA')?'checked':'' ?> class="uniformBtn" class="radio" value="NA"><label for="O2_I3_E_NA" style="margin-right: 100px;">NA</label>

                    <p>
                        <span style="font-size: 18pt;"><b>F1. </b></span> Did any of the following concerns exist for the child in at least one foster care placement during the period under review?
                    </p>
                    <div id="O2_I3_F1_CHECKBOX">
                        <p>
                            <b>
                            Questions 3F1 and 3F Definition:
                            </b>
                        </p>

                        <ul>
                            <li>   Foster parents include pre-adoptive parents and non-licensed relatives providing care to a child under the placement and care responsibility of the state.
                            </li>
                        </ul>
    
                        <p>
                            <b>
                                Question 3F1 Instruction:
                            </b>
                        </p>

                        <p>
                            Select all that apply:<br>
                        </p>
                        <div id="O2_I3_F1_CHECKBOX_MSG"></div>
                        <input type="checkbox" id="O2_I3_F1_1" name="O2_I3_F1[]" <?php echo ($dataOUT['O2_I3_F1_SRC_1']=='There was a substantiated allegation of maltreatment of the child by a foster parent')?'checked':'' ?> value="There was a substantiated allegation of maltreatment of the child by a foster parent"> There was a substantiated allegation of maltreatment of the child by a foster parent (including a relative foster parent) or facility staff member that could have been prevented if the agency had taken appropriate actions.<br>
                        <input type="checkbox" id="O2_I3_F1_2" name="O2_I3_F1[]" <?php echo ($dataOUT['O2_I3_F1_SRC_2']=='There was a critical incident report or other major issue relevant to noncompliance by foster parents or facility staff that could potentially make the child unsafe, and the agency could have prevented it or did not provide an adequate response after it occurred.')?'checked':'' ?> value="There was a critical incident report or other major issue relevant to noncompliance by foster parents or facility staff that could potentially make the child unsafe, and the agency could have prevented it or did not provide an adequate response after it occurred."> There was a critical incident report or other major issue relevant to noncompliance by foster parents or facility staff that could potentially make the child unsafe, and the agency could have prevented it or did not provide an adequate response after it occurred. <br>
                        <input type="checkbox" id="O2_I3_F1_3" name="O2_I3_F1[]" <?php echo ($dataOUT['O2_I3_F1_SRC_3']=='The child\'s placement during the period under review presented other risks to the child that are not being addressed, even though no allegation was made and no critical incident reports were filed')?'checked':'' ?> value="The child's placement during the period under review presented other risks to the child that are not being addressed, even though no allegation was made and no critical incident reports were filed"> The child's placement during the period under review presented other risks to the child that are not being addressed, even though no allegation was made and no critical incident reports were filed.<br>
                        <input type="checkbox" id="O2_I3_F1_4" name="O2_I3_F1[]" <?php echo ($dataOUT['O2_I3_F1_SRC_4']=='You discover that there are safety concerns related to the child in the foster home that the agency is unaware of because of inadequate monitoring')?'checked':'' ?> value="You discover that there are safety concerns related to the child in the foster home that the agency is unaware of because of inadequate monitoring">You discover that there are safety concerns related to the child in the foster home that the agency is unaware of because of inadequate monitoring.<br>
                        <input type="checkbox" id="O2_I3_F1_5" name="O2_I3_F1[]" <?php echo ($dataOUT['O2_I3_F1_SRC_5']=='Other (describe the safety concerns that existed with the child’s foster placement)')?'checked':'' ?> value="Other (describe the safety concerns that existed with the child’s foster placement)">Other (describe the safety concerns that existed with the child’s foster placement):
                        <br>
          <!--
          <textarea style="height:150px; width: 100%;" name="O2_I3_F1_EXP" id="O2_I3_F1_EXP" class="explain">
          </textarea>
        -->
   
                    </div>
                    <p>
                        <span style="font-size: 18pt;"><b>F. </b></span>  During the period under review, was there a concern for the target child’s safety related to the foster parents, members of the foster parents’ family, other children in the foster home or facility, or facility staff members that was not adequately or appropriately addressed by the agency?
                    </p>

                    <p>
                        <b>
                            Questions 3F Instructions
                        </b>
                    </p>

                    <ul>
                        <li> The answer to question F should be Not Applicable if this is not a foster care case.
                        </li>

                        <li>The answer to question F should be Yes if you determine that, during the period under review, the child was in at least one foster care placement in which he or she was unsafe, and appropriate action was not taken (such as providing closer monitoring of the placement, placing fewer children in the home, providing services to address potential problems or existing problems, or finding a more appropriate placement).  If any concerns are selected in F1, question F should be answered Yes.</li>
                        </ul>

                    <p>
                        Select the appropriate response:
                    </p>

                    <p class="answerStyle">
                        <b>Answer to Question 3F: </b>
                    </p>

                    <input type="radio" id="O2_I3_F_Y" name="O2_I3_F"  <?php echo ($dataOUT['O2_I3_F']=='Yes')?'checked':'' ?> class="uniformBtn" class="radio" value="Yes" ><label for="O2_I3_F_Y" style="margin-right: 100px;">Yes</label>
                    <input type="radio" id="O2_I3_F_N" name="O2_I3_F"  <?php echo ($dataOUT['O2_I3_F']=='No')?'checked':'' ?> class="uniformBtn" class="radio" value="No"><label for="O2_I3_F_N" style="margin-right: 100px;">No</label>
                    <input type="radio" id="O2_I3_F_NA" name="O2_I3_F"  <?php echo ($dataOUT['O2_I3_F']=='NA')?'checked':'' ?> class="uniformBtn" class="radio" value="NA"><label for="O2_I3_F_NA" style="margin-right: 100px;">NA</label>
                  <div id="I3">   
                    <p>
                        <b>
                        Item 3 Rating Criteria:
                        </b>
                    </p>

                    <p>
                        <b> Item 3 should be rated as a Strength if both of the following apply:</b>
                    </p>

                    <ul>
                        <li><b> The answers to questions A, B, and C are either Yes or Not Applicable, and</b>
                        </li>

                        <li><b> The answers to questions D, E, and F are either No or Not Applicable.</b>
                        </li>
                    </ul>

                    <p>
                        <b>
                        Item 3 should be rated as an Area Needing Improvement if either of the following applies:
                        </b>
                    </p>

                    <ul>
                        <li><b> The answer to any one of questions A, B, or C is No, or</b>
                        </li>

                        <li><b> The answer to any one of questions D, E, or F is Yes.</b>
                        </li>
                    </ul>

                    <p>
                        <b>
                            There are no circumstances under which item 3 could be rated as Not Applicable.
                        </b>
                    </p>
                    <div id="O2_I3_R_CHECKBOX">
                        <p class="answerStyle">
                            <b>Item 3 Rating (select one): </b><input type="button" id="I3_BTN" name="I3_BTN" class="Btn"  value="Click to rate Item 3"> <div id="I3_BTN_MSG" style="color:red;"></div>
                        </p>

                        <input type="radio" id="O2_I3_R_S" name="O2_I3_R" <?php echo ($dataOUT['O2_I3_R']=='Strength')?'checked':'' ?> class="uniformBtn" class="radio" value="Strength" ><label for="O2_I3_R_S" style="margin-right: 100px;">Strength</label>
                        <input type="radio" id="O2_I3_R_ANI" name="O2_I3_R" <?php echo ($dataOUT['O2_I3_R']=='Area Needing Improvement')?'checked':'' ?> class="uniformBtn" class="radio" value="Area Needing Improvement"><label for="O2_I3_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>

                        <p>
                            <b>
                            Sources of information that informed rating:
                            </b>
                        </p>
                        <div id="O2_I3_R_CHECKBOX_MSG"></div>
                        <p>
                            <input type="checkbox" id="O2_I3_R_SRC_CF" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_1']=='case file')?'checked':'' ?>  value="case file">case file<br>
                            <input type="checkbox" id="O2_I3_R_SRC_MI" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_2']=='mother interview')?'checked':'' ?>  value="mother interview">mother interview<br>
                            <input type="checkbox" id="O2_I3_R_SRC_FI" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_3']=='father interview')?'checked':'' ?>  value="father interview">father interview<br>
                            <input type="checkbox" id="O2_I3_R_SRC_FPI" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_4']=='foster parent interview')?'checked':'' ?>  value="foster parent interview">foster parent interview<br>
                            <input type="checkbox" id="O2_I3_R_SRC_CI" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_5']=='child interview')?'checked':'' ?>  value="child interview">child interview<br>
                            <input type="checkbox" id="O2_I3_R_SRC_CWI" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>  value="caseworker/supervisor interview">caseworker/supervisor interview<br>
                            <input type="checkbox" id="O2_I3_R_SRC_OI" name="O2_I3_R_SRC[]" <?php echo ($dataOUT['O2_I3_R_SRC_7']=='other interview')?'checked':'' ?>  value="other interview">other interview<br>
                        </p>      
                    </div>
                    <p>
                        Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                    </p>

                    <textarea style="height:150px; width: 100%;" name="O2_I3_R_EXP" id="O2_I3_R_EXP" class="explain" spellcheck="true">
                         <?php $O2_I3_R_EXP = isset($_POST['O2_I3_R_EXP'])?$_POST['O2_I3_R_EXP']:$dataOUT['O2_I3_R_EXP']; echo $O2_I3_R_EXP;?>
                    </textarea>        
                    </div>
                   

                    <div id="successI3"></div>
                   </div>
                </div> <!-- end of Item 3 -->
                
                
                <!-- ******************************************** SAFETY OUTCOME 2 RATING  *********************************************************************************************** -->
                <h3>RATING SAFETY OUTCOME 2</h3>
                <!-- <div id="accordionOUT2"> -->
                <div>
                    <h3>Step 1: Instructions</h3>
                    <div id="Safety_O2">
                        <h4> What is the level of outcome achievement that best describes the extent to which this outcome is being or has been achieved, based on the ratings for items 2 and 3?
                        </h4>

                        <p>Safety Outcome 2 should be rated as Substantially Achieved if either of the following applies:
                        </p>

                        <ul>
                            <li> Items 2 and 3 are rated as Strengths.
                            </li>

                            <li> Item 2 is rated as Not Applicable and Item 3 is rated as a Strength.
                            </li>
                        </ul>

                        <p>
                            Safety Outcome 2 should be rated as Partially Achieved if the following applies:
                        </p>

                        <ul>
                            <li> One of the two items is rated as a Strength and the other as an Area Needing Improvement.
                            </li>
                        </ul>

                        <p>
                            Safety Outcome 2 should be rated as Not Achieved if either of the following applies:
                        </p>

                        <ul>
                            <li> Items 2 and 3 are rated as Areas Needing Improvement.
                            </li>

                            <li> Item 2 is rated as Not Applicable and Item 3 is rated as an Area Needing Improvement.
                            </li>
                        </ul>

                        <div id="outcome2helpDiag" title="Item 2 & 3 Ratings">
                            <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
                        </div>
                        <button id="outcome2help1" style="display:block; margin: auto;">
                            Click to see item 2 and item 3 rating you previously chose.
                        </button>
                    </div>

                    <h3>Step 2: Rating Answer</h3>
                    <div>
                        <p><b>Select the appropriate response:  </b><input type="button" id="O2_BTN" name="O2_BTN" class="Btn"  value="Click to rate Item 3"> <div id="O2_BTN_MSG" style="color:red;"></div></p>

                       <!-- <form method="post" id="O2_R"> -->
                        <input type="radio" id="O2_SA" class="uniformBtn" class="radio" value="Substantially Achieved"  name="O2_R"  <?php echo ($dataOUT['O2_R']=='Substantially Achieved')?'checked':'' ?> ><label for="O2_SA" style="widht: 30px; margin-right: 100px;">Substantially Achieved</label>

                        <input type="radio" id="O2_PA"  class="uniformBtn" class="radio" value="Partially Achieved" name="O2_R" <?php echo ($dataOUT['O2_R']=='Partially Achieved')?'checked':'' ?>><label for="O2_PA" style="widht: 30px;margin-right: 100px;">Partially Achieved</label>

                        <input type="radio" id="O2_NA" class="uniformBtn" class="radio" value="Not Achieved" name="O2_R" <?php echo ($dataOUT['O2_R']=='Not Achieved')?'checked':'' ?> ><label for="O2_NA" style="widht: 30px;margin-right: 100px;">Not Achieved</label>
              
                     <!--   <input type="submit" value="Submit" id="O2_R_SUBMIT" class="uniformBtn" style="display: block;margin: auto; margin-top: 20px; font-size: 16pt;"/> -->            
                    </div>
                    
                     <div style="text-align: center;margin-top: 10px; font-size: 14pt; font-weight: bold;">
                        Name your file: <input type="text" name="O1_file_name" pattern="^F[CP]+[A-Za-z0-9_]{1,30}$" title="File name must start with FP or FC and followed by letters, numbers, or underscores, maximum lengh: 30 characters" >
                    </div>
      
                    <input type="submit" name="TEMP_SUBMIT" value="Submit" id="O1_I1_SUBMIT" class="Btn" style="display: block;margin: auto; margin-top: 20px; font-size: 14pt;" />           
                    <input type="submit" name="FINAL_SUBMIT" value="Final Submit and View Debriefing Report" class="Btn" style="display: block; margin: auto; margin-top: 10px; font-size: 14pt;"/>                      
                    
                    <div id="successO2" style="width: 250px; margin: auto;"></div>
        
                </div> <!-- end of accordion OUT2 RATING-->                               
             </div> <!-- end of accordionT3 -->
        </div> <!-- end of tab 3 -->

<!--************************************* tab 4 Sec II Outcome 1************************************************************************ -->
  <div id="tabs-4">
      <header style="text-align: center;">
            <h2>SECTION II: PERMANENCY</h2>
            <h3>PERMANENCY OUTCOME 1: CHILDREN HAVE PERMANENCY AND STABILITY IN THEIR LIVING SITUATIONS.</h3>
			<!--
      <h4>Item 1: Timelines of Initiating Investigations of Reports of Child Maltreatment</h4>
      -->
      </header>
      <div id="accordionT4">  
            <h3>Item 4: Stability of Foster Care Placement</h3>
           <div id="I4">
                <h3>Step 1: Purpose of Assessment</h3>
                <div>
                    <p>To determine if the child in foster care is in a stable placement at the time of the onsite review and that any changes in placement that occurred during the period under review were in the best interest of the child and consistent with achieving the child's permanency goal(s).
                    </p>
                </div>
                
                <h3>Step 2: Item 4 Applicable Cases</h3>
                <div>
                    <p>All foster care cases are applicable for an assessment of this item.</p>
                </div>
                
                <h3>Step 3: Questions</h3>
                <div >
                   <!--
                    <form method="post" id="S2_I4_Q_F">
                   -->
                        <p>
                            <span style="font-size: 18pt;"><b>A. </b></span>
                            How many placement settings did the child experience during the period under review?
                        </p>

                        <p>
                            <b>Questions 4A Definitions:</b>
                        </p>
                        <ul>
                            <li> "Placement setting" refers to a physical setting in which a child resides while in foster care under the care and placement of the agency. A new placement setting would result, for example, when a child moves from one foster family home to another or to a group home or institution. Placement settings may include shelter care, treatment facilities, and juvenile justice placements. If, however, a foster family with whom a child is placed moves and the child moves with them, this does not constitute a change in placement.
                            </li>

                            <li> "Entry into foster care" refers to a child's removal from his or her normal place of residence and placement in a substitute care setting under the placement and care responsibility of the state or local title IV-B/IV-E agency. Children are considered to have entered foster care if the child has been in substitute care for 24 hours or more.
                            </li>

                            <li> "Current episode of foster care" refers to a child's current stay in foster care based on the most recent removal of the child from his or her normal place of residence, resulting in his or her placement in a foster care setting and ending upon the child's discharge from foster care.
                            </li>
                        </ul>

                         <p>
                            <b>Questions 4A Instructions:</b>
                        </p>                       
                        <ul>
                            <li> If there were multiple episodes of foster care during the period under review, add up the placement settings within each episode. If there is a re-entry into foster care and the child is placed in a different placement setting at the time of re-entry, then it would count as a new placement setting. If the child returns to the placement setting he or she was in before the return home, then it would not count as a new placement setting.
                            </li>

                            <li>Do not consider the following as placement settings: (1) a trial home visit; (2) a runaway episode; (3) temporary absences from the child's ongoing foster care placement, including visitation with a sibling, relative, or other caretaker (for example, pre-placement visits with a subsequent foster care provider or pre-adoptive parents); (4) hospitalization for medical treatment, acute psychiatric episodes, or diagnosis; (5) respite care; (6) day or summer camps; and (7) locked facilities (for example, when a youth is held in detention). 
                            </li>
                        </ul>
                        
                        <p>
                            Record the appropriate number of placement settings below.
                        </p>
                        <p class="answerStyle" id="I4_area"><b>Answer to Question 4A:
                            <input type="text" id="S2_I4_A" name="S2_I4_A" class="textbox" pattern="^\s*$|([0-9\s*$]{1,4})" title="Only numbers allowed, maximum length: 4 digits" value=" <?php $S2_I4_A = isset($_POST['S2_I4_A'])?trim($_POST['S2_I4_A']) : trim($dataOUT['S2_I4_A']); echo $S2_I4_A ; ?> "></b>
                        </p>
                        
                        <p>
                            <span style="font-size: 18pt;"><b>A1. </b></span>
                            Placement Table
                        </p>
                        <p>
                            <b>Table 4A1 Definitions:</b>
                        </p>
                        <p>
                            The Adoption and Foster Care Analysis and Reporting System (AFCARS) contains the following foster care data element definitions for placement settings:
                        </p>
                         <ul>
                            <li> Pre-Adoptive Home - A home in which the family intends to adopt the child. The family may or may not be receiving a foster care payment or an adoption subsidy on behalf of the child.
                            </li>

                            <li> Foster Family Home (Relative) - A licensed or unlicensed home of the child's relatives regarded by the title IV-E agency as a foster care living arrangement for the child.
                            </li>

                            <li> Foster Family Home (Non-Relative) - A licensed foster family home regarded by the title IV-E agency as a foster care living arrangement.
                            </li>
                            
                            <li> Group Home - A licensed or approved home providing 24-hour care for children in a small group setting that generally has from seven to twelve children.
                            </li>

                            <li> Institution - A child care facility operated by a public or private agency and providing 24-hour care and/or treatment for children who require separation from their own homes and group living experience. These facilities may include child care institutions, residential treatment facilities, maternity homes, etc.
                            </li>

                            <li> Supervised Independent Living - An alternative transitional living arrangement where the child is under the supervision of the agency but without 24-hour adult supervision, is receiving financial support from the child welfare agency, and is in a setting that provides the opportunity for increased responsibility for self-care.
                            </li>        
                        </ul>
                        
                        <p>
                            <b>Question 4A1 Instructions:</b>
                        </p>
                        <p>
                            Complete the placement table below. Begin with the child's placement setting at the onset of the period under review, or if the child entered foster care during the period under review, begin with the first placement setting at entry into foster care. If there was only one placement setting, complete only the first two columns of the first row.
                        </p>
                        <p>
                            Select from the following options for placement type:
                        </p>
                         <ul>
                            <li> Pre-Adoptive Home</li>
                            <li> Foster Family Home (Relative)</li>
                            <li> Foster Family Home (Non-Relative)</li>                            
                            <li> Group Home</li>
                            <li> Institution</li>
                            <li> Supervised Independent Living</li>        
                        </ul>
                        
                         <p>
                            Select from the following options for reason for change in placement setting:
                        </p>
                         <ul>
                            <li> Move to an adoptive or permanent guardian's home</li>
                            <li> Move from a more restrictive to a less restrictive placement</li>
                            <li> Move from a less restrictive to a more restrictive placement</li>                            
                            <li> Move to a relative placement</li>
                            <li> Move that brings the child closer to family or other important connections</li>
                            <li> Move to a temporary placement while awaiting a more appropriate placement</li>                              
                            <li> Move due to foster parent's request</li>
                            <li> Other (describe)</li>  
                        </ul>
                        
                         <table border="2"  width="800" name="S2_I4_A1">
				<caption><b>Placement Table</b></caption>
                                <tr>
                                    <th>Placement Date</th>
                                    <th>Placement Type</th>
                                    <th>Reason for Change in Placement Setting</th>
                                </tr>
                                
                                <tr>
                                    <td><input name="S2_I4_A1_R0_C0" class="datepicker" type="text" style="width: 97%;" value=" <?php $S2_I4_A1_R0_C0 = isset($_POST['S2_I4_A1_R0_C0'])?$_POST['S2_I4_A1_R0_C0'] : $dataOUT['S2_I4_A1_R0_C0']; echo $S2_I4_A1_R0_C0 ; ?> "></td>
                                    <td>
                                        <select id="S2_I4_A1_R0_C1" name="S2_I4_A1_R0_C1" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Pre-Adoptive Home" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "Pre-Adoptive Home" ? "selected" : ""); ?>>Pre-Adoptive Home</option>
                                            <option value="Foster Family Home (Relative)" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "Foster Family Home (Relative)" ? "selected" : ""); ?>>Foster Family Home (Relative)</option> 
                                            <option value="Foster Family Home (Non-Relative)" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "Foster Family Home (Non-Relative)" ? "selected" : ""); ?>>Foster Family Home (Non-Relative)</option> 
                                            <option value="Group Home" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "Group Home" ? "selected" : ""); ?>>Group Home</option>
                                            <option value="Institution" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "Institution" ? "selected" : ""); ?>>Institution</option>
                                            <option value="Supervised Independent Living" <?php echo ($dataOUT['S2_I4_A1_R0_C1'] == "Supervised Independent Livin" ? "selected" : ""); ?>>Supervised Independent Living</option>
                                        </select>                                    
                                    </td>
                                    <td>
                                        <select id="S2_I4_A1_R0_C2" name="S2_I4_A1_R0_C2" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Move to an adoptive or permanent guardian's home" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move to an adoptive or permanent guardian's home" ? "selected" : ""); ?>>Move to an adoptive or permanent guardian's home</option>
                                            <option value="Move from a more restrictive to a less restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move from a more restrictive to a less restrictive placement" ? "selected" : ""); ?>>Move from a more restrictive to a less restrictive placement</option> 
                                            <option value="Move from a less restrictive to a more restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move from a less restrictive to a more restrictive placement" ? "selected" : ""); ?>>Move from a less restrictive to a more restrictive placement</option> 
                                            <option value="Move to a relative placement" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move to a relative placement" ? "selected" : ""); ?>>Move to a relative placement</option>
                                            <option value="Move that brings the child closer to family or other important connections" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move that brings the child closer to family or other important connections" ? "selected" : ""); ?>>Move that brings the child closer to family or other important connections</option>
                                            <option value="Move to a temporary placement while awaiting a more appropriate placement" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move to a temporary placement while awaiting a more appropriate placement" ? "selected" : ""); ?>>Move to a temporary placement while awaiting a more appropriate placement</option>
                                            <option value="Move due to foster parent's request" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Move due to foster parent's request" ? "selected" : ""); ?>>Move due to foster parent's request</option>
                                            <option value="Other (describe)" <?php echo ($dataOUT['S2_I4_A1_R0_C2'] == "Other (describe)" ? "selected" : ""); ?>>Other (describe in the text box below)</option>
                                        </select> 
                                        <input name="S2_I4_A1_R0_C2_OTHER" type="text" style="width: 98%;" value=" <?php $S2_I4_A1_R0_C2_OTHER = isset($_POST['S2_I4_A1_R0_C2_OTHER'])?$_POST['S2_I4_A1_R0_C2_OTHER'] : $dataOUT['S2_I4_A1_R0_C2_OTHER']; echo $S2_I4_A1_R0_C2_OTHER ; ?> ">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><input name="S2_I4_A1_R1_C0" class="datepicker" type="text" style="width: 97%;" value=" <?php $S2_I4_A1_R1_C0 = isset($_POST['S2_I4_A1_R1_C0'])?$_POST['S2_I4_A1_R1_C0'] : $dataOUT['S2_I4_A1_R1_C0']; echo $S2_I4_A1_R1_C0 ; ?> "></td>
                                    <td>
                                        <select id="S2_I4_A1_R1_C1" name="S2_I4_A1_R1_C1" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Pre-Adoptive Home" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "Pre-Adoptive Home" ? "selected" : ""); ?>>Pre-Adoptive Home</option>
                                            <option value="Foster Family Home (Relative)" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "Foster Family Home (Relative)" ? "selected" : ""); ?>>Foster Family Home (Relative)</option> 
                                            <option value="Foster Family Home (Non-Relative)" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "Foster Family Home (Non-Relative)" ? "selected" : ""); ?>>Foster Family Home (Non-Relative)</option> 
                                            <option value="Group Home" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "Group Home" ? "selected" : ""); ?>>Group Home</option>
                                            <option value="Institution" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "Institution" ? "selected" : ""); ?>>Institution</option>
                                            <option value="Supervised Independent Living" <?php echo ($dataOUT['S2_I4_A1_R1_C1'] == "Supervised Independent Living" ? "selected" : ""); ?>>Supervised Independent Living</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="S2_I4_A1_R1_C2" name="S2_I4_A1_R1_C2" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Move to an adoptive or permanent guardian's home" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move to an adoptive or permanent guardian's home" ? "selected" : ""); ?>>Move to an adoptive or permanent guardian's home</option>
                                            <option value="Move from a more restrictive to a less restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move from a more restrictive to a less restrictive placement" ? "selected" : ""); ?>>Move from a more restrictive to a less restrictive placement</option> 
                                            <option value="Move from a less restrictive to a more restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move from a less restrictive to a more restrictive placement" ? "selected" : ""); ?>>Move from a less restrictive to a more restrictive placement</option> 
                                            <option value="Move to a relative placement" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move to a relative placement" ? "selected" : ""); ?>>Move to a relative placement</option>
                                            <option value="Move that brings the child closer to family or other important connections" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move that brings the child closer to family or other important connections" ? "selected" : ""); ?>>Move that brings the child closer to family or other important connections</option>
                                            <option value="Move to a temporary placement while awaiting a more appropriate placement" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move to a temporary placement while awaiting a more appropriate placement" ? "selected" : ""); ?>>Move to a temporary placement while awaiting a more appropriate placement</option>
                                            <option value="Move due to foster parent's request" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Move due to foster parent's request" ? "selected" : ""); ?>>Move due to foster parent's request</option>
                                            <option value="Other (describe)" <?php echo ($dataOUT['S2_I4_A1_R1_C2'] == "Other (describe)" ? "selected" : ""); ?>>Other (describe in the text box below)</option>
                                        </select> 
                                        <input name="S2_I4_A1_R1_C2_OTHER" type="text" style="width: 98%;" value=" <?php $S2_I4_A1_R1_C2_OTHER = isset($_POST['S2_I4_A1_R1_C2_OTHER'])?$_POST['S2_I4_A1_R1_C2_OTHER'] : $dataOUT['S2_I4_A1_R1_C2_OTHER']; echo $S2_I4_A1_R1_C2_OTHER ; ?> ">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><input name="S2_I4_A1_R2_C0" class="datepicker" type="text" style="width: 97%;" value=" <?php $S2_I4_A1_R2_C0 = isset($_POST['S2_I4_A1_R2_C0'])?$_POST['S2_I4_A1_R2_C0'] : $dataOUT['S2_I4_A1_R2_C0']; echo $S2_I4_A1_R2_C0 ; ?> "></td>
                                    <td>
                                        <select id="S2_I4_A1_R2_C1" name="S2_I4_A1_R2_C1" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Pre-Adoptive Home" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "Pre-Adoptive Home" ? "selected" : ""); ?>>Pre-Adoptive Home</option>
                                            <option value="Foster Family Home (Relative)" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "Foster Family Home (Relative)" ? "selected" : ""); ?>>Foster Family Home (Relative)</option> 
                                            <option value="Foster Family Home (Non-Relative)" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "Foster Family Home (Non-Relative)" ? "selected" : ""); ?>>Foster Family Home (Non-Relative)</option> 
                                            <option value="Group Home" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "Group Home" ? "selected" : ""); ?>>Group Home</option>
                                            <option value="Institution" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "Institution" ? "selected" : ""); ?>>Institution</option>
                                            <option value="Supervised Independent Living" <?php echo ($dataOUT['S2_I4_A1_R2_C1'] == "Supervised Independent Living" ? "selected" : ""); ?>>Supervised Independent Living</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="S2_I4_A1_R2_C2" name="S2_I4_A1_R2_C2" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Move to an adoptive or permanent guardian's home" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move to an adoptive or permanent guardian's home" ? "selected" : ""); ?>>Move to an adoptive or permanent guardian's home</option>
                                            <option value="Move from a more restrictive to a less restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move from a more restrictive to a less restrictive placement" ? "selected" : ""); ?>>Move from a more restrictive to a less restrictive placement</option> 
                                            <option value="Move from a less restrictive to a more restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move from a less restrictive to a more restrictive placement" ? "selected" : ""); ?>>Move from a less restrictive to a more restrictive placement</option> 
                                            <option value="Move to a relative placement" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move to a relative placement" ? "selected" : ""); ?>>Move to a relative placement</option>
                                            <option value="Move that brings the child closer to family or other important connections" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move that brings the child closer to family or other important connections" ? "selected" : ""); ?>>Move that brings the child closer to family or other important connections</option>
                                            <option value="Move to a temporary placement while awaiting a more appropriate placement" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move to a temporary placement while awaiting a more appropriate placement" ? "selected" : ""); ?>>Move to a temporary placement while awaiting a more appropriate placement</option>
                                            <option value="Move due to foster parent's request" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Move due to foster parent's request" ? "selected" : ""); ?>>Move due to foster parent's request</option>
                                            <option value="Other (describe)" <?php echo ($dataOUT['S2_I4_A1_R2_C2'] == "Other (describe)" ? "selected" : ""); ?>>Other (describe in the text box below)</option>
                                        </select> 
                                        <input name="S2_I4_A1_R2_C2_OTHER" type="text" style="width: 98%;" value=" <?php $S2_I4_A1_R2_C2_OTHER = isset($_POST['S2_I4_A1_R2_C2_OTHER'])?$_POST['S2_I4_A1_R2_C2_OTHER'] : $dataOUT['S2_I4_A1_R2_C2_OTHER']; echo $S2_I4_A1_R2_C2_OTHER ; ?> ">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><input name="S2_I4_A1_R3_C0" class="datepicker" type="text" style="width: 97%;" value=" <?php $S2_I4_A1_R3_C0 = isset($_POST['S2_I4_A1_R3_C0'])?$_POST['S2_I4_A1_R3_C0'] : $dataOUT['S2_I4_A1_R3_C0']; echo $S2_I4_A1_R3_C0 ; ?> "></td>
                                    <td>
                                        <select id="S2_I4_A1_R3_C1" name="S2_I4_A1_R3_C1" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Pre-Adoptive Home" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "Pre-Adoptive Home" ? "selected" : ""); ?>>Pre-Adoptive Home</option>
                                            <option value="Foster Family Home (Relative)" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "Foster Family Home (Relative)" ? "selected" : ""); ?>>Foster Family Home (Relative)</option> 
                                            <option value="Foster Family Home (Non-Relative)" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "Foster Family Home (Non-Relative)" ? "selected" : ""); ?>>Foster Family Home (Non-Relative)</option> 
                                            <option value="Group Home" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "Group Home" ? "selected" : ""); ?>>Group Home</option>
                                            <option value="Institution" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "Institution" ? "selected" : ""); ?>>Institution</option>
                                            <option value="Supervised Independent Living" <?php echo ($dataOUT['S2_I4_A1_R3_C1'] == "Supervised Independent Living" ? "selected" : ""); ?>>Supervised Independent Living</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="S2_I4_A1_R3_C2" name="S2_I4_A1_R3_C2" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Move to an adoptive or permanent guardian's home" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move to an adoptive or permanent guardian's home" ? "selected" : ""); ?>>Move to an adoptive or permanent guardian's home</option>
                                            <option value="Move from a more restrictive to a less restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move from a more restrictive to a less restrictive placement" ? "selected" : ""); ?>>Move from a more restrictive to a less restrictive placement</option> 
                                            <option value="Move from a less restrictive to a more restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move from a less restrictive to a more restrictive placement" ? "selected" : ""); ?>>Move from a less restrictive to a more restrictive placement</option> 
                                            <option value="Move to a relative placement" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move to a relative placement" ? "selected" : ""); ?>>Move to a relative placement</option>
                                            <option value="Move that brings the child closer to family or other important connections" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move that brings the child closer to family or other important connections" ? "selected" : ""); ?>>Move that brings the child closer to family or other important connections</option>
                                            <option value="Move to a temporary placement while awaiting a more appropriate placement" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move to a temporary placement while awaiting a more appropriate placement" ? "selected" : ""); ?>>Move to a temporary placement while awaiting a more appropriate placement</option>
                                            <option value="Move due to foster parent's request" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Move due to foster parent's request" ? "selected" : ""); ?>>Move due to foster parent's request</option>
                                            <option value="Other (describe)" <?php echo ($dataOUT['S2_I4_A1_R3_C2'] == "Other (describe)" ? "selected" : ""); ?>>Other (describe in the text box below)</option>
                                        </select> 
                                        <input name="S2_I4_A1_R3_C2_OTHER" type="text" style="width: 98%;" value=" <?php $S2_I4_A1_R3_C2_OTHER = isset($_POST['S2_I4_A1_R3_C2_OTHER'])?$_POST['S2_I4_A1_R3_C2_OTHER'] : $dataOUT['S2_I4_A1_R3_C2_OTHER']; echo $S2_I4_A1_R3_C2_OTHER ; ?> ">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><input name="S2_I4_A1_R4_C0" class="datepicker" type="text" style="width: 97%;" value=" <?php $S2_I4_A1_R4_C0 = isset($_POST['S2_I4_A1_R4_C0'])?$_POST['S2_I4_A1_R4_C0'] : $dataOUT['S2_I4_A1_R4_C0']; echo $S2_I4_A1_R4_C0 ; ?> "></td>
                                    <td>
                                        <select id="S2_I4_A1_R4_C1" name="S2_I4_A1_R4_C1" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Pre-Adoptive Home" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "Pre-Adoptive Home" ? "selected" : ""); ?>>Pre-Adoptive Home</option>
                                            <option value="Foster Family Home (Relative)" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "Foster Family Home (Relative)" ? "selected" : ""); ?>>Foster Family Home (Relative)</option> 
                                            <option value="Foster Family Home (Non-Relative)" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "Foster Family Home (Non-Relative)" ? "selected" : ""); ?>>Foster Family Home (Non-Relative)</option> 
                                            <option value="Group Home" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "Group Home" ? "selected" : ""); ?>>Group Home</option>
                                            <option value="Institution" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "Institution" ? "selected" : ""); ?>>Institution</option>
                                            <option value="Supervised Independent Living" <?php echo ($dataOUT['S2_I4_A1_R4_C1'] == "Supervised Independent Living" ? "selected" : ""); ?>>Supervised Independent Living</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="S2_I4_A1_R4_C2" name="S2_I4_A1_R4_C2" style="width:100%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "" ? "selected" : ""); ?>></option>
                                            <option value="Move to an adoptive or permanent guardian's home" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move to an adoptive or permanent guardian's home" ? "selected" : ""); ?>>Move to an adoptive or permanent guardian's home</option>
                                            <option value="Move from a more restrictive to a less restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move from a more restrictive to a less restrictive placement" ? "selected" : ""); ?>>Move from a more restrictive to a less restrictive placement</option> 
                                            <option value="Move from a less restrictive to a more restrictive placement" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move from a less restrictive to a more restrictive placement" ? "selected" : ""); ?>>Move from a less restrictive to a more restrictive placement</option> 
                                            <option value="Move to a relative placement" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move to a relative placement" ? "selected" : ""); ?>>Move to a relative placement</option>
                                            <option value="Move that brings the child closer to family or other important connections" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move that brings the child closer to family or other important connections" ? "selected" : ""); ?>>Move that brings the child closer to family or other important connections</option>
                                            <option value="Move to a temporary placement while awaiting a more appropriate placement" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move to a temporary placement while awaiting a more appropriate placement" ? "selected" : ""); ?>>Move to a temporary placement while awaiting a more appropriate placement</option>
                                            <option value="Move due to foster parent's request" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Move due to foster parent's request" ? "selected" : ""); ?>>Move due to foster parent's request</option>
                                            <option value="Other (describe)" <?php echo ($dataOUT['S2_I4_A1_R4_C2'] == "Other (describe)" ? "selected" : ""); ?>>Other (describe in the text box below)</option>
                                        </select> 
                                        <input name="S2_I4_A1_R4_C2_OTHER" type="text" style="width: 98%;" value=" <?php $S2_I4_A1_R4_C2_OTHER = isset($_POST['S2_I4_A1_R4_C2_OTHER'])?$_POST['S2_I4_A1_R4_C2_OTHER'] : $dataOUT['S2_I4_A1_R4_C2_OTHER']; echo $S2_I4_A1_R4_C2_OTHER ; ?> ">
                                    </td>
                                </tr>                                                                
                         </table>
                        
                        <p>
                            <span style="font-size: 18pt;"><b>B. </b></span>
                            Were all placement changes during the period under review planned by the agency in an effort to achieve the child’s case goals or to meet the needs of the child?
                        </p>

                        <p>
                            <b>Questions 4B Definitions:</b>
                        </p>
                        <ul>
                            <li> Placement changes that reflect agency efforts to achieve case goals include moves from a foster home to an adoptive home, moves from a more restrictive to a less restrictive placement, moves from non-relative foster care to relative foster care, and moves that bring the child closer to family or community.
                            </li>

                            <li> Placement changes that do not reflect agency efforts to achieve case goals include moves due to unexpected and undesired placement disruptions; moves due to placing the child in an inappropriate placement (that is, moves based on availability rather than on appropriateness); moves to more restrictive placements when this is not essential to achieving a child's permanency goal; temporary placements while awaiting a more appropriate placement; and practices of routinely placing children in a particular placement type, such as shelter care, upon initial entry into foster care regardless of individual needs.
                            </li>
                        </ul>

                        <p>
                            <b>Questions 4B Instructions:</b>
                        </p>                       
                        <ul>
                            <li> If the response to question A is one (1), then the response to question B should be Not Applicable. If the single placement is not stable, that information will be collected in question C.
                            </li>

                            <li>If ALL placement changes during the period under review reflect planned agency efforts to achieve the child's case goals or meet the needs of the child, then the answer to question B should be Yes.
                            </li>
                            
                            <li> If any single placement change that occurred during the period under review was for a reason other than agency efforts to achieve case goals or to meet the child's needs, the answer to question B should be No.
                            </li>

                            <li>Placement changes that occur as a result of unexpected circumstances that are out of the control of the agency (such as the death of a foster parent or foster parents moving to another state) can be considered similar to those that reflect agency efforts to achieve case goals for purposes of question B.
                            </li>
                        </ul>
                        
                        <p>
                            Select the appropriate response:
                        </p>
                        <p class="answerStyle">
                            <b>Answer to Question 4B: </b>
                        </p>
                        <input type="radio" id="S2_I4_B_Y" name="S2_I4_B" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I4_B']=='Yes')?'checked':'' ?>><label for="S2_I4_B_Y" style=" margin-right: 100px;">Yes</label>
                        <input type="radio" id="S2_I4_B_N" name="S2_I4_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I4_B']=='No')?'checked':'' ?> ><label for="S2_I4_B_N" style=" margin-right: 100px;">No</label>
                        <input type="radio" id="S2_I4_B_NA" name="S2_I4_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I4_B']=='NA')?'checked':'' ?> ><label for="S2_I4_B_NA" style="margin-right: 100px;">NA</label>
                        
                        
                        <p>
                            <span style="font-size: 18pt;"><b>C1. </b></span>
                            Do any of the circumstances below apply to the child's current placement?
                        </p>
                        <p>
                            <b>Questions C1 Instructions:</b>
                        </p>
                        <p>
                            Select all that apply:
                        </p>
                        <div id="S2_I4_C1_CHECKBOX_MSG"></div>     
                        <div id="I4_C1_CHECK">
                        <input type="checkbox" id="S2_I4_C1_1" name="S2_I4_C1[]" value="The child's current placement is in a temporary shelter or other temporary setting." <?php echo ($dataOUT['S2_I4_C1_SRC_1']=='The child\'s current placement is in a temporary shelter or other temporary setting.')?'checked':'' ?>>The child's current placement is in a temporary shelter or other temporary setting.<br>
                        <input type="checkbox" id="S2_I4_C1_2" name="S2_I4_C1[]" value="There is information indicating that the child's current substitute care provider may not be able to continue to care for the child." <?php echo ($dataOUT['S2_I4_C1_SRC_2']=='There is information indicating that the child\'s current substitute care provider may not be able to continue to care for the child.')?'checked':'' ?> >There is information indicating that the child's current substitute care provider may not be able to continue to care for the child.<br>
                        <input type="checkbox" id="S2_I4_C1_3" name="S2_I4_C1[]" value="There are problems in the current placement that threaten the stability of the placement but that the agency is not addressing." <?php echo ($dataOUT['S2_I4_C1_SRC_3']=='There are problems in the current placement that threaten the stability of the placement but that the agency is not addressing.')?'checked':'' ?> >There are problems in the current placement that threaten the stability of the placement but that the agency is not addressing.<br>
                        <input type="checkbox" id="S2_I4_C1_4" name="S2_I4_C1[]" value="The child has run away from this placement more than once in the past, or is in runaway status at the time of the review." <?php echo ($dataOUT['S2_I4_C1_SRC_4']=='The child has run away from this placement more than once in the past, or is in runaway status at the time of the review.')?'checked':'' ?>  >The child has run away from this placement more than once in the past, or is in runaway status at the time of the review.<br>
                        <input type="checkbox" id="S2_I4_C1_5" name="S2_I4_C1[]" value="Other (describe reasons why the current placement is not stable):" <?php echo ($dataOUT['S2_I4_C1_SRC_5']=='Other (describe reasons why the current placement is not stable):')?'checked':'' ?> >Other (describe reasons why the current placement is not stable):
                        
                        <input type="text" id="S2_I4_C1_other" name="S2_I4_C1_other" class="textbox" value=" <?php $S2_I4_C1_other = isset($_POST['S2_I4_C1_other'])?$_POST['S2_I4_C1_other'] : $dataOUT['S2_I4_C1_other']; echo $S2_I4_C1_other ; ?> "><br>
                        </div>
                        <p>
                            <span style="font-size: 18pt;"><b>C. </b></span>
                            Is the child's current placement setting (or most recent placement if the child is no longer in foster care) stable?
                        </p>
                        <p>
                            <b>Questions 4C Instructions:</b>
                        </p> 
                        <p>
                            If any of the answers in C1 apply to the child's current placement, the answer to question C should be <b>No</b>.
                        </p>
                        <p>
                            Select the appropriate response:
                        </p>
                        <p class="answerStyle">
                            <b>Answer to Question 4C: </b>
                        </p>
                        <input type="radio" id="S2_I4_C_Y" name="S2_I4_C" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I4_C']=='Yes')?'checked':'' ?> ><label for="S2_I4_C_Y" style=" margin-right: 100px;">Yes</label>
                        <input type="radio" id="S2_I4_C_N" name="S2_I4_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I4_C']=='No')?'checked':'' ?>><label for="S2_I4_C_N" style=" margin-right: 100px;">No</label>
                        
                        
                        <p>
                            <b>
                                Item 4 Rating Criteria:
                            </b>
                        </p>

                        <p>
                            <b> Item 4 should be rated as a Strength if either of the following applies:</b>
                        </p>
                        <ul>
                            <li><b> The answer to question A is one (1), the answer to question B is Not Applicable, and the answer to question C is Yes.</b>
                            </li>

                            <li><b> The answer to question A is greater than one (1), but the answers to questions B and C are Yes.</b>
                            </li>
                        </ul>

                        <p>
                            <b>
                                Item 4 should be rated as an Area Needing Improvement if either of the following applies:
                            </b>
                        </p>
                        <ul>
                            <li><b> The answer to question A is one (1), but the answer to question C is No.</b>
                            </li>

                            <li><b> The answer to question A is greater than one (1), and the answer to either question B or C is No.</b>
                            </li>
                        </ul>

                        <p class="answerStyle">
                            <b>Item 4 Rating (select one): </b><input type="button" id="I4_BTN" name="I4_BTN" class="Btn"  value="Click to rate Item 4"> <div id="I4_BTN_MSG" style="color:red;"></div>
                        </p>
                        <input type="radio" id="S2_I4_R_S" name="S2_I4_R" class="uniformBtn" class="radio" value="Strength" <?php echo ($dataOUT['S2_I4_R']=='Strength')?'checked':'' ?>><label for="S2_I4_R_S" style="margin-right: 100px;">Strength</label>
                        <input type="radio" id="S2_I4_R_ANI" name="S2_I4_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I4_R']=='Area Needing Improvement')?'checked':'' ?> ><label for="S2_I4_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                        
                        <p>
                            <b>
                                Sources of information that informed rating:
                            </b>
                        </p>
                        <div id="S2_I4_R_CHECKBOX_MSG"></div>
                        <p>
                            <input type="checkbox" id="S2_I4_R_SRC_CF" name="S2_I4_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I4_R_SRC_1']=='case file')?'checked':'' ?>>case file<br>
                            <input type="checkbox" id="S2_I4_R_SRC_MI" name="S2_I4_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I4_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
                            <input type="checkbox" id="S2_I4_R_SRC_FI" name="S2_I4_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I4_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
                            <input type="checkbox" id="S2_I4_R_SRC_FPI" name="S2_I4_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I4_R_SRC_4']=='foster parent interview')?'checked':'' ?>>foster parent interview<br>
                            <input type="checkbox" id="S2_I4_R_SRC_CI" name="S2_I4_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I4_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
                            <input type="checkbox" id="S2_I4_R_SRC_CWI" name="S2_I4_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I4_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
                            <input type="checkbox" id="S2_I4_R_SRC_OI" name="S2_I4_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I4_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>
                        </p>
                        
                        <p>
                            Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                        </p>

                        <textarea style="height:150px; width: 100%;" name="S2_I4_R_EXP" id="S2_I4_R_EXP" class="explain" spellcheck="true">
                            <?php $S2_I4_R_EXP = isset($_POST['S2_I4_R_EXP'])?$_POST['S2_I4_R_EXP']:$dataOUT['S2_I4_R_EXP']; echo $S2_I4_R_EXP;?>
                        </textarea>
        
                    <!--    
                    <input type="submit" value="Submit" id="S2_I4_SUBMIT" class="uniformBtn" style="display: block;margin: auto; margin-top: 20px; font-size: 16pt;" /> 
                    -->
                        <div style="text-align: center;margin-top: 10px; font-size: 14pt; font-weight: bold;">
                        Name your file: <input type="text" name="O1_file_name" pattern="^F[CP]+[A-Za-z0-9_]{1,30}$" title="File name must start with FP or FC and followed by letters, numbers, or underscores, maximum lengh: 30 characters" >
                        </div>
      
                    <input type="submit" name="TEMP_SUBMIT" value="Submit" id="O1_I1_SUBMIT" class="Btn" style="display: block;margin: auto; margin-top: 20px; font-size: 14pt;" />           
                    <input type="submit" name="FINAL_SUBMIT" value="Final Submit and View Debriefing Report" class="Btn" style="display: block; margin: auto; margin-top: 10px; font-size: 14pt;"/>                      
        
                    
                        <div id="successI4" style="display: block; margin: auto; text-align:center;"></div>                        
                   
                </div>                
            </div> <!-- end of item 4 -->
            
            <h3>Item 5: Permanency Goal for Child</h3>
            <div>
                <h3>Step 1: Purpose of Assessment</h3>
                <div>
                    <p>To determine whether appropriate permanency goals were established for the child in a timely manner.
                    </p>
                </div>
                
                <h3>Step 2: Item 5 Applicable Cases</h3>
                <p>
                        All foster care cases are applicable for assessment of this item, unless the case has not been open long enough (less than 60 days) for the agency to have developed a case plan and established a permanency goal. If the case has been open for less than 60 days, but a permanency goal has been established, the case is applicable for assessment.
                </p>
                
                <h4>Is this case applicable?</h4>
                <p>
                    Select the appropriate response. If the response is No, rate the item as Not Applicable in the rating section and continue to item 6.
                </p>
                <!--
                <form method="post" id="S2_I5_Q_F">
                -->
                    <input type="radio" id="S2_I5_AC_Y" name="S2_I5_AC" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_AC']=='Yes')?'checked':'' ?>><label for="S2_I5_AC_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_AC_N" name="S2_I5_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_AC']=='No')?'checked':'' ?>><label for="S2_I5_AC_N" style=" margin-right: 100px;">No</label>
                
                    <p>
                        <span style="font-size: 18pt;"><b>A1. </b></span>
                        What is (are) the child's current permanency goal(s) (or if the case was closed during the period under review, what was the permanency goal before the case was closed)?
                    </p>

                    <p>
                        <b>Question 5A1 Instructions:</b>
                    </p>
                    <ul>
                        <li> Permanency goals include adoption, guardianship, reunification with parents, reunification with relatives, and other planned permanent living arrangements (OPPLA). A goal of OPPLA often will not be specified using that term in the case file. OPPLA refers to a situation in which the state maintains placement and care responsibility for the child, but places the child in a setting in which the child is expected to remain until adulthood, such as with foster parents who have made a commitment to care for the child permanently, with relatives who have made the same commitment, or with a residential care facility (for example, for children with developmental disabilities who require residential care).
                        </li>

                        <li> If no permanency goal is specified in the case file, ask the caseworker to identify the permanency goal the agency is working toward for the child. This goal should be entered for question A1.
                        </li>
                        
                        <li> If two concurrent permanency goals have been established and are identified in the case plan, identify both goals. Do not report concurrent goals in A1 unless both are identified in the case file.
                        </li>
                    </ul>

                    <p>
                        <b>Question 5A1 Instructions:</b>
                    </p>                       
                    <ul>
                        <li> If the response to question A is one (1), then the response to question B should be Not Applicable. If the single placement is not stable, that information will be collected in question C.
                        </li>

                        <li>If ALL placement changes during the period under review reflect planned agency efforts to achieve the child's case goals or meet the needs of the child, then the answer to question B should be Yes.
                        </li>
                            
                        <li> If any single placement change that occurred during the period under review was for a reason other than agency efforts to achieve case goals or to meet the child's needs, the answer to question B should be No.
                        </li>

                        <li>Placement changes that occur as a result of unexpected circumstances that are out of the control of the agency (such as the death of a foster parent or foster parents moving to another state) can be considered similar to those that reflect agency efforts to achieve case goals for purposes of question B.
                        </li>
                    </ul>  
                    
                    <p class="answerStyle"><b>Answer to Question 5A1:</b>
                    </p>
                     <p>
                        Permanency Goal 1: <!--<input type="text" id="S2_I5_A1_G1" name="S2_I5_A1_G1" value="" class="textbox"> -->
                        <select id="S2_I5_A1_G1" name="S2_I5_A1_G1" style="width:20%;">                   
                            <option value="" selected="selected" <?php echo ($dataOUT['S2_I5_A1_G1'] == "" ? "selected" : ""); ?> ></option>
                            <option value="adoption" <?php echo ($dataOUT['S2_I5_A1_G1'] == "adoption" ? "selected" : ""); ?> >adoption</option>
                            <option value="guardianship" <?php echo ($dataOUT['S2_I5_A1_G1'] == "guardianship" ? "selected" : ""); ?> >guardianship</option> 
                            <option value="reunification with parents" <?php echo ($dataOUT['S2_I5_A1_G1'] == "reunification with parents" ? "selected" : ""); ?> >reunification with parents</option> 
                            <option value="reunification with relatives" <?php echo ($dataOUT['S2_I5_A1_G1'] == "reunification with relatives" ? "selected" : ""); ?> >reunification with relatives</option>
                            <option value="other planned permanent living arrangements (OPPLA)" <?php echo ($dataOUT['S2_I5_A1_G1'] == "other planned permanent living arrangements (OPPLA)" ? "selected" : ""); ?> >other planned permanent living arrangements (OPPLA)</option>
                        </select> 
                        <br><br>
                        Permanency Goal 2 (if applicable): <!-- <input type="text" id="S2_I5_A1_G2" name="S2_I5_A1_G2" value="" class="textbox"> -->
                         <select id="S2_I5_A1_G2" name="S2_I5_A1_G2" style="width:20%;">                   
                            <option value="" <?php echo ($dataOUT['S2_I5_A1_G2'] == "" ? "selected" : ""); ?> ></option>
                            <option value="adoption" <?php echo ($dataOUT['S2_I5_A1_G2'] == "adoption" ? "selected" : ""); ?> >adoption</option>
                            <option value="guardianship" <?php echo ($dataOUT['S2_I5_A1_G2'] == "guardianship" ? "selected" : ""); ?> >guardianship</option> 
                            <option value="reunification with parents" <?php echo ($dataOUT['S2_I5_A1_G2'] == "reunification with parents" ? "selected" : ""); ?> >reunification with parents</option> 
                            <option value="reunification with relatives" <?php echo ($dataOUT['S2_I5_A1_G2'] == "reunification with relatives" ? "selected" : ""); ?> >reunification with relatives</option>
                            <option value="other planned permanent living arrangements (OPPLA)" <?php echo ($dataOUT['S2_I5_A1_G2'] == "other planned permanent living arrangements (OPPLA)" ? "selected" : ""); ?> >other planned permanent living arrangements (OPPLA)</option>
                        </select> 
                    </p>
                        
                    
                    <p>
                        <span style="font-size: 18pt;"><b>A2. </b></span>
                        Is (are) the child's permanency goal(s) specified in the case file?
                    </p>

                    <p>
                        <b>Question 5A2 Instructions:</b>
                    </p>
                    <ul>
                        <li> If the case has been opened less than 60 days and the goal is not specified in the case file, A2 should be answered NA.
                        </li>

                        <li> Permanency goals should be established in the case file. If the permanency goal is not specified anywhere in the case file, such as in the case plan or in a court order, then the answer to question A2 should be No.
                        </li>
                    </ul>
                    
                    <p>
                            Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5A2: </b>
                    </p>
                    <input type="radio" id="S2_I5_A2_Y" name="S2_I5_A2" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_A2']=='Yes')?'checked':'' ?> ><label for="S2_I5_A2_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_A2_N" name="S2_I5_A2" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_A2']=='No')?'checked':'' ?> ><label for="S2_I5_A2_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I5_A2_NA" name="S2_I5_A2" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I5_A2']=='NA')?'checked':'' ?> ><label for="S2_I5_A2_NA" style=" margin-right: 100px;">NA</label>
                        
                    <p>
                        <span style="font-size: 18pt;"><b>B. </b></span>
                        Were all permanency goals in effect during the period under review established in a timely manner?
                    </p>

                    <p>
                        <b>Question 5B Instructions:</b>
                    </p>
                    <ul>
                        <li> If the case has been opened less than 60 days, question B should be answered NA.
                        </li>

                        <li> Answer this question based on your professional judgment regarding the timeliness of establishing the goal, particularly with regard to changing a goal. For children who recently entered care, expect the first permanency goal to have been established no later than 60 days from the date of the child's entry into foster care, consistent with the federal requirement. For children whose goal was changed from reunification to adoption, consider the guidelines established by the federal Adoption and Safe Families Act (ASFA) regarding seeking termination of parental rights, which might affect the timeliness of changing a goal from reunification to adoption.
                        </li>
                        
                        <li> Answer this question for all permanency goals in effect during the period under review. If there are concurrent goals, the answer should apply to both goals. For example, if there are concurrent goals of reunification and adoption, and you believe that the reunification goal was established in a timely manner, but the adoption goal was not, the answer to question B should be No.
                        </li>
                    </ul>
                    
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5B: </b>
                    </p>
                    <input type="radio" id="S2_I5_B_Y" name="S2_I5_B" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_B']=='Yes')?'checked':'' ?> ><label for="S2_I5_B_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_B_N" name="S2_I5_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_B']=='No')?'checked':'' ?> ><label for="S2_I5_B_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I5_B_NA" name="S2_I5_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I5_B']=='NA')?'checked':'' ?> ><label for="S2_I5_B_NA" style=" margin-right: 100px;">NA</label>
                    
                    <p>
                        If No, explain any concerns in the narrative field below.
                    </p>
                    <textarea style="height:150px; width: 100%;" name="S2_I5_B_EXP" id="S2_I5_B_EXP" class="explain" spellcheck="true">
                        <?php $S2_I5_B_EXP = isset($_POST['S2_I5_B_EXP'])?$_POST['S2_I5_B_EXP']:$dataOUT['S2_I5_B_EXP']; echo $S2_I5_B_EXP;?>
                    </textarea>    
                    
                    <p>
                        <span style="font-size: 18pt;"><b>B1. </b></span>
                        Permanency Goal Table
                    </p>
                     <p>
                        <b>Table B1 Instructions:</b>
                    </p>
                    <p>
                        Complete the table below for each of the goals in place during the period under review. Begin with the child's first permanency goal in place during the period under review, and end with the current or latest permanency goal or goals identified in question A1.
                    </p>
                    
                    <table border="2" name="S2_I5_B1" style="margin: auto; width: 90%;">
				<caption><b>Permanency Goal Table</b></caption>
                                <tr>
                                    <th style="width: 10%; text-align: center;">Permanency Goal</th>
                                    <th style="width: 10%; text-align: center;">Date Established</th>
                                    <th style="width: 10%; text-align: center;">Time in Foster Care Before Goal Established</th>
                                    <th style="width: 10%; text-align: center;">Date Goal Changed</th>
                                    <th style="width: 10%; text-align: center;">Reason for Goal Change</th>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <select id="S2_I5_B1_R0_C0" name="S2_I5_B1_R0_C0" style="width:97%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I5_B1_R0_C0'] == "" ? "selected" : ""); ?> ></option>
                                            <option value="adoption" <?php echo ($dataOUT['S2_I5_B1_R0_C0'] == "adoption" ? "selected" : ""); ?> >adoption</option>
                                            <option value="guardianship" <?php echo ($dataOUT['S2_I5_B1_R0_C0'] == "guardianship" ? "selected" : ""); ?> >guardianship</option> 
                                            <option value="reunification with parents" <?php echo ($dataOUT['S2_I5_B1_R0_C0'] == "reunification with parents" ? "selected" : ""); ?> >reunification with parents</option> 
                                            <option value="reunification with relatives" <?php echo ($dataOUT['S2_I5_B1_R0_C0'] == "reunification with relatives" ? "selected" : ""); ?>  >reunification with relatives</option>
                                            <option value="other planned permanent living arrangements (OPPLA)" <?php echo ($dataOUT['S2_I5_B1_R0_C0'] == "other planned permanent living arrangements (OPPLA)" ? "selected" : ""); ?> >other planned permanent living arrangements (OPPLA)</option>
                                        </select> 
                                    </td>
                                    <td>
                                        <input name="S2_I5_B1_R0_C1" class="datepicker" type="text" style="width: 85%;" 
                                               value=" <?php $S2_I5_B1_R0_C1 = isset($_POST['S2_I5_B1_R0_C1'])?$_POST['S2_I5_B1_R0_C1'] : $dataOUT['S2_I5_B1_R0_C1']; echo $S2_I5_B1_R0_C1 ; ?> ">
                                    </td>
                                    <td><input name="S2_I5_B1_R0_C2" type="text" style="width: 97%;"
                                               value=" <?php $S2_I5_B1_R0_C2 = isset($_POST['S2_I5_B1_R0_C2'])?$_POST['S2_I5_B1_R0_C2'] : $dataOUT['S2_I5_B1_R0_C2']; echo $S2_I5_B1_R0_C2 ; ?> "></td>
                                    <td>
                                        <input name="S2_I5_B1_R0_C3" class="datepicker" type="text" style="width: 85%;"
                                               value=" <?php $S2_I5_B1_R0_C3 = isset($_POST['S2_I5_B1_R0_C3'])?$_POST['S2_I5_B1_R0_C3'] : $dataOUT['S2_I5_B1_R0_C3']; echo $S2_I5_B1_R0_C3 ; ?> ">
                                    </td>
                                    <td><input name="S2_I5_B1_R0_C4" type="text" style="width: 97%;"
                                               value=" <?php $S2_I5_B1_R0_C4 = isset($_POST['S2_I5_B1_R0_C4'])?$_POST['S2_I5_B1_R0_C4'] : $dataOUT['S2_I5_B1_R0_C4']; echo $S2_I5_B1_R0_C4 ; ?> "></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <select id="S2_I5_B1_R1_C0" name="S2_I5_B1_R1_C0" style="width:97%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I5_B1_R1_C0'] == "" ? "selected" : ""); ?> ></option>
                                            <option value="adoption" <?php echo ($dataOUT['S2_I5_B1_R1_C0'] == "adoption" ? "selected" : ""); ?> >adoption</option>
                                            <option value="guardianship" <?php echo ($dataOUT['S2_I5_B1_R1_C0'] == "guardianship" ? "selected" : ""); ?> >guardianship</option> 
                                            <option value="reunification with parents" <?php echo ($dataOUT['S2_I5_B1_R1_C0'] == "reunification with parents" ? "selected" : ""); ?> >reunification with parents</option> 
                                            <option value="reunification with relatives" <?php echo ($dataOUT['S2_I5_B1_R1_C0'] == "reunification with relatives" ? "selected" : ""); ?> >reunification with relatives</option>
                                            <option value="other planned permanent living arrangements (OPPLA)" <?php echo ($dataOUT['S2_I5_B1_R1_C0'] == "other planned permanent living arrangements (OPPLA)" ? "selected" : ""); ?> >other planned permanent living arrangements (OPPLA)</option>
                                        </select> 
                                    </td>
                                    <td>
                                        <input name="S2_I5_B1_R1_C1" class="datepicker" type="text" style="width: 85%;"
                                               value=" <?php $S2_I5_B1_R1_C1 = isset($_POST['S2_I5_B1_R1_C1'])?$_POST['S2_I5_B1_R1_C1'] : $dataOUT['S2_I5_B1_R1_C1']; echo $S2_I5_B1_R1_C1 ; ?> ">
                                    </td>
                                    <td><input name="S2_I5_B1_R1_C2" type="text" style="width: 97%;"
                                               value=" <?php $S2_I5_B1_R1_C2 = isset($_POST['S2_I5_B1_R1_C2'])?$_POST['S2_I5_B1_R1_C2'] : $dataOUT['S2_I5_B1_R1_C2']; echo $S2_I5_B1_R1_C2 ; ?> "></td>
                                    <td>
                                        <input name="S2_I5_B1_R1_C3" class="datepicker" type="text" style="width: 85%;"
                                               value=" <?php $S2_I5_B1_R1_C3 = isset($_POST['S2_I5_B1_R1_C3'])?$_POST['S2_I5_B1_R1_C3'] : $dataOUT['S2_I5_B1_R1_C3']; echo $S2_I5_B1_R1_C3 ; ?> ">
                                    </td>
                                    <td><input name="S2_I5_B1_R1_C4" type="text" style="width: 97%;"
                                               value=" <?php $S2_I5_B1_R1_C4 = isset($_POST['S2_I5_B1_R1_C4'])?$_POST['S2_I5_B1_R1_C4'] : $dataOUT['S2_I5_B1_R1_C4']; echo $S2_I5_B1_R1_C4 ; ?> "></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <select id="S2_I5_B1_R2_C00" name="S2_I5_B1_R2_C0" style="width:97%;">                   
                                            <option value="" <?php echo ($dataOUT['S2_I5_B1_R2_C0'] == "" ? "selected" : ""); ?> ></option>
                                            <option value="adoption" <?php echo ($dataOUT['S2_I5_B1_R2_C0'] == "adoption" ? "selected" : ""); ?> >adoption</option>
                                            <option value="guardianship" <?php echo ($dataOUT['S2_I5_B1_R2_C0'] == "guardianship" ? "selected" : ""); ?> >guardianship</option> 
                                            <option value="reunification with parents" <?php echo ($dataOUT['S2_I5_B1_R2_C0'] == "reunification with parents" ? "selected" : ""); ?> >reunification with parents</option> 
                                            <option value="reunification with relatives" <?php echo ($dataOUT['S2_I5_B1_R2_C0'] == "reunification with relatives" ? "selected" : ""); ?> >reunification with relatives</option>
                                            <option value="other planned permanent living arrangements (OPPLA)" <?php echo ($dataOUT['S2_I5_B1_R2_C0'] == "other planned permanent living arrangements (OPPLA)" ? "selected" : ""); ?> >other planned permanent living arrangements (OPPLA)</option>
                                        </select>
                                    </td>
                                    <td>
                                         <input name="S2_I5_B1_R2_C1" class="datepicker" type="text" style="width: 85%;"
                                                value=" <?php $S2_I5_B1_R2_C1 = isset($_POST['S2_I5_B1_R2_C1'])?$_POST['S2_I5_B1_R2_C1'] : $dataOUT['S2_I5_B1_R2_C1']; echo $S2_I5_B1_R2_C1 ; ?> ">
                                    </td>
                                    <td><input name="S2_I5_B1_R2_C2" type="text" style="width: 97%;"
                                               value=" <?php $S2_I5_B1_R2_C2 = isset($_POST['S2_I5_B1_R2_C2'])?$_POST['S2_I5_B1_R2_C2'] : $dataOUT['S2_I5_B1_R2_C2']; echo $S2_I5_B1_R2_C2 ; ?> "></td>
                                    <td>
                                        <input name="S2_I5_B1_R2_C3" class="datepicker" type="text" style="width: 85%;"
                                               value=" <?php $S2_I5_B1_R2_C3 = isset($_POST['S2_I5_B1_R2_C3'])?$_POST['S2_I5_B1_R2_C3'] : $dataOUT['S2_I5_B1_R2_C3']; echo $S2_I5_B1_R2_C3 ; ?> ">
                                    </td>
                                    <td><input name="S2_I5_B1_R2_C4" type="text" style="width: 97%;"
                                               value=" <?php $S2_I5_B1_R2_C4 = isset($_POST['S2_I5_B1_R2_C4'])?$_POST['S2_I5_B1_R2_C4'] : $dataOUT['S2_I5_B1_R2_C4']; echo $S2_I5_B1_R2_C4 ; ?> "></td>
                                </tr>                                                         
                    </table>
                    
                    <p>
                        <span style="font-size: 18pt;"><b>C. </b></span>
                        Were all permanency goals in effect during the period under review appropriate to the child's needs for permanency and to the circumstances of the case?
                    </p>
                    <p>
                        <b>Question 5C Instructions:</b>
                    </p>
                    <ul>
                        <li> Answer this question based on their professional judgment regarding the appropriateness of the permanency goal.
                        </li>

                        <li> Consider the factors that the agency considered in deciding on the permanency goal and whether all of the relevant factors were evaluated.
                        </li>
                        
                        <li> If one of the goals is other planned permanent living arrangement and the reviewer determines that the goal was established without a thorough consideration of other permanency goals, then the answer to question C should be No.
                        </li>
                    </ul>
                    
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5C: </b>
                    </p>
                    <input type="radio" id="S2_I5_C_Y" name="S2_I5_C" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_C']=='Yes')?'checked':'' ?>><label for="S2_I5_C_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_C_N" name="S2_I5_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_C']=='No')?'checked':'' ?>><label for="S2_I5_C_N" style=" margin-right: 100px;">No</label>
                    
                    <p>
                        If No, explain any concerns in the narrative field below.
                    </p>
                    <textarea style="height:150px; width: 100%;" name="S2_I5_C_EXP" id="S2_I5_C_EXP" class="explain" spellcheck="true">
                        <?php $S2_I5_C_EXP = isset($_POST['S2_I5_C_EXP'])?$_POST['S2_I5_C_EXP']:$dataOUT['S2_I5_C_EXP']; echo $S2_I5_C_EXP;?>
                    </textarea>   
                    
                    <p>
                        <span style="font-size: 18pt;"><b>D. </b></span>
                        Has the child been in foster care for at least 15 of the most recent 22 months?
                    </p>
                    <p>
                        <b>Question 5D Instructions:</b>
                    </p>
                    <ul>
                        <li> In answering question D, begin the "count" with the date of the judicial finding of child abuse and neglect (usually the adjudicatory hearing) or 60 days after the child's entry into foster care, whichever is earlier.
                        </li>
                    </ul>
                    
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5D: </b>
                    </p>
                    <input type="radio" id="S2_I5_D_Y" name="S2_I5_D" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_D']=='Yes')?'checked':'' ?>><label for="S2_I5_D_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_D_N" name="S2_I5_D" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_D']=='No')?'checked':'' ?>><label for="S2_I5_D_N" style=" margin-right: 100px;">No</label>
                    
                    
                    <p>
                        <span style="font-size: 18pt;"><b>E. </b></span>
                        Does the child meet other ASFA criteria for termination of parental rights (TPR)?
                    </p>
                    <p>
                        <b>Question 5E Definitions:</b>
                    </p>
                    <ul>
                        <li> ASFA requires an agency to seek TPR under the following circumstances:<br>
                            - The child has been in care for at least 15 of the most recent 22 months, or a court of competent jurisdiction has determined that:
                            <ul>
                                <li>The child is an abandoned infant, or
                                </li>
                                <li>
                                    The child's parents have been convicted of one of the felonies designated in Section 475(5)(E) of the Social Security Act: (1) committed murder of another child of the parent; (2) committed voluntary manslaughter of another child of the parent; (3) aided or abetted, attempted, conspired, or solicited to commit such a murder or such a voluntary manslaughter; or (4) committed a felony assault that resulted in serious bodily injury to the child or another child of the parent.
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                    <p>
                        <b>Question 5E Instructions:</b>
                    </p>
                    <ul>
                        <li> If the answer to question D is Yes, the answer to question E should be Not Applicable.
                        </li>
                        
                        <li> Question E must be answered if the answer to question D is No.
                        </li>
                        
                        <li> If any of the conditions noted above apply to the case under review, question E should be answered Yes.
                        </li>
                    </ul>
                    
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5E: </b>
                    </p>
                    <input type="radio" id="S2_I5_E_Y" name="S2_I5_E" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_E']=='Yes')?'checked':'' ?>><label for="S2_I5_E_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_E_N" name="S2_I5_E" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_E']=='No')?'checked':'' ?> ><label for="S2_I5_E_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I5_E_NA" name="S2_I5_E" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I5_E']=='NA')?'checked':'' ?> ><label for="S2_I5_E_NA" style=" margin-right: 100px;">NA</label>
                    
                    
                    <p>
                        <span style="font-size: 18pt;"><b>F. </b></span>
                        Did the agency file or join a TPR petition before the period under review or in a timely manner during the period under review?
                    </p>
                    <p>
                        <b>Question 5F Instructions:</b>
                    </p>
                    <ul>
                        <li> If the answers to both questions D and E are No, the answer to question F should be Not Applicable.
                        </li>
                        
                        <li> Review the case file for evidence of petitioning for TPR. If there is no evidence of this in the file, then ask the caseworker for documentation regarding petitioning for TPR. If there is no evidence in the file or other documentation, then question F should be answered No.
                        </li>
                    </ul>
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5F: </b>
                    </p>
                    <input type="radio" id="S2_I5_F_Y" name="S2_I5_F" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_F']=='Yes')?'checked':'' ?> ><label for="S2_I5_F_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_F_N" name="S2_I5_F" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_F']=='No')?'checked':'' ?> ><label for="S2_I5_F_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I5_F_NA" name="S2_I5_F" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I5_F']=='NA')?'checked':'' ?> ><label for="S2_I5_F_NA" style=" margin-right: 100px;">NA</label>
                    
                    
                    <p>
                        <span style="font-size: 18pt;"><b>G1. </b></span>
                        Indicate if any of the following exceptions to the TPR requirement apply.
                    </p>
                    <p>
                        <b>Question 5G1 Instructions:</b>
                    </p>
                    <ul>
                        <li> If the answer to question F is Yes or Not Applicable, then question G1 should be answered Not Applicable.
                        </li>
                    </ul>
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 5G1: </b>
                    </p>
                    <input type="radio" id="S2_I5_G1_NA" name="S2_I5_G1_NA" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I5_G1_NA']=='NA')?'checked':'' ?> ><label for="S2_I5_G1_NA" style=" margin-right: 100px;">NA</label>
                    
                    <p>
                        (1) At the option of the state, the child is being cared for by a relative at the 15/22-month time frame.
                    </p>                    
                    <input type="radio" id="S2_I5_G1_1_Y" name="S2_I5_G1_1" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_G1_1']=='NA')?'checked':'' ?> ><label for="S2_I5_G1_1_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_G1_1_N" name="S2_I5_G1_1" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_G1_1']=='No')?'checked':'' ?> ><label for="S2_I5_G1_1_N" style=" margin-right: 100px;">No</label>
                    
                    <p>
                        (2) The agency documented in the case plan a compelling reason for determining that TPR would not be in the best interests of the child.
                    </p>                    
                    <input type="radio" id="S2_I5_G1_2_Y" name="S2_I5_G1_2" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_G1_2']=='Yes')?'checked':'' ?>  ><label for="S2_I5_G1_2_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_G1_2_N" name="S2_I5_G1_2" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_G1_2']=='No')?'checked':'' ?>  ><label for="S2_I5_G1_2_N" style=" margin-right: 100px;">No</label>
                    
                    
                    <p>
                       (3) The state has not provided to the family the services that the state deemed necessary for the safe return of the child to the child's home.
                    </p>                    
                    <input type="radio" id="S2_I5_G1_3_Y" name="S2_I5_G1_3" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_G1_3']=='Yes')?'checked':'' ?> ><label for="S2_I5_G1_3_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_G1_3_N" name="S2_I5_G1_3" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_G1_3']=='No')?'checked':'' ?> ><label for="S2_I5_G1_3_N" style=" margin-right: 100px;">No</label>
                    
                    
                    <p>
                        <span style="font-size: 18pt;"><b>G. </b></span>
                        Did an exception exist to not file or join a TPR petition?
                    </p>
                    <p>
                        <b>Question 5G Instructions:</b>
                    </p>
                    <ul>
                        <li> If the answer to question F is Yes or Not Applicable, then question G should be answered Not Applicable.
                        </li>
                        
                        <li> If, during an interview, the caseworker provides a compelling reason for not seeking TPR, but cannot provide any documentation, then question G should be answered No.
                        </li>
                        
                        <li> If any answers to G1 are yes, question G should be answered Yes.
                        </li>
                    </ul>
                    
                    <p class="answerStyle">
                        <b>Answer to Question 5G: </b>
                    </p>
                    <input type="radio" id="S2_I5_G_Y" name="S2_I5_G" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I5_G']=='Yes')?'checked':'' ?> ><label for="S2_I5_G_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I5_G_N" name="S2_I5_G" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I5_G']=='No')?'checked':'' ?> ><label for="S2_I5_G_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I5_G_NA" name="S2_I5_G" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I5_G']=='NA')?'checked':'' ?> ><label for="S2_I5_G_NA" style=" margin-right: 100px;">NA</label>
                    
                    
                    <p id="I5_Rating">
                        <b>
                            Item 5 Rating Criteria:
                        </b>
                    </p>

                    <p>
                        <b> Item 5 should be rated as a Strength if any one of the following criteria apply:</b>
                    </p>
                    <ul>
                        <li><b> The answers to questions A2, B, and C are Yes or NA, and the answers to questions D and E are No.</b>
                        </li>

                        <li><b> The answers to questions A2, B, and C are Yes or NA, and D and F are Yes.</b>
                        </li>
                        
                        <li><b> The answers to questions A2, B, and C are Yes or NA, the answer to question D is No, and the answers to questions E and F are Yes.</b>
                        </li>

                        <li><b> The answers to questions A2, B, and C are Yes or NA, the answer to question D or E is Yes, the answer to question F is No, and the answer to question G is Yes.</b>
                        </li>
                    </ul>

                    <p>
                        <b>
                           Item 5 should be rated as an Area Needing Improvement if any of the following apply:
                        </b>
                    </p>
                    <ul>
                        <li><b> The answer to question A2, B, or C is No.</b>
                        </li>

                        <li><b> The answers to questions A2, B, and C are Yes or NA, but the answer to question D or E is Yes, and the answers to questions F and G are No.</b>
                        </li>
                    </ul>
                    
                    <p>
                        <b>Item 5 should be rated as Not Applicable if the response to the question of applicability is No.</b>
                    </p>

                    <p class="answerStyle">
                        <b>Item 5 Rating (select one):  </b><input type="button" id="I5_BTN" name="I5_BTN" class="Btn"  value="Click to rate Item 5"> <div id="I5_BTN_MSG" style="color:red;"></div>
                    </p>
                    <input type="radio" id="S2_I5_R_S" name="S2_I5_R" class="uniformBtn" class="radio" value="Strength" <?php echo ($dataOUT['S2_I5_R']=='Strength')?'checked':'' ?> ><label for="S2_I5_R_S" style="margin-right: 100px;">Strength</label>
                    <input type="radio" id="S2_I5_R_ANI" name="S2_I5_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I5_R']=='Area Needing Improvement')?'checked':'' ?> ><label for="S2_I5_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                    <input type="radio" id="S2_I5_R_NA" name="S2_I5_R" class="uniformBtn" class="radio" value="Not Applicable" <?php echo ($dataOUT['S2_I5_R']=='Not Applicable')?'checked':'' ?> ><label for="S2_I5_R_NA" style="margin-right: 100px;">NA</label>
                        
                    <p>
                        <b>
                           Sources of information that informed rating:
                        </b>
                    </p>
                    <div id="S2_I5_R_CHECKBOX_MSG"></div>
                    <p>
                        <input type="checkbox" id="S2_I5_R_SRC_CF" name="S2_I5_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I5_R_SRC_1']=='case file')?'checked':'' ?>>case file<br>
                        <input type="checkbox" id="S2_I5_R_SRC_MI" name="S2_I5_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I5_R_SRC_2']=='mother interview')?'checked':'' ?> >mother interview<br>
                        <input type="checkbox" id="S2_I5_R_SRC_FI" name="S2_I5_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I5_R_SRC_3']=='father interview')?'checked':'' ?> >father interview<br>
                        <input type="checkbox" id="S2_I5_R_SRC_FPI" name="S2_I5_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I5_R_SRC_4']=='foster parent interview')?'checked':'' ?> >foster parent interview<br>
                        <input type="checkbox" id="S2_I5_R_SRC_CI" name="S2_I5_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I5_R_SRC_5']=='child interview')?'checked':'' ?> >child interview<br>
                        <input type="checkbox" id="S2_I5_R_SRC_CWI" name="S2_I5_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I5_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?> >caseworker/supervisor interview<br>
                        <input type="checkbox" id="S2_I5_R_SRC_OI" name="S2_I5_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I5_R_SRC_7']=='other interview')?'checked':'' ?> >other interview<br>
                    </p>
                        
                    <p>
                        Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                    </p>

                    <textarea style="height:150px; width: 100%;" name="S2_I5_R_EXP" id="S2_I5_R_EXP" class="explain" spellcheck="true">
                         <?php $S2_I5_R_EXP = isset($_POST['S2_I5_R_EXP'])?$_POST['S2_I5_R_EXP']:$dataOUT['S2_I5_R_EXP']; echo $S2_I5_R_EXP;?>
                    </textarea>
                   <!--
                    <input type="submit" value="Submit" id="S2_I5_SUBMIT" class="uniformBtn" style="display: block;margin: auto; margin-top: 20px; font-size: 16pt;" />
                   -->
                    <div id="successI5" style="display: block; margin: auto; text-align:center;"></div>                   
            </div> <!-- end of item 5 -->
             
              
            <h3>Item 6: Achieving Reunification, Guardianship, Adoption, or Other Planned Permanent Living Arrangement</h3>
            <div>
                <h3>Step 1: Purpose of Assessment</h3>
                <div>
                    <p>To determine whether concerted efforts were made, or are being made, during the period under review, to achieve reunification, guardianship, adoption, or other planned permanent living arrangement.
                    </p>
                </div>
                
                <h3>Step 2: Item 6 Applicable Cases</h3>
                <p>
                    All foster care cases are applicable for this item.
                </p>
                
                <p>
                    <span style="font-size: 18pt;"><b>A1. </b></span>
                    What is/are the child's current (or most recent) permanency goals?
                </p>
                <p>
                    <b>Question 6A1 Definitions:</b>
                </p>
                <ul>
                    <li> A goal of reunification is defined as a plan for the child to be discharged from foster care to his or her parents or primary caretaker.
                    </li>
                        
                    <li> A goal of guardianship is defined as a plan for the child to be discharged from foster care to a legally established custody arrangement with an individual that is intended to be permanent.
                    </li>
                        
                    <li> A goal of adoption is defined as a plan for the child to be discharged from foster care to the care and custody of adoptive parents through a legal adoption.
                    </li>
                    
                    <li> A goal of Other Planned Permanent Living Arrangement (OPPLA) refers to a situation in which the agency maintains placement and care responsibility for and supervision of the child, and places the child in a setting in which the child is expected to remain until adulthood. Examples of these "permanent" living arrangements include situations where foster parents have made a formal commitment to care for the child until adulthood, the child is with relatives who plan to care for the child until adulthood, the child is in a long-term care facility to meet special needs and will be transferred to an adult facility at the appropriate time, the child is an older adolescent in a stable group home and both the group home directors and the child have agreed that it will be the child’s placement until adulthood, or the child is in agency-supervised transitional living.
                    </li>
                </ul>
                <p>
                    <b>Question 6A1 Instructions:</b>
                </p>
                <p>
                    Select the appropriate response to identify the child's current (or most recent) permanency goal. If concurrent goals were noted in item 5, select the response for that goal as well.
                </p>
                 <p class="answerStyle">
                        <b>Answer to Question 6A1: </b>  
                    </p>
               
                    <input type="radio" id="S2_I6_A1_RU" name="S2_I6_A1" class="uniformBtn" class="radio" value="Reunification" <?php echo ($dataOUT['S2_I6_A1']=='Reunification')?'checked':'' ?>><label for="S2_I6_A1_RU" style="margin-right: 100px;">Reunification</label>
                    <input type="radio" id="S2_I6_A1_GD" name="S2_I6_A1" class="uniformBtn" class="radio" value="Guardianship" <?php echo ($dataOUT['S2_I6_A1']=='Guardianship')?'checked':'' ?> ><label for="S2_I6_A1_GD" style="margin-right: 100px;">Guardianship</label>
                    <input type="radio" id="S2_I6_A1_AD" name="S2_I6_A1" class="uniformBtn" class="radio" value="Adoption" <?php echo ($dataOUT['S2_I6_A1']=='Adoption')?'checked':'' ?> ><label for="S2_I6_A1_AD" style="margin-right: 100px;">Adoption</label>
                    <input type="radio" id="S2_I6_A1_OP" name="S2_I6_A1" class="uniformBtn" class="radio" value="OPPLA" <?php echo ($dataOUT['S2_I6_A1']=='OPPLA')?'checked':'' ?> ><label for="S2_I6_A1_OP" style="margin-right: 100px;">OPPLA</label>
                    
                    <p>
                        <span style="font-size: 18pt;"><b>A2. </b></span>
                        If the child's current (or most recent) permanency goal is OPPLA, what is (was) the child's permanent living arrangement?
                    </p>
                    <p>
                        <b>Question 6A2 Instructions:</b>
                    </p>
                    <p>
                        If the child's current (or most recent) permanency goal was not OPPLA, select Not Applicable. If the child's current (or most recent) permanency plan is OPPLA, select the appropriate response that describes the permanent living arrangement for the child.
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 6A2:</b>
                    </p>
                    <input type="radio" id="S2_I6_A2_NA" name="S2_I6_A2" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I6_A2']=='NA')?'checked':'' ?>><label for="S2_I6_A2_NA" style=" margin-right: 100px;">NA</label>
                    <br><br>
                    <input type="radio" id="S2_I6_A2_REF" name="S2_I6_A2" class="uniformBtn" class="radio" value="Placement with a non-relative foster parent until age of majority or extended age" <?php echo ($dataOUT['S2_I6_A2']=='Placement with a non-relative foster parent until age of majority or extended age')?'checked':'' ?> ><label for="S2_I6_A2_REF" style=" margin-right: 100px;">Placement with a non-relative foster parent until age of majority or extended age</label>
                    <br><br>
                    <input type="radio" id="S2_I6_A2_SRF" name="S2_I6_A2" class="uniformBtn" class="radio" value="Placement with a specified relative in foster care until age of majority or extended age" <?php echo ($dataOUT['S2_I6_A2']=='Placement with a specified relative in foster care until age of majority or extended age')?'checked':'' ?> ><label for="S2_I6_A2_SRF" style=" margin-right: 100px;">Placement with a specified relative in foster care until age of majority or extended age</label>
                    <br><br>
                    <input type="radio" id="S2_I6_A2_LTF" name="S2_I6_A2" class="uniformBtn" class="radio" value="Placement in a longer-term facility until transition to an adult care facility" <?php echo ($dataOUT['S2_I6_A2']=='Placement in a longer-term facility until transition to an adult care facility')?'checked':'' ?> ><label for="S2_I6_A2_LTF" style=" margin-right: 100px;">Placement in a longer-term facility until transition to an adult care facility</label>
                    <br><br>
                    <input type="radio" id="S2_I6_A2_ILP" name="S2_I6_A2" class="uniformBtn" class="radio" value="Placement in an independent living program/supervised independent living until age of majority or extended age" <?php echo ($dataOUT['S2_I6_A2']=='Placement in an independent living program/supervised independent living until age of majority or extended age')?'checked':'' ?> ><label for="S2_I6_A2_ILP" style=" margin-right: 100px;">Placement in an independent living program/supervised independent living until age of majority or extended age</label>
                    <br><br>
                    <input type="radio" id="S2_I6_A2_OTHER" name="S2_I6_A2" class="uniformBtn" class="radio" value="Other" 
                           <?php echo ($dataOUT['S2_I6_A2']=='Other')?'checked':'' ?>><label for="S2_I6_A2_OTHER" style=" margin-right: 100px;">Other (If the child does not have a permanent living arrangement specified, OR if the child has an arrangement that does not fit any of the options above, OR if the goal is noted as "emancipation/independent living" without a permanent placement specified, indicate that below):</label>
                    <br><br>
                    <input type="text" id="S2_I6_A2_OTHER_EXP" name="S2_I6_A2_OTHER_EXP" class="textbox" style="width: 80%;" spellcheck="true" 
                           value=" <?php $S2_I6_A2_OTHER_EXP = isset($_POST['S2_I6_A2_OTHER_EXP'])?$_POST['S2_I6_A2_OTHER_EXP'] : $dataOUT['S2_I6_A2_OTHER_EXP']; echo $S2_I6_A2_OTHER_EXP ; ?> "><br>
                    
                    
                    <p>
                        <span style="font-size: 18pt;"><b>A3. </b></span>
                        What is the date of the child's most recent entry into foster care?
                    </p>
                    <p>
                        <b>Question 6A3 Definition:</b>
                    </p>
                    <p>
                        "Entry into foster care" refers to a child's removal from his or her normal place of residence and placement in a substitute care setting under the placement and care responsibility of the state or local title IV-B/IV-E agency. Children are considered to have entered foster care if the child has been in substitute care for 24 hours or more.
                    </p>
               
                    <p>
                        <b>Question 6A3 Instruction:</b>
                    </p>
                    <p>
                        Using MM/DD/YYYY format, enter the date of the child's most recent entry into foster care. This date should be the same as the date provided in section J on the Face Sheet.
                    </p>
                    <p>
                        Enter the appropriate response:
                    </p>
                    <p class="answerStyle">
			<b>Answer to Question 6A3: &nbsp;&nbsp;
			</b>
                        <input name="S2_I6_A3" class="datepicker" type="text" style="width: 15%;" 
                               value=" <?php $S2_I6_A3 = isset($_POST['S2_I6_A3'])?$_POST['S2_I6_A3'] : $dataOUT['S2_I6_A3']; echo $S2_I6_A3 ; ?> ">
			<!--
                        <input type="text" name="S2_I6_A3_MM"  id="S2_I6_A3_MM" size="10" />&nbsp;/&nbsp;
                        <input type="text" name="S2_I6_A3_DD" id="S2_I6_A3_DD" size="10" />&nbsp;/&nbsp;
                        <input type="text" name="S2_I6_A3_YYYY" id="S2_I6_A3_YY" size="10" />
                        -->
                    </p>
                    
                     <p>
                        <span style="font-size: 18pt;"><b>A4. </b></span>
                        What is the time in care (in months) at the time of the onsite review?
                    </p>
                    <p>
                        <b>Question 6A4 Instruction:</b>
                    </p>
                    <p>
                        Enter the number of months that the child was in foster care, from the date of the most recent entry into foster care to the beginning of the onsite review week or from the date of the most recent entry into foster care to the time of discharge.
                    </p>
                    <p>
                        Enter the appropriate response:
                    </p>                    
                    <p class="answerStyle"><b>Answer to Question 6A4:
                            <input type="text" id="S2_I6_A4" name="S2_I6_A4" class="textbox" pattern="^\s*$|([0-9\s*$]{1,3})" title="Only numbers allowed, maximum length: 3 digits" 
                                    value=" <?php $S2_I6_A4 = isset($_POST['S2_I6_A4'])?trim($_POST['S2_I6_A4']) : trim($dataOUT['S2_I6_A4']); echo $S2_I6_A4 ; ?> "></b>
                    </p>
                    
                    <p>
                        <span style="font-size: 18pt;"><b>A5. </b></span>
                        For a child with a goal of OPPLA, what is the date of documentation regarding "permanency" of the child's living arrangements?
                    </p>
                    <p>
                        <b>Question 6A5 Definition:</b>
                    </p>
                    <p>
                        The date of documentation regarding "permanency" is the date on which there was a court order, signed agreement, or other method to formalize that the caretaker of a particular facility would provide care for this child until the child reaches adulthood.
                    </p>
                    <p>
                        <b>Question 6A5 Instruction:</b>
                    </p>
                    <p>
                        Using the MM/DD/YYYY format, enter the date of documentation regarding "permanency." If the child's permanency goal is not OPPLA, select Not Applicable.
                    </p>
                    <p>
                        Select or enter the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 6A5: &nbsp;&nbsp;</b>
                        
                        <input type="radio" id="S2_I6_A5_NA" name="S2_I6_A5_NA" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I6_A5_NA']=='NA')?'checked':'' ?>><label for="S2_I6_A5_NA" style="widht: 30px; margin-right: 100px;">NA</label>
                        <input name="S2_I6_A5" class="datepicker" type="text" style="width: 15%;" 
                                value=" <?php $S2_I6_A5 = isset($_POST['S2_I6_A5'])?$_POST['S2_I6_A5'] : $dataOUT['S2_I6_A5']; echo $S2_I6_A5 ; ?> ">
                        <!--
                        <input type="text" name="S2_I6_A5_MM" id="S2_I6_A5_MM" size="10"/>&nbsp;/&nbsp;
                        <input type="text" name="S2_I6_A5_DD" id="S2_I6_A5_DD" size="10"/>&nbsp;/&nbsp;
                        <input type="text" name="S2_I6_A5_YYYY" id="S2_I6_A5_YY" size="10"/>&nbsp;&nbsp;
                        -->
                    </p>
                    
                    <p>
                        <span style="font-size: 18pt;"><b>A6.</b></span>
                        What is the date the child discharged from foster care?
                    </p>
                    <p>
                        <b>Question 6A6 Definition:</b>
                    </p>
                    <p>
                        "Discharge from foster care" is defined as the point when the child is no longer in foster care under the care and placement responsibility or supervision of the agency. If a child returns home on a trial home visit and the agency retains responsibility or supervision of the child, the child is not considered discharged from foster care unless the trial home visit is longer than 6 months and there was no court order extending the trial home visit beyond 6 months.
                    </p>
                    <p>
                        <b>Question 6A6 Instructions:</b>
                    </p>
                    <p>
                        Using the MM/DD/YYYY format, enter the date the child discharged from foster care. This date should be the same as the date provided in section K on the Face Sheet. If the child was not discharged, select the NA box.
                    </p>
                    <p>
                        Select or enter the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 6A6: &nbsp;&nbsp;</b>
                        
                        <input type="radio" id="S2_I6_A6_NA" name="S2_I6_A6_NA" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I6_A6_NA']=='NA')?'checked':'' ?>><label for="S2_I6_A6_NA" style="widht: 30px; margin-right: 100px;">NA</label>
                        <input name="S2_I6_A6" class="datepicker" type="text" style="width: 15%;" 
                               value=" <?php $S2_I6_A6 = isset($_POST['S2_I6_A6'])?$_POST['S2_I6_A6'] : $dataOUT['S2_I6_A6']; echo $S2_I6_A6 ; ?> ">
                        <!--
                        <input type="text" name="S2_I6_A6_MM" id="S2_I6_A6_MM" size="10"/>&nbsp;/&nbsp;
                        <input type="text" name="S2_I6_A6_DD" id="S2_I6_A6_DD" size="10"/>&nbsp;/&nbsp;
                        <input type="text" name="S2_I6_A6_YYYY" id="S2_I6_A6_YY" size="10"/>&nbsp;&nbsp;
                        -->
                    </p>
                    
                    <p>
                        <span style="font-size: 18pt;"><b>B.</b></span>
                        During the period under review, did the agency and court make concerted efforts to achieve permanency in a timely manner?
                    </p>
                    <p>
                        <b>Question 6B Instructions:</b>
                    </p>
                    <ul>
                        <li> Question B should be answered NA if the only goal for the child is OPPLA.
                        </li>
                        
                        <li> In determining a response to question B, consider the time the child has been in foster care as well as agency and court efforts. The following time frames for achievement should be considered for each goal:
                            <br>Reunification: 12 months
                            <br>Guardianship: 18 months
                            <br>Adoption: 24 months
                        </li>
                        
                        <li> If concurrent goals are in place and one of the goals has been, or will likely be, achieved in a timely manner, answer question B based on the goal that has been or will be achieved. If concurrent goals are in place but permanency will not be achieved in a timely manner, answer question B No and indicate in the documentation specific barriers to implementing concurrent planning.
                        </li>
                    
                        <li> If the child has been in foster care for more than the suggested time frame (12, 18 or 24 months depending on the goal) and the goal has not yet been achieved, then the answer to question B should be No, unless there are particular circumstances that justify the delay. For example:
                            <br> - The permanency goal of reunification has been in place for longer than 12 months, but the child was physically returned to the parents during or before the 12<sup>th</sup> month and remained at home on a trial home visit beyond the 12<sup>th</sup> month. If you determine that the length of time that the child spent in out-of-home care and on the trial home visit was reasonable given the child and family circumstances, then the item may be rated as a Strength even though the child was not discharged from foster care until after the 12<sup>th</sup> month.
                             <br> - The permanency goal of adoption has been in place for longer than 24 months but there is evidence that the agency has made concerted efforts to find an adoptive home for a child with special needs although an appropriate family has not yet been found, or a pre-adoptive placement disrupted despite concerted efforts on the part of the agency to support it.
                        </li>
                        
                        <li> If you determine that the agency and court could have achieved the permanency goal before the suggested time frame, but there was a delay due to lack of concerted efforts on the part of the agency or court, then the answer to question B should be No even if the child achieved the goal within the suggested time frame.
                        </li>
                    </ul>
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 6B: </b>
                    </p>
                    <input type="radio" id="S2_I6_B_Y" name="S2_I6_B" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I6_B']=='Yes')?'checked':'' ?>><label for="S2_I6_B_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I6_B_N" name="S2_I6_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I6_B']=='No')?'checked':'' ?> ><label for="S2_I6_B_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I6_B_NA" name="S2_I6_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I6_B']=='NA')?'checked':'' ?> ><label for="S2_I6_B_NA" style=" margin-right: 100px;">NA</label>
                     <p>
                        If No, explain any concerns in the narrative field below:
                     </p>

                    <textarea style="height:150px; width: 100%;" name="S2_I6_B_EXP" id="S2_I6_B_EXP" class="explain" spellcheck="true">
                         <?php $S2_I6_B_EXP = isset($_POST['S2_I6_B_EXP'])?$_POST['S2_I6_B_EXP']:$dataOUT['S2_I6_B_EXP']; echo $S2_I6_B_EXP;?>
                    </textarea>
                    
                    <p>
                        <span style="font-size: 18pt;"><b>C.</b></span>
                        During the period under review, did the agency and court make concerted efforts to place the child in a living arrangement that can be considered permanent until discharge from foster care?
                    </p>
                    <p>
                        <b>Question 6C Instructions:</b>
                    </p>
                    <ul>
                        <li> Question C is answered NA if the child’s only goal is reunification, guardianship or adoption.
                        </li>
                        
                        <li> In answering question C, consider the child's current living arrangement and whether formal steps were completed to make this arrangement permanent. For example, if the child is in a shelter or living with foster parents without a formal permanent foster care agreement, then the answer to question C would be No. A formal agreement would include a signed agreement, a court order, or other method the state uses to formalize the agreement.
                        </li>
                        
                        <li> Consider the efforts or actions taken during the period under review to achieve a planned permanency arrangement other than adoption, guardianship, or reunification with family. This might include the agency's asking foster parents or relatives to agree to and sign a long-term care commitment.
                        </li>
                        
                        <li> If the child is no longer in foster care, then the answer to question C should be based on the child's last placement before leaving foster care.
                        </li>
                    </ul>
                    <p>
                        Select the appropriate response:
                    </p>
                    <p class="answerStyle">
                        <b>Answer to Question 6C: </b>
                    </p>
                    <input type="radio" id="S2_I6_C_Y" name="S2_I6_C" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I6_C']=='Yes')?'checked':'' ?> ><label for="S2_I6_C_Y" style=" margin-right: 100px;">Yes</label>
                    <input type="radio" id="S2_I6_C_N" name="S2_I6_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I6_C']=='No')?'checked':'' ?> ><label for="S2_I6_C_N" style=" margin-right: 100px;">No</label>
                    <input type="radio" id="S2_I6_C_NA" name="S2_I6_C" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I6_C']=='NA')?'checked':'' ?> ><label for="S2_I6_C_NA" style=" margin-right: 100px;">NA</label>
                     <p>
                        If No, explain any concerns in the narrative field below:
                     </p>

                    <textarea style="height:150px; width: 100%;" name="S2_I6_C_EXP" id="S2_I6_C_EXP" class="explain" spellcheck="true">
                         <?php $S2_I6_C_EXP = isset($_POST['S2_I6_C_EXP'])?$_POST['S2_I6_C_EXP']:$dataOUT['S2_I6_C_EXP']; echo $S2_I6_C_EXP;?>
                    </textarea>
                    
                    
                    <p>
                        <b>
                           Item 6 Rating Criteria:
                        </b>
                    </p>

                    <p>
                        <b> Item 6 should be rated as a Strength if the answer to either question B or C is Yes.</b>
                    </p>
                    <p>
                        <b> Item 6 should be rated as an Area Needing Improvement if the answer to either question B or C is No.</b>
                    </p>
                   
                    <p class="answerStyle">
                        <b>Item 6 Rating (select one):</b><input type="button" id="I6_BTN" name="I6_BTN" class="Btn"  value="Click to rate Item 6"> <div id="I6_BTN_MSG" style="color:red;"></div>
                    </p>
                    <input type="radio" id="S2_I6_R_S" name="S2_I6_R" class="uniformBtn" class="radio" value="Strength" <?php echo ($dataOUT['S2_I6_R']=='Strength')?'checked':'' ?>  ><label for="S2_I6_R_S" style="margin-right: 100px;">Strength</label>
                    <input type="radio" id="S2_I6_R_ANI" name="S2_I6_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I6_R']=='Area Needing Improvement')?'checked':'' ?> ><label for="S2_I6_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                       
                    <p>
                        <b>
                           Sources of information that informed rating:
                        </b>
                    </p>
                    <div id="S2_I6_R_CHECKBOX_MSG"></div>
                    <p>
                        <input type="checkbox" id="S2_I6_R_SRC_CF" name="S2_I6_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I6_R_SRC_1']=='case file')?'checked':'' ?> >case file<br>
                        <input type="checkbox" id="S2_I6_R_SRC_MI" name="S2_I6_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I6_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
                        <input type="checkbox" id="S2_I6_R_SRC_FI" name="S2_I6_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I6_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
                        <input type="checkbox" id="S2_I6_R_SRC_FPI" name="S2_I6_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I6_R_SRC_4']=='foster parent interview')?'checked':'' ?>>foster parent interview<br>
                        <input type="checkbox" id="S2_I6_R_SRC_CI" name="S2_I6_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I6_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
                        <input type="checkbox" id="S2_I6_R_SRC_CWI" name="S2_I6_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I6_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
                        <input type="checkbox" id="S2_I6_R_SRC_OI" name="S2_I6_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I6_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>
                    </p>
                        
                    <p>
                        Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                    </p>

                    <textarea style="height:150px; width: 100%;" name="S2_I6_R_EXP" id="S2_I6_R_EXP" class="explain" spellcheck="true">
                        <?php $S2_I6_R_EXP = isset($_POST['S2_I6_R_EXP'])?$_POST['S2_I6_R_EXP']:$dataOUT['S2_I6_R_EXP']; echo $S2_I6_R_EXP;?>
                    </textarea>

                    <div id="successI6" style="display: block; margin: auto; text-align:center;"></div>  
            </div> <!-- end of item 6 -->

            <h3>RATING PERMANENCY OUTCOME 1 <br>PERMANENCY OUTCOME 1: CHILDREN HAVE PERMANENCY AND STABILITY IN THEIR LIVING SITUATIONS.</h3>
            <!-- <div id="accordionOUT2"> -->
            <div>
                <p>
                    What is the level of outcome achievement that best describes the extent to which this outcome is being or has been achieved, based on the ratings for items 4, 5, and 6?
                </p>
                <p>
                    <b>
                       Instructions:
                    </b>
                </p>
                
                <p>
                    Permanency Outcome 1 should be rated as Substantially Achieved if the following applies:
                </p>
                <ul>
                    <li> Items 4, 5, and 6 are rated as Strengths.
                    </li>
                </ul>
                
                <p>
                    Permanency Outcome 1 should be rated as Partially Achieved if the following applies:
                </p>
                <ul>
                    <li> At least one of items 4, 5, or 6 is rated as a Strength.
                    </li>
                </ul>
                
                <p>
                    Permanency Outcome 1 should be rated as Not Achieved if the following applies:
                </p>
                <ul>
                    <li> All of items 4, 5, and 6 are rated as Areas Needing Improvement.
                    </li>
                </ul>
                
                <p>
                    Permanency Outcome 1 should be rated as Not Applicable if the following applies:
                </p>
                <ul>
                    <li> All of items 4, 5, and 6 are rated as Not Applicable.
                    </li>
                </ul>
                
                <div>
                    <p><b>Select the appropriate response:</b><input type="button" id="S2_O1_BTN" name="S2_O1_BTN" class="Btn"  value="Click to rate Outcome 1"> <div id="S2_O1_BTN_MSG" style="color:red;"></div></p>

                        <input type="radio" id="S2_O1_SA" class="uniformBtn" class="radio" value="Substantially Achieved"  name="S2_O1" <?php echo ($dataOUT['S2_O1']=='Substantially Achieved')?'checked':'' ?>><label for="S2_O1_SA" style="widht: 30px; margin-right: 100px;">Substantially Achieved</label>

                        <input type="radio" id="S2_O1_PA"  class="uniformBtn" class="radio" value="Partially Achieved" name="S2_O1" <?php echo ($dataOUT['S2_O1']=='Partially Achieved')?'checked':'' ?> ><label for="S2_O1_PA" style="widht: 30px;margin-right: 100px;">Partially Achieved</label>

                        <input type="radio" id="S2_O1_NAC" class="uniformBtn" class="radio" value="Not Achieved" name="S2_O1" <?php echo ($dataOUT['S2_O1']=='Not Achieved')?'checked':'' ?> ><label for="S2_O1_NAC" style="widht: 30px;margin-right: 100px;">Not Achieved</label>
                        
                        <input type="radio" id="S2_O1_NA" class="uniformBtn" class="radio" value="NA" name="S2_O1" <?php echo ($dataOUT['S2_O1']=='NA')?'checked':'' ?> ><label for="S2_O1_NA" style="widht: 30px;margin-right: 100px;">NA</label>
                          
                </div>
                
                <div style="text-align: center;margin-top: 10px; font-size: 14pt; font-weight: bold;">
                        Name your file: <input type="text" name="O1_file_name" pattern="^F[CP]+[A-Za-z0-9_]{1,30}$" title="File name must start with FP or FC and followed by letters, numbers, or underscores, maximum lengh: 30 characters" >
                </div>
      
                    <input type="submit" name="TEMP_SUBMIT" value="Submit" id="O1_I1_SUBMIT" class="Btn" style="display: block;margin: auto; margin-top: 20px; font-size: 14pt;" />           
                    <input type="submit" name="FINAL_SUBMIT" value="Final Submit and View Debriefing Report" class="Btn" style="display: block; margin: auto; margin-top: 10px; font-size: 14pt;"/>                      
                
            </div> <!-- end of S2_O1 -->            
      </div> <!-- end of accordionT4 -->
  </div> <!-- end of tab 4 -->
    
       
        
   <div id="tabs-5">

             <header style="text-align: center;">
            <h2>SECTION II: PERMANENCY</h2>
            <h3>PERMANENCY OUTCOME 2: THE CONTINUITY OF FAMILY RELATIONSHIPS AND CONNECTIONS IS PRESERVED FOR CHILDREN.</h3>
			<!--
      <h4>Item 1: Timelines of Initiating Investigations of Reports of Child Maltreatment</h4>
      -->
      </header>
      <div id="accordionT4">

            <h3>Item 7: Placement With Siblings</h3>
            <div>


                <h3>Purpose of Assessment</h3>
                <div>
                    <p>To determine if, during the period under review, concerted efforts were made to ensure that siblings in foster care are placed together unless a separation was necessary to meet the needs of one of the siblings.
                    </p>
                </div>

                <h3>Item 7 Applicable Cases</h3>
                <div>
                    <p>Cases applicable for an assessment of this item include all foster care cases in which the child has one or more siblings who are (or were) also in foster care during the period under review. If the child has no siblings in foster care during the period under review, the case is Not Applicable for an assessment of this item. For example, if the child in foster care has an older sibling who was in foster care at one time, but not during the period under review, this case would be Not Applicable.
                    </p>
                </div>

                <h3>Is this case applicable?</h3>
                <p>
                    Select the appropriate response. If the response is No, rate the item as Not Applicable in the ratings section and continue to item 8.
                </p>
                <input type="radio" id="S2_O2_I7_Y" class="uniformBtn" class="radio" value="Yes"  name="S2_O2_I7"  <?php echo ($dataOUT['S2_O2_I7']=='Yes')?'checked':'' ?> ><label for="S2_O2_I7_Y" style="widht: 30px; margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_O2_I7_N"  class="uniformBtn" class="radio" value="No" name="S2_O2_I7" <?php echo ($dataOUT['S2_O2_I7']=='No')?'checked':'' ?> ><label for="S2_O2_I7_N" style="widht: 30px;margin-right: 100px;">No</label>

                <p>
                    <span style="font-size: 18pt;"><b>A.</b></span>
                    During the period under review, was the child placed with all siblings who also were in foster care?
                </p>
                <p>
                   <b>Question 7A Definition:</b>
                </p>
                <p>
                    Siblings are children who have one or more parents in common either biologically, through adoption, or through the marriage of their parents, and with whom the child lived before his or her foster care placement, or with whom the child would be expected to live if the child were not in foster care.
                </p>

                <p>
                   <b>Question 7A Instruction:</b>
                </p>
                <p>
                    In answering question A, consider only the location of each of the siblings, not the reason for their location.
                </p>

                <p>
                    Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 7A: </b>
                </p>
                <input type="radio" id="S2_I7_A_Y" name="S2_I7_A" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I7_A']=='Yes')?'checked':'' ?> ><label for="S2_I7_A_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I7_A_N" name="S2_I7_A" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I7_A']=='No')?'checked':'' ?> ><label for="S2_I7_A_N" style=" margin-right: 100px;">No</label>

                <p>
                    <span style="font-size: 18pt;"><b>B.</b></span>
                    If the answer to question A is No, was there a valid reason for the childâ€™s separation from the siblings?
                </p>
                <p>
                   <b>Question 7B Instructions:</b>
                </p>
                <ul>
                    <li>
                        If question A was answered Yes, then question B is NA.
                    </li>
                     <li>
                        Consider the circumstances of the placement of siblings, focusing on whether separation was necessary to meet the childâ€™s needs. For example, were siblings separated temporarily because one sibling needed a specialized treatment or to be in a treatment foster home, or because one sibling was abusive to the other, or because siblings with different biological parents were placed with different relatives?
                    </li>
                     <li>
                        If the separation of siblings is attributed by the agency to a lack of foster homes willing to take sibling groups, question B should be answered No.
                    </li>
                     <li>
                        If siblings were separated for a valid reason, consider the entire period under review and determine if that valid reason still exists and if the need for separation still exists. For example, the siblings were separated because one sibling needed temporary treatment services. However, during the period under review, the sibling's treatment services ended. In this situation, determine whether concerted efforts were made to
                        reunite the siblings after the treatment service was completed. If the need for separation no longer exists and no efforts have been made to reunite the siblings, then the answer to question B should be No.
                    </li>
                </ul>

                <p>
                    Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 7B: </b>
                </p>
                <input type="radio" id="S2_I7_B_Y" name="S2_I7_B" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I7_B']=='Yes')?'checked':'' ?> ><label for="S2_I7_B_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I7_B_N" name="S2_I7_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I7_B']=='No')?'checked':'' ?> ><label for="S2_I7_B_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I7_B_NA" name="S2_I7_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I7_B']=='NA')?'checked':'' ?> ><label for="S2_I7_B_NA" style=" margin-right: 100px;">NA</label>
                <p>
                    If No, explain any concerns in the narrative field below:
                </p>

                <textarea style="height:150px; width: 100%;" name="S2_I7_B_EXP" id="S2_I7_B_EXP" class="explain">
                <?php $S2_I7_B_EXP = isset($_POST['S2_I7_B_EXP'])?$_POST['S2_I7_B_EXP']:$dataOUT['S2_I7_B_EXP']; echo $S2_I7_B_EXP;?>
                </textarea>

                <p>
                    <b>
                        Item 7 Rating Criteria:
                    </b>
                </p>

                <p>
                    <b> Item 7 should be rated as a Strength if either of the following applies:</b>
                </p>
                <ul>
                    <li>
                        <b>The answer to question A is Yes.</b>
                    </li>
                    <li>
                        <b>The answer to question A is No, but the answer to question B is Yes.</b>
                    </li>
                </ul>
                <p>
                    <b> Item 7 should be rated as an Area Needing Improvement if the answers to questions A and B are No.</b>
                </p>
                 <p>
                    <b> Item 7 should be rated as Not Applicable if the response to the question of applicability is No.</b>
                </p>

                <p class="answerStyle">
                        <b>Item 7 Rating (select one):</b><br>
                </p>
                <input type="radio" id="S2_I7_R_S" name="S2_I7_R" class="uniformBtn" class="radio" value="Strength"  <?php echo ($dataOUT['S2_I7_R']=='Strength')?'checked':'' ?> ><label for="S2_I7_R_S" style="margin-right: 100px;">Strength</label>
                <input type="radio" id="S2_I7_R_ANI" name="S2_I7_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I7_R']=='Area Needing Improvement')?'checked':'' ?> ><label for="S2_I7_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                <input type="radio" id="S2_I7_R_NA" name="S2_I7_R" class="uniformBtn" class="radio" value="NA"  <?php echo ($dataOUT['S2_I7_R']=='NA')?'checked':'' ?> ><label for="S2_I7_R_NA" style="margin-right: 100px;">NA</label>

                <p>
                    <b>
                        Sources of information that informed rating:
                    </b>
                </p>
                <div id="S2_I7_R_CHECKBOX_MSG"></div>
                <p>
                    <input type="checkbox" id="S2_I7_R_SRC_CF" name="S2_I7_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I7_R_SRC_1']=='case file')?'checked':'' ?>  >case file<br>
                    <input type="checkbox" id="S2_I7_R_SRC_MI" name="S2_I7_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I7_R_SRC_2']=='mother interview')?'checked':'' ?> >mother interview<br>
                    <input type="checkbox" id="S2_I7_R_SRC_FI" name="S2_I7_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I7_R_SRC_3']=='father interview')?'checked':'' ?>  >father interview<br>
                    <input type="checkbox" id="S2_I7_R_SRC_FPI" name="S2_I7_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I7_R_SRC_4']=='foster parent interview')?'checked':'' ?>  >foster parent interview<br>
                    <input type="checkbox" id="S2_I7_R_SRC_CI" name="S2_I7_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I7_R_SRC_5']=='child interview')?'checked':'' ?>  >child interview<br>
                    <input type="checkbox" id="S2_I7_R_SRC_CWI" name="S2_I7_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I7_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>  >caseworker/supervisor interview<br>
                    <input type="checkbox" id="S2_I7_R_SRC_OI" name="S2_I7_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I7_R_SRC_7']=='other interview')?'checked':'' ?>  >other interview<br>
                </p>

                <p>
                    Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                </p>
                <textarea style="height:150px; width: 100%;" name="S2_I7_R_EXP" id="S2_I7_R_EXP" class="explain">
                <?php $S2_I7_R_EXP = isset($_POST['S2_I7_R_EXP'])?$_POST['S2_I7_R_EXP']:$dataOUT['S2_I7_R_EXP']; echo $S2_I7_R_EXP;?>
                </textarea>

                <div id="successI7" style="display: block; margin: auto; text-align:center;"></div>

            </div> <!-- end of item 7 -->

            <h3>Item 8: Visiting With Parents and Siblings in Foster Care</h3>
            <div>
                <h3>Purpose of Assessment</h3>
                <div>
                    <p>To determine if, during the period under review, concerted efforts were made to ensure that visitation between a child in foster care and his or her mother, father, and siblings is of sufficient frequency and quality to promote continuity in the childâ€™s relationship with these close family members.
                    </p>
                </div>

                <h3>Definitions:</h3>
                <p>"Mother" is defined as the female caretaker from whom the child was removed.
                </p>
                <p>"Father" is defined as the male caretaker from whom the child was removed.
                </p>
                <p>If the biological parents were not the caretakers that the child was removed from, they should not be considered in the assessment of this item.
                </p>

                <h3>Item 8 Applicable Cases:</h3>
                <p>Foster care cases are applicable for an assessment of this item if any of the following apply:
                </p>
                <ul>
                    <li>
                       The child has at least one sibling in foster care who is in a different placement setting.
                    </li>
                    <li>
                       The whereabouts of the child's parents are known and there is no documented information in the case file indicating that contact between the child and the parents is not in the child's best interest.
                    </li>
                </ul>

                <p>Cases are Not Applicable for assessment if any of the following apply:
                </p>
                <ul>
                    <li>
                       The child has no siblings in foster care, and there is documentation in the case file indicating that contact between the child and both of his or her parents is not in the childâ€™s best interests.
                    </li>
                    <li>
                       The child has no siblings in foster care, and the whereabouts of both parents are unknown despite documented concerted agency efforts to locate the parents.
                    </li>
                    <li>
                       The child has no siblings in foster care, both parents were deceased during the entire period under review or the parental rights of both parents have been terminated during the entire period under review, and no parent is involved in the child's life.
                    </li>
                </ul>


                <h3>Is this case applicable?</h3>
                <p>Select the appropriate response. If the response is No, rate the case as Not Applicable in the ratings section and continue to item 9.
                </p>

                <input type="radio" id="S2_I8_AC_Y" name="S2_I8_AC" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_AC']=='Yes')?'checked':'' ?> ><label for="S2_I8_AC_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_AC_N" name="S2_I8_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_AC']=='No')?'checked':'' ?> ><label for="S2_I8_AC_N" style=" margin-right: 100px;">No</label>

                <p>
                    <span style="font-size: 18pt;"><b>A1.</b></span>
                    What was the usual frequency of visits between the mother and the child?
                </p>
                <p>
                   <b>Question 8A1 Instructions:</b>
                </p>
                <p>
                   Select the box next to the statement that best describes the usual frequency of visits between the mother and the child during the period under review.
                </p>
                <input type="radio" id="S2_I8_A1_MOW" name="S2_I8_A1" class="uniformBtn" class="radio" value="More than once a week"  <?php echo ($dataOUT['S2_I8_A1']=='More than once a week')?'checked':'' ?> ><label for="S2_I8_A1_MOW" style=" margin-right: 100px;">More than once a week</label>
                <input type="radio" id="S2_I8_A1_OW" name="S2_I8_A1" class="uniformBtn" class="radio" value="Once a week" <?php echo ($dataOUT['S2_I8_A1']=='Once a week')?'checked':'' ?> ><label for="S2_I8_A1_OW" style=" margin-right: 100px;">Once a week</label>
                <input type="radio" id="S2_I8_A1_LOW" name="S2_I8_A1" class="uniformBtn" class="radio" value="Less than once a week, but at least twice a month"  <?php echo ($dataOUT['S2_I8_A1']=='Less than once a week, but at least twice a month')?'checked':'' ?> ><label for="S2_I8_A1_LOW" style=" margin-right: 100px;">Less than once a week, but at least twice a month</label>
                <br><br>
                <input type="radio" id="S2_I8_A1_LTM" name="S2_I8_A1" class="uniformBtn" class="radio" value="Less than twice a month, but at least once a month" <?php echo ($dataOUT['S2_I8_A1']=='Less than twice a month, but at least once a month')?'checked':'' ?> ><label for="S2_I8_A1_LTM" style=" margin-right: 100px;">Less than twice a month, but at least once a month</label>
                <input type="radio" id="S2_I8_A1_LOM" name="S2_I8_A1" class="uniformBtn" class="radio" value="Less than once a month"  <?php echo ($dataOUT['S2_I8_A1']=='Less than once a month')?'checked':'' ?> ><label for="S2_I8_A1_LOM" style=" margin-right: 100px;">Less than once a month</label>
                <input type="radio" id="S2_I8_A1_NEVER" name="S2_I8_A1" class="uniformBtn" class="radio" value="Never" <?php echo ($dataOUT['S2_I8_A1']=='Never')?'checked':'' ?> ><label for="S2_I8_A1_NEVER" style=" margin-right: 100px;">Never</label>

                <p>
                    <span style="font-size: 18pt;"><b>A.</b></span>
                    During the period under review, were concerted efforts made to ensure that visitation (or other forms of contact if visitation was not possible) between the child and his or her mother was of sufficient frequency to maintain or promote the continuity of the relationship?
                </p>
                <p>
                   <b>Questions 8A and 8B Instructions:</b>
                </p>
                 <ul>
                    <li>
                       Answer Not Applicable if (1) contact between the child and the mother or father was not in the childâ€™s best interests and this was documented in the case file or court order, (2) the whereabouts of the mother or father was not known during the entire period under review, despite documented concerted efforts to locate her, (3) the motherâ€™s or fatherâ€™s parental rights were terminated before the period under review and she/he is not involved in the childâ€™s life, or (4) the mother or father was deceased during the entire period under review.
                    </li>
                    <li>
                       Determine whether the frequency of visitation during the period under review was sufficient to maintain the continuity of the relationship between the child and the mother or father, depending on the circumstances of the case. For example, frequency may need to be greater for infants and young children who are still forming attachments. Frequency also may need to be greater if reunification is imminent. Visitation should be as frequent as possible, unless safety concerns cannot be appropriately managed with supervision. The opportunity for visitation should not be used as a consequence or reward for parents or for children.
                    </li>
                    <li>
                       If, during the period under review, frequent visitation with the mother or father was not possible (for example, due to incarceration or the mother or father being in another state), determine whether there are documented concerted efforts to promote other forms of contact between the child and the mother or father, such as telephone calls or letters in addition to facilitating visits when possible and appropriate.
                    </li>
                    <li>
                       Address the question of appropriate frequency based on the circumstances of the child and the family, rather than on state policy.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 8A: </b>
                </p>
                <input type="radio" id="S2_I8_A_Y" name="S2_I8_A" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_A']=='Yes')?'checked':'' ?> ><label for="S2_I8_A_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_A_N" name="S2_I8_A" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_A']=='No')?'checked':'' ?> ><label for="S2_I8_A_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I8_A_NA" name="S2_I8_A" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_A']=='NA')?'checked':'' ?> ><label for="S2_I8_A_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>B1.</b></span>
                    What was the usual frequency of visits between the father and the child?
                 </p>
                <p>
                   <b>Question 8B1 Instructions:</b>
                </p>
                <p>
                  Select the box next to the statement that best describes the usual frequency of visits between the father and the child during the period under review.
                </p>
                <input type="radio" id="S2_I8_B1_MOW" name="S2_I8_B1" class="uniformBtn" class="radio" value="More than once a week"  <?php echo ($dataOUT['S2_I8_B1']=='More than once a week')?'checked':'' ?> > <label for="S2_I8_B1_MOW" style=" margin-right: 100px;">More than once a week</label>
                <input type="radio" id="S2_I8_B1_OW" name="S2_I8_B1" class="uniformBtn" class="radio" value="Once a week" <?php echo ($dataOUT['S2_I8_B1']=='Once a week')?'checked':'' ?> ><label for="S2_I8_B1_OW" style=" margin-right: 100px;">Once a week</label>
                <input type="radio" id="S2_I8_B1_LOW" name="S2_I8_B1" class="uniformBtn" class="radio" value="Less than once a week, but at least twice a month"  <?php echo ($dataOUT['S2_I8_B1']=='Less than once a week, but at least twice a month')?'checked':'' ?> ><label for="S2_I8_B1_LOW" style=" margin-right: 100px;">Less than once a week, but at least twice a month</label>
                <br><br>
                <input type="radio" id="S2_I8_B1_LTM" name="S2_I8_B1" class="uniformBtn" class="radio" value="Less than twice a month, but at least once a month" <?php echo ($dataOUT['S2_I8_B1']=='Less than twice a month, but at least once a month')?'checked':'' ?> ><label for="S2_I8_B1_LTM" style=" margin-right: 100px;">Less than twice a month, but at least once a month</label>
                <input type="radio" id="S2_I8_B1_LOM" name="S2_I8_B1" class="uniformBtn" class="radio" value="Less than once a month"  <?php echo ($dataOUT['S2_I8_B1']=='Less than once a month')?'checked':'' ?> ><label for="S2_I8_B1_LOM" style=" margin-right: 100px;">Less than once a month</label>
                <input type="radio" id="S2_I8_B1_NEVER" name="S2_I8_B1" class="uniformBtn" class="radio" value="Never" <?php echo ($dataOUT['S2_I8_B1']=='Never')?'checked':'' ?> ><label for="S2_I8_B1_NEVER" style=" margin-right: 100px;">Never</label>

                <p>
                    <span style="font-size: 18pt;"><b>B.</b></span>
                    During the period under review, were concerted efforts made to ensure that visitation (or other forms of contact if visitation was not possible) between the child and his or her father was of sufficient frequency to maintain or promote the continuity of the relationship?
                </p>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 8B: </b>
                </p>
                <input type="radio" id="S2_I8_B_Y" name="S2_I8_B" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_B']=='Yes')?'checked':'' ?> ><label for="S2_I8_B_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_B_N" name="S2_I8_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_B']=='No')?'checked':'' ?> ><label for="S2_I8_B_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I8_B_NA" name="S2_I8_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_B']=='NA')?'checked':'' ?> ><label for="S2_I8_B_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>C.</b></span>
                    During the period under review, were concerted efforts made to ensure that the quality of visitation between the child and the mother was sufficient to maintain or promote the continuity of the relationship?
                </p>
                <p>
                   <b>Questions 8C and 8D Instructions:</b>
                </p>
                <ul>
                    <li>
                       Determine if concerted efforts were made to ensure that the quality of parent-child visitation was sufficient to maintain the continuity of the relationship. For example, did visits take place in a comfortable atmosphere and were they of an appropriate length? Did visitation allow for sufficient interaction between mother or father and child? If siblings were involved, did visits allow mother or father to interact with each child individually? If appropriate, were unsupervised visits and visits in the mother's or father's home in preparation for reunification allowed?
                    </li>
                    <li>
                       If there was no visitation during the period under review, question C or D is answered NA.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 8C: </b>
                </p>
                <input type="radio" id="S2_I8_C_Y" name="S2_I8_C" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_C']=='Yes')?'checked':'' ?> ><label for="S2_I8_C_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_C_N" name="S2_I8_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_C']=='No')?'checked':'' ?> ><label for="S2_I8_C_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I8_C_NA" name="S2_I8_C" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_C']=='NA')?'checked':'' ?> ><label for="S2_I8_C_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>D.</b></span>
                    During the period under review, were concerted efforts made to ensure that the quality of visitation between the child and the father was sufficient to maintain or promote the continuity of the relationship?
                </p>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 8D: </b>
                </p>
                <input type="radio" id="S2_I8_D_Y" name="S2_I8_D" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_D']=='Yes')?'checked':'' ?> ><label for="S2_I8_D_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_D_N" name="S2_I8_D" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_D']=='No')?'checked':'' ?>><label for="S2_I8_D_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I8_D_NA" name="S2_I8_D" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_D']=='NA')?'checked':'' ?> ><label for="S2_I8_D_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>E1.</b></span>
                    What was the usual frequency of visits between the child and his or her siblings?
                </p>
                <p>
                   <b>Question 8E1 Instructions:</b>
                </p>
                <p>
                  Select the box next to the statement that best describes the usual frequency of visits between the siblings and the child.
                </p>
                <input type="radio" id="S2_I8_E1_MOW" name="S2_I8_E1" class="uniformBtn" class="radio" value="More than once a week"  <?php echo ($dataOUT['S2_I8_E1']=='More than once a week')?'checked':'' ?> ><label for="S2_I8_E1_MOW" style=" margin-right: 100px;">More than once a week</label>
                <input type="radio" id="S2_I8_E1_OW" name="S2_I8_E1" class="uniformBtn" class="radio" value="Once a week" <?php echo ($dataOUT['S2_I8_E1']=='Once a week')?'checked':'' ?>><label for="S2_I8_E1_OW" style=" margin-right: 100px;">Once a week</label>
                <input type="radio" id="S2_I8_E1_LOW" name="S2_I8_E1" class="uniformBtn" class="radio" value="Less than once a week, but at least twice a month"  <?php echo ($dataOUT['S2_I8_E1']=='Less than once a week, but at least twice a month')?'checked':'' ?>><label for="S2_I8_E1_LOW" style=" margin-right: 100px;">Less than once a week, but at least twice a month</label>
                <br><br>
                <input type="radio" id="S2_I8_E1_LTM" name="S2_I8_E1" class="uniformBtn" class="radio" value="Less than twice a month, but at least once a month" <?php echo ($dataOUT['S2_I8_E1']=='Less than twice a month, but at least once a month')?'checked':'' ?>><label for="S2_I8_E1_LTM" style=" margin-right: 100px;">Less than twice a month, but at least once a month</label>
                <input type="radio" id="S2_I8_E1_LOM" name="S2_I8_E1" class="uniformBtn" class="radio" value="Less than once a month"  <?php echo ($dataOUT['S2_I8_E1']=='Less than once a month')?'checked':'' ?>><label for="S2_I8_E1_LOM" style=" margin-right: 100px;">Less than once a month</label>
                <input type="radio" id="S2_I8_E1_NEVER" name="S2_I8_E1" class="uniformBtn" class="radio" value="Never" <?php echo ($dataOUT['S2_I8_E1']=='Never')?'checked':'' ?>><label for="S2_I8_E1_NEVER" style=" margin-right: 100px;">Never</label>

                <p>
                    <span style="font-size: 18pt;"><b>E.</b></span>
                   During the period under review, were concerted efforts made to ensure that visitation (or other forms of contact if visitation was not possible) between the child and his or her sibling(s) was of sufficient frequency to maintain or promote the continuity of the relationship?
                </p>
                <p>
                   <b>Question 8E Instructions:</b>
                </p>
                <ul>
                    <li>
                       Answer Not Applicable if the child has no siblings in foster care or if contact with all siblings who are in foster care is not considered to be in the best interests of the child (for example, one sibling is a physical threat to the other sibling or has a history of physical or sexual abuse of the other sibling).
                    </li>
                    <li>
                       Consider whether the frequency of visits during the period under review was sufficient to maintain the continuity of the sibling relationships.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 8E: </b>
                </p>
                <input type="radio" id="S2_I8_E_Y" name="S2_I8_E" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_E']=='Yes')?'checked':'' ?>><label for="S2_I8_E_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_E_N" name="S2_I8_E" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_E']=='No')?'checked':'' ?>><label for="S2_I8_E_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I8_E_NA" name="S2_I8_E" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_E']=='NA')?'checked':'' ?> ><label for="S2_I8_E_NA" style=" margin-right: 100px;">NA</label>


                <p>
                    <span style="font-size: 18pt;"><b>F.</b></span>
                   During the period under review, were concerted efforts made to ensure that the quality of visitation between the child and his or her sibling(s) was sufficient to promote the continuity of their relationships?
                </p>
                <p>
                   <b>Question 8F Instructions:</b>
                </p>
                <ul>
                    <li>
                       Determine if concerted efforts were made to ensure that the quality of sibling visitation was sufficient to maintain the continuity of the relationship. For example, were visits long enough to permit quality interaction? Did sibling contacts only occur in the context of parent visitations? Did visits occur in a comfortable atmosphere?
                    </li>
                    <li>
                       If there was no sibling visitation during the period under review, select NA.
                    </li>
                </ul>
                <p class="answerStyle">
                    <b>Answer to Question 8F: </b>
                </p>
                <input type="radio" id="S2_I8_F_Y" name="S2_I8_F" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I8_F']=='Yes')?'checked':'' ?>><label for="S2_I8_F_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I8_F_N" name="S2_I8_F" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I8_F']=='No')?'checked':'' ?>><label for="S2_I8_F_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I8_F_NA" name="S2_I8_F" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_F']=='NA')?'checked':'' ?>><label for="S2_I8_F_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <b>
                        Item 8 Rating Criteria:
                    </b>
                </p>

                <p>
                    <b> Item 8 should be rated as a Strength if at least one of questions A through F is answered Yes and the other questions are answered Not Applicable.
                    </b>
                </p>
                <p>
                    <b>Item 8 should be rated as an Area Needing Improvement if the answer to any one of questions A through F is No.
                    </b>
                </p>
                <p>
                    <b>Item 8 should be rated as Not Applicable if the response to the question of applicability is No.
                    </b>
                </p>

                <p class="answerStyle">
                        <b>Item 8 Rating (select one):  </b><input type="button" id="I8_BTN" name="I8_BTN" class="Btn"  value="Click to rate Item 8"> <div id="I8_BTN_MSG" style="color:red;"></div>
                </p>
                <input type="radio" id="S2_I8_R_S" name="S2_I8_R" class="uniformBtn" class="radio" value="Strength"  <?php echo ($dataOUT['S2_I8_R']=='Strength')?'checked':'' ?>><label for="S2_I8_R_S" style="margin-right: 100px;">Strength</label>
                <input type="radio" id="S2_I8_R_ANI" name="S2_I8_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I8_R']=='Area Needing Improvement')?'checked':'' ?>><label for="S2_I8_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                <input type="radio" id="S2_I8_R_NA" name="S2_I8_R" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I8_R']=='NA')?'checked':'' ?>><label for="S2_I8_R_NA" style="margin-right: 100px;">NA</label>

                <p>
                    <b>
                        Sources of information that informed rating:
                    </b>
                </p>
                <div id="S2_I8_R_CHECKBOX_MSG"></div>
                <p>
                    <input type="checkbox" id="S2_I8_R_SRC_CF" name="S2_I8_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I8_R_SRC_1']=='case file')?'checked':'' ?>>case file<br>
                    <input type="checkbox" id="S2_I8_R_SRC_MI" name="S2_I8_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I8_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
                    <input type="checkbox" id="S2_I8_R_SRC_FI" name="S2_I8_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I8_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
                    <input type="checkbox" id="S2_I8_R_SRC_FPI" name="S2_I8_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I8_R_SRC_4']=='foster parent interview')?'checked':'' ?>>foster parent interview<br>
                    <input type="checkbox" id="S2_I8_R_SRC_CI" name="S2_I8_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I8_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
                    <input type="checkbox" id="S2_I8_R_SRC_CWI" name="S2_I8_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I8_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
                    <input type="checkbox" id="S2_I8_R_SRC_OI" name="S2_I8_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I8_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>
                </p>

                <p>
                    Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                </p>
                <textarea style="height:150px; width: 100%;" name="S2_I8_R_EXP" id="S2_I8_R_EXP" class="explain">
                <?php $S2_I8_R_EXP = isset($_POST['S2_I8_R_EXP'])?$_POST['S2_I8_R_EXP']:$dataOUT['S2_I8_R_EXP']; echo $S2_I8_R_EXP;?>
                </textarea>

                <div id="successI8" style="display: block; margin: auto; text-align:center;"></div>

            </div> <!-- end of item 8 -->

            <h3>Item 9: Preserving Connections</h3>
            <div>
           
                <h3>Purpose of Assessment</h3>
                <div>
                    <p>To determine whether, during the period under review, concerted efforts were made to maintain the childâ€™s connections to his or her neighborhood, community, faith, extended family, Tribe, school, and friends.
                    </p>
                </div>

                <h3>Item 9 Applicable Cases</h3>
                <p>Almost all foster care cases are applicable for an assessment of this item. A possible exception may be the situation of an abandoned infant where the agency has no information about the childâ€™s extended family or connections.
                </p>

                <h3>Is this case applicable?</h3>
                <p>Select the appropriate response. If the response is No, rate the item as Not Applicable in the ratings section and continue to item 10.
                </p>

                <input type="radio" id="S2_I9_AC_Y" name="S2_I9_AC" class="uniformBtn" class="radio" value="Yes" <?php echo ($dataOUT['S2_I9_AC']=='Yes')?'checked':'' ?> ><label for="S2_I9_AC_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I9_AC_N" name="S2_I9_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I9_AC']=='No')?'checked':'' ?>><label for="S2_I9_AC_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I9_AC_NA" name="S2_I9_AC" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I9_AC']=='NA')?'checked':'' ?>><label for="S2_I9_AC_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>A.</b></span>
                   During the period under review, were concerted efforts made to maintain the childâ€™s important connections (for example, neighborhood, community, faith, language, extended family members including siblings who are not in foster care, Tribe, school, and/or friends)?
                </p>
                <p>
                   <b>Question 9A Instructions:</b>
                </p>
                <ul>
                    <li>
                       Determine what the important connections are for the child (for example, a young child is more likely to have an important connection with extended family than with school, and it is important for Native American children to maintain Tribal connections) and then determine whether concerted efforts were made to maintain those connections.
                    </li>
                    <li>
                       Do not rate this item based on connections to parents or siblings who are in foster care. Information about sustaining those connections is captured in other items. However, the item may be rated based on connections with siblings who are not in foster care and other extended family members (who were not the childâ€™s primary caregivers before entry into foster care), such as grandparents, uncles, aunts, or cousins.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 9A: </b>
                </p>
                <input type="radio" id="S2_I9_A_Y" name="S2_I9_A" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I9_A']=='Yes')?'checked':'' ?>><label for="S2_I9_A_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I9_A_N" name="S2_I9_A" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I9_A']=='No')?'checked':'' ?>><label for="S2_I9_A_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I9_A_NA" name="S2_I9_A" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I9_A']=='NA')?'checked':'' ?>><label for="S2_I9_A_NA" style=" margin-right: 100px;">NA</label>


                <p>
                    <span style="font-size: 18pt;"><b>B.</b></span>
                   Was a sufficient inquiry conducted with the parent, child, custodian, or other interested party to determine whether the child may be a member of, or eligible for membership in, a federally recognized Indian Tribe?
                </p>
                <p>
                   <b>Question 9B Instructions:</b>
                </p>
                <ul>
                    <li>
                       This question is for data collection purposes only and does not affect the rating for this item.
                    </li>
                    <li>
                       If there is no evidence found in the case file or through interviews that the child is a member of, or eligible for membership in, an Indian Tribe, then the answer to question B is Not Applicable.
                    </li>
                    <li>
                       If there is no information in the case file that indicates the child is a member of, or eligible for membership in, an Indian Tribe, but you learn through interviews that the child has Native American heritage and no apparent efforts were made to determine this, then the answer to question B is No.
                    </li>
                    <li>
                       If the child entered foster care during the period under review, determine whether timely and appropriate action was taken to determine whether the child is a member of, or eligible for membership in, an Indian
                    Tribe. This may include exploring this with the parents and/or other persons with a relationship to the child, contacting Tribes, and contacting the Bureau of Indian Affairs.
                    </li>
                    <li>
                       If the child entered foster care before the period under review, the answer to question B can be Yes if by the beginning of the period under review an informed determination was made about the child's membership, or eligibility for membership, in an Indian Tribe and all appropriate steps were taken to determine whether the child is Native American.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 9B: </b>
                </p>
                <input type="radio" id="S2_I9_B_Y" name="S2_I9_B" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I9_B']=='Yes')?'checked':'' ?>><label for="S2_I9_B_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I9_B_N" name="S2_I9_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I9_B']=='No')?'checked':'' ?>><label for="S2_I9_B_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I9_B_NA" name="S2_I9_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I9_B']=='NA')?'checked':'' ?>><label for="S2_I9_B_NA" style=" margin-right: 100px;">NA</label>


                <p>
                    <span style="font-size: 18pt;"><b>C.</b></span>
                   If the child may be a member of, or eligible for membership in, a federally recognized Indian Tribe, during the period under review, was the Tribe provided timely notification of its right to intervene in any state court proceedings seeking an involuntary foster care placement or termination of parental rights (TPR)?
                </p>
                <p>
                   <b>Question 9C Instructions:</b>
                </p>
                <ul>
                    <li>
                      If the child is not a member of, or eligible for membership in, an Indian Tribe, the answer to question C is Not Applicable.
                    </li>
                    <li>
                       If the child entered care during the period under review or had a TPR hearing during the period under review, determine if timely notice was provided to the Tribe. Timely notice is notice that was received no later than 10 days before the proceeding. If timely notice was not provided, the answer to question C is No.
                    </li>
                    <li>
                       If the child entered care before the period under review and did not have a TPR hearing during the period under review, the answer to question C is Yes, if, by the beginning of the period under review, all appropriate steps were taken to notify the Tribe.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 9C: </b>
                </p>
                <input type="radio" id="S2_I9_C_Y" name="S2_I9_C" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I9_C']=='Yes')?'checked':'' ?>><label for="S2_I9_C_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I9_C_N" name="S2_I9_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I9_C']=='No')?'checked':'' ?>><label for="S2_I9_C_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I9_C_NA" name="S2_I9_C" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I9_C']=='NA')?'checked':'' ?>><label for="S2_I9_C_NA" style=" margin-right: 100px;">NA</label>


                <p>
                    <span style="font-size: 18pt;"><b>D.</b></span>
                   If the child is a member of, or eligible for membership in, a federally recognized Indian Tribe, was the child placed in foster care in accordance with the Indian Child Welfare Act (ICWA) placement preferences or were concerted efforts made to place the child in accordance with ICWA placement preferences?
                </p>
                <p>
                   <b>Question 9D Instructions:</b>
                </p>
                <ul>
                    <li>
                      If the child is not Native American, then the answer to question D is Not Applicable.
                    </li>
                    <li>
                       Determine whether, during the period under review, the child was placed (1) with a member of the child's extended family, (2) in a foster home licensed, approved, or specified by the Native American child's Tribe, (3) in another Native American foster home placement, or (4) in an institution approved by a Tribe or operated by a Native American organization. Placement preference is in this order unless another order is specified by Tribal resolution.
                    </li>
                    <li>
                       If the child's placement was not made in accordance with ICWA placement preferences, determine if, during the period under review, there were documented concerted efforts to meet the ICWA placement preferences.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 9D: </b>
                </p>
                <input type="radio" id="S2_I9_D_Y" name="S2_I9_D" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I9_D']=='Yes')?'checked':'' ?>><label for="S2_I9_D_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I9_D_N" name="S2_I9_D" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I9_D']=='No')?'checked':'' ?>><label for="S2_I9_D_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I9_D_NA" name="S2_I9_D" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I9_D']=='NA')?'checked':'' ?>><label for="S2_I9_D_NA" style=" margin-right: 100px;">NA</label>


                <p>
                    <b>
                        Item 9 Rating Criteria:
                    </b>
                </p>

                <p>
                    <b> Item 9 should be rated as a Strength if the answer to question A is Yes and the answers to questions C and D are either Yes or Not Applicable.
                    </b>
                </p>
                <p>
                    <b> Item 9 should be rated as an Area Needing Improvement if either of the following applies:</b>
                </p>
                <ul>
                    <li>
                        <b>The answer to question A is Yes, but the answer to question C and/or D is No.</b>
                    </li>
                    <li>
                        <b>The answer to question A is No, regardless of the answers to questions B, C, and D.</b>
                    </li>
                     <li>
                        <b>The answer to question B is not considered in rating this item.</b>
                    </li>
                </ul>
                <p>
                    <b> Item 9 should be rated as Not Applicable if the response to the question of applicability is No.</b>
                </p>

                <p class="answerStyle">
                        <b>Item 9 Rating (select one):  </b><input type="button" id="I9_BTN" name="I9_BTN" class="Btn"  value="Click to rate Item 9"> <div id="I9_BTN_MSG" style="color:red;"></div>
                </p>
                <input type="radio" id="S2_I9_R_S" name="S2_I9_R" class="uniformBtn" class="radio" value="Strength"  <?php echo ($dataOUT['S2_I9_R']=='Strength')?'checked':'' ?>><label for="S2_I9_R_S" style="margin-right: 100px;">Strength</label>
                <input type="radio" id="S2_I9_R_ANI" name="S2_I9_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I9_R']=='Area Needing Improvement')?'checked':'' ?>><label for="S2_I9_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                <input type="radio" id="S2_I9_R_NA" name="S2_I9_R" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I9_R']=='NA')?'checked':'' ?>><label for="S2_I9_R_NA" style="margin-right: 100px;">NA</label>

                <p>
                    <b>
                        Sources of information that informed rating:
                    </b>
                </p>
                <div id="S2_I9_R_CHECKBOX_MSG"></div>
                <p>
                    <input type="checkbox" id="S2_I9_R_SRC_CF" name="S2_I9_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I9_R_SRC_1']=='case file')?'checked':'' ?>>case file<br>
                    <input type="checkbox" id="S2_I9_R_SRC_MI" name="S2_I9_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I9_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
                    <input type="checkbox" id="S2_I9_R_SRC_FI" name="S2_I9_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I9_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
                    <input type="checkbox" id="S2_I9_R_SRC_FPI" name="S2_I9_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I9_R_SRC_4']=='foster parent interview')?'checked':'' ?>>foster parent interview<br>
                    <input type="checkbox" id="S2_I9_R_SRC_CI" name="S2_I9_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I9_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
                    <input type="checkbox" id="S2_I9_R_SRC_CWI" name="S2_I9_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I9_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
                    <input type="checkbox" id="S2_I9_R_SRC_OI" name="S2_I9_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I9_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>
                </p>

                <p>
                    Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                </p>
                <textarea style="height:150px; width: 100%;" name="S2_I9_R_EXP" id="S2_I9_R_EXP" class="explain">
                <?php $S2_I9_R_EXP = isset($_POST['S2_I9_R_EXP'])?$_POST['S2_I9_R_EXP']:$dataOUT['S2_I9_R_EXP']; echo $S2_I9_R_EXP;?>
                </textarea>

               <div id="successI9" style="display: block; margin: auto; text-align:center;"></div>

            </div> <!-- end of item 9 -->

            <h3>Item 10: Relative Placement</h3>
            <div>
                <h3>Purpose of Assessment</h3>
                <p>To determine whether, during the period under review, concerted efforts were made to place the child with relatives when appropriate.</p>

                <h3>Item 10 Applicable Cases:</h3>
                <p>All foster care cases except those in which (1) the agency determined upon the child's initial entry into care that his or her needs required a specialized placement (such as residential treatment services) and that they will continue to require such specialized treatment the entire time the child is in care and a relative placement would be inappropriate, or (2) situations such as abandonment in which the identity of the parents and relatives remains unknown despite documented concerted efforts to identify them.
                </p>

                <h3>Is this case applicable?</h3>
                <p>Select the appropriate response. If the response is No, rate the case as Not Applicable in the ratings section and continue to item 11.
                </p>

                <input type="radio" id="S2_I10_AC_Y" name="S2_I10_AC" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I10_AC']=='Yes')?'checked':'' ?> ><label for="S2_I10_AC_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I10_AC_N" name="S2_I10_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I10_AC']=='No')?'checked':'' ?> ><label for="S2_I10_AC_N" style=" margin-right: 100px;">No</label>

                <p>
                    <span style="font-size: 18pt;"><b>A1.</b></span>
                   During the period under review, was the childâ€™s current or most recent placement with a relative?
                </p>
                <p>
                  Select the appropriate response:
                </p>

                <p class="answerStyle">
                    <b>Answer to Question 10A1: </b>
                </p>
                <input type="radio" id="S2_I10_A1_Y" name="S2_I10_A1" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I10_A1']=='Yes')?'checked':'' ?> ><label for="S2_I10_A1_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I10_A1_N" name="S2_I10_A1" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I10_A1']=='No')?'checked':'' ?> ><label for="S2_I10_A1_N" style=" margin-right: 100px;">No</label>


                <p>
                    <span style="font-size: 18pt;"><b>A2.</b></span>
                   If the childâ€™s current or most recent placement is with a relative, is (or was) this placement stable and appropriate to the childâ€™s needs?
                </p>
                <p>
                  <b>Question 10A2 Instruction:</b>
                </p>
                <ul>
                    <li>If the answer to question A1 is No, the answer to question A2 should be Not Applicable.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 10A2: </b>
                </p>
                <input type="radio" id="S2_I10_A2_Y" name="S2_I10_A2" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I10_A2']=='Yes')?'checked':'' ?> ><label for="S2_I10_A2_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I10_A2_N" name="S2_I10_A2" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I10_A2']=='No')?'checked':'' ?> ><label for="S2_I10_A2_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I10_A2_NA" name="S2_I10_A2" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I10_A2']=='NA')?'checked':'' ?> ><label for="S2_I10_A2_NA" style=" margin-right: 100px;">NA</label>

                <p>
                  <b>Instructions for the Rest of Item 10:</b>
                </p>
                <ul>
                    <li>If the answer to question A2 is Yes, you may rate the item as a Strength, and answer Not Applicable to the remaining questions for the item.
                    </li>
                    <li>If the answer to question A1 or A2 is No, answer the remaining questions for this item.
                    </li>
                </ul>

                <p>
                    <span style="font-size: 18pt;"><b>B.</b></span>
                   Did the agency, during the period under review, make concerted efforts to identify, locate, inform, and evaluate maternal relatives as potential placements for the child, with the result that maternal relatives were ruled out as, or were unwilling to be, placement resources?
                </p>
                <p>
                  <b>Questions 10B and 10C Instructions:</b>
                </p>
                <ul>
                    <li>The answers to questions B and C are NA if the answers to both questions A1 and A2 are Yes.
                    </li>
                    <li>If a child entered foster care during the period under review, determine whether the state followed the requirements of the title IV-E provision that requires states to consider giving preference to placing the child
                        with relatives, and determine whether the state considered such a placement and how (for example, identifying, seeking out, and informing and evaluating the child's relatives).
                    </li>
                    <li>If a child entered foster care before the period under review and the answer to either question A1 or A2 is No, determine whether, during the period under review, the agency made concerted efforts to search for and assess relatives as placement resources, if appropriate. If all maternal and/or paternal relatives had already been appropriately considered and ruled out before the PUR, the answer to question B and/or C can be Not Applicable. If you determine that, during the period under review, the agency did not consider relatives as placement resources in cases in which consideration was appropriate, the answer to question B or C should be No.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 10B: </b>
                </p>
                <input type="radio" id="S2_I10_B_Y" name="S2_I10_B" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I10_B']=='Yes')?'checked':'' ?> ><label for="S2_I10_B_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I10_B_N" name="S2_I10_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I10_B']=='No')?'checked':'' ?>><label for="S2_I10_B_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I10_B_NA" name="S2_I10_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I10_B']=='NA')?'checked':'' ?> ><label for="S2_I10_B_NA" style=" margin-right: 100px;">NA</label>

                 <p class="answerStyle">
                    <b>If No, specify the area in which concerns existed: </b>
                </p>
                <input type="radio" id="S2_I10_B_SP_ID" name="S2_I10_B_SP" class="uniformBtn" class="radio" value="Identify"  <?php echo ($dataOUT['S2_I10_B_SP']=='Identify')?'checked':'' ?> ><label for="S2_I10_B_SP_ID" style=" margin-right: 100px;">Identify</label>
                <input type="radio" id="S2_I10_B_SP_LO" name="S2_I10_B_SP" class="uniformBtn" class="radio" value="Locate" <?php echo ($dataOUT['S2_I10_B_SP']=='Locate')?'checked':'' ?> ><label for="S2_I10_B_SP_LO" style=" margin-right: 100px;">Locate</label>
                <input type="radio" id="S2_I10_B_SP_IN" name="S2_I10_B_SP" class="uniformBtn" class="radio" value="Inform" <?php echo ($dataOUT['S2_I10_B_SP']=='Inform')?'checked':'' ?> ><label for="S2_I10_B_SP_IN" style=" margin-right: 100px;">Inform</label>
                <input type="radio" id="S2_I10_B_SP_EV" name="S2_I10_B_SP" class="uniformBtn" class="radio" value="Evaluate" <?php echo ($dataOUT['S2_I10_B_SP']=='Evaluate')?'checked':'' ?> ><label for="S2_I10_B_SP_EV" style=" margin-right: 100px;">Evaluate</label>


                 <p>
                    <span style="font-size: 18pt;"><b>C.</b></span>
                   Did the agency, during the period under review, make concerted efforts to identify, locate, inform, and evaluate paternal relatives as potential placements for the child, with the result that paternal relatives were ruled out as, or were unwilling to be, placement resources?
                 </p>
                 <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 10C: </b>
                </p>
                <input type="radio" id="S2_I10_C_Y" name="S2_I10_C" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I10_C']=='Yes')?'checked':'' ?> ><label for="S2_I10_C_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I10_C_N" name="S2_I10_C" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I10_C']=='No')?'checked':'' ?> ><label for="S2_I10_C_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I10_C_NA" name="S2_I10_C" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I10_C']=='NA')?'checked':'' ?> ><label for="S2_I10_C_NA" style=" margin-right: 100px;">NA</label>

                 <p>
                    <b>
                        Item 10 Rating Criteria:
                    </b>
                </p>
                <p>
                    <b> Item 10 should be rated as a Strength if either of the following applies:</b>
                </p>
                <ul>
                    <li>
                        <b>The answers to both questions A1 and A2 are Yes.</b>
                    </li>
                    <li>
                        <b>The answer to either question A1 or A2 is No, but the answers to questions B and C are Yes or Not Applicable.</b>
                    </li>
                </ul>

                <p>
                    <b> Item 10 should be rated as an Area Needing Improvement if both of the following apply:</b>
                </p>
                <ul>
                    <li>
                        <b>The answer to either question A1 or A2 is No.</b>
                    </li>
                    <li>
                        <b>The answer to either question B or C is No.</b>
                    </li>
                </ul>
                <p>
                    <b>Item 10 should be rated as Not Applicable if the response to the question of applicability is No.</b>
                </p>

                <p class="answerStyle">
                        <b>Item 10 Rating (select one):  </b><input type="button" id="I10_BTN" name="I10_BTN" class="Btn"  value="Click to rate Item 10"> <div id="I10_BTN_MSG" style="color:red;"></div>
                </p>
                <input type="radio" id="S2_I10_R_S" name="S2_I10_R" class="uniformBtn" class="radio" value="Strength"  <?php echo ($dataOUT['S2_I10_R']=='Strength')?'checked':'' ?> ><label for="S2_I10_R_S" style="margin-right: 100px;">Strength</label>
                <input type="radio" id="S2_I10_R_ANI" name="S2_I10_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I10_R']=='Area Needing Improvement')?'checked':'' ?> ><label for="S2_I10_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                <input type="radio" id="S2_I10_R_NA" name="S2_I10_R" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I10_R']=='NA')?'checked':'' ?> ><label for="S2_I10_R_NA" style="margin-right: 100px;">NA</label>

                <p>
                    <b>
                        Sources of information that informed rating:
                    </b>
                </p>
                <div id="S2_I10_R_CHECKBOX_MSG"></div>
                <p>
                    <input type="checkbox" id="S2_I10_R_SRC_CF" name="S2_I10_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I10_R_SRC_1']=='case file')?'checked':'' ?> >case file<br>
                    <input type="checkbox" id="S2_I10_R_SRC_MI" name="S2_I10_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I10_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
                    <input type="checkbox" id="S2_I10_R_SRC_FI" name="S2_I10_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I10_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
                    <input type="checkbox" id="S2_I10_R_SRC_FPI" name="S2_I10_R_SRC[]" value="foster  parent interview" <?php echo ($dataOUT['S2_I10_R_SRC_4']=='foster  parent interview')?'checked':'' ?>>foster parent interview<br>
                    <input type="checkbox" id="S2_I10_R_SRC_CI" name="S2_I10_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I10_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
                    <input type="checkbox" id="S2_I10_R_SRC_CWI" name="S2_I10_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I10_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
                    <input type="checkbox" id="S2_I10_R_SRC_OI" name="S2_I10_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I10_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>
                </p>

                <p>
                    Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                </p>
                <textarea style="height:150px; width: 100%;" name="S2_I10_R_EXP" id="S2_I10_R_EXP" class="explain">
                <?php $S2_I10_R_EXP = isset($_POST['S2_I10_R_EXP'])?$_POST['S2_I10_R_EXP']:$dataOUT['S2_I10_R_EXP']; echo $S2_I10_R_EXP;?>
                </textarea>

                <div id="successI10" style="display: block; margin: auto; text-align:center;"></div>

            </div> <!-- end of item 10 -->

            <h3>Item 11: Relationship of Child in Care With Parents</h3>
            <div>
                <h3>Purpose of Assessment</h3>
                <p>To determine whether, during the period under review, concerted efforts were made to promote, support, and/or maintain positive relationships between the child in foster care and his or her mother and father or other primary caregiver(s) from whom the child had been removed through activities other than just arranging for visitation.
                </p>

                <h3>Definitions</h3>
                <p>"Mother" is defined as the female caretaker from whom the child was removed.
                </p>
                <p>"Father" is defined as the male caretaker from whom the child was removed.
                </p>
                <p>If the biological parents were not the caretakers that the child was removed from, they should not be considered in the assessment of this item.
                </p>

                <h3>Item 11 Applicable Cases</h3>
                <p>All foster care cases are applicable for assessment of this item unless (1) the parental rights for both parents were terminated before the period under review and neither parent made efforts to be involved in the childâ€™s life or in ongoing planning for the child during the period under review; (2) the child was abandoned and neither parent could be located; (3) the whereabouts of both parents were not known during the entire period under review despite documented concerted agency efforts to locate both parents; (4) contact with both parents was considered to be not in the best interests of the child (for example, both parents are abusive and there is concern about managing contact with the child); or (5) the child was initially removed from a parent's home but, during the entire period under review, both parents were deceased.
                </p>


                <h3>Is this case applicable?</h3>
                <p>Select the appropriate response. If the response is No, rate the item as Not Applicable in the ratings section, and continue to the section on rating Permanency Outcome 2.
                </p>

                <input type="radio" id="S2_I11_AC_Y" name="S2_I11_AC" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I11_AC']=='Yes')?'checked':'' ?>><label for="S2_I11_AC_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I11_AC_N" name="S2_I11_AC" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I11_AC']=='No')?'checked':'' ?>><label for="S2_I11_AC_N" style=" margin-right: 100px;">No</label>

                <p>
                    <span style="font-size: 18pt;"><b>A.</b></span>
                   During the period under review, were concerted efforts made to promote, support, and otherwise maintain a positive and nurturing relationship between the child in foster care and his or her mother?
                </p>
                <p>
                  <b>Questions 11A and 11B Instructions</b>
                </p>
                <ul>
                    <li>Question A or B should be answered Not Applicable if (1) the mother's or father's parental rights were terminated before the period under review and the mother or father was not involved in planning for the child, (2) the mother's or father's whereabouts was not known during the entire period under review despite efforts to locate her, (3) contact between the child and the mother or father was considered to be not in the child's best interests, or (4) the mother or father was deceased during the entire period under review.
                    </li>
                    <li>Foster parents' activities are considered for purposes of this question. For example, if the foster parent provided transportation so that the mother or father could attend the child's school event or medical appointment, that would be considered as contributing toward concerted efforts.
                    </li>
                    <li>Do not answer this question based on efforts (or lack of efforts) to ensure the frequency or quality of visitation between the mother or father and the child. That information is captured under item 8. This question pertains to additional activities to help support, strengthen, or maintain the parent-child relationship.
                    </li>
                </ul>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 11A: </b>
                </p>
                <input type="radio" id="S2_I11_A_Y" name="S2_I11_A" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I11_A']=='Yes')?'checked':'' ?>><label for="S2_I11_A_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I11_A_N" name="S2_I11_A" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I11_A']=='No')?'checked':'' ?>><label for="S2_I11_A_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I11_A_NA" name="S2_I11_A" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I11_A']=='NA')?'checked':'' ?>><label for="S2_I11_A_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>A1.</b></span>
                   What concerted efforts were made to support or strengthen the mother-child relationship?
                </p>
                <p>
                  <b>Question 11A1 Instructions:</b>
                </p>
                <p>
                  The answer to question A1 should be NA if the answer to question A was NA. Select the concerted efforts made from the following list. Select all that apply. If no concerted efforts were made, select None.
                </p>
                <p>
                    <input type="checkbox" id="S2_I11_A1_0" name="S2_I11_A1[]" value="NA" <?php echo ($dataOUT['S2_I11_A1_SRC_1']=='NA')?'checked':'' ?>>NA<br>
                    <input type="checkbox" id="S2_I11_A1_1" name="S2_I11_A1[]" value="None" <?php echo ($dataOUT['S2_I11_A1_SRC_2']=='None')?'checked':'' ?>>None<br>
                    <input type="checkbox" id="S2_I11_A1_2" name="S2_I11_A1[]" value="Encouraged the mother's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?" <?php echo ($dataOUT['S2_I11_A1_SRC_3']=="Encouraged the mother's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?")?'checked':'' ?>>Encouraged the mother's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?<br>
                    <input type="checkbox" id="S2_I11_A1_3" name="S2_I11_A1[]" value="Provided or arranged for transportation or provided funds for transportation so that the mother could attend the child's special activities and doctors' appointments?" <?php echo ($dataOUT['S2_I11_A1_SRC_4']=="Provided or arranged for transportation or provided funds for transportation so that the mother could attend the child's special activities and doctors' appointments?")?'checked':'' ?>>Provided or arranged for transportation or provided funds for transportation so that the mother could attend the child's special activities and doctors' appointments?<br>
                    <input type="checkbox" id="S2_I11_A1_4" name="S2_I11_A1[]" value="Provided opportunities for therapeutic situations to help the mother and child strengthen their relationship?" <?php echo ($dataOUT['S2_I11_A1_SRC_5']=='Provided opportunities for therapeutic situations to help the mother and child strengthen their relationship?')?'checked':'' ?>>Provided opportunities for therapeutic situations to help the mother and child strengthen their relationship?<br>
                    <input type="checkbox" id="S2_I11_A1_5" name="S2_I11_A1[]" value="Encouraged the foster parents to provide mentoring or serve as role models to the mother to assist her in appropriate parenting?" <?php echo ($dataOUT['S2_I11_A1_SRC_6']=='Encouraged the foster parents to provide mentoring or serve as role models to the mother to assist her in appropriate parenting?')?'checked':'' ?>>Encouraged the foster parents to provide mentoring or serve as role models to the mother to assist her in appropriate parenting?<br>
                    <input type="checkbox" id="S2_I11_A1_6" name="S2_I11_A1[]" value="Encouraged and facilitated contact with the incarcerated mother (where appropriate) or with the mother not living in close proximity to the child?" <?php echo ($dataOUT['S2_I11_A1_SRC_7']=='Encouraged and facilitated contact with the incarcerated mother (where appropriate) or with the mother not living in close proximity to the child?')?'checked':'' ?>>Encouraged and facilitated contact with the incarcerated mother (where appropriate) or with the mother not living in close proximity to the child?<br>
                </p>

                <p>
                    <span style="font-size: 18pt;"><b>B.</b></span>
                   During the period under review, were concerted efforts made to promote, support, and otherwise maintain a positive and nurturing relationship between the child in foster care and his or her father?
                </p>
                <p>
                  Select the appropriate response:
                </p>
                <p class="answerStyle">
                    <b>Answer to Question 11A: </b>
                </p>
                <input type="radio" id="S2_I11_B_Y" name="S2_I11_B" class="uniformBtn" class="radio" value="Yes"  <?php echo ($dataOUT['S2_I11_B']=='Yes')?'checked':'' ?>><label for="S2_I11_B_Y" style=" margin-right: 100px;">Yes</label>
                <input type="radio" id="S2_I11_B_N" name="S2_I11_B" class="uniformBtn" class="radio" value="No" <?php echo ($dataOUT['S2_I11_B']=='No')?'checked':'' ?>><label for="S2_I11_B_N" style=" margin-right: 100px;">No</label>
                <input type="radio" id="S2_I11_B_NA" name="S2_I11_B" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I11_B']=='NA')?'checked':'' ?>><label for="S2_I11_B_NA" style=" margin-right: 100px;">NA</label>

                <p>
                    <span style="font-size: 18pt;"><b>B1.</b></span>
                   What concerted efforts were made to support or strengthen the father-child relationship?
                </p>
                <p>
                  <b>Question 11B1 Instructions:</b>
                </p>
                <p>
                  The answer to question B1 should be NA if the answer to question B was NA. Select the concerted efforts made from the following list. Select all that apply. If no concerted efforts were made, select NA. If no concerted efforts were made, select None.
                </p>
                <p>
                    <input type="checkbox" id="S2_I11_B1_0" name="S2_I11_B1[]" value="NA" <?php echo ($dataOUT['S2_I11_B1_SRC_1']=='NA')?'checked':'' ?>>NA<br>
                    <input type="checkbox" id="S2_I11_B1_1" name="S2_I11_B1[]" value="None" <?php echo ($dataOUT['S2_I11_B1_SRC_2']=='None')?'checked':'' ?>>None<br>
                    <input type="checkbox" id="S2_I11_B1_2" name="S2_I11_B1[]" value="Encouraged the father's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?" <?php echo ($dataOUT['S2_I11_B1_SRC_3']=="Encouraged the father's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?")?'checked':'' ?>>Encouraged the father's participation in school activities and case conferences, attendance at doctors' appointments with the child, or engagement in the child's after school or sports activities?<br>
                    <input type="checkbox" id="S2_I11_B1_3" name="S2_I11_B1[]" value="Provided or arranged for transportation or provide funds for transportation so that the father could attend the child's special activities and doctors' appointments?" <?php echo ($dataOUT['S2_I11_B1_SRC_4']=="Provided or arranged for transportation or provide funds for transportation so that the father could attend the child's special activities and doctors' appointments?")?'checked':'' ?>>Provided or arranged for transportation or provide funds for transportation so that the father could attend the child's special activities and doctors' appointments?<br>
                    <input type="checkbox" id="S2_I11_B1_4" name="S2_I11_B1[]" value="Provided opportunities for therapeutic situations to help the father and child strengthen their relationship?" <?php echo ($dataOUT['S2_I11_B1_SRC_5']=='Provided opportunities for therapeutic situations to help the father and child strengthen their relationship?')?'checked':'' ?>>Provided opportunities for therapeutic situations to help the father and child strengthen their relationship?<br>
                    <input type="checkbox" id="S2_I11_B1_5" name="S2_I11_B1[]" value="Encouraged the foster parents to provide mentoring or serve as role models to the father to assist him in appropriate parenting?" <?php echo ($dataOUT['S2_I11_B1_SRC_6']=='Encouraged the foster parents to provide mentoring or serve as role models to the father to assist him in appropriate parenting?')?'checked':'' ?>>Encouraged the foster parents to provide mentoring or serve as role models to the father to assist him in appropriate parenting?<br>
                    <input type="checkbox" id="S2_I11_B1_6" name="S2_I11_B1[]" value="Encouraged and facilitated contact with the incarcerated father (where appropriate) or with the father not living in close proximity to the child?" <?php echo ($dataOUT['S2_I11_B1_SRC_7']=='Encouraged and facilitated contact with the incarcerated father (where appropriate) or with the father not living in close proximity to the child?')?'checked':'' ?>>Encouraged and facilitated contact with the incarcerated father (where appropriate) or with the father not living in close proximity to the child?<br>
                </p>

                <p>
                    <b>
                        Item 11 Rating Criteria:
                    </b>
                </p>
                <p>
                    <b> Item 11 should be rated as a Strength if either of the following applies:</b>
                </p>
                <ul>
                    <li>
                        <b>The answers to both questions A and B are Yes.</b>
                    </li>
                    <li>
                        <b>The answer to either question A or B is Yes and the answer to the other question is Not Applicable.</b>
                    </li>
                </ul>

                <p>
                    <b> Item 11 should be rated as an Area Needing Improvement if the answer to either question A or B is No.</b>
                </p>
                <p>
                    <b>Item 11 should be rated as Not Applicable if the response to the question of applicability is No.</b>
                </p>

                <p class="answerStyle">
                        <b>Item 11 Rating (select one):  </b><input type="button" id="I11_BTN" name="I11_BTN" class="Btn"  value="Click to rate Item 11"> <div id="I11_BTN_MSG" style="color:red;"></div>
                </p>
                <input type="radio" id="S2_I11_R_S" name="S2_I11_R" class="uniformBtn" class="radio" value="Strength"  <?php echo ($dataOUT['S2_I11_R']=='Strength')?'checked':'' ?>><label for="S2_I11_R_S" style="margin-right: 100px;">Strength</label>
                <input type="radio" id="S2_I11_R_ANI" name="S2_I11_R" class="uniformBtn" class="radio" value="Area Needing Improvement" <?php echo ($dataOUT['S2_I11_R']=='Area Needing Improvement')?'checked':'' ?>><label for="S2_I11_R_ANI" style="margin-right: 100px;">Area Needing Improvement</label>
                <input type="radio" id="S2_I11_R_NA" name="S2_I11_R" class="uniformBtn" class="radio" value="NA" <?php echo ($dataOUT['S2_I11_R']=='NA')?'checked':'' ?>><label for="S2_I11_R_NA" style="margin-right: 100px;">NA</label>

                <p>
                    <b>
                        Sources of information that informed rating:
                    </b>
                </p>
                <div id="S2_I11_R_CHECKBOX_MSG"></div>
                <p>
                    <input type="checkbox" id="S2_I11_R_SRC_CF" name="S2_I11_R_SRC[]" value="case file" <?php echo ($dataOUT['S2_I11_R_SRC_1']=='case file')?'checked':'' ?>>case file<br>
                    <input type="checkbox" id="S2_I11_R_SRC_MI" name="S2_I11_R_SRC[]" value="mother interview" <?php echo ($dataOUT['S2_I11_R_SRC_2']=='mother interview')?'checked':'' ?>>mother interview<br>
                    <input type="checkbox" id="S2_I11_R_SRC_FI" name="S2_I11_R_SRC[]" value="father interview" <?php echo ($dataOUT['S2_I11_R_SRC_3']=='father interview')?'checked':'' ?>>father interview<br>
                    <input type="checkbox" id="S2_I11_R_SRC_FPI" name="S2_I11_R_SRC[]" value="foster parent interview" <?php echo ($dataOUT['S2_I11_R_SRC_4']=='foster parent interview')?'checked':'' ?>>foster parent interview<br>
                    <input type="checkbox" id="S2_I11_R_SRC_CI" name="S2_I11_R_SRC[]" value="child interview" <?php echo ($dataOUT['S2_I11_R_SRC_5']=='child interview')?'checked':'' ?>>child interview<br>
                    <input type="checkbox" id="S2_I11_R_SRC_CWI" name="S2_I11_R_SRC[]" value="caseworker/supervisor interview" <?php echo ($dataOUT['S2_I11_R_SRC_6']=='caseworker/supervisor interview')?'checked':'' ?>>caseworker/supervisor interview<br>
                    <input type="checkbox" id="S2_I11_R_SRC_OI" name="S2_I11_R_SRC[]" value="other interview" <?php echo ($dataOUT['S2_I11_R_SRC_7']=='other interview')?'checked':'' ?>>other interview<br>
                </p>

                <p>
                    Provide any additional comments that highlight specific practices, systemic issues, or resources that affected this item in the narrative field below:
                </p>
                <textarea style="height:150px; width: 100%;" name="S2_I11_R_EXP" id="S2_I11_R_EXP" class="explain">
                <?php $S2_I11_R_EXP = isset($_POST['S2_I11_R_EXP'])?$_POST['S2_I11_R_EXP']:$dataOUT['S2_I11_R_EXP']; echo $S2_I11_R_EXP;?>
                </textarea>

                <div id="successI11" style="display: block; margin: auto; text-align:center;"></div>

            </div> <!-- end of item 11 -->

            <h3>RATING PERMANENCY OUTCOME 2 <br>PERMANENCY OUTCOME 2: THE CONTINUITY OF FAMILY RELATIONSHIPS AND CONNECTIONS IS PRESERVED FOR CHILDREN.</h3>
            <!-- <div id="accordionOUT2"> -->
            <div>
                <p>
                    What is the level of outcome achievement that best describes the extent to which this outcome is being or has been achieved, based on the ratings for items 7 through 11?
                </p>
                <p>
                    <b>
                       Instructions:
                    </b>
                </p>

                <p>
                    Permanency Outcome 2 should be rated as Substantially Achieved if both of the following apply:
                </p>
                
                <ul>
                    <li> Not more than one of items 7 through 11 is rated as an Area Needing Improvement.
                    </li>
                    <li> At least one item is rated as a Strength.
                    </li>
                </ul>

                <p>
                    Permanency Outcome 2 should be rated as Partially Achieved if both of the following apply:
                </p>
                <ul>
                    <li> At least two items, but fewer than all five items, are rated as an Area Needing Improvement.
                    </li>
                    <li> At least one item is rated as a Strength.
                    </li>
                </ul>

                <p>
                    Permanency Outcome 2 should be rated as Not Achieved if both of the following apply:
                </p>
                <ul>
                    <li> No item is rated as a Strength.
                    </li>
                    <li> At least one item is rated as an Area Needing Improvement.
                    </li>
                </ul>

                <p>
                    Permanency Outcome 2 should be rated as Not Applicable if the following applies:
                </p>
                <ul>
                    <li> All of items 7 through 11 items are rated as Not Applicable.
                    </li>
                </ul>

                <div>
                    <p><b>Select the appropriate response:  </b><input type="button" id="S2_O2_BTN" name="S2_O2_BTN" class="Btn"  value="Click to rate Outcome 2"> <div id="S2_O2_BTN_MSG" style="color:red;"></div></p>

                <!--    <form method="post" id="S2_O2_R">  -->
                        <input type="radio" id="S2_O2_SA" class="uniformBtn" class="radio" value="Substantially Achieved"  name="S2_O2" <?php echo ($dataOUT['S2_O2_R']=='Substantially Achieved')?'checked':'' ?>><label for="S2_O2_SA" style="widht: 30px; margin-right: 100px;">Substantially Achieved</label>

                        <input type="radio" id="S2_O2_PA"  class="uniformBtn" class="radio" value="Partially Achieved" name="S2_O2" <?php echo ($dataOUT['S2_O2_R']=='Partially Achieved')?'checked':'' ?> ><label for="S2_O2_PA" style="widht: 30px;margin-right: 100px;">Partially Achieved</label>

                        <input type="radio" id="S2_O2_NAC" class="uniformBtn" class="radio" value="Not Achieved" name="S2_O2" <?php echo ($dataOUT['S2_O2_R']=='Not Achieved')?'checked':'' ?> ><label for="S2_O2_NAC" style="widht: 30px;margin-right: 100px;">Not Achieved</label>

                        <input type="radio" id="S2_O2_NA" class="uniformBtn" class="radio" value="NA" name="S2_O2" <?php echo ($dataOUT['S2_O2_R']=='NA')?'checked':'' ?> ><label for="S2_O2_NA" style="widht: 30px;margin-right: 100px;">NA</label>

                <!--        <input type="submit" value="Submit" id="S2_O2_R_SUBMIT" class="uniformBtn" style="display: block;margin: auto; margin-top: 20px; font-size: 16pt;"/>
                    </form>
                -->
                </div>
                <!--********************************************** Submit Form Part Begin ***********************************************************-->
             <div style="text-align: center;margin-top: 10px; font-size: 14pt; font-weight: bold;">
                Name your file: <input type="text" name="O1_file_name" pattern="^F[CP]+[A-Za-z0-9_]{1,30}$" title="File name must start with FP or FC and followed by letters, numbers, or underscores, maximum lengh: 30 characters" required>
            </div>

                <input type="submit" name="TEMP_SUBMIT" value="Submit" id="O1_I1_SUBMIT" class="Btn" style="display: block;margin: auto; margin-top: 20px; font-size: 14pt;" />

                <input type="submit" name="FINAL_SUBMIT" value="Final Submit and View Debriefing Report" class="Btn" style="display: block; margin: auto; margin-top: 10px; font-size: 14pt;"/>

                <!--********************************************** Submit Form Part End **********************************************************-->

            </div> <!-- end of S2_O2 -->

      </div> <!-- end of accordionT5 -->
     </div>
</form> 
        
         <div id="tabs-6">
            <header style="text-align: center; ">
                <h2>Under construction</h2>
            </header>
    
        </div> 
        
         <div id="tabs-7">
            <header style="text-align: center; ">
                <h2>Under construction</h2>
            </header>
    
        </div> 
        
        <div id="tabs-8">
            <header style="text-align: center; ">
                <h2>Under construction</h2>
            </header>
    
        </div> 
  
      
     </div> <!-- end of tab -->       
	</body>
</html>
