<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - List Comprehension</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Blueprint Formula Card */
        .blueprint-card {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
            font-family: 'Courier New', monospace;
            box-shadow: inset 0 0 15px rgba(0, 255, 231, 0.03);
        }
        .blueprint-title {
            color: #58a6ff;
            font-size: 0.85rem;
            text-transform: uppercase;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }
        .blueprint-formula {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            font-size: 1.1rem;
            color: #ffffff;
            background: #0d1117;
            padding: 15px;
            border-radius: 4px;
            border: 1px dashed #30363d;
        }
        .bp-part {
            padding: 2px 6px;
            border-radius: 3px;
        }
        .bp-expr { background: rgba(255, 45, 120, 0.1); border: 1px solid #ff2d78; }
        .bp-loop { background: rgba(189, 0, 255, 0.1); border: 1px solid #bd00ff; }
        .bp-cond { background: rgba(0, 255, 231, 0.1); border: 1px solid #00ffe7; }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; 
            color: #00ffe7 !important;           
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
                        <span class="py-topbar-title">list_comprehension.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - List Comprehension
                        </h1>

                        <div class="py-banner">
                            <b>List comprehension</b> offers a shorter, cleaner syntax layout when you want to create a brand-new list based on the elements of an existing collection. It compresses multi-line <code>for</code> loops and conditional filters into a single, high-speed line of code.
                        </div>

                        <div class="blueprint-card">
                            <div class="blueprint-title"><i class="fa-solid fa-gears"></i> Syntax Blueprint Framework Matrix</div>
                            <div class="blueprint-formula">
                                <span style="color:#8b949e">new_list = [</span>
                                <span class="bp-part bp-expr" title="The output value or modified item"><span class="pink-bold">expression</span></span>
                                <span class="bp-part bp-loop" title="The iteration driver sequence"><span class="purple-bold">for item in iterable</span></span>
                                <span class="bp-part bp-cond" title="Optional true/false logical filter"><span class="cyan-bold">if condition == True</span></span>
                                <span style="color:#8b949e">]</span>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">live code pipeline compression metrics</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Loop vs Comprehension Structure</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>, <span class="s">"kiwi"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="k"># 1. The traditional multi-line approach</span></div>
                                    <div class="code-line"><span class="ln">3</span><span class="var">old_way</span> <span class="op2">=</span> []</div>
                                    <div class="code-line"><span class="ln">4</span><span class="purple-bold">for</span> <span class="var">x</span> <span class="purple-bold">in</span> <span class="var">fruits</span>:</div>
                                    <div class="code-line"><span class="ln">5</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="purple-bold">if</span> <span class="s">"a"</span> <span class="purple-bold">in</span> <span class="var">x</span>:</div>
                                    <div class="code-line"><span class="ln">6</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">old_way</span>.<span class="fn">append</span>(<span class="var">x</span>)</div>
                                    <div class="code-line"><span class="ln">7</span></div>
                                    <div class="code-line"><span class="ln">8</span><span class="k"># 2. The high-speed compressed layout (Same result)</span></div>
                                    <div class="code-line"><span class="ln">9</span><span class="var">new_way</span> <span class="op2">=</span> [<span class="var">x</span> <span class="purple-bold">for</span> <span class="var">x</span> <span class="purple-bold">in</span> <span class="var">fruits</span> <span class="purple-bold">if</span> <span class="s">"a"</span> <span class="purple-bold">in</span> <span class="var">x</span>]</div>
                                    <div class="code-line"><span class="ln">10</span><span class="fn">print</span>(<span class="var">new_way</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple', 'banana']</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Manipulating the Output Expression</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="k"># Convert each item to uppercase dynamically during the extraction</span></div>
                                    <div class="code-line"><span class="ln">3</span><span class="var">screaming_fruits</span> <span class="op2">=</span> [<span class="var">x</span>.<span class="fn">upper</span>() <span class="purple-bold">for</span> <span class="var">x</span> <span class="purple-bold">in</span> <span class="var">fruits</span>]</div>
                                    <div class="code-line"><span class="ln">4</span><span class="fn">print</span>(<span class="var">screaming_fruits</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['APPLE', 'BANANA']</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">Using range() and inline if-else branches</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="k"># Generate even numbers from 0 to 9 using a conditional filter</span></div>
                                    <div class="code-line"><span class="ln">2</span><span class="var">evens</span> <span class="op2">=</span> [<span class="var">n</span> <span class="purple-bold">for</span> <span class="var">n</span> <span class="purple-bold">in</span> <span class="fn">range</span>(<span class="num">10</span>) <span class="purple-bold">if</span> <span class="var">n</span> <span class="op2">%</span> <span class="num">2</span> <span class="op2">==</span> <span class="num">0</span>]</div>
                                    <div class="code-line"><span class="ln">3</span><span class="k"># Swap item names inline using an if-else expression toggle</span></div>
                                    <div class="code-line"><span class="ln">4</span><span class="var">scores</span> <span class="op2">=</span> [<span class="num">10</span>, <span class="num">50</span>, <span class="num">90</span>]</div>
                                    <div class="code-line"><span class="ln">5</span><span class="var">results</span> <span class="op2">=</span> [<span class="s">"Pass"</span> <span class="purple-bold">if</span> <span class="var">s</span> <span class="op2">&gt;=</span> <span class="num">50</span> <span class="purple-bold">else</span> <span class="s">"Fail"</span> <span class="purple-bold">for</span> <span class="var">s</span> <span class="purple-bold">in</span> <span class="var">scores</span>]</div>
                                    <div class="code-line"><span class="ln">6</span><span class="fn">print</span>(<span class="var">evens</span>)</div>
                                    <div class="code-line"><span class="ln">7</span><span class="fn">print</span>(<span class="var">results</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">[0, 2, 4, 6, 8]<br>['Fail', 'Pass', 'Pass']</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                Notice how the positioning shifts when you add an <code>else</code> branch to the code! A regular trailing <code>if</code> statement acts strictly as a **conditional filter** at the very end. However, when you write an <code>if-else</code> toggle setup, it shifts directly to the front as part of the **output expression processing logic**!
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Basic Number Clone</h4>
                                    <ul>
                                        <li>Initialize a simple list with values <code>[1, 2, 3]</code></li>
                                        <li>Deploy a single-line comprehension loop to clone them into a new list</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Dynamic Square Matrix</h4>
                                    <ul>
                                        <li>Use a <span>range(1, 6)</span> iterable number matrix pipeline</li>
                                        <li>Square each integer number inline (<code>n * n</code>) into a new list array</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Character Search Filter</h4>
                                    <ul>
                                        <li>Create a list tracking names: <code>["Sam", "Ben", "Sally"]</code></li>
                                        <li>Filter out and keep only the names starting with character <code>"S"</code></li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Odd Range Filter Extraction</h4>
                                    <ul>
                                        <li>Write a comprehension routine targeting a <code>range(20)</code> dataset</li>
                                        <li>Apply a logical remainder module filter check expression statement</li>
                                        <li>Keep and dump only the odd numerical integers into a final tracking vector</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Lowercase Sanitizer Stream</h4>
                                    <ul>
                                        <li>Declare an array holding mismatched uppercase server roles configuration strings</li>
                                        <li>Process each configuration element token using <code>.lower()</code> expression assignments</li>
                                        <li>Output the sanitized array safely to console logs</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Binary Value Toggle Map</h4>
                                    <ul>
                                        <li>Build an index containing a series of numerical hardware input values</li>
                                        <li>Deploy a front-loaded inline <code>"Active" if val == 1 else "Offline"</code> macro</li>
                                        <li>Verify the mapped output matches state flags accurately</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 List Comprehension Challenge</h4>
                            <div class="quiz-item">
                                <p>1. In a standard list comprehension layout, on which side of the main loop tracker statement does the output expression sit?</p>
                                <input type="text" id="q1" placeholder="Type left or right...">
                            </div>
                            <div class="quiz-item">
                                <p>2. Where must a basic conditional filter (an 'if' statement without an 'else') be placed inside the brackets?</p>
                                <input type="text" id="q2" placeholder="Type front or end...">
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
                { id: 'q1', ans: "left" },
                { id: 'q2', ans: "end" }
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
                feedback.innerHTML = "✔ ACCESS GRANTED — Pipeline comprehension matrices fully calculated and matching ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Verification mismatch on conditional filter tracking layout coordinates.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>