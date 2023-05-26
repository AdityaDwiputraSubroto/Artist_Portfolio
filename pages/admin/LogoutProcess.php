<?php
    session_start();

    if (!isset($_SESSION['id_admin'])) {
        echo "
                <script>
                    alert('You are not logged in!'); 
                    document.location.href='LoginPage.php';
                </script>
            ";
            
        die();
    }

    session_destroy();
    
    echo "
            <script>
                alert('You have logged out!'); 
                document.location.href='LoginPage.php';
            </script>
        ";
?>