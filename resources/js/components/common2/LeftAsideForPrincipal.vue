<template>

  <aside
  :class="this.$parent.menu_dark == 'light' ? 'sidenav-main nav-lock nav-collapsible sidenav-light navbar-full' : 'sidenav-main nav-expanded nav-lock nav-collapsible navbar-full  sidenav-dark'"
  >
  <div class="brand-sidebar">
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


  <div class="navigation-background"></div>
  <a
  class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
  href="javascript:;"
  data-target="slide-out"
  >
  <i class="material-icons">menu</i>
</a>




<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
  <li class="navigation-header"><a class="navigation-header-text">Your Dashboard</a><i class="navigation-header-icon material-icons">more_horiz</i>
  </li>
  <li
  :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? 'bold' : 'bold' "
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


<li class="navigation-header"><a class="navigation-header-text">Attendances</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>

<li
:class="this.$route.fullPath == '/dashboard/contacts' ? 'bold' : 'bold' "
>
<router-link
:class="this.$route.fullPath == '/dashboard/contacts' ? this.$parent.menu_color : '' "
to="/dashboard/contacts"
data-i18n
>
<i class="material-icons">dashboard</i>
<span class="menu-title" data-i18n>My Profile</span>
</router-link>
</li>

<li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">My Profile</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
</li>
<li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="Chat">Chat</span></a>
</li>


<li :class="this.$route.fullPath == '/dashboard/attendance' ? 'bold open active' : 'bold' ">
  <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
    <i class="material-icons">content_paste</i>
    <span class="menu-title" data-i18n="Invoice">Attendances</span>
  </a>

  <div class="collapsible-body" v-if="this.$route.fullPath == '/dashboard/attendance' ? style='display:block'  : style='display:inline' ">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      
      <li :class="this.$route.fullPath == '/dashboard/attendance' ? 'active' : '' ">
        <router-link :class="this.$route.fullPath == '/dashboard/attendance' ? 'active' : '' " to="/dashboard/attendance">
          <i class="material-icons">radio_button_unchecked</i>
          <span data-i18n="Invoice List">Attendance</span>
        </router-link>
      </li>





      <li><a href="app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice View">Invoice View</span></a>
      </li>
      <li><a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Invoice Edit</span></a>
      </li>
      <li><a href="app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Invoice Add</span></a>
      </li>
    </ul>
  </div>
</li>
<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="eCommerce">eCommerce</span></a>
  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li><a href="eCommerce-products-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Products Page">Products Page</span></a>
      </li>
      <li><a href="eCommerce-pricing.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pricing">Pricing</span></a>
      </li>
    </ul>
  </div>
</li>
<li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="bold"><a class="waves-effect waves-cyan " href="user-profile-page.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
</li>
<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Pages</span></a>
  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li><a href="page-contact.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Contact</span></a>
      </li>
      <li><a href="page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Blog</span></a>
      </li>
      <li><a href="page-search.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Search</span></a>
      </li>
      <li><a href="page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">Knowledge</span></a>
      </li>
      <li><a href="page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">Timeline</span></a>
      </li>
      <li><a href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="FAQs">FAQs</span></a>
      </li>
      <li><a href="page-account-settings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Account Settings">Account Settings</span></a>
      </li>
      <li><a href="page-blank.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Blank">Page Blank</span></a>
      </li>
      <li><a href="page-collapse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Collapse">Page Collapse</span></a>
      </li>
    </ul>
  </div>
</li>

<li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="Form Layouts">Form Layouts</span></a>
</li>
<li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
</li>
<li class="navigation-header"><a class="navigation-header-text">Charts</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Chart</span></a>
  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
      </li>
      <li><a href="charts-chartist.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chartist">Chartist</span></a>
      </li>
      <li><a href="charts-sparklines.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sparkline Charts">Sparkline Charts</span></a>
      </li>
    </ul>
  </div>
</li>
<li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>
<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
      </li>
      <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
        <div class="collapsible-body">
          <ul class="collapsible" data-collapsible="accordion">
            <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</li>
<li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
</li>
<li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
</li>
</ul>



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