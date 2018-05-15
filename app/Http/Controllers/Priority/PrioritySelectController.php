<?php

namespace App\Http\Controllers\Priority;

use App\Priority;
use App\Http\Controllers\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class PrioritySelectController extends Controller
{
    use OptionsBuilder;

    protected $model = Priority::class;

    protected $queryAttributes = ['name', 'color'];
}
