<?php

namespace App\Tables\Builders;

use App\WorkOrder;
use LaravelEnso\VueDatatable\app\Classes\Table;

class WorkOrderTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/workorders.json';

    public function query()
    {
//        return WorkOrder::select(\DB::raw('id as "dtRowId", subject, description'));

        return WorkOrder::join('customers', 'work_orders.customer_id', '=', 'customers.id')
            ->join('contractors', 'work_orders.contractor_id', '=', 'contractors.id')
            ->join('addresses', 'work_orders.id', '=', 'addresses.addressable_id')
            ->join('statuses', 'work_orders.status_id', '=', 'statuses.id')
            ->join('priorities', 'work_orders.priority_id', '=', 'priorities.id')
            ->select(\DB::raw('work_orders.id as "dtRowId", work_orders.is_active as "is_active", work_orders.created_at as "created_at", work_orders.scheduled as "scheduled", work_orders.subject as "subject", work_orders.description as "description", customers.name as "customer", contractors.name as "contractor", addresses.city as "location", statuses.name as "status", priorities.name as "priority"'));

//        return WorkOrder::select(\DB::raw('id as "dtRowId", subject, description'));
    }
}
