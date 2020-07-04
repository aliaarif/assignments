<template>
	<div v-if="warningZone"><!-- Are you still with us? --></div>
</template>

<script>
export default {
	name: 'AutoLogout',
	data: () => {
		return {
			events: ['click', 'mousemove', 'mousedown', 'scroll', 'keypress', 'load'],
			events2: ['beforeunload'],
			warningTimer: null,
			logoutTimer: null,
			warningZone:false
		}
	},

	mounted(){
		bURL: window.bURL,
		this.events.forEach((event) => {
			window.addEventListener(event, this.resetTimer);
		}, this);

		// this.events2.forEach((event) => {
		// 	window.addEventListener(event, this.setTimers);
		// }, this);


		this.setTimers();

		// $(window).bind("beforeunload", function() { 
		// 	document.getElementById('logout-form').submit();
		// 	localStorage.removeItem('token');
		// 	localStorage.removeItem('loggedIn');
		// 	localStorage.removeItem('layout');
		// 	localStorage.removeItem('user');
		// 	localStorage.clear();			
  //   });

	},

	destroyed(){
		this.events.forEach((event) => {
			window.removeEventListener(event, this.resetTimer);	
	}, this);

		this.resetTimer();
	},

	methods: {
		setTimers: function(){
			this.warningTimer = setTimeout(this.warningMessage, 20 * 60 * 1000); // 20 minutes 20 * 60 * 1000
			this.logoutTimer = setTimeout(this.logoutUser, 30 * 60 * 1000); // 30 minutes 30 * 60 * 1000

			//this.warningTimer = setTimeout(this.warningMessage, 5  * 1000); // 5 seconds 5 * 1000
			//this.logoutTimer = setTimeout(this.logoutUser, 10 * 1000); // 10 seconds 10 * 1000

			this.warningZone = false;
		},

		logoutUser: function(){
			document.getElementById('logout-form').submit();
			localStorage.removeItem('token');
			localStorage.removeItem('loggedIn');
			localStorage.removeItem('layout');
			localStorage.removeItem('user');
			localStorage.clear();
			window.location.href = bURL;	
		},

		warningMessage: function(){
			this.warningZone = true;
			//confirm('Are you still with us?')
		},

		resetTimer: function(){
			clearTimeout(this.warningTimer);
			clearTimeout(this.logoutTimer);
			this.setTimers();
		},
		
		
	},

}
</script>
<style lang="stylus" scoped>

</style>