<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Constraints</title>
    <link rel="stylesheet" href="style.css?v=1.1">

    <style>
        .assignment-box {
            width: 80%;
            margin: 25px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #0ff;
            border-radius: 12px;
            box-shadow: 0 0 10px #0ff;
            color: #fff;
            font-size: 18px;
            line-height: 28px;
            position: relative;
        }

        .assignment-box h3 {
            margin-top: 0;
            font-size: 22px;
            color: #0ff;
            text-shadow: 0 0 10px #0ff;
        }

        .assignment-box .task {
            color: #0ff;
            background: rgba(0, 255, 255, 0.1);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid rgba(0, 255, 255, 0.4);
            margin: 10px 0;
            font-size: 16px;
        }

        .syntax {
            font-family: 'Fira Code', monospace;
            background: #1a1f2a;
            padding: 12px 15px;
            border-left: 4px solid #4cc9f0;
            border-radius: 6px;
            margin: 15px 0;
            color: rgba(74, 235, 235, 1);
            font-size: 15px;
        }

        .sql-result-table {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
            background: rgba(0, 255, 255, 0.06);
            border: 1px solid rgba(0, 255, 255, 0.25);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.25);
        }

        .sql-result-table table {
            width: 100%;
            border-collapse: collapse;
            color: #fff;
            font-size: 16px;
        }

        .sql-result-table th {
            background: rgba(0, 255, 255, 0.2);
            padding: 10px;
            text-align: left;
            color: #00eaff;
        }

        .sql-result-table td {
            padding: 10px;
            border-bottom: 1px solid rgba(0, 255, 255, 0.2);
        }
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>Primary Key Constraint</h3>
<div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "👑 <strong>BOW DOWN TO THE BOSS!</strong> 💅 <br>
        The <strong>PRIMARY KEY</strong> is the main character of this table! <br>
        It’s a mix of 'No Empty Seats' and 'No Duplicates Allowed.' <br>
        Without me, your data is just a disorganized mess in the current. Stay supreme! ✨🔱"
    </div>
</div>
<h3>PRIMARY KEY Constraint</h3>

<p>
    The <b>PRIMARY KEY</b> constraint is used to <b>uniquely identify each record</b>
    in a table.
</p>

<p>
    A PRIMARY KEY column <b>cannot contain NULL values</b> and <b>cannot have duplicates</b>.
</p>

<p>
    👉 Every table should ideally have <b>one PRIMARY KEY</b>.
</p>
<h4>Why Use PRIMARY KEY?</h4>

<p>
    PRIMARY KEY helps to:
</p>

<p>
    ✔ Uniquely identify each row <br>
    ✔ Improve data integrity <br>
    ✔ Create relationships between tables <br>
    ✔ Improve search and indexing performance <br>
    ✔ Avoid duplicate records
</p>
<h4>Key Properties of PRIMARY KEY</h4>

<p>
    ✔ Must be <b>UNIQUE</b> <br>
    ✔ Must be <b>NOT NULL</b> <br>
    ✔ Only <b>one PRIMARY KEY</b> per table <br>
    ✔ Can be <b>single column</b> or <b>multiple columns</b> (composite key)
</p>
<h4>Syntax (Column Level)</h4>

<div class="syntax">
CREATE TABLE table_name ( <br>
&nbsp;&nbsp;column_name datatype PRIMARY KEY <br>
);
</div>
<h4>Example 1: Student Table</h4>

<div class="syntax">
CREATE TABLE students ( <br>
&nbsp;&nbsp;student_id INT PRIMARY KEY, <br>
&nbsp;&nbsp;name VARCHAR(50) NOT NULL, <br>
&nbsp;&nbsp;email VARCHAR(100) UNIQUE <br>
);
</div>

<p>
    ✔ student_id uniquely identifies each student
</p>
<h4>Invalid Insert Example</h4>

<p>❌ Duplicate PRIMARY KEY</p>
<div class="syntax">
INSERT INTO students VALUES (1, 'Amit', 'amit@gmail.com');
INSERT INTO students VALUES (1, 'Riya', 'riya@gmail.com');
</div>

<p>
    ❌ Error: Duplicate value for PRIMARY KEY
</p>
<h4>PRIMARY KEY with AUTO INCREMENT</h4>

<p>
    AUTO INCREMENT automatically generates unique values.
</p>

<div class="syntax">
CREATE TABLE users ( <br>
&nbsp;&nbsp;id INT PRIMARY KEY AUTO_INCREMENT, <br>
&nbsp;&nbsp;name VARCHAR(50) <br>
);
</div>
<h4>Adding PRIMARY KEY Using ALTER TABLE</h4>

<div class="syntax">
ALTER TABLE students <br>
ADD PRIMARY KEY (student_id);
</div>
<h4>Real-Life Example</h4>

<p>
    In a <b>Bank System</b>:
</p>

<p>
    ✔ Account Number → PRIMARY KEY <br>
    ✔ Customer ID → PRIMARY KEY
</p>

<p>
    Because each account and customer must be unique.
</p>
<h4>Interview Questions on PRIMARY KEY</h4>

<p><b>Q1.</b> What is PRIMARY KEY?</p>
<p>➡ A constraint that uniquely identifies each row.</p>

<p><b>Q2.</b> Can PRIMARY KEY contain NULL?</p>
<p>➡ No.</p>

<p><b>Q3.</b> Can a table have multiple PRIMARY KEYS?</p>
<p>➡ No, but it can have a composite PRIMARY KEY.</p>

<p><b>Q4.</b> Is PRIMARY KEY automatically indexed?</p>
<p>➡ Yes.</p>
<h4>Assignment 1</h4>
<div class="assignment-box">
    <h3>The Ultimate Leader Table</h3>

    <p>Identify every product in your store with an unbreakable ID.</p>

    <div class="task">
        ➤ Create a table <b>product_stock</b> with fields:<br>
        &nbsp;&nbsp;• product_id (INT) <b>PRIMARY KEY</b><br>
        &nbsp;&nbsp;• item_name (VARCHAR(50))<br>
        &nbsp;&nbsp;• price (INT)
    </div>

    <div class="task">
        ➤ Insert 3 items. Ensure no two products have the same ID! 🔱
    </div>
</div>
<h4>Assignment 2</h4>
<div class="assignment-box">
    <h3>The Master Roll Call</h3>
    <p>Manage a classroom where the Roll Number is the ultimate authority.</p>

    <div class="task">
        ➤ Create a table <b>classroom</b> with fields:<br>
        &nbsp;&nbsp;• roll_no (INT) <b>PRIMARY KEY</b><br>
        &nbsp;&nbsp;• student_name (VARCHAR(50))
    </div>

    <div class="task">
        ➤ <b>Practice 1:</b> Insert Roll No 1 with your name.<br>
        ➤ <b>Practice 2:</b> Try to insert another student with Roll No 1 and see the Boss reject it! 🔱
    </div>
</div>

<div class="assignment-box">
    <h3>💡 Pro Tip</h3>
    <p>
        Think of PRIMARY KEY as a <b>roll number</b> —
        no duplicates, no missing values.
        Almost every interview starts with this concept.
    </p>
</div>

<div class="mini-quiz-section">
    <h4>🔱 The Boss Challenge: Identify the Leader!</h4>

    <div class="quiz-item">
        <p>1. Which two constraints are automatically included in a PRIMARY KEY?</p>
        <input type="text" id="q1" placeholder="Constraint1 + Constraint2">
    </div>

    <div class="quiz-item">
        <p>2. How many PRIMARY KEYs can you have in a single table?</p>
        <input type="text" id="q2" placeholder="Type a number...">
    </div>
    
    <p id="quiz-feedback" style="font-weight: bold; margin-top: 10px;"></p>
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
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
    <script>
    function validateAndNext(event) {
    const fields = [
        { id: 'q1', ans: "not null unique" },
        { id: 'q2', ans: "1" }
    ];

    let allCorrect = true;
    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const val = input.value.trim().toLowerCase();

        // Check for both keywords for Q1, regardless of order
        if (field.id === 'q1') {
            if (!val.includes("not null") || !val.includes("unique")) {
                input.style.border = "3px solid #ff4d4d";
                allCorrect = false;
            } else {
                input.style.border = "2px solid #f39c12";
            }
        } else {
            if (val !== field.ans && val !== "one") {
                input.style.border = "3px solid #ff4d4d";
                allCorrect = false;
            } else {
                input.style.border = "2px solid #f39c12";
            }
        }
    });

    if (allCorrect) {
        feedback.style.color = "#f39c12";
        feedback.innerHTML = "✔ SLAY! You’ve mastered the Boss of the table. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ WAIT! The Boss is not impressed! Fix the red borders.";
        
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