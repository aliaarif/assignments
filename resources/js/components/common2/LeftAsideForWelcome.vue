	<template>
  <!-- BEGIN: SideNav-->
  <aside
    class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded"
    style="height: 0px; "
  >
    <div class="brand-sidebar waves-effect waves-light">
      <h1 class="logo-wrapper">
        <router-link class="brand-logo darken-1" to="/">
          <span class="logo-text">Assignment</span>
        </router-link>
      </h1>
    </div>
  </aside>
  <!-- END: SideNav-->
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

  methods: {}
};
</script>