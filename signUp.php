<?php include("dbConn.php") ?>
<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
// insert query
$sql = "INSERT INTO users (USERNAME,EMAIL,PASSWORD) 
VALUES ('$name','$email','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location:signIn.php");
}else{
    echo "ERROR:". $sql . "<br>".$conn->error;
}
$conn->close();

?>