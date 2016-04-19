<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<title>Toggle Menu</title>
	<script type="text/javascript">
	jQuery(document).ready(function($) {

	    $("#mmenu").hide();
	    $(".mtoggle").click(function() {
	        $("#mmenu").slideToggle(500);
	        return false;
	    });
	});
	</script>

</head>
<body>
	<nav id="mobile">
	 
	    <div id="toggle-bar">
	        <strong><a class="mtoggle" href="#">MAIN MENU</a></strong>
	        <a class="navicon mtoggle" href="#">MAIN MENU</a>
	    </div>
	 
	    <ul id="mmenu">
	        <li><a href="#">Home</a></li>
	        <li><a href="#">Products</a>
	            <ul>
	                <li><a href="#">HTML</a></li>
	                <li><a href="#">CSS</a></li>
	                <li><a href="#">Javascript</a>
	                    <ul>
	                        <li><a href="#">jQuery</a></li>
	                        <li><a href="#">MooTools</a></li>
	                    </ul>
	            	</li>
	            </ul>
	        </li>
	        <li><a href="#">About</a></li>
	        <li><a href="#">Contact</a></li>       	
	    </ul>
	</nav>
</body>
</html>