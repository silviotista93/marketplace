<template>
  <div class="card-body">
    <alert></alert>
    <h6 class="br-section-label" style="margin-top: 0px !important;">
      Ingrese la información del producto
    </h6>
    <p class="br-section-text">Recurda todos los campos son necesarios</p>
    <form-wizard
      @on-complete="onComplete"
      title
      subtitle
      back-button-text="Anterior"
      next-button-text="Siguiente"
      finish-button-text="Registrar Producto"
      shape="square"
      stepSize="sm"
      color="#3498db"
      error-color="#DC3545"
    >
      <tab-content
        title="Información basica del producto"
        icon="icon icon-info"
        :before-change="() => validateStep('productDetail')"
      >
        <product-detail
          ref="productDetail"
          @on-validate="mergePartialModels"
        ></product-detail>
      </tab-content>
      <tab-content
        title="Especificaciones del producto"
        icon="icon icon-clipboard-notes"
        :before-change="() => validateStep('selectCategory')"
      >
        <select-category
          ref="selectCategory"
          @on-validate="mergePartialModels"
        ></select-category>
      </tab-content>
      <tab-content
        title="Características del producto"
        icon="icon icon-shop"
        :before-change="() => validateStep('productC')"
      >
        <product-characteristics
          ref="productC"
          @on-validate="mergePartialModels"
        ></product-characteristics>
      </tab-content>
      <tab-content title="Registro" icon="icon icon-shop">
        <detalle-product :informacion="registroProducto"></detalle-product>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import { FormWizard, TabContent } from "vue-form-wizard";
import "vue-form-wizard/dist/vue-form-wizard.min.css";
import ProductDetailComponent from "./ProductDetailComponent";
import SelectCategoryComponent from "./SelectCategoryComponent";
import ProductCharacteristicsComponent from "./ProductCharacteristicsComponent";
import axios from "axios";
import Alert from "../../../helper/Alert.vue";
import DetalleProducto from "./DetalleProductoComponent";

export default {
  components: {
    "product-detail": ProductDetailComponent,
    "select-category": SelectCategoryComponent,
    "product-characteristics": ProductCharacteristicsComponent,
    "detalle-product": DetalleProducto,
    alert: Alert
  },
  data() {
    return {
      registroProducto: {}
    };
  },
  methods: {
    onComplete() {
      const url = "/guardar-producto";
      axios
        .post(url, this.registroProducto)
        .then(response => {
          alert("registro exitoso");
          location.reload();
        })
        .catch(err => {
          console.log(err);
        });
    },
    validateStep(name) {
      var refToValidate = this.$refs[name];
      return refToValidate.validate();
    },
    mergePartialModels(model, isValid) {
        console.log(model);
      if (isValid) {
        this.registroProducto = Object.assign({}, this.registroProducto, model);
      }
    }
  }
};
</script>
<style>
.icon {
  color: rgb(52, 152, 219);
}

.active .icon {
  color: white;
}
</style>