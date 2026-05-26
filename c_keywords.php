<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Keywords | Presentcode</title>
<link rel="stylesheet" href="style.css?v=1.1">
    <style>
        /* Style for keywords table */
        .keywords-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
            font-size: 16px;
            color: #fff;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #0ff;
            /* Neon border */
            box-shadow: 0 0 10px #0ff;
            border-radius: 10px;
            overflow: hidden;
        }

        .keywords-table th,
        .keywords-table td {
            padding: 12px 15px;
            border: 1px solid rgba(0, 255, 255, 0.4);
            transition: all 0.3s ease;
        }

        .keywords-table td:hover {
            background: rgba(0, 255, 255, 0.2);
            color: #0ff;
            box-shadow: inset 0 0 8px #0ff;
            cursor: pointer;
        }

        /* Table header */
        .keywords-table th {
            background: rgba(0, 255, 255, 0.1);
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php' ?>
        <div class="content">
            <h3>Keywords in C</h3>
            <p><b>Keywords</b> in C are reserved words that have a predefined meaning and cannot be used as variable names, function names, or identifiers. These keywords help define the structure and behavior of a C program.</p>
            <!-- <p><img src="img/keywords-removebg-preview.png" alt="" class="img"></p> -->
            <table class="keywords-table">
                <tr>
                    <td>auto</td>
                    <td>break</td>
                    <td>case</td>
                    <td>char</td>
                    <td>const</td>
                    <td>continue</td>
                </tr>
                <tr>
                    <td>default</td>
                    <td>do</td>
                    <td>double</td>
                    <td>else</td>
                    <td>enum</td>
                    <td>extern</td>
                </tr>
                <tr>
                    <td>float</td>
                    <td>for</td>
                    <td>goto</td>
                    <td>if</td>
                    <td>inline*</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>long</td>
                    <td>register</td>
                    <td>restrict*</td>
                    <td>return</td>
                    <td>short</td>
                    <td>signed</td>
                </tr>
                <tr>
                    <td>sizeof</td>
                    <td>static</td>
                    <td>struct</td>
                    <td>switch</td>
                    <td>typedef</td>
                    <td>union</td>
                </tr>
                <tr>
                    <td>unsigned</td>
                    <td>void</td>
                    <td>volatile</td>
                    <td>while</td>
                </tr>
            </table>


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

</body>



</html>