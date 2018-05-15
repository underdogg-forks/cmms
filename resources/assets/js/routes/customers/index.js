const CustomerIndex = () => import('../../pages/customers/Index.vue');

export default {
    name: 'customers.index',
    path: '',
    component: CustomerIndex,
    meta: {
        breadcrumb: 'index',
        title: 'Customer Index',
    },
};
