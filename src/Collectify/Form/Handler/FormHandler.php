<?php

namespace Collectify\Form\Handler;

class FormHandler
{
    private $form;
    private $repository;
    private $data;
    private $object;

    CONST CREATE = 0;
    CONST UPDATE = 1;

    public function __construct($type, $data = array())
    {
        $formClass = sprintf('Collectify\\Form\\%sForm', ucfirst($type));
        $repositoryClass = sprintf('Collectify\\Model\\%sRepository', ucfirst($type));

        $this->form = new $formClass();
        $this->repository = new $repositoryClass();
        $this->data = $data;
        //$this->handle();
    }

    public function setObject($object)
    {
        $this->object = $object;
    }

    private function isPosted()
    {
        return !empty($_POST);
    }

    private function dataExist()
    {
        return array_key_exists('nibble_form', $_POST);
    }

    private function getData()
    {
        $data =  $_POST['nibble_form'];
        unset($data['_crsf_token']);

        return $data;
    }

    public function getForm()
    {
        $form = $this->form->getForm();
        if(!empty($this->data)){
            $form->addData($this->data);
        }

        return $form;
    }

    public function handle($state = self::CREATE)
    {
        if($this->isPosted() && $this->dataExist()){
            if ($this->form->getForm()->validate()) {

                $this->createOrUpdate($state);


                return true;
            }
        }
    }

    private function createOrUpdate($state)
    {
        $data = $this->getData();

        if(self::CREATE === $state) {
            $this->repository->create($data);
        } else {
            $this->repository->update($data, $this->object);
        }
    }
}