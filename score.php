<html>
<head>
<title>Quark | Quiz</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="shortcut icon" href="IMG/favicon.ico" type="image/x-icon">
<link rel="icon" href="IMG/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<style>
body {
background-image: url(IMG/tenor.gif);
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
margin:0;
transition: 2s;
	padding:0;

}
</style>
</head>
<!-- 
█▀▄▀█ █▀▀█ █▀▀ █▀▀█ █▀▄▀█ █▀▀█     █▀▀█ █▀▀█     █░░█ █▀▀█ █▀▀▄
█░▀░█ █▄▄█ ▀▀█ █▄▄█ █░▀░█ █▄▄█     █░░█ █░░█     █▄▄█ █▄▄█ █░░█
▀░░░▀ ▀░░▀ ▀▀▀ ▀░░▀ ▀░░░▀ ▀░░▀     █▀▀▀ ▀▀▀▀     ▄▄▄█ ▀░░▀ ▀░░▀
 -->

<body>
<div class="logo"><a href="#"><img src="quark.png"></a></div>
<nav>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="modules.html">Module</a></li>
		<li><a class="active" href="#quiz">Quiz</a></li>
			<li><a href="videos.html">Videos</a></li>
		<li><a href="about.html">About</a></li>

</ul></nav>
<br>
<!-- 
█▀▄▀█ █▀▀█ █▀▀ █▀▀█ █▀▄▀█ █▀▀█     █▀▀█ █▀▀█     █░░█ █▀▀█ █▀▀▄
█░▀░█ █▄▄█ ▀▀█ █▄▄█ █░▀░█ █▄▄█     █░░█ █░░█     █▄▄█ █▄▄█ █░░█
▀░░░▀ ▀░░▀ ▀▀▀ ▀░░▀ ▀░░░▀ ▀░░▀     █▀▀▀ ▀▀▀▀     ▄▄▄█ ▀░░▀ ▀░░▀
 -->
<div class="info">
<h2 style="text-align:center">INORGANIC NOMENCLATURE QUIZ</h2>


	<div id="page-wrap" style="text-align:center; font-size:20px;">
		
        <?php
            $name = $_POST['fname'];
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
          
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
			
            
            echo "<div id='results'>$name , your score is $totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

<!-- 
█▀▄▀█ █▀▀█ █▀▀ █▀▀█ █▀▄▀█ █▀▀█     █▀▀█ █▀▀█     █░░█ █▀▀█ █▀▀▄
█░▀░█ █▄▄█ ▀▀█ █▄▄█ █░▀░█ █▄▄█     █░░█ █░░█     █▄▄█ █▄▄█ █░░█
▀░░░▀ ▀░░▀ ▀▀▀ ▀░░▀ ▀░░░▀ ▀░░▀     █▀▀▀ ▀▀▀▀     ▄▄▄█ ▀░░▀ ▀░░▀
 -->


</div>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<center><p>© 2020 Quark. All rights reserved. For Educational purposes only.</p></center>
</body>
</html>