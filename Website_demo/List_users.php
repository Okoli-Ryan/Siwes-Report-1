<?php
/**
 * Created by PhpStorm.
 * User: Ugo
 * Date: 10/04/2019
 * Time: 10:09
 */
//require_once 'login.php';

require_once 'login.php';

$c = $pdo->query("select * from signup", 1);
$q = $_REQUEST['q'];
foreach ($c as $name){
    if($q === $name['username']) {
        echo "already in use";
        break;
    }
}
