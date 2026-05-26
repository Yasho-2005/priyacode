<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Arithmetic Operators</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

    </style>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">

        <?php include 'py_sidebar.php'; ?>

        <div class="content">

            <div class="python-page-wrapper">

                <div class="python-breadcrumb">
                    python-tutorial / <span>arithmetic_operators.py</span>
                </div>

                <div class="py-wrap">

                    <!-- TOPBAR -->
                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            arithmetic_operators.py — Python Tutorial
                        </span>

                    </div>

                    <!-- BODY -->
                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Arithmetic Operators
                        </h1>

                        <div class="py-banner">
                            Arithmetic operators help us perform mathematical calculations
                            like addition, subtraction, multiplication, and division.
                        </div>

                        <!-- WHAT WHY -->
                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    symbols that perform calculations on numbers
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    totals, discounts, averages, salaries
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    games, finance apps, AI, analytics
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">+ - * / % ** //</span>
                                </div>

                            </div>

                        </div>

                        <!-- TABLE -->
                        <div class="py-section">

                            <div class="py-label">
                                operator reference
                            </div>

                            <div class="table-scroll">

                                <table class="py-table">

                                    <thead>

                                        <tr>
                                            <th>Operator</th>
                                            <th>Meaning</th>
                                            <th>Example</th>
                                            <th>Result</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="op">+</td>
                                            <td>Addition</td>
                                            <td class="ex">10 + 5</td>
                                            <td class="res">15</td>
                                        </tr>

                                        <tr>
                                            <td class="op">-</td>
                                            <td>Subtraction</td>
                                            <td class="ex">10 - 5</td>
                                            <td class="res">5</td>
                                        </tr>

                                        <tr>
                                            <td class="op">*</td>
                                            <td>Multiplication</td>
                                            <td class="ex">10 * 5</td>
                                            <td class="res">50</td>
                                        </tr>

                                        <tr>
                                            <td class="op">/</td>
                                            <td>Division</td>
                                            <td class="ex">10 / 5</td>
                                            <td class="res">2.0</td>
                                        </tr>

                                        <tr>
                                            <td class="op">%</td>
                                            <td>Modulus</td>
                                            <td class="ex">10 % 3</td>
                                            <td class="res">1</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <!-- CODE EXAMPLE -->
                        <div class="py-section">

                            <div class="py-label">
                                addition example
                            </div>

                            <div class="repl">

                                <div class="repl-bar">

                                    <span class="ex-label">EXAMPLE 01</span>

                                    <span class="badge">
                                        addition
                                    </span>

                                </div>

                                <div class="repl-code">

                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span>
                                            <span class="var">salary</span>
                                            <span class="op2">=</span>
                                            <span class="num">40000</span>
                                        </span>
                                    </div>

                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span>
                                            <span class="var">bonus</span>
                                            <span class="op2">=</span>
                                            <span class="num">5000</span>
                                        </span>
                                    </div>

                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>
                                            <span class="var">total</span>
                                            <span class="op2">=</span>
                                            <span class="var">salary</span>
                                            <span class="op2">+</span>
                                            <span class="var">bonus</span>
                                        </span>
                                    </div>

                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span>
                                            <span class="fn">print</span>(<span class="var">total</span>)
                                        </span>
                                    </div>

                                </div>

                                <div class="output-bar">

                                    <span class="arrow">▶</span>

                                    <span class="val">
                                        45000
                                    </span>

                                </div>

                            </div>

                        </div>

                        <!-- THINK BOX -->
                        <div class="think-box">

                            <div class="think-label">
                                >>> THINK
                            </div>

                            <p>
                                If <code>salary = 60000</code> and
                                <code>bonus = 10000</code>,
                                what will total become?
                            </p>

                        </div>

                        <!-- TASKS -->
                        <div class="py-section">

                            <div class="py-label">
                                practice assignments
                            </div>

                            <div class="tasks-grid">

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 01
                                    </div>

                                    <h4>Salary Calculator</h4>

                                    <ul>
                                        <li><span>salary</span> = 30000</li>
                                        <li>Add bonus of <span>5000</span></li>
                                        <li>Print total salary</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Area of Rectangle</h4>

                                    <ul>
                                        <li><span>length</span> = 10</li>
                                        <li><span>width</span> = 5</li>
                                        <li>Multiply to find area</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Even or Odd</h4>

                                    <ul>
                                        <li><span>number</span> = 25</li>
                                        <li>Use <span>%</span> operator</li>
                                        <li>Print remainder</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!-- QUIZ -->
                        <!-- QUIZ SECTION -->
                        <div class="mini-quiz-section">

                            <h4>🐍 Python Operator Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which operator is used for multiplication in Python?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type operator...">
                            </div>

                            <div class="quiz-item">
                                <p>2. Which operator gives the remainder value?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Type operator...">
                            </div>

                            <p id="quiz-feedback"
                                style="font-weight: bold; margin-top: 10px;">
                            </p>

                        </div>

                        <!-- NAVIGATION -->
                        <div class="code-navigation">

                            <?php if ($prev): ?>
                                <a href="<?= $prev ?>" class="nav-btn">
                                    &laquo; Prev
                                </a>
                            <?php endif; ?>

                            <?php if ($next): ?>
                                <a href="<?= $next ?>"
                                    id="next-btn"
                                    class="nav-btn"
                                    onclick="return validateAndNext(event)">
                                    Next &raquo;
                                </a>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        function validateAndNext(event) {
            const fields = [

                {
                    id: 'q1',
                    ans: "*"
                },
                {
                    id: 'q2',
                    ans: "%"
                }

            ];

            let allCorrect = true;

            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {

                const input = document.getElementById(field.id);

                const val = input.value.trim();

                if (val !== field.ans) {
                    input.style.border = "3px solid #ff4d4d";

                    allCorrect = false;
                } else {
                    input.style.border = "2px solid #58a6ff";
                }

            });

            if (allCorrect) {
                feedback.style.color = "#58a6ff";

                feedback.innerHTML =
                    "✔ ACCESS GRANTED — Python arithmetic unlocked ⚡";

                return true;
            } else {
                event.preventDefault();

                feedback.style.color = "#ff4d4d";

                feedback.innerHTML =
                    "❌ ERROR: Invalid operators detected.";

                document
                    .querySelector('.mini-quiz-section')
                    .classList.add('shake');

                setTimeout(() => {

                    document
                        .querySelector('.mini-quiz-section')
                        .classList.remove('shake');

                }, 500);

                return false;
            }
        }
    </script>

</body>

</html>