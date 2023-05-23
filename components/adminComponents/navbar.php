<nav class="navbar">
    <ul>
        <?php
        $navbarItems = array(
            "HOME" => "index.php",
            "ABOUT" => "AboutPage.php",
            "GALLERY" => "GalleryPage.php",
            "COMMISSION INFO" => "CommissionInfoPage.php",
            "CONTACT" => "ContactPage.php",
            "LOGOUT" => "LogoutProcess.php"
        );

        foreach ($navbarItems as $navName => $navLink) { ?>
            <li><a class=" 
        <?php
            if ($activePage == $navName) {
                echo "active";
            }
        ?>" href="<?php echo $navLink ?>"><?php echo $navName ?></a></li>
        <?php } ?>
    </ul>
</nav>