<?php

require('database.php');
/*----------------------------------------------------------Validate-----------------------------------------------------------------------------------------*/
// validate given input choice to confirm its correct
$sql = "SELECT user_id FROM  adminUsers WHERE  email ='$email' AND password='$password'";



//validate information is correct
class validate
{   
  //empty validation check
  public function checkEmpty($data, $fields)
  {
    $error = null;
    foreach ($fields as $value) {
      if (empty($data[$value])) {
        $error .= "<p>$value field is empty</p>";
      }
    }
    return $error;
  }
  // check to see if email follows the email format
  public function validEmail($email)
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;
  }
}
  if ((empty($password)) || ($password != $confirm)) {
    echo '<p> Password is invalid</P>';
      $pass= false;
  }



  
?>
