<template>

  <aside
  :class="this.$parent.menu_dark == 'light' ? 'sidenav-main nav-lock nav-collapsible sidenav-light navbar-full' : 'sidenav-main nav-expanded nav-lock nav-collapsible navbar-full  sidenav-dark'"
  >
  <div class="brand-sidebar waves-effect">
    <h1 class="logo-wrapper">
      <router-link class="brand-logo darken-1" to="/">
        <img :src="bURL+'images/logo/materialize-logo.png'" alt="materialize logo" />
        <span class="logo-text">MPS</span>
      </router-link>
      <router-link class="navbar-toggler" to>
        <i class="material-icons">radio_button_checked</i>
      </router-link>
    </h1>
  </div>

  <ul
  class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow"
  id="slide-out"
  data-menu="menu-navigation"
  data-collapsible="menu-accordion"
  >
  <li
  :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? 'bold open active' : 'bold' "
  >
  <router-link
  :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? this.$parent.menu_color : '' "
  to="/"
  data-i18n
  >
  <i class="material-icons">dashboard</i>
  <span class="menu-title" data-i18n>Dashboard</span>
</router-link>
</li>

<li :class="this.$route.fullPath == '/dashboard/my-contacts' ? 'bold open active' : 'bold' ">
  <router-link
  :class="this.$route.fullPath == '/dashboard/my-contacts' ? this.$parent.menu_color : '' "
  to="/dashboard/my-contacts"
  data-i18n >
  <i class="material-icons"
  v-if="this.$route.fullPath == '/dashboard/my-contacts'"
  >radio_button_checked</i>
  <i class="material-icons" v-else>radio_button_unchecked</i>
  <span class="menu-title" data-i18n>My Contacts</span>
</router-link>
</li>

<li :class="this.$route.fullPath == '/dashboard/profile' ? 'bold open active' : 'bold' ">
  <router-link
  :class="this.$route.fullPath == '/dashboard/profile' ? this.$parent.menu_color : '' "
  to="/dashboard/profile"
  data-i18n >
  <i class="material-icons"
  v-if="this.$route.fullPath == '/dashboard/profile'"
  >radio_button_checked</i>
  <i class="material-icons" v-else>radio_button_unchecked</i>
  <span class="menu-title" data-i18n>My Profile</span>
</router-link>
</li>





</ul>
<div class="navigation-background"></div>
<a
class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
href="javascript:;"
data-target="slide-out"
>
<i class="material-icons">menu</i>
</a>
</aside>
</template>
<style lang="stylus" scoped></style>
<script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
import PerfectScrollbar from "perfect-scrollbar";

export default {
  data: () => {
    return {
      bURL: window.bURL,
      //role: window.role
    };
  },
  mounted() {
    new PerfectScrollbar(".leftside-navigation ");
    new PerfectScrollbar(".slide-out-right-body, .chat-body .collection");
    new PerfectScrollbar(".chat-body .collection");
    new PerfectScrollbar(".theme-cutomizer");
    new PerfectScrollbar(".dropdown-content");
  },
  methods: {}
};
</script>