<template>
  <div class="section animate fadeLeft">
    <!-- {{ this.$route.params.city }} -->
    <div class="row" id="ecommerce-products">
      <div class="col s12 m3 l3 pr-0 hide-on-med-and-down">
        <div class="card">
          <div class="card-content">
            <form action="#" class="display-grid">
              <p-check name="check" color="success" v-model="check">Check</p-check>
              <span class="card-title">Choose a Gender1</span>
              <label class="mt-1">
                <input
                type="checkbox"
                @click="changeGender('Male')"
                id="Male"
                data-id="Male"
                data-gender="Male"
                name="Male"
                value="Male"
                class="gender"
                />
                <span>Male</span>
              </label>
              <label class="mt-1">
                <input
                type="checkbox"
                @click="changeGender('Female')"
                id="Female"
                data-id="Female"
                data-gender="Female"
                name="Female"
                value="Female"
                class="gender"
                />
                <span>Female</span>
              </label>

              <span class="card-title mt-10">Monthly Salary (in INR)</span>

              <!--   <div class="input-field col s12">
                <span>Range</span>
                <p class="range-field">
                  <input type="range" id="test5" min="100" max="500" class="active">
                  <span class="thumb active"><span class="value">49</span></span>
                </p>
              </div>-->

              <div class="price-slider input-field col s12">
                <span>
                  from
                  <input type="number" value="1000" min="0" max="20000" /> to
                  <input type="number" value="4000" min="0" max="20000" />
                </span>
                <p class="range-field">
                  <span>Salary Range</span> Min
                  <span>Min</span>
                  <input value="1000" min="0" max="20000" step="500" type="range" class="active" />
                  <input value="4000" min="0" max="20000" step="500" type="range" class="active" />
                  <span>Max</span>

                  <svg width="100%" height="100">
                    <line
                    x1="1"
                    y1="0"
                    x2="300"
                    y2="0"
                    stroke="#212121"
                    stroke-width="1"
                    stroke-dasharray="1 28"
                    />
                  </svg>
                  <br />
                  <span class="thumb active">
                    <span class="value">&nbsp;</span>
                  </span>
                </p>
              </div>

              <!--  <div class="row margin">
                <div class="input-field col s6">
                  <select id="min-salary" >
                    <option value="0" disabled selected>Min</option>
                    <option value="0">0</option>
                    <option value="2000">2000</option>
                    <option value="4000">4000</option>
                  </select>
                  <label>Materialize Select</label>
                </div>


                <div class="input-field col s6">
                  <select id="min-salary" >
                    <option value="" disabled selected>Min</option>
                    <option value="administrator">Administrator</option>
                    <option value="translator" >Translator</option>
                    <option value="client">Client</option>
                  </select>
                  <label>Materialize Select</label>
                </div>
              </div>-->

              <label class="mt-1">
                <input
                type="checkbox"
                @click="changeSalary('2000-4000')"
                id="2000-4000"
                data-id="2000-4000"
                data-salary="2000-4000"
                name="2000-4000"
                value="2000-4000"
                class="salary"
                />
                <span>INR 2000 to INR 4000</span>
              </label>

              <label class="mt-1">
                <input
                type="checkbox"
                @click="changeSalary('4000-7000')"
                id="4000-7000"
                data-id="4000-7000"
                data-salary="4000-7000"
                name="4000-7000"
                value="4000-7000"
                class="salary"
                />
                <span>INR 4000 to INR 7000</span>
              </label>

              <label class="mt-1">
                <input
                type="checkbox"
                @click="changeSalary('7000-10000')"
                id="7000-10000"
                data-id="7000-10000"
                data-salary="7000-10000"
                name="7000-10000"
                value="7000-10000"
                class="salary"
                />
                <span>INR 7000 to INR 10000</span>
              </label>

              <span class="card-title mt-10">Locality</span>
              {{ this.$route.fullPath.substring(10, 10) }}
              <label
              class="mt-1"
              v-for="locality in listLocalities"
              >
              <input
              type="checkbox"
              v-model="theBrothers"
              @click="changePlace"
              :id="locality.name.replace(' ', '-')"
              :data-id="locality.name.replace(' ', '-')"
              :data-place="locality.name.replace(' ', '-')"
              :name="locality.name.replace(' ', '-')"
              :value="locality.name"
              class="place"
              :ref="locality.name.replace(' ', '-')"
              />
              <span>{{ locality.name }} {{ locality.seo == true ? 'Dynamic title' : '' }}</span>
            </label>

            <span class="card-title mt-10">Customer Ratings</span>

            <label>
              <input type="checkbox" name="rating" value="5" />
              <span>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
              </span>
            </label>
            <label>
              <input type="checkbox" name="rating" value="4" />
              <span>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
              </span>
            </label>
            <label>
              <input type="checkbox" name="rating" value="3" />
              <span>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
              </span>
            </label>
            <label>
              <input type="checkbox" name="rating" value="2" />
              <span>
                <i class="material-icons amber-text">star</i>
                <i class="material-icons amber-text">star</i>
              </span>
            </label>
            <label>
              <input type="checkbox" name="rating" value="1" />
              <span>
                <i class="material-icons amber-text">star</i>
              </span>
            </label>
          </form>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l9">
      <!-- You have checked: {{ filtersObj }} -->
      <div class="col s12 m3 l3" v-for="candidate in listCandidates.data">
        <div class="card animate fadeLeft">
          <div class="card-badge">
            <a class="white-text">
              <b>{{ candidate['gender'] }}</b>
            </a>
          </div>
          <div align="center" class="card-content">
            <p>{{ candidate['name'] }}</p>
            <span class="card-title text-ellipsis">{{ candidate['locality'] }}</span>
            <img :src="bURL+'images/avatar/avatar.png'" class="responsive-img" alt />
            <p>{{ candidate['salary'].replace('-', ' INR to ') }} INR per month</p>
            <div class="row">
              <a
              class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"
              href="#modal1"
              >View</a>
            </div>
          </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content pt-2">
            <div class="row" id="product-one">
              <div class="col s12">
                <a class="modal-close right">
                  <i class="material-icons">close</i>
                </a>
              </div>
              <div class="col m6">
                <img :src="bURL+'images/avatar/avatar.png'" class="responsive-img" alt />
              </div>
              <div class="col m6">
                <p>Smartwatches</p>
                <h5>Smartwatch 2.0 LTE Wifi</h5>
                <span class="new badge left ml-0 mr-2" data-badge-caption>4.2 Star</span>
                <p>
                  Availability:
                  <span class="green-text">36 Item Available</span>
                </p>
                <hr class="mb-5" />
                <span class="vertical-align-top mr-4">
                  <i class="material-icons mr-3">favorite_border</i>Wishlist
                </span>
                <p class="mt-3">- Accept SIM card and call</p>
                <p>- Make calling instead of mobile phone</p>
                <p>- Sync music play and sync control music</p>
                <p>- Sync Facebook,Twiter,emailand calendar</p>
                <h5>
                  $399.00
                  <span class="prise-text-style ml-2">$459.00</span>
                </h5>
                <a
                class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2"
                >ADD TO CART</a>
                <a
                class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2"
                >BUY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="col s12 center">
        <vue-pagination :pagination="listCandidates" @paginate="getCandidates" :offset="4"></vue-pagination>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import { required, email, minLength } from "vuelidate/lib/validators";
import VuePagination from "./Pagination.vue";

// import PrettyInput from 'pretty-checkbox-vue/input';
import PrettyCheck from "pretty-checkbox-vue/check";
// import PrettyRadio from 'pretty-checkbox-vue/radio';

// Vue.component('p-input', PrettyInput);
//Vue.component('p-check', PrettyCheck);
// Vue.component('p-radio', PrettyRadio);

export default {
  name: "SearchComponent",

  data: () => {
    return {
      bURL: window.bURL,
      check: true,
      listCandidates: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
      listLocalities: {},
      offset: 4,
      filters: [],
      filtersObj: {},
      title: document.querySelector("head title")
      //categoryPart: 1,
      //cityPart: 1,
      //placeChecked:$('#'+localStorage.getItem('place')).prop('checked',true),
    };
  },
  methods: {
    changeGender: function(val) {
      $(".gender").prop("checked", false);
      $("#" + val).prop("checked", true);
      localStorage.setItem("gender", val);
      this.filtersObj.gender = localStorage.getItem("gender");
      this.filtersObj.salary = localStorage.getItem("salary");
      this.filtersObj.place = localStorage.getItem("place");
      //this.filtersObj.title = localStorage.getItem('title');
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
      const filters = JSON.parse(localStorage.getItem("storeObj"));
      //console.log(filters);
    },

    changeSalary: function(val) {
      $(".salary").prop("checked", false);
      $("#" + val).prop("checked", true);
      localStorage.setItem("salary", val);
      this.filtersObj.gender = localStorage.getItem("gender");
      this.filtersObj.salary = localStorage.getItem("salary");
      this.filtersObj.place = localStorage.getItem("place");
      //this.filtersObj.title = localStorage.getItem('title');
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
      const filters = JSON.parse(localStorage.getItem("storeObj"));
      //console.log(filters);
    },

    changePlace: function(e) {


      var category = this.$route.params.category
      .replace("-", " ")
      .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toUpperCase()));

      var city = this.$route.params.city.replace("-", " ");
      city = city
      .split("-")
      .join(" ")
      .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toUpperCase()));

      var category = this.$route.params.category
      .replace(" ", "-")
      .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toLowerCase()));

      var city = this.$route.params.city.replace(" ", "-");
      city = city
      .split(" ")
      .join("-")
      .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toLowerCase()));

      var place = e.currentTarget.getAttribute("data-place").replace("-", " ");
      place = place
      .split("-")
      .join(" ")
      .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toLowerCase()));
      
      var seoRoute =
      "/" +
      category +
      "-in-" +
      this.filtersObj.baseCity +
      "-" +
      place.replace(" ", "-");

      this.$router.push({ path: seoRoute });

      //this.title.textContent = e.currentTarget.getAttribute('data-id');

      this.$router.history.current.meta.title =
      "Part time and full time " +
      category +
      " in " +
      this.filtersObj.baseCity +
      " " +
      place;

      $(".place").prop("checked", false);
      $("#" + e.currentTarget.getAttribute("data-id")).prop("checked", true);
      localStorage.setItem("place", e.currentTarget.getAttribute("data-place"));

      this.filtersObj.gender = localStorage.getItem("gender");
      this.filtersObj.salary = localStorage.getItem("salary");
      this.filtersObj.place = localStorage.getItem("place");
      //this.filtersObj.title = localStorage.getItem('title');
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
      const filters = JSON.parse(localStorage.getItem("storeObj"));
      
    },

    getLocalities() {
      var baseCity = this.filtersObj.baseCity;
      this.filtersObj.baseCity = baseCity;
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));

      const city = JSON.stringify(this.filtersObj.baseCity).replace(
        /['"]+/g,
        ""
        );
      axios
      .get(`/api/load-localities/${city}`)
      .then(res => {
          //console.log(res.data.localities);
          this.listLocalities = res.data.localities;
        })
      .catch(err => {});
    },

    getCandidates() {
      const city = JSON.stringify(this.filtersObj.baseCity).replace(
        /['"]+/g,
        ""
        );
      axios
      .get(
        `/api/load-candidates/${city}?page=${this.listCandidates.current_page}`
        )
      .then(res => {
          // console.log(res.data);
          this.listCandidates = res.data;
        })
      .catch(err => {});
    }
  },
  // afterUpdated() {

  //   if(localStorage.getItem('place')){
  //     var aa = localStorage.getItem('place');
  //     //alert(aa);
  //       $('#'+aa).prop('checked',true);
  //       }

  // },

  mounted() {
    console.log(this.$route.fullPath);

    // if(localStorage.getItem('place')){

    // var aa = localStorage.getItem('place');

    // //$('#'+aa).trigger('click');

    // this.$refs.aa.click();

    //   // var aa = localStorage.getItem('place');
    //   // //alert(aa);
    //   //   $('#'+aa).trigger('click');
    //     }

    var baseCity = this.$route.params.city;

    console.log(this.$refs);
    console.log(this.$refs.baseCity);
    console.log(this);

    if (this.$route.fullPath == "/maid-in-gurgaon-sector-66") {
      this.$refs.click();
    }

    baseCity = baseCity.split("-");
    this.filtersObj.baseCity = baseCity[0];
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));

    //const category = JSON.stringify(this.$route.params.category).replace(/['"]+/g, '');
    //const city = JSON.stringify(this.$route.params.city).replace(/['"]+/g, '');
    //this.metaInfo.title = category + '-' +city;

    //const descEl = document.querySelector('head meta[name="description"]');
    //const titleEl = document.querySelector('head title');

    //descEl.setAttribute('content', items[0]['meta-desc']);
    //titleEl.textContent = items[0]['meta-title'];

    var category = this.$route.params.category
    .replace("-", " ")
    .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toUpperCase()));

    var city = this.$route.params.city.replace("-", " ");
    city = city
    .split("-")
    .join(" ")
    .replace(/\w\S*/g, w => w.replace(/^\w/, c => c.toUpperCase()));

    //this.title.textContent = this.$route.fullPath;
    //titleEl.textContent = category+' in '+ city;

    //var title = this.$route.fullPath.replace('//', '');
    //title = title.split('-').join(' ').replace(/\w\S*/g, (w) => (w.replace(/^\w/, (c) => c.toUpperCase())));

    if (baseCity[1]) {
      this.title.textContent = localStorage.getItem("dynamicTitle")
      ? localStorage.getItem("dynamicTitle")
      : "Part time and full time " +
      category.toLowerCase() +
      " in " +
      baseCity[0].toLowerCase() +
      " " +
      baseCity[1].toLowerCase() +
      " " +
      baseCity[2].toLowerCase();
    } else {
      this.title.textContent = localStorage.getItem("dynamicTitle")
      ? localStorage.getItem("dynamicTitle")
      : "Part time and full time " +
      category.toLowerCase() +
      " in " +
      baseCity[0].toLowerCase();
    }

    //this.$router.history.current.meta.title = 'Part time and full time '+category+ ' in ' +localStorage.getItem('baseCity')+' '+place;

    //this.title.textContent  = 'Full time and part time '+title;

    this.getLocalities();
    this.getCandidates();
  },

  components: {
    "vue-pagination": VuePagination,
    // 'p-input': PrettyInput,
    "p-check": PrettyCheck
    // 'p-radio': PrettyRadio
  },

  // watch:{
  //   title: function(n, o){
  //     localStorage.setItem('title', n);
  //     this.title.textContent  = n;
  //   }
  // },

  computed: {
    theBrothers: {
      set(val) {
        //this.$router.go('/'+category+'-in-'+city+'-'+localStorage.getItem('place'));
        //var title = this.$route.fullPath.replace('//', '');
        //title = title.split('-').join(' ').replace(/\w\S*/g, (w) => (w.replace(/^\w/, (c) => c.toUpperCase())));
        //localStorage.setItem('title', 'Full time and part time '+title);
        //this.$store.state.theBrothers = this.$route.fullPath+' '+val;
        //alert(localStorage.getItem('title'));
        // axios.get(`/api/filtered-candidates/${this.filtersObj}?page=${this.listCandidates.current_page}`)
        // .then((res) => {
        //   console.log(res.data.data);
        //   this.listCandidates = res.data
        // }).catch(err => {});
        // this.filtersObj.gender = localStorage.getItem('gender');
        // this.filtersObj.salary = localStorage.getItem('salary');
        // this.filtersObj.locality = localStorage.getItem('place');
        // localStorage.setItem('storeObj', JSON.stringify(this.filtersObj));
        // const filters = JSON.parse(localStorage.getItem('storeObj'));
        //console.log(filters);
      },

      get() {
        this.filters = this.$store.state.theBrothers;

        //alert(localStorage.getItem('title'));

        return this.$store.state.theBrothers;
      }
    }
  }
};
</script>
<style scoped>
.price-slider svg,
.price-slider input[type="range"] {
  position: absolute;
  left: 0;
  bottom: 0;
}
input[type="number"] {
  border: 1px solid #ddd;
  text-align: center;
  font-size: 1.6em;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
input[type="number"]:invalid,
input[type="number"]:out-of-range {
  border: 2px solid #e60023;
}
input[type="range"] {
  -webkit-appearance: none;
  width: 100%;
}
input[type="range"]:focus {
  outline: none;
}
input[type="range"]:focus::-webkit-slider-runnable-track {
  background: #1da1f2;
}
input[type="range"]:focus::-ms-fill-lower {
  background: #1da1f2;
}
input[type="range"]:focus::-ms-fill-upper {
  background: #1da1f2;
}
input[type="range"]::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: #1da1f2;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type="range"]::-webkit-slider-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #1da1f2;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #a1d0ff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -7px;
}
input[type="range"]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: #1da1f2;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type="range"]::-moz-range-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #1da1f2;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #a1d0ff;
  cursor: pointer;
}
input[type="range"]::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type="range"]::-ms-fill-lower,
input[type="range"]::-ms-fill-upper {
  background: #1da1f2;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type="range"]::-ms-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #1da1f2;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #a1d0ff;
  cursor: pointer;
}
</style>