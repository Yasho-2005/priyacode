<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <title>C-tutorial</title>
    <style>
.quiz-container {
  background-color: #1e1e2f;
  color: #a8ff60;
  padding: 20px;
  border-radius: 10px;
  width: fit-content;
  margin-left: 210px;
  margin-top: 20px;
}
.quiz-question {
  margin-bottom: 10px;
}
.quiz-option {
  background-color: #2d2d44;
  border: 2px solid #444;
  color: white;
  padding: 10px;
  margin: 5px 0;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s ease;
}
.quiz-option.correct {
  background-color: #28a745; /* green */
}
.quiz-option.wrong {
  background-color: #dc3545; /* red */
}

/* table  */
.section {
    margin: 40px auto;
    padding: 20px;
    /* border: 1px solid cyan;
    border-radius: 12px;
    background-color: #0f1a2b; */
    max-width: 1000px;
    /* box-shadow: 0 0 20px rgba(0, 255, 255, 0.2); */
}

.section h2 {
    color: #f982ff;
    font-size: 24px;
    margin-bottom: 10px;
}

.section .description {
    color: #b0e0ff;
    margin-bottom: 20px;
}

.glow-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 16px;
    box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
}

.glow-table th,
.glow-table td {
    border: 1px solid #00ffff;
    padding: 12px 16px;
    text-align: left;
    vertical-align: top;
    color: #ffffff;
}

.glow-table thead {
    background-color: #162c45;
    color: #00ffff;
}

.glow-table tbody tr:hover {
    background-color: #1e3a5c;
    transition: background 0.3s;
}

</style>
<link rel="stylesheet" href="style.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body>

<?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php'?>

        <div class="content">
                <h3>Data Types in C</h3>
    <p class="description">
        C supports various data types categorized as basic, derived, enumeration, and void. These types determine the kind and size of data a variable can hold.
    </p>

 <div class="section">


    <table class="glow-table">
        <thead>
            <tr>
                <th>Category</th>
                <th>Data Type</th>
                <th>Size / Range</th>
            </tr>
        </thead>
        <tbody>
            <!-- Basic Data Types -->
            <tr>
                <td rowspan="4">Basic</td>
                <td>int</td>
                <td>4 bytes <br> -2,147,483,648 to 2,147,483,647</td>
            </tr>
            <tr>
                <td>float</td>
                <td>4 bytes <br> ~±3.4e±38 (6 decimal digits)</td>
            </tr>
            <tr>
                <td>char</td>
                <td>1 byte <br> -128 to 127 or 0 to 255</td>
            </tr>
            <tr>
                <td>double</td>
                <td>8 bytes <br> ±1.7e±308 (15 decimal digits)</td>
            </tr>

            <!-- Derived Data Types -->
            <tr>
                <td rowspan="4">Derived</td>
                <td>array</td>
                <td>Collection of similar data types</td>
            </tr>
            <tr>
                <td>pointer</td>
                <td>Stores address of another variable (4 or 8 bytes)</td>
            </tr>
            <tr>
                <td>structure</td>
                <td>Collection of variables of different types</td>
            </tr>
            <tr>
                <td>union</td>
                <td>Shares memory between members (size of largest member)</td>
            </tr>

            <!-- Enumeration -->
            <tr>
                <td>Enumeration</td>
                <td>enum</td>
                <td>Used to define named integer constants</td>
            </tr>

            <!-- Void -->
            <tr>
                <td>Void</td>
                <td>void</td>
                <td>Represents no value / no return type</td>
            </tr>

            <!-- Integer Qualifiers -->
            <tr>
                <td rowspan="4">Integer Qualifiers</td>
                <td>short</td>
                <td>2 bytes <br> -32,768 to 32,767</td>
            </tr>
            <tr>
                <td>long</td>
                <td>8 bytes <br> -9 quintillion to 9 quintillion</td>
            </tr>
            <tr>
                <td>signed</td>
                <td>Allows both positive and negative values</td>
            </tr>
            <tr>
                <td>unsigned</td>
                <td>Only positive values (e.g. 0 to 4,294,967,295 for `unsigned int`)</td>
            </tr>
        </tbody>
    </table>
</div>


        
            <div class="code-navigation">
  <?php if ($prev): ?>
    <a href="<?= $prev ?>" class="nav-btn">&laquo; Prev</a>
  <?php endif; ?>
  
  <?php if ($next): ?>
    <a href="<?= $next ?>" class="nav-btn">Next &raquo;</a>
  <?php endif; ?>
</div>
 
</div>
        </div> 
        


    </section>

    <script>
function checkAnswer(option, isCorrect) {
  const options = option.parentElement.querySelectorAll('.quiz-option');
  options.forEach(opt => opt.classList.remove('correct', 'wrong'));

  if (isCorrect) {
    option.classList.add('correct');
  } else {
    option.classList.add('wrong');
  }
}
</script>
<?php include 'includes/footer.php';?>

</body>



</html>