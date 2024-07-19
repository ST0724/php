<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$set = htmlspecialchars($_GET['set'], ENT_QUOTES);
$num = htmlspecialchars($_GET['num'], ENT_QUOTES);
print "私の名前は、" . $name . "<br />";
print "ご希望の商品は、" . $set . "<br />";
print "注文数は、" . $num . "<br />";