<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForStatuses extends StructureMigration
{
    protected $permissions = [
        ['name' => 'statuses.index', 'description' => 'Statuses index', 'type' => 0, 'default' => false],
        ['name' => 'statuses.create', 'description' => 'Get create form  for Statuses', 'type' => 0, 'default' => false],
        ['name' => 'statuses.edit', 'description' => 'Get edit form for statuses', 'type' => 0, 'default' => false],
        ['name' => 'statuses.update', 'description' => 'Update edited status', 'type' => 1, 'default' => false],
        ['name' => 'statuses.store', 'description' => 'Store newly created status', 'type' => 1, 'default' => false],
        ['name' => 'statuses.destroy', 'description' => 'Delete status', 'type' => 1, 'default' => false],
        ['name' => 'statuses.initTable', 'description' => 'Init table for statuses', 'type' => 0, 'default' => false],
        ['name' => 'statuses.getTableData', 'description' => 'Get table data for statuses', 'type' => 0, 'default' => false],
        ['name' => 'statuses.exportExcel', 'description' => 'Export excel for statuses', 'type' => 0, 'default' => false],
	['name' => 'statuses.selectOptions', 'description' => 'Get statuses list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'statuses', 'description' => 'Statuses group',
    ];

    protected $menu = [
        'name' => 'Statuses', 'icon' => 'list', 'link' => 'statuses.index', 'has_children' => false,
    ];

}

