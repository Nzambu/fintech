import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../auth/Login.vue'
import NProgress from 'nprogress'

Vue.use(VueRouter)

const routes = [
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path : '/password',
    name : 'Password',
    component : () => import(/* webpackChunkName: "password" */ '../auth/Password.vue'),
    props : route => ({ query: route.query.token }),
  },
  {
    path: '/',
    name: 'dash',
    component: () => import(/* webpackChunkName: "about" */ '../views/Layouts/Main.vue'),
    children: [
      {
        path: 'profile',
        // Lazy-loaded only when router is visited
        component: () => import(/* webpackChunkName: "profile" */'../views/Profile.vue'),
        meta : {
          name : 'Profile'
        }
      },
      {
        path: 'customer',
        // Lazy-loaded only when router is visited
        component: () => import(/* webpackChunkName: "tenant" */'../views/Customer.vue'),
        meta : {
          name : 'Customer'
        }
      },
      {
        path: 'transaction',
        // Lazy-loaded only when router is visited
        component: () => import(/* webpackChunkName: "patient" */'../views/Transaction.vue'),
        meta : {
          name : 'Transaction'
        }
      },
    ]
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})


router.beforeResolve((to, from, next) => {
  // If this isn't an initial page load.
  if (to.name) {
    // Start the route progress bar.
    NProgress.start()
  }
  next()
})

router.afterEach(() => {
  // Complete the animation of the route progress bar.
  NProgress.done()
})


router.beforeEach((to, from, next) => {
  const publicPages = ['/login', '/password'];
  const authRequired = !publicPages.includes(to.path);
  const loggedIn = sessionStorage.getItem('token');
  /* 
   * Try to access a restricted page without login
   * Redirect to login page 
   */
  if (authRequired && !loggedIn) {
    // Redirect to requested path
    const loginpath = to.path;
    next({ name: 'Login', query: { from: loginpath } });
    /*
     * Try accessing login page while logedin - redirect to profile page
     */
  } else if (loggedIn && (to.path).includes('/login')) {    
    next('/transaction');
  }
  else {
    next();
  }
});



export default router