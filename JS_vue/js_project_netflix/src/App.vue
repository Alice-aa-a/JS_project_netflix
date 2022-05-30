<template>
  <NetGlide/>
  <NetHeader/>
  <NetCategory CategoryTitle="Les plus populaires" />
  <div class="row category_movies">
    <div v-for="item in popular_img_row" v-bind:key="item">
      <img :src="item" />
    </div>
  </div>
  <NetCategory CategoryTitle="Les mieux notés" />
  <div class="row category_movies">
    <div v-for="item in popular_img_row" v-bind:key="item">
      <img :src="item" />
    </div>
  </div>
  <NetCategory CategoryTitle="En cours de lecture" />
  <div class="row category_movies">
    <div v-for="item in popular_img_row" v-bind:key="item">
      <img :src="item" />
    </div>
  </div>
  <NetCategory CategoryTitle="Prochaines sorties" />
  <div class="row category_movies">
    <div v-for="item in popular_img_row" v-bind:key="item">
      <img :src="item" />
    </div>
  </div>
</template>


<script>

import NetHeader from "./components/NetHeader.vue";
import NetCategory from "./components/NetCategory.vue";





export default {
  name: "App",
  components: {
    NetHeader,
    NetCategory,
    NetGlide,
  },
  methods: {
    // 88c4843d6d8ef0d81c32ff4f6d73cc2a
    async getData() {
      try {
        for (let r = 0; r < this.requests.length; r++) {
          //first img row request
          let popular_response = await fetch(this.requests[r]);
          let popular_json = await popular_response.json();
          // get img ids
          //make img request for each id
          for (let i = 0; i < popular_json.results.length; i++) {
            this.popular_api.push(
              "https://api.themoviedb.org/3/movie/" +
                popular_json.results[i].id +
                "/images?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a"
            );
            let response = await fetch(this.popular_api[i]);
            let data = await response.json();
            // make img src
            this.popular_img_row.push(
              "https://image.tmdb.org/t/p/w500" + data.posters[0].file_path
            );
          }
        }
      } catch (error) {
        console.log(error);
      }
    },
  },
  data() {
    return {
      popular_request: "",
      requests: [
        "https://api.themoviedb.org/3/movie/popular?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1",
        "https://api.themoviedb.org/3/movie/top_rated?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1",
        "https://api.themoviedb.org/3/movie/now_playing?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1",
        "https://api.themoviedb.org/3/movie/upcoming?api_key=88c4843d6d8ef0d81c32ff4f6d73cc2a&page=1",
      ],
      popular_api: [],
      popular_img_row: [],
    };
  },
  mounted() {
    this.getData();
  },
  beforeUnmount() {
    console.log("before");
  },
  unmounted() {
    console.log("unmounted");
  },
};
</script>

<style lang="scss">
* {
  background: #141414;
}
img {
  height: 10rem;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #fff;
  margin-top: 60px;
}
.category_movies {
  display: flex;
  flex-direction: row;
}
</style>
