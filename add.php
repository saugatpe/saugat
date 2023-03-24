<?php
$email = $_POST["email"];
$password = $_POST["password"];
?>

your email: <?php echo $_POST["email"]; ?><br>
your password: <?php echo $_POST["password"]; ?>

<?php
include 'connect.php';
$sql = "INSERT INTO information(email, pass) VALUES('$email','$password')";
$result = mysqli_query($connect, $sql);

if($result){
    header('location: sites.php');
}

?>