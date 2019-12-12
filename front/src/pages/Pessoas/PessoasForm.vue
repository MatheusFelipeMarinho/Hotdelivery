<template>
<div>
    <b-modal ref="modal" class="try-modal" :title="title" header-class="border-bottom-0" size="xl">

        <!-- form  -->
        <div class="row">
          <div class="col-md-3">
            <h5 class="text-primary"><i class="fas fa-address-card"/> Dados da pessoa</h5>
          </div>
        </div>
        <br>



      <!-- form  -->


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
