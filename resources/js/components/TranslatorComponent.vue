<template>
  <v-app id="inspire">
    <v-navigation-drawer
    v-model="drawer"
    app
    clipped
    >
    <v-list dense>
      <v-list-item
      v-for="item in items"
      :key="item.text"
      link
      :to="item.action" 
      >
      <v-list-item-action>
        <v-icon>mdi-{{ item.icon }}</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>
          {{ item.text }}
        </v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-subheader class="mt-4 grey--text text--darken-1">SUBSCRIPTIONS</v-subheader>
    <v-list>
      <v-list-item
      v-for="item in items2"
      :key="item.text"
      link
      >
      <v-list-item-avatar>
        <img
        :src="`https://randomuser.me/api/portraits/men/${item.picture}.jpg`"
        alt=""
        >
      </v-list-item-avatar>
      <v-list-item-title v-text="item.text" />
    </v-list-item>
  </v-list>
  <v-list-item
  class="mt-4"
  link
  >
  <v-list-item-action>
    <v-switch v-model="theme" color="error" class="ma-1" label=""></v-switch>
  </v-list-item-action>
  <v-list-item-title class="grey--text text--darken-1">
    Switch Theme
  </v-list-item-title>
</v-list-item>
<v-list-item link @click="logout">
  <v-list-item-action>
    <v-icon color="grey darken-1">mdi-lock</v-icon>
  </v-list-item-action>
  <v-list-item-title class="grey--text text--darken-1">Logout</v-list-item-title>
</v-list-item>
</v-list>
</v-navigation-drawer>

<v-app-bar
app
clipped-left
:color="theme ? 'dark' : 'error'"
dense
>
<v-app-bar-nav-icon @click.stop="drawer = !drawer" />
<v-btn text to="/translator" left>
  <v-icon class="mx-4">mdi-laravel</v-icon>
  <v-toolbar-title class="mr-12 align-center" >
    <span class="title" >ArabEasy</span>
  </v-toolbar-title>
</v-btn>
<v-spacer />
<v-row
align="center"
style="max-width: 650px"
>
<v-text-field
:append-icon-cb="() => {}"
placeholder="Search..."
single-line
append-icon="mdi-search"
color="white"
hide-details
/>
</v-row>
</v-app-bar>

<v-content>
  <v-container class="">
    <router-view></router-view>
    <v-row
    justify="center"
    align="center"
    >
    <v-col>

      <v-snackbar
      v-model="snackbar"
      >
      Welcome to Translator Dashboard
      <v-btn
      color="error"
      text
      @click="snackbar = false"
      >
      Close
    </v-btn>
  </v-snackbar>

</v-col>
</v-row>
</v-container>
</v-content>
</v-app>
</template>

<script>
export default {
  props: {
    source: String
  },
  data: () => ({
    drawer: null,
    theme: true,
    valid: true,
    loading: false,
    snackbar: false,
    text: '',
    items: [
    { icon: 'account', text: 'Users', action: '/translator/users' },
    { icon: 'post-outline', text: 'Posts', action: '/translator/posts' },
    { icon: 'circle-edit-outline', text: 'Pages', action: '/translator/pages' },
    { icon: 'briefcase-edit-outline', text: 'Categories', action: '/translator/categories' },
    { icon: 'account-badge-outline', text: 'Roles', action: '/administrator/roles' },
    { icon: 'account-badge-outline', text: 'My Route', action: '/translator/test' },
    { icon: 'account-badge-outline', text: 'Dont touch', action: '/administrator/test' }

    ],
    items2: [
    { picture: 28, text: 'Joseph' },
    { picture: 38, text: 'Apple' },
    { picture: 48, text: 'Xbox Ahoy' },
    { picture: 58, text: 'Nokia' },
    { picture: 78, text: 'MKBHD' },
    ],
  }),
  created () {
    this.$vuetify.theme.dark = true
  },
  mounted () {
    if(localStorage.getItem('role') != 'translator'){
     //this.$router.push('/'+localStorage.getItem('role'));
   }
    //this.$vuetify.theme.dark = true
    this.snackbar = localStorage.getItem('loggedIn') ? true : false;
    localStorage.removeItem('loggedIn');
  },
  watch: {
    theme: function(o, n){
      this.$vuetify.theme.dark = o;
    }
  },
  methods:{
    logout: function(){
      localStorage.removeItem('token');
      localStorage.removeItem('role');
      localStorage.removeItem('loggedIn');
      this.$router.push('/')
      .then((res) => {
        this.text = 'LoggedOut Successfully';
        this.snackbar = true
      })
      .catch((err) => {
        this.text = err;
      })
    }
  }
}
</script>
<style scoped></style>