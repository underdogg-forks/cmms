<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForPriorities extends StructureMigration
{
    protected $permissions = [
        ['name' => 'priorities.index', 'description' => 'Priorities index', 'type' => 0, 'default' => false],
        ['name' => 'priorities.create', 'description' => 'Get create form  for Priorities', 'type' => 0, 'default' => false],
        ['name' => 'priorities.edit', 'description' => 'Get edit form for priorities', 'type' => 0, 'default' => false],
        ['name' => 'priorities.update', 'description' => 'Update edited priority', 'type' => 1, 'default' => false],
        ['name' => 'priorities.store', 'description' => 'Store newly created priority', 'type' => 1, 'default' => false],
        ['name' => 'priorities.destroy', 'description' => 'Delete priority', 'type' => 1, 'default' => false],
        ['name' => 'priorities.initTable', 'description' => 'Init table for priorities', 'type' => 0, 'default' => false],
        ['name' => 'priorities.getTableData', 'description' => 'Get table data for priorities', 'type' => 0, 'default' => false],
        ['name' => 'priorities.exportExcel', 'description' => 'Export excel for priorities', 'type' => 0, 'default' => false],
	['name' => 'priorities.selectOptions', 'description' => 'Get priorities list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'priorities', 'description' => 'Priorities group',
    ];

    protected $menu = [
        'name' => 'Priorities', 'icon' => 'list', 'link' => 'priorities.index', 'has_children' => false,
    ];

}

