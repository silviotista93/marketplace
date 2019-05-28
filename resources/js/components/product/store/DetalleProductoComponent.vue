<template>
  <article>
    <h1 class="text-center pb-4 pt-2">{{ informacion.name }}</h1>
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
              <span class="input-group-text capitalize">
                {{ description.key }}
              </span>
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
    <hr>
    <div class="card-group">
      <div class="card" 
        :class="imagen.principal?'imagen-principal':''" 
        v-for="(imagen, key) in informacion.imagenes" 
        :key="key"
        @click="cambioImagenPrincipal(key)"
      >
        <img :src="imagen.img" class="card-img-top" alt="Imagen del producto">
      </div>
    </div>
  </article>
</template>
<script>
import { formatPrice } from "../../../helper/monedas.js";

export default {
  data() {
    return {};
  },
  props: ["informacion"],
  methods: {
    cambioImagenPrincipal(key){
      this.informacion.imagenes.map( img => {
        img.principal = false;
      });
      this.informacion.imagenes[key].principal = true;
    }
  }
};
</script>
<style scoped>
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

.card{
  display: flex;
  align-content: center;
  justify-content: center;
  margin: .4rem;
  border: none;
  max-width: 20rem;
}

.card img {
  box-shadow: 0 0 3px #333;
  cursor: pointer;
}

.imagen-principal{
  position: relative;
}

.imagen-principal img {
  padding: .2rem;
}

.imagen-principal::before{
  content: "Imagen principal";
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 15;
  position: absolute;
  height: 1.6rem;
  background-color: hsla(0, 0%, 100%, .8);
  padding: .2rem .4rem;
  text-align: center;
  color: hsla(0, 0%, 10%, .9);
  font-weight: bold;
  border: .2rem solid transparent;
  border-bottom: .05rem solid #333;
  border-top: .05rem solid #333;
}
</style>
