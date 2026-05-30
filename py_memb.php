<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Membership Operators</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyberpunk palette mapping */
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


                <div class="py-wrap">

                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            membership_operators.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Membership Operators
                        </h1>

                        <div class="py-banner">
                            Membership operators test for the presence of a sequence element inside collections like strings, lists, tuples, or dictionaries. They scan through structures to instantly confirm if a value exists within them.
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    operators that check if a value is part of a sequence pattern
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    searching databases, tracking blocklists, checking access permissions, text scanning
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    spam filters, search bars, user database lookups, security scanning suites
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">in | not in</span>
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
                                            <td class="op">in</td>
                                            <td>Membership IN</td>
                                            <td>Returns True if the specified value is <span class="cyan-bold">found</span> in the sequence</td>
                                            <td class="ex">"A" in ["A", "B", "C"]</td>
                                        </tr>

                                        <tr>
                                            <td class="op">not in</td>
                                            <td>Membership NOT IN</td>
                                            <td>Returns True if the specified value is <span class="pink-bold">missing</span> from the sequence</td>
                                            <td class="ex">"Z" not in ["A", "B", "C"]</td>
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
                                    <span class="badge">scanning list elements</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">allowed_users</span> <span class="op2">=</span> [<span class="s">"neo"</span>, <span class="s">"trinity"</span>, <span class="s">"morpheus"</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">is_allowed</span> <span class="op2">=</span> <span class="s">"neo"</span> <span class="purple-bold">in</span> <span class="var">allowed_users</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">is_blocked</span> <span class="op2">=</span> <span class="s">"cypher"</span> <span class="purple-bold">not in</span> <span class="var">allowed_users</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">is_allowed</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">is_blocked</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True<br>True</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">substring matching logic</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">system_log</span> <span class="op2">=</span> <span class="s">"CRITICAL ERROR: Firewall breach detected on Node 4"</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">has_error</span> <span class="op2">=</span> <span class="s">"ERROR"</span> <span class="purple-bold">in</span> <span class="var">system_log</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">is_clean</span> <span class="op2">=</span> <span class="s">"SUCCESS"</span> <span class="purple-bold">not in</span> <span class="var">system_log</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">has_error</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">is_clean</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True<br>True</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Did you know string searching is highly case-sensitive in Python? Evaluating <code>"admin" in "ADMIN_PANEL"</code> will return <span class="pink-bold">False</span>. To circumvent this design hurdle, engineers usually sanitize user inputs by invoking lowercasing transformations prior to processing verification queries!
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

                                    <h4>Threat Array Validation</h4>

                                    <ul>
                                        <li><span>malware_signatures</span> = ["trojan", "worm"]</li>
                                        <li>Verify if "rootkit" <span class="pink-bold">in</span> malware_signatures</li>
                                        <li>Print the conditional output</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Sub-string Parsing</h4>

                                    <ul>
                                        <li><span>email</span> = "support@company.com"</li>
                                        <li>Check if "@" character <span class="pink-bold">in</span> email mapping link</li>
                                        <li>Log outcome state</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Inventory Shortages</h4>

                                    <ul>
                                        <li><span>hardware_stock</span> = ["gpu", "cpu", "ram"]</li>
                                        <li>Check if "psu" <span class="pink-bold">not in</span> hardware_stock array</li>
                                        <li>Evaluate and review response</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Membership Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which keyword sequence determines if an entry does NOT exist inside a targeted container structure?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type keyword operator...">
                            </div>

                            <div class="quiz-item">
                                <p>2. What is the execution result of evaluating: <b>"py" in "python"</b>?</p>

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
                    ans: "not in"
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
                let val = input.value.trim();
                
                // Normalizing multi-spaced variations for compound operator mapping
                if(field.id === 'q1') {
                    val = val.replace(/\s+/g, ' ').toLowerCase();
                }
                
                // Capitalize first letter to normalize standard evaluation outputs
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
                    "✔ ACCESS GRANTED — Sequence structural scanners online ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Key matching parameters missing from sequence.";

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