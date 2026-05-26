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
        <?php include 'sidebar.php' ?>
        <div class="content">
            <h3>Switch Statement in C</h3>
            <p>The <b>switch</b> statement in C is used for decision-making. It allows the program to execute a block of code when a specified case value is <b>true</b> and execute a different block when the condition is <b>false</b>.</p>
            <p>The <b>Switch</b> statement is used for handling multiple conditions, similar to if-else if statements. </p>
            <p>The difference in both is that <b>if-else if</b> can check multiple conditions, while <b>switch</b> checks one value against different cases. </p>
            <h4>Syntax:</h4>
            <div class="syntax-box"> switch(expression) { <br> &nbsp;&nbsp;&nbsp;&nbsp; case value1: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to execute if expression == value1 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br> &nbsp;&nbsp;&nbsp;&nbsp; case value2: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to execute if expression == value2 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br> &nbsp;&nbsp;&nbsp;&nbsp; default: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to execute if no cases match <br> } </div>

            <h5>Example 1: Check Day of the Week</h5>
            <p>This program takes a number (1-7) as input and displays the corresponding day of the week using a switch statement.</p>

            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int day;

    printf("Enter a number (1-7) for the day of the week: ");
    scanf("%d", &day);

    switch (day) {
        case 1:
            printf("Monday ");
            break;
        case 2:
            printf("Tuesday ");
            break;
        case 3:
            printf("Wednesday ");
            break;
        case 4:
            printf("Thursday ");
            break;
        case 5:
            printf("Friday ");
            break;
        case 6:
            printf("Saturday ");
            break;
        case 7:
            printf("Sunday ");
            break;
        default:
            printf("Invalid input! ");
    }

    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter a number (1-7): 3 <br>
                Wednesday
            </div>
            <div class="syntax-box">
                Enter a number (1-7): 9 <br>
                Invalid input!
            </div>
<div class="code-navigation">
  <a href="animation/switchweek.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>
            <h5>Example 2: Menu Selection Using Switch</h5>
            <p>This program displays a menu of food items and asks the user to enter a choice. Based on the selection, the program prints the corresponding item using a switch statement.</p>

            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main() { <br>
                &nbsp;&nbsp;&nbsp;&nbsp; int choice; <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; printf("Menu: "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; printf("1. Pizza "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; printf("2. Burger "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; printf("3. Pasta "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; printf("Enter your choice (1-3): "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; scanf("%d", &choice); <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; switch (choice) { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case 1: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You selected Pizza. "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case 2: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You selected Burger. "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; case 3: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("You selected Pasta. "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break; <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; default: <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("Invalid choice! Please select between 1-3. "); <br>
                &nbsp;&nbsp;&nbsp;&nbsp; } <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp; return 0; <br>
                }
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Menu:<br>
                1. Pizza<br>
                2. Burger<br>
                3. Pasta<br>
                Enter your choice (1-3): 2<br>
                You selected Burger.
            </div>
<div class="code-navigation">
  <a href="animation/switch2.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>
            <h5>Example 3: Simple Calculator Using Switch</h5>
            <p>This program takes two numbers and an operator as input and performs the corresponding arithmetic operation using a switch statement.</p>

            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
    int main() {
        int num1, num2, result;
        char op;
        
        printf("Enter first number: ");
        scanf("%d", &num1);
        printf("Enter an operator (+, -, *, /): ");
        scanf(" %c", &op);
        printf("Enter second number: ");
        scanf("%d", &num2);
        
        switch (op) {
            case '+':
                result = num1 + num2;
                printf("Result: %d ", result);
                break;
            case '-':
                result = num1 - num2;
                printf("Result: %d ", result);
                break;
            case '*':
                result = num1 * num2;
                printf("Result: %d ", result);
                break;
            case '/':
                result = num1 / num2;
                printf("Result: %d ", result);
                break;
            default:
                printf("Invalid operator! Please use +, -, *, or /. ");
             }
        
             return 0;
        }
    </pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                Enter first number: 10<br>
                Enter an operator (+, -, *, /): *<br>
                Enter second number: 5<br>
                Result: 50 <br><br>

                Enter first number: 12 <br>
                Enter an operator (+, -, *, /): % <br>
                Enter second number: 6 <br>
                Invalid operator! Please use +, -, *, or /.</div>
                 <h5>Example 4: Traffic signal</h5>
            <p>"You might have noticed that in an if-else-if ladder, we use conditions, whereas in a switch statement, we check a single value — for example, 'g' for green."</p>
            <div class="syntax-box">
                <pre>

#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int main() {
    char color[] = "green";

    switch (color[0]) {
        <span id="caseGreen">case 'g':
            printf("Go");
            break;</span>
        <span id="caseYellow">case 'y':
            printf("Slow Down");
            break;</span>
        <span id="caseRed">case 'r':
            printf("Stop");
            break;</span>
        default:
            printf("Invalid color");
    }

    return 0;
}</pre>
            </div>

            <button class="quiz-btn">
  <i class="fas fa-question-circle"></i> Quick Quiz
</button>

<div class="quiz-container">
  <div class="quiz-question">
    <strong>What is the output of this C code?</strong><br><br>
    <pre>
int x = 2;

switch(x) {
    case 1:
        printf("One ");
    case 2:
        printf("Two ");
    case 3:
        printf("Three ");
        break;
    default:
        printf("Default");
}
    </pre>
  </div>

  <div class="quiz-option" onclick="checkAnswer(this, false)">A. Two</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">B. Two Three</div>
  <div class="quiz-option" onclick="checkAnswer(this, true)">C. Two Three Default</div>
  <div class="quiz-option" onclick="checkAnswer(this, false)">D. Default</div>
</div>

           



            <div class="code-navigation">
                <?php if ($prev): ?>
                    <a href="<?= $prev ?>" class="nav-btn">&laquo; Prev</a>
                <?php endif; ?>

                <?php if ($next): ?>
        <a href="<?= $next ?>" id="next-btn" class="nav-btn" onclick="return validateAndNext(event)">Next &raquo;</a>
    <?php endif; ?>
            </div>
            <?php include 'includes/exam.php'; ?>
        </div>
        </div>



    </section>
    <?php include 'includes/footer.php'; ?>

</body>



</html>