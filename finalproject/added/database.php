
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
    // Create data 
    public function insertData($POST)
    {
        $fname = $this->connection->real_escape_string($_POST['fname']);
        $lname = $this->connection->real_escape_string($_POST['lname']);
        $phone = $this->connection->real_escape_string($_POST['phone']);
        $email = $this->connection->real_escape_string($_POST['email']);
        $password = $this->connection->real_escape_string($_POST['password']);

        $query = "INSERT INTO mainContent(fname,lname,phone,email,password) values('$fname','$lname','$phone','$email','$password)";
    }
    //Delete crud
    public function deleteRecord($id)
    {
        $query = "DELETE FROM mainContent WHERE id = '$id'";
        $sql = $this->connection->query($query);
        if ($sql == true) {
            header("Location:index.php?msg3=delete");
        } else {
            echo "</p> could not delete the record</P>";
        }
    }
    //Update crud
    public function update_record($postData)
    {
        $fname = $this->connection->real_escape_string($_POST['fname']);
        $lname = $this->connection->real_escape_string($_POST['lname']);
        $phone = $this->connection->real_escape_string($_POST['phone']);
        $password = $this->connection->real_escape_string($_POST['password']);
        $id = $this->connection->real_escape_string($_POST['id']);

        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE mainContent SET fname = '$fname', lname = '$lname', phone = '$phone', password= '$password' WHERE id = '$id'";
            $sql = $this->connection->query($query);
        }
        if ($sql == true) {
            header("location:index.php?msg1=update");
        } else {
            echo "<p> Update failed</P>";
        }
    }
}
