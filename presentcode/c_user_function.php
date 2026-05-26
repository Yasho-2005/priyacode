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
            <h3>User-Defined Functions in C</h3>

            <h5>Example 1: </h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
void printCode(); //func declaration

void main(){
    printf("Hello ");
    printCode(); //func call
}
void printCode(){  //func definition
    printf("Wrote code");  
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Hello Wrote code</pre>
            </div>
            <p>There are 3 things to remember when creating user-defined functions:</p>
            <p>1. Function Declaration. <br>
        2. Function Call. <br> 
    3. Function definition</p>

    <h5>Example 1: Function with No Arguments & No Return Value</h5>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

// Function declaration + definition
void greetings() {
    printf("Hello! Welcome to C programming.\n");
}

int main() {
    // Function call
    greetings();  
    return 0;
}</pre>
    </div>


    <h4>Output:</h4>
    <div class="syntax-box"><pre>
Hello! Welcome to C programming.</pre></div>
    <h4>Use:</h4>
    <p>In real life, it is useful for displaying messages, logging information, or performing simple actions without needing input or output values.</p>

    <h5>Example 2: Functions with Arguments but No Returns a Value</h5>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

void addition(int num1, int num2) {  // parameters
    int sum = num1 + num2;
    printf("The sum is %d", sum);
}

int main() {
    int num1 = 10, num2 = 20;

    // Function call with arguments
    addition(num1, num2);

    return 0;
}</pre>
    </div>
    <h4>Output:</h4>
    <div class="syntax-box">
        <pre>
The sum is 30</pre>
    </div>
    <h4>Use: </h4>
    <p>When we want to perform a task (like printing, modifying global variables, etc.) but <b>don’t need a return value.</b></p>

    <h5>Example 3. Functions with No Arguments but Returns a Value</h5>

    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

int addition() {
    int num1, num2;
    printf("Enter the value of num1: ");
    scanf("%d",&num1);
    printf("Enter the value of num2: ");
    scanf("%d",&num2);
    // int sum = num1 + num2;
    // return sum;
    return num1 + num2;
}

int main() {
    
    int sum = addition();
    printf("The sum is %d",sum);

    return 0;
}
</pre>
    </div>
    <h4>Output:</h4>
    <div class="syntax-box">
        <pre>
Enter the value of num1: 12
Enter the value of num2: 9
The sum is 21</pre>
    </div>

    <h4>Use:</h4>
    <p>When we <b>don’t need to pass any data</b> but need to retrieve a result from the function. <br>
    Example: Getting user input, generating a random number, reading sensor values in embedded systems, etc.</p>

    <h5>Example 4. Function with Arguments & Returns a Value</h5>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

int addition(int num1, int num2) {
    return num1 + num2;  //return sum
}

int main() {
    int num1, num2;
    printf("Enter the value of num1: ");
    scanf("%d",&num1);
    printf("Enter the value of num2: ");
    scanf("%d",&num2);
    
    int sum = addition(num1,num2);  //passing arguments
    printf("The sum is %d",sum);

    return 0;
}</pre>
    </div>

    <h4>Output: </h4>
    <div class="syntax-box">
        <pre>
Enter the value of num1: 12
Enter the value of num2: 9
The sum is 21</pre>
    </div>
    <h4>Use:</h4>
    <p>When a function requires input values and needs to return a computed result.</p>
    <p>Examples: <br>
<b>Banking System:</b> Function to calculate interest. <br>
<b>Game Development:</b> Function to compute player scores. <br>
<b>E-commerce:</b> Function to calculate total cart price with tax.</p>
    
        
  <!-- <button class="quiz-btn">
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

   -->

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