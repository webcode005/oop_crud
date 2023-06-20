<?php 
Class students
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "oop_crud";

    public $conn;

    public function __construct(){

        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->dbname);

        if (mysqli_connect_error()) {
           trigger_error('Error in DB'. mysqli_connect_error());
        }
        else {
            return $this->conn;
        }

    }


    function showall() {
        $query = "select * from students order by id desc";

        $result = $this->conn->query($query);
        
        if($result->num_rows > 0)
        {
            $data = array();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        }

    }

    function add()
    {

        $name= $_POST["name"];
        $email= $_POST["email"];
        $mobile= $_POST["mobile"];

        $query = "INSERT INTO students (`name`,`email`,`mobile`) VALUES ('$name','$email','$mobile')";

        if ($this->conn->query($query) == TRUE) {

            $_SESSION["message"] = "New record created successfully";

            header("location:index.php");

        } 
        else 
        {
          echo "Error: " . $query . "<br>" . $this->conn->error;
        }
        
        $this->conn->close();
    }

    
    function showsingle($id) {

        $query = "select * from students where id='$id' order by id desc";

        $result = $this->conn->query($query);
        
        if($result->num_rows > 0)
        {
            $data = array();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        }

    }

    
    function update()
    {

        $id= $_POST["id"];
        $name= $_POST["name"];
        $email= $_POST["email"];
        $mobile= $_POST["mobile"];

        $query = "UPDATE students SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id='$id' ";

        if ($this->conn->query($query) == TRUE) {

            $_SESSION["message"] = "Record updated successfully";

            header("location:index.php");

        } 
        else 
        {
          echo "Error: " . $query . "<br>" . $this->conn->error;
        }
        
        $this->conn->close();
    }


    function delete($id){
        $query = "DELETE FROM students  WHERE id='$id' ";

        if ($this->conn->query($query) == TRUE) {

            $_SESSION["message"] = "Record deleted successfully";

            header("location:index.php");

        } 
        else 
        {
          echo "Error: " . $query . "<br>" . $this->conn->error;
        }
        
        $this->conn->close();
    }
}





?>