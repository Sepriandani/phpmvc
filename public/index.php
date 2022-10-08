<?php

if (!session_id()) session_start(); //tidak perlu pakai kurung kurawal karena cuma satu baris

require_once '../app/init.php';

$app = new App();