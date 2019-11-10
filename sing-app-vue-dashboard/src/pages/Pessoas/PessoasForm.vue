<template>
<div>
    <b-modal ref="modal" title="Cadastro de Pessoas" header-class="border-bottom-0" size="xl">
     
        <!-- form  -->
        <div class="row">
          <div class="col-md-3">
            <h5 class="text-secondary"><i class="fa fa-user"/> Dados</h5>
          </div>
        </div>
        <br>
      <div class="row">
          <div class="col-md-6">
            <text-input alias="Nome"/>
          </div>
          
          <div class="col-md-6">
            <text-input alias="Apelido" />
          </div>
      </div>

     <div slot="modal-footer">
        <button role="button" class="btn btn-outline-secondary" @click="$refs.modal.hide()">
          <i class="fa fa-pull-left"></i> Cancelar
        </button>
        <button role="button" class="btn btn-success" style="margin-left:5px" >
          <i class="fa fa-check"></i> Salvar
        </button>
      </div>
      
     
  </b-modal>
</div>
</template>

<script>
export default {


methods:{
    open(){

     this.$refs.modal.show()

    }
}
}
</script>

<style>

</style>