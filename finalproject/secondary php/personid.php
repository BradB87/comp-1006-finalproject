<?php
require '/added/header.php';
// view table of users
session_start();
$query ="SELECT * FROM mainContent";

if($result= $mysql->query($query)){
    while($row = $result-> fetch_assoc()){
        $fname= $row["col1"];
        $lname= $row["col2"];
        $phone= $row["col3"];
        $email= $row["col4"];
        $password= $row["col5"]
        $confirm_password= $row["col6"];


        echo '<b>'.$fname. $lname.'</b></br>';
        echo $phone.'</br />';
        echo $email.'</br />';
        echo $password.'</br />';
        echo $confirm_password;
    }
    $result->query;
}
?>





























require './added/footer.php'
?>