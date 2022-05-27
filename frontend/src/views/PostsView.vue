<template>
  <div class="posts">
    <h1>Here are all the posts:</h1>
    <p v-for="post of posts" :key="post.id">

        #{{post.id}}: <router-link :to="{name:'post',params:{id:post.id}}">{{post.title}}</router-link>
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
