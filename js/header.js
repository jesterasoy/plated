const categoryButtons = document.getElementById('category-buttons')

const urlParams = new URLSearchParams(window.location.search)
const selectedCategory = urlParams.get('category')

if (!selectedCategory) {
  fetch('https://www.themealdb.com/api/json/v1/1/categories.php')
    .then(res => res.json())
    .then(data => {
      const categories = data.categories.slice(0, 5)

      const allCategoryBlocks = `
          <div class="relative group">
            <p class="font-medium tracking-wide uppercase text-sm hover:text-orange-500 mb-2 cursor-pointer">
              Categories
            </p>
            <div class="absolute left-0 top-4 mt-2 w-40 bg-white shadow-lg opacity-0 group-hover:opacity-100 group-hover:visible invisible transition duration-200 z-50">
              ${categories
                .map(
                  item => `
                    <a href="./pages/lets-cook.php?category=${encodeURIComponent(
                      item.strCategory
                    )}" class="block w-full text-left text-sm text-gray-700 hover:bg-gray-100 tracking-wide py-1">
                      <p class="p-2">${item.strCategory}</p>
                    </a>
                  `
                )
                .join('')}
            </div>
          </div>
        `

      categoryButtons.innerHTML = `
          <div class="flex gap-10 flex-wrap">
            ${allCategoryBlocks}
          </div>
        `
    })
    .catch(error => {
      console.error('Error fetching categories:', error)
      categoryButtons.innerHTML =
        "<p class='text-red-500'>Failed to load categories.</p>"
    })
} else {
  categoryButtons.innerHTML = ''
}
