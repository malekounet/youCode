<template>
  <section id="experience">
    <div class="experience__heading my-5 pt-5">
      <p class="display-4 text-uppercase text-white">experience</p>
      <span class="text-white">Professional and academic</span>
      <hr id="" class="w-25 bg-white" />
    </div>
    <div class="container">
      <div class="row">
        <div id="experience__content" class="col-md-5 h-75 text-white">
          <div id="experience__education">
            <h4>EDUCATION</h4>
            <div class="m-5">
              <span>From September 2020</span>
              <h5>Computer Science Master at USMB</h5>
              <p>
                specialized in artificial intelligence and collaborative systems
              </p>
            </div>
            <div>
              <span>2017 - 2020</span>
              <h5>IT License</h5>
              <p>University Savoie Mont-Blanc, France</p>
            </div>
            <div class="m-5">
              <span>2222 2233</span>
              <h5>Scientific Baccalaureate</h5>
              <p>Lycée de l'Albanais at Rumilly, France</p>
            </div>
          </div>
        </div>
        <div id="experience__line" class="m-auto bg-white"></div>
        <div id="experience__professional" class="col-md-5 text-white">
          <h4 class="">PROFESSIONAL</h4>
          <div class="m-5">
            <span>01.2020 - 05.2020</span>
            <h5>Urbalog LAET Project</h5>
            <p>
              Digitizing the Urbalog board game on Android with the Nearby
              Connection API
            </p>
          </div>
          <div>
            <span>07.2019</span>
            <h5>Pfeiffer Vacuum SAS, Annecy</h5>
            <p>
              Interim IT mission: implementation of a new Qlickview access
              management program + Laravel development
            </p>
          </div>
          <div class="m-5">
            <span>07.2018</span>
            <h5>Pfeiffer Vacuum SAS, Annecy</h5>
            <p>
              Interim IT mission: Management of SAP tables and inventory of
              sub-programs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import anime from "animejs";
export default {
  methods: {
    go() {
      window.addEventListener("resize", function () {
        if (window.innerWidth <= 768) {
          anime({
            targets: "#experience__line",
            width: "75%", // -> from '28px' to '100%',
            height: "3px",
            easing: "easeInOutQuad",
            color: "#f6f6f6",
         
          });
        } else if (window.innerWidth > 768) {
          anime({
            targets: "#experience__line",
            width: "3px", // -> from '28px' to '100%',
            height: "500px",
            easing: "easeInOutQuad",
            duration: 100,
          
          });
        }
      });
    },
  },
  mounted() {
   
    this.go();
  },
};
</script>

<style>
#experience {
  background-image: linear-gradient(
      to right bottom,
      rgba(126, 213, 111, 0.795),
      rgba(40, 180, 133, 0.801)
    ),
    url(../assets/bg.jpg);
}
#experience__line {
  height: 3px;
 
}
</style>