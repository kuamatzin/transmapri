<template>
    <div>
        <div class="row">
            <div class="col-md-4 wow animated bounceInLeft" style="padding-top: 100px">
                <ul class="list-group">
                    <li class="list-group-item text-center" style="background-color: #309B32; color:white">CATEGORÍAS</li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 1 }"><a @click.prevent="getProductsByCategory(1)">Bancos</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 2 }"><a @click.prevent="getProductsByCategory(2)">Carros</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 3 }"><a @click.prevent="getProductsByCategory(3)">Camillas</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 4 }"><a @click.prevent="getProductsByCategory(4)">Chesse Longue</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 5 }"><a @click.prevent="getProductsByCategory(5)">Escalerillas</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 6 }"><a @click.prevent="getProductsByCategory(6)">Lámparas</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 7 }"><a @click.prevent="getProductsByCategory(7)">Juegos de consultorio</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 8 }"><a @click.prevent="getProductsByCategory(8)">Mesas</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 9 }"><a @click.prevent="getProductsByCategory(9)">Negatoscopios</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 10 }"><a @click.prevent="getProductsByCategory(10)">Portasueros</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 11 }"><a @click.prevent="getProductsByCategory(11)">Muebles de acero inoxidable</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 12 }"><a @click.prevent="getProductsByCategory(12)">Muebles Clave IMSS</a></li>
                    <li class="list-group-item category" :class="{ 'c-active': category == 13 }"><a @click.prevent="getProductsByCategory(13)">Muebles sobre diseño</a></li>
                </ul>
            </div>
            <div class="col-md-8 wow animated bounceInRight">
                <paginator :dataSet="dataSet" @updated="fetchData"></paginator>
                <br><br>
    
                <div class="loader" v-if="loading">
                    <img src="https://www.mybpstation.com/sites/all/themes/custom/bp_theme/images/loader.gif" alt="" class="img-fluid mx-auto d-block">
                </div>
    
                <div class="row" v-for="chunk in chunkedProducts" :key="chunk" style="padding-bottom: 20px">
                    <div class="col-md-4" v-for="product in chunk" :key="product.id">
                        <div class="card">
                            <div>
                                <img v-if="product.image" class="card-img-top" :src="'/storage/' + product.image" :alt="product.name" style="height: 148px">
                                <img v-else class="card-img-top" src="/images/equipo/carros/ambulancia.jpg" :alt="product.name">
                                <!--<img style="position:relative; top: -30px;" width="100px" src="images/logo.png" />-->
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{product.name}}</h4>
                                <a href="#" class="btn btn-success" style="margin-top: 6px" data-toggle="modal" data-target=".bd-example-modal-lg" @click="setActiveProduct(product)">Detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div>
                                <img class="card-img-top" :src="'/storage/' + active_product.image" alt="Card image cap">
                                <p class="marca-agua">transmaprifabricademuebles</p>
                            </div>
                            <p class="text-center">{{active_product.name}}</p>
                        </div>
                    </div>
                </div>
                <paginator :dataSet="dataSet" @updated="fetchData"></paginator>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [],
    
        computed: {
            chunkedProducts() {
                return _.chunk(this.products, 3);
            }
        },
        mounted() {
            this.fetchData();
        },
        data() {
            return {
                products: "",
                loading: false,
                dataSet: false,
                category: 1,
                active_product: ""
            };
        },
    
        methods: {
            url(page = 1) {
                return "/products/category/" + this.category + "/?page=" + page;
            },
            fetchData(page) {
                this.loading = true;
                axios.get(this.url(page)).then(({
                    data
                }) => {
                    this.loading = false;
                    this.dataSet = data;
                    this.products = data.data;
                });
            },
            getProductsByCategory(category) {
                this.category = category;
                this.fetchData();
            },
            setActiveProduct(product) {
                this.active_product = product;
            }
        }
    };
</script>
