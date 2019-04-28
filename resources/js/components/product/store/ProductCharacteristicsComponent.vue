<template>
  <section>
    <ul class="list-group list-group-horizontal">
      <li
        class="list-group-item description"
        v-for="(producto, key) in productos"
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
            v-model.number="producto.cantidad"
            aria-describedby="txtCantidad"
            required
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
          <input type="text" class="form-control" v-model="description.value" />
        </div>
        <button
          type="button"
          class="btn btn-danger active"
          title="Eliminar producto"
          @click="eliminarProducto(key)"
        >
          <i class="fa fa-trash-alt"></i>
        </button>
      </li>
    </ul>

    <!-- Button trigger modal -->
    <div class="container--agregarProducto">
      <button
        type="button"
        class="btn btn-teal btn--agregarProducto"
        data-toggle="modal"
        data-target="#agregarProducto"
        @click="reset()"
      >
        Agregar un sub producto
      </button>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="agregarProducto"
      tabindex="-1"
      role="dialog"
      aria-labelledby="agregarProductoLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="agregarProductoLabel">Detalle</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
              @click="reset()"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                <label
                  for="cantidad"
                  class="col-sm-4 col-form-label capitalize"
                >
                  Cantidad
                </label>
                <div class="col-sm-8">
                  <input
                    type="number"
                    class="form-control"
                    id="cantidad"
                    v-model.number="producto.cantidad"
                    v-bind:class="{
                      'is-invalid': send && producto.cantidad.length < 1
                    }"
                  />
                  <span
                    class="help-block tx-danger"
                    v-if="send && producto.cantidad.length < 1"
                    >Ingrese Cantidad</span
                  >
                </div>
              </div>
              <div
                class="form-group row"
                v-for="(description, key) in producto.descriptions"
                :key="key"
              >
                <label
                  :for="'detail-' + description.key"
                  class="col-sm-4 col-form-label capitalize"
                  >{{ description.key }}</label
                >
                <div class="col-sm-8">
                  <input
                    type="text"
                    class="form-control"
                    :id="'detail-' + description.key"
                    v-model="description.value"
                    v-bind:class="{
                      'is-invalid': send && description.value.length < 1
                    }"
                  />
                  <span
                    class="help-block tx-danger"
                    v-if="send && description.value.length < 1"
                    >Ingrese {{ description.key }}</span
                  >
                </div>
              </div>
            </form>
            <button
              type="button"
              class="btn btn-teal btn--addDescription"
              @click="addDescription()"
            >
              <i class="fa fa-plus"></i>
            </button>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-outline-danger"
              data-dismiss="modal"
              @click="reset()"
            >
              Cancelar
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              @click="addDetail()"
            >
              Guardar Cambios
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  mounted() {},
  data() {
    return {
      current: "ropa",
      tiposProductos: ["ropa", "televisor", "plancha"],
      productos: [],
      producto: {
        cantidad: "",
        descriptions: []
      },
      description: {
        key: "",
        value: ""
      },
      send: false
    };
  },
  validations: {},
  methods: {
    validate() {
      if (this.productos.length < 1) {
        event.$emit(
          "alert",
          403,
          "Error",
          "Ingresa la información basica del producto"
        );
        return false;
      }
      let isValid = true;
      this.$emit("on-validate", { productos: this.productos }, isValid);
      return isValid;
    },
    reset() {
      this.producto = {
        cantidad: "",
        descriptions: [
          {
            key: "color",
            value: ""
          }
        ]
      };
      this.description = {
        key: "",
        value: ""
      };
      this.send = false;
    },
    validarDetail() {
      this.send = true;
      let valid = true;
      if (this.producto.cantidad.length < 1) {
        valid = false;
      }
      this.producto.descriptions.map(d => {
        if (d.value.length < 1) {
          valid = false;
        }
      });
      return valid;
    },
    addDetail(e) {
      if (this.validarDetail()) {
        const product = Object.assign({}, this.producto);
        this.productos.push(product);
        $("#agregarProducto").modal("hide");
        this.reset();
      }
    },
    addDescription() {
      const c = prompt("Ingresa el nombre de la descripcion", "talla, color");
      if (c && c.length > 1) {
        this.description = {
          key: c,
          value: ""
        };
        const description = Object.assign({}, this.description);
        this.producto.descriptions.push(description);
      }
    },
    eliminarProducto(position) {
      this.productos.splice(position, 1);
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
.btn--agregarProducto {
  margin: 1rem;
}
.btn--addDescription {
  border-radius: 50%;
  float: right;
  width: 3rem;
  line-height: 1.5rem;
}
</style>
