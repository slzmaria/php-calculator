<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {    
    echo file_get_contents(__DIR__ . '/form.html');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo file_get_contents(__DIR__ . '/form.html');
   include __DIR__ . '/calc.php';
   exit;
}


