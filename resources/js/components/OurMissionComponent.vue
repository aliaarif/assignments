<template>
  <div id="register-page" class="row">
    <div id="search-page" class="section">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s12">
              <div class="card z-depth-1">
                <div class="card-content">
                  <div class="row">
                    <div class="col l8 m12 animate fadeRight">
                      <div class="result">
                        <h6>
                          <a href="#">MOHTA PUBLIC SCHOOL (MPS)</a>
                        </h6>
                        <p
                          align="justify"
                          class="primary-text lighten-2"
                        >The Mohta Public School prepares students to understand, contribute to, and succeed in a rapidly changing society, thus making the world a better and more just place.</p>
                        <p
                          align="justify"
                          class="primary-text lighten-2"
                        >We will ensure that our students develop both the skills that a sound education provides and the competencies essential for success and leadership in the emerging creative economy.]</p>
                        <p
                          align="justify"
                          class="primary-text lighten-2"
                        >We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities.</p>
                      </div>
                      <h6 class="mt-2">Latest Blogs</h6>
                      <div class="row video">
                        <div class="col l4 m4 s12">
                          <div class="row">
                            <div class="col s12">
                              <div class="card z-depth-0 grey lighten-4 border-radius-6">
                                <div class="card-image">
                                  <img
                                    :src="bURL+'images/gallery/3.png'"
                                    class="responsive-img"
                                    alt
                                  />
                                </div>
                                <div class="card-content">
                                  1 Materialize is a Material Design Admin Template.
                                  <p class="teal-text lighten-2 truncate">www.youtube.com</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col l4 m4 s12">
                          <div class="row">
                            <div class="col s12">
                              <div class="card z-depth-0 grey lighten-4 border-radius-6">
                                <div class="card-image">
                                  <img
                                    :src="bURL+'images/gallery/19.png'"
                                    class="responsive-img"
                                    alt
                                  />
                                </div>
                                <div class="card-content">
                                  Materialize admin is super flexible, powerful, clean.
                                  <p class="teal-text lighten-2 truncate">www.youtube.com</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col l4 m4 s12 animate fadeRight">
                          <div class="row">
                            <div class="col s12">
                              <div class="card z-depth-0 grey lighten-4 border-radius-6">
                                <div class="card-image">
                                  <img
                                    :src="bURL+'images/gallery/20.png'"
                                    class="responsive-img"
                                    alt
                                  />
                                </div>
                                <div class="card-content">
                                  Materialize admin includes 8 pre-built templates.
                                  <p class="teal-text lighten-2 truncate">www.youtube.com</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col l4 m12 right-content border-radius-6 animate fadeLeft">
                      <h5 class="mt-0 animate fadeRight">MOHTA PUBLIC SCHOOL (MPS)</h5>
                      <p>A school for class 1 to 12 with hostel and transport facilities</p>
                      <img
                        :src="bURL+'images/schools/mps/school-image.jpg'"
                        class="responsive-img"
                        alt
                      />
                      <p class="mt-2 mb-2">
                        Materialize is a Material Design Admin Template is the excellent responsive
                        google material design inspired multipurpose admin template.
                      </p>
                      <hr />
                      <p class="mt-2">
                        <b class="blue-grey-text text-darken-4">Files Included:</b> HTML Files, CSS Files, JAVASCRIPT Files
                      </p>
                      <p class="mt-2">
                        <b class="blue-grey-text text-darken-4">Layout:</b> Responsive
                      </p>
                      <p class="mt-2">
                        <b class="blue-grey-text text-darken-4">Created:</b> 20 May 20
                      </p>
                      <p class="mt-2">Materialize - Material Design Admin Template by PIXINVENT</p>
                      <p class="mt-2">
                        <a href="#">Themeforest - $24</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { required, email, minLength } from "vuelidate/lib/validators";

export default {
  name: "OurMissionComponent",
  data: () => {
    return {
      bURL: localStorage.getItem("bURL")
        ? localStorage.getItem("bURL")
        : "http://dev.mps/",
      form: {
        username: "",
        password: ""
      },
      //loggedIn: localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('loggedIn'),
      loggedIn:
        localStorage.getItem("loggedIn") == null
          ? false
          : localStorage.getItem("loggedIn")
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
          //console.log(res.data.role);
          localStorage.setItem("role", res.data.role);
          localStorage.setItem("token", res.data.user.api_token);
          localStorage.setItem("loggedIn", true);
          this.$router.push("/" + res.data.role);
          //this.$emit('update', true);
          //window.loggedIn = true;

          //next('/administrator');
          //window.location.href=bURL+localStorage.getItem('role');
        })
        .catch(err => {
          //this.$emit('update', false);
          //localStorage.setItem('loggedIn', false);
        });
    }
  },
  mounted() {
    //alert(this.bURL);
    // if(this.loggedIn == true){
    //   this.$emit('update', true);
    //   this.$router.push('/administrator');
    // }
    //alert(this.loggedIn);
    //alert(localStorage.getItem('loggedIn'));
    // if(localStorage.getItem('loggedIn') == true){
    //   this.$router.push('/administrator');
    // }
  }
};
</script>
<style scoped></style>