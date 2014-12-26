<?php

session_start();

require_once __DIR__.'/../core/bootstrap.php';

//use RedBean_Facade as R;

/**
 * @var $item \Collectify\Model\Item
 */
//$item = R::dispense('item');
//$item->title = 'mon title';
//R::store($item);
//var_dump($item);

$dispatcher = new \Collectify\Services\Dispatcher();
$dispatcher->dispatch();