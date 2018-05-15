const PrioritiesEdit = () => import('../../pages/priorities/Edit.vue');

export default {
    name: 'priorities.edit',
    path: ':id/edit',
    component: PrioritiesEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Priorities',
    },
};
