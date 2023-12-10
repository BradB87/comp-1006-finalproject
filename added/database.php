
<?php
// connect to DB
class database
{
    private $host = '172.31.22.43';
    private $username = 'Bradley100078616';
    private $password = 'pF--mxlFhL';
    private $database = 'Bradley100078616';
    protected $connection;
    public function __construct()
    {
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if (!$this->connection) {
                echo "<p>Cannot connect to database</p>";
                exit;
            }
        }
        return $this->connection;
    }
}
$sql = mysqli_connect("host", "username", "password", "database");
//update crud
require("./database.php");
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['phone'];
    $password = $_POST['password'];
    $Confirm_password = $_POST['confirm password'];

    $sql = "INSERT INTO `mainContent`(`fname`, `lname`, `phone`, `email`, `password`, `confirm_password`) VALUES ('$fname','$lname','$phone','$email','$password', $confirm_password)";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

//Delete crud
$sql = "SELECT id, fname, lname,phone,email,password, confirm_password joinDate FROM mainContent";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //delete from row
    while ($row =  $result->fetch_assoc()) {
        echo
        "<div class='row'>" .
            $row["id"] . ": " .
            $row["first name"] . " " .
            $row["last name"] . " " .
            $row["phone"] . " " .
            $row["email"] . " " .
            $row["password"] . " " .
            $row["confirm_password"] . " " .
            "<div class='deletePerson'>
                    <form action='delete.php' method='POST'>
                        <button type='submit'>Delete</button>
                    </form>
                </div>" . " " .
            "<div class='editMember'><a href='#'>Edit</a></div>" .
            "<br></div>";
    }
} else {
    echo "0 results";
}

$conn->close();

$sql = "DELETE FROM mainContent WHERE id='" . $_GET['id'] . "' ";
if ($conn->query($sql) == TRUE) {
    header('Location:index.php');
} else {
    echo "Error, record not deleted" . $conn->error;
}
$conn->close();



?>