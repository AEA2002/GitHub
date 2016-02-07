<script>
	function navLink(curPage) {
		var curPage;
		
		document.getElementById(curPage).style.backgroundColor = "#EEE";
		document.getElementById(curPage).style.color = "#000";
		var x = function (){return false};
		document.getElementById(curPage).onclick = x;
    }
  
</script>
 

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!--  navbar-header mobile/tab view-->
		<div class="navbar-header">
			<!-- navbar-toggle collapsed? , arias? #navbar div menu id-->
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			   <!--  icon-bar bars for hidden menu, sr screen readers-->
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
	<!--  navbar-brand company name--><a class="navbar-brand" href="#">AEA</a>
		</div>
		<!--  collapse navbar-collapse collapses menu, works in ul too-->
		<div id="navbar" class="navbar-collapse collapse">
		<!--  nav (items)removes bullets, navbar-nav inline-block -->
			<ul class="nav navbar-nav"> 
				<li class=""><a href="index.php" id="home">Home</a></li>
				<li><a class="" href="workshops.php" id="workshops">Workshops</a></li>
				<li><a href="#portfolio.php" class="topnav" id="portfolio">Projects</a></li>
				<li><a href="#about" id="portfolio">About</a></li>
				<li><a href="form.php" id="form">Contact</a></li>
			</ul>
		</div>
	</div>
</div>