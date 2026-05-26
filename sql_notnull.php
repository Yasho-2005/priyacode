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
            <h3>NOT NULL Constraint</h3>
<div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "🚫 <strong>NO GHOSTS ALLOWED,</strong>  <br>
        Using <strong>NOT NULL</strong> means every row MUST have a value! <br>
        Leaving a column empty is a total crime—if you don't have the data, 
        you're not coming in! Keep it real! ✨💎"
    </div>
</div>
<h3>NOT NULL Constraint</h3>

<p>
    The <b>NOT NULL</b> constraint ensures that a column <b>cannot store NULL values</b>.
</p>

<p>
    It forces the user to provide a value while inserting or updating data.
</p>

<p>
    👉 If a NULL value is inserted into a NOT NULL column, SQL will throw an <b>error</b>.
</p>
<h4>Why Use NOT NULL?</h4>

<p>
    NOT NULL is used when a column <b>must always contain data</b>.
</p>

<p>
    ✔ Ensures required fields are filled <br>
    ✔ Prevents missing or incomplete data <br>
    ✔ Improves data accuracy <br>
    ✔ Commonly used for names, IDs, email, passwords, etc.
</p>

            <h4>Syntax</h4>

<div class="syntax">
CREATE TABLE table_name ( <br>
&nbsp;&nbsp;column_name datatype NOT NULL <br>
);
</div>
<h4>Example 1: Student Table</h4>

<div class="syntax">
CREATE TABLE students ( <br>
&nbsp;&nbsp;id INT NOT NULL, <br>
&nbsp;&nbsp;name VARCHAR(50) NOT NULL, <br>
&nbsp;&nbsp;email VARCHAR(100) <br>
);
</div>

<p>
    ✔ <b>id</b> and <b>name</b> must have values <br>
    ✔ <b>email</b> can be NULL
</p>
<h4>Insert Data</h4>

<p>✅ Valid Insert</p>
<div class="syntax">
INSERT INTO students (id, name, email) <br>
VALUES (1, 'Priya', 'priya@gmail.com');
</div>

<p>❌ Invalid Insert (NULL in NOT NULL column)</p>
<div class="syntax">
INSERT INTO students (id, name) <br>
VALUES (NULL, 'Amit');
</div>

<p>
    ❌ This will cause an error because <b>id</b> is NOT NULL.
</p>
<h4>Adding NOT NULL Using ALTER TABLE</h4>

<div class="syntax">
ALTER TABLE students <br>
MODIFY name VARCHAR(50) NOT NULL;
</div>
<h4>Real-Life Example</h4>

<p>
    In a <b>Login System</b>:
</p>

<p>
    ✔ Username → NOT NULL <br>
    ✔ Password → NOT NULL <br>
    ✔ Email → NOT NULL
</p>

<p>
    Because login without these fields is meaningless.
</p>
<h4>NULL vs NOT NULL</h4>

<p>
    <b>NULL</b> → No value stored (unknown / missing) <br>
    <b>NOT NULL</b> → Value is mandatory
</p>

<p>
    ⚠ NULL is not equal to 0 or empty string.
</p>
<h4>Interview Questions on NOT NULL</h4>

<p><b>Q1.</b> What is NOT NULL constraint?</p>
<p>➡ It prevents a column from storing NULL values.</p>

<p><b>Q2.</b> Can a PRIMARY KEY contain NULL?</p>
<p>➡ No, PRIMARY KEY is automatically NOT NULL.</p>

<p><b>Q3.</b> Can we add NOT NULL later?</p>
<p>➡ Yes, using ALTER TABLE.</p>

<p><b>Q4.</b> Can NOT NULL be applied at table level?</p>
<p>➡ No, NOT NULL is a column level constraint.</p>

<h4>Assignment 1</h4>
<div class="assignment-box">
    <h3>Enforce the NOT NULL Rule</h3>

    <p>Your task is to create a feedback table where the sender cannot stay anonymous.</p>

    <div class="task">
        ➤ Create a table <b>contact_requests</b> with fields:<br>
        &nbsp;&nbsp;• id (INT)<br>
        &nbsp;&nbsp;• sender_name (VARCHAR(50)) <b>NOT NULL</b><br>
        &nbsp;&nbsp;• message (TEXT) <b>NOT NULL</b>
    </div>

    <div class="task">
        ➤ Try inserting a record with a NULL name and see SQL reject it! 🚫
    </div>
</div>

<h4>Assignment 2</h4>
<div class="assignment-box">
    <h3>Mandatory Membership</h3>
    <p>Create a secure login table where no field can be left blank.</p>

    <div class="task">
        ➤ Create a table <b>site_logins</b> with fields:<br>
        &nbsp;&nbsp;• user_id (INT)<br>
        &nbsp;&nbsp;• username (VARCHAR(30)) <b>NOT NULL</b><br>
        &nbsp;&nbsp;• password (VARCHAR(30)) <b>NOT NULL</b>
    </div>

    <div class="task">
        ➤ <b>Practice 1:</b> Insert a user 'Dolphin_Dev' with a password 'Fish123'.<br>
        ➤ <b>Practice 2:</b> Try to insert a user without a password and watch the database block it! 🚫
    </div>
</div>

<div class="assignment-box">
    <h3>💡 Pro Tip</h3>
    <p>
        NOT NULL is one of the <b>most asked SQL interview topics</b>.
        Always remember: <br>
        <b>PRIMARY KEY = UNIQUE + NOT NULL</b>
    </p>
</div>


<div class="mini-quiz-section">
    <h4>💎 The Integrity Challenge: No Missing Pieces!</h4>

    <div class="quiz-item">
        <p>1. If a column is NOT NULL, what happens if I try to insert a row without that data?</p>
        <input type="text" id="q1" placeholder="Reject or Accept?">
    </div>

    <div class="quiz-item">
        <p>2. Which keyword ensures that a column can never store empty/unknown values?</p>
        <input type="text" id="q2" placeholder="Type constraint...">
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
    <script>function validateAndNext(event) {
    const fields = [
        { id: 'q1', ans: "reject" },
        { id: 'q2', ans: "not null" }
    ];

    let allCorrect = true;
    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const val = input.value.trim().toLowerCase();

        // Checking for "reject" or "error" for Q1
        if (field.id === 'q1') {
            if (val !== "reject" && val !== "error" && val !== "fails") {
                input.style.border = "3px solid #ff4d4d";
                allCorrect = false;
            } else {
                input.style.border = "2px solid #1abc9c";
            }
        } else {
            if (val !== field.ans) {
                input.style.border = "3px solid #ff4d4d";
                allCorrect = false;
            } else {
                input.style.border = "2px solid #1abc9c";
            }
        }
    });

    if (allCorrect) {
        feedback.style.color = "#1abc9c";
        feedback.innerHTML = "✔ SLAY! Your data is 100% complete. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ WAIT! There's a hole in your data! Fix the red borders.";
        
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