<?php

namespace App\Forms\Builders;

use App\WorkOrder;
use LaravelEnso\FormBuilder\app\Classes\Form;

class WorkOrderForm
{
    private const TemplatePath = __DIR__.'/../Templates/workorder.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(WorkOrder $workorder)
    {

        return $this->form->edit($workorder);
    }
}