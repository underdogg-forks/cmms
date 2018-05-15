<?php

namespace App\Http\Controllers\Status;

use App\Status;
use App\Http\Controllers\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class StatusSelectController extends Controller
{
    use OptionsBuilder;

    protected $model = Status::class;

    protected $queryAttributes = ['name', 'color'];
}
