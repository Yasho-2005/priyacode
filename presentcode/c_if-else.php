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
  width: 90%;
  margin-left: 210px;
  margin-top: 20px;
  margin: 20px auto;
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
          
          <!-- <div class="flower flower1">🌸</div>
<div class="flower flower2">🌼</div>
<div class="flower flower3">🌺</div> -->

            <h3>If-Else Statement in C</h3>
            <p>The <b>if-else</b> statement in C is used for decision-making. It allows the program to execute a block of code when a specified condition is <b>true</b> and a different block when the condition is <b>false</b>.</p>
            <h4>Flowchart:-</h4>
<div style="text-align: center;">
  <img class="flowchart-img" src="img/if-else12.png" alt="If-Else Flowchart" height="300px" width="500px">
<!-- <div class="flowchart">
  <div class="start">Start</div>

  <div class="decision">
    Condition?
    <div class="branches">
      <div class="yes">
        True
        <div class="process">Statement 1</div>
      </div>
      <div class="no">
        False
        <div class="process">Statement 2</div>
      </div>
    </div>
  </div>

  <div class="end">End</div>
</div> -->
</div>

            <h4>Syntax:</h4>
            <div class="syntax-box">
                if (condition) { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                } else { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is false <br>
                }
            </div>

            <h3>Corporate Example</h3>
            <div class="syntax-box">
              <pre>
#include &lt;stdio.h&gt;
int main() {
    int credit_score;
    float income;

    printf("Enter credit score: ");
    scanf("%d", &credit_score);

    printf("Enter annual income: ");
    scanf("%f", &income);

    if (credit_score >= 750 && income >= 300000) {
        printf("Loan Approved ✅");
    } else {
        printf("Loan Rejected ❌");
    }

    return 0;
}</pre>
            </div>
            <h5>Example 1: Bulb ON/OFF example</h5>
            <div class="syntax-box">
              <pre>
#include &lt;stdio.h&gt; 
int main() {
    int switchState = 1;       // 1 = ON, 0 = OFF

    if (switchState == 1) {
        printf("Light is ON");
    } else {
        printf("Light is OFF");
    }
    return 0;
}</pre>
            </div>
                              <div class="code-navigation">
  <a href="animation/ifelse.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

            <h5>Example 2: Check if a Number is Even or Odd</h5>
            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp; int num; <br><br>

                &nbsp;&nbsp;&nbsp; printf("Enter a number: "); <br>
                &nbsp;&nbsp;&nbsp; scanf("%d", &num); <br><br>

                &nbsp;&nbsp;&nbsp; if (num % 2 == 0) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("%d is even.", num); <br>
                &nbsp;&nbsp;&nbsp; } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("%d is odd.", num); <br>
                &nbsp;&nbsp;&nbsp; } <br><br>

                &nbsp;&nbsp;&nbsp; return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter a number: 10 <br>
                10 is even.
            </div>
                          <div class="code-navigation">
  <a href="animation/even_odd.html" target="_blank" class="nav-btn try-live-btn">💡Try Live</a>
  </div>

            <h5>Example 3: Check if a Person is Eligible to Vote</h5>
            <p>In this example, we check whether a person is eligible to vote based on their age. A person is eligible to vote if their age is 18 or above.</p>

            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp;&nbsp; int age; <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter your age: "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; scanf("%d", &amp;age); <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; if (age &gt;= 18) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You are eligible to vote."); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You are not eligible to vote."); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter your age: 20 <br>
                You are eligible to vote.
            </div>
              <div class="code-navigation">
  <a href="animation/check-age.html" target="_blank" class="nav-btn try-live-btn">💡Try Live</a>
  </div>

            <h3>If-Else-If Statement in C</h3>
            <p>As above following examples, the <i>if</i> code is printed when the condition is true and the <i>else</i> code is printed when the condition is false.</p>
            <p>But what if, we want multiple conditions? There we use If-Else-If to work on multiple conditions.</p>
            <h4>Syntax:</h4>
            <div class="syntax-box">
                if (condition) { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                } else if (condition){ <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                } else if (condition){ <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is true <br>
                }  <br>
                . <br>
                . <br>
                . <br>
                else { <br>
                &nbsp;&nbsp;&nbsp; // Code to execute if the condition is false <br>
                }
            </div>
            <h5>Example 3: Check Positive, Negative, or Zero</h5>
            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp; int num; <br><br>

                &nbsp;&nbsp;&nbsp; printf("Enter a number: "); <br> 
                &nbsp;&nbsp;&nbsp; scanf("%d", &num); <br><br>

                &nbsp;&nbsp;&nbsp; if (num > 0) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("The number is positive."); <br>
                &nbsp;&nbsp;&nbsp; } else if (num < 0) { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("The number is negative."); <br>
                    &nbsp;&nbsp;&nbsp; } else { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("The number is zero."); <br>
                    &nbsp;&nbsp;&nbsp; } <br><br>

                    &nbsp;&nbsp;&nbsp; return 0; <br>
                    }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter a number: -5 <br>
                The number is negative.
            </div>
            <h4>Explanation :</h4>
            <p>In the first condition if the number is greater than zero then it will print.</p>
            <p>If the number is not greater than zero then it will go onto the <i>else-if</i> to check whether the number is less than zero.</p>
            <p>If number is not greater than zero nor less then all the condition will be false and the <i>else</i> code will be printed.</p>

            <h5>Example 4: Check Grade according to given marks.</h5>
            <p>This program checks the grade of a student based on marks entered by the user, using if-else if statements and logical operators.</p>

            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp;&nbsp; int marks; <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter your marks (0-100): "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; scanf("%d", &amp;marks); <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; if (marks &gt;= 90 && marks &lt;= 100) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: A"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 80 && marks &lt; 90) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: B"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 70 && marks &lt; 80) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: C"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 60 && marks &lt; 70) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: D"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else if (marks &gt;= 0 && marks &lt; 60) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Grade: F (Fail)"); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } else { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Invalid marks entered! Please enter a value between 0 and 100."); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } <br>
                return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter your marks: 85 <br>Grade: B <br><br>  
                Enter your marks: 150 <br>
                Invalid marks entered! Please enter a value between 0 and 100.
            </div>
                          <div class="code-navigation">
  <a href="animation/check_grade.html" target="_blank" class="nav-btn try-live-btn">💡Try Live</a>
  </div>

              <h5>Example 5: Traffic Lights.</h5>
            <div class="syntax-box">
              <pre>
#include &lt;stdio.h&gt;
int main() {

    char color[] = "green";

    if (strcmp(color, "green") == 0) {
        printf("Go");
    } else if (strcmp(color, "yellow") == 0) {
        printf("Slow Down");
    } else {
        printf("Stop");
    }

    return 0;
}</pre>
            </div>
                          <div class="code-navigation">
  <a href="animation/ifelseif.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

<!-- Include Font Awesome CDN in your <head> -->
  <!-- Button -->
   <div class="code-navigation">
<button class="quiz-btn">
  <i class="fas fa-question-circle"></i> Quick Quiz
</button>
</div>      
<div class="quiz-container">
  <div class="quiz-question">
    <strong>What will be the output of the following C code?</strong><br><br>
    <pre>
int a = 5, b = 10;

if (a > b)
    if (a > 0)
        printf("A is greater");
else
    printf("B is greater");
    </pre>
  </div>
  
  <div class="quiz-option" onclick="checkAnswer(this, false)">A. A is greater</div>
  <div class="quiz-option" onclick="checkAnswer(this, true)">B. B is greater</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">C. No output</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">D. Compilation error</div>
</div>

<div class="fun-fact-box">
  <div class="fun-fact-text">
    <h3>💡 Fun Fact about C</h3>
    <p>
      Dennis Ritchie, the creator of C, once said that mastering 
      <b>if-else logic</b> was one of the trickiest parts of building 
      early compilers. What seems easy today was once a real challenge!
    </p>
  </div>
</div>
  <!-- <div class="fun-fact-animation">
  <lottie-player 
      src="https://assets7.lottiefiles.com/packages/lf20_teaAovRePh.json"  
      background="transparent"  
      speed="1"  
      style="width: 250px; height: 250px;"  
      loop autoplay>
  </lottie-player>
  </div> -->


        
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