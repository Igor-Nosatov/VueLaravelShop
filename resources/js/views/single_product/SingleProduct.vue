<template>
<div class="main-block">
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Product Details Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">product-details</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        <img :src="product.image" :alt="product.name">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{product.name}}</h3>
                        <h2>${{product.price}}</h2>
                        <ul class="list">
                            <li><a class="active" href="#"><span>Category</span> : {{product.category.name}}</a></li>
                            <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                        </ul>
                        <p>{{product.description}}</p>
                        <form @submit.prevent="addProduct">
                            <input type="hidden" value="product.name" v-model="product.name">
                            <input type="hidden" value="product.image" v-model="product.image">
                            <div class="product_count">
                                <label for="qty">Quantity:</label>
                                <input type="number" v-model="product.qty" class="input-text qty">
                            </div>
                            <div class="card_area d-flex align-items-center">
                                <router-link :to="{ path: '/order?pid='+product.id }" class="col-md-4 btn btn-sm btn-primary float-right">Buy Now</router-link>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <characters></characters>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <spec></spec>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <comment></comment>
                </div>
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <review></review>
                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script>
    import characters from './local_component/Characters'
    import spec from './local_component/Specification'
    import comment from './local_component/Comment'
    import review from './local_component/Review'

    export default {
      components: {
        characters,
        spec,
        comment,
        review
      },
        data(){
            return {
                product : []
            }
        },
        beforeMount(){
            let url = `/api/product/${this.$route.params.id}`
            axios.get(url).then(response => this.product = response.data.product)
        }
    }
    </script>
