<template>
  <div>
    <header-bar></header-bar>
    <left-aside></left-aside>

    <h1
      v-if="this.$route.fullPath == '/'"
      align="center"
      class="mt-0 animate fadeUp mt-10"
    >Assignment from biocube</h1>

    <router-view></router-view>
  </div>
</template>
<style type="text/css" scoped>
#main {
  padding-left: 0px;
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
      bURL: "http://dev.mps/",
      blogURL: "http://dev.mps/blogs/",
      newsURL: "http://dev.mps/news/",
      allBlogs: [],
      allNews: [],
      random4Blogs: [],
      breadcrumbsNames: ["Abou", "Logi", "Regi"]
    };
  },
  mounted() {
    //localStorage.getItem('token') ? window.locattion.href = this.bURL : '';

    localStorage.removeItem("title");
    axios
      .get("/api/blogs")
      .then(res => {
        this.allBlogs = res.data.blogs;
      })
      .catch(err => {});

    axios
      .get("/api/news")
      .then(res => {
        this.allNews = res.data.news;
      })
      .catch(err => {});

    axios
      .get("/api/get-random-blogs/4")
      .then(res => {
        this.random4Blogs = res.data.randomBlogs;
      })
      .catch(err => {});
  },
  watch: {
    $route(to, from) {
      document.title = to.meta.title ? to.meta.title : "MPS | Welcome";
    }
  },
  computed: {},
  methods: {
    goToSingleBlog: function(blog_cat_id, slug, blog_id, blog_title) {
      if (this.$route.fullPath != "/blogs/" + slug) {
        localStorage.setItem("blog_title", blog_title);
        localStorage.setItem("blog_id", blog_id);
        localStorage.setItem("blog_cat_id", blog_cat_id);
        return this.$router.push("/blogs/" + slug);
      }
    },

    goToSingleNews: function(news_cat_id, slug, news_id, news_title) {
      if (this.$route.fullPath != "/news/" + slug) {
        localStorage.setItem("news_title", news_title);
        localStorage.setItem("news_id", news_id);
        localStorage.setItem("news_cat_id", news_cat_id);
        return this.$router.push("/news/" + slug);
      }
    }
  }
};
</script>