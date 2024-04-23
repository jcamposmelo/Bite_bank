<?php
session_start();
$_SESSION['saldo_atualizado'] = 5000;

// Redirecionar de volta para o index ou qualquer outra página desejada
header("Location: index.php");
exit;
?>