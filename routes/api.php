<?php

Route::namespace('Auth')
    ->group(function () {
        Route::post('login', 'LoginController@login')
            ->name('login');
        Route::post('logout', 'LoginController@logout')
            ->name('logout');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')
            ->name('password.email');
        Route::post('password/reset', 'ResetPasswordController@reset')
            ->name('password.reset');
    });

Route::middleware(['auth'])
    ->prefix('dashboard')->as('dashboard.')
    ->group(function () {
        Route::get('', 'ChartController@index')
            ->name('index')
            ->middleware('core');
        Route::get('line', 'ChartController@line')
            ->name('line');
        Route::get('bar', 'ChartController@bar')
            ->name('bar');
        Route::get('pie', 'ChartController@pie')
            ->name('pie');
        Route::get('doughnut', 'ChartController@doughnut')
            ->name('doughnut');
        Route::get('radar', 'ChartController@radar')
            ->name('radar');
        Route::get('polar', 'ChartController@polar')
            ->name('polar');
        Route::get('bubble', 'ChartController@bubble')
            ->name('bubble');
    });

Route::middleware(['auth', 'core'])
    ->group(function () {
        Route::namespace('Administration')
            ->prefix('administration')->as('administration.')
            ->group(function () {
                Route::namespace('Owner')
                    ->prefix('owners')->as('owners.')
                    ->group(function () {
                        Route::get('initTable', 'OwnerTableController@init')
                            ->name('initTable');
                        Route::get('getTableData', 'OwnerTableController@data')
                            ->name('getTableData');
                        Route::get('exportExcel', 'OwnerTableController@excel')
                            ->name('exportExcel');

                        Route::get('selectOptions', 'OwnerSelectController@options')
                            ->name('selectOptions');
                    });

                Route::resource('owners', 'Owner\OwnerController', ['except' => ['show']]);

                Route::namespace('User')
                    ->prefix('users')->as('users.')
                    ->group(function () {
                        Route::get('initTable', 'UserTableController@init')
                            ->name('initTable');
                        Route::get('getTableData', 'UserTableController@data')
                            ->name('getTableData');
                        Route::get('exportExcel', 'UserTableController@excel')
                            ->name('exportExcel');
                        Route::get('selectOptions', 'UserSelectController@options')
                            ->name('selectOptions');
                    });

                Route::resource('users', 'User\UserController');
            });
    });

Route::middleware(['auth', 'core'])
    ->group(function () {

        Route::namespace('Contractor')
            ->prefix('contractors')->as('contractors.')
            ->group(function () {
                Route::get('initTable', 'ContractorTableController@init')
                    ->name('initTable');
                Route::get('getTableData', 'ContractorTableController@data')
                    ->name('getTableData');
                Route::get('exportExcel', 'ContractorTableController@excel')
                    ->name('exportExcel');
                Route::get('selectOptions', 'ContractorSelectController@options')
                    ->name('selectOptions');
            });

        Route::resource('contractors', 'Contractor\ContractorController');

        Route::namespace('Customer')
            ->prefix('customers')->as('customers.')
            ->group(function () {
                Route::get('initTable', 'CustomerTableController@init')
                    ->name('initTable');
                Route::get('getTableData', 'CustomerTableController@data')
                    ->name('getTableData');
                Route::get('exportExcel', 'CustomerTableController@excel')
                    ->name('exportExcel');
                Route::get('selectOptions', 'CustomerSelectController@options')
                    ->name('selectOptions');
            });

        Route::resource('customers', 'Customer\CustomerController');

        Route::namespace('Priority')
            ->prefix('priorities')->as('priorities.')
            ->group(function () {
                Route::get('initTable', 'PriorityTableController@init')
                    ->name('initTable');
                Route::get('getTableData', 'PriorityTableController@data')
                    ->name('getTableData');
                Route::get('exportExcel', 'PriorityTableController@excel')
                    ->name('exportExcel');
                Route::get('selectOptions', 'PrioritySelectController@options')
                    ->name('selectOptions');
            });

        Route::resource('priorities', 'Priority\PriorityController');

        Route::namespace('Status')
            ->prefix('statuses')->as('statuses.')
            ->group(function () {
                Route::get('initTable', 'StatusTableController@init')
                    ->name('initTable');
                Route::get('getTableData', 'StatusTableController@data')
                    ->name('getTableData');
                Route::get('exportExcel', 'StatusTableController@excel')
                    ->name('exportExcel');
                Route::get('selectOptions', 'StatusSelectController@options')
                    ->name('selectOptions');
            });

        Route::resource('statuses', 'Status\StatusController');

        Route::namespace('WorkOrder')
            ->prefix('workorders')->as('workorders.')
            ->group(function () {
                Route::get('initTable', 'WorkOrderTableController@init')
                    ->name('initTable');
                Route::get('getTableData', 'WorkOrderTableController@data')
                    ->name('getTableData');
                Route::get('exportExcel', 'WorkOrderTableController@excel')
                    ->name('exportExcel');
                Route::get('selectOptions', 'WorkOrderSelectController@options')
                    ->name('selectOptions');
            });

        Route::resource('workorders', 'WorkOrder\WorkOrderController');

    });
