<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Insert</title>
<link rel="stylesheet" href="style.css?v=1.1">
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