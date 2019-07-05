
<!doctype html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<title>Simple Recipe Page</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
		
	</head>
	<body>

			<header id="MENU">
					<nav>
							<ul > 
									<li class = "inputText"><input type = "text" placeholder = "search recipes"></li>
									<li><a  id = "addRecipe">ADD RECIPE</a></li><li></li><li><a >HOME</a></li>  
							</ul>
							
						
					</nav>
					<div class = "recipe">
						<a class="close">X</a>
						<ol></ol>
				</div>
			</header>

			
			<div class = "addMenu">


				<form action="">
					<label for="rname">Recipe name</label>
					<input type="text" id="rname" name="recipename" placeholder="name.." required>
			
					<label for="subject">Text</label>
					
					<textarea id="text" name="text" placeholder="Write something.." style="height:200px" required></textarea>
			
					<input class="recipeInput" type="submit" value="Add recipe">
					<button>Back</button>
				</form>
			</div>
			
			<!-- <aside id="INFORMACJE">Dodatkowe informacje</aside> -->
			<article id="TRESC">
				<h1>Welcome</h1>
				<a>Simple page with recipes!</a></br></br>

			</article>
		</br> </br> </br> </br>


			<!-- <article id="TRESC">Treść strony</article> -->

			<footer id="STOPKA">FOOTER</footer>
		
			




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    </body>
    	
</html>