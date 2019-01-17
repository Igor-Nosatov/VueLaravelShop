<template>
<div>
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shop Category page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html"></a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">search Bar</div>
                    <form class="" action="search" method="GET">
                        <input type="text" name="name" v-on:change="fetchProducts()" v-model="filter.name" placeholder="name">
                        <button type="submit" v-on:click="fetchProducts()">Search</button>
                    </form>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="common-filter">
                        <div class="head">Color</div>
                    </div>
                    <div class="common-filter">
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 col-md-7">
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                    </div>

                </div>


                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">

                        <div class="col-lg-4 col-md-6" v-for="(product,index) in products" @key="index">
                            <div class="single-product">
                                <router-link :to="{ path: '/products/'+product.id}">
                                    <img :src="product.image" :alt="product.name" class="img-fluid">
                                    <div class="product-details">
                                        <h6>{{ product.name }}</h6>
                                        <div class="price">
                                            <h6>${{ product.new_price }}</h6>
                                            <h6 class="l-through">${{ product.old_price }}</h6>
                                        </div>
                                        <div class="prd-bottom">

                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">add to bag</p>
                                            </a>
                                            <a href="" class="social-info">
                                                <span class="lnr lnr-heart"></span>
                                                <p class="hover-text">Wishlist</p>
                                            </a>
                                            <a href="" class="social-info">
                                                <span class="lnr lnr-sync"></span>
                                                <p class="hover-text">compare</p>
                                            </a>
                                            <a href="" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">view more</p>
                                            </a>
                                        </div>
                                    </div>
                                </router-link>
                            </div>
                        </div>

                    </div>
                </section>

                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</template>


<script>
export default {
    data() {
        return {
            products: [],
            filter: {
                'name': ''
            },
            errors: {}
        }
    },
    methods: {
        fetchProducts() {
          let url = `/api/search?name= + ${this.filter.name}`
          axios.get(url).then(response => {
                  this.products = response.data.products;
              }).catch(error => {
                  console.log(error)
              });
        }
    },

    beforeMount() {
        this.fetchProducts();
    }
}
</script>
