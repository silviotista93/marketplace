<template>
  <article>
    <h1 class="text-center">{{ informacion.name }}</h1>
    <section class="row">
      <p class="col-sm-6">
        <strong>Category:</strong> {{ informacion.category_name }}
      </p>
      <p class="col-sm-6">
        <strong>Sub categoria:</strong> {{ informacion.subcategory_name }}
      </p>
    </section>
    <hr>
    <section class="row">
      <p class="col-sm-6"><strong>Precio:</strong> {{ informacion.price | formatPrice }}</p>
      <p class="col-sm-6">
        <strong>Ganancia:</strong> {{ informacion.percentage }}%
      </p>
      <p class="col-sm-6">
        <strong>Valor Venta:</strong> {{
          informacion.venta | formatPrice
        }}
      </p>
    </section>
    <section>
      <p>
        {{ informacion.short_description }}
      </p>
      <article v-html="informacion.description">
      </article>
    </section>
    <hr>
    <section>
      <ul class="list-group list-group-horizontal">
        <li
          class="list-group-item description"
          v-for="(producto, key) in informacion.productos"
          :key="key"
        >
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text capitalize" id="txtCantidad"
                >Cantidad</span
              >
            </div>
            <input
              type="text"
              class="form-control"
              :value="producto.cantidad"
              readonly
              aria-describedby="txtCantidad"
            />
          </div>
          <div
            class="input-group"
            v-for="(description, key) in producto.descriptions"
            :key="key"
          >
            <div class="input-group-prepend">
              <span class="input-group-text capitalize">{{
                description.key
              }}</span>
            </div>
            <input
              type="text"
              class="form-control"
              :value="description.value"
              readonly
            />
          </div>
        </li>
      </ul>
    </section>
  </article>
</template>
<script>
import { filterPrice } from "../../../helper/monedas.js";

export default {
  data() {
    return {};
  },
  props: ["informacion"],
  methods: {}
};
</script>
<style>
.description {
  display: flex;
}
.description .form-control {
  flex-shrink: 1;
  margin-right: 0.2rem;
  background-color: white;
}
.capitalize {
  text-transform: capitalize;
}
.container--agregarProducto {
  text-align: right;
}
</style>
