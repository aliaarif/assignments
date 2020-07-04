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
                      <h5 class="mt-0 animate fadeRight">{{ blog.title }}</h5>
                      <img
                      :src="bURL+blog.image"
                      class="responsive-img mt-1 p-3 border-radius-6"
                      alt
                      />
                      <p class="mt-2 mb-2 black-text">{{ blog.body }}</p>
                      <hr />
                      <p class="black-text mt-2 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span style="position:relative; top:-5px">Category: {{ category }}</span>
                      </p>

                      <p class="black-text mt-1 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span
                        style="position:relative; top:-5px"
                        >Published On: {{ blog.created_at }}</span>
                      </p>
                      <p class="black-text mt-1 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span style="position:relative; top:-5px">Published By: {{ blog.title }}</span>
                      </p>
                    </div>
                    <div class="col l4 m12 animate fadeRight">
                      <h5 class="mt-0 animate fadeRight">Related Blogs</h5>
                      <div class="row video">
                        <div class="col s12 m12 xl12">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li class v-for="item in random50Blogs" :key="item.slug">
                              <div
                              class="collapsible-header"
                              tabindex="0"
                              @click="goToSingleBlog(item.category_id, item.slug, item.id, item.title)"
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
  name: "BlogComponent",
  props: ["blog_id"],
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
      blog: {},
      category: "",
      category_id: "",
      random50Blogs: [],
      slug: "",
      blogTitle: localStorage.getItem("blog_title")
      ? "MPS | Blogs Panel | "+localStorage.getItem("blog_title")
      : "MPS | Blogs Panel | "+this.$router.currentRoute.meta.title
    };
  },

  validations: {
    form: {
      username: { required, email },
      password: { required, min: minLength(8) }
    }
  },

  methods: {
    // goToSingleBlog: function(blog_cat_id, slug, blog_id) {
    //   this.scrollToTop();
    //   if (this.$route.fullPath != "/blogs/" + slug) {
    //     localStorage.setItem("blog_id", blog_id);
    //     localStorage.setItem("blog_cat_id", blog_cat_id);
    //     return this.$router.push("/blogs/" + slug);
    //   }
    // },

    goToSingleBlog: function(blog_cat_id, slug, blog_id, blog_title) {
      this.scrollToTop();
      if (this.$route.fullPath != "/blogs/" + slug) {
        localStorage.setItem("blog_title", blog_title);
        localStorage.setItem("blog_id", blog_id);
        localStorage.setItem("blog_cat_id", blog_cat_id);
        return this.$router.push("/blogs/" + slug);
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


      let slug = to.path.substr(7, to.path.length);
      //this.$router.currentRoute.meta.title = slug;

      // if(slug){
      //   localStorage.setItem("blog_title", slug);

      //   this.$router.currentRoute.meta.title = localStorage.getItem("blog_title")+'111';

      //document.title = slug ? 'Mohta Public School | '+slug :  "Mohta Public School | Blog";
      // }

      axios
      .get("/api/get-single-blog/" + slug)
      .then(res => {
        if (slug == res.data.blog.slug) {
          this.slug = slug;
          this.blog = res.data.blog;
          this.category = res.data.blog.category.name;
          this.category_id = res.data.blog.category.id;
          //localStorage.setItem("blog_title", this.blog.title);
          //this.$router.currentRoute.meta.title = this.blog.title;
          this.blogTitle = this.blog.title;
          document.title = this.blogTitle ? 'MPS | Blogs | '+this.blogTitle :  "MPS | Blogs";
          localStorage.setItem("blog_id", this.blog.id);
          localStorage.setItem("blog_cat_id", this.category_id);
        }
      })
      .catch(err => {});

      axios
      .get(
        "/api/get-random-blogs/50/" +
        this.category_id +
        "/" +
        localStorage.getItem("blog_id")
        )
      .then(res => {
        this.random50Blogs = res.data.randomBlogs;
      })
      .catch(err => {});

      
    }
  },
  beforeMount() {
    // this.$router.currentRoute.meta.title =
    //   this.$route.fullPath
    //     .substr(7, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .charAt(0)
    //     .toUpperCase() +
    //   this.$route.fullPath
    //     .substr(7, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .slice(1);
  },
  beforeCreate() {
    // this.$router.currentRoute.meta.title =
    //   this.$route.fullPath
    //     .substr(7, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .charAt(0)
    //     .toUpperCase() +
    //   this.$route.fullPath
    //     .substr(7, this.$route.fullPath.length)
    //     .replace(/-/g, " ")
    //     .slice(1);
  },
  mounted() {

    console.info("App this router:", this.$router.options.routes[0].children);
    console.info("App currentRoute:", this.$router.currentRoute.meta);

    this.slug = this.$route.path.substr(7, this.$route.path.length);
    let slug = this.slug;


    let title = slug.replace("-", " ").replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toUpperCase()));

    document.title = title ? 'MPS | Blogs | '+title :  "MPS | Blogs";

    // if(slug){
    //   //alert(slug);
    //   localStorage.setItem("blog_title", slug);
    //   this.$router.currentRoute.meta.title = slug;
    // }

    //this.$router.currentRoute.meta.title = slug;

    axios
    .get("/api/get-single-blog/" + slug)
    .then(res => {
      if (slug == res.data.blog.slug) {
        this.slug = slug;
        this.blog = res.data.blog;
        this.category = res.data.blog.category.name;
        this.category_id = res.data.blog.category.id;
        //localStorage.setItem("blog_title", this.blog.title);
        //this.$router.currentRoute.meta.title = this.blog.title;
        //this.blogTitle = this.blog.title;
        localStorage.setItem("blog_id", this.blog.id);
        localStorage.setItem("blog_cat_id", this.category_id);
      }
    })
    .catch(err => {});

    axios
    .get(
      "/api/get-random-blogs/6/" +
      localStorage.getItem("blog_cat_id") +
      "/" +
      localStorage.getItem("blog_id")
      )
    .then(res => {
      this.random50Blogs = res.data.randomBlogs;
    })
    .catch(err => {});

    
  }
};
</script>
<style scoped></style>