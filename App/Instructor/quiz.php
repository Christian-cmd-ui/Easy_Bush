<?php 
  # Header
  $course = array('name' => "Intro to Python");
  $title = $course['name']." - EasyBosh";
  include "inc/Header.php";
?>

<div class="container">
  <!-- NavBar & Profile-->
  <?php include "inc/NavBar.php";?>

  <div class="quiz-section mt-5">
    <h2><?php echo $course['name']; ?> - Quiz</h2>

    <?php 
      // Quiz question and options
      $question = "Which of the following is a correct variable name in Python?";
      $options = array(
        "1" => "2variable", 
        "2" => "variable_name", 
        "3" => "variable-name", 
        "4" => "variable name"
      );
      $correct_answer = "2"; // Correct answer (variable_name)

      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $user_answer = $_POST['quiz_option'];

        if ($user_answer == $correct_answer) {
          echo "<div class='alert alert-success'>Correct! Well done.</div>";
        } else {
          echo "<div class='alert alert-danger'>Incorrect! The correct answer is 'variable_name'.</div>";
        }
      }
    ?>

    <form action="" method="POST">
      <h5><?php echo $question; ?></h5>

      <?php foreach ($options as $key => $value) { ?>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="quiz_option" id="option<?php echo $key; ?>" value="<?php echo $key; ?>" required>
          <label class="form-check-label" for="option<?php echo $key; ?>">
            <?php echo $value; ?>
          </label>
        </div>
      <?php } ?>

      <button type="submit" class="btn btn-primary mt-3">Submit Answer</button>
    </form>

    <div class="d-flex justify-content-between mt-5">
      <a href="Courses-Enrolled.php?course_id=435&chapter=1" class="btn btn-secondary">Previous</a>
      <a href="Courses-Enrolled.php?course_id=435&chapter=1" class="btn btn-success">Next</a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include "inc/Footer.php"; ?>
