<?php
require '/added/header.php';
// view table of users
session_start();

if (!isset($_SESSION['id'])) {
    header('location:signin.php');
    exit();
} else {
    require './include/database.php';
    $sql = "SELECT * FROM mainContent";
    $result = $conn->query($sql);

    echo '<section class = person-row>';
    echo '<table class = "table-striped">

    <tr>
    <th> First name</th>
    <th> Last name</th>
    <th> Phone</th>
    <th> Email</th>
    <th> password</th>
    </tr>';
    foreach ($result as $row) {
        echo '<tr>  
    <td> ' . $row['First name'] . '</td>
    <td> ' . $row['last name'] . '</td>
    <td> ' . $row['Phone'] . '</td>
    <td> ' . $row['Email'] . '</td>
    <td> ' . $row['password'] . '</td>
    </tr>';
    }
    echo '</table>';
    echo '<a class="btn btn-warning" href= "logout.php">Logout</a>';
    echo '</section>';

    // disconnect from sql
    $conn = null;
}
require './added/footer.php'
?>