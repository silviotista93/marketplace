<template>
  <section>
    <div id="tableContainer">
      <table class="table table-hover table--products" id="tablaProductos">
        <thead>
          <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>precio venta</th>
            <th>opciones</th>
          </tr>
        </thead>
      </table>
    </div>
  </section>
</template>

<script>
import ProductDetailComponent from "../store/DetalleProductoComponent";
import { formatPrice } from "../../../helper/monedas.js";
import axios from "axios";

export default {
  components: {
    "product-detail": ProductDetailComponent
  },
  data() {
    return {
      products: []
    };
  },
  methods: {
    verInfo(element) {
      const id = element.target.dataset.id;
      this.getInfo(id);
    },
    initTable() {
      $("#tablaProductos").on("click", ".table__option--ver", e => {
        this.verInfo(e);
      });
      $("#tablaProductos").DataTable({
        responsive: true,
        ajax: {
          url: "/getProducts",
          method: "POST"
        },
        columns: [
          {
            data: "name",
            defaultContent:
              '<span class="label label-danger text-center" style=" color:red !important">N/A</span>'
          },
          {
            data: "price",
            defaultContent:
              '<span class="label label-danger text-center" style=" color:red !important">N/A</span>',
              render: function (price){
                const number = (price/1).toFixed(2).replace('.', ',');
                return "$"+number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
              }
          },
          {
            data: "price_neto",
            defaultContent:
              '<span class="label label-danger text-center" style=" color:red !important">N/A</span>',
              render: function (price){
                const number = (price/1).toFixed(2).replace('.', ',');
                return "$"+number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
              }
          },
          {
            data: "id",
            defaultContent:
              '<span class="label label-danger text-center" style=" color:red !important">N/A</span>',
            render: function(data) {
              return `
              <div class="text-center">
                <i class="fa fa-eye table__option table__option--ver" data-id="${data}" title="Ver Información de Producto"></i>
              </div>
              `;
            }
          }
        ],
        language: LENGUAJE_TABLA
      });
    },
    getInfo(id){
      axios.post("/getInfoProduct")
    }
  },
  mounted() {
    this.initTable();
  }
};
</script>
<style>
#tableContainer {
  width: 80%;
  margin: auto;
  padding: 2rem 1rem;
}
.table--products th {
  text-align: center;
}
.table__option--ver {
  color: var(--info);
}
.table__option {
  cursor: pointer;
}
</style>
