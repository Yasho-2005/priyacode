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

    <h3>SQL JOIN Comparison</h3>

<p>
    This table shows the difference between all types of JOINs in SQL.
</p>

<div class="sql-result-table">
    <table>
        <tr>
            <th>JOIN Type</th>
            <th>Description</th>
            <th>Returns</th>
            <th>Unmatched Data</th>
            <th>Example Use Case</th>
        </tr>

        <tr>
            <td><b>INNER JOIN</b></td>
            <td>Returns only matching records from both tables</td>
            <td>Common data only</td>
            <td>Not included </td>
            <td>Find students who have marks</td>
        </tr>

        <tr>
            <td><b>LEFT JOIN</b></td>
            <td>Returns all records from left table + matching from right</td>
            <td>All left + matched right</td>
            <td>Left side kept, right = NULL</td>
            <td>Show all students even if marks missing</td>
        </tr>

        <tr>
            <td><b>RIGHT JOIN</b></td>
            <td>Returns all records from right table + matching from left</td>
            <td>All right + matched left</td>
            <td>Right side kept, left = NULL</td>
            <td>Show all departments even if no employees</td>
        </tr>

        <tr>
            <td><b>FULL JOIN</b></td>
            <td>Returns all records from both tables</td>
            <td>Everything (matched + unmatched)</td>
            <td>Both sides can have NULL</td>
            <td>Full report of all data</td>
        </tr>

    </table>
</div>
<br><br>
<p>
    💡 Tip: Always decide which table is more important.  <br> 
    If left is important → use LEFT JOIN  <br>
    If right is important → use RIGHT JOIN  <br>
    If both → use FULL JOIN  <br>
    If only matches → INNER JOIN 
</p>
<h4>Other Types of JOINs</h4>

<p>
    Apart from the main JOINs, SQL also provides a few other types of JOINs.  
    You don't need to learn them in detail right now, but it's good to know what they do.
</p>

<div class="sql-result-table">
    <table>
        <tr>
            <th>JOIN Type</th>
            <th>What it does</th>
        </tr>

        <tr>
            <td><b>CROSS JOIN</b></td>
            <td>
                Combines every row of the first table with every row of the second table.  
                (Also called Cartesian Product)
            </td>
        </tr>

        <tr>
            <td><b>SELF JOIN</b></td>
            <td>
                A table is joined with itself to compare rows within the same table.
            </td>
        </tr>

        <tr>
            <td><b>NATURAL JOIN</b></td>
            <td>
                Automatically joins tables based on columns with the same name.
            </td>
        </tr>

    </table>
</div>
<p style="margin-top:15px;">
    💡 For beginners, focus on <b>INNER, LEFT, RIGHT, and FULL JOIN</b>.  
    These are the most commonly used in real-world applications.
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
