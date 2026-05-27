<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Ternary Operator</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }
        
        /* Cleaned Mascot Section (No separate background or neon box borders) */
        .mascot-container {
            display: flex;
            align-items: center;
            padding: 10px 0;
            margin: 20px 0;
            background: none;
            border: none;
        }
        .dolphin-mascot {
            font-size: 3rem;
            margin-right: 20px;
            user-select: none;
        }
        .chat-bubble {
            color: #ffffff;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; /* Dark background */
            color: #ffffff !important;            /* Force clear white text visibility */
            padding: 15px;
            border-radius: 6px;
            font-family: 'Courier New', Courier, monospace;
        }
        .code-line {
            color: #ffffff !important;            /* Ensures custom text doesn't fall back to black */
            margin-bottom: 4px;
        }
        .ln {
            color: #58a6ff !important;            /* High visibility blue line numbers */
            margin-right: 15px;
            user-select: none;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">

        <?php include 'py_sidebar.php'; ?>

        <div class="content">

            <div class="python-page-wrapper">


                <div class="py-wrap">

                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            ternary_operator.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Ternary Operator
                        </h1>

                        <div class="py-banner">
                            Python's ternary operator evaluated as a <b>Conditional Expression</b> gives us a shortcut to choose between two outcomes based on a condition, assigning values dynamically on a single row.
                        </div>

                        <div class="mascot-container">
                            <div class="dolphin-mascot">🐬</div>
                            <div class="chat-bubble">
                                "🏋️‍♂️ <strong>NO WEAK DATA ALLOWED!</strong> 💅 <br>
                                The <strong>TERNARY</strong> condition is like a lightning-fast fitness test for your variables. <br>
                                We evaluate the test directly in the middle! If your value passes—BOOM, it grabs the left prize. If it fails, it's relegated to the right-side bench! Keep those execution standards high and single-lined! ✨💪"
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    an inline conditional structure returning an alternative value based on evaluation
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    replaces tedious 4-line `if-else` blocks down to a super-clean structural layout
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    inside variable declarations, arguments passing, and formatting output statements
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">value_if_true if condition else value_if_false</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live code engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">BEFORE</span>
                                    <span class="badge" style="background: #444;">multiline block boiler</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">age</span> <span class="op2">=</span> <span class="num">20</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">age</span> <span class="op2">&gt;=</span> <span class="num">18</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">status</span> <span class="op2">=</span> <span class="s">"Access Granted"</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">status</span> <span class="op2">=</span> <span class="s">"Access Denied"</span></span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Access Granted</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">AFTER</span>
                                    <span class="badge">the ternary shortcut</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">age</span> <span class="op2">=</span> <span class="num">20</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">status</span> <span class="op2">=</span> <span class="s">"Access Granted"</span> <span class="purple-bold">if</span> <span class="var">age</span> <span class="op2">&gt;=</span> <span class="num">18</span> <span class="purple-bold">else</span> <span class="s">"Access Denied"</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="fn">print</span>(<span class="var">status</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Access Granted</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Unlike language syntaxes like JavaScript or C++ which deploy symbolic tokens like <code>? :</code> (e.g. <code>condition ? true : false</code>), Python uses descriptive english keywords: <code class="cyan-bold">if</code> and <code class="pink-bold">else</code>. However, pay attention to the order: the true value comes <b>first</b>, followed by the actual check step!
                            </p>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                practice assignments
                            </div>

                            <div class="tasks-grid">

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 01
                                    </div>

                                    <h4>Score Evaluator</h4>

                                    <ul>
                                        <li><span>score</span> = 85</li>
                                        <li>Assign "Pass" if score &gt;= 50 else "Fail"</li>
                                        <li>Use a single-line ternary layout expression</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Toggle Node Indicator</h4>

                                    <ul>
                                        <li><span>is_active</span> = False</li>
                                        <li>Set <span>color</span> variable to "Green" if active else "Red"</li>
                                        <li>Print result output stream</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Even or Odd Filter</h4>

                                    <ul>
                                        <li><span>num</span> = 7</li>
                                        <li>Check parity via modulus remainder tracking operation</li>
                                        <li>Set output to "Even" or "Odd" dynamically</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Ternary Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which keyword acts as the second separator clause inside an inline conditional expression?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type separating keyword...">
                            </div>

                            <div class="quiz-item">
                                <p>2. What will the following statement evaluate to: <b>"Yes" if 5 &lt; 2 else "No"</b>?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Type expected string answer value...">
                            </div>

                            <p id="quiz-feedback"
                                style="font-weight: bold; margin-top: 10px;">
                            </p>

                        </div>

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
                    ans: "else"
                },
                {
                    id: 'q2',
                    ans: "no"
                }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim().toLowerCase(); 

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
                    "✔ ACCESS GRANTED — Short-form execution expressions perfectly validated ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Sub-conditional components out of sequence balance.";

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