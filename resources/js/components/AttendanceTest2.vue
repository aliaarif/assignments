<template>
  <div v-if="mainContentsViews == 'Student'">
    Student
  </div>
  <div v-else-if="mainContentsViews == 'Teacher'">
    Teacher
  </div>
  <div v-else>
    <div class="section mt-1" id="user-profile">
      <div class="row">
        <div class="col s12 m4 l3 ">

          <div class="row mt-4 mb-5">
            <div class="col s12">
              <h6>Select a attendance type</h6>
              <br/>
              <label class="mt-2">
                <input
                type="checkbox"
                @click="changeAttendanceType('Staff')"
                id="Staff"
                data-id="Staff"
                data-attendance-type="Staff"
                name="Staff"
                value="Staff"
                class="attendance-type filled-in"
                v-if="attendanceType == 'Staff'" 
                checked
                />
                <input
                type="checkbox"
                @click="changeAttendanceType('Staff')"
                id="Staff"
                data-id="Staff"
                data-attendance-type="Staff"
                name="Staff"
                value="Staff"
                class="attendance-type filled-in"
                v-else
                />

                <span>Staff</span>
              </label>
              <label class="mt-2">
                <input
                type="checkbox"
                @click="changeAttendanceType('Student')"
                id="Student"
                data-id="Student"
                data-attendance-type="Student"
                name="Student"
                value="Student"
                class="attendance-type filled-in"
                v-if="attendanceType == 'Student'" 
                checked
                />
                <input
                type="checkbox"
                @click="changeAttendanceType('Student')"
                id="Student"
                data-id="Student"
                data-attendance-type="Student"
                name="Student"
                value="Student"
                class="attendance-type filled-in"
                v-else
                />
                <span>Students</span>
              </label>
            </div>
          </div>
          <div class="row  mb-10" v-if="attendanceType == 'Student'">
            <div class="col s12">
              <h6>Select a Class</h6>
              <label
              class="mt-1"
              v-for="standard in standards"
              >
              <input
              type="checkbox"
              @click="changeStandard(standard.id)"
              :id="standard.id"
              :data-id="standard.id"
              :data-standard="standard.id"
              :name="standard.standard_name.replace(' ', '-')"
              :value="standard.id"
              class="standard filled-in"
              :ref="standard.standard_name.replace(' ', '-')"
              v-if="checkedStandard == standard.id"
              checked 
              />
              <input 
              type="checkbox"
              @click="changeStandard(standard.id)"
              :id="standard.id"
              :data-id="standard.id"
              :data-standard="standard.id"
              :name="standard.standard_name.replace(' ', '-')"
              :value="standard.id"
              class="standard  filled-in"
              :ref="standard.standard_name.replace(' ', '-')"
              v-else 
              />
              <span>{{ standard.standard_name }}</span>
            </label>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col s12">
            <h6>Select a attendance date</h6>
            <md-datepicker  v-model="attendanceDate" md-immediately />
          </div>
        </div>
      </div>
      <!-- User Post Feed -->
      <div class="col s12 m8 l9">
        <div class="row">
          <div class="card user-card-negative-margin z-depth-0" id="feed">
            <div class="card-content card-border-gray">
              <h6>{{ attendanceHeading }}</h6>

              <div class="card subscriber-list-card animate fadeRight">
    <table class="subscription-table responsive-table highlight">
      <thead>
       <tr>
        <th class="pl-2">Name</th>
        <th>Role No.</th>
        <th class="center"><span  class="badge green lighten-5 green-text text-accent-4">Present</span></th>
        <th class="center"><span  class="badge yellow lighten-5 yellow-text text-accent-4">Half Day</span></th> 
        <th class="center"><span  class="badge red lighten-5 red-text text-accent-4">Absent</span></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(user, index) in listAttendances" :key="index">
        <td  class="pl-2">{{ user.name }}</td>
        <td>{{ user.role_no }}</td>
        <!-- Start Present Part -->
        <td class="center">
          <label
          class="mt-1"
          >
          <input
          type="checkbox"
          @click="changeAttendance(user.id, user.ucode, 'Present', attendanceDate)"
          :id="user.ucode+'-p'"
          :data-id="user.ucode+'-p'"
          :data-user="user.ucode+'-p'"
          :name="user.ucode+'-p'"
          :value="user.ucode+'-p'"
          :class="'user filled-in save-attendance-'+user.ucode"
          :ref="user.ucode+'-p'"
          v-if="user.attendance == 'Present' && user.attendance_date == attendanceDate"
          checked 
          />
          <input 
          type="checkbox"
          @click="changeAttendance(user.id, user.ucode, 'Present', attendanceDate)"
          :id="user.ucode+'-p'"
          :data-id="user.ucode+'-p'"
          :data-user="user.ucode+'-p'"
          :name="user.ucode+'-p'"
          :value="user.ucode+'-p'"
          :class="'user filled-in save-attendance-'+user.ucode"
          :ref="user.ucode+'-p'"
          v-else 
          />
          <span><!-- {{ user.profile.name }} --></span>
        </label>
      </td>
      <!-- End Present Part -->

      <!-- Start Half Day Part -->
      <td class="center">
        <label
        class="mt-1"
        >
        <input
        type="checkbox"
        @click="changeAttendance(user.id, user.ucode, 'Half Day', attendanceDate)"
        :id="user.ucode+'-h'"
        :data-id="user.ucode+'-h'"
        :data-user="user.ucode+'-h'"
        :name="user.ucode+'-h'"
        :value="user.ucode+'-h'"
        :class="'user filled-in save-attendance-'+user.ucode"
        :ref="user.ucode+'-h'"
        v-if="user.attendance == 'Half Day' && user.attendance_date == attendanceDate"
        checked 
        />
        <input 
        type="checkbox"
        @click="changeAttendance(user.id, user.ucode, 'Half Day', attendanceDate)"
        :id="user.ucode+'-h'"
        :data-id="user.ucode+'-h'"
        :data-user="user.ucode+'-h'"
        :name="user.ucode+'-h'"
        :value="user.ucode+'-h'"
        :class="'user filled-in save-attendance-'+user.ucode"
        :ref="user.ucode+'-h'"
        v-else 
        />
        <span><!-- {{ user.profile.name }} --></span>
      </label>
    </td>
    <!-- End Half Day Part -->

    <!-- Start Absent Part -->
    <td class="center">
      <label
      class="mt-1"
      >
      <input
      type="checkbox"
      @click="changeAttendance(user.id, user.ucode, 'Absent', attendanceDate)"
      :id="user.ucode+'-a'"
      :data-id="user.ucode+'-a'"
      :data-user="user.ucode+'-a'"
      :name="user.ucode+'-a'"
      :value="user.ucode+'-a'"
      :class="'user filled-in save-attendance-'+user.ucode"
      :ref="user.ucode+'-a'"
      v-if="user.attendance == 'Absent' && user.attendance_date == attendanceDate"
      checked 
      />
      <input 
      type="checkbox"
      @click="changeAttendance(user.id, user.ucode, 'Absent', attendanceDate)"
      :id="user.ucode+'-a'"
      :data-id="user.ucode+'-a'"
      :data-user="user.ucode+'-a'"
      :name="user.ucode+'-a'"
      :value="user.ucode+'-a'"
      :class="'user filled-in save-attendance-'+user.ucode"
      :ref="user.ucode+'-a'"
      v-else 
      />
      <span><!-- {{ user.profile.name }} --></span>
    </label>
  </td>
  <!-- End Absent Part -->
</tr>
</tbody>
</table>
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
import { required, minLength } from "vuelidate/lib/validators";
import VuePagination from './Pagination.vue';
export default {
  name: 'Attendance',
  data: () => {
    return {
      user: localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {},
      attendanceDate: localStorage.getItem('attendanceDate') ? localStorage.getItem('attendanceDate') :  new Date(),
      attendanceType: localStorage.getItem("attendanceType") ? localStorage.getItem("attendanceType") : 'Staff',
      standard:localStorage.getItem("standard") ? localStorage.getItem("standard") : 1,
      checkedStandard:localStorage.getItem("standard") ? localStorage.getItem("standard") : 1,
      presentStatus: '',
      userCode:'',
      userAttendanceDate:'',
      attendanceHeading: '',
      filtersObj: {},
      userCodes: [],
      standards: {},
      listAttendances:[],
      bURL:window.bURL,
      mainContentsViews:JSON.parse(localStorage.getItem('user')).role ? JSON.parse(localStorage.getItem('user')).role : 'Student',
      attendances: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
      offset: 4,
      form: {
        post: {},
        post_id:'',
        comment: '',
        user: localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {}
      },
    }
  },
  mounted() {
    this.attendanceDate = this.convertDate(this.attendanceDate);
    //    this.attendanceDate = this.attendanceDate;  
    this.getStandards();
    this.applyFilters(localStorage.getItem("storeObj"));
    this.standard = localStorage.getItem("standard") ? localStorage.getItem("standard") : 1;
    this.user = localStorage.getItem('user') ? JSON.parse(localStorage.getItem('user')) : {};
  },

watch:{
    presentStatus: function(n, o){
      this.presentStatus = n;
      if(this.presentStatus == 'Present' && this.userAttendanceDate == this.attendanceDate ){
        //this.presentStatus = 'Present';
        $(".save-attendance-"+this.userCode).prop("checked", false);
        $("#"+this.userCode+'-p').prop("checked", true);
      }else if(this.presentStatus == 'Half Day' && this.userAttendanceDate == this.attendanceDate ){
        //this.presentStatus = 'Half Day';
        $(".save-attendance-"+this.userCode).prop("checked", false);
        $("#"+this.userCode+'-h').prop("checked", true);
      }else if(this.presentStatus == 'Absent' && this.userAttendanceDate == this.attendanceDate ){
        //this.presentStatus = 'Absent';
        $(".save-attendance-"+this.userCode).prop("checked", false);
        $("#"+this.userCode+'-a').prop("checked", true);
      }else{
        $(".filled-in").prop("checked", false);
      }

      

    },

    attendanceDate: function(attendanceDateNew, attendanceDateOld){
      localStorage.setItem("attendanceDate", attendanceDateNew);
      this.filtersObj.attendanceDate = attendanceDateNew;
      this.attendanceDate = attendanceDateNew;
      //$(".attendance-date").prop("checked", false);

      if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Present'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-date-"+item).prop("checked", false);
          $("#"+item+'-p').prop("checked", false);
        });
        $("#"+this.userCode+'-p').prop("checked", false);
      }else if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Half Day'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-date-"+item).prop("checked", false);
          $("#"+item+'-h').prop("checked", false);
        });
        $("#"+this.userCode+'-h').prop("checked", false);
      }else if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Absent'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-date-"+item).prop("checked", false);
          $("#"+item+'-a').prop("checked", false);
        });
        $("#"+this.userCode+'-a').prop("checked", false);
      }else{
        $(".filled-in").prop("checked", false);
      }

      this.filtersObj.attendanceType = this.attendanceType;
      this.filtersObj.standard = this.standard;
      this.filtersObj.mainContentsViews = this.mainContentsViews;
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj))
      this.applyFilters(localStorage.getItem("storeObj"));
      //this.userCodes = [];
    },
    attendanceType: function(attendanceTypeNew, attendanceTypeOld){
      localStorage.setItem("attendanceType", attendanceTypeNew);
      this.filtersObj.attendanceDate = this.attendanceDate;
      this.filtersObj.attendanceType = attendanceTypeNew;
      this.attendanceType = attendanceTypeNew;
      this.filtersObj.standard = this.standard;
      this.filtersObj.mainContentsViews = this.mainContentsViews;
      localStorage.setItem("storeObj", JSON.stringify(this.filtersObj))
      this.applyFilters(localStorage.getItem("storeObj"));
    },
    // changeStandard: function(standardNew, standardOld){
    //  alert(standardNew);
    //  localStorage.setItem("standard", standardNew);
    //  this.filtersObj.attendanceDate = this.attendanceDate;
    //  this.filtersObj.attendanceType = this.attendanceType;
    //  this.filtersObj.standard = standardNew;
    //  this.standard = standardNew;
    //  this.filtersObj.mainContentsViews = this.mainContentsViews;


    //  localStorage.setItem("storeObj", JSON.stringify(this.filtersObj))
    //  let filters = localStorage.getItem("storeObj");
    //   //const filters = JSON.parse(localStorage.getItem("storeObj"));
    //   //console.log(filters);
    //   this.applyFilters(localStorage.getItem("storeObj"));
    // },

  },

  computed: {},

methods:{
  getStandards() {
    axios
    .get(`/api/standards`)
    .then(res => {
      this.standards = res.data.standards;
    })
    .catch(err => {});
  },
  convertDate: function (str) {
  var date = new Date(str),
    month = ("0" + (date.getMonth() + 1)).slice(-2),
    day = ("0" + date.getDate()).slice(-2);
  return [date.getFullYear(), month, day].join("-");
},
changeStandard: function(val) {
    $(".standard").prop("checked", false);
    $("#" + val).prop("checked", true);
    this.standard = val;
    localStorage.setItem("standard", this.standard);
    this.filtersObj.attendanceDate = localStorage.getItem("attendanceDate");
    this.filtersObj.attendanceType = localStorage.getItem("attendanceType");
    this.filtersObj.standard = val;
    this.filtersObj.mainContentsViews = this.mainContentsViews;
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
    this.applyFilters(localStorage.getItem("storeObj"));
  },

  changeAttendanceDate: function(val) {
    this.listAttendances = [];
    $(".attendance-date").prop("checked", false);
    $("#" + val).prop("checked", true);
    this.attendanceDate = val;
       if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Present'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-date-"+item).prop("checked", false);
          $("#"+item+'-p').prop("checked", false);
        });
        $("#"+this.userCode+'-p').prop("checked", false);
      }else if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Half Day'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-date-"+item).prop("checked", false);
          $("#"+item+'-h').prop("checked", false);
        });
        $("#"+this.userCode+'-h').prop("checked", false);
      }else if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Absent'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-date-"+item).prop("checked", false);
          $("#"+item+'-a').prop("checked", false);
        });
        $("#"+this.userCode+'-a').prop("checked", false);
      }else{
        $(".filled-in").prop("checked", false);
      }

     

    localStorage.setItem("attendanceDate", this.attendanceDate);
    this.filtersObj.attendanceDate = localStorage.getItem("attendanceDate");
    this.filtersObj.attendanceType = localStorage.getItem("attendanceType");
    this.filtersObj.standard = localStorage.getItem("standard");
    this.filtersObj.mainContentsViews = this.mainContentsViews;
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
    //this.userCodes = [];
  },

  changeAttendanceType: function(val) {
    this.attendanceType = val;


    if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Present'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-type").prop("checked", false);
        });
        $("#"+this.userCode+'-p').prop("checked", false);
      }else if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Half Day'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-type").prop("checked", false);
        });
        $("#"+this.userCode+'-h').prop("checked", false);
      }else if(this.userAttendanceDate != this.attendanceDate || this.presentStatus != 'Absent'){
        this.userCodes.forEach((item, index) => {
          $(".attendance-type").prop("checked", false);
        });
        $("#"+this.userCode+'-a').prop("checked", false);
      }
      // else{
      //   $(".filled-in").prop("checked", false);
      // }

    //$(".attendance-type").prop("checked", false);
    $("#" + val).prop("checked", true);
    localStorage.setItem("attendanceType", this.attendanceType);
    this.filtersObj.attendanceDate = localStorage.getItem("attendanceDate");
    this.filtersObj.attendanceType = localStorage.getItem("attendanceType");
    this.filtersObj.standard = localStorage.getItem("standard");
    this.filtersObj.mainContentsViews = this.mainContentsViews;
    localStorage.setItem("storeObj", JSON.stringify(this.filtersObj));
    this.applyFilters(localStorage.getItem("storeObj"));
  },
applyFilters: function(filters){
  axios.post(`/api/show-attendance`, { 'filters': filters })
  .then((res) => {
    this.attendanceHeading = res.data.attendanceHeading;
    this.listAttendances = [];
    this.listAttendances = res.data.users;
  }).catch((err) => {});
},

changeAttendance: function(userId, ucode, userAttendance, attendanceDate){
  this.userCodes.push(ucode);
this.userCodes = this.userUniqueCode(this.userCodes);
console.log(this.userCodes);
  this.userId = userId;
  this.userCode = ucode;
  this.userAttendanceDate = attendanceDate;
  this.presentStatus = userAttendance;
  let id = userId;
  let standard_id = this.standard;
  let attendance_type = this.attendanceType;
  let attendance = userAttendance;
  let attendance_date = this.attendanceDate;
  axios.post(`/api/save-attendance`, {
    'id': id,
    'standard_id': standard_id,
    'attendance_type': attendance_type,
    'attendance': attendance,
    'attendance_date': attendance_date,
    'mainContentsViews': 'Principal'
  })
  .then((res) => {
    this.attendanceHeading = res.data.attendanceHeading;
    console.log(res.data.users.length)
    this.listAttendances = res.data.users;
  })
},

userUniqueCode: function (array){
  return array.filter(function(el, index, arr) {
      return index == arr.indexOf(el);
  });
},

}
}

</script>
<style lang="stylus" scoped>
</style>
