<template>
<div >
    <div class="container">
        <form class="d-flex justify-content-between">
            <input v-model.lazy="keywords" type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="button" class="btn"></button>
            <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
        </form>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            keywords: null,
            search_products: []
        };
    },
    methods: {
        fetch() {
            axios.get('/api/shop/search?name=' + this.keywords, {
                    params: {
                        keywords: this.keywords
                    }
                })
                .then(response => {
                    this.$router.push({
                        name: 'search',
                        params: {
                            search_products: response.data.products
                        }
                    })
                })
                .catch(error => {});
        }
    },
    mounted() {
        this.$watch(
            function() {
                return this.keywords
            },
            (newVal, oldVal) => {
                this.fetch();
            }
        )
    }
}
</script>
