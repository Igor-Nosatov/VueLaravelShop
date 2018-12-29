<template>
    <div>

    </div>
</template>

<script>
    export default {
      data(){
              return {
                  products : []
              }
          },
          mounted(){
              axios.get("api/products").then(response => this.products = response.data)
          }
    }
</script>
