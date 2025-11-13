console.log('RecipesSearch.js loaded successfully'); // Confirmation message to indicate the script has loaded
   
    //Select HTML elements
   const searchInput = document.querySelector('#searchInput');
   const searchButton = document.querySelector('#searchButton');
   const resultsMessage = document.querySelector('#results-message');
   //Check if elements exist before adding event listeners
   if (searchButton) {
    console.log('Search button found, adding event listener.');
    searchButton.addEventListener('click', searchRecipes, false);
    }
    else {
        console.log('Search button not found.');
    }
    if (searchInput) {
        console.log('Search input found, adding keypress event listener.');
    searchInput.addEventListener('keypress', function(e) {
     if (e.key === 'Enter') {
       searchRecipes();
     }
   });
    }
    else {
        console.log('Search input not found.');
    }

   function searchRecipes() {
    // Get the search query from the input field
     const query = searchInput.value.trim();
     if (!query) {
       alert('Please enter a search term.');
       return;
     }
     // Spoonacular API from your account
     const apiKey = 'f1b9ab7fa6914cd697f17ec9fe468772' ;  
     const totalRecipes = 9; // Adjust on total meals
     const apiUrl = `https://api.spoonacular.com/recipes/complexSearch?query=${encodeURIComponent(query)}&number=${totalRecipes}&addRecipeNutrition=true&apiKey=${apiKey}`;
     //requested data from the API as JSON file
    

     fetch(apiUrl)
       .then(response => {
         if (!response.ok) {
           throw new Error(`HTTP error! status: ${response.status}`);
         }
         return response.json();
       })
       .then(data => {
         if (!data.results || data.results.length === 0) {
           resultsMessage.innerHTML = 'No recipes found. Try a different search term!';
           return;
         }
         let foodResults = data.results;
         

            let mealOneMonday = document.querySelector("#MealOneMonday"); // select the correct ID for the table
            let mealOneNutrition = foodResults[0].nutrition.nutrients; // get nutrition info for first meal
            mealOneMonday.innerHTML = `${foodResults[0].title}
            <img src= "${foodResults[0].image}">  
            <p>Calories: ${mealOneNutrition.find(n => n.name === 'Calories').amount} kcal</p> <br>
            <p>Protein: ${mealOneNutrition.find(n => n.name === 'Protein').amount} g</p> <br>
            `;

            let mealTwoMonday = document.querySelector("#MealTwoMonday");
            mealTwoMonday.innerHTML = `${foodResults[1].title}`;

            let mealThreeMonday = document.querySelector("#MealThreeMonday");
            mealThreeMonday.innerHTML = `${foodResults[2].title}`;

            let mealOneTuesday = document.querySelector("#MealOneTuesday");
            mealOneTuesday.innerHTML = `${foodResults[3].title}`;

            let mealTwoTuesday = document.querySelector("#MealTwoTuesday");
            mealTwoTuesday.innerHTML = `${foodResults[4].title}`;

            let mealThreeTuesday = document.querySelector("#MealThreeTuesday");
            mealThreeTuesday.innerHTML = `${foodResults[5].title}`;

            let mealOneWednesday = document.querySelector("#MealOneWednesday");
            mealOneWednesday.innerHTML = `${foodResults[6].title}`;

            let mealTwoWednesday = document.querySelector("#MealTwoWednesday");
            mealTwoWednesday.innerHTML = `${foodResults[7].title}`;

            let mealThreeWednesday = document.querySelector("#MealThreeWednesday");
            mealThreeWednesday.innerHTML = `${foodResults[8].title}`;
            
            
       })
       .catch(error => {
         console.error('Error fetching recipes:', error);
         resultsMessage.innerHTML = 'An error occurred while fetching recipes. Please try again later.';
       });
   }