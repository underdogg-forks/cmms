const CustomerEdit = () => import('../../pages/customers/Edit.vue');

export default {
    name: 'customers.edit',
    path: ':id/edit',
    component: CustomerEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Customer',
    },
};
