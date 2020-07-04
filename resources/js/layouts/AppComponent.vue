<template>
	<div>
		<header-bar></header-bar>
		<left-aside></left-aside>
		<!-- BEGIN: Page Main-->
		<div id="main">
			<div class="row">
				<!-- Breadcrumbs component goes here -->
				<div class="col s12">
					<div class="container">
						<router-view></router-view>
						<right-aside></right-aside>
						<!-- END RIGHT SIDEBAR NAV -->
						<div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
							<ul>
								<li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
								<li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
								<li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
								<li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END: Page Main-->
		<!-- Theme Customizer -->
		<a 
		href="javascript:;"
		data-target="theme-cutomizer-out"
		class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
		><i class="material-icons">settings</i></a
		>
		<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
			<div class="col s12">
				<a class="sidenav-close" href="javascript:;"><i class="material-icons">close</i></a>
				<h5 class="theme-cutomizer-title">Theme Customizer</h5>
				<p class="medium-small">Customize & Preview in Real Time</p>
				<div class="menu-options">
					<h6 class="mt-6">Menu Options</h6>
					<hr class="customize-devider" />
					<div class="menu-options-form row">
						<div class="input-field col s12 menu-color mb-0">
							<p class="mt-0">Menu Color</p>
							<div class="gradient-color center-align">
								<span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
								<span
								class="menu-color-option gradient-45deg-purple-deep-orange"
								data-color="gradient-45deg-purple-deep-orange"
								></span>
								<span
								class="menu-color-option gradient-45deg-light-blue-cyan"
								data-color="gradient-45deg-light-blue-cyan"
								></span>
								<span
								class="menu-color-option gradient-45deg-purple-amber"
								data-color="gradient-45deg-purple-amber"
								></span>
								<span
								class="menu-color-option gradient-45deg-purple-deep-purple"
								data-color="gradient-45deg-purple-deep-purple"
								></span>
								<span
								class="menu-color-option gradient-45deg-deep-orange-orange"
								data-color="gradient-45deg-deep-orange-orange"
								></span>
								<span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
								<span
								class="menu-color-option gradient-45deg-indigo-light-blue"
								data-color="gradient-45deg-indigo-light-blue"
								></span>
								<span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
							</div>
							<div class="solid-color center-align">
								<span class="menu-color-option red" data-color="red"></span>
								<span class="menu-color-option purple" data-color="purple"></span>
								<span class="menu-color-option pink" data-color="pink"></span>
								<span class="menu-color-option deep-purple" data-color="deep-purple"></span>
								<span class="menu-color-option cyan" data-color="cyan"></span>
								<span class="menu-color-option teal" data-color="teal"></span>
								<span class="menu-color-option light-blue" data-color="light-blue"></span>
								<span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
								<span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
							</div>
						</div>
						<div class="input-field col s12 menu-bg-color mb-0">
							<p class="mt-0">Menu Background Color</p>
							<div class="gradient-color center-align">
								<span
								class="menu-bg-color-option gradient-45deg-indigo-blue"
								data-color="gradient-45deg-indigo-blue"
								></span>
								<span
								class="menu-bg-color-option gradient-45deg-purple-deep-orange"
								data-color="gradient-45deg-purple-deep-orange"
								></span>
								<span
								class="menu-bg-color-option gradient-45deg-light-blue-cyan"
								data-color="gradient-45deg-light-blue-cyan"
								></span>
								<span
								class="menu-bg-color-option gradient-45deg-purple-amber"
								data-color="gradient-45deg-purple-amber"
								></span>
								<span
								class="menu-bg-color-option gradient-45deg-purple-deep-purple"
								data-color="gradient-45deg-purple-deep-purple"
								></span>
								<span
								class="menu-bg-color-option gradient-45deg-deep-orange-orange"
								data-color="gradient-45deg-deep-orange-orange"
								></span>
								<span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
								<span
								class="menu-bg-color-option gradient-45deg-indigo-light-blue"
								data-color="gradient-45deg-indigo-light-blue"
								></span>
								<span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
							</div>
							<div class="solid-color center-align">
								<span class="menu-bg-color-option red" data-color="red"></span>
								<span class="menu-bg-color-option purple" data-color="purple"></span>
								<span class="menu-bg-color-option pink" data-color="pink"></span>
								<span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
								<span class="menu-bg-color-option cyan" data-color="cyan"></span>
								<span class="menu-bg-color-option teal" data-color="teal"></span>
								<span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
								<span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
								<span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
							</div>
						</div>
						<div class="input-field col s12">
							<div class="switch">
								Menu Dark
								<label class="float-right"
								><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
									></label>
								</div>
							</div>
							<div class="input-field col s12">
								<div class="switch">
									Menu Collapsed
									<label class="float-right"
									><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
										></label>
									</div>
								</div>
								<div class="input-field col s12">
									<div class="switch">
										<p class="mt-0">Menu Selection</p>
										<label>
											<input
											class="menu-selection-radio with-gap"
											value="sidenav-active-square"
											name="menu-selection"
											type="radio"
											/>
											<span>Square</span>
										</label>
										<label>
											<input
											class="menu-selection-radio with-gap"
											value="sidenav-active-rounded"
											name="menu-selection"
											type="radio"
											/>
											<span>Rounded</span>
										</label>
										<label>
											<input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
											<span>Normal</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<h6 class="mt-6">Navbar Options</h6>
						<hr class="customize-devider" />
						<div class="navbar-options row">
							<div class="input-field col s12 navbar-color mb-0">
								<p class="mt-0">Navbar Color</p>
								<div class="gradient-color center-align">
									<span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
									<span
									class="navbar-color-option gradient-45deg-purple-deep-orange"
									data-color="gradient-45deg-purple-deep-orange"
									></span>
									<span
									class="navbar-color-option gradient-45deg-light-blue-cyan"
									data-color="gradient-45deg-light-blue-cyan"
									></span>
									<span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
									<span
									class="navbar-color-option gradient-45deg-purple-deep-purple"
									data-color="gradient-45deg-purple-deep-purple"
									></span>
									<span
									class="navbar-color-option gradient-45deg-deep-orange-orange"
									data-color="gradient-45deg-deep-orange-orange"
									></span>
									<span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
									<span
									class="navbar-color-option gradient-45deg-indigo-light-blue"
									data-color="gradient-45deg-indigo-light-blue"
									></span>
									<span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
								</div>
								<div class="solid-color center-align">
									<span class="navbar-color-option red" data-color="red"></span>
									<span class="navbar-color-option purple" data-color="purple"></span>
									<span class="navbar-color-option pink" data-color="pink"></span>
									<span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
									<span class="navbar-color-option cyan" data-color="cyan"></span>
									<span class="navbar-color-option teal" data-color="teal"></span>
									<span class="navbar-color-option light-blue" data-color="light-blue"></span>
									<span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
									<span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
								</div>
							</div>
							<div class="input-field col s12">
								<div class="switch">
									Navbar Dark
									<label class="float-right"
									><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
										></label>
									</div>
								</div>
								<div class="input-field col s12">
									<div class="switch">
										Navbar Fixed
										<label class="float-right"
										><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
											></label>
										</div>
									</div>
								</div>
								<h6 class="mt-6">Footer Options</h6>
								<hr class="customize-devider" />
								<div class="navbar-options row">
									<div class="input-field col s12">
										<div class="switch">
											Footer Dark
											<label class="float-right"
											><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
												></label>
											</div>
										</div>
										<div class="input-field col s12">
											<div class="switch">
												Footer Fixed
												<label class="float-right"
												><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
													></label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ Theme Customizer -->

								<a 
								href="javascript:;"
								target="_blank"
								class="btn btn-buy-now gradient-45deg-indigo-purple gradient-shadow white-text tooltipped buy-now-animated tada"
								data-position="left"
								data-tooltip="Buy Now!"
								><i class="material-icons">add_shopping_cart</i></a
								>

								<footer-bar></footer-bar>

							</div>
						</div>	
					</template>

					<style type="text/css" scoped>

						/*	#main{
								padding-left: 250px;
								}*/

								</style>


								<script>
								import Breadcrumbs from '../components/common/Breadcrumbs';
								import HeaderBar from '../components/common/HeaderBar';
								import LeftAside from '../components/common/LeftAside';
								import RightAside from '../components/common/RightAside';
								import FooterBar from '../components/common/FooterBar';								

								export default {
									components: {
										'header-bar' : HeaderBar,
										'left-aside' : LeftAside,
										'right-aside' : RightAside,
										'footer-bar' : FooterBar
									},
									data: () => {
										return {
											paddingLeft: 'padding-left: 0px !important;',
											loggedIn:window.loggedIn,
											bURL: window.bURL,
											role:localStorage.getItem('role')
										}
									},
									
									mounted() {
										if(localStorage.getItem('loggedIn')){
											this.paddingLeft = 'padding-left: 250px !important;';
											this.loggedIn = true;
											loggedIn:true;
											role:localStorage.getItem('role');
										}else{
											this.paddingLeft = 'padding-left: 0px !important;';
											this.loggedIn = false;
											loggedIn:false
										}		
									},


									methods: {
										parentMethodLogoutCall: function(){
											alert(1);
											this.loggedIn = false;
											localStorage.removeItem('token');
											localStorage.removeItem('role');
											localStorage.removeItem('loggedIn');
											this.$router.push('/')
											.then((res) => {})
											.catch((err) => {})
										},
										onStep1Update:  function(newData) {
											if(newData == true){
												this.loggedIn = true;
												localStorage.setItem('loggedIn', true);
											}else{
												this.loggedIn = false;
												localStorage.removeItem('loggedIn');
											}

										},


									}
								}
								</script>