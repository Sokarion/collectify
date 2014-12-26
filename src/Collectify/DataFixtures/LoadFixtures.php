<?php

require_once __DIR__.'/../../../core/bootstrap.php';


$className = $argv[1];

$classFixtures = sprintf('\\Collectify\\DataFixtures\\%sFixtures', ucfirst($className));
$objectFixtures = new $classFixtures();

$objectFixtures->loadFixtures();