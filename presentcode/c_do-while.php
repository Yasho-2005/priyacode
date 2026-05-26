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
            <h3>Do while loop in C</h3>
            <p>The <b>do-while loop</b> is an exit-controlled loop, meaning it executes the code block at least once, even if the condition is false. The condition is checked after executing the loop body.</p>

            <h4>Flowchart:- </h4>
            <div style="text-align: center;">
  <img class="flowchart-img" src="img/dowhile.png" alt="If-Else Flowchart" height="300px" width="500px">
</div>

            <h4>Syntax:</h4>
            <div class="syntax-box">
<pre>
do{
    //code to be executed
}while(condition);
</pre>
            </div>

            <h5>Example 1:</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
int main() {
    int i = 1;

    do {
        printf("%d\n", i);
        i++;
    } while (i <= 10);

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
  <a href="animation/dowhile1-10.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>
<h5>Example 2: Multiplication Table using do-while loop in C</h5>
<div class="syntax-box">
<pre>
#include &lt;stdio.h&gt;

int main() {
    int num, i = 1;

    printf("Enter a number: ");
    scanf("%d", &num);

    do {
        printf("%d x %d = %d\n", num, i, num * i);
        i++;
    } while (i <= 10);

    return 0;
}
</pre></div>
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
5 x 10 = 50</pre>
</div>


<h5>Example 3: Star printing using do-while loop in C</h5>
<div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int i = 1;

    do {
        printf("* \n", i);
        i++;
    } while (i <= 10);

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

<h5>Example 4: Eating Veggies with do-while loop</h5>
<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

int main() {
    int isFull = 0;
    <span id="line1">do {</span>
        <span id="line2">printf("Eating veggie...");</span>
        <span id="line3">isFull++;</span>
    <span id="line4">} while (isFull &lt; 3);</span>
    return 0;
}
    </pre>
</div>
                <div class="code-navigation">
  <a href="animation/do-while.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

<h5>Example 5: Workout💪 with do-while loop</h5>
<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

int main() {
    int count = 1;
    <span id="doPart">do {
        printf("Jumping Jack %d\n", count);
        count++;</span>
    <span id="whilePart">} while(count <= 5);</span>
    return 0;
}
    </pre>
</div>

                <div class="code-navigation">
  <a href="animation/dowhile2.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <button class="quiz-btn">
  <i class="fas fa-question-circle"></i> Quick Quiz
</button>

<div class="quiz-container">
  <div class="quiz-question">
    <strong>What will be printed?</strong><br><br>
    <pre>
int x = 10;

do {
    printf("Run ");
} while(x < 5);
    </pre>
  </div>

  <div class="quiz-option" onclick="checkAnswer(this, false)">A. Nothing</div>
  <div class="quiz-option" onclick="checkAnswer(this, true)">B. Run</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">C. Infinite loop</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">D. Error</div>
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