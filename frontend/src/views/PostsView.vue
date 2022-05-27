<template>
  <div class="about">
    <h1>Here are all the posts:</h1>
    <p v-for="post of posts" :key="post.id">

        #{{post.id}} : {{post.title}}
    </p>

    <!-- <p>{{posts}}</p> -->
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
    const rawJSON = await axios.get('/posts.json');
    this.posts = rawJSON.data;
  },
  data: () => ({
    posts:[],
  })
}
</script>
