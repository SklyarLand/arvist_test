<?php


namespace App\Controllers;


use App\Core\View;
use App\Models\Branch;
use App\Models\Worker;

/**
 * Class BranchesController
 * Класс работающий с филиалами компании
 * @package App\Controllers
 */
class BranchesController extends \App\Core\Resource
{
    /**
     * BranchesController constructor.
     */
    function __construct()
    {
        $this->view = new View();
        $this->model = new Branch();
    }

    /**
     *Вывод всех филиалов
     */
    public function index()
    {
        $branches = $this->model->all();
        $this->view->generate(
            'branches/index.php',
            'base-template.php',
            compact('branches'));
    }

    /**
     * @param $id
     * Вывод информации о филиале и его сотрудников
     */
    public function show($id)
    {
        $branch = $this->model->find($id);

        $workerModel = new Worker();
        $workers = $workerModel->workersForBranch($id);

        $this->view->generate(
            'branches/show.php',
            'base-template.php',
            compact('branch', 'workers'));
    }

}