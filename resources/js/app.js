require('./bootstrap');

window.Vue = require('vue');
window.Vuex = require('vuex');
window.bURL = 'http://dev.assignment/';
window.blogURL = 'http://dev.assignment/blogs/';
window.newsURL = 'http://dev.assignment/news/';
localStorage.setItem('bURL', bURL);
localStorage.setItem('blogURL', blogURL);
localStorage.setItem('newsURL', newsURL);
Vue.config.productionTip = false;
import router from './router';
import App from "./components/AppComponent";
import Welcome from "./components/common/Welcome";
import Dashboard from "./components/common/Dashboard";

import { MdButton, MdContent, MdDatepicker, MdDialog } from 'vue-material/dist/components'
import 'vue-material/dist/vue-material.css'
import 'vue-material/dist/theme/default.css'

Vue.use(MdButton)
Vue.use(MdContent)
Vue.use(MdDialog)
Vue.use(MdDatepicker)

//import AutoLogout from "./components/AutoLogout";
//import AdminProfileComponent from "./components/AdminProfileComponent";

//import PrettyCheckbox from 'pretty-checkbox-vue';
//Vue.use(PrettyCheckbox);
//import PrettyInput from 'pretty-checkbox-vue/input';
//import PrettyCheck from 'pretty-checkbox-vue/check';
//import PrettyRadio from 'pretty-checkbox-vue/radio';
//Vue.component('p-input', PrettyInput);
//Vue.component('auto-logout', AutoLogout);
// /Vue.component('p-radio', PrettyRadio);

Vue.use(Vuex);

const store = new Vuex.Store({
	state: {
		theBrothers: []
	},
});

new Vue({
	router,
	store: store,
	render: h => h(App)
}).$mount("#app");