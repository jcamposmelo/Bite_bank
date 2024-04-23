<?php
session_start();

// Condição que verifica saldo após saque
if (isset($_SESSION['saldo_atualizado'])) {
    $saldo = $_SESSION['saldo_atualizado'];
} else {
    $saldo = 5000; 
}
?>