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


</body>

</html>
