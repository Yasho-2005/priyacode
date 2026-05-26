<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Update</title>
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

            <h3>UPDATE</h3>

            <p>
                The <b>UPDATE</b> command is used to <b>modify existing records</b> in a table.  
                It changes only the values you specify and leaves other rows untouched.  
                UPDATE is a <b>DML (Data Manipulation Language)</b> command.
            </p>
            <div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "✨ <strong>MAKEOVER TIME,</strong> ✨ <br>
        Using <strong>UPDATE</strong> is how we give our data a fresh new look! 💅 <br>
        But 🚨 <strong>BEWARE</strong> 🚨: If you forget the <strong>WHERE</strong> clause, 
        everyone in the table gets the same makeover! Don't let your data look like clones! 😱🔥"
    </div>
</div>

            <p>
                UPDATE can be used to: <br>
                ✔ Update a single row <br>
                ✔ Update multiple rows <br>
                ✔ Update all rows (dangerous without WHERE)
            </p>

            <h4>Syntax</h4>

            <p>(A) Update a Single Column</p>
            <div class="syntax">
                UPDATE table_name <br>
                SET column_name = new_value <br>
                WHERE condition;
            </div>

            <p>(B) Update Multiple Columns</p>
            <div class="syntax">
                UPDATE table_name <br>
                SET column1 = value1, <br>
                &nbsp;&nbsp;&nbsp;column2 = value2 <br>
                WHERE condition;
            </div>

            <p>(C) Update All Rows (NO WHERE — very risky)</p>
            <div class="syntax">
                UPDATE table_name <br>
                SET column_name = value;
            </div>

            <h4>Examples</h4>

            <p>Update One Column</p>
            <div class="syntax-box">
                UPDATE students <br>
                SET marks = 95 <br>
                WHERE id = 2;
            </div>

            <p>Update Multiple Columns</p>
            <div class="syntax-box">
                UPDATE students <br>
                SET name = 'Priya Sharma', <br>
                &nbsp;&nbsp;&nbsp;marks = 98 <br>
                WHERE id = 3;
            </div>

            <p>Update All Rows</p>
            <div class="syntax-box">
                UPDATE students <br>
                SET marks = 100;
            </div>

            <h4>Assignment 1</h4>
            <div class="assignment-box">

                <h3>Update Employees Table</h3>

                <p>Use UPDATE to modify values in the employees table.</p>

                <div class="task">
                    ➤ Increase salary of employee with id = 1 to <b>55000</b> <br>
                    ➤ Update name of employee id = 2 to <b>Reena</b>
                </div>

                <div class="task">
                    <div class="sql-result-table">
                        <table>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>salary</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aditya</td>
                                <td>30000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Leena</td>
                                <td>45000</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <h4>Assignment 2</h4>
            <div class="assignment-box">

                <h3>Update Books Table</h3>

                <p>Modify the book information using UPDATE.</p>

                <div class="task">
                    ➤ Change price of book_id = 101 to <b>500</b> <br>
                    ➤ Change author of book_id = 103 to <b>Rhonda B.</b>
                </div>

                <div class="task">
                    <div class="sql-result-table">
                        <table>
                            <tr>
                                <th>book_id</th>
                                <th>title</th>
                                <th>author</th>
                                <th>price</th>
                            </tr>
                            <tr>
                                <td>101</td>
                                <td>The Alchemist</td>
                                <td>Paulo Coelho</td>
                                <td>450</td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>550</td>
                            </tr>
                            <tr>
                                <td>103</td>
                                <td>The Secret</td>
                                <td>Rhonda Byrne</td>
                                <td>499</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <h4>Assignment 3</h4>
<div class="assignment-box">

    <h3>Update Instagram Users Table</h3>

    <p>Use UPDATE to modify user details in the instagram_users table.</p>

    <div class="task">
        ➤ Change username of user_id = 3 to <b>"coding_girl"</b> <br>
        ➤ Increase followers of user_id = 2 to <b>12000</b>
    </div>

    <div class="task">
        <div class="sql-result-table">
            <table>
                <tr>
                    <th>user_id</th>
                    <th>username</th>
                    <th>followers</th>
                    <th>posts</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>travel_with_me</td>
                    <td>5000</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>fitness_freak</td>
                    <td>9500</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>priya_09</td>
                    <td>1500</td>
                    <td>25</td>
                </tr>
            </table>
        </div>
    </div>

</div>

<h4>Assignment 4</h4>
<div class="assignment-box">

    <h3>Update Instagram Posts Table</h3>

    <p>Modify post details using UPDATE.</p>

    <div class="task">
        ➤ Increase likes of post_id = 101 to <b>2500</b> <br>
        ➤ Change caption of post_id = 103 to <b>"New day, new energy ✨"</b>
    </div>

    <div class="task">
        <div class="sql-result-table">
            <table>
                <tr>
                    <th>post_id</th>
                    <th>user_id</th>
                    <th>caption</th>
                    <th>likes</th>
                </tr>
                <tr>
                    <td>101</td>
                    <td>1</td>
                    <td>Enjoying sunset 🌅</td>
                    <td>1800</td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>2</td>
                    <td>Workout mode ON 💪</td>
                    <td>2300</td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>3</td>
                    <td>Morning vibes ☀️</td>
                    <td>900</td>
                </tr>
            </table>
        </div>
    </div>

</div>

<div class="mini-quiz-section">
    <h4>💅 The Makeover Challenge: Edit with Style!</h4>

    <div class="quiz-item">
        <p>1. Which keyword is used to specify the new value for a column?</p>
        <input type="text" id="q1" placeholder="Type keyword...">
    </div>

    <div class="quiz-item">
        <p>2. What clause must you use to avoid updating EVERY row in the table?</p>
        <input type="text" id="q2" placeholder="Type clause...">
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
        { id: 'q1', ans: "set" },
        { id: 'q2', ans: "where" }
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
            input.style.border = "2px solid #ff00ff"; // Magenta for Update success
        }
    });

    if (allCorrect) {
        feedback.style.color = "#ff00ff";
        feedback.innerHTML = "✔ SLAY! Your data is looking fabulous. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ WAIT! The makeover went wrong! Fix the red borders.";
        
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
