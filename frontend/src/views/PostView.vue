<template>

<div v-if="editing" class="section">
  <label for="title">Title</label>
  <br/>
  <input v-model="newTitle" class="input">

  <label for="body">Body</label>
  <br/>
  <textarea v-model="newBody" class="textarea column is-half"></textarea>

  <button @click="saveChanges()" class="button is-primary">Save</button>
  <button @click="discardChanges()" class="button">Discard</button>
</div>

<div v-else >
  <h1>#{{postId}} {{post.title}}</h1>
  <p>{{post.body}}</p>

  <button @click="startEditing()" class="button is-warning">Edit</button>

</div>


</template>

<script>

import axios from 'axios';

export default {  
  data() { 
    return {
      post:{},
      editing:false,
      newTitle:"",
      newBody:"",
      loading:true,
    }
  },
  methods: {
    discardChanges() {
      this.editing = false;
    },
    async saveChanges() {
      this.post.title = this.newTitle;
      this.post.body = this.newBody;
      await axios.patch(`/api/posts/${this.postId}`,this.post)
      this.editing = false;
    },
    startEditing() {
      this.newTitle = this.post.title
      this.newBody = this.post.body
      this.editing = true;
    }
  },
  computed: {
    postId() {
      return this.$route.params.id;
    },
  },
  name: 'PostView',
  async mounted() {
    const rawJSON = await axios.get(`/api/posts/${this.postId}`);
    this.loading = false;
    this.post = rawJSON.data;
  },

}
</script>
