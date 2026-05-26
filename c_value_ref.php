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
            <h3>Call by Value vs. Call by Reference in C</h3>
            <p>When passing arguments to a function in C, there are two ways to do it:</p>

<p><b>1. Call by Value</b> – A copy of the actual value is passed to the function. Any modifications inside the function do not affect the original value.</p>
<p><b>2. Call by Reference</b> – The address of the actual value is passed, allowing modifications inside the function to reflect outside.</p>

            <h5>Call By Value </h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

void changeValue(int x) { 
    x = 20; // Modifying the copy of the value
}

int main() {
    int num = 10;
    printf("Before function call: %d\n", num);
    
    changeValue(num); // Passing value
    
    printf("After function call: %d\n", num); // Original value remains unchanged
    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Before function call: 10
After function call: 10</pre>
            </div>
<h4>Explanation: </h4>
<p>The function changeValue() modifies <i>x</i>, but since it's a copy, <i>num</i> in main() remains unchanged.</p>

    <h5>Call by Reference</h5>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

void changeValue(int *x) { 
    *x = 20; // Modifying the original value through pointer
}

int main() {
    int num = 10;
    printf("Before function call: %d\n", num);
    
    changeValue(&amp;num); // Passing address of num
    
    printf("After function call: %d\n", num); // Original value is changed
    return 0;
}</pre>
    </div>


    <h4>Output:</h4>
    <div class="syntax-box"><pre>
Before function call: 10
After function call: 20</pre></div>

    <h4>Explanation: </h4>
    <p>Here, we pass the <b>memory address</b> of the variable, allowing the function to modify the original value.</p>

    <h5>Example 2: Call by Reference</h5>
    <p> A real-world example of Call by Reference is swapping two numbers in a banking system.

Imagine you have two bank accounts, and you want to</b> swap their balances. Using Call by Reference, you can <b>directly modify</b> the original balances instead of returning new values.</p>
    <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;

// Function to swap two balances using call by reference
void swapBalances(float *acc1, float *acc2) {
    float temp = *acc1;
    *acc1 = *acc2;
    *acc2 = temp;
}

int main() {
    float balance1 = 5000.75, balance2 = 3000.25;

    printf("Before Swapping:\n");
    printf("Account 1 Balance: $%.2f\n", balance1);
    printf("Account 2 Balance: $%.2f\n", balance2);

    // Swapping balances
    swapBalances(&amp;balance1, &amp;balance2);

    printf("\nAfter Swapping:\n");
    printf("Account 1 Balance: $%.2f\n", balance1);
    printf("Account 2 Balance: $%.2f\n", balance2);

    return 0;
}</pre>
    </div>
    <h4>Output:</h4>
    <div class="syntax-box">
        <pre>
Before Swapping:
Account 1 Balance: $5000.75
Account 2 Balance: $3000.25

After Swapping:
Account 1 Balance: $3000.25
Account 2 Balance: $5000.75</pre>
    </div>
    <p>This is useful in <b>banking applications</b> where you may need to swap balances between accounts without creating new variables.</p>
<p>A real-world scenario for Call by Reference could be: <br> <br>

🔹 <b>ATM Cash Withdrawal</b>: When you withdraw money from an ATM, the function handling the withdrawal directly modifies the balance stored in your account. Instead of returning a new balance (like Call by Value), it updates the actual balance in the bank's database. <br>

🔹 <b>Game Health System</b>: In video games, when a character takes damage, their health is stored in a variable. A function that processes damage could use Call by Reference to directly update the player's health instead of returning a new value. <br>

🔹 <b>E-commerce Cart Update</b>: When you add or remove items from your shopping cart, the function updates the original cart data directly rather than creating a separate copy. <br> <br>

These scenarios involve modifying the actual data rather than just working with copies, making <b>Call by Reference</b> useful.</p>
       
        
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