<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'landing';
// <!-- includes for reusability, para di na natin ulitin to -->
if ($page !== 'landing') {
    include_once 'component/header.php';
    include_once 'component/nav.php';
}


// <!-- This Where will put the HOME, ABOUT, ETC Component: Ditong page nalang babagohin 
// natin tas sa component folder natin lalagay yong file -->
if ($page === 'home') {
    include 'component/home.php';
} elseif ($page === 'about') {
    include 'component/about.php';
}  elseif ($page === 'program') {
    include 'component/program.php';
}  elseif ($page === 'admission') {
    include 'component/admission.php';
}  elseif ($page === 'linkage') {
    include 'component/linkage.php';
} elseif ($page === 'contact') {
    include 'component/contact.php';
} elseif ($page === 'landing') {
    include 'component/landing.php';
} elseif ($page === 'newsEvents') {
    include 'component/newsEvents.php';
} else {
    echo '404 page not found.';
}

// Include the footer for all pages except the landing page
include_once 'component/footer.php';
?>
