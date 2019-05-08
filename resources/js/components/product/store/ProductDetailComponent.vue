<template>
  <section>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label"
            >Nombre del Producto: <span class="tx-danger">*</span></label
          >
          <input
            id="name"
            class="form-control"
            name="name"
            placeholder="Nombre producto"
            type="text"
            required
            v-model.trim="name"
            v-bind:class="{ 'is-invalid': $v.name.$error }"
          />
          <span
            class="help-block tx-danger"
            v-if="$v.name.$error && !$v.name.required"
            >Nombre requerido</span
          >
        </div>
        <!-- form-group -->
        <div class="form-group">
          <label class="form-control-label"
            >Descripción Corta: <span class="tx-danger">*</span></label
          >
          <textarea
            id="short_description"
            name="short_description"
            rows="3"
            class="form-control"
            placeholder="Descripcion corta del producto"
            v-model.trim="short_description"
            v-bind:class="{ 'is-invalid': $v.short_description.$error }"
          ></textarea>
          <span
            class="help-block tx-danger"
            v-if="$v.short_description.$error && !$v.short_description.required"
            >Ingresa una descripción del producto</span
          >
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label"
                >Precio Compra: <span class="tx-danger">*</span></label
              >
              <input
                id="price"
                class="form-control"
                name="price"
                placeholder="Precio Compra"
                type="text"
                required
                v-model.number.trim="price"
                v-bind:class="{ 'is-invalid': $v.price.$error }"
              />
              <span
                class="help-block tx-danger"
                v-if="$v.price.$error && !$v.price.required"
                >Ingresa el precio de compra del producto</span
              >
            </div>
            <div class="form-group">
              <label class="form-control-label"
                >Porcentaje Ganancia: <span class="tx-danger">*</span></label
              >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"
                    ><i class="fas fa-percentage"></i
                  ></span>
                </div>
                <input
                  name="percentage"
                  type="number"
                  class="form-control"
                  placeholder=""
                  v-model.number.trim="percentage"
                  min="0"
                  v-bind:class="{ 'is-invalid': $v.percentage.$error }"
                />
                <span
                  class="help-block tx-danger"
                  v-if="$v.percentage.$error && !$v.percentage.required"
                  >Ingresa el porcentaje de ganacia del producto</span
                >
              </div>
              <!-- input-group -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label"
                >Precio Venta: <span class="tx-danger">*</span></label
              >
              <input
                id="sellPrice"
                class="form-control"
                name="sellPrice"
                placeholder="Precio Venta"
                type="text"
                disabled
                :value="sellPrice | formatPrice"
              />
            </div>
            <!--
            <div class="form-group">
              <div class="">
                <label class="form-control-label"
                  >Categoria: <span class="tx-danger">*</span></label
                >
                <select
                  id="category"
                  name="category"
                  class="form-control"
                  data-placeholder="Asignar Categoría"
                >
                  <option label="Asignar Categoría"></option>
                  <option value="Firefox">Ropa</option>
                  <option value="Chrome">Zapatos</option>
                  <option value="Safari">Tecnología</option>
                  <option value="Opera">Accesorios</option>
                  <option value="Internet Explorer">Relojes</option>
                </select>
              </div>
            </div>
            -->
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group pd-lg-t-30">
          <label class="form-control-label"
            >Descripción del producto: <span class="tx-danger">*</span></label
          >
          <div id="summernote"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { TabContent } from "vue-form-wizard";
import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
import { filterPrice } from "../../../helper/monedas.js";
export default {
  data() {
    return {
      name: "",
      short_description: "",
      percentage: "",
      price: "",
      description: ""
    };
  },
  computed: {
    sellPrice(){
        const number = parseInt(this.price)+parseInt(((this.price*this.percentage)/100));
        if (number){
            return number;
        }
        return 0;
    }
  },
  validations: {
    name: {
      required
    },
    short_description: {
      required
    },
    price: {
      required
    },
    sellPrice: {
      required
    },
    percentage: {
      required
    },
    description: {
      required
    },
    form: ["name", "short_description", "price", "percentage"]
  },
  mounted() {
    this.summernote();
  },
  methods: {
    summernote: function() {
      $("#summernote").summernote({
        height: 255,
        tooltip: false
      });
    },
    validate() {
      this.description = $("#summernote").summernote("code");
      this.$v.form.$touch();
      var isValid = !this.$v.form.$invalid;
      let data = Object.assign({}, this.$data);
      data.venta = this.sellPrice;
      this.$emit("on-validate", data, isValid);
      if (!isValid){
        event.$emit('alert', 403, "Error", "Ingresa la información basica del producto");
      }
      return isValid;
    }
  }
};
</script>
