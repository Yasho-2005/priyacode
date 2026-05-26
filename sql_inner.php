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
.venn-container {
    text-align: center;
    margin: 40px 0;
    font-family: sans-serif;
}

.venn {
    position: relative;
    width: 300px; /* Adjusted width for better overlap math */
    height: 180px;
    margin: auto;
}

.circle {
    width: 180px;
    height: 180px;
    border: 2px solid #999;
    border-radius: 50%;
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    box-sizing: border-box;
}

.circle.left {
    left: 0;
    padding-left: 20px;
}

.circle.right {
    right: 0;
    justify-content: flex-end;
    padding-right: 20px;
}

.overlap {
    position: absolute;
    top: 0;
    left: 60px; /* Position where circles intersect */
    width: 180px; /* Match circle width */
    height: 180px;
    background: #16a085;
    /* This creates the 'lens' shape by clipping to the intersection */
    clip-path: inset(0 60px 0 60px); 
    border-radius: 50%;
    z-index: 1;
}

/* Ensure text stays readable and above the green area if necessary */
.circle span {
    position: relative;
    z-index: 3;
    font-weight: bold;
    color: #555;
}
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">

           <h3>INNER JOIN</h3>

<p>
    The <b>INNER JOIN</b> keyword is used to <b>combine rows from two or more tables</b> 
    based on a related column between them.
    It returns <b>only the matching records</b> from both tables.
</p>

<div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
         <strong>TEAMWORK TIME!</strong>  <br>
        INNER JOIN only shows data where BOTH tables agree! 💯 <br>
        No match?  No entry!  <br>
        Only perfect pairs make it through 😎🔥
    </div>
</div>

<p>
    INNER JOIN is used to: <br>
    ✔ Combine related data from multiple tables <br>
    ✔ Fetch only matching records <br>
    ✔ Build meaningful relationships between tables
</p>

<div class="venn-container">
    <h3>INNER JOIN</h3>

    <div class="venn">
        <div class="circle left"><span>TABLE1</span></div>
        <div class="circle right"><span>TABLE2</span></div>
        <div class="overlap"></div>
    </div>
</div>

<h4>Syntax</h4>

<div class="syntax">
    SELECT column_names <br>
    FROM table1 <br>
    INNER JOIN table2 <br>
    ON table1.common_column = table2.common_column;
</div>

<h4>Example</h4>

<p>We have two tables:</p>

<div class="sql-result-table">
    <h4>Customers Table</h4>
    <table>
        <tr>
            <th>customer_id</th>
            <th>name</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Rahul</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Priya</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Aman</td>
        </tr>
    </table>
</div>

<div class="sql-result-table">
    <h4>Orders Table</h4>
    <table>
        <tr>
            <th>order_id</th>
            <th>customer_id</th>
        </tr>
        <tr>
            <td>101</td>
            <td>1</td>
        </tr>
        <tr>
            <td>102</td>
            <td>2</td>
        </tr>
        <tr>
            <td>103</td>
            <td>5</td> <!-- no match -->
        </tr>
    </table>
</div>

<p><b>Query:</b></p>

<div class="syntax-box">
    SELECT Orders.order_id, Customers.name <br>
    FROM Orders <br>
    INNER JOIN Customers <br>
    ON Orders.customer_id = Customers.customer_id;
</div>

<p><b>Result:</b></p>

<div class="sql-result-table">
    <table>
        <tr>
            <th>order_id</th>
            <th>name</th>
        </tr>
        <tr>
            <td>101</td>
            <td>Rahul</td>
        </tr>
        <tr>
            <td>102</td>
            <td>Priya</td>
        </tr>
    </table>
</div>

<p>
    Notice: Order with customer_id = 5 is NOT included 
    ❌ because there is no match in Customers table.
</p>
        
<h4>Assignment</h4>
<div class="assignment-box">

    <h3>Join Students & Marks</h3>

    <p>Use INNER JOIN to combine student names with their marks.</p>

    <div class="task">
        ➤ Show student name and marks using INNER JOIN <br>
        ➤ Only display students who have marks
    </div>

    <div class="task">
        <div class="sql-result-table">
            <table>
                <tr>
                    <th>student_id</th>
                    <th>name</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ankit</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sneha</td>
                </tr>
            </table>
        </div>

        <div class="sql-result-table">
            <table>
                <tr>
                    <th>student_id</th>
                    <th>marks</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>85</td>
                </tr>
            </table>
        </div>
    </div>

</div>        
<h4>Assignment 2 (Challenge 🚀)</h4>
<div class="assignment-box">

    <h3>Employee Details using INNER JOIN</h3>

    <p>
        You are given two tables: <b>employees</b> and <b>emp_details</b>. <br>
        Use <b>INNER JOIN</b> to combine both tables and get complete employee information.
    </p>

    <div class="task">
        ➤ Display: <b>emp_id, name, contact, department, salary</b> <br>
        ➤ Only show employees that exist in BOTH tables <br>
        ➤ Use INNER JOIN on <b>emp_id</b>
    </div>

    <!-- TABLE 1 -->
    <div class="sql-result-table">
        <h4>Employees Table</h4>
        <table>
            <tr>
                <th>emp_id</th>
                <th>name</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Rahul</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Priya</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Aman</td>
            </tr>
        </table>
    </div>

    <!-- TABLE 2 -->
    <div class="sql-result-table">
        <h4>emp_details Table</h4>
        <table>
            <tr>
                <th>emp_id</th>
                <th>contact</th>
                <th>department</th>
                <th>salary</th>
            </tr>
            <tr>
                <td>1</td>
                <td>9876543210</td>
                <td>HR</td>
                <td>40000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>9123456780</td>
                <td>IT</td>
                <td>55000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>9000000000</td>
                <td>Finance</td>
                <td>60000</td>
            </tr>
        </table>
    </div>

</div>
<p style="margin-top:10px;">
    ⚡ Notice: Employee with <b>emp_id = 3</b> is NOT shown and <b>emp_id = 4</b> is also NOT shown 
    because INNER JOIN only returns matching records from BOTH tables.
</p>

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
