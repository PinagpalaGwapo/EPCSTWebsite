<!-- inludes for reusability, para di na natin ulitin to -->
<?php include_once 'component/header.php' ?>
<?php include_once 'component/nav.php' ?>

<!-- This Where will put the HOME, ABOUT, ETC Component: Ditong page nalang babagohin 
natin tas sa component folder natin lalagay yong file -->
<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
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
} else {
    echo '404 page not found.';
}
?>

<?php include_once 'component/footer.php' ?>
