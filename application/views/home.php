<header class="navbar navbar-inverse" id="top" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="../" class="navbar-brand">Bootstrap</a>
	    </div>
	    <nav class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active">
	        	<a href="#">Home</a>
	        </li>
	        <li>
	        	<a href="#">About Us</a>
	        </li>
	        <li>
	        	<a href="#">Menu</a>
	        </li>
	        <li>
	        	<a href="#">Location</a>
	        </li>
	        <li>
	        	<a href="#">Contact Us</a>
	        </li>
	      </ul>
	    </nav>
	  </div>
</header>

<div class="container-fluid home-section">
	<div class="row">
		<h1>Hello World!</h1>
	</div>
</div>

<script>
	$(document).ready(function () {
	    updateImageSize();
	    $(window).resize(function() {
	        updateImageSize();
	    });
	});

	function updateImageSize()
	{
   		$(".mr_our-dest-img-container").each(function(){
	        var ratio_cont = jQuery(this).width()/jQuery(this).height();
	        var $img = jQuery(this).find("img");
	        var ratio_img = $img.width()/$img.height();
	        if (ratio_cont > ratio_img)
	        {
	            $img.css({"width": "100%", "height": "auto"});
	        }
	        else if (ratio_cont < ratio_img)
	        {
	            $img.css({"width": "auto", "height": "100%"});
	        }
    	}
	};
</script>