<template>
  <div>
    <keep-alive>
      <component :is="dynamicComponent"></component>
      <div class="row margin">
        <div class="input-field col s12">
          <select id="role">
            <option value disabled selected>Login As</option>
            <option value="administrator">Administrator</option>
            <option value="translator" selected>Translator</option>
            <option value="client">Client</option>
          </select>
          <label>Materialize Select</label>
        </div>
      </div>
    </keep-alive>
  </div>
</template>
<style type="text/css">
a:hover {
  text-decoration: none !important;
}

a:hover {
  text-decoration: none !important;
}

.md-theme-default {
  background-color: white !important;
}
</style>
<script>
import Welcome from "./common/Welcome";
import Dashboard from "./common/Dashboard";

export default {
  components: {
    welcome: Welcome,
    dashboard: Dashboard
  },
  data: () => {
    return {
      bURL: "http://127.0.0.1:4912/",

      loggedIn: window.loggedIn,
      bURL: window.bURL,
      role: localStorage.getItem("role"),
      token: localStorage.getItem("token")
    };
  },
  computed: {
    dynamicComponent() {
      if (layout == "Dashboard") {
        return "dashboard";
      } else {
        return "welcome";
      }
    }
  },
  mounted() {},
  watch: {
    $route(to, from) {
      document.title = to.meta.title ? to.meta.title : "MPS";
    }
  },

  methods: {}
};
</script>