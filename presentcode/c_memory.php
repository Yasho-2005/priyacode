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

/* flowchart */
.flowchart {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-family: Arial, sans-serif;
  color: #00e0ff;
  gap: 30px;
}

.flowchart > div {
  padding: 12px 20px;
  border: 2px solid #00e0ff;
  border-radius: 10px;
  text-align: center;
  min-width: 120px;
  box-shadow: 0 0 15px rgba(0, 224, 255, 0.7);
}

.start, .end {
  background: #111;
  font-weight: bold;
}

.decision {
  background: #1a1a1a;
  width: 140px;
  height: 140px;
  transform: rotate(45deg);
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.decision span {
  transform: rotate(-45deg);
  display: inline-block;
  color: #00e0ff;
  font-weight: bold;
}

.branches {
  display: flex;
  justify-content: space-between;
  width: 300px;
  margin-top: 80px;
}

.branches div {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.process {
  background: #222;
  margin-top: 20px;
}

/* Arrows */
.start::after {
  content: '';
  display: block;
  width: 2px;
  height: 40px;
  background: #00e0ff;
  margin: 0 auto;
}

.process::after {
  content: '';
  display: block;
  width: 2px;
  height: 40px;
  background: #00e0ff;
  margin: 0 auto;
}
.flowchart-img {
  max-width: 150%;   /* Don’t exceed container */
  height: auto;      /* Maintain proportions */
  display: block;
  margin: 20px auto; /* Center the image */
  border-radius: 8px; /* Optional rounded corners */
  box-shadow: 0 4px 12px rgba(0,0,0,0.2); /* Add glow */
  padding: 10px;
  border-radius: 10px;
}


/* Small style to make SVG responsive and match dark site */
.flowchart-wrap { width: 100%; display: block; }
.flowchart-svg { width: min(860px, 100%); height: auto; display: block; margin: 0 auto; }
/* tweak for very small screens */
@media (max-width: 520px) {
.flowchart-wrap { width: 100%; display: block; }
.flowchart-svg { width: min(1050px, 100%); height: auto; display: block; margin: 0 auto; }
}


/* flowers */

.flower {
  position: absolute;
  font-size: 24px;
  animation: float 6s ease-in-out infinite;
  opacity: 0.8;
}

.flower1 { top: 20%; left: 10%; }
.flower2 { top: 60%; left: 80%; }
.flower3 { top: 40%; left: 30%; }

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-15px); }
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
            <h5>Memory Management in C</h5>
            <p>When you store data in a program (like variables or arrays), that data is kept in <b>RAM (Random Access Memory)</b> while the program is running. But once you close the program, all the data is lost because RAM is temporary storage.</p>
            <p>For example:</p>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int age;
    printf("Enter your age: ");
    scanf("%d", &age);
    printf("Your age is: %d\n", age);
    return 0;
}</pre>
            </div>
            <p>👉 If you run this program and enter 21, it will display Your age is: 21. <br>
            👉 But if you close the program and reopen it, the age will be gone because it was stored in memory (RAM) temporarily.</p>

            <h4>How File Handling Helps?</h4>
            <p>To store data <b>permanently</b>, we use <b>files on a hard drive</b> instead of RAM.
When we write data to a file, we can open the file later and retrieve the data, even after the program is closed.

This is why file handling is <b>important</b>—it allows us to <b>store and retrieve data across multiple program runs.</b></p>
    

        
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