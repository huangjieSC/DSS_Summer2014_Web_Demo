<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Simple Ajax Form</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		
		<style>
			ul {
				font-family: Arial;
				list-style-type: none;
			}

			#success {
				display: none;
				font-family: Arial;
				color: green;
				margin-left: 85px;
				font-size: 14px;
			}

			input[type=text] {
				padding: 5px;
				box-shadow: inset 0 0 5px #eee;
				border: 1px solid #eee;
			}

			input[type=submit] {
				padding: 3px 8px;
				background: #eee;
				margin-left: 85px;
				cursor: pointer;
				border: 1px solid #aaa;
				font-size: 12px;
			}

			.throw_error {
				color:tomato;
				font-size: 12px;
				display: none;
			}

			label {
				font-size: 13px;
			}

                        input:required {
                            background:hsl(180, 50%, 90%);
                            border:1px solid #999;
                        }

                        input:optional {
    background:hsl(300, 50%, 90%);
    border:1px dotted hsl(180, 50%, 90%);
}
		</style>
	</head>
        <body>
            <h3>File Upload:</h3>
                Select a file to upload: <br />

            <form action="file_uploader.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" size="50" />
                <br />
                <input type="submit" value="Upload File" />
            </form>
  
            <form method="post" id="downloadForm" action="download_file.php">
                <textarea id="textarea" name="comments" required="true"></textarea>
                <br>
                
                <input type="radio" name="sex" value="Male" size="17">Male
                <input type="radio" name="sex" value="Female" size="17">Female
                <br>
                
                <input type="checkbox" name="fruit[]" value="Apple" size="17">Apple
                <input type="checkbox" name="fruit[]" value="Grape" size="17">Grape
                <input type="checkbox" name="fruit[]" value="Banana" size="17">Banana
                <br>
                
                <input type="submit" name="TEMP_SUBMIT" value="Submit and Download" />        
                <input type="submit" name="FINAL_SUBMIT" value="Final Submit and View Debriefing Report" />  
            </form>
		<div id="success"></div>
           
	</body>
</html>