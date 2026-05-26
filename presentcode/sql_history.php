<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL History</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>Interesting History of SQL</h3>

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