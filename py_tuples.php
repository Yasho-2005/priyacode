<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - Tuples Overview & Rules</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Structure Comparison Matrix */
        .matrix-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            overflow: hidden;
        }
        .matrix-table th {
            background: #0d1117;
            color: #58a6ff;
            text-align: left;
            padding: 12px;
            border-bottom: 2px solid #30363d;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .matrix-table td {
            padding: 12px;
            border-bottom: 1px solid rgba(48, 54, 61, 0.5);
            color: #e2e8f0;
            font-size: 0.9rem;
        }
        .matrix-table tr:last-child td {
            border-bottom: none;
        }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; 
            color: #00ffe7 !important; /* Regular unhighlighted variables get crisp cyan */           
            padding: 15px;
            border-radius: 6px;
            font-family: 'Courier New', Courier, monospace;
        }
        .code-line {
            margin-bottom: 4px;
        }
        .ln {
            color: #58a6ff !important;            
            margin-right: 15px;
            user-select: none;
            opacity: 0.8;
        }

        .tasks-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
    </style>
</head>

<body>

    <?php include 'includes/navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">

        <?php include 'py_sidebar.php'; ?>

        <div class="content">

            <div class="python-page-wrapper" style="padding-top: 20px;">

                <div class="py-wrap">

                    <div class="py-topbar">
                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>
                        <span class="py-topbar-title">tuples_overview.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - Tuples Overview & Rules
                        </h1>

                        <div class="py-banner">
                            Tuples are used to store multiple data items in a single variable. A tuple is an **ordered collection** that is written with **round brackets <code>()</code>** instead of square ones. The defining feature of a tuple is that it is completely **immutable**—once built, it cannot be altered or reconfigured.
                        </div>

                        <h3 style="color: #58a6ff; margin-top: 25px;">[Collection Architecture Matrix]</h3>
                        <table class="matrix-table">
                            <thead>
                                <tr>
                                    <th>Feature Pattern</th>
                                    <th>Python Lists <code>[]</code></th>
                                    <th>Python Tuples <code>()</code></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Mutability State</b></td>
                                    <td style="color: #00ff87;">Mutable (Can add, edit, or clear items)</td>
                                    <td style="color: #ff2d78; font-weight: bold;">Immutable (Locked forever once created)</td>
                                </tr>
                                <tr>
                                    <td><b>Ordering Sequence</b></td>
                                    <td>Ordered index addresses (0, 1, 2...)</td>
                                    <td>Ordered index addresses (0, 1, 2...)</td>
                                </tr>
                                <tr>
                                    <td><b>Duplicate Elements</b></td>
                                    <td>Allowed</td>
                                    <td>Allowed</td>
                                </tr>
                                <tr>
                                    <td><b>Performance Speed</b></td>
                                    <td>Slower (Dynamic memory overhead allocation)</td>
                                    <td style="color: #00ffe7;">Faster (Fixed memory sizing layout allocation)</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="py-section">

                            <div class="py-label">live tuple validation rules</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Declaring Tuples with Duplicates</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">hardware</span> <span class="op2">=</span> (<span class="s">"CPU"</span>, <span class="s">"GPU"</span>, <span class="s">"RAM"</span>, <span class="s">"CPU"</span>)</div>
                                    <div class="code-line"><span class="ln">2</span><span class="fn">print</span>(<span class="var">hardware</span>)</div>
                                    <div class="code-line"><span class="ln">3</span><span class="k"># Verify the exact data structure collection class type</span></div>
                                    <div class="code-line"><span class="ln">4</span><span class="fn">print</span>(<span class="fn">type</span>(<span class="var">hardware</span>))</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">('CPU', 'GPU', 'RAM', 'CPU')<br>&lt;class 'tuple'&gt;</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">The 1-Item Tuple Trailing Comma Rule</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="k"># Incorrect: Python sees this as a simple string, NOT a tuple</span></div>
                                    <div class="code-line"><span class="ln">2</span><span class="var">wrong_tuple</span> <span class="op2">=</span> (<span class="s">"Admin"</span>)</div>
                                    <div class="code-line"><span class="ln">3</span><span class="k"># Correct: The trailing comma forces Python to build a tuple structure</span></div>
                                    <div class="code-line"><span class="ln">4</span><span class="var">true_tuple</span> <span class="op2">=</span> (<span class="s">"Admin"</span>,)</div>
                                    <div class="code-line"><span class="ln">5</span><span class="fn">print</span>(<span class="fn">type</span>(<span class="var">wrong_tuple</span>))</div>
                                    <div class="code-line"><span class="ln">6</span><span class="fn">print</span>(<span class="fn">type</span>(<span class="var">true_tuple</span>))</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">&lt;class 'str'&gt;<br>&lt;class 'tuple'&gt;</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">The tuple() Constructor Method</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="k"># Note the explicit double round brackets required</span></div>
                                    <div class="code-line"><span class="ln">2</span><span class="var">built_tuple</span> <span class="op2">=</span> <span class="fn">tuple</span>((<span class="s">"server-01"</span>, <span class="s">"server-02"</span>))</div>
                                    <div class="code-line"><span class="ln">3</span><span class="fn">print</span>(<span class="var">built_tuple</span>)</div>
                                    <div class="code-line"><span class="ln">4</span><span class="fn">print</span>(<span class="fn">len</span>(<span class="var">built_tuple</span>))</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">('server-01', 'server-02')<br>2</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                Why use a tuple if it's completely unchangeable compared to a list? **Security and optimization!** Tuples act as a data shield for structural configurations (like database credentials, constant math formulas, or environment settings) that should *never* be accidentally modified by code routines during application runtime.
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Immutable Tuple Creation</h4>
                                    <ul>
                                        <li>Declare a tuple variable holding 3 favorite color string names</li>
                                        <li>Print out the tuple to verify its active wrapper shape</li>
                                    </tbody>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>The Single Slot Trap</h4>
                                    <ul>
                                        <li>Create a single-item tuple tracking your username key</li>
                                        <li>Remember to apply the proper trailing syntax trick</li>
                                        <li>Pass the variable into <span>type()</span> to ensure it reads as a tuple</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Constructor Generator Matrix</h4>
                                    <ul>
                                        <li>Initialize a tuple collection using the built-in <span>tuple()</span> constructor</li>
                                        <li>Verify the structural elements print out cleanly to the layout panel</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Duplicate Counter Integrity</h4>
                                    <ul>
                                        <li>Store a series of server error codes including duplicate integer values</li>
                                        <li>Verify that duplicates exist safely inside by running a console log check</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Heterogeneous Payload Map</h4>
                                    <ul>
                                        <li>Declare a tuple containing mixed data tracking types simultaneously</li>
                                        <li>Include a <code>string</code> name, an <code>integer</code> value, and a <code>boolean</code> flag entry</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Matrix Vector Sizing Bounds</h4>
                                    <ul>
                                        <li>Build a constant dimensional geometric array configuration mapping tuple</li>
                                        <li>Run the <code>len()</code> function directly on the variable to output its length count</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 Tuple Rules Challenge</h4>
                            <div class="quiz-item">
                                <p>1. What structural type keyword does Python return if you declare a single-item wrapper block without a trailing comma like: <code>item = ("Data")</code>?</p>
                                <input type="text" id="q1" placeholder="Type str, int, or tuple...">
                            </div>
                            <div class="quiz-item">
                                <p>2. What core structural vocabulary word describes a collection whose value contents cannot be appended, rearranged, or updated?</p>
                                <input type="text" id="q2" placeholder="Type mutable or immutable...">
                            </div>
                            <p id="quiz-feedback" style="font-weight: bold; margin-top: 10px;"></p>
                        </div>

                        <div class="code-navigation">
                            <?php if ($prev): ?>
                                <a href="<?= $prev ?>" class="nav-btn">&laquo; Prev</a>
                            <?php endif; ?>
                            <?php if ($next): ?>
                                <a href="<?= $next ?>" id="next-btn" class="nav-btn" onclick="return validateAndNext(event)">Next &raquo;</a>
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
                { id: 'q1', ans: "str" },
                { id: 'q2', ans: "immutable" }
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
                feedback.innerHTML = "✔ ACCESS GRANTED — Structural tuple rules and data security boundaries confirmed ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Check your understanding of trailing comma definitions or immutable constraints.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>