<template>
  <div class="container">
    <div class="row mb-6">
      <div class="col s12 m4 l4">
        <div class="card padding-4 animate fadeRight">
         <div class="col s5 m5">
          <h5 class="mb-0">1885</h5>
          <p class="no-margin">New</p>
          <p class="mb-0 pt-8">1,12,900</p>
        </div>
        <div class="col s7 m7 right-align">
          <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
          <p class="mb-0">Total Clients</p>
        </div>
      </div>

      <div class="card padding-4 animate fadeRight">
       <div class="col s5 m5">
        <h5 class="mb-0">1885</h5>
        <p class="no-margin">New</p>
        <p class="mb-0 pt-8">1,12,900</p>
      </div>
      <div class="col s7 m7 right-align">
        <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
        <p class="mb-0">Total Clients</p>
      </div>
    </div>
    <div class="card padding-4 animate fadeRight">
     <div class="col s5 m5">
      <h5 class="mb-0">1885</h5>
      <p class="no-margin">New</p>
      <p class="mb-0 pt-8">1,12,900</p>
    </div>
    <div class="col s7 m7 right-align">
      <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
      <p class="mb-0">Total Clients</p>
    </div>
  </div>
  <div class="card padding-4 animate fadeRight">
   <div class="col s5 m5">
    <h5 class="mb-0">1885</h5>
    <p class="no-margin">New</p>
    <p class="mb-0 pt-8">1,12,900</p>
  </div>
  <div class="col s7 m7 right-align">
    <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
    <p class="mb-0">Total Clients</p>
  </div>
</div>
</div>
<div class="col s12 m8 l8 animate fadeRight">
  <div class="card">
   <div class="card-content">
    <form  @submit.prevent="addNewDistrict" class="login-form" autocomplete="off">
      <h4 class="card-title mb-0">Add a new district 
        <a type="submit" @click="addNewDistrict" class="right btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange">
          <i class="material-icons mt-6">save</i>
        </a>
      </h4>
      <p class="medium-small">Manage the districts</p>
      <div class="row">
        <div class="input-field col s6" >
          <input type="text" id="state_name" v-model="form.state_name" >
          <label for="state_name">Select/Choose/Enter State</label>
          <span class="red-text" role="alert" v-if="this.$v.form.state_name.$error">Please Select/Choose/Enter State</span>
        </div>
        <div class="input-field col s6">
          <input type="text" id="district_name" v-model="form.district_name" >
          <label for="district_name">Select/Choose/Enter City</label>
          <span class="red-text" role="alert" v-if="this.$v.form.district_name.$error">Please Select/Choose/Enter District</span>
        </div>
        <!-- <div class="input-field col s1 right-left">
          <a type="submit" @click="addNewDistrict" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange">
            <i class="material-icons">save</i>
          </a>
        </div> -->
      </div>
    </form>
    <div class="card subscriber-list-card animate fadeRight">
<!--      <div class="card-content pb-1">
      <h4 class="card-title mb-0">Subscriber List <i class="material-icons float-right">more_vert</i></h4>
    </div> -->
    <table class="subscription-table responsive-table highlight">
      <thead>
       <tr>
        <th>Name</th>
        <!--   <th>Country</th> -->
        <th>State</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="district in listDistricts.data">
        <td>{{ district.name }}</td>
        <!-- <td>{{ district.country['name'] }}</td> -->
        <td>{{ district.state.name }}</td>
        <td><span class="badge green lighten-5 green-text text-accent-4">Active</span></td>
        <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
      </tr>

      <!-- <tr>
        <td colspan="4">

      </td>
    </tr> -->

  </tbody>


</table>



<vue-pagination   :pagination="listDistricts"
@paginate="getDistricts"
:offset="4">
</vue-pagination>

</div>





</div>

</div>



</div>
</div>
</div>


</template>
<script>
import { required, minLength } from "vuelidate/lib/validators";
import VuePagination from './Pagination.vue';


export default {
  name: "AddNewDistrict",
  data: () => {
    return {
      // meta_data: {
      //   last_page: null,
      //   current_page: 1,
      //   prev_page_url: null
      // },

      form: {
        state_name: '',
        district_name: ''
      },
      states: {},
      districts: {},
      statesArray:[],
      districtsArray:[],
      //listDistricts:{},


      listDistricts: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
      offset: 4,


    }
  },
  validations: {
    form: {
      state_name: { required },
      district_name: { required }
    }
  },

  components: {
    VuePagination,
  },
  methods: {
    getDistricts() {
     axios.get(`/api/list-districts?page=${this.listDistricts.current_page}`)
     .then((res) => {
      console.log(res.data);
      this.listDistricts = res.data
        // this.meta_data.last_page = res.data.districts.last_page;
        // this.meta_data.current_page = res.data.districts.current_page;
        // this.meta_data.prev_page_url = res.data.districts.prev_page_url;
      }).catch(err => {
        console.log('handle server error from here');
      });

    },



    toObject(arr) { 
      var rv = {}; 
      for (var i = 0; i < arr.length; ++i) 
        rv[arr[i]] = null; 
      return rv; 
    }, 
    addNewDistrict(){
      this.$v.form.$touch();
      if(this.$v.form.$error){
        if(this.$v.form.state_name.$error){
        //$('#state_name').focus();
        return;
      }
      if(this.$v.form.district_name.$error){
        //$('#district_name').focus();
        return;
      }
    } 
    axios.post('/api/add-new-district', {'district_name': this.form.district_name, 'state_name': this.form.state_name})
    .then((res) => {
      //console.log(res.data.district);
      this.districts.unshift(res.data.district);
    }).catch(err => {})},
  },

  mounted() {

    this.getDistricts();




    axios.get('/api/states')
    .then((res) => {
    //console.log(res.data.locations.states);
    this.states = res.data.locations.states;
    this.states.map(state => { this.statesArray.push(state.name); });
    $("#state_name").autocomplete({
      data: this.toObject(this.statesArray), limit: 100, 
      onAutocomplete: function(state_name) {
        //$('#district_name').val(state_name)
      },
      minLength: 0 
    });
  }).catch(err => {});


    $('#state_name').on('change', () => {
      localStorage.setItem('state_name', $('#state_name').val());
      const state = JSON.stringify($('#state_name').val()).replace(/['"]+/g, '');
      $('#state_name').val(state)

      axios.get('/api/districts/'+state)
      .then((res) => {
      //this.districtsArray.length = 0;
      this.districts = res.data.locations.districts;
      this.districts.map(district => { this.districtsArray.push(district.name); });
      $("#district_name").autocomplete({
        data: this.toObject(this.districtsArray), limit: 100, 
        onAutocomplete: function(district_name) {
         // $('#district_name').val(district_name)
          //$('#district_name').val(district_name)
          //alert(district_name);
          //localStorage.setItem('district_name', district_name);
        },
        minLength: 0 
      });
    }).catch(err => {})
    })
  },

  watch:{
  // state_name: function(n, o){
  //   this.state_name = n
  // }
},
}
</script>
<style scoped></style>