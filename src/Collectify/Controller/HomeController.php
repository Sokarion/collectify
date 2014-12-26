<?php

namespace Collectify\Controller;

use Collectify\Model\ItemRepository;
use RedBean_Facade as R;

class HomeController
{
    public function homepageAction()
    {
        $item = R::load(ItemRepository::TYPE, 1);

        return array('item' => $item);
    }
}