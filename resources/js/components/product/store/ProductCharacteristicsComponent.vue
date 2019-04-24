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
          <input
            type="text"
            class="form-control"
            v-model="description.value"
            readonly
          />
        </div>
      </li>
    </ul>

    <!-- Button trigger modal -->
    <div class="container--agregarProducto">
      <button
        type="button"
        class="btn btn-primary btn--agregarProducto"
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
                  />
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
                  />
                </div>
              </div>
            </form>
            <button
              type="button"
              class="btn btn-secondary btn--addDescription"
              @click="addDescription()"
            >
              <i class="fa fa-home"></i>
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
              data-dismiss="modal"
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
      productos: [
        {
          cantidad: 15,
          descriptions: [
            {
              key: "color",
              value: "red"
            },
            {
              key: "color",
              value: "red"
            },
            {
              key: "color",
              value: "red"
            },
            {
              key: "color",
              value: "red"
            }
          ]
        },
        {
          cantidad: 2,
          descriptions: [
            {
              key: "color",
              value: "blur"
            },
            {
              key: "tela",
              value: "seda"
            },
            {
              key: "color",
              value: "red"
            },
            {
              key: "color",
              value: "red"
            }
          ]
        },
        {
          cantidad: 85,
          descriptions: [
            {
              key: "color",
              value: "blur"
            },
            {
              key: "tela",
              value: "seda"
            }
          ]
        }
      ],
      producto: {
        cantidad: "",
        descriptions: []
      },
      description: {
        key: "",
        value: ""
      }
    };
  },
  validations: {},
  methods: {
    validate() {
      if (this.productos.lenght<1){
          alert("Ingresa por lo menos un");
          return false;
      }
      let isValid = true;
      this.$emit("on-validate", {productos: this.productos}, isValid);
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
    },
    addDetail() {
      const product = Object.assign({}, this.producto);
      this.productos.push(product);
      this.reset();
    },
    addDescription() {
      const c = prompt("Ingresa el nombre de la descripcion", "talla, color");
      this.description = {
        key: c,
        value: ""
      };
      const description = Object.assign({}, this.description);
      this.producto.descriptions.push(description);
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
}
</style>
