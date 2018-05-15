<?php

namespace App\Http\Controllers\Status;

use App\Status;
use App\Forms\Builders\StatusForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateStatusRequest;

class StatusController extends Controller
{

    public function create(StatusForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidateStatusRequest $request)
    {
        $status = Status::create($request->all());

        return [
            'message' => __('The status was created!'),
            'redirect' => 'statuses.edit',
            'id' => $status->id,
        ];
    }

    public function show(Status $status)
    {
        return ['status' => $status];
    }

    public function edit(Status $status, StatusForm $form)
    {
        return ['form' => $form->edit($status)];
    }

    public function update(ValidateStatusRequest $request, Status $status)
    {
        $status->update($request->all());

        return ['message' => __(config('enso.labels.savedChanges'))];
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return [
            'message' => __(config('enso.labels.successfulOperation')),
            'redirect' => 'statuses.index',
        ];
    }
}
