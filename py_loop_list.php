<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - Loop Lists</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Loop Processing Visualizer */
        .loop-visualizer {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
        }
        .loop-track {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin: 10px 0;
        }
        .loop-node {
            background: #0d1117;
            border: 1px solid #30363d;
            color:#00ffe7;
            padding: 10px 14px;
            border-radius: 4px;
            position: relative;
        }
        .loop-node.active {
            border-color: #00ff87;
            box-shadow: 0 0 10px rgba(0, 255, 135, 0.2);
        }
        .loop-pointer {
            color: #00ff87;
            font-size: 0.8rem;
            text-align: center;
            margin-top: 4px;
        }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; 
            color: #00ffe7 !important; /* Regular characters inherit clean cyan tint */           
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
                        <span class="py-topbar-title">loop_lists.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - Loop Lists
                        </h1>

                        <div class="py-banner">
                            Cycling through data sequences is a fundamental task. Python lets you iterate over lists effortlessly: use a direct <code>for</code> loop to grab items, map out index addresses using <code>range(len())</code>, manage complex conditions with a <code>while</code> structure, or write high-speed code with compressed inline loops.
                        </div>

                        <h3 style="color: #58a6ff; margin-top: 25px;">[Loop Traversal Iteration Map]</h3>
                        <div class="loop-visualizer">
                            <p style="text-align:center; color:#8b949e; margin:0 0 10px 0; font-size:0.85rem;">for item in list:</p>
                            <div class="loop-track">
                                <div>
                                    <div class="loop-node active">"apple"</div>
                                    <div class="loop-pointer"><i class="fa-solid fa-arrow-up"></i> step 1</div>
                                </div>
                                <i class="fa-solid fa-angles-right" style="color:#30363d"></i>
                                <div>
                                    <div class="loop-node">"banana"</div>
                                    <div class="loop-pointer" style="color:#30363d;"><i class="fa-solid fa-arrow-up"></i> step 2</div>
                                </div>
                                <i class="fa-solid fa-angles-right" style="color:#30363d"></i>
                                <div>
                                    <div class="loop-node">"cherry"</div>
                                    <div class="loop-pointer" style="color:#30363d;"><i class="fa-solid fa-arrow-up"></i> step 3</div>
                                </div>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">live iteration processing layouts</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">The Direct "for...in" Loop</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="purple-bold">for</span> <span class="var">x</span> <span class="purple-bold">in</span> <span class="var">fruits</span>:</div>
                                    <div class="code-line"><span class="ln">3</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="var">x</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">apple<br>banana<br>cherry</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Loop Through Index Numbers</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="k"># range(len()) yields integer index positions [0, 1, 2]</span></div>
                                    <div class="code-line"><span class="ln">3</span><span class="purple-bold">for</span> <span class="var">i</span> <span class="purple-bold">in</span> <span class="fn">range</span>(<span class="fn">len</span>(<span class="var">fruits</span>)):</div>
                                    <div class="code-line"><span class="ln">4</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="var">fruits</span>[<span class="var">i</span>])</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">apple<br>banana<br>cherry</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">While Loop vs Inline List Compression</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">items</span> <span class="op2">=</span> [<span class="s">"A"</span>, <span class="s">"B"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="var">i</span> <span class="op2">=</span> <span class="num">0</span></div>
                                    <div class="code-line"><span class="ln">3</span><span class="purple-bold">while</span> <span class="var">i</span> <span class="op2">&lt;</span> <span class="fn">len</span>(<span class="var">items</span>):</div>
                                    <div class="code-line"><span class="ln">4</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="var">items</span>[<span class="var">i</span>])</div>
                                    <div class="code-line"><span class="ln">5</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">i</span> <span class="op2">+=</span> <span class="num">1</span></div>
                                    <div class="code-line"><span class="ln">6</span><span class="k"># Short-hand compressed line format syntax layout</span></div>
                                    <div class="code-line"><span class="ln">7</span>[<span class="fn">print</span>(<span class="var">x</span>) <span class="purple-bold">for</span> <span class="var">x</span> <span class="purple-bold">in</span> <span class="var">items</span>]</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">A<br>B<br>A<br>B</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                When should you loop using <code>range(len())</code> instead of a basic <code>for x in list</code>? Use the index track whenever you need to know or use the **exact position number** of an item during the loop, or when you want to modify elements directly inside their original index positions!
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Direct Member Display</h4>
                                    <ul>
                                        <li>Create a list packed with three city string names</li>
                                        <li>Deploy a clean <span>for...in</span> loop to print each city name</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Index Target Scanner</h4>
                                    <ul>
                                        <li>Initialize a list containing 3 random numbers</li>
                                        <li>Loop through them using <span>range(len())</span> to print each element</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Increment Pointer Cycle</h4>
                                    <ul>
                                        <li>Build a list tracking structural computer operating systems</li>
                                        <li>Deploy a <span>while</span> loop to step through and display them one by one</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Dynamic Counter Audit</h4>
                                    <ul>
                                        <li>Create a list tracking system log levels: <code>["Info", "Error", "Warn"]</code></li>
                                        <li>Loop through the list using index numbers</li>
                                        <li>Print out each element formatted like: <code>"Index 0: Info"</code></li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Compressed Inline Print</h4>
                                    <ul>
                                        <li>Declare a list variable containing 4 website URL endpoints</li>
                                        <li>Write a short-hand inline list loop execution statement</li>
                                        <li>Log out each item onto a new line inside the terminal window</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Dynamic Boundary Stop</h4>
                                    <ul>
                                        <li>Create a list of numbers running up to 5 entries total</li>
                                        <li>Write a <code>while</code> loop that terminates early if the counter matches the collection length minus 1</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 Loop List Challenge</h4>
                            <div class="quiz-item">
                                <p>1. Which combined built-in function sequence lets you generate loop cycles over list index position integers?</p>
                                <input type="text" id="q1" placeholder="Format example: function(function())">
                            </div>
                            <div class="quiz-item">
                                <p>2. What operator must you apply inside a <code>while</code> loop statement block to prevent an infinite system crash loop?</p>
                                <input type="text" id="q2" placeholder="Type operator token (e.g., +=1)...">
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
                { id: 'q1', ans: "range(len())" },
                { id: 'q2', ans: "+=1" }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim().toLowerCase().replace(/\s+/g, ''); 

                if (val !== field.ans) {
                    input.style.border = "3px solid #ff4d4d";
                    allCorrect = false;
                } else {
                    input.style.border = "2px solid #58a6ff";
                }
            });

            if (allCorrect) {
                feedback.style.color = "#58a6ff";
                feedback.innerHTML = "✔ ACCESS GRANTED — Iteration traversal control bounds authenticated ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Check your index generator function nesting or pointer increment syntax rules.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>