<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>

<?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php'?>
        <div class="content">
            <h3>While loop in C</h3>
            <p>A <b>while loop</b> in programming is used to execute a block of code repeatedly as long as a given condition remains true. The loop checks the condition before executing the code block.</p>

            <h4>Flowchart:-</h4>
             <div style="text-align: center;">
  <img class="flowchart-img" src="img/while.png" alt="If-Else Flowchart" height="300px" width="500px">
</div>

            <h4>Syntax:</h4>
            <div class="syntax-box">
<pre>
while(condition){
    //code to be executed
}
</pre>
            </div>

            <h5>Example 1:</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    while (i <= 10){
        printf("%d\n", i);
        i++;
    }

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
<div class="syntax-box">
    <pre>
1
2
3
4
5
6
7
8
9
10</pre>
</div>

 <div class="code-navigation">
  <a href="animation/while1-10.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>
<h5>Example 2: Multiplication Table using while loop in C</h5>
<div class="syntax-box">

    <pre>
#include &lt;stdio.h&gt;

int main() {
    int num, i = 1;

    printf("Enter a number: ");
    scanf("%d", &num);

    while (i <= 10){
        printf("%d x %d = %d\n", num, i, num * i);
        i++;
    }

    return 0;
}</pre>
</div>
<h4>Output:</h4>
<div class="syntax-box">
<pre>
Enter a number: 5

5 x 1 = 5
5 x 2 = 10
5 x 3 = 15
5 x 4 = 20
5 x 5 = 25
5 x 6 = 30
5 x 7 = 35
5 x 8 = 40
5 x 9 = 45
5 x 10 = 50
</pre></div>


<h5>Example 3: Star printing using while loop in C</h5>
<div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    while (i <= 10){
        printf("* \n", i);
        i++;
    } 

    return 0;
}</pre>
</div>
<h4>Output:</h4>

<div class="syntax-box">
    <pre>
* 
* 
* 
* 
* 
* 
* 
* 
* 
*</pre>
</div>

<h5>Example 4. Water Filling with while loop</h5>

<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

int main() {
    int waterLevel = 0;

    <span id="whileBlock">while (waterLevel &lt; 5) {
        printf("Filling...");
        waterLevel++;
    }</span>

    return 0;
}
    </pre>
</div>
 <div class="code-navigation">
  <a href="animation/whileloop.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <h5>Example 5: 🥦 Adding veggies to Cart using while loop</h5>
  <div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

int main() {
    int cart = 0;

    <span id="whileCode">while (cart &lt; 5) {
        printf("Veggie added!");
        cart++;
    }</span>

    return 0;
}
    </pre>
  </div>

   <div class="code-navigation">
  <a href="animation/whileloop2.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <button class="quiz-btn">
  <i class="fas fa-question-circle"></i> Quick Quiz
</button>

<div class="quiz-container">
  <div class="quiz-question">
    <strong>What is the output of this C code?</strong><br><br>
    <pre>
int i = 0;

while(i < 3);
{
    printf("Hello ");
    i++;
}
    </pre>
  </div>

  <div class="quiz-option" onclick="checkAnswer(this, false)">A. Hello Hello Hello</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">B. Nothing</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">C. Infinite loop</div>
  <div class="quiz-option" onclick="checkAnswer(this, true)">D. Syntax error or unexpected behavior</div>
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
<?php include 'includes/footer.php';?>

</body>



</html>