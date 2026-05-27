<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Nested If Statements</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; 
            color: #ffffff !important;            
            padding: 15px;
            border-radius: 6px;
            font-family: 'Courier New', Courier, monospace;
        }
        .code-line {
            color: #ffffff !important;            
            margin-bottom: 4px;
        }
        .ln {
            color: #58a6ff !important;            
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
                            nested_if.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Nested If Statements
                        </h1>

                        <div class="py-banner">
                            A <b>nested if statement</b> is an conditional block placed entirely inside another condition statement block. It allows your program to run layered verification checkpoints, where the inner test only executes if the outer test passes successfully.
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    conditional checking statements tucked completely within the block room of an existing gate
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    handles complex dependencies that require validation in a strict sequential order
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    secure multi-factor login loops, nested permission matrix validations, and data auditing chains
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">if outer_test:<br>&nbsp;&nbsp;&nbsp;&nbsp;if inner_test:</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live code engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01 (EASY)</span>
                                    <span class="badge" style="background: #238636; color: #fff;">Movie Theatre Check</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">age</span> <span class="op2">=</span> <span class="num">15</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">has_ticket</span> <span class="op2">=</span> <span class="purple-bold">True</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="purple-bold">if</span> <span class="var">has_ticket</span> <span class="op2">==</span> <span class="purple-bold">True</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Welcome to the cinema theater!"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple-bold">if</span> <span class="var">age</span> <span class="op2">&gt;=</span> <span class="num">18</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"You are allowed to watch R-rated movies."</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">8</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"PG content only. Enjoy the show!"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">9</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">10</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Please purchase a ticket at the front counter."</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Welcome to the cinema theater!<br>PG content only. Enjoy the show!</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02 (ADVANCED)</span>
                                    <span class="badge">multi-layer security access routine</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">has_token</span> <span class="op2">=</span> <span class="purple-bold">True</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">is_admin</span> <span class="op2">=</span> <span class="purple-bold">False</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="purple-bold">if</span> <span class="var">has_token</span> <span class="op2">==</span> <span class="purple-bold">True</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Token Verified."</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple-bold">if</span> <span class="var">is_admin</span> <span class="op2">==</span> <span class="purple-bold">True</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Welcome, Commander. Full access open."</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">8</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Access Denied: Admin clearance needed."</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">9</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">10</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"System Breach: Invalid hardware key token."</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Token Verified.<br>Access Denied: Admin clearance needed.</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Watch your spaces closely! The inner <code>if</code> block is indented **4 spaces** from the left margins, which means its inner execution content commands must be indented a full **8 spaces**! Keep your spacing rules aligned to escape structural indentation layout errors.
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

                                    <h4>Atm Cash Dispenser Check</h4>

                                    <ul>
                                        <li><span>pin_valid</span> = True, <span>balance</span> = 250</li>
                                        <li>If PIN passes, run an inner balance check</li>
                                        <li>Print clear warnings for separate failure paths</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Package Weight Router</h4>

                                    <ul>
                                        <li><span>is_domestic</span> = True, <span>weight</span> = 34</li>
                                        <li>If domestic, check if heavy (&gt; 20kg)</li>
                                        <li>Assign standard or special routing tags</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Nested Number Bounds</h4>

                                    <ul>
                                        <li>Set variable test values</li>
                                        <li>If positive, check if value is even or odd</li>
                                        <li>Print accurate diagnostic tracking messages</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Nested Challenge</h4>

                            <div class="quiz-item">
                                <p>1. How many extra spaces are typically added to indent code for each deep level of nesting?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type number of spaces...">
                            </div>

                            <div class="quiz-item">
                                <p>2. Will an inner nested block ever evaluate if the outer initial conditional gate defaults to False?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Yes or No...">
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
                    ans: "4"
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
                    "✔ ACCESS GRANTED — Nested matrix validations successfully calculated ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Indentation offsets or processing flow sequence answers incorrect.";

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