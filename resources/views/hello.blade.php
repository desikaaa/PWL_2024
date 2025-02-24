<!-- View pada resources/views/hello.blade.php -->
<html>
	<body>
    	<h1>Hello, {{ $name }}</h1>
	</body>
</html>
Route::get('/greeting', function () {
	return view('hello', ['name' => 'Desi Karmila']);
});

