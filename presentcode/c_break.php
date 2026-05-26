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
            <h3>Break Statement in C</h3>
            <p>The <b>break</b> statement in C is used to <b>immediately terminate</b> a loop (such as for, while, or do-while) or a switch statement. When break is encountered, the program <b>exits the loop</b>.</p>

            <h4>Syntax:</h4>
            <div class="syntax-box">
                break;
            </div>

            <h5>Example 1: break statement in switch</h5>
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
            printf("Invalid input! Please enter a number between 1 and 7. ");
    }

    return 0;
}</pre>
</div>

<h4>Output:</h4>
<div class="syntax-box">
    <pre>
Enter a number (1-7) for the day of the week: 3
Wednesday</pre>
</div>

<div class="code-navigation">
  <a href="animation/break2.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

<h5>Example 2: switch without <code>break</code></h5>
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
        case 2:
            printf("Tuesday ");
        case 3:
            printf("Wednesday ");
        case 4:
            printf("Thursday ");
        case 5:
            printf("Friday ");
        case 6:
            printf("Saturday ");
        case 7:
            printf("Sunday ");
        default:
            printf("Invalid input! Please enter a number between 1 and 7. ");
    }

    return 0;
}
</pre>
</div>

<h4>Output:</h4>
<div class="syntax-box">
<pre>
Enter a number (1-7) for the day of the week: 3
Wednesday
Thursday
Friday
Saturday
Sunday
Invalid input! Please enter a number between 1 and 7.
</pre>
</div>
<div class="code-navigation">
  <a href="animation/break2.0.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
  </div>

            <h5>Example 3: break statement in for loop</h5>

            <div class="syntax-box">
        <pre>
#include &lt;stdio.h&gt;
    int main() {
    int i;
    
    for (i = 1; i <= 10; i++) {
        if (i == 5) {
            printf("Loop stopped at %d ", i);
            break;  // Exit the loop when i == 5
        }
        printf("i = %d ", i);
    }

    printf("Loop exited. ");

    return 0;
}</pre>
            </div>

            <h4>Output:</h4>
            <div class="syntax-box">
                <pre>
i = 1
i = 2
i = 3
i = 4
Loop stopped at 5
Loop exited.</pre>
            </div>
<h5>Example 4: Picking candies until you enter Break</h5>
<div class="syntax-box">
    <pre>
        #include &lt;stdio.h&gt;

int main() {
    char candies[] = {'🍬', '🍬', '🍬', '🍋', '🍬'};
    int i;

    <span id="loopCode">for(i = 0; i &lt; 5; i++) {
        if(candies[i] == '🍋') {
            break;
        }
        printf("%c ", candies[i]);
    }</span>

    return 0;
}
    </pre>
</div>
  <div class="code-navigation">
  <a href="animation/break.html" target="_blank" class="nav-btn try-live-btn">💡Test</a>
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