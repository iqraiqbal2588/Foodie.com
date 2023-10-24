<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Recipe Page</title>
</head>

<body>
  <div class="container">
    <h1>Recipe Page</h1>

    <?php
    // Database configuration
    $dbHost = 'localhost';
    $dbName = 'recip';
    $dbUser = 'root';
    $dbPass = '';

    // Connect to the database
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve recipes from the database
    $stmt = $conn->query("SELECT * FROM recipes");
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if there are any recipes
    if (count($recipes) > 0) {
      foreach ($recipes as $recipe) {
        $title = $recipe['title'];
        $description = $recipe['description'];
        $cuisine = $recipe['cuisine'];
        $ingredients = $recipe['ingredients'];
        $instructions = $recipe['instructions'];
    ?>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $title; ?></h5>
                <p class="card-text"><?php echo $description; ?></p>
                <p class="card-text">Cuisine: <?php echo $cuisine; ?></p>
                <p class="card-text">Ingredients: <?php echo $ingredients; ?></p>
                <p class="card-text">Instructions: <?php echo $instructions; ?></p>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo '<p>No recipes found.</p>';
    }

    // Close the database connection
    $conn = null;
    ?>

  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
