<html>
<head>
<title>Quark | Quiz</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="shortcut icon" href="IMG/favicon.ico" type="image/x-icon">
<link rel="icon" href="IMG/favicon.ico" type="image/x-icon">
<meta charset="utf-8">
<!-- 
█▀▄▀█ █▀▀█ █▀▀ █▀▀█ █▀▄▀█ █▀▀█     █▀▀█ █▀▀█     █░░█ █▀▀█ █▀▀▄
█░▀░█ █▄▄█ ▀▀█ █▄▄█ █░▀░█ █▄▄█     █░░█ █░░█     █▄▄█ █▄▄█ █░░█
▀░░░▀ ▀░░▀ ▀▀▀ ▀░░▀ ▀░░░▀ ▀░░▀     █▀▀▀ ▀▀▀▀     ▄▄▄█ ▀░░▀ ▀░░▀
 -->
<style>
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

input[type=text]:focus {
  background-color: #ffbf00;
}

h3{
	font-size:22px;
	
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 0px;
  cursor: pointer;
  font-size: 20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}


.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  
}


.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 30px;
  width: 30px;
  background-color: #eee;
  border-radius: 60%;
  
  
}


.container:hover input ~ .checkmark {
  background-color: #ccc;
}


.container input:checked ~ .checkmark {
  background-color: #ffbf00;
}


.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}


.container input:checked ~ .checkmark:after {
  display: block;
}


.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

input[type=submit] {
  border-radius: 4px;
  background-color: #ffbf00;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;

 
}

input[type=submit]:hover {
   background-color: #4c9ed9;
  color: #fffff;
}

.quizz{

	margin:0 10;
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
<form action="score.php" method="post" id="quiz">
		
<ul class="quizz">
<br>
    <div class="form__group">
	<b><p style="font-size:23px">Full Name:</p></b>
  <input type="text" class="form__input" name="fname" id="name" placeholder="Sung Jin-Woo" required="" />
</div>
<li class="quiz">
          <h3>What is the correct formula for Calcium Carbonate?</h3>
                    
                    <div>
					
                      
                        <label class="container" for="question-1-answers-A"> Ca<sup>+</sup> + CO<sub>2</sub><sup>-</sup> 
						     <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" /><span class="checkmark"></span>
						</label>
                    </div>
                    
                    <div>
					   <label class="container" for="question-1-answers-B"> CaCO<sub>2</sub><sup>-</sup>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" /><span class="checkmark"></span>
                      </label>
                    </div>
                    
                    <div>
                       
                        <label class="container" for="question-1-answers-C"> CaCO<sub>3</sub> <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-1-answers-D"> 2CaCO<sub>3</sub><input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" /><span class="checkmark"></span></label>
                    </div>
                
                </li>
				
                 <li class="quiz">
                
                    <h3>What is the correct name for FeO?</h3>
                    
                    <div>
                        
                        <label class="container" for="question-2-answers-A"> Iron Oxide<input required type="radio" name="question-2-answers" id="question-2-answers-A" value="A" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-2-answers-B"> Iron dioxide<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-2-answers-C"> Iron(III) oxide<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-2-answers-D"> Iron(II) oxide<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" /><span class="checkmark"></span></label>
                    </div>
                
                </li>
                
                 <li class="quiz">
                
                    <h3>What is the correct name for Al(NO<sub>3</sub>)<sub>3</sub>?</h3>
                    
                    <div>
                        
                        <label class="container" for="question-3-answers-A"> Aluminum nitrate<input required  type="radio" name="question-3-answers" id="question-3-answers-A" value="A" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-3-answers-B"> Aluminum(III) nitrate<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-3-answers-C"> Aluminum nitrite<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-3-answers-D"> Aluminum nitrogen trioxide<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" /><span class="checkmark"></span></label>
                    </div>
                
                </li>
                
                 <li class="quiz">
                
                    <h3>What is the correct formula of phosphorus trichloride?</h3>
                    
                    <div>
                       
                        <label class="container" for="question-4-answers-A"> P<sub>2</sub>Cl<sub>2</sub> <input required type="radio" name="question-4-answers" id="question-4-answers-A" value="A" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-4-answers-B"> PCl<sub>3</sub><input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                        
                        <label class="container" for="question-4-answers-C"> PCl<sub>4</sub><input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                      
                        <label class="container" for="question-4-answers-D"> P<sub>4</sub>Cl<sub>2</sub>  <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" /><span class="checkmark"></span></label>
                    </div>
                
                </li>
                
                 <li class="quiz">
                    <h3>What is the correct formula of lithium perchlorate?</h3>
                    
                    <div>
                       
                        <label class="container" for="question-5-answers-A"> Li<sub>2</sub>ClO<sub>4</sub> <input required type="radio" name="question-5-answers" id="question-5-answers-A" value="A" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                       
                        <label class="container" for="question-5-answers-B"> LiClO<sub>2</sub> <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                       
                        <label class="container" for="question-5-answers-C"> LiClO <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" /><span class="checkmark"></span></label>
                    </div>
                    
                    <div>
                       
                        <label class="container" for="question-5-answers-D"> None of these <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" /><span class="checkmark"></span></label>
                    </div>
                
                </li>
            
            </ol>
        <br>
           <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	<!-- 
█▀▄▀█ █▀▀█ █▀▀ █▀▀█ █▀▄▀█ █▀▀█     █▀▀█ █▀▀█     █░░█ █▀▀█ █▀▀▄
█░▀░█ █▄▄█ ▀▀█ █▄▄█ █░▀░█ █▄▄█     █░░█ █░░█     █▄▄█ █▄▄█ █░░█
▀░░░▀ ▀░░▀ ▀▀▀ ▀░░▀ ▀░░░▀ ▀░░▀     █▀▀▀ ▀▀▀▀     ▄▄▄█ ▀░░▀ ▀░░▀
 -->
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>


</div>
<!-- 
█▀▄▀█ █▀▀█ █▀▀ █▀▀█ █▀▄▀█ █▀▀█     █▀▀█ █▀▀█     █░░█ █▀▀█ █▀▀▄
█░▀░█ █▄▄█ ▀▀█ █▄▄█ █░▀░█ █▄▄█     █░░█ █░░█     █▄▄█ █▄▄█ █░░█
▀░░░▀ ▀░░▀ ▀▀▀ ▀░░▀ ▀░░░▀ ▀░░▀     █▀▀▀ ▀▀▀▀     ▄▄▄█ ▀░░▀ ▀░░▀
 -->
<center><p>© 2020 Quark. All rights reserved. For Educational purposes only.</p></center>

</ul>	

<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
</body>
</html>