	<template>
  <div>
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">
        <nav
          class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow"
        >
          <div class="nav-wrapper">
            <ul class="navbar-list right">
              <!-- <li>
                <router-link
                  class="waves-effect waves-block waves-light translation-button"
                  to
                  data-target="blogs-dropdown"
                >Blogs &#x2B1D;</router-link>
              </li>

              <li>
                <router-link
                  class="waves-effect waves-block waves-light translation-button"
                  to
                  data-target="about-dropdown"
                >About Us &#x2B1D;</router-link>
              </li>-->

              <!-- <li>
                <router-link
                  class="waves-effect waves-block waves-light translation-button"
                  to
                  data-target="accounts-dropdown"
                >Accounts &#x2B1D;</router-link>
              </li>-->

              <!-- <li>
                <router-link class="grey-text text-darken-1" to="/login">
                  <i class="material-icons">lock_open</i> Login
                </router-link>
              </li>-->

              <li>
                <router-link
                  class="waves-effect waves-block waves-light translation-button"
                  to="/login"
                >Login</router-link>
              </li>
            </ul>

            <!-- <ul class="dropdown-content" id="blogs-dropdown">
              <li v-for="item in random7Blogs" :key="item.slug">
                <a
                  class="grey-text text-darken-1"
                  @click="goToSingleBlog(item.slug)"
                >{{ item.title }}</a>
              </li>
            </ul>-->

            <!-- <ul class="dropdown-content" id="about-dropdown">
              <li>
                <router-link class="grey-text text-darken-1" to="/about-us/who-we-are">
                  <i class="material-icons">info_outline</i> Who we are?
                </router-link>
              </li>
              <li>
                <router-link class="grey-text text-darken-1" to="/about-us/our-mission">
                  <i class="material-icons">info_outline</i> Our Mission
                </router-link>
              </li>
              <li>
                <router-link class="grey-text text-darken-1" to="/about-us/our-vision">
                  <i class="material-icons">info_outline</i> Our Vision
                </router-link>
              </li>
              <li>
                <router-link class="grey-text text-darken-1" to="/about-us/get-in-touch">
                  <i class="material-icons">contact_phone</i> Get in touch
                </router-link>
              </li>
            </ul>-->

            <!-- <ul class="dropdown-content" id="accounts-dropdown">
              <li>
                <router-link class="grey-text text-darken-1" to="/login">
                  <i class="material-icons">lock_open</i> Login
                </router-link>
              </li>
              <li>
                <router-link class="grey-text text-darken-1" to="/register">
                  <i class="material-icons">portrait</i> Register
                </router-link>
              </li>
            </ul>-->
          </div>
        </nav>
      </div>
    </header>
    <!-- END: Header-->
  </div>
</template>
<style type="text/css" scoped>
</style>

<script>
export default {
  data: () => {
    return {
      bURL: window.bURL,
      random7Blogs: []
    };
  },
  mounted() {
    axios
      .get("/api/get-random-blogs/7")
      .then(res => {
        this.random7Blogs = res.data.randomBlogs;
      })
      .catch(err => {});
  },
  methods: {
    goToSingleBlog: function(slug) {
      if (this.$route.fullPath != "/blogs/" + slug) {
        return this.$router.push("/blogs/" + slug);
      }
    }
  }
};
</script>