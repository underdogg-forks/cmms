<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForCalendar extends StructureMigration
{
    protected $permissions = [
        ['name' => 'calendar.index', 'description' => 'calendar index', 'type' => 0, 'default' => false],
        ['name' => 'calendar.create', 'description' => 'Get create form  for calendar', 'type' => 0, 'default' => false],
        ['name' => 'calendar.edit', 'description' => 'Get edit form for calendar', 'type' => 0, 'default' => false],
        ['name' => 'calendar.update', 'description' => 'Update edited status', 'type' => 1, 'default' => false],
        ['name' => 'calendar.store', 'description' => 'Store newly created status', 'type' => 1, 'default' => false],
        ['name' => 'calendar.destroy', 'description' => 'Delete status', 'type' => 1, 'default' => false],
        ['name' => 'calendar.initTable', 'description' => 'Init table for calendar', 'type' => 0, 'default' => false],
        ['name' => 'calendar.getTableData', 'description' => 'Get table data for calendar', 'type' => 0, 'default' => false],
        ['name' => 'calendar.exportExcel', 'description' => 'Export excel for calendar', 'type' => 0, 'default' => false],
	['name' => 'calendar.selectOptions', 'description' => 'Get calendar list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'calendar', 'description' => 'calendar group',
    ];

    protected $menu = [
        'name' => 'Calendar', 'icon' => 'calendar', 'link' => 'calendar.index', 'has_children' => false,
    ];

}

