<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Insert</title>
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


            <h3>Drop</h3>
            <p>
                The <b>DROP</b> command is a <b>DDL (Data Definition Language)</b>
                command used to <b>permanently delete</b> a database, table, or column. <br>
                ⚠️ Once deleted, the data cannot be recovered, so DROP must be used carefully.</p>


                                <div class="mascot-container">
                <div class="dolphin-mascot">🐬</div>
                <div class="chat-bubble">
                    "Careful! When I <strong>DROP</strong> something, it’s like releasing a shell <br> back into the deep ocean—it’s gone forever!
                    <br> Make sure you really want to say goodbye to that data."</div>
            </div>
            <h4>Syntax</h4>
            <p>
                (A) Drop Database
            </p>
            <div class="syntax">
                DROP DATABASE database_name;
            </div>
            <p>(B) Drop Table</p>
            <div class="syntax">
                DROP TABLE table_name; <br>
            </div>
            <p>(C) Drop Column</p>
            <div class="syntax">ALTER TABLE table_name <br>
                DROP COLUMN column_name;</div>

            <h4>Examples</h4>
            <p>Drop Database</p>
            <div class="syntax-box">
                DROP DATABASE school;
            </div>
            <p>Drop Table</p>
            <div class="syntax-box">
                DROP TABLE students;
            </div>
            <p>Drop Column</p>
            <div class="syntax-box">
                ALTER TABLE students <br>
                DROP COLUMN marks;
            </div>


            <!-- <a class="submit-btn">Mark as Done ✔</a> -->

<div class="mini-quiz-section">
    <h4>🚫 The 'Point of No Return' Challenge</h4>

    <div class="quiz-item">
        <p>1. Which command deletes a whole table and all its data forever?</p>
        <input type="text" id="q1" placeholder="Type command...">
    </div>

    <div class="quiz-item">
        <p>2. Can you recover data once you have used the DROP command? (Yes/No)</p>
        <input type="text" id="q2" placeholder="Yes or No?">
    </div>
    
    <p id="quiz-feedback" style="font-weight: bold; padding: 10px; border-radius: 5px;"></p>
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
        { id: 'q1', ans: "drop table" },
        { id: 'q2', ans: "no" }
    ];

    let allCorrect = true;
    const feedback = document.getElementById('quiz-feedback');

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const val = input.value.trim().toLowerCase();

        if (val !== field.ans) {
            input.style.border = "2px solid #ff4d4d"; 
            input.style.backgroundColor = "#2d1a1a";
            allCorrect = false;
        } else {
            input.style.border = "2px solid #4cc9f0"; 
            input.style.backgroundColor = "transparent";
        }
    });

    if (allCorrect) {
        feedback.style.color = "#4cc9f0";
        feedback.innerHTML = "✔ Phew! You respect the power of the Drop. Proceeding...";
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#fff";
        // feedback.style.backgroundColor = "#ff4d4d"; // Catchy red background
        feedback.innerHTML = "❌ WRONG! You're going to lose all your data! Fix the red errors.";
        return false;
    }
}
    </script>


</body>

</html>