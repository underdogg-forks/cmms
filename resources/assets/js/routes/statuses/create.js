const StatusesCreate = () => import('../../pages/statuses/Create.vue');

export default {
    name: 'statuses.create',
    path: 'create',
    component: StatusesCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Statuses',
    },
};
