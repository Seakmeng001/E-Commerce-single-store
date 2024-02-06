<template>
  <Menu>
    <router-view></router-view>
  </Menu>
</template>

<script>
import Menu from './components/layout/Menu.vue';
export default {
  components: {
    Menu
  }
}
</script>