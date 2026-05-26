<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Tutorial - Introduction</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* ===== PYTHON IDENTITY LAYER ===== */
      
    </style>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'py_sidebar.php' ?>

        <div class="content">

                <h3>Python Introduction</h3>


            <!-- Python Identity -->
            <div class="python-intro-banner">
                Python is built for clarity and power — write less, do more.
            </div>

            <!-- 4W + 1H -->
            <p>
                <span class="q-tag">What:</span> Python is an <span class="pink-bold">interpreted language</span>, meaning it runs line by line.
            </p>

            <p>
                <span class="q-tag">Why:</span> It is easy to learn and reduces complex code into simple steps.
            </p>

            <p>
                <span class="q-tag">When:</span> Used for rapid development, scripting, and automation tasks.
            </p>

            <p>
                <span class="q-tag">Where:</span> Used in companies like Google, Instagram, and Netflix.
            </p>

            <p>
                <span class="q-tag">How:</span> Uses <span class="pink-bold">indentation</span> instead of curly braces to define blocks.
            </p>

            <hr style="border: 0; border-top: 2px solid rgba(0,255,231,0.1); margin: 30px 0;">

            <!-- Real World -->
            <h4>Real-World Case Studies</h4>

            <p>
                    <i class="fas fa-search cyan-accent"></i>
                    <b>Google:</b>
                    Uses Python for automation and internal tools.
                    <i>"Use Python for speed of development, C++ for speed of execution."</i>
</p>

                <p>
                    <i class="fas fa-chart-line pink-bold"></i>
                    <b>Trading Systems:</b>
                    Python analyzes stock data and executes strategies using libraries like
                    <b>Pandas</b>.
</p>

                <p>
                    <i class="fas fa-mobile-alt purple-bold"></i>
                    <b class="purple-bold">Apps:</b>
                    Instagram, Spotify, and Netflix use Python for backend logic and recommendations.
</p>
            

            <!-- Code -->
            <div class="python-ide-box">
                <pre class="code-area">
# Trade Decision Script
price = 150.50
buy_limit = 160.00

if price < buy_limit:
    print("STATUS: EXECUTE BUY ORDER")
else:
    print("STATUS: HOLD POSITION")
</pre>

                <span class="output-label">// TERMINAL_OUTPUT:</span>
                <div class="output-box">
                    STATUS: EXECUTE BUY ORDER
                </div>
            </div>

            <!-- Thinking -->
            <div class="thinking-box">
                <b>🎯 Think:</b> If <b>price = 170</b>, what will be the output?
            </div>



        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

</body>

</html>