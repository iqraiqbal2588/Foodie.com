<!DOCTYPE html>
<html>
<head>
  <title>Recipe Website - Feedback</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Recipe Website</a>
  </nav>

  <!-- Feedback Display -->
  <div class="container mt-5">
    <h2>User Feedback</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Replace this section with code to retrieve feedback from your database or storage mechanism
        $feedbacks = array(
          array('John Doe', 'john@example.com', 'Great recipes!'),
          array('Jane Smith', 'jane@example.com', 'Loved the website design.'),
          array('Mike Johnson', 'mike@example.com', 'The recipes are delicious.'),
        );

        foreach ($feedbacks as $feedback) {
          echo '<tr>';
          echo '<td>' . $feedback[0] . '</td>';
          echo '<td>' . $feedback[1] . '</td>';
          echo '<td>' . $feedback[2] . '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
