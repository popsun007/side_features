<!DOCTYPE html>
<html>
<head>
	<title>Masonry</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.grid').masonry({
			  itemSelector: '.grid-item',
			  columnWidth: 10
			});
		});
	</script>
</head>
<body>
<!-- <div class="grid" data-masonry='{ "columnWidth": 10, "itemSelector": ".grid-item" }'> -->
<div class="grid">
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item grid-item--width2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2"></div>
  <div class="grid-item grid-item--height2"></div>
</div>

<script src="masonry.pkgd.min.js"></script>
</body>
</html>