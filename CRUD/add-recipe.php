<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Add Recipe</title>
</head>

<body>
  <div class="container">
    <h1>Add Recipe</h1>

    <?php
    // Database configuration
    

    // Connect to the database
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $title = $_POST['title'];
      $image = $_POST['image'];
      $description = $_POST['description'];
      $rating = $_POST['rating'];
      $cuisine = $_POST['cuisine'];
      $ingredients = $_POST['ingredients'];
      $diet = $_POST['diet'];
      // Insert the recipe into the database
      $stmt = $conn->prepare("INSERT INTO recipes (title, image, description, rating, cuisine, ingredients, diet)
                             VALUES (:title, :image, :description, :rating, :cuisine, :ingredients, :diet)");

      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':image', $image);
      $stmt->bindParam(':description', $description);
      $stmt->bindParam(':rating', $rating);
      $stmt->bindParam(':cuisine', $cuisine);
      $stmt->bindParam(':ingredients', $ingredients);
      $stmt->bindParam(':diet', $diet);

      $stmt->execute();

      echo '<div class="alert alert-success">Recipe added successfully!</div>';
    }
    ?>

    <form method="post" action="">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter recipe title" required>
      </div>
      <div class="form-group">
        <label for="image">Image URL:</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Enter image URL">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter recipe description"></textarea>
      </div>
      <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter recipe rating" step="0.1" min="0" max="5" required>
      </div>
      <div class="form-group">
        <label for="cuisine">Cuisine:</label>
        <input type="text" class="form-control" id="cuisine" name="cuisine" placeholder="Enter recipe cuisine">
      </div>
      <div class="form-group">
        <label for="ingredients">Ingredients:</label>
        <textarea class="form-control" id="ingredients" name="ingredients" rows="3" placeholder="Enter recipe ingredients"></textarea>
      </div>
      <div class="form-group">
        <label for="diet">Dietary Preferences:</label>
        <input type="text" class="form-control" id="diet" name="diet" placeholder="Enter dietary preferences">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
