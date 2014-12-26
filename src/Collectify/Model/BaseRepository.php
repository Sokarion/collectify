<?php
/**
 * Created by PhpStorm.
 * User: Loretic
 * Date: 23-12-14
 * Time: 16:16
 */

namespace Collectify\Model;
use RedBean_Facade as R;

abstract class BaseRepository
{
    abstract function getType();

    public function create($data)
    {
        $object = R::dispense($this->getType());

        $object = $this->setData($data, $object);

        $this->save($object);
    }

    public function update($data, $object)
    {
        $object = $this->setData($data, $object);
        $this->save($object);
    }

    private function setData($data, $object)
    {
        foreach ($data as $property => $value) {
            $object->$property = $value;
        }

        return $object;
    }

    public function save($object)
    {
        R::store($object);
    }

    public function load($id)
    {
        return R::load($this->getType(), $id);
    }

    public function getAll()
    {
        return R::findAll($this->getType());
    }

    public function remove($id)
    {
        R::trash($this->load($id));
    }
}