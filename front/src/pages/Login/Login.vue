<template>
  <div class="auth-page">
    <b-container>
      <h5 class="auth-logo">
        <i class="fa fa-circle text-gray"></i>
       Delivery App
        <i class="fa fa-circle text-warning"></i>
      </h5>
      <Widget class="widget-auth mx-auto"  customHeader>
        <p class="widget-auth-info">
            Use seu email para logar.
        </p>
        <form class="mt" @submit.prevent="login">
          <b-alert class="alert-sm" variant="danger" :show="!!errorMessage">
            {{errorMessage}}
          </b-alert>
          <div class="form-group">
            <input class="form-control no-border"  placeholder="Email" />
          </div>
          <div class="form-group">
            <input class="form-control no-border"  placeholder="Senha" />
          </div>
          <b-button type="submit" size="sm" class="auth-btn mb-3" variant="inverse">Login</b-button>


       </form>

        <router-link class="d-block text-center" to="login">Criar uma conta</router-link>
      </Widget>
    </b-container>
    <footer class="auth-footer">
      2019 &copy; Hot delivery App.
    </footer>
  </div>
</template>

<script>
import Widget from '@/components/Widget/Widget';

export default {
  name: 'LoginPage',
  components: { Widget },
  data() {
    return {
      errorMessage: null,
    };
  },
  methods: {

  },
  created() {

  },
};
</script>
