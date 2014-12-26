<?php

namespace Collectify\Services;


class Viewer
{
    private $viewPath;
    private $viewsParameters;
    private $controllerParameters;
    private $dynamizer;

    public function __construct()
    {
        $this->dynamizer = new Dynamizer();
    }

    public function setViewParameters($parameters)
    {
        $this->viewsParameters = $parameters;

        return $this;
    }

    public function setControllerParameters($parameters)
    {
        $this->controllerParameters = $parameters;

        return $this;
    }

    public function render()
    {
        $this->createPath();
        $view = file_get_contents($this->viewPath);

        echo $this->dynamizer->setParameters($this->controllerParameters)->setView($view)->dynamize();
    }

    public function createPath()
    {
        list($controller, $action) = $this->viewsParameters;
        $viewPathString = sprintf('../src/Collectify/Views/%s/%s.html', $controller, $action);

        if(!file_exists($viewPathString)) {
            throw new \Exception("view $viewPathString not found");
        }

        $this->viewPath = $viewPathString;
    }


}