<?php
$mostraRisultati = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // prendo i valori dal form (uso cast a int per i numeri)
    $nome1 = $_POST['nome1'];
    $vinte1 = (int)$_POST['vinte1'];
    $pareggiate1 = (int)$_POST['pareggiate1'];
    $sconfitte1 = (int)$_POST['sconfitte1'];

    $nome2 = $_POST['nome2'];
    $vinte2 = (int)$_POST['vinte2'];
    $pareggiate2 = (int)$_POST['pareggiate2'];
    $sconfitte2 = (int)$_POST['sconfitte2'];

    // calcoli
    $punti1 = $vinte1 * 3 + $pareggiate1;
    $punti2 = $vinte2 * 3 + $pareggiate2;

    $partite1 = $vinte1 + $pareggiate1 + $sconfitte1;
    $partite2 = $vinte2 + $pareggiate2 + $sconfitte2;

    $mostraRisultati = true;
}
?>