<template>  
  <div id="app">    
    <component :is="layout">
      <router-view/>
    </component >  
  </div>
</template>

<script>

import AppLayout from './Layout/AppLayout'

export default {
  
  components : { AppLayout },

  mounted() {
    this.isVisible = true
  },

  computed: {
    layout() {
      return (this.$route.meta.layout || 'AppLayout')
    },

    firstLoad() {
       return this.$store.state.firstLoad 
    }

  }



}
</script>
<style lang="scss">
  
  //@import './assets/styles/layouts.scss';
  @import './assets/styles/custom.scss';
  @import '../node_modules/bootstrap/scss/bootstrap.scss';
  @import './assets/styles/fontawesome/css/all.min.css';
  
  @import './assets/styles/tables.css';

  //@import url("https://fonts.googleapis.com/css?family=Open+Sans");
  @import url("https://fonts.googleapis.com/css?family=Nunito&display=swap");
  //@import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");


  body {
    //font-family: 'Open Sans', sans-serif;
    font-family: 'Nunito', sans-serif;
    //font-family: 'Montserrat', sans-serif;

  }
</style>
