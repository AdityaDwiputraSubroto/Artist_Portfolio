<nav class="navbar">
    <ul>
        <?php
        $navbarItems = array(
            "HOME" => "index.php",
            "GALLERY" => "GalleryPage.php",
            "COMMISSION INFO" => "CommissionInfoPage.php",
            "CONTACT" => "ContactPage.php"
        );

        foreach ($navbarItems as $navName => $navLink) { ?>
            <li><a class=" 
        <?php
            if ($activePage == $navName) {
                echo "active";
            }
        ?>" href="pages/public/<?php echo $navLink ?>"><?php echo $navName ?></a></li>
        <?php } ?>
    </ul>
</nav>