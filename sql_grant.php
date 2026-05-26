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
            <div class="mascot-container">
    <div class="dolphin-mascot">🐬</div>
    <div class="chat-bubble">
        "👑 <strong>VIP ACCESS ONLY, </strong>  <br>
        Using <strong>GRANT</strong> is how you give your friends (or other users) 
        permission to touch your data! <br>
        You're the boss now—decide who gets to <strong>SELECT</strong> and who gets to 
        <strong>UPDATE</strong>. Keep that circle tight! ✨🛡️"
    </div>
</div>

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
            <div class="mini-quiz-section">
    <h4>🔑 The Security Challenge: Hand Out the Keys!</h4>

    <div class="quiz-item">
        <p>1. Which keyword is used to specify the user who is receiving the permissions?</p>
        <input type="text" id="q1" placeholder="GRANT ... TO ...">
    </div>

    <div class="quiz-item">
        <p>2. If I want to give someone permission to see data, I GRANT them _______?</p>
        <input type="text" id="q2" placeholder="Type privilege name...">
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
        { id: 'q1', ans: "to" },
        { id: 'q2', ans: "select" }
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
            input.style.border = "2px solid #f1c40f"; // Gold for Grant
        }
    });

    if (allCorrect) {
        feedback.style.color = "#f1c40f";
        feedback.innerHTML = "✔ SLAY! You're a security legend. Access granted! 🔓";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ WAIT! Security breach! Fix the red borders to secure the club.";
        
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
