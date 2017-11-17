<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script src="jquery.js"></script>
	<script>
		window.addEventListener('load',function(){
			var isdb=false;
			b1.addEventListener('click',function(){
				console.log(isdb);
				setTimeout(function(){if(isdb!=false) {
						return;
					}
					$.post('handle.php',{flag:1},function(data){
						b1.innerHTML=data;
					})},500);
				isdb=false;
			})
			b1.addEventListener('dblclick',function(){
				isdb=true;
				$.post('handle.php',{flag:2},function(data){
					b1.innerHTML=data;
				})
			})
		})
	</script>
</head>
<body>
	<button id="b1">click</button>
</body>
</html>