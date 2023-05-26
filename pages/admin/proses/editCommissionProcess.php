<?php 
    session_start();

    include "../../../proses/Connection.php";

    if (!isset($_POST['submit'])) {
        echo "
                <script>
                    document.location.href='../EditCommissionPage.php';
                </script>
            ";
            
        die();
    }

    $id_admin = $_SESSION['id_admin'];
    $id_commission_info = $_POST['id_commission_info'];
    $commission_name = htmlspecialchars($_POST['commission_name']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);

    $commission_name = ucwords($commission_name);

    $sql = "UPDATE commission_info SET jenis_commission='$commission_name', harga='$price', deskripsi='$description', id_admin='$id_admin' WHERE id_commission_info='$id_commission_info'";
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    echo "
            <script>
                alert('Commission edited successfully!'); 
                document.location.href='../CommissionInfoPage.php';
            </script>
        ";
?>