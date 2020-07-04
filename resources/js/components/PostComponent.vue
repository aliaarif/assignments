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
                      <h5 class="mt-0 animate fadeRight">{{ post.title }}</h5>
                      <img
                      :src="bURL+post.image"
                      class="responsive-img mt-1 p-3 border-radius-6"
                      alt
                      />
                      <p class="mt-2 mb-2 black-text">{{ post.body }}</p>
                      <hr />
                      <p class="black-text mt-2 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span style="position:relative; top:-5px">Category: {{ category }}</span>
                      </p>

                      <p class="black-text mt-1 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span
                        style="position:relative; top:-5px"
                        >Published On: {{ post.created_at }}</span>
                      </p>
                      <p class="black-text mt-1 mb-1">
                        <i class="material-icons">perm_identity</i>
                        <span style="position:relative; top:-5px">Published By: {{ post.title }}</span>
                      </p>
                    </div>
                    <div class="col l4 m12 animate fadeRight">
                      <h5 class="mt-0 animate fadeRight">Related Blogs</h5>
                      <div class="row video">
                        <div class="col s12 m12 xl12">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li class v-for="item in random50Posts" :key="item.slug">
                              <div
                              class="collapsible-header"
                              tabindex="0"
                              @click="goToSingleBlog(item.category_id, item.slug, item.id )"
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
  props: ["post_id"],
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
      post: {},
      category: "",
      category_id: "",
      random50Posts: [],
      slug: ""
    };
  },

  validations: {
    form: {
      username: { required, email },
      password: { required, min: minLength(8) }
    }
  },

  methods: {
    goToSingleBlog: function(post_cat_id, slug, post_id) {
      this.scrollToTop();
      if (this.$route.fullPath != "/blogs/" + slug) {
        localStorage.setItem("post_id", post_id);
        localStorage.setItem("post_cat_id", post_cat_id);
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
      axios
      .get("/api/get-single-post/" + slug)
      .then(res => {
        if (slug == res.data.post.slug) {
          this.slug = slug;
          this.post = res.data.post;
          this.category = res.data.post.category.name;
          this.category_id = res.data.post.category.id;
          localStorage.setItem("post_id", this.post.id);
          localStorage.setItem("post_cat_id", this.category_id);
        }
      })
      .catch(err => {});

      axios
      .get(
        "/api/get-random-posts/50/" +
        this.category_id +
        "/" +
        localStorage.getItem("post_id")
        )
      .then(res => {
        this.random50Posts = res.data.randomPosts;
      })
      .catch(err => {});
    }
  },
  mounted() {
    this.slug = this.$route.path.substr(7, this.$route.path.length);
    let slug = this.slug;

    axios
    .get("/api/get-single-post/" + slug)
    .then(res => {
      if (slug == res.data.post.slug) {
        this.post = res.data.post;
        this.category = res.data.post.category.name;
        this.category_id = res.data.post.category.id;
        localStorage.setItem("post_id", this.post.id);
        localStorage.setItem("post_cat_id", this.category_id);
      }
    })
    .catch(err => {});

    axios
    .get(
      "/api/get-random-posts/6/" +
      localStorage.getItem("post_cat_id") +
      "/" +
      localStorage.getItem("post_id")
      )
    .then(res => {
      this.random50Posts = res.data.randomPosts;
    })
    .catch(err => {});
  }
};
</script>
<style scoped></style>