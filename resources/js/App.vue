<template>
  <div>
    <div class="container">
      <p>
          <router-link to="/" >Выбрать сервис</router-link> | 
          <router-link to="/get-number">Купить номер</router-link>
      </p>
    </div>
      <div class="container">
          <router-view></router-view>
          
      </div>
  </div>
</template>
<script>
</script>
<style lang="">
</style>