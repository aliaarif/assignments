<template>
  <div id="register-page" class="row">
    <div id="search-page" class="section">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s12">
              <div class="card z-depth-1">
                <div class="card-content">
                  <div class="row">
                    <div class="col l8 m12 right-content border-radius-6 animate fadeLeft">
                      <h5 class="mt-0 animate fadeRight">{{ news.title }}</h5>
                      <img
                      :src="bURL+news.image"
                      class="responsive-img mt-1 p-3 border-radius-6"
                      alt
                      />
                      <p class="mt-2 mb-2 black-text">{{ news.body }}</p>
                      <hr />
                      <p class="black-text mt-2 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span style="position:relative; top:-5px">Category: {{ category }}</span>
                      </p>

                      <p class="black-text mt-1 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span
                        style="position:relative; top:-5px"
                        >Published On: {{ news.created_at }}</span>
                      </p>
                      <p class="black-text mt-1 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span style="position:relative; top:-5px">Published By: {{ news.title }}</span>
                      </p>
                    </div>
                    <div class="col l4 m12 animate fadeRight">
                      <h5 class="mt-0 animate fadeRight">Related News</h5>
                      <div class="row video">
                        <div class="col s12 m12 xl12">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li class v-for="item in random50News" :key="item.slug">
                              <div
                              class="collapsible-header"
                              tabindex="0"
                              @click="goToSingleNews(item.category_id, item.slug, item.id, item.title)"
                              >{{ item.title }}</div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
.customPointer {
  cursor: pointer;
}
</style>
<script>
import { required, email, minLength } from "vuelidate/lib/validators";

export default {
  name: "NewsComponent",
  props: ["news_id"],
  data: () => {
    return {
      bURL: localStorage.getItem("bURL")
      ? localStorage.getItem("bURL")
      : "http://dev.mps/",
      form: {
        username: "",
        password: ""
      },
      loggedIn:
      localStorage.getItem("loggedIn") == null
      ? false
      : localStorage.getItem("loggedIn"),
      news: {},
      category: "",
      category_id: "",
      random50News: [],
      slug: "",
      newsTitle: localStorage.getItem("news_title")
      ? "MPS | News Panel | "+localStorage.getItem("news_title")
      : "MPS | News Panel | "+this.$router.currentRoute.meta.title
    };
  },

  validations: {
    form: {
      username: { required, email },
      password: { required, min: minLength(8) }
    }
  },

  methods: {
    // goToSingleNews: function(news_cat_id, slug, news_id) {
    //   this.scrollToTop();
    //   if (this.$route.fullPath != "/news/" + slug) {
    //     localStorage.setItem("news_id", news_id);
    //     localStorage.setItem("news_cat_id", news_cat_id);
    //     return this.$router.push("/news/" + slug);
    //   }
    // },

    goToSingleNews: function(news_cat_id, slug, news_id, news_title) {
      this.scrollToTop();
      if (this.$route.fullPath != "/news/" + slug) {
        localStorage.setItem("news_title", news_title);
        localStorage.setItem("news_id", news_id);
        localStorage.setItem("news_cat_id", news_cat_id);
        return this.$router.push("/news/" + slug);
      }
    },
    scrollToTop: function() {
      const c = document.documentElement.scrollTop || document.body.scrollTop;
      if (c > 0) {
        window.requestAnimationFrame(this.scrollToTop);
        window.scrollTo(0, c - c / 8);
      }
    }
  },
  watch: {
    $route(to, from) {


      let slug = to.path.substr(6, to.path.length);
      //this.$router.currentRoute.meta.title = slug;

      // if(slug){
      //   localStorage.setItem("news_title", slug);

      //   this.$router.currentRoute.meta.title = localStorage.getItem("news_title")+'111';

      //document.title = slug ? 'Mohta Public School | '+slug :  "Mohta Public School | News";
      // }

      axios
      .get("/api/get-single-news/" + slug)
      .then(res => {
        if (slug == res.data.news.slug) {
          this.slug = slug;
          this.news = res.data.news;
          this.category = res.data.news.category.name;
          this.category_id = res.data.news.category.id;
          //localStorage.setItem("news_title", this.news.title);
          //this.$router.currentRoute.meta.title = this.news.title;
          this.newsTitle = this.news.title;
          document.title = this.newsTitle ? 'MPS | News | '+this.newsTitle :  "MPS | News";
          localStorage.setItem("news_id", this.news.id);
          localStorage.setItem("news_cat_id", this.category_id);
        }
      })
      .catch(err => {});

      axios
      .get(
        "/api/get-random-news/50/" +
        this.category_id +
        "/" +
        localStorage.getItem("news_id")
        )
      .then(res => {
        this.random50News = res.data.randomNews;
      })
      .catch(err => {});

      
    }
  },
  beforeMount() {
    // this.$router.currentRoute.meta.title =
    //   this.$route.fullPath
    //     .substr(6, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .charAt(0)
    //     .toUpperCase() +
    //   this.$route.fullPath
    //     .substr(6, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .slice(1);
  },
  beforeCreate() {
    // this.$router.currentRoute.meta.title =
    //   this.$route.fullPath
    //     .substr(6, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .charAt(0)
    //     .toUpperCase() +
    //   this.$route.fullPath
    //     .substr(6, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .slice(1);
  },
  mounted() {

    console.info("App this router:", this.$router.options.routes[0].children);
    console.info("App currentRoute:", this.$router.currentRoute.meta);

    this.slug = this.$route.path.substr(6, this.$route.path.length);
    let slug = this.slug;


    let title = slug.replace("-", " ").replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toUpperCase()));

    document.title = title ? 'MPS | News | '+title :  "MPS | News";

    // if(slug){
    //   //alert(slug);
    //   localStorage.setItem("news_title", slug);
    //   this.$router.currentRoute.meta.title = slug;
    // }

    //this.$router.currentRoute.meta.title = slug;

    axios
    .get("/api/get-single-news/" + slug)
    .then(res => {
      if (slug == res.data.news.slug) {
        this.slug = slug;
        this.news = res.data.news;
        this.category = res.data.news.category.name;
        this.category_id = res.data.news.category.id;
        //localStorage.setItem("news_title", this.news.title);
        //this.$router.currentRoute.meta.title = this.news.title;
        //this.newsTitle = this.news.title;
        localStorage.setItem("news_id", this.news.id);
        localStorage.setItem("news_cat_id", this.category_id);
      }
    })
    .catch(err => {});

    axios
    .get(
      "/api/get-random-news/6/" +
      localStorage.getItem("news_cat_id") +
      "/" +
      localStorage.getItem("news_id")
      )
    .then(res => {
      this.random50News = res.data.randomNews;
    })
    .catch(err => {});

    
  }
};
</script>
<style scoped></style>