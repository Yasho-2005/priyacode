<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL DELETE</title>
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

            <h3>DELETE</h3>

            <p>
                The <b>DELETE</b> command is used to <b>remove existing records</b> from a table.
                DELETE is a <b>DML (Data Manipulation Language)</b> command.
            </p>
            <div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "💔 <strong>SAYING GOODBYE, </strong> 🌊 <br>
        Using <strong>DELETE</strong> is how we remove specific data fish from our table. <br>
        But 🚨 <strong>WARNING</strong> 🚨: If you forget the <strong>WHERE</strong> clause, 
        you'll delete EVERYONE! It's giving <em>ghost town</em> vibes! 👻🔥"
    </div>
</div>

            <p>
                DELETE can be used to: <br>
                ✔ Delete a single row <br>
                ✔ Delete multiple rows <br>
                ✔ Delete all rows (if WHERE is not used)
            </p>

            <h4>Syntax</h4>

            <p>(A) Delete Specific Rows</p>
            <div class="syntax">
                DELETE FROM table_name <br>
                WHERE condition;
            </div>

            <p>(B) Delete All Rows (without WHERE)</p>
            <div class="syntax">
                DELETE FROM table_name;
            </div>

            <p>(C) Delete Using Multiple Conditions</p>
            <div class="syntax">
                DELETE FROM table_name <br>
                WHERE condition1 AND condition2;
            </div>

            <h4>Examples</h4>

            <p>Delete a Student With id = 3</p>
            <div class="syntax">
                DELETE FROM students <br>
                WHERE id = 3;
            </div>

            <p>Delete All Students With Marks Below 40</p>
            <div class="syntax">
                DELETE FROM students <br>
                WHERE marks < 40;
            </div>

            <p>Delete All Rows (Clear the Table)</p>
            <div class="syntax">
                DELETE FROM students;
            </div>

            <!-- ASSIGNMENT 1 -->
            <h4>Assignment 1</h4>
            <div class="assignment-box">

                <h3>Delete From Employees Table</h3>

                <p>Use DELETE to remove a row based on condition.</p>

                <div class="task">
                    ➤ Delete the employee whose <b>id = 2</b>
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

            <!-- ASSIGNMENT 2 -->
            <h4>Assignment 2</h4>
            <div class="assignment-box">

                <h3>Delete Books From Library</h3>

                <p>Use DELETE to remove rows based on conditions.</p>

                <div class="task">
                    ➤ Delete the book where <b>price > 500</b>
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

            <!-- Instagram Assignment -->
            <h4>Assignment 3</h4>
            <div class="assignment-box">

                <h3>Delete Instagram Users</h3>

                <p>Use DELETE to remove account(s) based on criteria.</p>

                <div class="task">
                    ➤ Delete the user whose <b>user_id = 3</b>
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

            <div class="mini-quiz-section">
    <h4>🗑️ The Goodbye Challenge: Delete with Care!</h4>

    <div class="quiz-item">
        <p>1. Which command is used to remove specific rows from a table?</p>
        <input type="text" id="q1" placeholder="Type command name...">
    </div>

    <div class="quiz-item">
        <p>2. What happens if you run 'DELETE FROM students' without a WHERE clause?</p>
        <input type="text" id="q2" placeholder="Delete one or all?">
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
        { id: 'q1', ans: "delete" },
        { id: 'q2', ans: "all" }
    ];

    let allCorrect = true;
    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const val = input.value.trim().toLowerCase();

        if (val !== field.ans && !val.includes("everyone")) { // Allowing 'all' or 'everyone'
            input.style.border = "3px solid #ff4d4d"; 
            allCorrect = false;
        } else {
            input.style.border = "2px solid #e74c3c"; // Crimson for Delete
        }
    });

    if (allCorrect) {
        feedback.style.color = "#e74c3c";
        feedback.innerHTML = "✔ SLAY! The trash has been taken out. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ WAIT! You're about to delete the wrong fish! Fix the red borders.";
        
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
