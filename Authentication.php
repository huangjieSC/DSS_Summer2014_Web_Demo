<?php
  session_start();
  $errors = array(); //To store errors
  $form_data = array();
  
  function csv_to_array($filename='', $delimiter=',')
  {
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
  }
  
  function iterator2($arr, $user, $pass){
    foreach($arr as $key => $val){
        if(is_array($val)){
            if(strcmp($val['name'],$user)==0 && strcmp($val['password'],$pass)==0 ){
                return TRUE;
                break;
            }
        }
    }
    return FALSE;
}
  
$name=$_POST['username'];
$pass=$_POST['password'];
$data = csv_to_array('passwd.csv',',');

if((!isset($name)) || (!isset($pass))){
    $errorsMSG = 'user name/password cannot be empty';
    echo json_encode($errorsMSG);
}     
else{ 
    if(iterator2($data, $name, $pass))
    {
        $_SESSION['login_user']=$name;
     //   header('location:welcome.php');
        $_SESSION['logged_in'] = TRUE;
        $form_data['success'] = true;
        $form_data['name'] = $name;
    }
    else{
        $form_data['success'] = false;
        $errors['name'] = 'Fail to login.';
        $errors['error'] = 'Wrong username/password';
    	$form_data['errors']  = $errors;
    }
}

echo json_encode($form_data);
?>



