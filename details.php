<?php

  include('config/db_connect.php');

  // Delete Pizza
  if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    // Create SQL
    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    // Delete pizza from database and check
    if(mysqli_query($conn, $sql)){
      // Success
      header('Location: index.php');
    } else {
      // Error
      echo 'Query error: ' . mysqli_error($conn);
    }
  }

  // Check GET request id param
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create SQL
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // Get query results
    $result = mysqli_query($conn, $sql);

    // Fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    // Free result from memory
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);
  }

?>

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php'); ?>

  <div class="container center grey-text">

    <?php if($pizza): ?>
    
      <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
      <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
      <p><?php echo date($pizza['created_at']); ?></p>
      <h5>Ingredients:</h5>
      <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

      <!-- DELETE FORM -->
      <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
        <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
      </form>

    <?php else: ?>

      <h5>No such pizza exists</h5>

    <?php endif; ?> 

  </div>

  <?php include('templates/footer.php'); ?>

</html>