import routeImporter from '../modules/importers/routeImporter';

const routes = routeImporter(require.context('./priorities', false, /.*\.js$/));
const RouterView = () => import('../pages/layout/Router.vue');

export default {
    path: '/priorities/',
    component: RouterView,
    meta: {
        breadcrumb: 'priorities',
        route: 'priorities.index',
    },
    children: routes,
};

