<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL GRANT</title>
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
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">

            <h3>GRANT</h3>
            <p>
                <b>GRANT</b> is a <b>Data Control Language (DCL)</b> command used to give
                <b>permissions</b> (privileges) to a user.  
                GRANT allows a user to perform operations like SELECT, INSERT, DELETE, UPDATE, etc.
            </p>

            <h4>Why do we need GRANT?</h4>
            <p>
                In real databases, not everyone gets full access.  
                To protect data and maintain security, the DBA (Database Administrator) gives different
                permissions to different users using the GRANT command.
            </p>

            <h4>Syntax</h4>
            <div class="syntax">
                GRANT privilege_name ON table_name TO 'username'@'host';
            </div>
 
            <p><b>Common Privileges:</b></p>
            
                <p>○ SELECT</p>
                <p>○ INSERT</p>
                <p>○ UPDATE</p>
                <p>○ DELETE</p>
                <p>○ ALL PRIVILEGES</p>
            

            <h4>Example 1: Give SELECT permission</h4>
            <div class="syntax-box">
                GRANT SELECT ON school.students TO 'ram'@'localhost';
            </div>

            <h4>Example 2: Give INSERT + UPDATE</h4>
            <div class="syntax-box">
                GRANT INSERT, UPDATE ON company.employees TO 'neha'@'localhost';
            </div>

            <h4>Example 3: Give ALL PRIVILEGES</h4>
            <div class="syntax-box">
                GRANT ALL PRIVILEGES ON instagram.users TO 'admin'@'localhost';
            </div>

            <center>
                <img src="img/sql_grant.png" alt="" height="300px" width="600px">
            </center>

            <h4>Assignment 1</h4>
            <div class="assignment-box">
                <h3>Grant Permissions in School Database</h3>

                <div class="task">
                    ➤ Give <b>SELECT</b> privilege on <b>students</b> table to user <b>rahul</b>.
                </div>

                <div class="task">
                    ➤ Give <b>INSERT</b> and <b>UPDATE</b> privileges on <b>marks</b> table to user <b>priya</b>.
                </div>
            </div>

            <h4>Assignment 2</h4>
            <div class="assignment-box">
                <h3>Grant Access to Instagram Users Table</h3>

                <div class="task">
                    ➤ Give <b>ALL PRIVILEGES</b> on <b>users</b> table to <b>superadmin</b>.
                </div>

                <div class="task">
                    ➤ Give only <b>SELECT</b> permission to user <b>viewer1</b>.
                </div>
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

</body>

</html>
