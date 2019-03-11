
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
                        <div class="textinputs">
                            <input type="range" class="minPrice"  v-model="minPrice" min="0" max="149" value="0" step="10">
                            <input type="range" class="maxPrice"  v-model="maxPrice" min="150" max="300" value="300" step="10">
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
                    <div v-for="pageNumber in totalPages" v-if="Math.abs(pageNumber - currentPage) < 3 || pageNumber == totalPages || pageNumber == 1">
                        <a v-bind:key="pageNumber" @click="setPage(pageNumber)" :class="{'current': currentPage === pageNumber }">{{ pageNumber }}</a>
                    </div>
                </div>
            </div>
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <div class="col-lg-4 col-md-6" v-for="product in displayProducts">
                        <div class="single-product">
                            <router-link :to="{ path: '/products/'+product.id}">
                                <img :src="product.image" :alt="product.name" class="img-fluid">
                                <div class="product-details">
                                    <h6>{{ product.name }}</h6>
                                    <div class="price">
                                        <h6>${{ product.price }}</h6>
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
                        <option @click="sortProducts('name', 'asc')" value="1">Default sorting</option>
                        <option @click="sortProducts('name', 'desc')" value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                    </select>
                </div>
                <div class="pagination ml-auto">
                    <div v-for="pageNumber in totalPages" v-if="Math.abs(pageNumber - currentPage) < 3 || pageNumber == totalPages || pageNumber == 1">
                        <a v-bind:key="pageNumber" @click="setPage(pageNumber)" :class="{'current': currentPage === pageNumber }">{{ pageNumber }}</a>
                    </div>
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
            productsPerPage: 9,
            resultCount: 1,
            categories: [],
            colors: [],
            brands: [],
            selectedBrand: '',
            selectedColor: '',
            minPrice: 0,
            maxPrice: 300
        }
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
        paginate(products) {
            let page = this.currentPage;
            let productsPerPage = this.productsPerPage;
            let from = (page * productsPerPage) - productsPerPage;
            let to = (page * productsPerPage);
            return products.slice(from, to);
        },
        setPage(pageNumber) {
            this.currentPage = pageNumber;
        },
        sortProducts(key, direction) {
            this.sort = `${key} > ${direction}`
            if (direction === 'asc') {
                this.filterProducts.sort((a, b) => a[key] > b[key] ? 1 : -1)
            } else {
                this.filterProducts.sort((a, b) => a[key] < b[key] ? 1 : -1)
            }
        }
    },
    computed: {
        filterProducts() {
            let vm = this,
                products = vm.products
            let filter_products = _.filter(products, function(query) {
                let brand = vm.selectedBrand ? (query.brand_id == vm.selectedBrand) : true,
                    color = vm.selectedColor ? (query.color_id == vm.selectedColor) : true,
                    price = query.price >= vm.minPrice && query.price <= vm.maxPrice;
                return brand && color && price
            });
            return filter_products;
        },
        displayProducts() {
            return this.paginate(this.filterProducts);
        },
        totalPages() {
            let pageCount = this.resultCount = this.filterProducts.length;
            return Math.ceil(this.resultCount / this.productsPerPage)
        }
    }

}
</script>
