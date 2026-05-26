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
            <h3>SQL Constraints</h3>
            <div class="mascot-container">
                <div class="dolphin-mascot">🐬</div>
                <div class="chat-bubble">
                    "🚨 <strong>HALT! SECURITY CHECK!</strong> 💅 <br>
                    Think of <strong>CONSTRAINTS</strong> as the bouncers of your database! <br>
                    They make sure no trash data gets into your beautiful tables. <br>
                    Break the rules, and I'll personally throw your query out! Stay disciplined! ✨🛡️"
                </div>
            </div>

            <p>
                <b>SQL Constraints</b> are <b>rules applied on table columns</b> to maintain
                <b>data accuracy, integrity, and reliability</b> in a database.
            </p>

            <p>
                Constraints control the type of data that can be inserted, updated, or deleted
                in a table.
            </p>

            <p>
                👉 If a constraint is violated, SQL will <b>reject the operation</b>.
            </p>

            <hr>
            <h4>Why Do We Need Constraints?</h4>

            <p>
                Constraints help to:
            </p>

            <p>
                ✔ Prevent invalid data entry <br>
                ✔ Maintain data consistency <br>
                ✔ Enforce business rules <br>
                ✔ Improve database reliability <br>
                ✔ Avoid duplicate or NULL values where not allowed
            </p>

            <h4>Types of SQL Constraints</h4>

            <p>
                SQL provides the following commonly used constraints:
            </p>

            <p>
                ✔ NOT NULL <br>
                ✔ UNIQUE <br>
                ✔ PRIMARY KEY <br>
                ✔ FOREIGN KEY <br>
                ✔ CHECK <br>
                ✔ DEFAULT
            </p>
            <h4>1️⃣ Column Level Constraints</h4>

            <p>
                Column level constraints are applied <b>directly to a single column</b>
                while defining that column.
            </p>

            <p>
                They affect <b>only that column</b>.
            </p>

            <div class="syntax">
                CREATE TABLE students ( <br>
                &nbsp;&nbsp;id INT PRIMARY KEY, <br>
                &nbsp;&nbsp;name VARCHAR(50) NOT NULL, <br>
                &nbsp;&nbsp;marks INT CHECK (marks >= 0) <br>
                );
            </div>

            <p>
                ✔ Commonly used for NOT NULL, UNIQUE, CHECK, DEFAULT
            </p>
            <h4>2️⃣ Table Level Constraints</h4>

            <p>
                Table level constraints are applied <b>after all columns are defined</b>.
            </p>

            <p>
                They can apply to <b>one or multiple columns together</b>.
            </p>

            <div class="syntax">
                CREATE TABLE orders ( <br>
                &nbsp;&nbsp;order_id INT, <br>
                &nbsp;&nbsp;user_id INT, <br>
                &nbsp;&nbsp;amount INT, <br>
                &nbsp;&nbsp;PRIMARY KEY (order_id), <br>
                &nbsp;&nbsp;FOREIGN KEY (user_id) REFERENCES users(user_id) <br>
                );
            </div>

            <p>
                ✔ Mostly used for PRIMARY KEY and FOREIGN KEY
            </p>
            <h4>Common Constraints Explained</h4>

            <p><b>NOT NULL</b> – Ensures column cannot store NULL values.</p>
            <p><b>UNIQUE</b> – Ensures all values in a column are different.</p>
            <p><b>PRIMARY KEY</b> – Uniquely identifies each row (NOT NULL + UNIQUE).</p>
            <p><b>FOREIGN KEY</b> – Creates relationship between two tables.</p>
            <p><b>CHECK</b> – Validates values based on condition.</p>
            <p><b>DEFAULT</b> – Assigns default value if none is provided.</p>
            <h4>ON DELETE Rules (Foreign Key)</h4>

            <p>
                These rules decide what happens in the child table
                when a record from the parent table is deleted.
            </p>

            <p>
                ✔ ON DELETE CASCADE – Deletes related child records automatically <br>
                ✔ ON DELETE SET NULL – Sets foreign key value to NULL <br>
                ✔ ON DELETE RESTRICT – Prevents deletion if related data exists <br>
                ✔ ON DELETE NO ACTION – Same as RESTRICT (default behavior)
            </p>

            <div class="syntax">
                FOREIGN KEY (user_id) <br>
                REFERENCES users(id) <br>
                ON DELETE CASCADE;
            </div>
            <h4>Interview Questions on SQL Constraints</h4>

            <p><b>Q1.</b> What are SQL constraints?</p>
            <p>➡ Rules used to maintain data integrity in a database.</p>

            <p><b>Q2.</b> Difference between PRIMARY KEY and UNIQUE?</p>
            <p>
                ➤ PRIMARY KEY does not allow NULL and only one per table <br>
                ➤ UNIQUE allows NULL values and multiple UNIQUE columns are allowed
            </p>

            <p><b>Q3.</b> Can a table have multiple PRIMARY KEYS?</p>
            <p>➡ No, but it can have a <b>composite primary key</b>.</p>

            <p><b>Q4.</b> What is column level vs table level constraint?</p>
            <p>
                ➤ Column level applies to one column <br>
                ➤ Table level can apply to multiple columns
            </p>

            <p><b>Q5.</b> What happens if constraint is violated?</p>
            <p>➡ SQL throws an error and rejects the operation.</p>
            <div class="assignment-box">
                <h3>💡 Pro Tip</h3>
                <p>
                    Constraints are not just theory questions — they are heavily used
                    in <b>real projects, interviews, and backend systems</b>.
                    Always think of constraints as <b>database security rules</b>.
                </p>
            </div>

            <div class="mini-quiz-section">
                <h4>🛡️ The Rulebook Challenge: Enforce the Law!</h4>

                <div class="quiz-item">
                    <p>1. Which constraint ensures a column has no duplicate values AND no NULL values?</p>
                    <input type="text" id="q1" placeholder="Type constraint name...">
                </div>

                <div class="quiz-item">
                    <p>2. Which rule deletes child records automatically when a parent is deleted?</p>
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
            const fields = [{
                    id: 'q1',
                    ans: "primary key"
                },
                {
                    id: 'q2',
                    ans: "on delete cascade"
                }
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
                    input.style.border = "2px solid #00eaff"; // Cyan for Constraints
                }
            });

            if (allCorrect) {
                feedback.style.color = "#00eaff";
                feedback.innerHTML = "✔ SLAY! Your database is safe and sound. Proceeding...";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ WAIT! You're breaking the rules! Fix the red borders.";

                // Catchy shake effect
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