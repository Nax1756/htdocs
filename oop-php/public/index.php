<?php

require_once ('/xampp/htdocs/oop-php/vendor/autoload.php');

$developer = new app\Developer('Yurii', 15, [8, 10]);

var_dump($developer->name);