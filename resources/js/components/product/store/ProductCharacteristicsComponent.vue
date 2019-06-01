<template>
    <section>
        <div v-show="productos.length < 1 || showTable" >
            <table  class="table table-bordered dt-responsive table-striped" id="tablaCaracteristicas">
                <thead>
                <tr>
                    <th width="40%">#</th>
                    <th>Nombre</th>
                    <th>Valores</th>
                    <th>Opciones</th>
                </tr>
                </thead>
            </table>
        </div>

        <!-- Button trigger modal -->
        <div class="container--agregarProducto">
            <button
                class="btn btn-danger"
                @click="showTable=!showTable"
                v-show="productos.length > 0"
            >
                {{showTable?'Ocultar Caracteristicas':'Mostrar Caracteristicas'}}
            </button>
            <button
                type="button"
                class="btn btn-teal btn--agregarProducto"
                @click="reset()"
            >Agregar un sub producto
            </button>
        </div>
        <form id="validacionesFormulario">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item description" v-for="(producto, key) in productos" :key="key">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text capitalize" id="txtCantidad">Cantidad</span>
                        </div>
                        <input
                            type="text"
                            class="form-control"
                            v-model.number="producto.cantidad"
                            aria-describedby="txtCantidad"
                            required
                        >
                    </div>

                    <description-product :description="description" v-for="(description, key) in producto.descriptions"
                                         :key="key"></description-product>

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
            <button id="btnEnviarDatos" style="display: none;">Enviar datos</button>
        </form>

    </section>
</template>
<script>
    import DescriptionProductComponent from "./DescriptionProductComponent";

    export default {
        components: {
            "description-product": DescriptionProductComponent
        },
        mounted() {
            $("#validacionesFormulario").submit((e) => {
                e.preventDefault();
                this.envioDatos = true;
                this.validate();
            });
            $("#tablaCaracteristicas").on('click', '.agregarCaracteristica', (e) => {
                const data = JSON.parse(e.target.attributes['data-caracteristica'].value);
                this.validarCatacteristica(data, e.target);
            });

            $("#tablaCaracteristicas").on('click', '.eliminarCaracteristica', (e) => {
                const data = JSON.parse(e.target.attributes['data-caracteristica'].value);
                this.validarCatacteristica(data, e.target);
            });

            $("#tablaCaracteristicas").DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                data: null,
                ajax: "/caracteristicas",
                lengthMenu: [[5, 25, 50, -1], [5, 25, 50, "Todos"]],
                columns: [
                    {width: "20%", data: "id"},
                    {data: "nombre"},
                    {
                        data: "valores",
                        render: (data, type, JsonResultRow, meta) => {
                            //console.log(JSON.parse(data));
                            return '<p class="text-center">' + (data === '' ? 'N/A' : data) + '</p>';
                        }
                    },
                    {
                        render: (data, type, JsonResultRow, meta) => {
                            return (
                                `
                                <div class="descripcion">
                                    <button class="btn btn-primary agregarCaracteristica" data-caracteristica='${JSON.stringify(JsonResultRow)}'>Agregar</button>
                                    <button class="btn btn-danger eliminarCaracteristica" data-caracteristica='${JSON.stringify(JsonResultRow)}'>Eliminar</button>
                                </div>
                                `
                            );
                        }
                    }
                ],
                language: LENGUAJE_TABLA
            });

        },
        data() {
            return {
                showTable: false,
                caracteristicas: [
                    {
                        "nombre":"Color",
                        "valores":["x","s","l","m","xl"],
                        "key":"Color",
                        "value":null
                    }
                    /*
                    * */
                ],
                productos: [],
                producto: {
                    cantidad: "",
                    descriptions: []
                },
                description: {
                    key: "",
                    value: ""
                },
                send: false,
                envioDatos: false
            };
        },
        validations: {},
        methods: {
            validarCatacteristica(data, input) {
                data.input = input;
                data.key = data.nombre;
                data.value = null;
                const index = this.caracteristicas.findIndex((c) => {
                    return c.id === data.id;
                });
                if (index < 0) {
                    data.input.parentElement.classList.add("eliminar-caracteristica");
                    this.caracteristicas.push(data);
                    const c = JSON.stringify(this.caracteristicas);
                    this.productos.map(p => {
                        return p.descriptions = Object.assign([], JSON.parse(c), p.descriptions);
                    });

                } else {
                    data.input.parentElement.classList.remove("eliminar-caracteristica");
                    this.caracteristicas.splice(index, 1);
                    this.productos.map(p => {
                        return p.descriptions.splice(index, 1);
                    });
                }
                this.envioDatos = false;
            },
            agregarCaracteristica(data) {

            },
            validate() {
                $("#btnEnviarDatos").click();
                this.envioDatos = $("#validacionesFormulario:valid").length > 0;

                if (!this.envioDatos) {
                    $("#validacionesFormulario").addClass('validarFormulario');
                } else {
                    $("#validacionesFormulario").removeClass('validarFormulario');
                }

                if (this.productos.length < 1) {
                    event.$emit(
                        "alert",
                        403,
                        "Error",
                        "Ingresa la información basica del producto"
                    );
                    return false;
                }
                this.productos.map(producto => {
                    if (producto.descriptions[0].value == null) {
                        event.$emit(
                            "alert",
                            403,
                            "Error",
                            "Ingresa un color"
                        );
                        return false;
                    }
                });
                this.$emit("on-validate", {productos: this.productos}, this.envioDatos);
                return this.envioDatos;
            },
            reset() {
                const c = JSON.stringify(this.caracteristicas);
                this.producto.descriptions = Object.assign([], JSON.parse(c));
                const product = Object.assign({}, this.producto);
                this.productos.push(product);
                this.envioDatos = false;
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

    .btn--agregarProducto {
        margin: 1rem;
    }

    .btn--addDescription {
        border-radius: 50%;
        float: right;
        width: 3rem;
        line-height: 1.5rem;
    }

    .eliminar-caracteristica .agregarCaracteristica {
        display: none;
    }

    .eliminarCaracteristica {
        display: none;
    }

    .eliminar-caracteristica .eliminarCaracteristica {
        display: block;
    }
</style>
