<template>
  <section id="projects" class="text-white py-5">
    <div id="projects__heading" class="container">
      <p class="display-4 mt-5 mb-0">MY PROJECTS</p>
      <span class="mt-0">This is my story</span>
      <hr id="about__line" class="w-25 bg-white" />
    </div>
    <div class="container">
      <vue-timeline-update
        :date="new Date('2017-02-26')"
        title="v2.2.0 - Initial D"
        description="Python script for Instagram automation using Instaloader. Used for auto following and DM. Easily configurable through Yaml config files!"
        thumbnail="https://images.unsplash.com/photo-1542546068979-b6affb46ea8f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGNvZGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
        category="announcement"
        icon="code"
        color="red"
      />
      <vue-timeline-update
        :date="new Date('2017-02-26')"
        title="v2.2.0 - Initial D"
        description="Python script for Instagram automation using Instaloader. Used for auto following and DM. Easily configurable through Yaml config files!"
        thumbnail="https://images.unsplash.com/photo-1542546068979-b6affb46ea8f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGNvZGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
        category="announcement"
        icon="code"
        color="red"
      />
      <vue-timeline-update
        :date="new Date('2017-02-26')"
        title="v2.2.0 - Initial D"
        description="Python script for Instagram automation using Instaloader. Used for auto following and DM. Easily configurable through Yaml config files!"
        thumbnail="https://images.unsplash.com/photo-1505238680356-667803448bb6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzd8fGNvZGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
        category="announcement"
        icon="code"
        color="green"
      />
    </div>

    <div id="project__card" v-for="project in projects" :key="project.name">
      <h4 data-aos="zoom-in-left">{{ project.name }}</h4>
      <img data-aos="zoom-in-right" :src="project.img" alt="" class="w-50" />
      <p data-aos="zoom-in-left">{{ project.desc }}</p>
      <span data-aos="zoom-in-right" class="text-white-50"
        >LINK :<a v-bind:href="project.link">{{ project.link }}</a></span
      >
    </div>
  </section>
</template>

<script>

export default {
  data() {
    return {
      projects: [
        {
          name: "IG_Automation_Bot",
          desc:
            "Python script for Instagram automation using Instaloader. Used for auto following and DM. Easily configurable through Yaml config files!",
          img: require("@/assets/projects/ig.gif"),
          link: "#",
        },
        {
          name: "Go-edlib",
          desc:
            "Golang string comparison and edit distance algorithms library, featuring : Levenshtein, LCS, Hamming, Damerau levenshtein (OSA and Adjacent transpositions algorithms), Jaro-Winkler, Cosine, etc.",
          img: require("@/assets/projects/edlib.jpg"),
          link: "#",
        },
        {
          name: "Gyro'Ball",
          desc:
            "3D labyrinth game project for Android using Unity. Use device gyroscope.",
          img: require("@/assets/projects/gyroball.jpg"),
          link: "Google Play",
        },
        {
          name: "Urbalog",
          desc:
            "Android adaptation of board game using Nearby Connections API and Java for the LAET",
          img: require("@/assets/projects/urba.jpg"),
          link: "https://github.com/hbollon/Urbalog",
        },
      ],
    };
  },
};
</script>

<style>
#projects {
  background-image: linear-gradient(
      to right bottom,
      rgba(126, 213, 111, 0.795),
      rgba(40, 180, 133, 0.801)
    ),
    url(../assets/bg.jpg);
}
</style>