<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL History</title>
<link rel="stylesheet" href="style.css?v=1.1">
<style>
    .content{
        position: relative;
    }
    .history-mascot {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 130px; /* Small size as requested */
    height: auto;
    z-index: 10;
    filter: drop-shadow(0 0 8px #4cc9f0); /* Neon glow effect */
    pointer-events: none; /* So it doesn't block clicks on links */
    animation: floating 3s ease-in-out infinite;
}

/* Optional bobbing effect if your GIF is static or needs extra movement */
@keyframes floating {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

/* On small screens, move it so it doesn't overlap text */
@media (max-width: 768px) {
    .history-mascot {
        width: 60px;
        top: 10px;
        right: 10px;
        opacity: 0.6; /* Fade it slightly so text remains readable */
    }
}
</style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">

            <h3>Interesting History of SQL</h3>
            <img src="img/dolphin.gif" class="history-mascot" alt="SQL Historian">

            <h4>1. SQL was born inside IBM in the 1970s</h4>
            <p>
                SQL was created at IBM by two engineers:
                Donald Chamberlin and Raymond Boyce
                They created it to talk to a new database model called System R.
            </p>

            <h4>2. SQL was originally called “SEQUEL”</h4>
            <p>
                Yes! The original name was:
                SEQUEL = Structured English Query Language
                But they had to change it because another company already owned the trademark.
                So SEQUEL → SQL
            </p>
            <h4>3. The idea behind SQL came from a research paper</h4>
            <p>In 1970, Dr. Edgar F. Codd wrote a famous paper describing Relational Databases.
                This paper changed the entire world of data management.
                SQL exists today because of his work.
            </p>
            <h4>4. SQL became a Standard in the 1980s</h4>
            <p>In 1986, SQL was officially standardized by ANSI.
                This made SQL a universal language.
                That’s why SQL works similarly across MySQL, Oracle, SQL Server, etc.</p>
            <h4>5. Most apps you use daily run on SQL</h4>
            <p>Instagram, WhatsApp, YouTube, Flipkart, Banking apps—
                all use SQL databases to store transactions, user profiles, chats, payments, etc.</p>
            <h4>6. SQL is older than most programming languages people use today</h4>
            <p>SQL is older than: <br>

                Python <br>

                C++ <br>

                Java <br>

                JavaScript <br>
                Yet it is still one of the most important technologies in the world.</p>
            <h4>7. SQL handles BILLIONS of records</h4>
            <p>Even small SQL databases can handle millions of rows.
                Large companies use SQL to store petabytes of data.</p>
            <h4>8. SQL is still growing</h4>
            <p>With cloud databases like: <br>

                Google BigQuery <br>

                Amazon Aurora <br>

                Azure SQL <br>

                SQL is now faster and more powerful than ever.</p>
            <p>Today, SQL powers banking systems, social media, e-commerce, and almost every major application that stores data.</p>
            <div class="mini-quiz-section">
    <h4>📜 SQL History Challenge: Prove Your Knowledge!</h4>

    <div class="quiz-item">
        <p>1. Which company originally created SQL in the 1970s?</p>
        <input type="text" id="q1" placeholder="Type company name...">
    </div>

    <div class="quiz-item">
        <p>2. SQL was originally known by what 6-letter name?</p>
        <input type="text" id="q2" placeholder="Type original name...">
    </div>

    <div class="quiz-item">
        <p>3. In 1986, SQL was officially standardized by which organization?</p>
        <input type="text" id="q3" placeholder="Type acronym (4 letters)...">
    </div>
    
    <p id="quiz-feedback" style="margin-top: 10px; font-weight: bold; "></p>
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
    // 1. Get user input
    const ans1 = document.getElementById('q1').value.trim().toLowerCase();
    const ans2 = document.getElementById('q2').value.trim().toLowerCase();
    const ans3 = document.getElementById('q3').value.trim().toLowerCase();
    const feedback = document.getElementById('quiz-feedback');

    // 2. Define correct answers
    const correct1 = "ibm";
    const correct2 = "sequel";
    const correct3 = "ansi";

    // 3. Validation Logic
    if (ans1 === correct1 && ans2 === correct2 && ans3 === correct3) {
        return true; 
    } else {
        event.preventDefault(); 
        feedback.style.color = "#ff4d4d";
        feedback.innerHTML = "❌ History isn't quite right yet! Check your answers to unlock the next topic.";
        return false;
    }
}

</script>


</body>

</html>