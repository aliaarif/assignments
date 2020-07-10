<template>
  <div>
    <header-bar></header-bar>
    <left-aside-for-user v-if="leftSideBarViews == 'User'"></left-aside-for-user>

    <div id="main">
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="col s12">
          <div class="container">
            <auto-logout></auto-logout>
            <keep-alive>
              <component :is="selectedComponent"></component>
            </keep-alive>
          </div>
        </div>
      </div>
      <footer-bar></footer-bar>
    </div>
  </div>
</template>
      <style type="text/css" scoped></style>
     <script>
import HeaderBar from "./HeaderBar";
import LeftAsideForUser from "./LeftAsideForUser";
import FooterBar from "./FooterBar";
import ChildComponent from "../ChildComponent";
import Dashboard from "./Dashboard";
import AdminTestComponent from "../AdminTestComponent";
import ProfileComponent from "../ProfileComponent";
import AutoLogout from "../AutoLogout";
export default {
  components: {
    "header-bar": HeaderBar,
    "left-aside-for-user": LeftAsideForUser,
    "footer-bar": FooterBar,
    search: ProfileComponent,
    "auto-logout": AutoLogout
  },
  data: () => {
    return {
      user: {},
      idleTime: 0,
      paddingLeft: "padding-left: 0px !important;",
      loggedIn: window.loggedIn,
      bURL: window.bURL,
      ucode:
        localStorage.getItem("ucode") == null
          ? false
          : localStorage.getItem("ucode"),
      menu_color: "",
      navbar_color: "",
      menu_dark: "light",
      menu_collapsed: "no",
      leftSideBarViews: "User"
    };
  },
  mounted() {
    //!localStorage.getItem('token') ? window.locattion.href = this.bURL : '';

    this.user = localStorage.getItem("user")
      ? JSON.parse(localStorage.getItem("user"))
      : {};
    // if (this.user.role == "Student") {
    //   this.leftSideBarViews = "Student";
    // } else if (this.user.role == "Teacher") {
    //   this.leftSideBarViews = "Teacher";
    // } else {
    //   this.leftSideBarViews = "Principal";
    // }
    this.leftSideBarViews = "User";
    axios
      .get(bURL + "api/my-settings")
      .then(res => {
        this.menu_color = res.data.settings.menu_color;
        this.navbar_color = res.data.settings.navbar_color;
        this.menu_dark = res.data.settings.menu_dark == 0 ? "light" : "dark";
        this.menu_collapsed =
          res.data.settings.menu_collapsed == 0 ? "no" : "yes";
      })
      .catch(err => {});
  },
  computed: {
    selectedComponent() {
      return "search";
    }
  },
  watch: {
    $route(to, from) {
      document.title = to.meta.title
        ? to.meta.title
        : "Auth Bridge Assignment | Dashboard";
    },
    menu_color: function(n, o) {
      this.menu_color = n;
    },
    navbar_color: function(n, o) {
      this.navbar_color = n;
    },
    menu_dark: function(n, o) {
      this.menu_dark = n;
    },
    menu_collapsed: function(n, o) {
      this.menu_collapsed = n;
    }
  },
  methods: {
    changeTheme: function(settingType, settingValue) {
      if (settingType == "menu_color") {
        settingValue =
          "is-active router-link-active collapsible-body active " +
          settingValue +
          " gradient-shadow";
      }
      axios
        .get(bURL + "api/save-my-settings/" + settingType + "/" + settingValue)
        .then(res => {
          res.data.settingFlag == "menu_color"
            ? (this.menu_color = settingValue)
            : "";
          res.data.settingFlag == "navbar_color"
            ? (this.navbar_color = settingValue)
            : "";
          res.data.settingFlag == "menu_dark"
            ? (this.menu_dark = settingValue)
            : "";
          res.data.settingFlag == "menu_collapsed"
            ? (this.menu_collapsed = settingValue)
            : "";
        })
        .catch(err => {});
    }
  }
};
</script>