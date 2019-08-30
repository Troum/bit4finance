<template>
  <div id="app">
    <!-- <registration/> -->
    <!-- <firststep/>
    <onlytablecomponent/> -->



    <div id="nav">
      <router-link to="/">registration</router-link>
      <router-link to="/ticket">ticket</router-link>
      <router-link to="/table">table</router-link>
    </div>
    <router-view/>
  </div>
</template>

<script>

import onlytablecomponent from './components/onlytablecomponent.vue'
import registration from './components/registration.vue'
import firststep from './components/firststep.vue'


export default {
  name: 'app',
  components: {
    registration,
    firststep,
    onlytablecomponent
  }
}
</script>

<style>
#app {
  font-family: 'Lato', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background-color: #f9f9fb;

}


#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
