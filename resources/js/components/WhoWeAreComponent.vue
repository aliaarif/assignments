<template>

  <div id="register-page" class="row">
    <!-- <div class="col s12 m6 l6 z-depth-1 card-panel border-radius-6 register-card bg-opacity-8">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12">
            <h5 class="ml-4">Register Panel</h5>
            <p class="ml-4">Join to our community now !</p>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">mail_outline</i>
            <input id="email" type="email">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password-again" type="password">
            <label for="password-again">Password again</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index.html" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <p class="margin medium-small"><a href="user-login.html">Already have an account? Login</a></p>
          </div>
        </div>
      </form>
    </div> -->

    <div class="left col s12 m6 l6 z-depth-1 card-panel border-radius-6 register-card bg-opacity-8">
      <!-- <div class="card-alert card red lighten-5" v-if="$v.form.$error">
        <div class="card-content red-text">
          <p class="ml-4">The form has error(s)</p>
        </div>
      </div> -->
      <form  @submit.prevent="login" class="login-form">
        <div class="row">
          <div class="input-field col s12">
            <h5 class="ml-4">Who we are Panel</h5>
            <p class="ml-4">Describe the Company Info here...</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" >
            <i class="material-icons prefix pt-2">mail_outline</i>
            <input id="username" type="text" v-model="form.username">
            <label for="username" >Username / Mobile / Email</label>
            <span class="red-text" role="alert" v-if="this.$v.form.username.$error">Please provide your username(username/email/mobile)</span>          
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password" type="password" v-model="form.password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <select id="role" v-model="form.role">
              <option value="" disabled selected>Login As</option>
              <option value="administrator">Administrator</option>
              <option value="translator" selected>Translator</option>
              <option value="client">Client</option>
            </select>
            <label>Materialize Select</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <p class="margin medium-small">
              <router-link to="/register">
                Already have an account? Login
              </router-link>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>

</template>

<script>
import { required, email, minLength } from "vuelidate/lib/validators";

export default {
  name: "LoginComponent",
  data: () => {
    return {
     form: {
      username: '',
      password: ''
    },
    //loggedIn: localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('loggedIn'),
    loggedIn:localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('loggedIn'),
    
  }
},

validations: {
  form: {
    username: { required, email },
    password: { required, min: minLength(8) },
  }
},

methods: {
  login(){
    this.$v.form.$touch();
    if(this.$v.form.$error){
      if(this.$v.form.username.$error){
        $('#username').focus();
        return;
      }else if(this.$v.form.password.$error){
       $('#password').focus();
       return;
     }       
   } 




   

   axios.interceptors.request.use((config) => {
    this.loading = true;
    return config;
  }, (error) => {
    this.loading = false;
    return Promise.reject(error);
  });
   axios.interceptors.response.use((response) => {
    this.loading = false;
    return response;
  }, (error) => {
    this.loading = false;
    return Promise.reject(error);
  });

   axios.post('/api/login', {'email': this.form.username, 'password': this.form.password })
   .then((res) => {
    //console.log(res.data.role);
    localStorage.setItem('role', res.data.role);
    localStorage.setItem('token', res.data.user.api_token);
    localStorage.setItem('loggedIn', true);
    this.$router.push('/'+res.data.role);
    //this.$emit('update', true);
    //window.loggedIn = true;

    //next('/administrator');
    //window.location.href=bURL+localStorage.getItem('role');
  })
   .catch(err => {
    //this.$emit('update', false);
    //localStorage.setItem('loggedIn', false);    
  })

 },
},
mounted() {
  //alert(this.loggedIn);
  // if(this.loggedIn == true){
  //   this.$emit('update', true);
  //   this.$router.push('/administrator');
  // }
  //alert(this.loggedIn);
  //alert(localStorage.getItem('loggedIn'));
  // if(localStorage.getItem('loggedIn') == true){
  //   this.$router.push('/administrator');
  // }

},

}
</script>
<style scoped></style>