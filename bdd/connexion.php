<?php

$pdo = new PDO('mysql:host=localhost;dbname=wikies;charset=utf8', 'root', '');

function getNotes(){
    global $pdo;
    return $pdo->query("SELECT * FROM note")->fetchAll();
}