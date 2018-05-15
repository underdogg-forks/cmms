const ContractorCreate = () => import('../../pages/contractors/Create.vue');

export default {
    name: 'contractors.create',
    path: 'create',
    component: ContractorCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Contractor',
    },
};
