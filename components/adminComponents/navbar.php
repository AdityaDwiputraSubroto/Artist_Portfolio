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

        foreach ($navbarItems as $navName => $navLink) {
            if ($navName != 'LOGOUT') { ?>
                <li><a class="
        <?php
                if ($activePage == $navName) {
                    echo "active";
                }
        ?>" href="<?php echo $navLink ?>"><?php echo $navName ?></a></li>
            <?php } else { ?>
                <li><a href="<?php echo $navLink ?>"><button class="btn btn-primary"><?php echo $navName ?></button></a></li>
            <?php } ?>
        <?php } ?>

    </ul>
</nav>