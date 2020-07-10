	<template>
  <div>
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">
        <nav :class="this.$parent.navbar_color">
          <div class="nav-wrapper">
            <ul class="navbar-list right">
              <li class="hide-on-med-and-down">
                <a
                  class="waves-effect waves-block waves-light toggle-fullscreen"
                  href="javascript:void(0);"
                >
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li class="hide-on-large-only">
                <a
                  class="waves-effect waves-block waves-light search-button"
                  href="javascript:void(0);"
                >
                  <i class="material-icons">search</i>
                </a>
              </li>

              <li>
                <a
                  @click="logout"
                  class="waves-effect waves-block waves-light"
                  href="javascript:;"
                  data-target="slide-out-right"
                >
                  <i class="material-icons">lock</i>
                </a>
              </li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required />
                  <label class="label-icon" for="search">
                    <i class="material-icons search-sm-icon">search</i>
                  </label>
                  <i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
  </div>
</template>

<style lang="stylus" scoped></style>

<script>
export default {
  data: () => {
    return {
      bURL: window.bURL
    };
  },
  mounted() {},
  methods: {
    logout: function() {
      localStorage.removeItem("user");
      localStorage.removeItem("token");
      localStorage.removeItem("loggedIn");
      localStorage.setItem("layout", "Welcome");
      window.location.href = "/";
    }
  }
};
</script>