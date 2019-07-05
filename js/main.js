
			function getData(inputSearch){
				$.getJSON(`php/index.php?name=${inputSearch}`, function(res) {
				const ol = document.querySelector("div.recipe ol");
				ol.textContent = "";
				res.forEach(element => {
					const li = document.createElement("li");
					li.style.margin = "20px";
					li.style.display="block";
					li.textContent = element.name +": "+ element.text;
					//li.style.cursor = "pointer"
					ol.appendChild(li);
				});
			});
				

			}
			
			const input = document.querySelector("li.inputText input");
			input.addEventListener("keyup",()=>{
				//event.target.preventDefault();
				document.querySelector("div.recipe").style.visibility = "visible";
				if(input.value==""){
					document.querySelector("div.recipe").style.visibility = "hidden";
				}
				getData(input.value.toLowerCase());
				
			})
			
			document.querySelector("a.close").addEventListener("click",() => {
				document.querySelector("div.recipe").style.visibility = "hidden";
			});

			document.getElementById("addRecipe").addEventListener("click",() => document.querySelector("div.addMenu").style.visibility = "visible");
			document.querySelector("button").addEventListener("click",(e) => {e.preventDefault(); document.querySelector("div.addMenu").style.visibility = "hidden"});
			
			document.querySelector(".recipeInput").addEventListener("click",()=>
			{
				event.preventDefault();
				document.querySelector("div.addMenu").style.visibility = "hidden";
				//wysyłanie danych na serwer i wypisanie zwracanej odpowiedzi
				const name = document.getElementById("rname");
				const text = document.getElementById("text");

				$.ajax({
    				url : 'php/index.php',
        			method : "post",
        			data : JSON.stringify({ //na serwer trafią dwie dane - name i text
            			"name" : name.value,
            			"text" : text.value
					}),					
        			dataType : "json" //oczekujemy odpowiedzi w formacie json
				})
				.done(function(response) {
    				console.log(response);
				}).fail(function() {
					console.log("blad!!!!!!!!");
				})
				name.value = "";
				text.value = "";
			});
