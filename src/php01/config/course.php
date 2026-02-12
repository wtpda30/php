<?php
var_dump($_GET);
var_dump($_POST);

$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
