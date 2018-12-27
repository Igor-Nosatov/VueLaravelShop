<div class="col-lg-3 col-md-6" v-for="product in products">
  <div class="single-product">
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
  </div>
</div>
