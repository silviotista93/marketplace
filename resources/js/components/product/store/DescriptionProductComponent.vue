<template>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text capitalize">
              {{ description.key }}
            </span>
        </div>
        <input required type="text" class="form-control"
               v-model="description.value" v-if="description.valores === null">
        <select :name="description.nombre" v-if="Array.isArray(description.valores) && description.key !== 'Color'"
                class="form-control" required v-model="description.value">
            <option value="">Seleccione {{description.nombre}}</option>
            <option :value="valor" v-for="valor of description.valores">{{valor}}</option>
        </select>
        <input required type="color" list="presetColors" v-model="description.value" v-if="Array.isArray(description.valores) && description.key === 'Color'" class="form-control">
        <datalist id="presetColors">
            <option>#0866C6</option>/>
            <option>#17A2B8</option>
            <option>#1CAF9A</option>
            <option>#23BF08</option>
            <option>#F49917</option>
            <option>#DC3545</option>
            <option>#DEE2E6</option>
            <option>#343a40</option>
        </datalist>
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
            getValidationBoolean(key) {
                return this.validaciones[key] ? new Boolean(this.validaciones[key]) : false;
            }
        }
    };
</script>
<style>
    .validarFormulario input:invalid,
    .validarFormulario select:invalid {
        border-color: var(--danger);
    }
</style>
