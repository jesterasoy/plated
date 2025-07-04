<?php
$recipes = [
  [
    'title' => 'Barbecue Ribs',
    'image' => './images/ribs.jpg',
    'category' => 'Pizza',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'A delicious and easy-to-make pizza recipe perfect for any occasion.A delicious and easy-to-make pizza recipe perfect for any occasion. A delicious and easy-to-make pizza recipe perfect for any occasion.',
  ],
  [
    'title' => 'Garlic Shrimp',
    'image' => './images/shrimp.jpg',
    'category' => 'Seafood',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'Juicy shrimp sautéed in rich garlic butter and finished with a hint of lemon and parsley. Perfect with rice or pasta.',
  ],
  [
    'title' => 'Egg Fried Rice',
    'image' => './images/egg_friedrice.jpg',
    'category' => 'Rice Dish',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'A quick stir-fried rice dish with scrambled eggs, garlic, soy sauce, and green onions — great for using leftovers.',
  ],
  [
    'title' => 'Caprese Salad Toast',
    'image' => './images/caprese.jpg',
    'category' => 'Salad',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'Toasted bread topped with fresh tomatoes, mozzarella, basil, and a drizzle of olive oil and balsamic glaze.',
  ],
  [
    'title' => 'Tuna Mayo Sandwich',
    'image' => './images/tuna_sandwich.jpg',
    'category' => 'Snack | Breakfast',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'A creamy and savory tuna filling made with mayonnaise and a touch of pepper, served between slices of bread.',
  ],
  [
    'title' => 'Cheesy Ramen Hack',
    'image' => './images/ramen.jpg',
    'category' => 'Snack',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'Instant ramen upgraded with a creamy melted cheese slice and a poached egg for a rich and comforting meal.',
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./images/site-logo.png" type="image/png" />
  <meta name="description" content="A simple recipe app" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');

    .poppins-thin {
      font-family: "Poppins", sans-serif;
      font-style: normal;
    }

    .lora {
      font-family: "Lora", serif;
      font-style: normal;
    }

    .title {
      font-family: "Montserrat", sans-serif;
    }
  </style>
  <title>Plated</title>
</head>

<body>
  <div
    class="bg-white text-gray-800 poppins-thin bg-center bg-cover bg-no-repeat bg-[linear-gradient(to_bottom,_rgba(255,255,255,0)_0%,_rgba(255,255,255,1)_100%),url('./images/background.png')]">
    <!-- Header Section -->
    <div class="" id="header-placeholder">
      <?php
      include 'common/header.php';
      ?>

      <!-- Hero Section -->
      <section class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
        <div class="text-center text-6xl font-bold mb-10 text-gray-900">
          <h1 class="title">
            Simple Recipes. Bold Flavors. <br />
            Perfectly <span class="italic text-orange-500">Plated.</span>
          </h1>
        </div>

        <div class="swiper mySwiper">
          <div class="swiper-wrapper mb-15" id="recipe-container">
          </div>

          <div class="swiper-pagination text-black"></div>
        </div>


        <section class="mt-5 text-center">
          <a href=""
            class="mt-4 mx-auto px-6 py-3 bg-orange-500 w-fit text-white font-bold rounded-full hover:bg-orange-600 transition duration-300 flex items-center gap-2">
            Explore More Recipes
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </section>
      </section>
    </div>
  </div>


  <!-- SECOND SECTION -->
  <section class="poppins-thin mb-5">
    <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
      <div class="border-l-8 border-orange-500">
        <h1 class=" mx-3 font-bold text-4xl text-gray-900"> Trending <span class="">Recipes</span></h1>
      </div>
      <div class="grid grid-cols-2 pt-8 gap-8">

        <div class="bg-white shadow-md">
          <img src="./images/cagun_rice.jpg" alt="Cajun Rice" class="object-cover h-[300px] w-full" />
          <div class="p-4">
            <span class="text-sm text-gray-500 uppercase tracking-wide font-semibold">
              Meal
            </span>
            <h2 class="text-2xl font-bold text-gray-900 title uppercase tracking-wide">Cajun Rice</h2>
            <p class="text-gray-600 mt-2 mb-2 line-clamp-3">A spicy and flavorful rice dish with a blend of Cajun
              spices.</p>
            <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white shadow-md h-[300px]">
            <img src="./images/roast_chick.jpg" alt="Garlic Herb Roast Chicken" class="object-cover h-[150px] w-full" />
            <div class="p-4">
              <span class="uppercase text-xs text-gray-500 tracking-wide font-semibold"> Meal</span>
              <h1 class="title uppercase truncate text-lg font-bold text-gray-900 tracking-wide">Garlic Herb Roast
                Chicken</h1>
              <p class="text-gray-600 text-sm mt-1 mb-1 line-clamp-2">A spicy and flavorful rice dish with a blend of
                Cajun spices.
              </p>
              <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
            </div>
          </div>

          <div class="bg-white shadow-md h-[300px]">
            <img src="./images/cum_salad.jpg" alt="Garlic Herb Roast Chicken" class="object-cover h-[150px] w-full" />
            <div class="p-4">
              <span class="uppercase text-xs text-gray-500 tracking-wide font-semibold"> Salad</span>
              <h1 class="title uppercase truncate text-lg font-bold text-gray-900 tracking-wide">Spicy Cucumber Salad
                Chicken</h1>
              <p class="text-gray-600 text-sm mt-1 mb-1 line-clamp-2">Crisp cucumber slices tossed in a tangy,
                umami-rich dressing featuring fish sauce, soy sauce, sesame oil, and a touch of sugar. Garnished with
                scallions, sesame seeds, and optional chillies for heat—it’s light, zesty, and perfect for scorching
                days.
              </p>
              <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="relative bg-[#f5f5f5] poppins-thin mb-5">

    <div class="relative z-10 p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
      <div class="border-l-8 border-orange-500 mb-5">
        <h1 class="text-4xl font-bold mx-3 text-gray-900">Random Meal</h1>
      </div>

      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8" id="random_meal">

      </div>

    </div>
  </section>


  <!-- Quick Recipes Section -->
  <section class="poppins-thin mb-5">
    <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
      <div class="border-l-8 border-orange-500">
        <h1 class="text-4xl font-bold mx-3 text-gray-900">Quick Recipes for Breakfast</h1>
      </div>
      <div class="grid grid-cols-3 gap-8">
        <?php
        $count = 0;
        foreach ($recipes as $recipe): ?>
          <?php if ($count++ >= 9)
            break; ?>
          <div class="pt-8">
            <img src="<?= htmlspecialchars($recipe['image']) ?>" class="object-cover w-full h-[300px]" />
            <div class="p-4 shadow-sm">
              <span class="text-sm text-gray-500 uppercase tracking-wide font-semibold">
                <?= htmlspecialchars($recipe['category']) ?>
              </span>
              <h1 class="title font-bold uppercase tracking-wide text-lg"><?= htmlspecialchars($recipe['title']) ?>
              </h1>
              <p class="text-gray-600 text-sm mt-1 mb-1 line-clamp-3">
                <?= htmlspecialchars($recipe['description']) ?>
              </p>
              <span class="text-yellow-500 font-medium text-sm"><?= htmlspecialchars($recipe['rating']) ?></span>
            </div>
          </div>
        <?php endforeach; ?>

      </div>


    </div>
  </section>

  <?php
  include('./common/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/index.js"></script>

  <script>
    const randomMeal = document.getElementById('random_meal')

    fetch('https://www.themealdb.com/api/json/v1/1/random.php')
      .then(res => res.json())
      .then(data => {
        const meal = data.meals[0]
        console.log(meal)
        let ingredients = ''
        for (let i = 1; i <= 5; i++) {
          const ingredient = meal[`strIngredient${i}`]
          const measure = meal[`strMeasure${i}`]
          if (ingredient && ingredient.trim() !== '') {
            ingredients += `<li class="mb-1 text-sm text-gray-700"> ${measure} ${ingredient}</li>`
          }
        }

        const mealCard = `
        <div class="flex flex-col sm:flex-row gap-6 items-start">
          <div class="flex-shrink-0">
            <img src="${meal.strMealThumb}" alt="${meal.strMeal}"
              class="w-[250px] h-[250px] sm:w-[300px] sm:h-[300px] object-cover rounded-lg shadow" />
          </div>

          <div class="max-w-xl">
            <span class="text-sm uppercase tracking-widest text-orange-400 font-semibold block mb-2">
              ${meal.strCategory}
            </span>
          <a href="./pages/recipe.php?meal=${encodeURIComponent(
          meal.strMeal
        )}" class="text-2xl font-bold mb-5 hover:underline uppercase">
            ${meal.strMeal}
          </a>      
          <ul class="mb-5 list-disc pl-5 pt-5">
              ${ingredients}
            </ul>

            <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
          </div>
        </div>
      `

        randomMeal.innerHTML = mealCard
      })
      .catch(error => {
        console.error('Error fetching meal:', error)
        randomMeal.innerHTML =
          "<p class='text-red-500'>Failed to load random meal.</p>"
      })
  </script>

</body>

</html>