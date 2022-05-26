<template>
  <div class="home">
    <img alt="Vue logo" src="@/assets/logo.png">
    <header>
      <h1>Randall Reilly Vue.js Assessment</h1>
      <h2>By <a href="https://evheath.github.io/">Elliot Heath</a></h2>
      <p>Click <router-link to="/posts">here</router-link> to view the posts.</p>
    </header>
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'HomeView',
  components: {
    // HelloWorld
  }
}
</script>
