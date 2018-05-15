const WorkOrderEdit = () => import('../../pages/workorders/Edit.vue');

export default {
    name: 'workorders.edit',
    path: ':id/edit',
    component: WorkOrderEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Work Order',
    },
};
