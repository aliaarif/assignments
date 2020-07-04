<template>
  <div>
   <tr v-for="user in listAttendances" :key="user.ucode" >
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
</div>
</template>
<script>
export default {
  name: 'listAttendances',
   props: [ 'listAttendances' ],
  data: () => {
    return {

      listAttendances: [],

    }
    
  },
  mounted(){
      this.listAttendances = this.props.listAttendances;
    }
}
</script>
<style scoped></style>