<?php

namespace App\Http\Controllers\Contractor;

use App\Contractor;
use App\Http\Controllers\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class ContractorSelectController extends Controller
{
    use OptionsBuilder;

    protected $model = Contractor::class;

    protected $queryAttributes = ['name', 'email', 'phone'];
}
