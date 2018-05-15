const WorkOrderCreate = () => import('../../pages/workorders/Create.vue');

export default {
    name: 'workorders.create',
    path: 'create',
    component: WorkOrderCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Work Order',
    },
};
