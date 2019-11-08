<template>
  <div>
    <b-breadcrumb>
      <b-breadcrumb-item>Você está em</b-breadcrumb-item>
      <b-breadcrumb-item active>Pessoas</b-breadcrumb-item>
    </b-breadcrumb>
    <div class="row">
        <div class="col-md-6">
          <h1 class="page-title">
           Pessoas - <span class="fw-semi-bold">Cadastro & Consulta</span>
          </h1>
       </div>
       <div class="col-md-6">
         <button type="button" class="btn btn-success btn-lg" style="margin-left:600px" >
             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar pessoa
        </button>
       </div>
    </div>
    <hr/>
  </div>
</template>

<script>
import Widget from '@/components/Widget/Widget';

export default {
  name: 'Pessoas',
  components: { Widget },
};
</script>
