<template>
  <div>
    <header-bar></header-bar>
    <left-aside></left-aside>

    <h1
      v-if="this.$route.fullPath == '/'"
      align="center"
      class="mt-0 animate fadeUp mt-10"
    >Assignment from Auth Bridge</h1>

    <router-view></router-view>
  </div>
</template>
<style type="text/css" scoped>
#main {
  padding-left: 0px;
}
h1 {
  font-size: 100px;
}
.black-text {
  color: black;
}
.customPointer {
  cursor: pointer;
}
</style>
<script :src="bURL+'js/scripts/media-hover-effects.js'" type="text/javascript"></script>
<script>
import Breadcrumbs from "./Breadcrumbs";
import HeaderBarForWelcome from "./HeaderBarForWelcome";
import LeftAsideForWelcome from "./LeftAsideForWelcome";
import RightAside from "./RightAside";
import FooterBar from "./FooterBar";

export default {
  components: {
    "header-bar": HeaderBarForWelcome,
    "left-aside": LeftAsideForWelcome
  },

  data: () => {
    return {
      bURL: "http://127.0.0.1:4912/",

      allBlogs: [],
      allNews: [],
      random4Blogs: [],
      breadcrumbsNames: ["Abou", "Logi", "Regi"]
    };
  },
  mounted() {},
  watch: {},
  computed: {},
  methods: {}
};
</script>