<template>
  <div class="row">
    <div class="header-left">
      <img class="logo" src="../assets/logo.png" />
      <a href="" target="_blank" rel="noopener">Accueil</a>
      <a href="" target="_blank" rel="noopener">Séries</a>
      <a href="" target="_blank" rel="noopener">Films</a>
      <a href="" target="_blank" rel="noopener">Nouveautés</a>
      <a href="" target="_blank" rel="noopener">Les plus populaires</a>
    </div>
    <div/>
    <div class="header-right">
      <img class="search" src="../assets/search.png" />
      <a href="" target="_blank" rel="noopener">Ma liste</a>
      <a>DIRECT</a>
      <a>Jeunesse</a>
      <img class="user_icon" src="../assets/user_icon.png" />
    </div>
  </div>
</template>

<script>
export default {
  name: "NetHeader",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
* {
  color: #fff;
  position: sticky;
  top: 0;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  margin-top: 0;
  margin-bottom: 0;
  font-size: 0.8rem;
}
.row {
  display: grid;
  grid-template-columns: 50% 25% 25%; 
}
.logo {
  height: 4rem;
}
.user_icon {
  height: 2rem;
}
.search {
  height: 0.8rem;
}
a {
  text-decoration: none;
}
</style>
