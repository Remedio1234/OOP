
<?php
    $page = (isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : '');
    $file = "";
   switch ($page) {
        case 'about':
           $file = "pages/about.php";
        break;
        case 'contact':
            $file = "pages/contact.php";
        break;
        case 'services':
            $file = "pages/services.php";
        break;
        default:
            $file = "pages/home.php";
        break;
   }
   include "templates/content.php"
?>