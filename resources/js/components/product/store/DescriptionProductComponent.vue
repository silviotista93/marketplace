<template>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text capitalize">
              {{ description.key }}
            </span>
        </div>
        <input :required="getValidationBoolean('required')" type="text" class="form-control"
               v-model="description.value" v-if="description.valores === null">
        <select :name="description.nombre" v-if="Array.isArray(description.valores)" class="form-control" required v-model="description.value">
            <option value="">Seleccione {{description.nombre}}</option>
            <option :value="valor" v-for="valor of description.valores">{{valor}}</option>
        </select>
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
    .validarFormulario input:invalid,
    .validarFormulario select:invalid{
        border-color: var(--danger);
    }
</style>
