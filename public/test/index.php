<html>
<head>
<link rel="stylesheet" href="./css/style.css" />
<script src="../js/jquery.js"></script>
<script>
$(document).ready(function() {
	$("section[role='header']").hover(function() {
		$(this).stop().animate({"height" : "300px"});
	},
	function() {
		$(this).stop().animate({"height" : "20px"});
	})	
});
</script>
</head>
<body>

<div class="wrap">

	<section role="header">
		<h1>Garren's test site</h1>
	</section>

</div>

</body>
</html>
