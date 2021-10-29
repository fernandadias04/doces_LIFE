<?php

if (!session_id())
    session_start();

$id = $_REQUEST['__id'] ?? null;

if (!$id || !isset($_SESSION[$id])) {
    header('Location: index.php');
    exit;
}

$data = $_SESSION[$id];
$doces = $data['doces'] ?? null;

unset($_SESSION[$id]);

?>



<p>O nome digitado foi <?php echo $doces; ?></p>