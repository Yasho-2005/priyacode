<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL CHECK Constraint</title>
    <link rel="stylesheet" href="style.css?v=1.1">
    <style>
        /* Re-using your established styles */
        .assignment-box {
            width: 80%;
            margin: 25px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #ffcc00; /* Yellow for Check */
            border-radius: 12px;
            box-shadow: 0 0 10px #ffcc00;
            color: #fff;
            font-size: 18px;
            line-height: 28px;
            position: relative;
        }

        .assignment-box h3 {
            margin-top: 0;
            font-size: 22px;
            color: #ffcc00;
            text-shadow: 0 0 10px #ffcc00;
        }

        .assignment-box .task {
            color: #ffcc00;
            background: rgba(255, 204, 0, 0.1);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid rgba(255, 204, 0, 0.4);
            margin: 10px 0;
            font-size: 16px;
        }

        .syntax {
            font-family: 'Fira Code', monospace;
            background: #1a1f2a;
            padding: 12px 15px;
            border-left: 4px solid #ffcc00;
            border-radius: 6px;
            margin: 15px 0;
            color: #ffcc00;
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
            <h3>CHECK Constraint</h3>

            <div class="mascot-container">
                <div class="dolphin-mascot">🐬</div>
                <div class="chat-bubble">
                    "🏋️‍♂️ <strong>NO WEAK DATA ALLOWED!</strong> 💅 <br>
                    The <strong>CHECK</strong> constraint is like a fitness test for your rows. <br>
                    If the data doesn't meet my specific conditions—like age being over 18—
                    I'm kicking it out of the gym! Keep those standards high! ✨💪"
                </div>
            </div>

            <p>
                The <b>CHECK</b> constraint is used to limit the value range that can be placed in a column.
                If you define a CHECK constraint on a column, it will allow only certain values for this column.
            </p>

            <h4>Syntax</h4>
            <div class="syntax">
                CREATE TABLE table_name ( <br>
                &nbsp;&nbsp;column_name datatype CHECK (condition) <br>
                );
            </div>

            <h4>Example: Age Verification</h4>
            <div class="syntax">
                CREATE TABLE voters ( <br>
                &nbsp;&nbsp;id INT PRIMARY KEY, <br>
                &nbsp;&nbsp;name VARCHAR(50), <br>
                &nbsp;&nbsp;age INT CHECK (age >= 18) <br>
                );
            </div>

            <p>❌ <b>Invalid Insert:</b> <code>INSERT INTO voters VALUES (1, 'Rohan', 15);</code> <br>
                This will fail because 15 is not greater than or equal to 18.</p>

            <hr>

            <h4>Assignment 1</h4>
            <div class="assignment-box">
                <h3>The Bank Safety Rule</h3>
                <p>Ensure no bank account is ever created with a negative balance.</p>
                <div class="task">
                    ➤ Create a table <b>accounts</b> with fields:<br>
                    &nbsp;&nbsp;• acc_no (INT) PRIMARY KEY<br>
                    &nbsp;&nbsp;• balance (INT) <b>CHECK (balance >= 500)</b>
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Try to insert an account with 200 balance and watch the Trainer reject it! 🚫
                </div>
            </div>

            <h4>Assignment 2</h4>
            <div class="assignment-box">
                <h3>Voter Eligibility</h3>
                <p>Enforce the law! Only adults can register to vote.</p>
                <div class="task">
                    ➤ Create a table <b>voters</b> with fields:<br>
                    &nbsp;&nbsp;• vid (INT) PRIMARY KEY<br>
                    &nbsp;&nbsp;• age (INT) <b>CHECK (age >= 18)</b>
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Insert a voter with age 25. Then, try inserting age 12 and see the rejection! 🏋️‍♂️
                </div>
            </div>

            <div class="mini-quiz-section">
                <h4>💪 The Fitness Challenge: Check the Data!</h4>

                <div class="quiz-item">
                    <p>1. Which constraint is used to limit the range of values in a column?</p>
                    <input type="text" id="q1" placeholder="Type constraint...">
                </div>

                <div class="quiz-item">
                    <p>2. If <code>CHECK (price > 0)</code> is applied, will it accept 0? (Yes/No)</p>
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
            { id: 'q1', ans: "check" },
            { id: 'q2', ans: "no" }
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
                input.style.border = "2px solid #ffcc00";
            }
        });

        if (allCorrect) {
            feedback.style.color = "#ffcc00";
            feedback.innerHTML = "✔ SLAY! Your data is in peak condition. Proceeding...";
            return true; 
        } else {
            event.preventDefault(); 
            feedback.style.color = "#ff4d4d";
            feedback.innerHTML = "❌ WAIT! The data failed the fitness test! Fix the red borders.";
            
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