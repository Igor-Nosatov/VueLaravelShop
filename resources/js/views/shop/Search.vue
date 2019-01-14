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
     <form action="/search" class="d-flex justify-content-between">
       <input type="text" class="form-control" id="search_input" v-model="query" placeholder="Search Here">
       <button type="submit" class="btn" @click="search()" ></button>

       <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
     </form>

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
                loading: false,
                error: false,
                query: ''
              }
          },
          methods: {
    search: function() {
        // Clear the error message.
        this.error = '';
        // Empty the products array so we can fill it with the new products.
        this.products = [];
        // Set the loading property to true, this will display the "Searching..." button.
        this.loading = true;

        // Making a get request to our API and passing the query to it.
        this.$http.get('/api/search?q=' + this.query).then((response) => {
            // If there was an error set the error message, if not fill the products array.
            response.body.error ? this.error = response.body.error : this.products = response.body;
            // The request is finished, change the loading to false again.
            this.loading = false;
            // Clear the query.
            this.query = '';
        });
    }
}


  }

</script>
