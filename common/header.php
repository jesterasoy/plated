<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="./images/site-logo.png" type="image/png" />
  <meta name="description" content="A simple recipe app" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap");

    .poppins-thin {
      font-family: "Poppins", sans-serif;
    }

    .title {
      font-family: "Montserrat", sans-serif;
    }
  </style>
  <title>Plated | Home</title>
</head>

<body class="poppins-thin">
  <div id="header-container" class="transition-all duration-200 ease-in-out">
    <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
      <div class="flex justify-between items-center">
        <a href="../index.php" class="font-bold text-2xl">
          <span class="text-orange-500">p</span>lated.
        </a>

        <div class="flex items-center space-x-4">
          <div class="relative w-full max-w-lg">
            <i class="bi bi-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input type="text" placeholder="Search recipes..."
              class="w-full border border-gray-300 rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" />
          </div>
          <div class="flex gap-4 text-lg text-gray-600">
            <i class="bi bi-github hover:text-black cursor-pointer"></i>
            <i class="bi bi-twitter hover:text-blue-500 cursor-pointer"></i>
            <i class="bi bi-instagram hover:text-pink-500 cursor-pointer"></i>
            <i class="bi bi-facebook hover:text-blue-700 cursor-pointer"></i>
          </div>
        </div>
      </div>

      <div class="flex gap-4 pt-2" id="category-buttons"></div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const categoryButtons = document.getElementById('category-buttons');
      const urlParams = new URLSearchParams(window.location.search);
      const selectedCategory = urlParams.get('category');

      if (!selectedCategory) {
        fetch('https://www.themealdb.com/api/json/v1/1/categories.php')
          .then(res => res.json())
          .then(data => {
            const categories = data.categories.slice(0, 5);
            localStorage.setItem('all-categories', JSON.stringify(data.categories));

            const dropdownMenu = `
              <div class="relative group">
                <p class="font-medium tracking-wide uppercase text-sm hover:text-orange-500 mb-2 cursor-pointer">
                  Categories
                </p>
                <div class="absolute left-0 top-full mt-1 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 group-hover:visible invisible transition duration-200 z-50">
                  ${categories.map(item => `
                    <a href="./pages/lets-cook.php?category=${encodeURIComponent(item.strCategory)}"
                      class="block w-full text-sm text-gray-700 hover:bg-gray-100 tracking-wide px-4 py-2">
                      ${item.strCategory}
                    </a>
                  `).join('')}
                </div>
              </div>
            `;

            categoryButtons.innerHTML = `<div class="flex gap-10 flex-wrap">${dropdownMenu}</div>`;
          })
          .catch(error => {
            console.error('Error fetching categories:', error);
            categoryButtons.innerHTML = `<p class="text-red-500">Failed to load categories.</p>`;
          });
      } else {
        categoryButtons.innerHTML = '';
      }


    });
  </script>
</body>

</html>