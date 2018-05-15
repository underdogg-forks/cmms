import routeImporter from '../modules/importers/routeImporter';

const routes = routeImporter(require.context('./contractors', false, /.*\.js$/));
const RouterView = () => import('../pages/layout/Router.vue');

export default {
    path: '/contractors/',
    component: RouterView,
    meta: {
        breadcrumb: 'contractors',
        route: 'contractors.index',
    },
    children: routes,
};

