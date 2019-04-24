<template>
  <section>
    <div class="form-group">
      <label class="form-control-label">
        Categoria: <span class="tx-danger">*</span>
      </label>
      <select
        v-model="category"
        class="form-control"
        id="category"
        name="category"
        @change="getTypes"
        v-bind:class="{ 'is-invalid': $v.category.$error }"
      >
        <option value="null">Selecione</option>
        <option :value="c.id" v-for="c in categories" :key="c.id">
          {{ c.category }}
        </option>
      </select>
      <span class="help-block tx-danger" v-if="$v.category.$error">
        Seleccione una Categoria
      </span>
    </div>
    <div class="form-group" v-if="category">
      <label class="form-control-label">
        Tipo Categoria: <span class="tx-danger">*</span>
      </label>
      <select
        v-model="type"
        class="form-control"
        id="type"
        name="type"
        @change="getSubcategories"
        v-bind:class="{ 'is-invalid': $v.type.$error }"
      >
        <option value="null">{{
          types.length > 0 ? "Seleccione un tipo" : "Sin tipos"
        }}</option>
        <option :value="t.id" v-for="t in types" :key="t.id">
          {{ t.type }}
        </option>
      </select>
      <span class="help-block tx-danger" v-if="$v.type.$error">
        Seleccione un tipo de categoria.
      </span>
    </div>

    <div class="form-group" v-if="type">
      <label class="form-control-label">
        Sub Categoria: <span class="tx-danger">*</span>
      </label>
      <select
        v-model="subcategory"
        class="form-control"
        id="subcategory"
        name="subcategory"
        v-bind:class="{ 'is-invalid': $v.subcategory.$error }"
      >
        <option value="null">{{
          subcategories.length > 0 ? "Seleccione una subcategoria" : "Sin subcategorias"
        }}</option>
        <option :value="s.id" v-for="s in subcategories" :key="s.id">
          {{ s.sub_category }}
        </option>
      </select>
      <span class="help-block tx-danger" v-if="$v.subcategory.$error">
        Seleccione una subcategoria
      </span>
    </div>
  </section>
</template>
<script>
import axios from "axios";
import { required, email, minLength, numeric } from "vuelidate/lib/validators";

export default {
  data() {
    return {
      category: null,
      type: null,
      subcategory: null,
      categories: [],
      subcategories: [],
      types: []
    };
  },
  validations: {
    subcategory: {
      required,
      numeric
    },
    type: {
      required,
      numeric
    },
    category: {
      required,
      numeric
    },
    form: ["subcategory", "type", "category"]
  },
  created() {
    this.getCategories();
  },
  methods: {
    getCategories() {
      const url = "/getCategories";
      axios
        .post(url, {})
        .then(response => {
          this.categories = response.data;
          this.type = null;
          this.subcategory = null;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getSubcategories() {
      if (isNaN(this.type)) {
        this.type = null;
        this.subcategory = null;
        return;
      }
      const url = "/subcategories/" + this.type;
      axios
        .post(url, {})
        .then(response => {
          this.subcategories = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getTypes() {
      if (isNaN(this.category)) {
        this.category = null;
        this.type = null;
        this.subcategory = null;
        return;
      }
      const url = "/getTipos/" + this.category;
      axios
        .post(url, {})
        .then(response => {
          this.types = response.data;
          this.subcategory = null;
        })
        .catch(error => {
          console.log(error);
        });
    },
    validate() {
      this.$v.form.$touch();
      var isValid = !this.$v.form.$invalid;
      const data = {
        category: this.category,
        type: this.category,
        subcategory: this.category
      };
      this.$emit("on-validate", data, isValid);
      return isValid;
    }
  }
};
</script>
<style>
</style>
