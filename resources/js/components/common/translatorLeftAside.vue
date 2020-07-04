	<template>
		<!-- BEGIN: SideNav-->
		<aside  class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
			<div class="brand-sidebar">
				<h1 class="logo-wrapper"><a class="brand-logo darken-1" href="javascript:;"><img :src="bURL+'images/logo/materialize-logo.png'" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="javascript:;"><i class="material-icons">radio_button_checked</i></a></h1>
			</div>
			<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>eCommerce</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Analytics</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="">Templates</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Vertical</span></a>
								<div class="collapsible-body">
									<ul class="collapsible" data-collapsible="accordion">
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modern  Menu</span></a>
										</li>
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar Dark</span></a>
										</li>
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gradient Menu</span></a>
										</li>
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dark Menu</span></a>
										</li>
									</ul>
								</div>
							</li>
							<li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Horizontal</span></a>
								<div class="collapsible-body">
									<ul class="collapsible" data-collapsible="accordion">
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Horizontal Menu</span></a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-10">5</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Chat</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">check</i><span class="menu-title" data-i18n="">ToDo</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Contacts</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">today</i><span class="menu-title" data-i18n="">Calendar</span></a>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">eCommerce</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
				</li>
				<li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="">Pages</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Contact</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Blog</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Search</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Knowledge</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>FAQs</span></a>
							</li>
							<li class="active"><a class="collapsible-body active" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Page Blank</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="">Medias</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Gallery Page</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media Hover Effects</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">face</i><span class="menu-title" data-i18n="">User</span><span class="badge badge pill purple float-right mr-10">10</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>User Profile</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Login</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Register</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Forgot Password</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Lock Screen</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="">Misc</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>404</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Page Maintenanace</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>500</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">cast</i><span class="menu-title" data-i18n="">Cards</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Advance</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Cards Extended</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="">CSS</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Typograpy</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Color</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Grid</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Helpers</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pulse</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sass</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Shadow</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Animations</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Transitions</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Basic UI</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Buttons</span></a>
								<div class="collapsible-body">
									<ul class="collapsible" data-collapsible="accordion">
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Basic</span></a>
										</li>
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Extended</span></a>
										</li>
									</ul>
								</div>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Icons</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Alerts</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Badges</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Breadcrumbs</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chips</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collections</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Navbar</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Pagination</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Preloader</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="">Advanced UI</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Carousel</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Collapsibles</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Toasts</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tooltip</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dropdown</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Discovery</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Media</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Modals</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Scrollspy</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Tabs</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Waves</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="">Extra Components</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Range Slider</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sweetalert</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Nestable</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Translation</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Highlight</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="">Basic Tables</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="">Data Tables</span></a>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="">Forms</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Elements</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Validation</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Form Masks</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>File Uploads</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="">Form Layouts</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="">Form Wizard</span></a>
				</li>
				<li class="navigation-header"><a class="navigation-header-text">Charts &amp; Maps </a><i class="navigation-header-icon material-icons">more_horiz</i>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="">Chart</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>ChartJS</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Chartist</span></a>
							</li>
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sparkline Charts</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
				</li>
				<li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="javascript:;"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="">Menu levels</span></a>
					<div class="collapsible-body">
						<ul class="collapsible collapsible-sub" data-collapsible="accordion">
							<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level</span></a>
							</li>
							<li><a class="collapsible-body collapsible-header waves-effect waves-cyan" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Second level child</span></a>
								<div class="collapsible-body">
									<ul class="collapsible" data-collapsible="accordion">
										<li><a class="collapsible-body" href="javascript:;" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Third level</span></a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">track_changes</i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge pill light-blue float-right mr-10">5.1</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Documentation</span></a>
				</li>
				<li class="bold"><a class="waves-effect waves-cyan " href="javascript:;"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="">Support</span></a>
				</li>
			</ul>
			<div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="javascript:;" data-target="slide-out"><i class="material-icons">menu</i></a>
		</aside>
		<!-- END: SideNav-->

	</template>
	<style lang="stylus" scoped>

	</style>

	<script>
	export default {
		data: () => {
			return {
				bURL: window.bURL,				
			}
		},
		mounted() {

		},

	}
	</script>