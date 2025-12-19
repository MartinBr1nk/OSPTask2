console.log('api.js loaded successfully'); // Confirmation message to indicate the script has loaded
   
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
     const totalRecipes = 21; // Adjust on total meals
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
         

          const mealCells = [
          "MealOneMonday", "MealTwoMonday", "MealThreeMonday",
          "MealOneTuesday", "MealTwoTuesday", "MealThreeTuesday",
          "MealOneWednesday", "MealTwoWednesday", "MealThreeWednesday",
          "MealOneThursday", "MealTwoThursday", "MealThreeThursday",
          "MealOneFriday", "MealTwoFriday", "MealThreeFriday",
          "MealOneSaturday", "MealTwoSaturday", "MealThreeSaturday",
          "MealOneSunday", "MealTwoSunday", "MealThreeSunday"
          ];

          mealCells.forEach((id, index) => {
            const meal = foodResults[index];
            const cell = document.querySelector(`#${id}`);

            if (!meal) return;

            const nutrients = meal.nutrition?.nutrients || [];
            const calories = nutrients.find(n => n.name === "Calories")?.amount ?? "N/A";
            const protein = nutrients.find(n => n.name === "Protein")?.amount ?? "N/A";
            const sugar = nutrients.find(n => n.name === "Sugar")?.amount ?? "N/A";
            const carbs = nutrients.find(n => n.name === "Carbohydrates")?.amount ?? "N/A";
            const fat = nutrients.find(n => n.name === "Fat")?.amount ?? "N/A";

            cell.innerHTML = `
              <h4>${meal.title}</h4>
              <img src="${meal.image}" alt="${meal.title}" />
              <p>Calories: ${calories}</p>
              <p>Protein: ${protein} g</p>
              <p>Sugar ${sugar} g</p>
              <p>Carbs ${carbs} g</p>
              <p>Fat ${fat} g</p>
          `;
          });
            
            
       })
       .catch(error => {
         console.error('Error fetching recipes:', error);
         resultsMessage.innerHTML = 'An error occurred while fetching recipes. Please try again later.';
       });
   }




