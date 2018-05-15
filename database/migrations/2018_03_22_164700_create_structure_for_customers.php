<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForCustomers extends StructureMigration
{
    protected $permissions = [
        ['name' => 'customers.index', 'description' => 'customers index', 'type' => 0, 'default' => false],
        ['name' => 'customers.create', 'description' => 'Get create form  for customers', 'type' => 0, 'default' => false],
        ['name' => 'customers.edit', 'description' => 'Get edit form for customers', 'type' => 0, 'default' => false],
        ['name' => 'customers.update', 'description' => 'Update edited customer', 'type' => 1, 'default' => false],
        ['name' => 'customers.store', 'description' => 'Store newly created customer', 'type' => 1, 'default' => false],
        ['name' => 'customers.destroy', 'description' => 'Delete customer', 'type' => 1, 'default' => false],
        ['name' => 'customers.initTable', 'description' => 'Init table for customers', 'type' => 0, 'default' => false],
        ['name' => 'customers.getTableData', 'description' => 'Get table data for customers', 'type' => 0, 'default' => false],
        ['name' => 'customers.exportExcel', 'description' => 'Export excel for customers', 'type' => 0, 'default' => false],
	['name' => 'customers.selectOptions', 'description' => 'Get customers list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'customers', 'description' => 'customers group',
    ];

    protected $menu = [
        'name' => 'Customers', 'icon' => 'address-book', 'link' => 'customers.index', 'has_children' => false,
    ];

}

