<template>
  <div>
    <b-breadcrumb>
      <b-breadcrumb-item>Olá!</b-breadcrumb-item>
      <b-breadcrumb-item active>Dashboard</b-breadcrumb-item>
    </b-breadcrumb>
    <h1 class="page-title">Dashboard</h1>

  </div>
</template>

<script>
import Widget from '@/components/Widget/Widget';
import { Chart } from 'highcharts-vue';

export default {
  name: 'Dashboard',
  components: { Widget, highcharts: Chart },
  data() {
    return {

    };
  },
  methods: {




  }
};
</script>

<style src="./Dashboard.scss" lang="scss" scoped />
