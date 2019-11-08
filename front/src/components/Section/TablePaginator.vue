
<template>
    <div>
        <p v-if="getResult" class="text-info"> {{ data.total }} registro{{this.plural}} encontrado{{this.plural}}!</p>
        <!--- <div class="table-responsive">
            <table class="table table-hover customTable"> -->
        <slot v-if="getResult">

        </slot>
        <!--  </table>  -->
        <div class="d-flex justify-content-center">
            <b-pagination v-if="hasPages" :total-rows="data.total" v-model="data.current_page" :per-page="data.per_page"  @change="$emit('pagechange',$event)"></b-pagination>
        </div>
        
        <p v-if="!getResult" class="text-primary"> Nenhum item encontrado <i class="glyphicon glyphicon-thumbs-down"></i></p>
    </div>
</template>

<script>

// import axios from 'axios'

export default {

    props: {
        data : {
            default : 
                function () { 
                    return { 
                        total : 0
                    }
                }
        },
    },
    
    computed : {
        
        getResult() {

            if(this.data.total > 0){
                return true
            }

            return false;
        },

        plural() {

            if(this.data.total > 1){
                return 's'
            }

            return '';
        },

        hasPages() {
           
            if ( this.data.last_page > 1){
                return true
            }

            return false;
        },
    },

    mounted(){

    },

    data : function (){
        return {
            
        }
    },

    methods: {
        
        
    }
};
</script>

<style>

</style>
