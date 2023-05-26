<?php 
    session_start();

    include "../../../proses/Connection.php";

    if (!isset($_GET['id_commission_info'])) {
        echo "
                <script>
                    document.location.href='../CommissionInfoPage.php';
                </script>
            ";
            
        die();
    }

    $id_commission_info = $_GET['id_commission_info'];

    $sql = "UPDATE gallery SET id_commission_info=NULL WHERE id_commission_info='$id_commission_info'";
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    $sql = "DELETE FROM commission_info WHERE id_commission_info='$id_commission_info'";
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    echo "
            <script>
                alert('Commission deleted successfully!'); 
                document.location.href='../CommissionInfoPage.php';
            </script>
        ";
?>