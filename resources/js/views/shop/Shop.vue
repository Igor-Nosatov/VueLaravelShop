<style scoped>
ul>li>a.current:first-child {
    color: red !important;
}
</style>

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
                        <a href="category.html">Fashion Category</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Browse Categories</div>
                    <ul class="main-categories">
                        <li v-for="(category,index) in categories" @key="index">
                            <router-link :to="{name: 'category', params: {id: category.id}}" class="nav-link">{{category.name}}</router-link>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="top-filter-head">Product Filters</div>
                    <div class="common-filter">
                        <div class="head">Brands</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list" v-for="brand in brands">
                                    <input class="pixel-radio" type="radio" id="apple" name="brand" :value="brand.id" v-model="selectedBrand">
                                    <label for="apple">{{ brand.name }}
                                        <span>(29)</span>
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Color</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list" v-for="color in colors">
                                    <input class="pixel-radio" type="radio" id="black" name="color" :value="color.id" v-model="selectedColor">
                                    <label for="black">{{ color.name }}
                                        <span>(29)</span>
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="common-filter">
                        <div class="head">Price</div>
                        <div class="price-range-area">
                            <div id="price-range"></div>
                            <div class="value-wrapper d-flex">
                                <div class="price">Price:</div>
                                <span>$</span>
                                <div id="lower-value"></div>
                                <div class="to">to</div>
                                <span>$</span>
                                <div id="upper-value"></div>
                            </div>
                        </div>
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
                    <div class="pagination ml-auto">

                    </div>
                </div>

                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">

                        <div class="col-lg-4 col-md-6" v-for="product in paginate">
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
                    <div class="pagination ml-auto">
                        <ul>
                            <li v-for="pageNumber in totalPages" v-if="Math.abs(pageNumber - currentPage) < 3 || pageNumber == totalPages || pageNumber == 1">
                                <a  v-bind:key="pageNumber" href="#" @click="setPage(pageNumber)" :class="{'current': currentPage === pageNumber }">{{ pageNumber }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    created() {
        this.fetchProducts();
    },
    data() {
        return {
            products: [],
            currentPage: 1,
            itemsPerPage: 9,
            resultCount: 0,
            categories: [],
            colors: [],
            brands: [],
            selectedBrand: '',
            selectedColor: ''
        }
    },

    computed: {
        filterProducts() {
            let vm = this,
                products = vm.products;
            let filter_products = _.filter(products, function(query) {
                let brand = vm.selectedBrand ? (query.brand_id == vm.selectedBrand) : true,
                    color = vm.selectedColor ? (query.color_id == vm.selectedColor) : true;
                return brand && color
            });
            return filter_products;
        },
        totalPages() {
            return Math.ceil(this.resultCount / this.itemsPerPage)
        },
        paginate() {
            if (!this.filterProducts || this.filterProducts.length != this.filterProducts.length) {
                return
            }
            this.resultCount = this.filterProducts.length
            if (this.currentPage >= this.totalPages) {
                this.currentPage = this.totalPages
            }
            let index = this.currentPage * this.itemsPerPage - this.itemsPerPage
            return this.filterProducts.slice(index, index + this.itemsPerPage)
        },
    },
    methods: {
        fetchProducts() {
            let url = `/api/shop`
            axios.get(url).then(response => {
                this.products = response.data.products;
                this.categories = response.data.categories;
                this.colors = response.data.colors;
                this.brands = response.data.brands;
            }).catch(error => {
                console.log(error)
            });
        },
        setPage(pageNumber) {
            this.currentPage = pageNumber;
        },

    }

}
</script>
