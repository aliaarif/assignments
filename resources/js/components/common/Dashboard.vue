<template>
  <div>
    <header-bar></header-bar>
    <left-aside-for-user v-if="leftSideBarViews == 'User'"></left-aside-for-user>
    
    <left-aside-for-admin v-else></left-aside-for-admin>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <!-- Breadcrumbs component goes here -->
        <div class="col s12">
          <div class="container">
            <!-- <div  class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper" v-if="this.$route.fullPath != '/'">
              <div class="container">
                <div class="row">
                  <div class="col s10 m6 l6 breadcrumbs-left" >
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down" v-if="this.$route.fullPath == '/'">Dashboard</h5>
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down" v-else>{{ this.$route.path.substr(11,  this.$route.path.length - 10).replace(/-/g, ' ').charAt(0).toUpperCase() + this.$route.path.substr(11,  this.$route.path.length - 10).replace(/-/g, ' ').slice(1) }}</h5>
                    <ol class="breadcrumbs mb-0" >
                      <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">{{ this.$route.path.substr(11,  this.$route.path.length - 10).replace(/-/g, ' ').charAt(0).toUpperCase() + this.$route.path.substr(11,  this.$route.path.length - 10).replace(/-/g, ' ').slice(1) }}
                      </li>
                    </ol>
                  </div>
                  <div class="col s2 m6 l6"><a class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="javascript:;" data-target="dropdown1"><i class="material-icons">expand_more            </i><i class="material-icons right">arrow_drop_down</i></a>
                    <ul class="dropdown-content" id="dropdown1" tabindex="0">
                      <li tabindex="0"><a class="grey-text text-darken-2" href="javascript:;">Profile<span class="new badge red">2</span></a></li>
                      <li tabindex="0"><a class="grey-text text-darken-2" href="javascript:;">Contacts</a></li>
                      <li tabindex="0"><a class="grey-text text-darken-2" href="javascript:;">FAQ</a></li>
                      <li class="divider" tabindex="-1"></li>
                      <li tabindex="0"><a  class="grey-text text-darken-2" href="javascript:;">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
            <auto-logout></auto-logout>
            <keep-alive>
              <component :is="selectedComponent"></component>

            </keep-alive> 
            <!-- <child-component :is="selectedComponent"></child-component> -->

            <right-aside></right-aside>
            <!-- END RIGHT SIDEBAR NAV -->
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
              <ul>
                <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
    <!-- Theme Customizer -->
    <a 
    href="javascript:;"
    data-target="theme-cutomizer-out"
    class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
    ><i class="material-icons">settings</i></a
    >
    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
      <div class="col s12">
        <a class="sidenav-close" href="javascript:;"><i class="material-icons">close</i></a>
        <h5 class="theme-cutomizer-title">Theme Customizer</h5>
        <p class="medium-small">Customize & Preview in Real Time</p>
        <div class="menu-options">
          <h6 class="mt-6">Menu Options</h6>
          <hr class="customize-devider" />
          <div class="menu-options-form row">
            <div class="input-field col s12 menu-color mb-0">
              <p class="mt-0">Menu Color</p>
              <div class="gradient-color center-align">
                <span @click="changeTheme('menu_color', 'gradient-45deg-indigo-blue')"  class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                <span@click="changeTheme('menu_color', 'gradient-45deg-purple-deep-orange')" class="menu-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-light-blue-cyan')" class="menu-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"
                ></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-purple-amber')" class="menu-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber" ></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-purple-deep-purple')" class="menu-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple" ></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-deep-orange-orange')" class="menu-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"
                ></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-green-teal')" class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-indigo-light-blue')" class="menu-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
                <span @click="changeTheme('menu_color', 'gradient-45deg-red-pink')" class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
              </div>
              <!-- <div class="solid-color center-align">
                <span @click="changeTheme('menu_color1', 'red')" class="menu-color-option red" data-color="red"></span>
                <span @click="changeTheme('menu_color1', 'purple')" class="menu-color-option purple" data-color="purple"></span>
                <span @click="changeTheme('menu_color1', 'pink')" class="menu-color-option pink" data-color="pink"></span>
                <span @click="changeTheme('menu_color1', 'deep-purple')" class="menu-color-option deep-purple" data-color="deep-purple"></span>
                <span @click="changeTheme('menu_color1', 'cyan')" class="menu-color-option cyan" data-color="cyan"></span>
                <span @click="changeTheme('menu_color1', 'teal')" class="menu-color-option teal" data-color="teal"></span>
                <span @click="changeTheme('menu_color1', 'light-blue')" class="menu-color-option light-blue" data-color="light-blue"></span>
                <span @click="changeTheme('menu_color1', 'amber darken-3')" class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                <span @click="changeTheme('menu_color1', 'brown darken-2')" class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
              </div> -->
            </div>
            <!-- <div class="input-field col s12 menu-bg-color mb-0">
              <p class="mt-0">Menu Background Color</p>
              <div class="gradient-color center-align">
                <span
                class="menu-bg-color-option gradient-45deg-indigo-blue"
                data-color="gradient-45deg-indigo-blue"
                ></span>
                <span
                class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                data-color="gradient-45deg-purple-deep-orange"
                ></span>
                <span
                class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                data-color="gradient-45deg-light-blue-cyan"
                ></span>
                <span
                class="menu-bg-color-option gradient-45deg-purple-amber"
                data-color="gradient-45deg-purple-amber"
                ></span>
                <span
                class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                data-color="gradient-45deg-purple-deep-purple"
                ></span>
                <span
                class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                data-color="gradient-45deg-deep-orange-orange"
                ></span>
                <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                <span
                class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                data-color="gradient-45deg-indigo-light-blue"
                ></span>
                <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
              </div>
              <div class="solid-color center-align">
                <span class="menu-bg-color-option red" data-color="red"></span>
                <span class="menu-bg-color-option purple" data-color="purple"></span>
                <span class="menu-bg-color-option pink" data-color="pink"></span>
                <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                <span class="menu-bg-color-option teal" data-color="teal"></span>
                <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
              </div>
            </div> -->
            <div class="input-field col s12">
              <div class="switch">
                Menu Dark
                <label class="float-right" >
                  <input v-if="menu_dark == 'light'"  class="menu-dark-checkbox"  type="checkbox"   @click="changeTheme('menu_dark', 'dark')" /> 
                  <input v-if="menu_dark == 'dark'"  class="menu-dark-checkbox"  type="checkbox" checked   @click="changeTheme('menu_dark', 'light')" />
                  <span class="lever ml-0"></span>
                </label>
              </div>
            </div>
            <!-- <div class="input-field col s12">
              <div class="switch">
                Menu Collapsed
                <label class="float-right" >
                  <input v-if="menu_collapsed == 'no'"  class="menu-collapsed-checkbox"  type="checkbox"   @click="changeTheme('menu_collapsed', 'yes')" /> 
                  <input v-if="menu_collapsed == 'yes'"  class="menu-collapsed-checkbox"  type="checkbox" checked   @click="changeTheme('menu_collapsed', 'no')" />
                  <span class="lever ml-0"></span>
                </label>
              </div>
            </div> -->
            <div class="input-field col s12">
              <div class="switch">
                <p class="mt-0">Menu Selection</p>
                <label>
                  <input
                  class="menu-selection-radio with-gap"
                  value="sidenav-active-square"
                  name="menu-selection"
                  type="radio"
                  />
                  <span>Square</span>
                </label>
                <label>
                  <input
                  class="menu-selection-radio with-gap"
                  value="sidenav-active-rounded"
                  name="menu-selection"
                  type="radio"
                  />
                  <span>Rounded</span>
                </label>
                <label>
                  <input 
                  class="menu-selection-radio with-gap" 
                  value="" 
                  name="menu-selection"
                  type="radio"
                  />
                  <span>Normal</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <h6 class="mt-6">Navbar Options</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
          <div class="input-field col s12 navbar-color mb-0">
            <p class="mt-0">Navbar Color</p>
            <div class="gradient-color center-align">
              <span @click="changeTheme('navbar_color', 'gradient-45deg-indigo-blue')" class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-purple-deep-orange')" class="navbar-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"
              ></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-light-blue-cyan')" class="navbar-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"
              ></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-45deg-purple-amber')" class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-purple-deep-purple')" class="navbar-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"
              ></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-deep-orange-orange')" class="navbar-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"
              ></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-green-teal')" class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-indigo-light-blue')" class="navbar-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"
              ></span>
              <span @click="changeTheme('navbar_color', 'gradient-45deg-red-pink')" class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
            </div>
            <!-- <div class="solid-color center-align">
              <span class="navbar-color-option red" data-color="red"></span>
              <span class="navbar-color-option purple" data-color="purple"></span>
              <span class="navbar-color-option pink" data-color="pink"></span>
              <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
              <span class="navbar-color-option cyan" data-color="cyan"></span>
              <span class="navbar-color-option teal" data-color="teal"></span>
              <span class="navbar-color-option light-blue" data-color="light-blue"></span>
              <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
              <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
            </div> -->
          </div>
          <div class="input-field col s12">
            <div class="switch">
              Navbar Dark
              <label class="float-right"
              ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                ></label>
              </div>
            </div>
            <div class="input-field col s12">
              <div class="switch">
                Navbar Fixed
                <label class="float-right"
                ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                  ></label>
                </div>
              </div>
            </div>
            <h6 class="mt-6">Footer Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
              <div class="input-field col s12">
                <div class="switch">
                  Footer Dark
                  <label class="float-right"
                  ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                    ></label>
                  </div>
                </div>
                <div class="input-field col s12">
                  <div class="switch">
                    Footer Fixed
                    <label class="float-right"
                    ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                      ></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Theme Customizer -->
            <footer-bar></footer-bar>
          </div>
        </div>  
      </template>
      <style type="text/css" scoped></style>
      <script>
      import Breadcrumbs from './Breadcrumbs';
      import HeaderBar from './HeaderBar';
      import LeftAsideForAdmin from './LeftAsideForAdmin';
      import LeftAsideForUser from './LeftAsideForUser';
      import RightAside from './RightAside';
      import FooterBar from './FooterBar';  
      import ChildComponent from '../ChildComponent';
      import Dashboard from '../ProfileComponent';     
      import AdminTestComponent from '../AdminTestComponent'; 
      import MyContactsComponent from '../MyContactsComponent'; 
      import Attendance from '../Attendance'; 
      import ProfileComponent from '../ProfileComponent';   
      import AutoLogout from '../AutoLogout';   
      export default {
        components: {
          'header-bar' : HeaderBar,
          'left-aside-for-admin' : LeftAsideForAdmin,
          'left-aside-for-user' : LeftAsideForUser,
          'right-aside' : RightAside,
          'footer-bar' : FooterBar,
          'dashboard' : Dashboard,
          'profile' : ProfileComponent,
          'attendance' : Attendance,
          'my-contacts' : MyContactsComponent,
          'auto-logout' : AutoLogout,
        },
        data: () => {
          return {
            user:{},
            idleTime:0,
            paddingLeft: 'padding-left: 0px !important;',
            loggedIn:window.loggedIn,
            bURL: window.bURL,
            ucode: localStorage.getItem('ucode') == null ? false : localStorage.getItem('ucode') ,
            menu_color:'',
            navbar_color:'',
            menu_dark:'light',
            menu_collapsed:'no',
            leftSideBarViews:'User'
          }
        },
        mounted() {
           //!localStorage.getItem('token') ? window.locattion.href = this.bURL : '';
      
    
          this.user = localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {};
          if(this.user.role == 'User'){
            this.leftSideBarViews = 'User'
          }else{
            this.leftSideBarViews = 'Admin'
          }
          axios.get(bURL+'api/my-settings')
          .then((res) => {
            this.menu_color = res.data.settings.menu_color;
            this.navbar_color = res.data.settings.navbar_color;
            this.menu_dark = res.data.settings.menu_dark == 0  ? 'light' : 'dark';
            this.menu_collapsed = res.data.settings.menu_collapsed == 0  ? 'no' : 'yes';
          })
          .catch((err) => {});
        },
        computed: {
          selectedComponent () {
            if(this.$route.fullPath == '/dashboard/attendance'){
              return 'attendance';
            }else if(this.$route.fullPath == '/dashboard/add-new-locality'){
              return 'add-new-locality';
            }else if(this.$route.fullPath == '/dashboard/test-link-3'){
              return 'test3';
            }else if(this.$route.fullPath == '/dashboard/my-contacts'){
              return 'my-contacts';
            }else{
              return 'dashboard';
            }
          },  

        },
        watch:{
          $route(to, from) {
            document.title = to.meta.title ? to.meta.title :  "MPS | Dashboard";
          },

          menu_color: function(n, o){this.menu_color  = n;},
          navbar_color: function(n, o){this.navbar_color  = n;},
          menu_dark: function(n, o){this.menu_dark  = n;},
          menu_collapsed: function(n, o){this.menu_collapsed  = n;},

        },
        methods: {
          changeTheme: function(settingType, settingValue){
            if(settingType == 'menu_color'){
              settingValue =  'is-active router-link-active collapsible-body active '+settingValue+' gradient-shadow';  
            }
            axios.get(bURL+'api/save-my-settings/'+settingType+'/'+settingValue)
            .then((res) => {
              res.data.settingFlag == 'menu_color' ? this.menu_color = settingValue : '';
              res.data.settingFlag == 'navbar_color' ? this.navbar_color = settingValue : '';
              res.data.settingFlag == 'menu_dark' ? this.menu_dark = settingValue : '';
              res.data.settingFlag == 'menu_collapsed' ? this.menu_collapsed = settingValue : '';
            })
            .catch((err) => {
            });
          },
        },
      }
      </script>
