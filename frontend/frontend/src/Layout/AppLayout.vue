<template>
  
  <div style="height:100%">

    <!-- sidebar -->
    <div id="sidebar" :class="[{'sidebar-hide' : sidebarHide}]">
      <div class="sidebar-menu-brand">
        
        <a class="sidebar-link" style="text-indent: 5px"><i class="fas fa-paper-plane"/> <b> Apex Erp</b></a>

      </div>

      <div class="sidebar-menu-container">

        <div>
          <ul class="sidebar-menu">
            <li>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'person'}]" to="/pessoas">
                <i class="fas fa-users"/> Pessoas
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'product'}]" to="/produtos">
                <i class="fas fa-box"/> Produtos
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'order'}]" to="/pedidos">
                <i class="fas fa-shopping-cart"/> Pedidos e Vendas
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'invoice'}]" to="/nfce">
                <i class="fas fa-receipt"/>  NFC-e
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'account'}]" to="/caixas">
                <i class="fas fa-file-invoice-dollar"/>  Caixas
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'user'}]" to="/clientes">
                <i class="fas fa-user"/> Usuários
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'company'}]" to="/empresas">
                <i class="fas fa-building"/> Minha Empresa
              </router-link>
              <router-link :class="['sidebar-link', {'sidebar-link-active' : activePage == 'config'}]" to="/clientes">
                <i class="fas fa-cog"/> Configurações
              </router-link>
            </li>
          </ul>
        </div>

        <div>
          <ul class="sidebar-menu">
            <li>
              <router-link class="sidebar-link" to="/clientes">
                <i class="fas fa-sign-out-alt"/> Sair
              </router-link>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <!-- sidebar -->

    <!-- top nav -->
    <div id="top-navbar" :class="['top-navbar', {'content-fullwidth' : sidebarHide}]">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-top-navbar btn-light "  @click="toogleSidebar"><i class="fas fa-bars"></i></button>
            <button class="btn btn-top-navbar btn-light " ><i class="fas fa-bell"></i></button>
          </div>
        </div>  
      </div>
    </div>
    <!-- top nav -->

    <!-- content -->
    <div id="content" :class="['content', {'content-fullwidth' : sidebarHide}]" >

      <div v-show="pageLoadedWithSuccess" class="container-fluid">
        <slot>
          
        </slot>
      </div>

    </div>
    <!-- content -->
  
    <app-loading :show="showLoading"/>

    <app-alert ref="appAlert"/>
  </div>

</template>

<script>

export default {

   data : function () {
      
    return {
   
      sidebarHide : false
   
    }
  }, 

  computed: {

    showLoading() {

      return this.$store.state.loading

    },

    alert() {

      return this.$store.state.appAlert

    },

    activePage() {
    
      return this.$store.state.activePage
    
    },

    pageLoadedWithSuccess() {
      
      //return (this.$store.state.pageHasLoaded && !this.$store.state.pageError)
      return this.$store.state.pageHasLoaded
      
    },

  },

  mounted() {
      
    this.$store.subscribe((mutation, state) => {

      if (mutation.type == 'showAlert') {
        
        console.log(mutation.payload)

        this.$refs.appAlert.show(mutation.payload.message)

      }
    })    
    
  },

  methods: {

    toogleSidebar() {

      this.sidebarHide = !this.sidebarHide

    }
  }, 
}

</script>

<style lang="scss">

.top-navbar {

  width: 100%;
  
  padding-top: 10px;
  padding-bottom: 5px;
  
  margin-bottom: 15px;

  padding-left: 280px;

  transition : all 0.3s ease;
  
}

.content {
  //background-color: #eaeef2;
  width: 100%;

  padding: 10px;
  
  padding-top: 5px;
  
  padding-left: 260px;

  padding-bottom : 100px;

  //height: 100%;

  transition : all 0.3s ease;
}

.content-fullwidth {

  padding-left: 10px;

}

#sidebar {

  color: #fff;
  
  width: 250px;
  height: 100%;
  padding: 20px;
  padding-top:40px;
  position: fixed; 
  z-index: 1020;
  
//  display: flex;
// flex-direction: column;
//  justify-content: space-between;
  
  background-color: #1c2f44;
  
  box-shadow: 0px 0px 25px 0 rgba(69,65,78,.1);

  transition : all 0.3s ease;
}

.sidebar-hide {
  margin-left: -250px;
}

.sidebar-menu-brand {
  height: 50px;

}

@media (max-width: 768px) {
    
    .content {

      padding-left: 10px;

      padding-top: 70px;
    }

    .top-navbar { 
      position : fixed;
      z-index: 1020;
      padding-left : 10px;
      background-color: #1c2f44;
    }

    
    #sidebar{
        margin-top:52px;

        position: fixed;

        margin-left: -250px;

        z-index: 1040;
    }

    .sidebar-hide{
        margin-left: 0px !important;
    }

    .btn-top-navbar {
      color: #fff !important;
      background-color: #1c2f44 !important;
      border: 1px solid #1c2f44 !important;
    }


 }

.sidebar-menu-container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: calc(100% - 50px);
}

.sidebar-menu {

  list-style: none;

  padding-left: 0px;  
}

.sidebar-menu li {

  padding-left: 0px;  

  height: 50px;

  text-indent: 5px;
  
  line-height: 40px;

}



.sidebar-link {

  color: rgb(175, 187, 199);
    
  display: block;
  
  white-space: nowrap;

  text-decoration: none;

  border-radius:  0.2rem;

  margin-bottom: 10px;

}

.sidebar-link i {
  margin-right: 5px;
}

.sidebar-link-active {
  
  color: #fff;
  
  text-decoration: none;

  background-color: #25476a;

}

.sidebar-link:hover {
  
  color: #fff;
  
  text-decoration: none;

  background-color: #25476a;

}



</style>