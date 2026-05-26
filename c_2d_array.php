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
            <h3>2D Array in C</h3>
            <p>A <b>2D array</b> is an array of arrays, meaning it stores data in a <b>row-column format</b> like a table or matrix. Each element in the array is accessed using two indices:</p>
            <p>First index → Row number <br>
            Second index → Column number</p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
            data_type array_name[rows][columns];
            </div>


                        <h5>Example 1: Accessing stored values.</h5>
            <div class="syntax-box">
                <pre>
#include &lt;stdio.h&gt;

int main() {
    int matrix[3][3]= {
        {12,24,55},
        {3,7,45},
        {76,89,23}
    };
    int i, j;

    // Displaying the matrix
    printf("\nThe matrix is:\n");
    for (i = 0; i < 3; i++) {
        for (j = 0; j < 3; j++) {
            printf("%d\t", matrix[i][j]);
        }
        printf("\n");
    }

    return 0;
}</pre>
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
The matrix is:

12	24	55	
3	7	45	
76	89	23</pre>
            </div>


<h5>Example 2: storing and accessing.</h5>
            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

int main() {
    int matrix[3][3]; // 3 rows, 3 columns
    int i, j;

    // Taking input
    printf("Enter elements for the matrix:\n");
    for (i = 0; i < 3; i++) {
        for (j = 0; j < 3; j++) {
            printf("Element [%d][%d]: ", i, j);
            scanf("%d", &matrix[i][j]);
        }
    }

    // Displaying the matrix
    printf("\nThe matrix is:\n");
    for (i = 0; i < 3; i++) {
        for (j = 0; j < 3; j++) {
            printf("%d\t", matrix[i][j]);
        }
        printf("\n");
    }

    return 0;
}
</pre>

</div>

<h4>Output:</h4>
<div class="syntax-box">
<pre>
Enter elements for the matrix:
Element [0][0]: 12
Element [0][1]: 24
Element [0][2]: 55
Element [1][0]: 3
Element [1][1]: 7
Element [1][2]: 45
Element [2][0]: 76
Element [2][1]: 89
Element [2][2]: 23

The matrix is:
12	24	55	
3	7	45	
76	89	23	
</pre>
</div>

<h5>Example 3: Printing stars in Matrix</h5>
<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt;

int main() {
   char stars[3][3];
    int i, j;
    
    // Displaying the matrix
    printf("\nThe matrix is:\n");
    for (i = 0; i < 3; i++) {
        for (j = 0; j < 3; j++) {
            printf("*\t", stars[i][j]);
        }
        printf("\n");
    }

    return 0;
}</pre>
</div>
<h4>Output: </h4>
<div class="syntax-box">
    <pre>
The matrix is:
*	*	*	
*	*	*	
*	*	*</pre>
</div>

 <h5>Example 4: Real World Example </h5>
            <p>A 2D array can be used to represent seats in a theater where rows and columns represent seats. Users can choose a seat, and we mark it as booked.</p>

            <div class="syntax-box">
            <pre>
#include &lt;stdio.h&gt;

#define ROWS 3
#define COLS 4

int main() {
    int seats[ROWS][COLS] = {0}; // 0 means available, 1 means booked
    int row, col;

    // Display initial seating arrangement
    printf("Available seats (0 = Available, 1 = Booked):\n");
    for (int i = 0; i < ROWS; i++) {
        for (int j = 0; j < COLS; j++) {
            printf("%d ", seats[i][j]);
        }
        printf("\n");
    }

    // User selects a seat
    printf("\nEnter the row and column number to book (0-based index): ");
    scanf("%d %d", &row, &col);

    // Check if the seat is available
    if (row >= 0 && row < ROWS && col >= 0 && col < COLS) {
        if (seats[row][col] == 0) {
            seats[row][col] = 1;
            printf("Seat booked successfully!\n");
        } else {
            printf("Sorry, the seat is already booked!\n");
        }
    } else {
        printf("Invalid seat selection!\n");
    }

    // Display updated seating arrangement
    printf("\nUpdated seats:\n");
    for (int i = 0; i < ROWS; i++) {
        for (int j = 0; j < COLS; j++) {
            printf("%d ", seats[i][j]);
        }
        printf("\n");
    }

    return 0;
}
</pre>


            </div>

            <h4>Output:</h4>
            <h4>Case 1: Booking an Available Seat</h4>
            <div class="syntax-box">
<pre>
Available seats (0 = Available, 1 = Booked):
0 0 0 0
0 0 0 0
0 0 0 0

Enter the row and column number to book (0-based index): 1 2
Seat booked successfully!

Updated seats:
0 0 0 0
0 0 1 0
0 0 0 0
</pre>
</div>
<h4>Case 2: Trying to Book an Already Booked Seat</h4>
<div class="syntax-box">
<pre>
Available seats (0 = Available, 1 = Booked):
0 0 0 0
0 0 1 0
0 0 0 0

Enter the row and column number to book (0-based index): 1 2
Sorry, the seat is already booked!

Updated seats:
0 0 0 0
0 0 1 0
0 0 0 0
</pre>
</div>
<p>❌ The system prevents double booking.</p>

<h4>Case 3: Entering an Invalid Seat Number</h4>
<div class="syntax-box">
    <pre>
Available seats (0 = Available, 1 = Booked):
0 0 0 0
0 0 1 0
0 0 0 0

Enter the row and column number to book (0-based index): 5 3
Invalid seat selection!

Updated seats:
0 0 0 0
0 0 1 0
0 0 0 0</pre>
</div>
  <h4>Explanation:</h4>
            <p>1. We initialize a 2D array where 0 represents available seats.</p>
            <p>2. We display the seat arrangement so the user knows what’s available.</p>
            <p>3. User inputs the row & column number of the seat they want.</p>
            <p>4. If the seat is available (0), we change it to 1 (booked).</p>
            <p>5. If already booked, we inform the user.</p>
                          <div class="code-navigation">
  <a href="animation/1d.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <h5>Example 5 - Book Your Seat</h5>

                  <div class="code-navigation">
  <a href="animation/2dtheatre.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <h5>Example 6 - Farm Example</h5>
                    <div class="code-navigation">
  <a href="animation/2dfarm.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

  <h5>Example 7 - TicTacToe </h5>
                      <div class="code-navigation">
  <a href="animation/2dtictac.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
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