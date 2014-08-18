<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
                <title>Login - Safety Section</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
                <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.css">
                <link rel="stylesheet" href="style_css/jquery-ui-1.10.4.custom.min.css">
                <link rel="stylesheet" href="style_css/style.css">
                <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
                <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
		<script>
			$(document).ready(function() {
		    	$('form').submit(function(event) { //Trigger on form submit
		    		$('#username + .throw_error').empty(); //Clear the messages first
		    		$('#success').empty();
		    
		    		var postForm = { //Fetch form data
		    			'username' 	: $('input[name=username]').val(), //Store name fields value
                                        'password' 	: $('input[name=password]').val() //Store name fields value
                                };
                                
		    		$.ajax({ //Process the form using $.ajax()
                        
		    			type 		: 'POST', //Method type
		    			url 		: 'Authentication.php', //Your form processing file url
		    			//data 		: postForm, //Forms name
                                        data            :jQuery("#postForm").serialize(),
		    			dataType 	: 'json',
		    			success 	: function(data) {	
		    			//		$('#success').fadeIn(1000).append('<p>' + data + '</p>'); //If successful, than throw a success message
                                                if (!data.success) { //If fails
                                                    if (data.errors.name) {
                                                        $('#success').fadeIn(1000).append('<br>'+data.errors.error); 
                                                    }
                                                }
                                                else{
                                                //    location.href = "welcome.php?name="+data.name;
                                                location.href = "Demo_27_Jie.php";
                                                }
		    			}
		    		});
		    	    event.preventDefault(); //Prevent the default submit
		    	});
});
		</script>
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
            <div id="demoHead" class="top-bar">
                <h1 class="middle3">Child and Family Services Reviews</h1>
                <h1 class="middle3">Onsite Review Instrument and Instructions</h1>
                <div class="top-bar-end"></div>
            </div>
            
            <div style="text-align: center;">
		<form method="post" id="postForm">
			<ul>
				<li>
					<label style="font-size: 16pt;" for="name">Name</label>
                                        <input type="text" name="username" id="name" aria-describedby="name-format" 
                                               required="true" aria-required=”true” style="height: 20px; width: 200px;"/>
                      
                                	<span class="throw_error"></span> 
				</li>

                                <li>
                                    <br><label style="font-size: 16pt;" for="password">Password</label> <input type="password" name="password" required="true" style="height: 28px; width: 200px;">
                                </li>
			</ul>
			<input type="submit" value="Submit" style="width: 100px;"/>
		</form>
		<div id="success" style="text-align: center;"></div>
              </div>
	</body>
</html>