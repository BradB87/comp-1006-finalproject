<?php

require 'database.php';
/*----------------------------------------------------------Validate-----------------------------------------------------------------------------------------*/
// validate given input choice to confirm its correct
$sql = "SELECT user_id FROM  adminUsers WHERE  password ='$password' AND confirm_password='$confirm_password'";
$sql = "SELECT id FROM  mainContent WHERE  password ='$password'";


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
  // check for valid  first name format
  public function validFname($fname)
  {
    if (preg_match("/^[a-zA-z]*$/", $fname)) {
      return true;
    }
    return false;
  }
  // check for valid last name format
  public function validLname($lname)
  {
    if (preg_match("/^[a-zA-z]*$/", $lname)) {
      return true;
    }
    return false;
  }
  // check for valid last phone number format
  public function validPhone($phone)
  {
    if (preg_match("/^[a-zA-z]*$/", $phone)) {
      return true;
    }
    return false;
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

  
?>
