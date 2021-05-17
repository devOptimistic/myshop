<?php
include "__php__.php";

$db=new DB();
$table=Contact::find();
unset($db);
$alerts = Alert::alerts();
view('messages', null, ['table' => $table], $alerts);
?>