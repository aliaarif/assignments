<template>
  <div>Logout</div>
</template>

<script>
export default {
  mounted() {
    //alert(1);
    //this.$emit('update', false);
    localStorage.removeItem('token');
    localStorage.removeItem('role');
    localStorage.removeItem('loggedIn');
    this.$router.go('/')
    .then((res) => {})
    .catch((err) => {})
    this.$router.go('/');
  }
}
</script>
<style scoped></style>