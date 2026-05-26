<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
    <style>
        .keyword {
    color: #00ff99;   /* glowing green */
    font-weight: bold;
}
    </style>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php' ?>
          <div class="content">
            <h3>C Basic Program</h3>

            <div class="syntax-box">
                #inlcude &lt;stdio.h&gt; <br>
                int main(){<br>
                &nbsp;&nbsp;&nbsp; printf("Hello World");<br>
                return 0; <br>
                }
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                Hello World
            </div>

            <p><span class="keyword">#include</span> is a preprocessor that is used to process the header files while 
        compiling.</p>
        <p><span class="keyword">stdio.h</span> standard input output is a library to run C basic program. It include built-in functions like
            printf(), scanf(), keywords, etc. <span class="keyword">.h</span> is a header file extension.
        </p>
        <p><span class="keyword">int</span> - data type</p>
        <p><span class="keyword">main()</span> the compiler's entry point. Every program in C starts with main() function.</p>
        <p>To print something in output we use <span class="keyword">printf()</span> fucntion.</p>
        <p><span class="keyword">return 0</span> used to return the program output successfully. <span class="keyword">return</span> is a keyword in C.</p>

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
        </div>



    </section>
    <?php include 'includes/footer.php'; ?>

</body>



</html>