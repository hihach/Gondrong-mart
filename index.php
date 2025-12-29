<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'core/bootstrap.php';
include 'partials/header.php';
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? null;
$actionfile= "action/$action.php";
$pagefile = "pages/$page.php";
if ($action && file_exists($actionfile)) {
    require $actionfile;
    exit;
} elseif (file_exists($pagefile)){
    require $pagefile;
}

include 'partials/footer.php';
