const StatusesEdit = () => import('../../pages/statuses/Edit.vue');

export default {
    name: 'statuses.edit',
    path: ':id/edit',
    component: StatusesEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Statuses',
    },
};
