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
    'title' => 'Barbecue Ribs',
    'image' => './images/ribs.jpg',
    'category' => 'Pizza',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'A delicious and easy-to-make pizza recipe perfect for any occasion.A delicious and easy-to-make pizza recipe perfect for any occasion. A delicious and easy-to-make pizza recipe perfect for any occasion.',
  ],
  [
    'title' => 'Barbecue Ribs',
    'image' => './images/ribs.jpg',
    'category' => 'Pizza',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'A delicious and easy-to-make pizza recipe perfect for any occasion.A delicious and easy-to-make pizza recipe perfect for any occasion. A delicious and easy-to-make pizza recipe perfect for any occasion.',
  ],
  [
    'title' => 'Barbecue Ribs',
    'image' => './images/ribs.jpg',
    'category' => 'Pizza',
    'rating' => '★ ★ ★ ★ ★  5.0',
    'description' => 'A delicious and easy-to-make pizza recipe perfect for any occasion.A delicious and easy-to-make pizza recipe perfect for any occasion. A delicious and easy-to-make pizza recipe perfect for any occasion.',
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

    .poppins-thin {
      font-family: "Poppins", sans-serif;
      font-style: normal;
    }

    .title {
      font-family: "Montserrat", sans-serif;
    }

    .ellipsis {
      display: -webkit-box;
      overflow: hidden;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;

    }

    .ellipsis2 {
      display: -webkit-box;
      overflow: hidden;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;

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
    </div>

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
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </section>
    </section>

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
              <p class="text-gray-600 mt-2 mb-2">A spicy and flavorful rice dish with a blend of Cajun spices.</p>
              <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4">
            <div class="bg-white shadow-md h-[300px]">
              <img src="./images/roast_chick.jpg" alt="Garlic Herb Roast Chicken"
                class="object-cover h-[150px] w-full" />
              <div class="p-4">
                <span class="uppercase text-xs text-gray-500 tracking-wide font-semibold"> Meal</span>
                <h1 class="title uppercase truncate text-lg font-bold text-gray-900 tracking-wide">Garlic Herb Roast
                  Chicken</h1>
                <p class="text-gray-600 text-sm mt-1 mb-1 ellipsis">A spicy and flavorful rice dish with a blend of
                  Cajun spices.
                </p>
                <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
              </div>
            </div>

            <div class="bg-white shadow-md h-[300px]">
              <img src="./images/roast_chick.jpg" alt="Garlic Herb Roast Chicken"
                class="object-cover h-[150px] w-full" />
              <div class="p-4">
                <span class="uppercase text-xs text-gray-500 tracking-wide font-semibold"> Meal</span>
                <h1 class="title uppercase truncate text-lg font-bold text-gray-900 tracking-wide">Garlic Herb Roast
                  Chicken</h1>
                <p class="text-gray-600 text-sm mt-1 mb-1 ellipsis">A spicy and flavorful rice dish with a blend of
                  Cajun spices.
                </p>
                <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="poppins-thin mb-5">
      <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
        <div class="border-l-8 border-orange-500">
          <h1 class="text-4xl font-bold mx-3 text-gray-900">Quick Recipes for Breakfast</h1>
        </div>


        <div class="grid grid-cols-3 gap-8">
          <?php

          foreach ($recipes as $recipe) {
            ?>
            <div class="pt-8 ">
              <img src="<?= htmlspecialchars($recipe['image']) ?>" class="object-cover w-full h-[220px]" />
              <div class="pt-4">
                <span class="text-md text-gray-500 uppercase tracking-wide font-semibold">
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
            <?php
          }
          ?>
        </div>


      </div>
    </section>

  </div>

  <?php
  include('./common/footer.php');

  ?>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const recipes = [
    {
      title: "Veggie Pizza",
      image: "./images/pizza.png",
      category: "Pizza",
      rating: "★ ★ ★ ★ ★  5.0 ",
      description: "A delicious and easy-to-make pizza recipe perfect for any occasion.",
    },
    {
      title: "Garlic Pasta",
      image: "./images/pasta.png",
      category: "Pasta",
      rating: "★ ★ ★ ★ ★  5.0",
      description: "Rich and creamy pasta tossed with roasted garlic and parmesan.",
    },
    {
      title: "Berry Smoothie",
      image: "./images/smoothie.png",
      category: "Drink",
      rating: "★ ★ ★ ★ ★  5.0",
      description: "A healthy and refreshing smoothie with mixed berries and yogurt.",
    },
    {
      title: "Berry Smoothie",
      image: "./images/smoothie.png",
      category: "Drink",
      rating: "★ ★ ★ ★ ★  5.0",
      description: "A healthy and refreshing smoothie with mixed berries and yogurt.",
    },
  ];

  const container = document.getElementById("recipe-container");

  recipes.forEach((recipe) => {
    const card = `
      <div class="swiper-slide bg-white shadow-lg rounded-xl pt-[5rem]">
        <div class="relative -translate-y-16 z-[999] w-full flex justify-center">
          <img
            src="${recipe.image}"
            alt="${recipe.title}"
            class="w-56 h-56 object-cover rounded-full"
          />
        </div>
        <div class="p-6 pt-0 space-y-4 -mt-12">
          <div class="space-y-2">
            <span class="text-sm text-gray-500 uppercase tracking-wide font-semibold">
              ${recipe.category}
            </span>
            <h2
              class="text-xl sm:text-2xl font-bold text-gray-800 uppercase tracking-wide hover:underline hover:decoration-orange-500 hover:text-orange-500 cursor-pointer title"
            >
              ${recipe.title}
            </h2>
            <p class="text-gray-600 text-sm leading-relaxed">
              ${recipe.description}
            </p>
            <div class="flex items-center justify-between text-gray-500">
              <span class="text-yellow-500 font-medium text-sm">${recipe.rating}</span>
            </div>
          </div>
        </div>
      </div>
    `;
    container.innerHTML += card;
  });

  document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.mySwiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 30,
        }
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  });
</script>