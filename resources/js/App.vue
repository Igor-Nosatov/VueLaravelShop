<template>
    <div>
      <header-component></header-component>
       <router-view :key="$route.fullPath"></router-view>
       <deals-component></deals-component>
       <footer-component></footer-component>

    </div>
</template>


<script>

    export default{
    }
</script>
