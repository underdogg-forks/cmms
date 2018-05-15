const CalendarIndex = () => import('../pages/calendar/Index.vue');

export default {
    name: 'calendar.index',
    path: '/calendar',
    component: CalendarIndex,
    meta: {
        breadcrumb: 'calendar',
        title: 'Calendar',
    },
};
