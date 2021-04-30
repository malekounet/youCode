<template>
  <div
    id="intro"
    class="container-fluid d-flex jusctidy-content-center align-items-center"
  >
    <div id="intro__content" class="container w-80 col-sm-8 col-lg-5">
      <h1 data-aos="fade-down" id="intro__heading" class="text-white">
        {{ fullName }}
      </h1>
      <div id="intro__line" class="w-80 bg-white my-5"></div>
      
      <p data-aos="fade-up" class="h1 text-white">
        {{ job }}
      </p>
    </div>
  </div>
</template>

<script>
import anime from "animejs";
export default {
  name: "intro",
  data() {
    return {
      fullName: "Hugo Bollon",
      job: "Full-Stack Developer",
    };
  },
  methods: {
    go() {
      anime({
        targets: ".line",
        transformY: 200,
        color: "#ffF",
        easing: "linear",
        delay: 800,
        duration: 200,
      });
    },
  },
  mounted() {
    this.go();
  },
};
</script>

<style>
body {
  padding: 1.3rem;
}
#intro {
  width: 100vw;
  height: 95vh;
  background-image: linear-gradient(
      to right bottom,
      rgba(126, 213, 111, 0.795),
      rgba(40, 180, 133, 0.801)
    ),
    url(../assets/bg.jpg);
  background-position: top left;
  background-size: 100% 100%;
}

#intro__line {
  height: 0.1rem;
}
</style>