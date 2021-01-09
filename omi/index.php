<!DOCTYPE html>
<html lang="ja" manifest="sample-cache-manifest.appcache">
	<head>
		<meta charset="UTF-8" />
<link rel="stylesheet" href="style.css" />
<!-- or from surge.sh -->
<link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake.min.css">

<a href="uranai.php">
	<div class="box shake-slow" onclick="delay()"></div>
</a>
<script>
function delay(){
    var a = new Date().getTime();
    var b = new Date().getTime();
	    while ( b-a < 1000){
	      b = new Date().getTime();
	    }
  }
</script>
</html>