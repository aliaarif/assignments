<template>
	<v-container>
		<v-content>
			<v-alert type="info">I am a component only for Translator</v-alert>
			<v-btn link to="/foo">Load Foo</v-btn>
			<v-btn link to="/bar">Load Bar</v-btn>
			<router-view></router-view>
		</v-content>
	</v-container>
</template>

<script>
export default {
	mounted() {
		if(localStorage.getItem('role') != 'translator'){
			//this.$router.push('/'+localStorage.getItem('role'));
		}
	}

}
</script>
<style lang="stylus" scoped>

</style>