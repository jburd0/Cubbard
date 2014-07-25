<html>
<script src="./js/jquery.js"></script>
<script>
$(document).ready(function() {
	$(".required").on("change", function() {
		if(this.value == '') {
			$(this).css({"background-color" : "red"});
		}
	})
});
</script>
<form name="test">
  <input class="required" type="text" value="test">
  <input class="required" type="text" value="test">
  <input class="required" type="text" value="test">
</form>
<div id="other">
  Trigger the handler
</div>
</html>
