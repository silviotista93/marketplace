<template>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text capitalize">
              {{ description.key }}
            </span>
        </div>
        <input :required="getValidationBoolean('required')" type="text" class="form-control"
               v-model="description.value">
    </div>
</template>
<script>
    export default {
        props: ['description'],
        mounted() {
            if (this.description.validaciones && this.description.validaciones.html) {
                this.validaciones = Object.assign({}, this.description.validaciones.html);
                console.log(this.validaciones);
            }
        },
        data() {
            return {
                validaciones: {}
            }
        },
        methods: {
            getValidationBoolean(key){
                return this.validaciones[key]?new Boolean(this.validaciones[key]) : false;
            }
        }
    };
</script>
<style>

</style>
