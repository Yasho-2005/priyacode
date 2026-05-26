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

            <h3>Comparison Operators</h3>

            <p>
                Comparison Operators are used to <b>compare values</b> inside SQL queries.
                They are mostly used with the <b>WHERE</b> clause to filter records.
            </p>

            <div class="mascot-container">
                <div class="dolphin-mascot">🦈</div>

                <div class="chat-bubble">
                    "⚡ <strong>COMPARISON OPERATORS</strong> help SQL make decisions! <br>
                    Want employees with salary greater than 50000? 💰 <br>
                    Want students with marks less than 40? 📉 <br>
                    Operators help SQL compare data like a detective 🔍✨"
                </div>
            </div>

            <h4>Types of Comparison Operators</h4>

            <div class="sql-result-table">
                <table>
                    <tr>
                        <th>Operator</th>
                        <th>Meaning</th>
                        <th>Example</th>
                    </tr>

                    <tr>
                        <td>=</td>
                        <td>Equal To</td>
                        <td>salary = 50000</td>
                    </tr>

                    <tr>
                        <td>></td>
                        <td>Greater Than</td>
                        <td>marks > 80</td>
                    </tr>

                    <tr>
                        <td>< </td>
                        <td>Less Than</td>
                        <td>age < 18</td>
                    </tr>

                    <tr>
                        <td>>=</td>
                        <td>Greater Than or Equal To</td>
                        <td>salary >= 40000</td>
                    </tr>

                    <tr>
                        <td><=</td>
                        <td>Less Than or Equal To</td>
                        <td>price <= 500</td>
                    </tr>

                    <tr>
                        <td>!= or <>
                        </td>
                        <td>Not Equal To</td>
                        <td>city != 'Mumbai'</td>
                    </tr>

                </table>
            </div>

            <h4>Syntax</h4>

            <div class="syntax">
                SELECT column_name <br>
                FROM table_name <br>
                WHERE condition;
            </div>

            <h4>Examples</h4>

            <p>1. Equal To (=)</p>

            <div class="syntax">
                SELECT * FROM employees <br>
                WHERE department = 'HR';
            </div>

            <p>2. Greater Than (>)</p>

            <div class="syntax">
                SELECT * FROM employees <br>
                WHERE salary > 50000;
            </div>

            <p>3. Less Than (<)< /p>

                    <div class="syntax">
                        SELECT * FROM students <br>
                        WHERE marks < 40;
                            </div>

                            <p>4. Greater Than or Equal To (>=)</p>

                            <div class="syntax">
                                SELECT * FROM products <br>
                                WHERE price >= 1000;
                            </div>

                            <p>5. Less Than or Equal To (<=)< /p>

                                    <div class="syntax">
                                        SELECT * FROM books <br>
                                        WHERE price <= 500;
                                            </div>

                                            <p>6. Not Equal To (!=)</p>

                                            <div class="syntax">
                                                SELECT * FROM customers <br>
                                                WHERE city != 'Delhi';
                                            </div>

                                            <h4>Practice Table</h4>

                                            <div class="sql-result-table">
                                                <table>

                                                    <tr>
                                                        <th>id</th>
                                                        <th>name</th>
                                                        <th>department</th>
                                                        <th>salary</th>
                                                    </tr>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rahul</td>
                                                        <td>HR</td>
                                                        <td>45000</td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Priya</td>
                                                        <td>IT</td>
                                                        <td>70000</td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Aman</td>
                                                        <td>Sales</td>
                                                        <td>35000</td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sneha</td>
                                                        <td>IT</td>
                                                        <td>55000</td>
                                                    </tr>

                                                </table>
                                            </div>

                                            <h4>Assignment 1</h4>

                                            <div class="assignment-box">

                                                <h3>Find High Salary Employees</h3>

                                                <p>
                                                    Use comparison operators to filter employees.
                                                </p>

                                                <div class="task">
                                                    ➤ Show employees whose salary is greater than <b>50000</b>
                                                </div>

                                            </div>

                                            <h4>Assignment 2</h4>

                                            <div class="assignment-box">

                                                <h3>Find IT Department Employees</h3>

                                                <p>
                                                    Use the Equal To operator.
                                                </p>

                                                <div class="task">
                                                    ➤ Show employees where department is <b>'IT'</b>
                                                </div>

                                            </div>

                                            <h4>Assignment 3</h4>

                                            <div class="assignment-box">

                                                <h3>Find Low Salary Employees</h3>

                                                <p>
                                                    Use Less Than operator.
                                                </p>

                                                <div class="task">
                                                    ➤ Show employees whose salary is less than <b>40000</b>
                                                </div>

                                            </div>

                                            <h4>Assignment 4</h4>

                                            <div class="assignment-box">

                                                <h3>Exclude HR Department</h3>

                                                <p>
                                                    Use Not Equal To operator.
                                                </p>

                                                <div class="task">
                                                    ➤ Show employees whose department is NOT <b>'HR'</b>
                                                </div>

                                            </div>

                                            <div class="mini-quiz-section">

                                                <h4>⚔ Comparison Operator Challenge</h4>

                                                <div class="quiz-item">
                                                    <p>1. Which operator is used for "Greater Than"?</p>

                                                    <input type="text" id="q1" placeholder="Type operator...">
                                                </div>

                                                <div class="quiz-item">
                                                    <p>2. Which operator is used for "Not Equal To"?</p>

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
    </section>

    <?php include 'includes/footer.php'; ?>

<script src="script.js"></script>

    <script>
        function validateAndNext(event) {
            const fields = [

                {
                    id: 'q1',
                    ans: ">"
                },
                {
                    id: 'q2',
                    ans: "!="
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
                    input.style.border = "2px solid #00ffff";
                }

            });

            if (allCorrect) {
                feedback.style.color = "#00ffff";

                feedback.innerHTML = "✔ AWESOME! You compared the data correctly 🔥";

                return true;
            } else {
                event.preventDefault();

                feedback.style.color = "#ff4d4d";

                feedback.innerHTML = "❌ Oops! Some operators are incorrect.";

                return false;
            }

        }
    </script>


</body>

</html>