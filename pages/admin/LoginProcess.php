<?php
session_start();

if (!isset($_POST['submit'])) {
    echo "  
                <script>
                    document.location.href='LoginPage.php';
                </script>   
            ";

    die();
}

include "../../proses/Connection.php";

$username = $_POST['username'];
$password = mysqli_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM admins WHERE username='$username'";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$num_rows = mysqli_num_rows($query);

if ($num_rows > 0) {
    $data = mysqli_fetch_assoc($query);

    //if (password_verify($password,$data['password'])) {
    if ($password ==  $data['password']) {
        $_SESSION['id_admin'] = $data['id_admin'];

        echo "
                    <script>
                        document.location.href='index.php';
                    </script>
                ";
    } else {
        echo "
                    <script>
                        alert('Login failed! Wrong username or password'); 
                        document.location.href='LoginPage.php';
                    </script>
                ";
    }
} else {
    echo "
                <script>
                    alert('Login failed! Wrong username or password'); 
                    document.location.href='LoginPage.php';
                </script>
            ";
}
