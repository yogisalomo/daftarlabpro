<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Tentang Ontang</title>
	<meta name="author" content="Yogi Salomo" />
	<meta name="description" content="Personal Web Page of Yogi Salomo" />
	<meta name="keywords"  content="personal web, Yogi Salomo, creative design, portofolio, Mangontang" />
	<meta name="Resource-type" content="Document" />

	<link href="{{asset('assets/style.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
</head>
<body>
	@if(Session::has('message'))
	<div id="message">{{ Session::get('message') }}</div>
	@endif

	
	@yield('content')

</body>
</html>