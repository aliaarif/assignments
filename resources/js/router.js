import Vue from 'vue';
import Vuelidate from "vuelidate";
import VueRouter from 'vue-router';
import Welcome from './components/WelcomeComponent';
import Dashboard from './components/DashboardComponent';
import LoginComponent from './components/LoginComponent';
import AdminTestComponent from './components/AdminTestComponent';
import VueMeta from 'vue-meta';

Vue.use(VueRouter);
Vue.use(Vuelidate);
Vue.use(VueMeta);

window.layout = localStorage.getItem('layout') != null ? localStorage.getItem('layout') : 'Welcome';
window.loggedIn = localStorage.getItem('loggedIn') ? localStorage.getItem('loggedIn') : false;
window.role = localStorage.getItem('role') ? localStorage.getItem('role') : null;
window.token = localStorage.getItem('token') ? localStorage.getItem('token') : null;
const routes = [
  {
    path: '/',
    component: Welcome,
    name: 'Welcome',
    children: [
      {
        path: '/login',
        component: LoginComponent,
        name: 'Login',
        meta: {
          auth: true,
          title: 'Login Panel | Assignment',
          metaTags: [
            {
              name: 'description',
              content: 'Login Panel for assignment app'
            },
            {
              property: 'og:description',
              content: 'Login Panel for assignment app'
            }
          ]
        }
      },
    ],
  },
  {
    path: '/dashboard',
    component: Dashboard,
    // redirect:'/dashboard',
    children: [
      {
        path: '/administrator',
        component: AdminTestComponent,
        name: 'Administrator'
      },
    ],
    meta: {
      auth: true,
      title: 'Dashboard - Example App | Assignment',
      metaTags: [
        {
          name: 'description',
          content: 'The home page of our assignment app.'
        },
        {
          property: 'og:description',
          content: 'The home page of our assignment app.'
        }
      ]
    },
    beforeEnter: (to, from, next) => {
      axios.get('api/verify/' + role)
        .then(res => {
          console.log(res);
          if (res.data.status == 0) {
            localStorage.removeItem('token');
            localStorage.removeItem('role');
            localStorage.removeItem('loggedIn');
            next('/');
          } else { next(); }
        }).catch(err => {
          console.log(err);
          next('/')
        })
    }
  },
];

const router = new VueRouter({ routes, mode: 'history', linkExactActiveClass: 'is-active', });
router.beforeEach((to, from, next) => {
  const token = localStorage.getItem('token') || null
  window.axios.defaults.headers.common['Authorization'] = "Bearer " + token;
  next();
});
export default router; 