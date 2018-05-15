const PrioritiesCreate = () => import('../../pages/priorities/Create.vue');

export default {
    name: 'priorities.create',
    path: 'create',
    component: PrioritiesCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Priorities',
    },
};
