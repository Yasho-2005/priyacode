<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C-tutorial</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>

    <?php include 'includes/navigation.php'; ?>

    <?php include 'includes/header.php'; ?>
    <section class="main">
        <?php include 'sidebar.php' ?>
        <div class="content">
            <h3>C Prgramming tutorial</h3>
            <p>According to <a href="https://en.wikipedia.org/wiki/C_(programming_language)"><u>Wikipedia</u></a>, <b>C</b> is a general-purpose programming language. Used in operating systems code, device drivers, protocol stacks and application software.</p>
            <p>It was created by Dennis Ritchie in 1972 to develop <i>Unix</i> operating system</p>
            <p><b>C </b>is commonly used on computer architectures that range from the largest
                <i>supercomputers</i> to the smallest <i>microcontrollers</i> and <i>embedded systems.</i>
            </p>
            <p>C is designed to be compiled into machine code, giving direct access to memory and hardware while using minimal extra resources. Even though it works at a <u> low-level</u>, it still supports writing programs that can run on different systems. A well-written C program that follows standards can be easily compiled and run on many computers and operating systems with little to no changes in the code.</p>
            <h3></h3>

            <h5>Basic Program</h5>
            <div class="syntax-box">
                #include &lt;stdio.h&gt; <br>
                int main(){<br>
                &nbsp;&nbsp;&nbsp; printf("Hello World");<br>
                return 0; <br>
                }
            </div>
            <h4>Output:</h4>
            <div class="syntax-box">
                Hello World
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
        </div>



    </section>
    <?php include 'includes/footer.php'; ?>

</body>



</html>