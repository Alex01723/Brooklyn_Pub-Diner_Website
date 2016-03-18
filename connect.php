<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15/03/2016
 * Time: 11:35
 */
try{
    $DB = new PDO('sqlite:'.dirname(__FILE__).'/database.sqlite');
    $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
} catch(Exception $e) {
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}
?>