<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Recipe Listing</title>
</head>

<body>
  <div class="container">
    <h1>Recipe Listing</h1>

    <form method="get" action="">
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="search">Search:</label>
          <input type="text" class="form-control" id="search" name="search" placeholder="Search recipes">
        </div>
        <div class="col-md-6 mb-3">
          <label for="filter">Filter:</label>
          <select class="form-control" id="filter" name="filter">
            <option value="">All</option>
            <option value="cuisine">Cuisine</option>
            <option value="ingredients">Ingredients</option>
            <option value="diet">Dietary Preferences</option>
          </select>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Apply</button>
    </form>

    <div class="row mt-4">
      <?php
      // Mock data for recipes
      $recipes = [
        [
          'title' => 'Pizza',
          'image' => 'pizza.jpg',
          'description' => 'Delicious pizza topped with various ingredients.',
          'rating' => 4.5,
          'cuisine' => 'Italian',
          'ingredients' => ['Dough', 'Tomato sauce', 'Cheese', 'Toppings'],
          'diet' => ['Vegetarian']
        ],
        // Add more recipe data here...
      ];

      // Filter recipes based on search and filter criteria
      $search = isset($_GET['search']) ? $_GET['search'] : '';
      $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

      $filteredRecipes = [];

      foreach ($recipes as $recipe) {
        if (strpos(strtolower($recipe['title']), strtolower($search)) !== false) {
          if (empty($filter) || $filter === 'cuisine' || $filter === 'ingredients' || $filter === 'diet') {
            $filteredRecipes[] = $recipe;
          }
        }
      }

      // Display the filtered recipes
      foreach ($filteredRecipes as $recipe) {
        ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="<?php echo $recipe['image']; ?>" class="card-img-top" alt="<?php echo $recipe['title']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $recipe['title']; ?></h5>
              <p class="card-text"><?php echo $recipe['description']; ?></p>
              <p class="card-text">
                <strong>Cuisine:</strong> <?php echo $recipe['cuisine']; ?><br>
                <strong>Ingredients:</strong> <?php echo implode(', ', $recipe['ingredients']); ?><br>
                <strong>Dietary Preferences:</strong> <?php echo implode(', ', $recipe['diet']); ?>
              </p>
              <p class="card-text">
                <strong>Rating:</strong> <?php echo $recipe['rating']; ?>/5
              </p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
