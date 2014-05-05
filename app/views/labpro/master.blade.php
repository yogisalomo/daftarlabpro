<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Daftar Labpro</title>
	<meta name="author" content="Yogi Salomo" />
	<meta name="description" content="Register to Labpro" />
	<meta name="keywords"  content="Programming Laboratory, ITB, OHL 2014, Labpro, Laboratory, Register" />
	<meta name="Resource-type" content="Document" />

	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/tes.css" rel="stylesheet">
    
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</head>
<body>
	@if(Session::has('message'))
	<div id="message">{{ Session::get('message') }}</div>
	@endif

	@yield('content')
</body>

@yield('script')
</html>