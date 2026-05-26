<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Arithmetic Operators</title>

    <link rel="stylesheet" href="style.css?v=1.1">

    <style>
/* 
        .content{
            flex:1;
            width:100%;
            min-width:0;
        }

        .main{
            display:flex;
            gap:20px;
            width:100%;
        } */

        

    </style>

</head>

<body>

<?php include 'includes/sql_navigation.php'; ?>
<?php include 'includes/header.php'; ?>

<section class="main">

<?php include 'sql_sidebar.php'; ?>

<div class="content">

<h3>Arithmetic Operators</h3>

<p>
Arithmetic Operators are used to perform <b>mathematical calculations</b> in SQL.
They help us add, subtract, multiply, divide, and calculate remainder values.
</p>

<div class="mascot-container">

    <div class="dolphin-mascot">🧮</div>

    <div class="chat-bubble">

        "💸 SQL can do MATH too! <br><br>

        ➕ Addition helps increase salaries <br>
        ➖ Subtraction helps calculate discounts <br>
        ✖ Multiplication helps calculate yearly income <br>
        ➗ Division helps split values <br>
        % Modulus helps check even or odd numbers ⚡"

    </div>

</div>

<h4>Types of Arithmetic Operators</h4>

<div class="sql-result-table">

<table>

<tr>
<th>Operator</th>
<th>Meaning</th>
<th>Example</th>
</tr>

<tr>
<td>+</td>
<td>Addition</td>
<td>salary + 5000</td>
</tr>

<tr>
<td>-</td>
<td>Subtraction</td>
<td>price - 100</td>
</tr>

<tr>
<td>*</td>
<td>Multiplication</td>
<td>salary * 12</td>
</tr>

<tr>
<td>/</td>
<td>Division</td>
<td>marks / 2</td>
</tr>

<tr>
<td>%</td>
<td>Modulus</td>
<td>salary % 2</td>
</tr>

</table>

</div>

<h4>Syntax</h4>

<div class="syntax">

SELECT column_name operator value <br>
FROM table_name;

</div>

<h4>Examples</h4>

<p>1. Addition</p>

<div class="syntax">

SELECT name, salary + 5000 AS increased_salary <br>
FROM employees;

</div>

<p>2. Subtraction</p>

<div class="syntax">

SELECT product_name, price - 100 AS discounted_price <br>
FROM products;

</div>

<p>3. Multiplication</p>

<div class="syntax">

SELECT name, salary * 12 AS yearly_salary <br>
FROM employees;

</div>

<p>4. Division</p>

<div class="syntax">

SELECT student_name, marks / 2 AS half_marks <br>
FROM students;

</div>

<p>5. Modulus</p>

<div class="syntax">

SELECT salary % 2 <br>
FROM employees;

</div>

<h4>Practice Table</h4>

<div class="sql-result-table">

<table>

<tr>
<th>id</th>
<th>name</th>
<th>salary</th>
<th>bonus</th>
</tr>

<tr>
<td>1</td>
<td>Rahul</td>
<td>40000</td>
<td>5000</td>
</tr>

<tr>
<td>2</td>
<td>Priya</td>
<td>55000</td>
<td>7000</td>
</tr>

<tr>
<td>3</td>
<td>Aman</td>
<td>30000</td>
<td>4000</td>
</tr>

<tr>
<td>4</td>
<td>Sneha</td>
<td>65000</td>
<td>8000</td>
</tr>

</table>

</div>

<h4>Assignment 1</h4>

<div class="assignment-box">

<h3>Calculate Increased Salary</h3>

<p>Use Addition Operator.</p>

<div class="task">

➤ Add <b>5000</b> to every employee salary.

</div>

</div>

<h4>Assignment 2</h4>

<div class="assignment-box">

<h3>Find Yearly Salary</h3>

<p>Use Multiplication Operator.</p>

<div class="task">

➤ Multiply monthly salary by <b>12</b>.

</div>

</div>

<h4>Assignment 3</h4>

<div class="assignment-box">

<h3>Calculate Discounted Price</h3>

<p>Use Subtraction Operator.</p>

<div class="task">

➤ Reduce product price by <b>100</b>.

</div>

</div>

<h4>Assignment 4</h4>

<div class="assignment-box">

<h3>Check Even or Odd Salary</h3>

<p>Use Modulus Operator.</p>

<div class="task">

➤ Find remainder when salary is divided by <b>2</b>.

</div>

</div>

<div class="mini-quiz-section">

<h4>🧠 Arithmetic Operator Quiz</h4>

<div class="quiz-item">

<p>1. Which operator is used for Multiplication?</p>

<input type="text" id="q1" placeholder="Type operator...">

</div>

<div class="quiz-item">

<p>2. Which operator gives the remainder value?</p>

<input type="text" id="q2" placeholder="Type operator...">

</div>

<p id="quiz-feedback" style="font-weight:bold; margin-top:10px;"></p>

</div>

<div class="code-navigation">

<?php if ($prev): ?>
<a href="<?= $prev ?>" class="nav-btn">&laquo; Prev</a>
<?php endif; ?>

<?php if ($next): ?>
<a href="<?= $next ?>" 
   id="next-btn"
   class="nav-btn"
   onclick="return validateAndNext(event)">
   Next &raquo;
</a>
<?php endif; ?>

</div>

</div>

</section>

<?php include 'includes/footer.php'; ?>

<script src="script.js"></script>

<script>

function validateAndNext(event)
{

    const fields = [

        { id: 'q1', ans: "*" },
        { id: 'q2', ans: "%" }

    ];

    let allCorrect = true;

    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {

        const input = document.getElementById(field.id);

        const val = input.value.trim();

        if(val !== field.ans)
        {
            input.style.border = "3px solid #ff4d4d";

            allCorrect = false;
        }
        else
        {
            input.style.border = "2px solid #00ffff";
        }

    });

    if(allCorrect)
    {
        feedback.style.color = "#00ffff";

        feedback.innerHTML = "✔ AMAZING! SQL calculations unlocked ⚡";

        return true;
    }
    else
    {
        event.preventDefault();

        feedback.style.color = "#ff4d4d";

        feedback.innerHTML = "❌ Wrong operators detected. Try again!";

        document.querySelector('.mini-quiz-section').classList.add('shake');

        setTimeout(() => {

            document.querySelector('.mini-quiz-section').classList.remove('shake');

        }, 500);

        return false;
    }

}

</script>

</body>
</html>