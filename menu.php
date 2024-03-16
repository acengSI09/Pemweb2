<?php

// Array asosiatif untuk menu
$ar_menu = array(
    "Home" => "index.php",
    "Profile" => "profile.php",
    "Login" => "login.php",
    "Contact" => "contact.php"
);

// Fungsi untuk membuat menu
function generateMenu($menuArray)
{
    echo '<ul>';
    foreach ($menuArray as $label => $link) {
        echo '<li><a href="' . $link . '">' . $label . '</a></li>';
    }
    echo '</ul>';
}

// Panggil fungsi untuk menampilkan menu
generateMenu($ar_menu);

?>
