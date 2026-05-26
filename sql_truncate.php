<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Truncate</title>
<link rel="stylesheet" href="style.css?v=1.1">

    <style>
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

.sql-result-table tr:last-child td {
    border-bottom: none;
}

    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">

            <h3>TRUNCATE</h3>

            <p>
                The <b>TRUNCATE</b> command is used to <b>delete all rows from a table instantly</b>.<br>
                It is a <b>DDL (Data Definition Language)</b> command and is faster than DELETE because:<br><br>
                ✔ It does not log each row deletion individually<br>
                ✔ It resets auto-increment values<br>
                ✔ It cannot be rolled back if not used inside a transaction
            </p>

            <div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "🧹 <strong>CLEAN FREAK ALERT!</strong>  <br>
        Using <strong>TRUNCATE</strong> is like using a giant vacuum on your house! <br>
        It sucks out every single piece of data but leaves the table standing! <br>
        It's fast, it's efficient, and it's <em>totally</em> ruthless! ✨"
    </div>
</div>

            <h4>Syntax</h4>

            <div class="syntax">
                TRUNCATE TABLE table_name;
            </div>

            <h4>Example</h4>

            <p>Remove all student records:</p>

            <div class="syntax">
                TRUNCATE TABLE students;
            </div>

            <p><b>Before TRUNCATE:</b></p>
            <div class="sql-result-table">
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>marks</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Aarav</td>
                        <td>88</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sanya</td>
                        <td>92</td>
                    </tr>
                </table>
            </div>
            <br>

            <p><b>After TRUNCATE:</b></p>
            <div class="sql-result-table">
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>marks</th>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:center; color:#00eaff;">No Data Available</td>
                    </tr>
                </table>
            </div>

            <h4>TRUNCATE vs DELETE</h4>

            <div class="sql-result-table">
    <table>
        <tr>
            <th>Feature</th>
            <th>TRUNCATE</th>
            <th>DELETE</th>
        </tr>
        <tr>
            <td>Command type</td>
            <td>DDL</td>
            <td>DML</td>
        </tr>
        <tr>
            <td>Remove data</td>
            <td>All rows</td>
            <td>Specific rows</td>
        </tr>
        <tr>
            <td>Rollback</td>
            <td>NO (mostly)</td>
            <td>YES</td>
        </tr>
        <tr>
            <td>Speed</td>
            <td>Very fast</td>
            <td>Slower</td>
        </tr>
        <tr>
            <td>Where clause</td>
            <td>❌ Not allowed</td>
            <td>✔ Allowed</td>
        </tr>
        <tr>
            <td>Reset ID</td>
            <td>✔ Yes</td>
            <td>❌ No</td>
        </tr>
        <tr>
            <td>Trigger execution</td>
            <td>❌ No</td>
            <td>✔ Yes</td>
        </tr>
    </table>
</div>

<h4>Real World Example of Truncate</h4>
<div class="syntax">
<p>🛒<b>E-Commerce Site: </b> <br> 
You might truncate a temporary shopping cart table when a new session starts.</p></div>
<div class="syntax">
<p>📋<b>Testing or Development: </b> <br> Developers often truncate tables after test runs to clear 
dummy.</p></div>

<div class="mini-quiz-section">
    <h4>🧹 The Deep Clean Challenge</h4>

    <div class="quiz-item">
        <p>1. Does TRUNCATE delete the table structure or just the data inside?</p>
        <input type="text" id="q1" placeholder="Structure or Data?">
    </div>

    <div class="quiz-item">
        <p>2. Which is faster for emptying a huge table: DELETE or TRUNCATE?</p>
        <input type="text" id="q2" placeholder="Type command name...">
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
        { id: 'q1', ans: "data" },
        { id: 'q2', ans: "truncate" }
    ];

    let allCorrect = true;
    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const val = input.value.trim().toLowerCase();

        if (val !== field.ans) {
            // No background color, just a thick red border
            input.style.border = "3px solid #ff4d4d"; 
            allCorrect = false;
        } else {
            input.style.border = "2px solid #ffd700"; // Yellow/Gold for Truncate
        }
    });

    if (allCorrect) {
        feedback.style.color = "#ffd700";
        feedback.innerHTML = "✔ SLAY! The table is sparkling clean. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d"; // Just red text
        feedback.innerHTML = "❌ WAIT! You're missing some dust bunnies! Fix the red borders.";
        
        // Shake effect to make it "catchy" without the background color
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
