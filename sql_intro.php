<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>SQL Introduction</h3>

            <h4>1. What? What is SQL?</h4>
            <p>
                SQL (<b>Structured Query Language</b>) is a language used to
                <b>store</b>, <b>manage</b>, and <b>retrieve</b> data from databases.
            </p>

            <h4>2. Why? Why do we need SQL?</h4>
            <p>
                Data is everywhere — in apps, websites, banks, and schools.
                SQL helps us <b>organize</b> and <b>access</b> this data easily.
            </p>

            <h4>3. Where? Where is SQL used?</h4>
            <p>
                SQL is used in almost every field.
                Examples include:
            </p>
            <ul>
                <li>
                    <p>YouTube stores video information in databases.</p>
                </li>
                <li>
                    <p>Banks store customer data.</p>
                </li>
                <li>
                    <p>E-commerce apps store product and order details.</p>
                </li>
            </ul>
            <h4>4. Who? Who uses SQL?</h4>
            <p>
                <b>Developers </b>,<b> data analyst</b>, <b>database administrators</b>, and even <b>testers</b>
                use <i>SQL</i>
                to work with data.
            </p>
            <h4>5. How? How does SQL work?</h4>
            <p>
                SQL sends commands to a database ( like <b>MySQL</b> , <b>SQL Server</b>, or
                <b>Oracle</b>) which stores and return the requested data.
            </p>

            <div class="syntax">
                <center><img class="flowchart-img" src="img/college_neon_bg.png" alt="" height="300px" width="500px"></center>
                <p><i>
                        Imagine our college has thousands of students. If i want to know which students
                        scored above 80 marks - I cannot open every record manually. Instead, I can just
                        ask the database " Hey ! Database , show me all the students whose marks are above 80".
                        That's exactly what SQL does - it helps us talk to the database.
                    </i></p>
            </div>

            <center><img class="flowchart-img" src="img/sql_sub.png" alt="" height="300px" width="500px"></center>
            <h4>✧ SQL is English like Language</h4>

            <p><b>In English: </b>
                Give me all students with marks above 80.</p>

            <p><b>In SQL: </b> Select * from students where marks > 80</p>

            <h4>✧ SQL <i>Major commands</i></h4>
            <p>✯ Select (R) <br>
                ✯ Update (U) <br>
                ✯ Delete (D) <br>
                ✯ Insert <br>
                ✯ Where</p>
            <p>in short :- CRUD operations</p>

            <h4>Simple Example:</h4>

            <div class="syntax-box">
                CREATE TABLE students (<br>
                &nbsp;&nbsp;id INT,<br>
                &nbsp;&nbsp;name VARCHAR(50),<br>
                &nbsp;&nbsp;marks INT<br>
                );
            </div>

            <h4>Insert Example:</h4>

            <div class="syntax-box">
                INSERT INTO students VALUES (1, 'Priya', 90);
            </div>

            <h4>Select Example:</h4>

            <div class="syntax-box">
                SELECT * FROM students;
            </div>


            <div class="mini-quiz-section">
                <h4>🐬 SQL's Challenge: Unlock the Next Topic!</h4>

                <div class="quiz-item">
                    <p>1. Which command is used to fetch data from a database?</p>
                    <input type="text" id="q1" placeholder="Type command here...">
                </div>

                <div class="quiz-item">
                    <p>2. SQL is a language that helps us talk to the _______?</p>
                    <input type="text" id="q2" placeholder="Type answer here...">
                </div>

                
                <p id="quiz-feedback" style="margin-top: 10px; font-weight: bold;"></p>
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
    <script>
        function validateAndNext(event) {
    // 1. Get user input
    const ans1 = document.getElementById('q1').value.trim().toLowerCase();
    const ans2 = document.getElementById('q2').value.trim().toLowerCase();
    const feedback = document.getElementById('quiz-feedback');

    // 2. Define correct answers
    const correct1 = "select";
    const correct2 = "database";

    // 3. Validation Logic
    if (ans1 === correct1 && ans2 === correct2) {
        // Success: Allow the browser to follow the link
        return true; 
    } else {
        // Failure: Stop the link from working
        event.preventDefault(); 
        
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ Wait! Please answer the quiz correctly to unlock the next topic.";
        
        // Optional: Add a shake effect to the input fields
        document.querySelector('.mini-quiz-section').classList.add('shake');
        setTimeout(() => {
            document.querySelector('.mini-quiz-section').classList.remove('shake');
        }, 500);

        return false;
    }
}

// Keep your original checkAnswers for the manual button if you kept it
// function checkAnswers() {
//     const ans1 = document.getElementById('q1').value.trim().toLowerCase();
//     const ans2 = document.getElementById('q2').value.trim().toLowerCase();
//     const feedback = document.getElementById('quiz-feedback');

//     if (ans1 === "select" && ans2 === "database") {
//         feedback.style.color = "#4cc9f0";
//         feedback.innerHTML = "🐬 Splash! Correct! Click 'Next' to proceed.";
//     } else {
//         feedback.style.color = "#ff4d4d";
//         feedback.innerHTML = "❌ Not quite! Try again.";
//     }
// } 
    </script>

    <?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>

</body>

</html>