<template>
  <center>
    <div class="row mt-10">
      <div class="col s12 m4 l4"></div>
      <div class="col s12 m4 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
        <div id="register-page" class="row" style="margin:0px auth">
          <form @submit.prevent="login" class="login-form">
            <div class="row">
              <div class="input-field col s12">
                <h5 class="ml-4">Login Panel</h5>
                <p class="ml-4">Login to assignment!</p>
                <p class="ml-4 red-text">{{ error }}</p>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">mail_outline</i>
                <input id="username" type="text" v-model="form.username" />
                <label for="username">Email</label>
                <span
                  class="red-text"
                  role="alert"
                  v-if="this.$v.form.username.$error"
                >Please provide your email</span>
              </div>
            </div>
            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix pt-2">lock_outline</i>
                <input id="password" type="password" v-model="form.password" />
                <label for="password">Password</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <button
                  type="submit"
                  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12"
                >Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4"></div>
  </center>
</template>
<script>
import { required, email, minLength } from "vuelidate/lib/validators";
export default {
  name: "LoginComponent",
  data: () => {
    return {
      form: {
        username: "",
        password: ""
      },
      error: "",
      user: {}
    };
  },
  validations: {
    form: {
      username: { required, email },
      password: { required, min: minLength(8) }
    }
  },
  methods: {
    login() {
      this.$v.form.$touch();
      if (this.$v.form.$error) {
        if (this.$v.form.username.$error) {
          $("#username").focus();
          return;
        } else if (this.$v.form.password.$error) {
          $("#password").focus();
          return;
        }
      }
      axios.interceptors.request.use(
        config => {
          this.loading = true;
          return config;
        },
        error => {
          this.loading = false;
          return Promise.reject(error);
        }
      );
      axios.interceptors.response.use(
        response => {
          this.loading = false;
          return response;
        },
        error => {
          this.loading = false;
          return Promise.reject(error);
        }
      );
      axios
        .post("/api/login", {
          email: this.form.username,
          password: this.form.password
        })
        .then(res => {
          //alert(res.data.user.profile.role);
          layout = res.data.user.profile.role ? "Dashboard" : "Welcome";
          localStorage.setItem("layout", layout);
          localStorage.setItem("loggedIn", true);
          localStorage.setItem("token", res.data.user.api_token);
          this.user.name = res.data.user.profile.name;
          this.user.email = res.data.user.email;
          this.user.standard_id = res.data.user.standard_id;
          this.user.ucode = res.data.user.profile.ucode;
          this.user.role = res.data.user.profile.role;
          this.user.slug = res.data.user.profile.slug;
          this.user.avatar = res.data.user.profile.avatar;
          this.user.profile_bg = res.data.user.profile.profile_bg;
          this.user.gender = res.data.user.profile.gender;
          localStorage.setItem("user", JSON.stringify(this.user));
          // if(res.data.user.profile.role == 'Principal' || res.data.user.profile.role == 'Teacher' ){
          //   window.location.href = bURL+'dashboard/attendance';
          // }else{
          window.location.href = bURL;
          //}
        })
        .catch(err => {
          this.error = err.response.data.status;
        });
    }
  },
  mounted() {
    if (loggedIn) {
      this.$router.push("/");
    }
  }
};
</script>
<style scoped></style>