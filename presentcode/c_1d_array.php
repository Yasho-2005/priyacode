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
            <h3>Array in C</h3>
            <p><b>Array</b> in C is a <b>collection of elements</b> of the same data type stored in contiguous <b>memory locations</b>. It is used to store multiple values under a single variable name, making data management more efficient.</p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
            data_type array_name[size];
            </div>

                        <h5>Example 1: storing and accessing array in for loop.</h5>
            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

int main() {
    // Declare and initialize a 1D array
    int numbers[5] = {10, 20, 30, 40, 50};

    // Display array elements using a loop
    printf("Array elements are: \n");
    for(int i = 0; i < 5; i++) {
        printf("%d \n", numbers[i]);
    }

    return 0;
}
</pre>
</div>

<h4>Output:</h4>
<div class="syntax-box">
<pre>
Array elements are:
10
20
30
40
50
</pre>
</div>
                          <div class="code-navigation">
  <a href="animation/1darray.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>
            <h5>Example 2: Real World Example 1</h5>
            <p>Imagine a situation where we need to store the marks of 5 students and calculate their average score.</p>

            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

int main() {
    // Declare and initialize an array to store student marks
    int marks[5];
    int sum = 0;
    float average;

    // Input marks from the user
    printf("Enter marks for 5 students:\n");
    for(int i = 0; i < 5; i++) {
        printf("Student %d: ", i + 1);
        scanf("%d", &marks[i]);  // Store input in the array
        sum += marks[i];  // Add marks to sum
    }

    // Calculate average marks
    average = sum / 5.0;

    // Display the results
    printf("\nStudent Marks: ");
    for(int i = 0; i < 5; i++) {
        printf("%d ", marks[i]);
    }

    printf("\nAverage Marks: %.2f\n", average);

    return 0;
}
</pre>

            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
Enter marks for 5 students:
Student 1: 85
Student 2: 90
Student 3: 78
Student 4: 88
Student 5: 92

Student Marks: 85 90 78 88 92
Average Marks: 86.60</pre>
            </div>

<h5>Example 3: Real World Example 2</h5>
<p>Imagine we are developing an online store where we need to store the prices of 5 products and display them with their total cost.</p>

<div class="syntax-box">
<pre>
#include &lt;stdio.h&gt;

int main() {
    // Declare an array to store product prices
    float prices[5];
    float total = 0;

    // Input prices from the user
    printf("Enter prices of 5 products:\n");
    for(int i = 0; i < 5; i++) {
        printf("Product %d Price: ", i + 1);
        scanf("%f", &prices[i]);  // Store input in the array
        total += prices[i];  // Add to total cost
    }

    // Display the prices of the products
    printf("\nProduct Prices:\n");
    for(int i = 0; i < 5; i++) {
        printf("Product %d: %.2f\n", i + 1, prices[i]);
    }

    // Display total cost
    printf("\nTotal Cost: %.2f\n", total);

    return 0;
}
</pre>

</div>
<h4>Output</h4>
<div class="syntax-box">
    <pre>
Enter prices of 5 products:
Product 1 Price: 10.50
Product 2 Price: 20.75
Product 3 Price: 15.30
Product 4 Price: 8.99
Product 5 Price: 12.60

Product Prices:
Product 1: 10.50
Product 2: 20.75
Product 3: 15.30
Product 4: 8.99
Product 5: 12.60

Total Cost: 68.14</pre>
</div>

<h5>Example 4: Memory Visualizer</h5>


<div class="syntax-box">
<pre>
#include &lt;stdio.h&gt;

int main() {
    char arr[5][10]; // Declaration
    int i;

    for(i = 0; i < 5; i++) {
        scanf("%s", arr[i]);
    }

    return 0;
}
</pre>
</div>
                          <div class="code-navigation">
  <a href="animation/1d.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <h5>Example 5 - Song Playlist</h5>

                  <div class="code-navigation">
  <a href="animation/1d_2.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
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