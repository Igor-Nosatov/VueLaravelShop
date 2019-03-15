<template>
<div>
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <router-link to="/" class="nav-link"><img src="img/logo.png" alt=""></router-link>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active">
                                <router-link to="/" class="nav-link">Home</router-link>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <router-link to="/shop" class="nav-link">Shop</router-link>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>
                                    </li>
                                    <span v-if="isLoggedIn">
                                        <li class="nav-item">
                                            <router-link :to="{ name: 'userboard' }" class="nav-link" v-if="user_type == 0"> Hi, {{name}}</router-link>
                                        </li>
                                        <li class="nav-item">
                                            <router-link :to="{ name: 'admin' }" class="nav-link" v-if="user_type == 1"> Hi, {{name}}</router-link>
                                        </li>
                                    </span>
                                    <li class="nav-item" v-if="isLoggedIn" @click="logout"> Logout</li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
</template>

<script>
export default {
    data() {
        return {
            name: null,
            user_type: 0,
            isLoggedIn: localStorage.getItem('jwt') != null
        }
    },
    mounted() {
        this.setDefaults()
    },
    methods: {
        setDefaults() {
            if (this.isLoggedIn) {
                let user = JSON.parse(localStorage.getItem('user'))
                this.name = user.name
                this.user_type = user.is_admin
            }
        },
        change() {
            this.isLoggedIn = localStorage.getItem('jwt') != null
            this.setDefaults()
        },
        logout() {
            localStorage.removeItem('jwt')
            localStorage.removeItem('user')
            this.change()
            this.$router.push('/')
        }
    }
}
</script>
