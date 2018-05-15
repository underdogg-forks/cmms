<?php

namespace App\Forms\Builders;

use App\Status;
use LaravelEnso\FormBuilder\app\Classes\Form;

class StatusForm
{
    private const TemplatePath = __DIR__.'/../Templates/status.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Status $status)
    {

        return $this->form->edit($status);
    }
}