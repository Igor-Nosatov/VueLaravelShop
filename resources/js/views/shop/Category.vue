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

        <li  v-for="category in categories">
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
               <li class="filter-list" v-for="brand in brands"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">{{ brand.name }}<span>(29)</span></label></li>
             </ul>
           </form>
         </div>
         <div class="common-filter">
           <div class="head">Color</div>
           <form action="#">
             <ul>
               <li class="filter-list" v-for="color in colors"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">{{ color.name }}<span>(29)</span></label></li>
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
         <div class="sorting mr-auto">
           <select>
             <option value="1">Show 12</option>
             <option value="1">Show 12</option>
             <option value="1">Show 12</option>
           </select>
         </div>
         <div class="pagination">
           <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
           <a href="#" class="active">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
           <a href="#">6</a>
           <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>
       </div>

       <section class="lattest-product-area pb-40 category-list">
         <div class="row">
           <div class="col-lg-4 col-md-6" v-for="(product,index) in products" @key="index">>
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
         <div class="sorting mr-auto">
           <select>
             <option value="1">Show 12</option>
             <option value="1">Show 12</option>
             <option value="1">Show 12</option>
           </select>
         </div>
         <div class="pagination">
           <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
           <a href="#" class="active">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
           <a href="#">6</a>
           <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </div>

       </div>
     </div>
   </div>
 </div>
    </div>
</template>

<script>
    export default {
      data(){
              return {
                products : [],
                categories : [],
                colors : [],
                brands : []
              }
          },
            mounted(){
              let uri = `/api/shop/${this.$route.params.id}/products`;
                this.axios.get(uri).then((response) => {
                    this.products = response.data.product;
                    this.categories = response.data.categories;
                    this.colors = response.data.colors;
                    this.brands = response.data.brands;
                });
            }
  }

</script>
