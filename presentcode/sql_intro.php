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
                <li><p>YouTube stores video information in databases.</p></li>
                <li><p>Banks store customer data.</p></li>
                <li><p>E-commerce apps store product and order details.</p></li>
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
            </i></p></div>

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
