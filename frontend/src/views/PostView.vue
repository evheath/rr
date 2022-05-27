<template>
  <div class="post">
    <h1>Post detail page</h1>
  </div>
</template>

<script>

// import axios from 'axios';

export default {
  name: 'PostView',
  components: {
    // HelloWorld
  },
  async mounted() {
    // const rawJSON = await axios.get('/posts.json');
    // this.posts = rawJSON.data;
  },
  data: () => ({
    posts:[],
  })
}
</script>
