<template>

    <div :class="[formGroupClass,'form-group']">
        <label class="control-label" v-if="alias">{{ alias }}:</label>
        <input 
            :ref="'input'" 
            type="text" 
            :class="['form-control', 'form-control-sm', { 'is-invalid' : getError }]"  
            :value="value" 
            :name="name" 
            :maxlength="maxlength"
            :disabled="disabled"
            :placeholder="placeholder"
            @input="onInput" 
            @blur="onBlur"
            @change="onChange($event)" />
        <div class="invalid-feedback invalid-feedback-overwrite" v-if="getError">{{ getError }}</div>
    </div>

</template>

<script>

export default {
    //:class="{ 'is-invalid' : getError }"
    props: {
        value: {},

        formGroupClass : {},
            
        name : {},
        alias : {},

        disabled : {
            default: false
        },
        placeholder : {
            default : null
        },
            
        form : {
            default : null
        },
         maxlength : {
            default : 200
        },
        error : {},
    },
    
    computed : {
        getError(){
            if (this.form !== null) {
                return this.form.getErrors(this.name)
            }
            return false
         }
    },

    methods: {
        onInput(event) {
            this.$emit("input", event.target.value);
            this.validate()
        },

        onBlur(event){
            this.$emit('blur')
            this.validate()
        },
        
        onChange(event){
            this.$emit('change', event.target.value)
        },
        
        validate(){ 
            if (this.form != undefined){
                this.form.validate(this.name);
            }
        },

        setFocus(){
            this.$refs.input.focus()
        }

    }
  
};
</script>

<style>
    .invalid-feedback-overwrite {
        font-size: 12px;
    }
</style>
