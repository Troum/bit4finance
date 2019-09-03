<template>
  <div class="tick">
    
    <firststep />
  </div>
</template>

<script>
// @ is an alias to /src
import registration from '@/components/registration.vue'
import firststep from '@/components/firststep.vue'
import onlytablecomponent from '@/components/onlytablecomponent.vue'

export default {
  name: 'reg',
  components: {
    registration,
    firststep,
    onlytablecomponent
  }
}
</script>
