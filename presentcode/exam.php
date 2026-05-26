<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>
<script>
  VanillaTilt.init(document.querySelectorAll(".exam-card"), {
    max: 10,
    speed: 400,
    glare: true,
    "max-glare": 0.2,
  });
</script>

    <style>
        .exam{
            width: 85vw !important;
        }
    </style>
</head>

<body>

<?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <div class="content exam">
            <div class="exam-container">
            <h2>Welcome, <?php echo $_SESSION['user']['name']; ?>!</h2>
  <h2>Select a Subject to</h2>
  <div class="card-wrapper">
    <!-- C Language Card -->
    <a href="questions.php?lang=c" class="exam-card c-card">
      <div class="mascot mascot-c">👨‍💻</div>
      <div class="card-content">
        <h3>C Language</h3>
        
      </div>
    </a>

    <!-- C++ Card -->
    <a href="exam_cpp.php" class="exam-card cpp-card">
      <div class="mascot mascot-cpp">🤖</div>
      <div class="card-content">
        <h3>C++</h3>
        
      </div>
    </a>
    <a href="exam_cpp.php" class="exam-card cpp-card">
      <div class="mascot mascot-cpp">🤖</div>
      <div class="card-content">
        <h3>C++</h3>
        
      </div>
    </a>
    <a href="exam_cpp.php" class="exam-card cpp-card">
      <div class="mascot mascot-cpp">🤖</div>
      <div class="card-content">
        <h3>C++</h3>
      </div>
    </a>

    <!-- Add more cards as needed -->
  </div>
</div>

            
</div>
        </div> 
        


    </section>
<?php include 'includes/footer.php';?>

</body>



</html>
