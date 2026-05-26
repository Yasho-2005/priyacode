<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Insert</title>
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
.syntax {
    font-family: 'Fira Code', monospace; /* Syntax font */
    background: #1a1f2a;
    padding: 12px 15px;
    border-left: 4px solid #4cc9f0;
    border-radius: 6px;
    margin: 15px 0;
    color: rgba(74, 235, 235, 1);
    font-size: 15px;
}
.sql-result-table {
    margin-top: 20px;
    margin-left: 20px;
    margin-right: 20px;
    background: rgba(0, 255, 255, 0.06);
    border: 1px solid rgba(0, 255, 255, 0.25);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.25);
}


.sql-result-table table {
    width: 100%;
    border-collapse: collapse;
    color: #fff;
    font-size: 16px;
}

.sql-result-table th {
    background: rgba(0, 255, 255, 0.2);
    padding: 10px;
    text-align: left;
    color: #00eaff;
}

.sql-result-table td {
    padding: 10px;
    border-bottom: 1px solid rgba(0, 255, 255, 0.2);
}

.sql-result-table tr:last-child td {
    border-bottom: none;
}


    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>Insert</h3>
            <p>
              The <b>INSERT</b> command in SQL is used to add new records (rows) into a table.
After creating a table using <b>CREATE</b>, the next step is to insert data into the table.

INSERT is a <b>Data Manipulation Language (DML)</b> command because it deals with adding data,
            </p>

            <h4>Syntax</h4>
            <p>
                (A) Insert a Single Row
            </p>
            <div class="syntax">
                INSERT INTO table_name (column1, column2, column3, ...) <br>
VALUES (value1, value2, value3, ...);
            </div>
            <p>(B) Insert Multiple Rows at Once</p>
            <div class="syntax">
                INSERT INTO table_name (column1, column2, column3, ...) <br>
VALUES <br>
(value1, value2, value3), <br>
(value4, value5, value6), <br>
(value7, value8, value9);
            </div>
            <p>(C) Insert Without Column Names</p>
            <p>(Only works if you're inserting in <b>exact same column order</b> as table)</p>
            <div class="syntax">
                INSERT INTO table_name <br>
VALUES (value1, value2, value3, ...);
            </div>

            <h4>Examples</h4>
            <p>Insert Into Students Table</p>
            <div class="syntax-box">
                INSERT INTO students (id, name, marks) <br>
VALUES (1, 'Rahul', 85);
            </div>
            <p>Insert Multiple Rows</p>
            <div class="syntax-box">
                INSERT INTO students (id, name, marks) <br>
VALUES <br>
(2, 'Priya', 92), <br>
(3, 'Amit', 78), <br>
(4, 'Sneha', 88); <br>
            </div>
            <p>Insert Without Column Names</p>
<div class="syntax-box">
    INSERT INTO students <br>
VALUES (5, 'Abhinav', 90);
</div> 
<p>select table</p>
<div class="syntax-box">
    Select * from students;
</div>
<center>
    <img src="img/ss_insert.png" alt="" height="300px" width="600px"></center>


    <h4>Assignment 1</h4>
    <div class="assignment-box">
    <h3>Insert into Employees Table</h3>

    <p>Your task is to create a table similar to the one shown above.</p>

    <div class="task">
        ➤ Insert the following row into the employees table:
    </div>

    <div class="task">
        <div class="sql-result-table">
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>salary</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Aditya</td>
            <td>30000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Priya</td>
            <td>45000</td>
        </tr>
    </table>
</div>

    </div>

    <!-- <a class="submit-btn">Mark as Done ✔</a> -->
</div>
<h4>Assignment 2</h4>
<div class="assignment-box">
    <h3>Insert into books table</h3>

    <p>Your task is to create a table similar to the one shown above.</p>

    <div class="task">
        ➤ Insert three books into the books table: <br>
        ➤ Write an INSERT query inserting all three rows in a single statement.
    </div>

    <div class="task">
       <div class="sql-result-table">
    <table>
        <tr>
            <th>book_id</th>
            <th>title</th>
            <th>author</th>
            <th>price</th>
        </tr>
        <tr>
            <td>101</td>
            <td>The Alchemist</td>
            <td>Paulo Coelho</td>
            <td>450</td>
        </tr>
        <tr>
            <td>102</td>
            <td>Atomic Habits</td>
            <td>James Clear</td>
            <td>550</td>
        </tr>
        <tr>
            <td>103</td>
            <td>The Secret</td>
            <td>Rhonda Byrne</td>
            <td>499</td>
        </tr>
    </table>
</div>
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