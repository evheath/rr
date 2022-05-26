<template>
  <div class="about">
    <h1>Here are all the posts:</h1>

    <p>{{posts}}</p>
  </div>
</template>

<script>

import axios from 'axios';

export default {
  name: 'PostsView',
  components: {
    // HelloWorld
  },
  async mounted() {
    this.posts = await axios.get('/posts.json');
  },
  data: () => ({
    posts:null,
  })
}
</script>
