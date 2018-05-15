<?php

namespace App\Http\Controllers\Contractor;

use App\Contractor;
use App\Forms\Builders\ContractorForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContractorRequest;
use LaravelEnso\Core\app\Classes\ProfileBuilder;

class ContractorController extends Controller
{

    public function create(ContractorForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidateContractorRequest $request)
    {
        $contractor = Contractor::create($request->all());


        return [
            'message' => __('The contractor was created!'),
            'redirect' => 'contractors.edit',
            'id' => $contractor->id,
        ];
    }

    public function show(Contractor $contractor)
    {
        (new ProfileBuilder($contractor))->set();

        return ['contractor' => $contractor];
    }

    public function edit(Contractor $contractor, ContractorForm $form)
    {
        return ['form' => $form->edit($contractor)];
    }

    public function update(ValidateContractorRequest $request, Contractor $contractor)
    {
        $contractor->update($request->all());

        return ['message' => __(config('enso.labels.savedChanges'))];
    }

    public function destroy(Contractor $contractor)
    {
        $contractor->delete();

        return [
            'message' => __(config('enso.labels.successfulOperation')),
            'redirect' => 'contractors.index',
        ];
    }
}
