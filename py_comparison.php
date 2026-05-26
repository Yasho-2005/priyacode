<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Comparison Operators</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Styles tailored to keep the neon cyberpunk terminal theme crisp */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }
        
        .table-scroll {
            width: 100%;
            overflow-x: auto;
            margin: 15px 0;
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

                <div class="python-breadcrumb">
                    python-tutorial / <span>comparison_operators.py</span>
                </div>

                <div class="py-wrap">

                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            comparison_operators.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Comparison Operators
                        </h1>

                        <div class="py-banner">
                            Comparison operators compare two values and evaluate down to a single Boolean result: 
                            either <span class="cyan-bold">True</span> or <span class="pink-bold">False</span>. They drive decision-making logic.
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    symbols used to compare two operands
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    validating credentials, unlocking levels, threshold alerts, filtering records
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    authentication screens, automated trading engines, game win/loss conditions
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">== != &gt; &lt; &gt;= &lt;=</span>
                                </div>

                            </div>

                        </div>

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
                                            <td class="op">==</td>
                                            <td>Equal to</td>
                                            <td class="ex">5 == 5</td>
                                            <td class="res">True</td>
                                        </tr>

                                        <tr>
                                            <td class="op">!=</td>
                                            <td>Not equal to</td>
                                            <td class="ex">10 != 5</td>
                                            <td class="res">True</td>
                                        </tr>

                                        <tr>
                                            <td class="op">&gt;</td>
                                            <td>Greater than</td>
                                            <td class="ex">12 &gt; 20</td>
                                            <td class="res">False</td>
                                        </tr>

                                        <tr>
                                            <td class="op">&lt;</td>
                                            <td>Less than</td>
                                            <td class="ex">3 &lt; 8</td>
                                            <td class="res">True</td>
                                        </tr>

                                        <tr>
                                            <td class="op">&gt;=</td>
                                            <td>Greater than or equal to</td>
                                            <td class="ex">15 &gt;= 15</td>
                                            <td class="res">True</td>
                                        </tr>

                                        <tr>
                                            <td class="op">&lt;=</td>
                                            <td>Less than or equal to</td>
                                            <td class="ex">7 &lt;= 4</td>
                                            <td class="res">False</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live code engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">identity checks</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">entered_password</span> <span class="op2">=</span> <span class="s">"guest123"</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">stored_password</span> <span class="op2">=</span> <span class="s">"admin99"</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">is_match</span> <span class="op2">=</span> (<span class="var">entered_password</span> <span class="op2">==</span> <span class="var">stored_password</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="var">access_denied</span> <span class="op2">=</span> (<span class="var">entered_password</span> <span class="op2">!=</span> <span class="var">stored_password</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">is_match</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="fn">print</span>(<span class="var">access_denied</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">False<br>True</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">threshold tracking</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">gpu_temperature</span> <span class="op2">=</span> <span class="num">82</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">safe_limit</span> <span class="op2">=</span> <span class="num">75</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">is_overheating</span> <span class="op2">=</span> <span class="var">gpu_temperature</span> <span class="op2">&gt;</span> <span class="var">safe_limit</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="var">is_optimal</span> <span class="op2">=</span> <span class="var">gpu_temperature</span> <span class="op2">&lt;</span> <span class="var">safe_limit</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">is_overheating</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">boundary evaluations</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">player_score</span> <span class="op2">=</span> <span class="num">1000</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">high_score_target</span> <span class="op2">=</span> <span class="num">1000</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">unlock_next_level</span> <span class="op2">=</span> <span class="var">player_score</span> <span class="op2">&gt;=</span> <span class="var">high_score_target</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="var">is_low_tier</span> <span class="op2">=</span> <span class="var">player_score</span> <span class="op2">&lt;=</span> <span class="num">200</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">unlock_next_level</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                What happens if you run <code>print(10 == "10")</code> in Python? 
                                Python evaluates both the value <b>and</b> the data type. Since an integer is never equal to a string, it returns <span class="pink-bold">False</span>!
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

                                    <h4>Gate Authentication</h4>

                                    <ul>
                                        <li><span>user_role</span> = "Operator"</li>
                                        <li>Check if user_role is equal to "Admin"</li>
                                        <li>Print the resulting Boolean evaluation</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Crypto Alert Engine</h4>

                                    <ul>
                                        <li><span>btc_price</span> = 64500</li>
                                        <li><span>alert_threshold</span> = 60000</li>
                                        <li>Verify if btc_price is greater than threshold</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Age Eligibility</h4>

                                    <ul>
                                        <li><span>user_age</span> = 18</li>
                                        <li>Check if age is greater than or equal to 18</li>
                                        <li>Print out the terminal evaluation status</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Comparison Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which comparison operator signifies "Not Equal to" in Python?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type operator...">
                            </div>

                            <div class="quiz-item">
                                <p>2. What is the evaluation result of: 15 &lt;= 10?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="True or False...">
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
                    ans: "!="
                },
                {
                    id: 'q2',
                    ans: "False"
                }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim();
                
                // Capitalize first letter to match "False" case gracefully for question 2
                if(field.id === 'q2') {
                    val = val.charAt(0).toUpperCase() + val.slice(1).toLowerCase();
                }

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
                    "✔ ACCESS GRANTED — Python conditional gates unlocked ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Invalid evaluation parameters detected.";

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