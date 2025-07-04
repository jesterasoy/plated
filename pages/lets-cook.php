<?php
$GET_URL = isset($_GET['category']) ? $_GET['category'] : 'All';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../images/site-logo.png" type="image/png" />
    <meta name="description" content="A simple recipe app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
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
    <title>Plated | <?= htmlspecialchars($GET_URL) ?></title>
</head>

<body class="poppins-thin">
    <?php include '../common/header.php'; ?>

    <section class="">

        <div class="relative">
            <img src="../images/banner.jpg" alt="Banner" class="object-cover h-[250px] w-full" />
            <div class="absolute top-0 left-0 h-[250px] w-full bg-gradient-to-b from-black/10 to-black/50"></div>
        </div>

        <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
            <div class="text-center mb-10 text-black pt-5">
                <h1 class="title uppercase text-6xl font-bold">
                    <?= htmlspecialchars($GET_URL) ?>
                </h1>
                <p class="pt-5 lora">Start your culinary journey by choosing a recipe or an ingredient. Discover
                    dishes
                    you'll love and ingredients that bring them to life."</p>
            </div>
            <div id="category-container" class=""></div>
        </div>
    </section>

    <section>
        <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto ">
            <div class="grid grid-cols-1 md:grid-cols-3  gap-8" id="card-display">

            </div>

        </div>
    </section>

    <script>
        const cardDisplay = document.getElementById('card-display');
        const urlParams = new URLSearchParams(window.location.search);
        const selectedCategory = urlParams.get('category') || 'All';

        fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?c=${encodeURIComponent(selectedCategory)}`)
            .then(res => res.json())
            .then(data => {
                const meals = data.meals || [];

                if (meals.length === 0) {
                    cardDisplay.innerHTML = `<p class="text-center text-gray-500">No recipes found for "${selectedCategory}".</p>`;
                    return;
                }

                return Promise.all(
                    meals.map(meal =>
                        fetch(`https://www.themealdb.com/api/json/v1/1/lookup.php?i=${meal.idMeal}`)
                            .then(res => res.json())
                            .then(detailData => detailData.meals[0]),
                    )
                );
            })
            .then(fullDetails => {
                if (!fullDetails) return;

                const cardsHTML = fullDetails.map(meal => `
                    <div class="card pt-5">
                        <img src="${meal.strMealThumb}" class="object-cover h-[300px] w-full" />
                        <div class="p-4 shadow-sm">
                        <span class="text-sm uppercase text-gray-500 font-semibold tracking-wide">${selectedCategory}</span>
                        <a href="recipe.php?meal=${(meal.strMeal)}">
                            <h1 class="title font-bold uppercase tracking-wide text-lg truncate hover:underline hover:text-orange-500">${meal.strMeal}</h1>
                        </a>
                        <p class="text-gray-600 text-sm mt-1 mb-1 line-clamp-3">
                            ${meal.strInstructions.slice(0, 150)}...
                        </p>
                        <span class="text-yellow-500 font-medium text-sm">★ ★ ★ ★ ★ 5.0</span>
                        </div>
                    </div>
                    `).join("");

                cardDisplay.innerHTML = cardsHTML;
            })
            .catch(error => {
                console.error('Error fetching recipes:', error);
                cardDisplay.innerHTML = `<p class="text-center text-red-500">Error loading recipes.</p>`;
            });


    </script>

    <script>
        const storedCategories = localStorage.getItem('all-categories');
        if (storedCategories) {
            const categories = JSON.parse(storedCategories);
            const categoryContainer = document.getElementById('category-container');
            const selectedCategory = new URLSearchParams(window.location.search).get('category');

            const categoryButtonsHTML = categories.map(category => {
                const isActive = selectedCategory === category.strCategory;
                const baseClasses = " gap-10 bg-white border border-gray-300 rounded-full px-4 py-2 text-gray-700 hover:bg-orange-500 hover:text-white transition duration-300";
                const activeClasses = "bg-orange-500 text-black border-orange-500 pointer-events-none cursor-not-allowed";

                const classList = isActive ? `${baseClasses} ${activeClasses}` : baseClasses;
                const href = isActive ? "#" : `?category=${encodeURIComponent(category.strCategory)}`;
                const onClick = isActive ? `onclick="event.preventDefault()"` : "";

                return `<a href="${href}" ${onClick} class="${classList}">${category.strCategory}</a>`;
            }).join("");

            categoryContainer.innerHTML = `
        <div class="flex gap-4  flex-wrap justify-center mt-4">
          ${categoryButtonsHTML}
        </div>
      `;
        }
    </script>
</body>

</html>