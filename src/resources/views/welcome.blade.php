<!DOCTYPE html>
<html>
<head>
	<title>Laravel GUI</title>
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
   rel = "stylesheet">
	<script src = "./assets/jquery-ui.js"></script>
	<script src = "{{__DIR__}}/assets/jquery.js"></script>
	<script type = "text/javascript">
	   $(function () {
	      $('#dialogMsg').dialog();
	   });
	</script>
</head>
<body>
	<body>
	   <form id = "form1" runat = "server">
	      <div id = "dialogMsg" title = "First JqueryUI Example">
	         Hello this is my first JqueryUI example.
	      </div>
	   </form>
	</body>
</body>
</html>