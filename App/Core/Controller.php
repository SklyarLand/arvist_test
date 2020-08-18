<?php


namespace App\Core;

/**
 * Class Controller
 * базовый класс контроллеров
 * @package App\Core
 */
class Controller
{
    /**
     * @var Model
     */
    public $model;
    /**
     * @var View
     */
    public $view;

    /**
     * Controller constructor.
     */
    function __construct()
    {
        $this->view = new View();
    }

    /**
     * основное действие
     */
    function index()
    {
    }
}
