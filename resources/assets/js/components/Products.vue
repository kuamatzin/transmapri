<template>
    <div>
        <div class="row">
            <div class="col-md-4 wow animated bounceInLeft" style="padding-top: 100px">
                <ul class="list-group">
                    <li class="list-group-item text-center" style="background-color: #309B32; color:white">CATEGORÍAS</li>
                    <li class="list-group-item" @click="getProductsByCategory(1)"><a href="">Carros</a></li>
                    <li class="list-group-item" @click="getProductsByCategory(2)">Cabinas</li>
                    <li class="list-group-item" @click="getProductsByCategory(3)">Porta ac consectetur ac</li>
                    <li class="list-group-item" @click="getProductsByCategory(4)">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col-md-8 wow animated bounceInRight">
                <paginator :dataSet="dataSet" @updated="fetchData"></paginator>
                <br><br>

                <div class="loader" v-if="loading">
                    <img src="https://www.mybpstation.com/sites/all/themes/custom/bp_theme/images/loader.gif" alt="" class="img-fluid mx-auto d-block">
                </div>

                <div class="row" v-for="chunk in chunkedProducts" style="padding-bottom: 20px">
                    <div class="col-md-4" v-for="product in chunk">
                        <div class="card">
                            <img class="card-img-top" src="images/equipo/carros/carro camilla tipo rodilla para ambulancia.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{product.name}}</h4>
                                <a href="#" class="btn btn-success" style="margin-top: 6px" data-toggle="modal" data-target=".bd-example-modal-lg">Detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <img class="card-img-top" src="images/equipo/carros/carro camilla tipo rodilla para ambulancia.jpg" alt="Card image cap">
                      <br>
                      <p class="text-center">Carro</p>
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
           chunkedProducts () {
             return _.chunk(this.products, 3)
           }
        },
        mounted(){
            this.fetchData()
        },

        data(){
            return {
                products: '',
                loading: false,
                dataSet: false,
                category: 1
            }
        },

        methods: {
            url(page = 1){
                return '/products/' + this.category + '/?page=' + page;
            },
            fetchData(page){
                this.loading = true
                axios.get(this.url(page)).then(({data}) => {
                    this.loading = false
                    this.dataSet = data;
                    this.products = data.data
                    }
                );
            },
            getProductsByCategory(category){
                this.category = category
                this.fetchData()
            }
        }
    }
</script>