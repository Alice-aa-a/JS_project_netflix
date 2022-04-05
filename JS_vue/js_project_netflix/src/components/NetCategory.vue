<template>
  <div>
    <p>{{ CategoryTitle }}</p>

  </div>
</template>

<script>

// https://api.themoviedb.org/3/movie/upcoming?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1
// https://api.themoviedb.org/3/movie/top_rated?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1"
// https://api.themoviedb.org/3/movie/now_playing?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1

export default {
  name: "NetHeader",
  props: {
    CategoryTitle: String,
    items: Array,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
p {
  text-align: left;
  font-weight: bold;
}

</style>

