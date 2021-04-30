<?php
include "__php__.php";

$db=new DB();
$table=Contact::find();
unset($db);
$alerts = alerts();
view('messages', null, ['table' => $table], $alerts);
?>