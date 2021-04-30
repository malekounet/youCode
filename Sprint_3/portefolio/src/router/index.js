import Vue from "vue";
import VueRouter from "vue-router";
import IntroPage from "../components/IntroPage.vue";
// import AboutPage from "../components/AboutPage.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "IntroPage",
    component: IntroPage,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
