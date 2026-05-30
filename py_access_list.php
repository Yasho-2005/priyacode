<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - Access List Items</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Indexing Visualizer Card */
        .index-visualizer {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
        }
        .index-row {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 8px;
        }
        .index-box {
            background: #0d1117;
            border: 1px solid #58a6ff;
            width: 70px;
            text-align: center;
            padding: 10px 0;
            border-radius: 4px;
        }
        .index-label-row {
            color: #8b949e;
            font-size: 0.8rem;
        }

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
                        <span class="py-topbar-title">access_list_items.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - Access List Items
                        </h1>

                        <div class="py-banner">
                            List items are **ordered** and tracking them relies entirely on their index addresses. Python gives us massive flexibility here: you can read from the front using **positive indexes**, look from the back using **negative indexes**, or slice out custom chunks using **ranges**.
                        </div>

                        <h3 style="color: #58a6ff; margin-top: 25px;">[0-Based Index Matrix Map]</h3>
                        <div class="index-visualizer">
                            <div class="index-row index-label-row">
                                <div style="width: 70px; text-align: center;">index 0</div>
                                <div style="width: 70px; text-align: center;">index 1</div>
                                <div style="width: 70px; text-align: center;">index 2</div>
                            </div>
                            <div class="index-row">
                                <div class="index-box"><span class="cyan-bold">"apple"</span></div>
                                <div class="index-box"><span class="cyan-bold">"banana"</span></div>
                                <div class="index-box"><span class="cyan-bold">"cherry"</span></div>
                            </div>
                            <div class="index-row index-label-row" style="margin-top: 4px;">
                                <div style="width: 70px; text-align: center;">index -3</div>
                                <div style="width: 70px; text-align: center;">index -2</div>
                                <div style="width: 70px; text-align: center;">index -1</div>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">live index targeting simulations</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Positive vs Negative Lookup</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># Positive indexing starts from the front (0)</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="fn">print</span>(<span class="var">fruits</span>[<span class="num">1</span>])</span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="k"># Negative indexing reads backward from the tail end (-1)</span></span></div>
                                    <div class="code-line"><span class="ln">5</span><span><span class="fn">print</span>(<span class="var">fruits</span>[<span class="op2">-</span><span class="num">1</span>])</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">banana<br>cherry</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Range Slicing [start:end]</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">items</span> <span class="op2">=</span> [<span class="s">"A"</span>, <span class="s">"B"</span>, <span class="s">"C"</span>, <span class="s">"D"</span>, <span class="s">"E"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># Slice from index 1 up to (but excluding) index 4</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="fn">print</span>(<span class="var">items</span>[<span class="num">1</span>:<span class="num">4</span>])</span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="k"># Leaving out start value defaults to the beginning</span></span></div>
                                    <div class="code-line"><span class="ln">5</span><span><span class="fn">print</span>(<span class="var">items</span>[:<span class="num">3</span>])</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['B', 'C', 'D']<br>['A', 'B', 'C']</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">Membership "in" Keyword Search</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">cart</span> <span class="op2">=</span> [<span class="s">"laptop"</span>, <span class="s">"mouse"</span>, <span class="s">"headset"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="purple-bold">if</span> <span class="s">"mouse"</span> <span class="purple-bold">in</span> <span class="var">cart</span>:</span></div>
                                    <div class="code-line"><span class="ln">3</span><span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Yes, 'mouse' is in the shopping cart list!"</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Yes, 'mouse' is in the shopping cart list!</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                Remember the slicing rule: The search start index is **inclusive**, but the ending index parameter is **exclusive**! For instance, <code>[1:4]</code> snatches positions 1, 2, and 3, completely dropping index 4 out of the returned sub-list result.
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Front Counter Reading</h4>
                                    <ul>
                                        <li>Create a list with 3 car brands</li>
                                        <li>Print the first car using index <code>0</code></li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Backdoor End Check</h4>
                                    <ul>
                                        <li>Initialize a list with 3 random numbers</li>
                                        <li>Use negative index <code>-1</code> to print the very last item</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Slice Extraction Test</h4>
                                    <ul>
                                        <li>Create a list of 5 colors</li>
                                        <li>Slice out and print items from index 2 to 4</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Database Key Validation</h4>
                                    <ul>
                                        <li>Store a series of user tracking string roles</li>
                                        <li>Deploy an <code>if "admin" in roles</code> block layout</li>
                                        <li>Print out an authorization confirmation state</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Dynamic Tail Tracking</h4>
                                    <ul>
                                        <li>Create a variable list of operating system tokens</li>
                                        <li>Target the second item from the end via negative coordinates</li>
                                        <li>Print the retrieved data item to screen</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Bound Slicing Pipeline</h4>
                                    <ul>
                                        <li>Declare an array containing 6 raw integers</li>
                                        <li>Slice out the first 4 elements using omitted index shortcuts (<code>[:x]</code>)</li>
                                        <li>Output the resulting array block</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 Access List Challenge</h4>
                            <div class="quiz-item">
                                <p>1. What negative index value refers directly to the absolute last item in a Python list?</p>
                                <input type="text" id="q1" placeholder="Type negative index position...">
                            </div>
                            <div class="quiz-item">
                                <p>2. Which keyword is used to verify if a specified element exists inside a collection sequence?</p>
                                <input type="text" id="q2" placeholder="Type keyword...">
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
                { id: 'q1', ans: "-1" },
                { id: 'q2', ans: "in" }
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
                feedback.innerHTML = "✔ ACCESS GRANTED — Index data address patterns successfully decoded ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Verification keyword syntax or index target match fault.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>