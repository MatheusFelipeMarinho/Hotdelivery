<template>
  <div>
    <b-breadcrumb>
      <b-breadcrumb-item>Você está em</b-breadcrumb-item>
      <b-breadcrumb-item active>Pessoas</b-breadcrumb-item>
    </b-breadcrumb>
    <div class="row">
        <div class="col-md-6">
          <h5 class="page-title">
           Pessoas - <span class="fw-semi-bold">Cadastro & Consulta</span>
          </h5>
       </div>
       <div class="col-md-6">
         <button  class="btn btn-warning btn-lg btn pull-right" @click="openPessoaForm()">
             <span >Adicionar Pessoa</span> 
        </button>
       </div>
    </div>
    <hr/>
    <br/>
    <div class="row">
      <div class="col-md-4">
        <text-input> </text-input>     
      </div>
       <div class="col-md-4">
        <button  class="btn btn-warning  btn pull-left" >
             <span >Pesquisar</span> 
        </button>
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-md-12">
      <table-paginator/>
      </div>
    </div>
    <pessoas-form ref="pessoasForm"/>
    
  </div>
</template>

<script>
import Widget from '@/components/Widget/Widget';
import PessoasForm from './PessoasForm.vue'

export default {
  name: 'Pessoas',
  components: { Widget, PessoasForm },


  methods:{

    openPessoaForm(){

      this.$refs.pessoasForm.open();

    }

  }
};
</script>
