<template>
  <div>
    
  	<div v-if="loading">loading...</div>
  	<div class="shot" v-else>
  		<h1>{{ post.title }}</h1>
  		<h2>{{ post.id  }}</h2>
  		<img :src="post.image" width="600">
  	</div>

  </div>
</template>

<script>

export default {
  name: 'Shot',
  components: {
 
  },

  data() {
    return{
    		loading:true,
    		post:{}

    	  };
    	 },	

  mounted()
  {

  	const id = this.$route.params.id;

  	axios.get('' + id)
  		 .then(res =>{this.post = res.data;})
  		 .catch()
  		 .finally(()=>{this.loading = false;});
  },

};
</script>

<style scoped>


</style>	