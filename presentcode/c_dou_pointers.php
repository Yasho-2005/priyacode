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
 <h3>Double Pointers in C</h3>
            <p>A <b>double pointer</b> (or pointer to a pointer) is a pointer that stores the address of another pointer. Instead of directly pointing to a variable, it first points to a pointer, which in turn points to the actual variable.</p>
            <p>Imagine a <b>house address (memory location of a variable)</b> written on a <b>note (pointer)</b>, and someone is holding that note. Now, if another person writes the location of that note on a separate <b>register (double pointer)</b>, this is similar to how a double pointer works in C.</p>

            <h5>Example 1: </h5>
            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int num = 10;
    int *ptr = &amp;num;    // Pointer to num
    int **dptr = &amp;ptr;  // Double pointer storing address of ptr

    // Printing values and addresses
    printf("Value of num: %d\n", num);
    printf("Address of num: %p\n", &amp;num);
    
    printf("Value at ptr (num's value): %d\n", *ptr);
    printf("Address of ptr: %p\n", &amp;ptr);
    
    printf("Value at dptr (ptr's value, which is num's address): %p\n", *dptr);
    printf("Value at **dptr (num's value): %d\n", **dptr);

    return 0;
}
</pre>

            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Value of num: 10
Address of num: 0x7ffc8a1b32c4
Value at ptr (num's value): 10
Address of ptr: 0x7ffc8a1b32c8
Value at dptr (ptr's value, which is num's address): 0x7ffc8a1b32c4
Value at **dptr (num's value): 10</pre>
            </div>
            <h4>Explanation: </h4>
            <p>The address increased by <b>4 bytes</b> because ptr is a pointer to an int, and in most systems, an int occupies <b>4 bytes</b> in memory (on a <b>32-bit or 64-bit system</b> where sizeof(int) = 4).</p>
            <p><b>Breakdown of Address Changes:</b> <br><br>
            Let's assume: <br>
            num is stored at 0x7ffc8a1b32c4 <br> 
            ptr is stored at 0x7ffc8a1b32c8</p>
            <p><b>Why does ptr’s address come right after num?</b>
        <br>
    1. num is an integer and occupies <b>4 bytes</b>. <br>
2. Since ptr is declared immediately after num, it gets stored <b>right after</b> the 4-byte space allocated for num. <br>
3. Thus, the address of ptr is 0x7ffc8a1b32c8 (0x7ffc8a1b32c4 + 4).</p>

<p><b>Will this always be 4 bytes?</b> <br> 
Not necessarily. The address change depends on: <br>
sizeof(int) → If an int is 2 bytes (older systems) or 8 bytes (some 64-bit systems), the gap will be different. <br> <b>Memory alignment</b> → The compiler may add extra space (padding) for efficiency. <br>
<b>Variable placement</b> → If declared differently, variables may not be next to each other.
</p>
        
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