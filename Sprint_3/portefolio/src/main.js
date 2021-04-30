import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import VueAnimateOnScroll from '/node_modules/vue-animate-onscroll';
import VueAnime from 'animejs';
import VueTimeline from "@growthbunker/vuetimeline";
import AOS from 'aos'
import 'aos/dist/aos.css'


import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.config.productionTip = false;

Vue.use(VueAnime);



new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");

AOS.init()