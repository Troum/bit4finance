<template>
  <div id="app">
    <!-- <registration/> -->
    <!-- <firststep/> -->
    <tablecomponent/>



    <!-- <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </div>
    <router-view/> -->
  </div>
</template>

<script>

import registration from './components/registration.vue'
import firststep from './components/firststep.vue'
import tablecomponent from './components/tablecomponent.vue'

export default {
  name: 'app',
  components: {
    registration,
    firststep,
    tablecomponent
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
#nav {

}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
