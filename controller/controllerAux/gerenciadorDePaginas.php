<?php 
$p = $_REQUEST['p'];

$acao = $_REQUEST['acao'];

$pag[1] = 'view/principal.php';
$pag[2] = 'view/chequesDevolvidos.view.php';
$pag[3] = 'view/depositos.view.php';
$pag[4] = 'view/caixaDiario.view.php';
$pag[5] = 'view/serasa.view.php';

if (!$p){  $p = 1; }

$active[$p] = 'active';

include 'view/partials/sideMenu.php';

include "$pag[$p]"; 
