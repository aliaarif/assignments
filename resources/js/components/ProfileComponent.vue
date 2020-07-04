<template>
  <div>
    <table
      id="data-table-simple"
      class="display dataTable dtr-inline"
      role="grid"
      aria-describedby="data-table-simple_info"
    >
      <thead>
        <tr role="row">
          <th>User Code</th>
          <th>User Name</th>
          <!-- <th v-if="this.$parent.user.role == 'Admin'">Actions</th> -->
        </tr>
      </thead>

      <tr v-for="user in listUsers" :key="user.ucode">
        <td>{{ user.ucode }}</td>
        <td>{{ user.profile.name }}</td>
        <!-- <td v-if="this.$parent.user.role == 'Admin'">
          <a class="btn-floating waves-effect waves-light gradient-45deg-purple-deep-green">
            <i class="material-icons">edit</i>
          </a>
          <a class="btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange">
            <i class="material-icons">clear</i>
          </a>
        </td>-->
      </tr>
    </table>
  </div>
</template>
<script>
export default {
  name: "listUsers",
  data: () => {
    return {
      listUsers: []
    };
  },
  mounted() {
    //console.log(this.$parent);
    axios
      .get(`/api/list-users`)
      .then(res => {
        console.log(res.data.users);
        this.listUsers = res.data.users;
      })
      .catch(err => {});
  }
};
</script>
<style scoped></style>