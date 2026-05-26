<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL History</title>
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

.assignment-box p {
    margin: 10px 0;
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

.assignment-box .submit-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    border: 1px solid #0ff;
    color: #0ff;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.assignment-box .submit-btn:hover {
    background: #0ff;
    color: #000;
    box-shadow: 0 0 20px #0ff;
    cursor: pointer;
}
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>Create</h3>
            <p>
                <b>CREATE</b> is a Data Definition Language (DDL) command used to make new databases, tables, views, or other database objects.
When learning SQL, the very first step is to create a database, then create tables inside that database.

            </p>

            <h4>Syntax</h4>
            <p>
                (A)Create Database
            </p>
            <div class="syntax">
                CREATE DATABASE database_name;
            </div>
            <p>(B)Select the Database</p>
            <div class="syntax">
                USE database_name;
            </div>
            <p>(C)Create Table</p>
            <div class="syntax">
                CREATE TABLE table_name ( <br>
    column_name1 datatype constraint, <br>
    column_name2 datatype constraint, <br>
    column_name3 datatype constraint, <br>
    ...
);
            </div>

            <h4>Examples</h4>
            <p>Create Databse</p>
            <div class="syntax-box">
                CREATE DATABASE school;
            </div>
            <p>Use database</p>
            <div class="syntax-box">
                use school;
            </div>
            <p>create table</p>
<div class="syntax-box">
    CREATE TABLE students ( <br>
    id INT PRIMARY KEY, <br>
    name VARCHAR(50) NOT NULL, <br>
    marks INT <br>
);
</div> 
<p>select table</p>
<div class="syntax-box">
    Select * from table;
</div>
<center>
    <img src="img/ss1.png" alt="" height="300px" width="600px"></center>

    <h4>Assignment 1</h4>
    <div class="assignment-box">
    <h3>Create Employees Table</h3>

    <p>Your task is to create a table similar to the one shown above.</p>

    <div class="task">
        ➤ Create a database named <b>company</b><br>
        ➤ Inside that, create a table <b>employees</b> with fields:<br>
        &nbsp;&nbsp;• id (INT)<br>
        &nbsp;&nbsp;• name (VARCHAR(40))<br>
        &nbsp;&nbsp;• salary (INT)
    </div>

    <div class="task">
        ➤ Insert two sample records of your choice.
    </div>

    <!-- <a class="submit-btn">Mark as Done ✔</a> -->
</div>
<h4>Assignment 2</h4>
<div class="assignment-box">
    <h3>Create Instagram users Table</h3>

    <p>Your task is to create a table similar to the one shown above.</p>

    <div class="task">
        ➤ Create a database named <b>instagram</b><br>
        ➤ Inside that, create a table <b>users</b> with fields:<br>
        &nbsp;&nbsp;• id (INT)<br>
        &nbsp;&nbsp;• username (VARCHAR(40))<br>
        &nbsp;&nbsp;• fullname (VARCHAR(40))<br>
        &nbsp;&nbsp;• email (VARCHAR(40))<br>
        &nbsp;&nbsp;• password (VARCHAR(40))<br>
        &nbsp;&nbsp;• joined_on (date)
    </div>

    <div class="task">
        ➤ Insert two sample records of your choice.
    </div>

    <!-- <a class="submit-btn">Mark as Done ✔</a> -->
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