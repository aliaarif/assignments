<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="ThemeSelect">
	<title>Auth Bridge Assignment</title>
	<!-- <link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}"> -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon-32x32.png') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/user-profile-page.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate-css/animate.css') }}">
</head>
<body id="body" class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
	<div id="app"><app /></div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/custom/custom-script.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/scripts/customizer.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/scripts/css-animation.js') }}" type="text/javascript"></script>
	<script src="{{ asset('vendors/noUiSlider/nouislider.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/form-elements.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/search.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js" integrity="sha512-VZ6m0F78+yo3sbu48gElK4irv2dzPoep8oo9LEjxviigcnnnNvnTOJRSrIhuFk68FMLOpiNz+T77nNY89rnWDg==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script>
		function toObject(arr) { 
     		var customObj = {}; 
      		for (var i = 0; i < arr.length; ++i) 
	  		customObj[arr[i]] = null; 
      		return customObj; 
		}
		
		$(() => {
			let usersList = [];
			let usersListArr = [];
			axios
      		.get(`/api/list-users`)
      		.then(res => {
				usersList = res.data.users;
				usersList.map(user => { usersListArr.push(user.profile.name); });
    			$("input.autocomplete").autocomplete({
      			data: this.toObject(usersListArr), limit: 5, 
      			onAutocomplete: function(user_name) {
				var user_name = user_name;
				axios({
        			url: "/api/list-user-details-in-pdf/ " + user_name,
        			method: "GET",
        			responseType: "blob" 
      			}).then(res => {
			  		//console.log(parse here the blob data for other information);
        			var doc = new jsPDF();
					doc.text(20, 20, 'User Details');
					doc.text(20, 30, 'Name: '+user_name);
					doc.save('user_detail.pdf');
	  			});
	  		},
      	minLength: 0 
		});
	})
      .catch(err => {});
	});
</script>
</body>
</html>

