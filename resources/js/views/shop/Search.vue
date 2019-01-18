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
                    <div class="form-group">
                        <div class="input-group input-group-md">
                            <div class="icon-addon addon-md">
                                <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query">
                            </div>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" @click="searchProduct()" v-if="!loading">Search!</button>
                                <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                            </span>
                        </div>
                    </div>
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
                      <div class="alert alert-danger" role="alert" v-if="error">
                          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                          @{{ error }}
                      </div>
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
                    <div class="pagination">
                      <pagination v-if="pagination.last_page > 1" :pagination="pagination" :offset="5" @paginate="searchProduct()"></pagination>
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
            pagination: {
                'current_page': 1
            },
            loading: false,
            error: false,
            query: ''
        }
    },
    methods: {
        searchProduct() {
        this.error = '';
        this.products = [];
        this.loading = true;
        this.$http.get('/api/search?name=' + this.query + '&page=' + this.pagination.current_page ).then((response) => {
            this.products = response.data.products.data;
            this.pagination = response.data.products;
            this.loading = false;
            this.query = '';
        });
    }
  }
}
</script>
