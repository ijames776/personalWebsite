<?php
include 'includes/header.php';

if(isset($_GET['source'])) 
{ 
    $source = $_GET['source'];
    include 'projects/' . $source . '.php';
}
else { $source = ""; }

?>

