<?php
require "includes/Db.class.php";

// $db = new Db();
$tracks = Db::getTracks();

print "<pre>";
print_r($tracks);
