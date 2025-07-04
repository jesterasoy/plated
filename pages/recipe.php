<?php
$GET_URL = isset($_GET['meal']) ? htmlspecialchars($_GET['meal']) : '';
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

<body>
    <section>
        <?php
        include '../common/header.php';
        ?>
        <div class="" id="recipe-detail-container">
        </div>
    </section>

    <?php
    include '../common/footer.php';
    ?>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const mealName = urlParams.get('meal') || '';

        if (mealName) {
            fetch(`https://www.themealdb.com/api/json/v1/1/search.php?s=${encodeURIComponent(mealName)}`)
                .then(res => res.json())
                .then(data => {
                    const meal = data.meals[0];

                    console.log(meal);
                    const instructions = meal.strInstructions;
                    const paragraphSplit = instructions.split(/\n\s*\n/);

                    const formattedInstructions = paragraphSplit.map((paragraph, index) => {
                        const cleanParagraph = paragraph.trim().replace(/\n+/g, '<br>');
                        return `
                                    <div class="mb-6">
                                        <p class="text-sm leading-relaxed">${cleanParagraph}</p>
                                    </div>
                                `;
                    }).join('');


                    if (meal) {
                        document.getElementById('recipe-detail-container').innerHTML = `
                           
                    <div>
                     ${meal.strYoutube ? `
                                        <div>
                                            <iframe class="w-full h-[420px] mb-2 shadow-md" 
                                                    src="https://www.youtube.com/embed/${meal.strYoutube.split('v=')[1]}" 
                                                    frameborder="0" allowfullscreen></iframe>
                                            <p class="text-sm text-gray-500 text-end mx-5">
                                                Video source: 
                                                <a href="${meal.strYoutube}" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
                                                    YouTube
                                                </a>
                                            </p>
                                        </div>` : ''
                            }

                    </div>

                    <div class="p-6 max-w-6xl 2xl:max-w-7xl mx-auto">
                        <div class="border-b-2 border-orange-400 w-fit mb-8 pb-2">
                            <h1 class="text-4xl font-extrabold uppercase tracking-wider text-gray-800">${meal.strMeal}</h1>
                        </div>

                        <div class="mb-6 flex flex-wrap gap-3">
                            <span class="inline-block tracking-wide px-3 py-1 bg-gradient-to-r from-orange-400 to-orange-500 text-white uppercase rounded-full text-xs font-semibold shadow-sm">
                                ${meal.strArea}
                            </span>
                            <span class="inline-block tracking-wide px-3 py-1 bg-gradient-to-r from-red-400 to-red-500 text-white uppercase rounded-full text-xs font-semibold shadow-sm">
                                ${meal.strCategory}
                            </span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start mb-10">
                            <div>
                                <img src="${meal.strMealThumb}" 
                                    class="object-cover h-[400px] w-full rounded-xl shadow-lg" />
                            </div>

                           <div>
                                <div class="bg-gradient-to-br from-orange-100 via-yellow-50 to-white border border-orange-300 rounded-xl p-6 shadow-md">
                                    <h2 class="text-xl font-bold mb-3 text-orange-600">Powered by TheMealDB</h2>
                                    <p class="text-sm leading-relaxed text-gray-700 mb-4">
                                        This recipe data is provided for free by 
                                        <a href="https://www.themealdb.com/" target="_blank" class="text-orange-500 underline hover:text-orange-700 font-medium">TheMealDB API</a> — an open-source recipe database where you can explore a lot of meal ideas.
                                    </p>
                                  <div class="flex justify-between align-items-center gap-3">
                                      <a href="https://www.themealdb.com/" target="_blank" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 text-sm rounded-full font-semibold transition">
                                        Visit TheMealDB →
                                    </a>
                                    <a href="${meal.strSource}" target="_blank" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 text-sm rounded-full font-semibold transition">
                                        View Full Recipe | Source
                                    </a>
                                  </div>
                                </div>
                               
                           </div>
                        </div>

                        <div class="max-w-3xl">
                            <h2 class="text-3xl font-bold uppercase mb-6 tracking-wide text-gray-800">Ingredients</h2>
                            ${Object.keys(meal)
                                .filter(key => key.startsWith('strIngredient') && meal[key])
                                .map(key => {
                                    const index = key.replace('strIngredient', '');
                                    const measure = meal[`strMeasure${index}`] || 'N/A';
                                    return `
                                            <li class="mb-2 text-orange-500">
                                                <span class="font-semibold text-black">${meal[key]}</span> - 
                                                <span class="text-gray-600">${measure}</span>
                                            </li>
                                            `;
                                }).join('')}

                        </div>
                        
                        <div class="max-w-3xl pt-5">
                            <h2 class="text-3xl font-bold uppercase mb-6 tracking-wide text-gray-800">Instructions</h2>
                            ${formattedInstructions}
                        </div>
                    </div>


                        `;
                    } else {
                        document.getElementById('recipe-detail-container').innerHTML = '<p>Recipe not found.</p>';
                    }
                })
                .catch(error => {
                    console.error('Error fetching recipe:', error);
                    document.getElementById('recipe-detail-container').innerHTML = '<p>Error loading recipe.</p>';
                });
        } else {
            document.getElementById('recipe-detail-container').innerHTML = '<p>No recipe selected.</p>';
        }
    </script>
</body>

</html>