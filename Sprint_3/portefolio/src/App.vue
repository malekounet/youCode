<template>
  <div id="app">
    <IntroPage />
    <Aprpos />
    <experience />
    <competence />
    <projects />
 
  </div>
</template>
<script>
import IntroPage from "@/components/IntroPage.vue";
import Aprpos from "@/components/Aprpos.vue";
import experience from "@/components/experience.vue";
import competence from "@/components/competence.vue";

import projects from "@/components/Projects";

export default {
  components: { IntroPage, experience, Aprpos, competence, projects },
  name: "app",
};
</script>


<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  overflow-x: hidden;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
