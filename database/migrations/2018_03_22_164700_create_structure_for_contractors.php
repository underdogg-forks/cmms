<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForContractors extends StructureMigration
{
    protected $permissions = [
        ['name' => 'contractors.index', 'description' => 'Contractors index', 'type' => 0, 'default' => false],
        ['name' => 'contractors.create', 'description' => 'Get create form  for Contractors', 'type' => 0, 'default' => false],
        ['name' => 'contractors.edit', 'description' => 'Get edit form for contractors', 'type' => 0, 'default' => false],
        ['name' => 'contractors.update', 'description' => 'Update edited contractor', 'type' => 1, 'default' => false],
        ['name' => 'contractors.store', 'description' => 'Store newly created contractor', 'type' => 1, 'default' => false],
        ['name' => 'contractors.destroy', 'description' => 'Delete contractor', 'type' => 1, 'default' => false],
        ['name' => 'contractors.initTable', 'description' => 'Init table for contractors', 'type' => 0, 'default' => false],
        ['name' => 'contractors.getTableData', 'description' => 'Get table data for contractors', 'type' => 0, 'default' => false],
        ['name' => 'contractors.exportExcel', 'description' => 'Export excel for contractors', 'type' => 0, 'default' => false],
	['name' => 'contractors.selectOptions', 'description' => 'Get contractors list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'contractors', 'description' => 'Contractors group',
    ];

    protected $menu = [
        'name' => 'Contractors', 'icon' => 'address-book', 'link' => 'contractors.index', 'has_children' => false,
    ];

}

