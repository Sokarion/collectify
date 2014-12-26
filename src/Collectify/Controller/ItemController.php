<?php

namespace Collectify\Controller;

use Collectify\Model\ItemRepository;

class ItemController
{
    public function listAction()
    {
        return array();
    }
    public function addAction()
    {

    }
    public function editAction()
    {

    }
    /**
     * Show information for one User
     */
    public function showAction($id)
    {
        $repository = new ItemRepository();
        $item = $repository->load($id);

        $category = $item->category;

        return array('item' => $item, 'category' => $category);
    }
}