<template>
    <div>
      <header-component></header-component>
       <router-view :key="$route.fullPath"  @loggedIn="change"></router-view>
       <footer-component></footer-component>
    </div>
</template>


<script>
      export default {
        data() {
            return {
                name: null,
                user_type: 0,
                isLoggedIn: localStorage.getItem('LaravelVueShop.jwt') != null
            }
        },
        mounted() {
            this.setDefaults()
        },
        methods : {
            setDefaults() {
                if (this.isLoggedIn) {
                    let user = JSON.parse(localStorage.getItem('LaravelVueShop.user'))
                    this.name = user.name
                    this.user_type = user.is_admin
                }
            },
            change() {
                this.isLoggedIn = localStorage.getItem('LaravelVueShop.jwt') != null
                this.setDefaults()
            },
            logout(){
                localStorage.removeItem('LaravelVueShop.jwt')
                localStorage.removeItem('LaravelVueShop.user')
                this.change()
                this.$router.push('/')
            }
        }
    }

</script>
