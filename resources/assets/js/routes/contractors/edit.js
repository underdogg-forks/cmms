const ContractorEdit = () => import('../../pages/contractors/Edit.vue');

export default {
    name: 'contractors.edit',
    path: ':id/edit',
    component: ContractorEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Contractor',
    },
};
