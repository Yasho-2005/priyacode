<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Features</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>SQL Features</h3>

            <h4>1. Easy to Learn</h4>
            <p>
                SQL uses English-like commands such as
<b>SELECT</b>, INSERT, UPDATE, DELETE, so even beginners can understand it quickly.
            </p>

            <h4>2. Powerful Data Querying</h4>
            <p>
                You can fetch specific data from huge tables using simple queries.
            </p>
            <p>Example:</p>
            <div class="syntax">
                SELECT name, marks FROM students;
            </div>

            <h4>3. Data Manipulation</h4>
            <p>Create and modify tables, views, indexes, schemas etc.
            </p>
            <h4>4. Data Definition</h4>
            <p>Create and modify tables, views, indexes, schemas etc.</p>
            <p>Example:</p>
            <div class="syntax">
                CREATE TABLE students (...);
            </div>
            <h4>5. Data Control</h4>
            <p>Manage permissions using queries like:</p>
            <div class="syntax">
                GRANT SELECT ON students TO user;
            </div>
            <h4>6. High Security</h4>
            <p>SQL databases support authentication, encryption, role-based access control.</p>
            <h4>7. Transactions</h4>
            <p>Commit or rollback changes to protect data from corruption.</p>
            <p>Example:</p>
            <div class="syntax">
                BEGIN;
UPDATE account SET balance = balance - 500;
UPDATE account SET balance = balance + 500;
COMMIT;
            </div>
            <h4>8. Cross-Platform</h4>
            <p>SQL works on Windows, Linux, macOS and almost every database system.</p>
           
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
