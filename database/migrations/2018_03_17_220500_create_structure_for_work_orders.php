<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForWorkOrders extends StructureMigration
{
    protected $permissions = [
        ['name' => 'workorders.index', 'description' => 'Work Orders index', 'type' => 0, 'default' => false],
        ['name' => 'workorders.create', 'description' => 'Get create form  for Work Orders', 'type' => 0, 'default' => false],
        ['name' => 'workorders.edit', 'description' => 'Get edit form for workorders', 'type' => 0, 'default' => false],
        ['name' => 'workorders.update', 'description' => 'Update edited workorder', 'type' => 1, 'default' => false],
        ['name' => 'workorders.store', 'description' => 'Store newly created workorder', 'type' => 1, 'default' => false],
        ['name' => 'workorders.destroy', 'description' => 'Delete workorder', 'type' => 1, 'default' => false],
        ['name' => 'workorders.initTable', 'description' => 'Init table for workorders', 'type' => 0, 'default' => false],
        ['name' => 'workorders.getTableData', 'description' => 'Get table data for workorders', 'type' => 0, 'default' => false],
        ['name' => 'workorders.exportExcel', 'description' => 'Export excel for workorders', 'type' => 0, 'default' => false],
        ['name' => 'workorders.selectOptions', 'description' => 'Get work orders list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'workorders', 'description' => 'Work Orders group',
    ];

    protected $menu = [
        'name' => 'Work Orders', 'icon' => 'tasks', 'link' => 'workorders.index', 'has_children' => false,
    ];

}

