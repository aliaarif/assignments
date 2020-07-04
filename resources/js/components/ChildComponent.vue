<template>

	<div>
		<keep-alive>
			<component :is="loadPage"></component>
		</keep-alive>

	</div>	
</template>

<script>
//import AddNewCity from './AddNewCity';   
//import AddNewLocality from './AddNewLocality';    
export default {
	// components: {
	// 	'add-new-city' : AddNewCity,
	// 	'add-new-locality' : AddNewLocality,
	// },
	mounted() {
		alert(1);	
		//return 'test-link-1';
		//let path = this.$route.fullPath;
		//alert(path);
		//this.dynamicComponent(path);
	},

	methods:{
		// loadPage: function(){
		// 	return 'test-link-1';
		// }
		// dynamicComponent: function(path){
		// 	return 'test-link-1';
		// }
	}

}
</script>
<style lang="stylus" scoped>

</style>