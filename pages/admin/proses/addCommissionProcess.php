<?php
session_start();

include "../../../proses/Connection.php";

if (!isset($_POST['submit'])) {
    echo "
                <script>
                    document.location.href='../AddCommissionPage.php';
                </script>
            ";

    die();
}

$id_admin = $_SESSION['id_admin'];
$commission_name = htmlspecialchars($_POST['commission_name']);
$price = htmlspecialchars($_POST['price']);
$description = htmlspecialchars($_POST['description']);

$commission_name = ucwords($commission_name);

$sql = "INSERT INTO commission_info(jenis_commission,harga,deskripsi,id_admin) VALUES('$commission_name','$price','$description','$id_admin')";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

echo "
            <script>
                alert('Commission added successfully!'); 
                document.location.href='../CommissionInfoPage.php';
            </script>
        ";
