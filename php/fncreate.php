<?php require_once 'bdd.php';
$monClass = new MyDatabase();
if (isset($_POST['action']) && method_exists($monClass, $_POST['action'])) {
    $result = $monClass->{$_POST['action']}();
}