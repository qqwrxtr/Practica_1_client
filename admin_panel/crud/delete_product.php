<?php
include 'conexiune.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = $id";
    $conexiune->query($sql);
    $conexiune->close();

    header("Location: /diana/admin_panel/index.php");
    exit;
}
?>
