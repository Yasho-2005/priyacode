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
<h3>Pointers in C</h3>
            <p>A <b>pointer</b> in C is a variable that stores the <b>memory address of another variable</b>. Instead of storing a value directly, a pointer holds the location where the value is stored. <br> For example, imagine a house where various items (values) are stored. The house address represents the memory location, and the items inside represent the stored data. Just like you use an address to locate a house, a pointer in C is used to access a value stored at a specific memory location.</p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
                int *ptr;
            </div>

            <h5>Example 1: </h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int num = 10;  // A normal integer variable
    int *ptr;      // Pointer declaration

    ptr = &amp;num;    // Assign address of num to ptr

    printf("Value of num: %d\n", num);
    printf("Address of num: %p\n", &num);
    printf("Pointer stores address: %p\n", ptr);
    printf("Value pointed by ptr: %d\n", *ptr); // Dereferencing the pointer

    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Value of num: 10
Address of num: 0x7ffd7f20e5d4
Pointer stores address: 0x7ffd7f20e5d4
Value pointed by ptr: 10</pre>
            </div>
                                  <div class="code-navigation">
  <a href="animation/pointers.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>
            <p>We use <i>%p</i> in printf to print memory addresses because %p is specifically designed to format and display pointer (address) values. Addresses are large values (often 8 bytes on 64-bit systems), and using %p ensures they are displayed correctly.</p>
            <h4>Explanation: </h4>
            <p>
                The format 0x7ffd7f20e5d4 is a memory address in hexadecimal notation. Let's break it down: <br>

                1. 0x <b>Prefix:</b> <br>

                <b>✰</b> This indicates that the number is in hexadecimal (base 16) format. <br>
                <b>✰</b> Hexadecimal uses digits 0-9 and letters A-F to represent values. <br><br>

                2. 7ffd7f20e5d4 <b>(Hexadecimal Number):</b> <br>

                <b>✰</b> This is the actual memory address where the variable (or pointer) is stored. <br>
                <b>✰</b> It is a virtual memory address assigned by the operating system. <br>
                <b>✰</b> On a 64-bit system, addresses are typically 12-16 hex digits long. <br>
                <b>✰</b> On a 32-bit system, addresses are usually 8 hex digits long. <br> <br>
                <b>Example Interpretation:</b> <br>
                If you convert 0x7ffd7f20e5d4 to decimal, you get a large number, which is the <b>actual memory location</b> in RAM. <br><br>

                <b>Memory Address Breakdown:</b> <br>
                <b>✰</b> 7ffd → Could indicate a stack memory segment (depends on OS). <br>
                <b>✰</b> 7f20e5d4 → The specific location within that segment. <br>
                <b>Key Takeaways:</b> <br>
                <b>✰</b> This address is dynamically assigned and varies each time the program runs. <br>
                <b>✰</b> Addresses in heap and stack regions may look different (stack addresses are often close together). <br>
                <b>✰</b> If <i>Address Space Layout Randomization (ASLR)</i> is enabled, the address may change every execution for security reasons. <br>
            </p>

        
            <h5>Example 2: Swapping Two numbers using Pointers.</h5>

            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int a = 10, b = 20;
    int *num1 = &amp;a, *num2 = &amp;b;  // Pointers storing the addresses of a and b

    printf("Before Swap: a = %d, b = %d\n", a, b);

    // Swapping using pointers
    int temp = *num1;  
    *num1 = *num2;
    *num2 = temp;

    printf("After Swap: a = %d, b = %d\n", a, b);

    return 0;
}
</pre>


            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Before swapping: num1 = 10, num2 = 20
After swapping: num1 = 20, num2 = 10
</pre>
            </div>

            <h5>Example 3: Swapping Two numbers without using third variable in Pointers.</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int a = 5, b = 15;
    int *p1 = &amp;a, *p2 = &amp;b;  // Pointers to a and b

    printf("Before Swap: a = %d, b = %d\n", a, b);

    // Swapping using arithmetic operations with pointers
    *p1 = *p1 + *p2; 
    *p2 = *p1 - *p2;  
    *p1 = *p1 - *p2; 

    printf("After Swap: a = %d, b = %d\n", a, b);

    return 0;
}
</pre>

            </div>
            <h4>Output: </h4>
            <div class="syntax-box">
                <pre>
Before Swap: a = 5, b = 15
After Swap: a = 15, b = 5</pre>
            </div>

  <!-- <button class="quiz-btn">
  <i class="fas fa-question-circle"></i> Quick Quiz
</button> -->
<!-- 
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