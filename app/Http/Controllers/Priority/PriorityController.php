<?php

namespace App\Http\Controllers\Priority;

use App\Priority;
use App\Forms\Builders\PriorityForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePriorityRequest;

class PriorityController extends Controller
{

    public function create(PriorityForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidatePriorityRequest $request)
    {
        $priority = Priority::create($request->all());

        return [
            'message' => __('The priority was created!'),
            'redirect' => 'priorities.edit',
            'id' => $priority->id,
        ];
    }

    public function show(Priority $priority)
    {
        return ['priority' => $priority];
    }

    public function edit(Priority $priority, PriorityForm $form)
    {
        return ['form' => $form->edit($priority)];
    }

    public function update(ValidatePriorityRequest $request, Priority $priority)
    {
        $priority->update($request->all());

        return ['message' => __(config('enso.labels.savedChanges'))];
    }

    public function destroy(Priority $priority)
    {
        $priority->delete();

        return [
            'message' => __(config('enso.labels.successfulOperation')),
            'redirect' => 'priorities.index',
        ];
    }
}
