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
  <h5>Example 1: Simple program to detect arrow keys</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;
#include &lt;windows.h&gt;  // Required for GetAsyncKeyState()

int main() {
    printf("Press arrow keys (ESC to quit):\n");

    while (1) {
        if (GetAsyncKeyState(VK_UP)) {
            printf("Up Arrow Pressed\n");
            Sleep(200); // Prevent too fast detection
        }
        if (GetAsyncKeyState(VK_DOWN)) {
            printf("Down Arrow Pressed\n");
            Sleep(200);
        }
        if (GetAsyncKeyState(VK_LEFT)) {
            printf("Left Arrow Pressed\n");
            Sleep(200);
        }
        if (GetAsyncKeyState(VK_RIGHT)) {
            printf("Right Arrow Pressed\n");
            Sleep(200);
        }
        if (GetAsyncKeyState(VK_ESCAPE)) {
            printf("Exiting...\n");
            break;
        }
    }

    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Press arrow keys (ESC to quit):
Up Arrow Pressed
Up Arrow Pressed
Down Arrow Pressed
Down Arrow Pressed
Down Arrow Pressed
Right Arrow Pressed
Right Arrow Pressed
Right Arrow Pressed
Left Arrow Pressed
Left Arrow Pressed
Left Arrow Pressed
Left Arrow Pressed
Exiting...</pre>
            </div>

    <h5>Example 2: Simple program to move character with arrow keys</h5>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;
#include &lt;conio.h&gt;  // For _getch()
#include &lt;windows.h&gt; // For system("cls")

int main() {
    int x = 10, y = 10; // Initial position

    while (1) {
        system("cls"); // Clears screen
        for (int i = 0; i < y; i++) printf("\n"); // Move down
        for (int i = 0; i < x; i++) printf(" ");  // Move right
        printf("@");  // Character to move

        char ch = _getch(); // Get key input

        if (ch == 27) break; // Exit if 'Esc' is pressed
        else if (ch == -32) { // Arrow keys start with -32
            ch = _getch(); // Get actual arrow key
            if (ch == 72 && y > 0) y--; // Up Arrow
            if (ch == 80 && y < 20) y++; // Down Arrow
            if (ch == 75 && x > 0) x--; // Left Arrow
            if (ch == 77 && x < 40) x++; // Right Arrow
        }
    }

    return 0;
}</pre>
    </div>

    <h5>Example 3: ATM works with keys</h5>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;
#include &lt;conio.h&gt;  // For getch()

float balance = 1000.0; // Initial balance

void withdrawMoney() {
    float amount;
    printf("\nEnter amount to withdraw: ");
    scanf("%f", &amount);
    if (amount > balance) {
        printf("Insufficient funds!\n");
    } else {
        balance -= amount;
        printf("Withdrawal successful! New balance: %.2f\n", balance);
    }
}

void depositMoney() {
    float amount;
    printf("\nEnter amount to deposit: ");
    scanf("%f", &amount);
    balance += amount;
    printf("Deposit successful! New balance: %.2f\n", balance);
}

void checkBalance() {
    printf("\nYour current balance is: %.2f\n", balance);
}

int main() {
    char choice;

    while (1) { // Infinite loop to keep showing options
        printf("\nSimple ATM System\n");
        printf("Press W to Withdraw\n");
        printf("Press D to Deposit\n");
        printf("Press B to Check Balance\n");
        printf("Press Q to Quit\n");

        choice = getch(); // Get user input instantly

        if (choice == 'W' || choice == 'w') {
            withdrawMoney();
        } else if (choice == 'D' || choice == 'd') {
            depositMoney();
        } else if (choice == 'B' || choice == 'b') {
            checkBalance();
        } else if (choice == 'Q' || choice == 'q') {
            printf("\nExiting... Thank you!\n");
            break; // Exit the loop when Q is pressed
        }
    }
    return 0;
}</pre>
    </div>
    <h4>Output:</h4>
    <div class="syntax-box">
        <pre>
Simple ATM System
Press W to Withdraw
Press D to Deposit
Press B to Check Balance
Press Q to Quit

Enter amount to deposit: 12000
Deposit successful! New balance: 13000.00

Simple ATM System
Press W to Withdraw
Press D to Deposit
Press B to Check Balance
Press Q to Quit

Enter amount to deposit: 13000
Deposit successful! New balance: 26000.00

Simple ATM System
Press W to Withdraw
Press D to Deposit
Press B to Check Balance
Press Q to Quit

Your current balance is: 26000.00

Simple ATM System
Press W to Withdraw
Press D to Deposit
Press B to Check Balance
Press Q to Quit

Simple ATM System
Press W to Withdraw
Press D to Deposit
Press B to Check Balance
Press Q to Quit</pre>
    </div>
    <h5>Example 4. Simple Calculator</h5>

    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

// Function prototypes
float add(float a, float b);
float subtract(float a, float b);
float multiply(float a, float b);
float divide(float a, float b);

int main() {
    int choice;
    float num1, num2, result;

    do {
        // Display menu
        printf("\nSimple Calculator\n");
        printf("1. Addition\n");
        printf("2. Subtraction\n");
        printf("3. Multiplication\n");
        printf("4. Division\n");
        printf("5. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);

        if (choice >= 1 && choice <= 4) {
            // Take input for numbers
            printf("Enter two numbers: ");
            scanf("%f %f", &num1, &num2);
        }

        // Perform the selected operation
        switch (choice) {
            case 1:
                result = add(num1, num2);
                printf("Result: %.2f\n", result);
                break;
            case 2:
                result = subtract(num1, num2);
                printf("Result: %.2f\n", result);
                break;
            case 3:
                result = multiply(num1, num2);
                printf("Result: %.2f\n", result);
                break;
            case 4:
                if (num2 != 0) {
                    result = divide(num1, num2);
                    printf("Result: %.2f\n", result);
                } else {
                    printf("Error: Division by zero is not allowed!\n");
                }
                break;
            case 5:
                printf("Exiting calculator. Goodbye!\n");
                break;
            default:
                printf("Invalid choice! Please enter a number between 1 and 5.\n");
        }
    } while (choice != 5); // Keep repeating until user selects exit

    return 0;
}

// Function definitions
float add(float a, float b) { return a + b; }
float subtract(float a, float b) { return a - b; }
float multiply(float a, float b) { return a * b; }
float divide(float a, float b) { return a / b; }</pre>
    </div>
    <h4>Output:</h4>
    <div class="syntax-box">
        <pre>

Simple Calculator
1. Addition
2. Subtraction
3. Multiplication
4. Division
5. Exit
Enter your choice: 1
Enter two numbers: 45 45
Result: 90.00

Simple Calculator
1. Addition
2. Subtraction
3. Multiplication
4. Division
5. Exit
Enter your choice: 2
Enter two numbers: 23 3
Result: 20.00

Simple Calculator
1. Addition
2. Subtraction
3. Multiplication
4. Division
5. Exit
Enter your choice:</pre>
    </div>


                <div class="code-navigation">
  <a href="animation/dowhile2.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

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
<?php include 'includes/footer.php';?>

</body>



</html>