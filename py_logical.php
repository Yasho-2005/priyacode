<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Logical Operators</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Neon accents for highlighting text logic */
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
                    python-tutorial / <span>logical_operators.py</span>
                </div>

                <div class="py-wrap">

                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            logical_operators.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Logical Operators
                        </h1>

                        <div class="py-banner">
                            Logical operators allow us to combine multiple comparison expressions or invert conditional states. 
                            They act as the master wiring system for complex decision-making.
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    keywords used to combine or reverse conditional states
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    evaluating multi-step conditions (e.g., username AND password correctness)
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    form verification, security protocols, multi-criteria filtering engines
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">and | or | not</span>
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
                                            <th>Description</th>
                                            <th>Condition for True</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="op">and</td>
                                            <td>Logical AND</td>
                                            <td>Returns True if <span class="cyan-bold">both</span> sides are True</td>
                                            <td class="ex">(5 &gt; 3) and (2 &lt; 4)</td>
                                        </tr>

                                        <tr>
                                            <td class="op">or</td>
                                            <td>Logical OR</td>
                                            <td>Returns True if <span class="cyan-bold">at least one</span> side is True</td>
                                            <td class="ex">(5 &gt; 10) or (2 &lt; 4)</td>
                                        </tr>

                                        <tr>
                                            <td class="op">not</td>
                                            <td>Logical NOT</td>
                                            <td><span class="pink-bold">Reverses</span> the boolean result (Flips state)</td>
                                            <td class="ex">not(5 == 5)</td>
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
                                    <span class="badge">logical and</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">has_username</span> <span class="op2">=</span> <span class="cyan-bold">True</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">has_password</span> <span class="op2">=</span> <span class="cyan-bold">True</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">login_success</span> <span class="op2">=</span> <span class="var">has_username</span> <span class="purple-bold">and</span> <span class="var">has_password</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">login_success</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">logical or</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">is_admin</span> <span class="op2">=</span> <span class="pink-bold">False</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">has_bypass_key</span> <span class="op2">=</span> <span class="cyan-bold">True</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">access_granted</span> <span class="op2">=</span> <span class="var">is_admin</span> <span class="purple-bold">or</span> <span class="var">has_bypass_key</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">access_granted</span>)</span>
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
                                    <span class="badge">logical not</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">system_locked</span> <span class="op2">=</span> <span class="cyan-bold">True</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">can_write_data</span> <span class="op2">=</span> <span class="purple-bold">not</span> <span class="var">system_locked</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="fn">print</span>(<span class="var">can_write_data</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">False</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Unlike languages like C, Java, or JavaScript which use symbolic glyphs like <code>&&</code>, <code>||</code>, and <code>!</code>, Python stays true to its readable design philosophy by using literal English words: <code class="cyan-bold">and</code>, <code class="cyan-bold">or</code>, and <code class="pink-bold">not</code>.
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

                                    <h4>Dual-Key Security</h4>

                                    <ul>
                                        <li><span>key_a</span> = True</li>
                                        <li><span>key_b</span> = False</li>
                                        <li>Use <span class="pink-bold">and</span> to check if both keys are active</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Payment Gateway</h4>

                                    <ul>
                                        <li><span>has_credit</span> = False</li>
                                        <li><span>has_paypal</span> = True</li>
                                        <li>Use <span class="pink-bold">or</span> to check if payment is acceptable</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Inversion Node</h4>

                                    <ul>
                                        <li><span>is_disabled</span> = False</li>
                                        <li>Use <span class="pink-bold">not</span> to check if system is active</li>
                                        <li>Print final inverted output</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Logical Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which keyword checks if both independent conditions evaluate to True?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type word operator...">
                            </div>

                            <div class="quiz-item">
                                <p>2. What will the following snippet evaluate to: <b>not(10 &gt; 20)</b>?</p>

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
                    ans: "and"
                },
                {
                    id: 'q2',
                    ans: "True"
                }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim().toLowerCase(); // Convert to lowercase for clean matching
                
                // Keep true boolean format validation matching for Question 2
                if(field.id === 'q2') {
                    val = val.charAt(0).toUpperCase() + val.slice(1);
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
                    "✔ ACCESS GRANTED — Logical validation vectors resolved ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Logical inconsistencies detected in validation matrix.";

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