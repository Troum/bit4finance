import Vue from 'vue'
import Router from 'vue-router'
// import registration from './components/registration.vue'
// import firststep from './components/firststep.vue'
// import onlytablecomponent from './components/onlytablecomponent.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'registration',
      component: () => import('./views/reg.vue')
    },
    {
      path: '/ticket',
      name: 'ticket',
      component: () => import('./views/tick.vue')
    },
    {
      path: '/table',
      name: 'table',
      component: () => import('./views/table.vue')
    }
  ]
})
