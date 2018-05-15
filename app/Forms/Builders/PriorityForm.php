<?php

namespace App\Forms\Builders;

use App\Priority;
use LaravelEnso\FormBuilder\app\Classes\Form;

class PriorityForm
{
    private const TemplatePath = __DIR__.'/../Templates/priority.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Priority $priority)
    {

        return $this->form->edit($priority);
    }
}