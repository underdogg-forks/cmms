<?php

namespace App\Http\Controllers\WorkOrder;

use App\Http\Controllers\Controller;
use App\WorkOrder;
use App\Forms\Builders\WorkOrderForm;
use App\Http\Requests\ValidateWorkOrderRequest;

class WorkOrderController extends Controller
{
    public function create(WorkOrderForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidateWorkOrderRequest $request, WorkOrder $workorder)
    {

	$workorder = WorkOrder::create($request->all());


        return [
            'message' => __('The entity was created!'),
            'redirect' => 'workorders.edit',
            'id' => $workorder->id,
        ];
    }

    public function edit(WorkOrder $workorder, WorkOrderForm $form)
    {
        return ['form' => $form->edit($workorder)];
    }

    public function update(ValidateWorkOrderRequest $request, WorkOrder $workorder)
    {
	$workorder->update($request->all());

        return ['message' => __(config('enso.labels.savedChanges'))];
    }

    public function destroy(WorkOrder $workorder)
    {
        $workorder->delete();

        return [
            'message' => __(config('enso.labels.successfulOperation')),
            'redirect' => 'workorders.index',
        ];
    }
}
