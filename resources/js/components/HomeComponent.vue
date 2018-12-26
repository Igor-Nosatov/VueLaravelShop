<template>
  <div>
  <div class="banner">
  <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
  <div class="container fill_height">
    <div class="row fill_height">
      <div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
      <div class="col-lg-5 offset-lg-4 fill_height">
        <div class="banner_content">
          <h1 class="banner_text">new era of smartphones</h1>
          <div class="banner_price"><span>$530</span>$460</div>
          <div class="banner_product_name">Apple Iphone 6s</div>
          <div class="button banner_button"><a href="#">Shop Now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>
					<div class="viewed_slider_container">
						<div class="owl-carousel owl-theme viewed_slider">
							<div v-for="category in categories" class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img :src="'/images/' + category.img"/></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">${{ category.price }}</div>
										<div class="viewed_name"><a href="#">{{ category.name }}</a></div>
									</div>
								</div>
							</div>
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
        data(){
            return {
                categories : []
            }
        },
        mounted(){
            axios.get("api/home/").then(response => this.categories = response.data)
        }
    }
</script>
