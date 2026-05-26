<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <title>C-tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body>

<?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php'?>

        <div class="content">
            <h3>Loops in C</h3>
            <p>In <b>C</b> (and any programming language), <b>loops</b> are used to <b>repeat a block of code multiple times</b> without writing it again and again.</p>
            <p>It saves time.</p>
            <p>Makes cide shorter and cleaner.</p>
<p>Imagine you are working in a corporate company in the finance department, and you need to process the salaries of 1,000 employees.</p>
<p>Without loops ❌</p>
<div class="syntax-box">
    <pre>
printf("Salary of Employee 1: %d\n", salary1);
printf("Salary of Employee 2: %d\n", salary2);
printf("Salary of Employee 3: %d\n", salary3);
// ... up to 1000</pre>
</div>
<p>This is impossible to maintain.</p>
<p>With loops</p>
<div class="syntax-box">
    <pre>
#include &lt;stdio.h&gt; 
int main() {
    int salaries[5] = {50000, 60000, 55000, 70000, 65000}; // example salaries
    int i;

    printf("Employee Salary Report:\n");
    for (i = 0; i < 5; i++) {
        printf("Employee %d Salary: %d\n", i + 1, salaries[i]);
    }
    return 0;
}
</pre>
</div>

<h5>Real Corporate Uses of Loops:</h5> 

<p><b>HR Department</b> – Generate salary slips for all employees. <br>

<b>Banking</b> – Process multiple customer transactions in one go. <br>

<b>IT Department</b> – Check login attempts for all users in a system. <br>

<b>E-commerce</b> – Show a list of all orders placed by a customer. <br>
 
<b>Data Analysis</b> – Loop through thousands of rows in a report.</p>


        
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