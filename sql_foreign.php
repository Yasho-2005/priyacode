<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL FOREIGN KEY Constraint</title>
    <link rel="stylesheet" href="style.css?v=1.1">
    <style>
        .assignment-box {
            width: 80%;
            margin: 25px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #ff79c6; /* Pink for Relationships */
            border-radius: 12px;
            box-shadow: 0 0 10px #ff79c6;
            color: #fff;
            font-size: 18px;
            line-height: 28px;
            position: relative;
        }

        .assignment-box h3 {
            margin-top: 0;
            font-size: 22px;
            color: #ff79c6;
            text-shadow: 0 0 10px #ff79c6;
        }

        .assignment-box .task {
            color: #ff79c6;
            background: rgba(255, 121, 198, 0.1);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid rgba(255, 121, 198, 0.4);
            margin: 10px 0;
            font-size: 16px;
        }

        .syntax {
            font-family: 'Fira Code', monospace;
            background: #1a1f2a;
            padding: 12px 15px;
            border-left: 4px solid #ff79c6;
            border-radius: 6px;
            margin: 15px 0;
            color: #ff79c6;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>FOREIGN KEY Constraint</h3>

            <div class="mascot-container">
                <div class="dolphin-mascot">🐬</div>
                <div class="chat-bubble">
                    "💞 <strong>IT'S ALL ABOUT CONNECTIONS!</strong> 💅 <br>
                    The <strong>FOREIGN KEY</strong> is the ultimate social butterfly! <br>
                    It links one table (the child) to another (the parent) using their IDs. <br>
                    Without it, your data would be totally lonely and disorganized. Let's make some friends! ✨🔗"
                </div>
            </div>
<h3>FOREIGN KEY Constraint</h3>

<p>
    The <b>FOREIGN KEY</b> constraint is used to <b>create a relationship between two tables</b>.
</p>

<p>
    It ensures that the value in one table <b>must exist in another table</b>.
</p>

<p>
    👉 FOREIGN KEY maintains <b>referential integrity</b> between tables.
</p>
<h4>Why Use FOREIGN KEY?</h4>

<p>
    FOREIGN KEY is used to:
</p>

<p>
    ✔ Connect related tables <br>
    ✔ Prevent invalid data insertion <br>
    ✔ Maintain consistency between tables <br>
    ✔ Avoid orphan records <br>
    ✔ Enforce parent–child relationship
</p>
<h4>Basic Concept</h4>

<p>
    ✔ The table that contains the PRIMARY KEY is called the <b>Parent Table</b> <br>
    ✔ The table that contains the FOREIGN KEY is called the <b>Child Table</b>
</p>

<p>
    FOREIGN KEY in child table refers to PRIMARY KEY in parent table.
</p>
<h4>Syntax</h4>

<div class="syntax">
CREATE TABLE child_table ( <br>
&nbsp;&nbsp;column_name datatype, <br>
&nbsp;&nbsp;FOREIGN KEY (column_name) REFERENCES parent_table(primary_key) <br>
);
</div>

<h4>Invalid Insert Example</h4>

<div class="syntax">
INSERT INTO orders VALUES (101, 5, 2000);
</div>

<p>
    ❌ Error: user_id 5 does not exist in users table
</p>
<h4>ON DELETE Rules</h4>

<p>
    ON DELETE rules define what happens in the <b>child table</b>
    when a record from the <b>parent table</b> is deleted.
</p>
<h4>ON DELETE CASCADE</h4>

<p>
    Automatically deletes related records from child table.
</p>

<div class="syntax">
FOREIGN KEY (user_id) <br>
REFERENCES users(user_id) <br>
ON DELETE CASCADE;
</div>

<p>
    ✔ If user is deleted, all related orders are deleted
</p>
<h4>ON DELETE SET NULL</h4>

<p>
    Sets FOREIGN KEY value to NULL when parent record is deleted.
</p>

<div class="syntax">
FOREIGN KEY (user_id) <br>
REFERENCES users(user_id) <br>
ON DELETE SET NULL;
</div>

<p>
    ✔ Order remains, user reference becomes NULL
</p>
<h4>ON DELETE RESTRICT / NO ACTION</h4>

<p>
    Prevents deletion of parent record if related child records exist.
</p>

<div class="syntax">
FOREIGN KEY (user_id) <br>
REFERENCES users(user_id) <br>
ON DELETE RESTRICT;
</div>

<p>
    ✔ Parent cannot be deleted until child records are removed
</p>


<h4>Adding FOREIGN KEY Using ALTER TABLE</h4>

<div class="syntax">
ALTER TABLE orders <br>
ADD FOREIGN KEY (user_id) REFERENCES users(user_id);
</div>
<h4>Real-Life Examples</h4>

<p>
    ✔ Instagram → user_id in posts table <br>
    ✔ Bank → customer_id in accounts table <br>
    ✔ College → student_id in enrollment table <br>
    ✔ E-commerce → product_id in orders table
</p>
<h4>FOREIGN KEY Rules</h4>

<p>
    ✔ FOREIGN KEY can have duplicate values <br>
    ✔ FOREIGN KEY can have NULL values <br>
    ✔ Parent column must be PRIMARY KEY or UNIQUE <br>
    ✔ One table can have multiple FOREIGN KEYS
</p>
<h4>Interview Questions on FOREIGN KEY</h4>

<p><b>Q1.</b> What is FOREIGN KEY?</p>
<p>➡ A constraint that links two tables.</p>

<p><b>Q2.</b> Can FOREIGN KEY contain NULL?</p>
<p>➡ Yes.</p>

<p><b>Q3.</b> Difference between PRIMARY KEY and FOREIGN KEY?</p>
<p>
    ➤ PRIMARY KEY uniquely identifies rows <br>
    ➤ FOREIGN KEY creates relationship between tables
</p>

<p><b>Q4.</b> What is ON DELETE CASCADE?</p>
<p>➡ Deletes child records automatically.</p>


<h4>Interview Misconception: FOREIGN KEY</h4>

<p>
    ❌ <b>Wrong / Incomplete Answer:</b> <br>
    “Foreign key is the primary key of another table.”
</p>

<p>
    This statement is <b>not completely correct</b> and sounds <b>incomplete in interviews</b>.
</p>
<p>
    A FOREIGN KEY is <b>not itself the primary key</b>.
</p>

<p>
    It is a <b>column in one table</b> that <b>refers to</b>
    the PRIMARY KEY (or UNIQUE key) of <b>another table</b>.
</p>

<p>
    The mistake happens because candidates <b>skip the relationship part</b>.
</p>

        

            <h4>Assignment 1: The Library System</h4>
            <div class="assignment-box">
                <h3>Connecting Books to Authors</h3>
                <p>Ensure every book in your library belongs to a real author.</p>
                <div class="task">
                    ➤ Create a table <b>authors</b> with <code>author_id</code> (PK) and <code>name</code>.<br>
                    ➤ Create a table <b>books</b> with <code>book_id</code> (PK), <code>title</code>, and <b>author_id</b> as a <b>FOREIGN KEY</b> referencing the authors table.
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Insert an author, then insert a book linked to that author's ID! 📚
                </div>
            </div>

            <h4>Assignment 2: Social Media Posts</h4>
            <div class="assignment-box">
                <h3>Linking Posts to Users</h3>
                <p>Every post on your platform must be owned by a registered user.</p>
                <div class="task">
                    ➤ Create a table <b>users</b> with <code>user_id</code> (PK) and <code>username</code>.<br>
                    ➤ Create a table <b>posts</b> with <code>post_id</code> (PK), <code>content</code>, and <b>user_id</b> as a <b>FOREIGN KEY</b>.
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Try to insert a post with a <code>user_id</code> that doesn't exist in the users table. Watch the Guru block it! 🚫
                </div>
            </div>

            <h4>Assignment 3: The Shopping Cart</h4>
            <div class="assignment-box">
                <h3>Products and Categories</h3>
                <p>Organize your shop by linking products to specific categories.</p>
                <div class="task">
                    ➤ Create a table <b>categories</b> with <code>cat_id</code> (PK) and <code>cat_name</code>.<br>
                    ➤ Create a table <b>products</b> with <code>prod_id</code> (PK), <code>prod_name</code>, and <b>cat_id</b> (FK).
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Use <b>ON DELETE CASCADE</b> so that if a category is deleted, all products in it vanish too! 🌊
                </div>
            </div>

            <div class="mini-quiz-section">
                <h4>🔗 The Connection Challenge: Link the Data!</h4>

                <div class="quiz-item">
                    <p>1. A Foreign Key in a child table usually refers to which key in the parent table?</p>
                    <input type="text" id="q1" placeholder="Type key name...">
                </div>

                <div class="quiz-item">
                    <p>2. Which rule deletes child rows automatically when the parent row is deleted?</p>
                    <input type="text" id="q2" placeholder="ON DELETE ...">
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
            { id: 'q1', ans: "primary key" },
            { id: 'q2', ans: "on delete cascade" }
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
                input.style.border = "2px solid #ff79c6";
            }
        });

        if (allCorrect) {
            feedback.style.color = "#ff79c6";
            feedback.innerHTML = "✔ SLAY! Your connections are unbreakable. Proceeding...";
            return true; 
        } else {
            event.preventDefault(); 
            feedback.style.color = "#ff4d4d";
            feedback.innerHTML = "❌ WAIT! The relationship is broken! Fix the red borders.";
            
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