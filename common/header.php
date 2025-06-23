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
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .poppins-thin {
      font-family: "Poppins", sans-serif;
      font-style: normal;
    }

    .title {
      font-family: "Montserrat", sans-serif;
    }
  </style>
  <title>Plated | Home</title>
</head>

<body>
  <header class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
    <div class="flex justify-between items-center">
      <h1 class="font-bold text-2xl">
        <span class="text-orange-500">p</span>lated.
      </h1>

      <div class="flex items-center space-x-4">
        <div class="relative w-full max-w-lg">
          <i class="bi-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 top-4"></i>
          <input type="text" placeholder="Search recipes..."
            class="w-full border border-gray-300 rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" />
        </div>
        <div class="flex gap-4 text-lg text-gray-600">
          <i class="bi-github hover:text-black cursor-pointer"></i>
          <i class="bi-twitter hover:text-blue-500 cursor-pointer"></i>
          <i class="bi-instagram hover:text-pink-500 cursor-pointer"></i>
          <i class="bi-facebook hover:text-blue-700 cursor-pointer"></i>
        </div>
      </div>
    </div>
    <div class="flex gap-4 pt-2" id="category-buttons"></div>
  </header>

  <script>
    const categories = [
      {
        name: "Meal Type",
        items: ["Breakfast", "Lunch", "Dinner", "Snack", "Dessert"],
      },
      {
        name: "Cuisine",
        items: ["Italian", "Mexican", "Indian", "Chinese", "American"],
      },
      {
        name: "Dish Type",
        items: ["Pizza", "Pasta", "Salad", "Soup", "Drink"],
      },
      {
        name: "Dietary Reference",
        items: ["Vegetarian", "Vegan", "Gluten-Free", "Keto", "Paleo"],
      },
      {
        name: "Occasion Meals",
        items: ["Birthday", "Anniversary", "Holiday", "Party", "Everyday"],
      },
    ];

    const categoryButtons = document.getElementById("category-buttons");
    let allCategoryBlocks = '';

    categories.forEach((category) => {
      const categoryBlock = `
    <div class="relative group">
      <p class="font-medium tracking-wide uppercase text-sm hover:text-orange-500 mb-2 cursor-pointer">
        ${category.name}
      </p>
      <div class="absolute left-0 top-4 mt-2 w-40 bg-white shadow-lg  opacity-0 group-hover:opacity-100 group-hover:visible invisible transition duration-200 z-50">
        ${category.items
          .map(
            (item) => `
              <button class="block w-full text-left cursor-pointer text-sm text-gray-700 hover:bg-gray-100 tracking-wide py-1">
                <p class="p-2" >
                   ${item}
                </p>
              </button>
            `
          )
          .join('')}
      </div>
    </div>
  `;

      allCategoryBlocks += categoryBlock;
    });

    const finalHTML = `
  <div class="flex gap-10">
    ${allCategoryBlocks}
  </div>
`;

    categoryButtons.innerHTML = finalHTML;

  </script>
</body>

</html>