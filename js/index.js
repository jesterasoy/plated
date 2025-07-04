

//FOR 1ST SECTION DATA
const recipes = [
  {
    title: 'Veggie Pizza',
    image: './images/pizza.png',
    category: 'Pizza',
    rating: '★ ★ ★ ★ ★  5.0 ',
    description:
      'A delicious and easy-to-make pizza recipe perfect for any occasion.'
  },
  {
    title: 'Garlic Pasta',
    image: './images/pasta.png',
    category: 'Pasta',
    rating: '★ ★ ★ ★ ★  5.0',
    description:
      'Rich and creamy pasta tossed with roasted garlic and parmesan.'
  },
  {
    title: 'Berry Smoothie',
    image: './images/smoothie.png',
    category: 'Drink',
    rating: '★ ★ ★ ★ ★  5.0',
    description:
      'A healthy and refreshing smoothie with mixed berries and yogurt.'
  },
  {
    title: 'Berry Smoothie',
    image: './images/smoothie.png',
    category: 'Drink',
    rating: '★ ★ ★ ★ ★  5.0',
    description:
      'A healthy and refreshing smoothie with mixed berries and yogurt.'
  }
]

const container = document.getElementById('recipe-container')

recipes.forEach(recipe => {
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
    `
  container.innerHTML += card
})

document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    breakpoints: {
      1280: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    }
  })
})
