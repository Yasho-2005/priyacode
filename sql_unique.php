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
            <h3>Unique Constraint</h3>
<div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "✨ <strong>I'M THE ONLY ONE,</strong> 💅 <br>
        Using <strong>UNIQUE</strong> means every value in this column has to be a total original. <br>
        No copy-cats allowed in my database! If you try to bring a duplicate, 
        I'm sending it right back to the deep end! Stay rare! 🦄💎"
    </div>
</div>
<h3>UNIQUE Constraint</h3>

<p>
    The <b>UNIQUE</b> constraint ensures that <b>all values in a column are different</b>.
</p>

<p>
    It prevents <b>duplicate values</b> from being stored in a column.
</p>

<p>
    👉 Unlike PRIMARY KEY, a UNIQUE column <b>can allow NULL values</b>.
</p>
<h4>Why Use UNIQUE?</h4>

<p>
    UNIQUE is used when data must be <b>distinct but not necessarily a primary identifier</b>.
</p>

<p>
    ✔ Prevents duplicate entries <br>
    ✔ Maintains data consistency <br>
    ✔ Commonly used for email, phone number, username <br>
    ✔ Helps enforce business rules
</p>
<h4>Syntax</h4>

<div class="syntax">
CREATE TABLE table_name ( <br>
&nbsp;&nbsp;column_name datatype UNIQUE <br>
);
</div>
<h4>Example 1: Users Table</h4>

<div class="syntax">
CREATE TABLE users ( <br>
&nbsp;&nbsp;user_id INT, <br>
&nbsp;&nbsp;email VARCHAR(100) UNIQUE, <br>
&nbsp;&nbsp;phone VARCHAR(15) UNIQUE <br>
);
</div>

<p>
    ✔ Email and phone must be unique <br>
    ✔ user_id can have duplicate values
</p>
<h4>Insert Data</h4>

<p>✅ Valid Insert</p>
<div class="syntax">
INSERT INTO users VALUES (1, 'a@gmail.com', '9998887776');
</div>

<p>❌ Invalid Insert (Duplicate Email)</p>
<div class="syntax">
INSERT INTO users VALUES (2, 'a@gmail.com', '8887776665');
</div>

<p>
    ❌ This will cause an error because <b>email</b> must be unique.
</p>
<h4>UNIQUE and NULL Values</h4>

<p>
    A UNIQUE column <b>can contain NULL values</b>.
</p>

<div class="syntax">
INSERT INTO users VALUES (3, NULL, '7776665554');
</div>

<p>
    ✔ NULL is allowed because it represents "unknown" value.
</p>
<h4>Table Level UNIQUE Constraint</h4>

<p>
    Used when uniqueness is required on <b>multiple columns together</b>.
</p>

<div class="syntax">
CREATE TABLE employees ( <br>
&nbsp;&nbsp;emp_id INT, <br>
&nbsp;&nbsp;email VARCHAR(100), <br>
&nbsp;&nbsp;department VARCHAR(50), <br>
&nbsp;&nbsp;UNIQUE (email, department) <br>
);
</div>

<p>
    ✔ Same email can exist in different departments <br>
    ✔ Same email in same department is not allowed
</p>
<h4>UNIQUE vs PRIMARY KEY</h4>

<p>
    <b>UNIQUE</b> <br>
    ➤ Allows NULL values <br>
    ➤ Multiple UNIQUE columns allowed <br>
    ➤ Used for alternate keys
</p>

<p>
    <b>PRIMARY KEY</b> <br>
    ➤ Does NOT allow NULL <br>
    ➤ Only one per table <br>
    ➤ Used to uniquely identify rows
</p>
<h4>Adding UNIQUE Using ALTER TABLE</h4>

<div class="syntax">
ALTER TABLE users <br>
ADD UNIQUE (email);
</div>
<h4>Real-Life Example</h4>

<p>
    In a <b>Signup System</b>:
</p>

<p>
    ✔ Email → UNIQUE <br>
    ✔ Phone Number → UNIQUE <br>
    ✔ Username → UNIQUE
</p>

<p>
    Because two users cannot register with the same details.
</p>
<h4>Interview Questions on UNIQUE</h4>

<p><b>Q1.</b> What is UNIQUE constraint?</p>
<p>➡ Ensures all values in a column are different.</p>

<p><b>Q2.</b> Can UNIQUE contain NULL?</p>
<p>➡ Yes, UNIQUE allows NULL values.</p>

<p><b>Q3.</b> How many UNIQUE constraints can a table have?</p>
<p>➡ Multiple.</p>

<p><b>Q4.</b> Difference between UNIQUE and PRIMARY KEY?</p>
<p>➡ PRIMARY KEY does not allow NULL and only one per table.</p>

<h4>Assignment 1</h4>
<div class="assignment-box">
    <h3>One-of-a-Kind Subscribers</h3>

    <p>Create a newsletter list where every email must be 100% original.</p>

    <div class="task">
        ➤ Create a table <b>newsletter</b> with fields:<br>
        &nbsp;&nbsp;• sub_id (INT)<br>
        &nbsp;&nbsp;• email (VARCHAR(100)) <b>UNIQUE</b>
    </div>

    <div class="task">
        ➤ Insert 'test@gmail.com' twice and watch the duplicate error happen! ✨
    </div>
</div>
<h4>Assignment 2</h4>
<div class="assignment-box">
    <h3>No Identical Identities</h3>
    <p>Build a citizen registry where ID numbers can never be duplicated.</p>

    <div class="task">
        ➤ Create a table <b>citizens</b> with fields:<br>
        &nbsp;&nbsp;• name (VARCHAR(50))<br>
        &nbsp;&nbsp;• adhaar_no (BIGINT) <b>UNIQUE</b>
    </div>

    <div class="task">
        ➤ <b>Practice 1:</b> Insert a citizen with ID 123456789.<br>
        ➤ <b>Practice 2:</b> Try inserting another person with the SAME ID and see SQL catch the copy-cat! 🦄
    </div>
</div>
<div class="assignment-box">
    <h3>💡 Pro Tip</h3>
    <p>
        UNIQUE is often used for <b>emails, usernames, and phone numbers</b>.
        In interviews, remember: <br>
        <b>PRIMARY KEY = UNIQUE + NOT NULL</b>
    </p>
</div>



<div class="mini-quiz-section">
    <h4>🦄 The 'One of a Kind' Challenge</h4>

    <div class="quiz-item">
        <p>1. Which constraint allows multiple NULL values but forbids any duplicate text or numbers?</p>
        <input type="text" id="q1" placeholder="Type constraint...">
    </div>

    <div class="quiz-item">
        <p>2. Can a single table have more than one UNIQUE column? (Yes/No)</p>
        <input type="text" id="q2" placeholder="Yes or No?">
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
        { id: 'q1', ans: "unique" },
        { id: 'q2', ans: "yes" }
    ];

    let allCorrect = true;
    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const val = input.value.trim().toLowerCase();

        if (val !== field.ans) {
            input.style.border = "3px solid #ff4d4d"; 
            allCorrect = false;
        } else {
            input.style.border = "2px solid #a29bfe"; // Violet for Unique
        }
    });

    if (allCorrect) {
        feedback.style.color = "#a29bfe";
        feedback.innerHTML = "✔ SLAY! You're an absolute original. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ WAIT! That's a total copy-cat! Fix the red borders.";
        
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