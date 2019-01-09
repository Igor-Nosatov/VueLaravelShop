<template>
 <div>
   <section class="banner-area organic-breadcrumb">
 		<div class="container">
 			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
 				<div class="col-first">
 					<h1>Login/Register</h1>
 					<nav class="d-flex align-items-center">
 						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
 						<a href="category.html">Login/Register</a>
 					</nav>
 				</div>
 			</div>
 		</div>
 	</section>
 	<section class="login_box_area section_gap">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6">
 					<div class="login_box_img">
 						<img class="img-fluid" src="img/login.jpg" alt="">
 						<div class="hover">
 							<h4>New to our website?</h4>
 							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
 							<a class="primary-btn" href="registration.html">Create an Account</a>
 						</div>
 					</div>
 				</div>
 				<div class="col-lg-6">
 					<div class="login_form_inner">
 						<h3>Log in to enter</h3>

 						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
 							<div class="col-md-12 form-group">
 								<input type="text" class="form-control" id="name" name="name"
                 v-model="name"  placeholder="Username" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Username'"  required autofocus>
 							</div>
 							<div class="col-md-12 form-group">
 								<input type="password" class="form-control" id="name"
                name="password" placeholder="Password"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                 v-model="password" required>
 							</div>
 							<div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary" @click="handleSubmit">
                                            Login
                                        </button>
 							</div>
 						</form>


 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 </div>
</template>


<script>
      export default {
          data() {
              return {
                  email: "",
                  password: ""
              }
          },
          methods: {
              handleSubmit(e) {
                  e.preventDefault()
                  if (this.password.length > 0) {
                      let email = this.email
                      let password = this.password

                      axios.post('api/login', {email, password}).then(response => {
                          let user = response.data.user
                          let is_admin = user.is_admin

                          localStorage.setItem('LaravelVueShop.user', JSON.stringify(user))
                          localStorage.setItem('LaravelVueShop.jwt', response.data.token)

                          if (localStorage.getItem('LaravelVueShop.jwt') != null) {
                              this.$emit('loggedIn')
                              if (this.$route.params.nextUrl != null) {
                                  this.$router.push(this.$route.params.nextUrl)
                              } else {
                                  this.$router.push((is_admin == 1 ? 'admin' : 'dashboard'))
                              }
                          }
                      });
                  }
              }
          }
      }
  </script>
