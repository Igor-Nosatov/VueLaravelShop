<template>
 <div>
   <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
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
						<h3>Register</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name"
                 name="name" placeholder="Username"
                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" v-model="name" required autofocus>
							</div>
              <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name"
                name="email" placeholder="Email"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" v-model="email" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password"
                name="password" placeholder="Password"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" v-model="password" required>
							</div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password-confirm"
                name="name" placeholder="Password Confirm"
                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password Confirm'" v-model="password_confirmation" required>
							</div>
							<div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary" @click="handleSubmit">
                      Register
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
        props : ['nextUrl'],
        data(){
            return {
                name : "",
                email : "",
                password : "",
                password_confirmation : ""
            }
        },
        methods : {
            handleSubmit(e) {
                e.preventDefault()
                if (this.password !== this.password_confirmation || this.password.length <= 0) {
                    this.password = ""
                    this.password_confirmation = ""
                    return alert('Passwords do not match')
                }
                let name = this.name
                let email = this.email
                let password = this.password
                let c_password = this.password_confirmation
                axios.post('api/register', {name, email, password, c_password}).then(response => {
                    let data = response.data
                    localStorage.setItem('LaravelVueShop.user', JSON.stringify(data.user))
                    localStorage.setItem('LaravelVueShop.jwt', data.token)
                    if (localStorage.getItem('LaravelVueShop.jwt') != null) {
                        this.$emit('loggedIn')
                        let nextUrl = this.$route.params.nextUrl
                        this.$router.push((nextUrl != null ? nextUrl : '/'))
                    }
                })
            }
        }
    }
    </script>
