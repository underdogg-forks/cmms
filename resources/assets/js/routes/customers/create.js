const CustomerCreate = () => import('../../pages/customers/Create.vue');

export default {
    name: 'customers.create',
    path: 'create',
    component: CustomerCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Customer',
    },
};
