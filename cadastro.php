<?php 

$nome=$_POST["nome"];
$number=$_POST["number"];
$data=$_POST["data"];
$email=$_POST["email"];
$tipousuario=$_POST["tipousuario"];

$hostname = "localhost";
$database = "rembolsodb";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$query="INSERT INTO `cadastro` (`name`, `cpf`, `data_nasci`, `email`) VALUES ('$nome', '$number', '$data', '$email')";
$stmt=$conn->prepare($query);
$stmt->execute();

?>
