<?php

namespace App\Forms\Builders;

use App\Contractor;
use LaravelEnso\FormBuilder\app\Classes\Form;

class ContractorForm
{
    private const TemplatePath = __DIR__.'/../Templates/contractor.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Contractor $contractor)
    {

        return $this->form->edit($contractor);
    }
}