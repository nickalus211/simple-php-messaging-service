<?php
error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';

function getConnection()
{
    $structure = file_get_contents(__DIR__ . '/../extra/structure.pgsql.sql');
    $dbh = new PDO('pgsql:host=localhost;dbname=spms', 'postgres', '');

    $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
    $dbh->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    $dbh->exec($structure);
    return $dbh;
}