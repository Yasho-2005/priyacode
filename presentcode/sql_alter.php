<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL ALTER</title>
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
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">

            <h3>ALTER</h3>

            <p>
                The <b>ALTER</b> command is used to <b>modify an existing table structure</b>. <br>
                With ALTER, you can add, remove, rename, or change columns and constraints. <br>
                ALTER is a <b>DDL (Data Definition Language)</b> command.
                </p>
                <p>
                Using ALTER, you can: <br>

✔ Add a column <br>
✔ Modify datatype <br>
✔ Change constraints <br>
✔ Rename a column <br>
✔ Rename a table <br>
✔ Drop (remove) a column <br>
✔ Change column order (industry rarely uses this but MySQL supports it)
            </p>

            <h4>Syntax</h4>

            <p>(A) Add a Column</p>
            <div class="syntax">
                ALTER TABLE table_name <br>
                ADD column_name datatype constraint;
            </div>

            <p>(B) Modify Datatype</p>
            <div class="syntax">
                ALTER TABLE table_name <br>
                MODIFY column_name new_datatype;
            </div>

            <p>(C) Rename Column</p>
            <div class="syntax">
                ALTER TABLE table_name <br>
                RENAME COLUMN old_name TO new_name;
            </div>

            <p>(D) Drop a Column</p>
            <div class="syntax">
                ALTER TABLE table_name <br>
                DROP COLUMN column_name;
            </div>

            <p>(E) Rename Table</p>
            <div class="syntax">
                ALTER TABLE old_table <br>
                RENAME TO new_table;
            </div>

            <h4>Examples</h4>

            <p>Add a Column</p>
            <div class="syntax-box">
                ALTER TABLE students <br>
                ADD age INT;
            </div>

            <p>Modify Datatype</p>
            <div class="syntax-box">
                ALTER TABLE students <br>
                MODIFY name VARCHAR(80);
            </div>

            <p>Rename Column</p>
            <div class="syntax-box">
                ALTER TABLE students <br>
                RENAME COLUMN marks TO score;
            </div>

            <p>Drop Column</p>
            <div class="syntax-box">
                ALTER TABLE students <br>
                DROP COLUMN score;
            </div>

            <p>Rename Table</p>
            <div class="syntax-box">
                ALTER TABLE students <br>
                RENAME TO student_records;
            </div>

            <h4>Assignment 1</h4>
            <div class="assignment-box">

                <h3>Modify Employees Table</h3>

                <p>Use ALTER to update the employees table structure.</p>

                <div class="task">
                    ➤ Add column <b>email VARCHAR(100)</b> <br>
                    ➤ Modify salary datatype to <b>BIGINT</b> <br>
                    ➤ Rename column <b>name → full_name</b>
                </div>

                <div class="task">
                    <div class="sql-result-table">
                        <table>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>salary</th>
                                <th>email</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aditya</td>
                                <td>30000</td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Leena</td>
                                <td>45000</td>
                                <td>---</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <h4>Assignment 2</h4>
            <div class="assignment-box">

                <h3>Alter Books Table</h3>

                <p>Perform structural changes on the books table.</p>

                <div class="task">
                    ➤ Add column <b>publisher VARCHAR(50)</b> <br>
                    ➤ Drop column <b>price</b> <br>
                    ➤ Rename table <b>books → library_books</b>
                </div>

                <div class="task">
                    <div class="sql-result-table">
                        <table>
                            <tr>
                                <th>book_id</th>
                                <th>title</th>
                                <th>author</th>
                                <th>publisher</th>
                            </tr>
                            <tr>
                                <td>101</td>
                                <td>The Alchemist</td>
                                <td>Paulo Coelho</td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>Atomic Habits</td>
                                <td>James Clear</td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td>103</td>
                                <td>The Secret</td>
                                <td>Rhonda Byrne</td>
                                <td>---</td>
                            </tr>
                        </table>
                    </div>
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
