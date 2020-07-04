<template>
	<router-view></router-view>
</template>

<script>
export default {
	data: () => {
		return {
			layout: localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('layout') ,
			role: localStorage.getItem('role') == null ? false : localStorage.getItem('role') ,
			token: localStorage.getItem('token') == null ? false : localStorage.getItem('token') ,
			loggedIn: localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('loggedIn') ,
		}
	},
	mounted() {

	}
}
</script>
<style scoped></style>