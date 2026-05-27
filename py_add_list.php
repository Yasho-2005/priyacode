<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - Add List Items</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* For your general page paragraphs, banners, and description letters */
.py-body, .py-banner, .task-card ul li {
    color: #e2e8f0 !important; /* Soft high-contrast white for ultimate readability */
}


        /* Growth Visualizer Card */
        .growth-visualizer {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
        }
        .growth-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 8px 0;
        }
        .growth-box {
            background: #0d1117;
            border: 1px solid #30363d;
            padding: 8px 12px;
            border-radius: 4px;
            text-align: center;
        }
        .growth-box.new-element {
            border-color: #00ffe7;
            background: rgba(0, 255, 231, 0.05);
        }
        .growth-action {
            color: #8b949e;
            font-size: 0.85rem;
        }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; 
            color: #00ffe7 !important;         
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
                        <span class="py-topbar-title">add_list_items.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - Add List Items
                        </h1>

                        <div class="py-banner">
                            Expanding list data scales dynamically in Python. To add new entries, you can use <code>append()</code> to attach items to the absolute end, <code>insert()</code> to place items precisely between indexes, or <code>extend()</code> to stack another iterable collection on top.
                        </div>

                        <h3 style="color: #58a6ff; margin-top: 25px;">[Collection Growth Engine Map]</h3>
                        <div class="growth-visualizer">
                            <div class="growth-row">
                                <span class="growth-action" style="width: 90px;">1. append():</span>
                                <div class="growth-box">"A"</div>
                                <div class="growth-box">"B"</div>
                                <i class="fa-solid fa-arrow-right" style="color: #8b949e;"></i>
                                <div class="growth-box new-element"><span class="cyan-bold">"C"</span></div>
                            </div>
                            <div class="growth-row">
                                <span class="growth-action" style="width: 90px;">2. insert(1, "X"):</span>
                                <div class="growth-box">"A"</div>
                                <i class="fa-solid fa-arrow-down" style="color: #8b949e;"></i>
                                <div class="growth-box">"B"</div>
                            </div>
                            <div class="growth-row" style="margin-top:-5px; margin-bottom: 15px;">
                                <span class="growth-action" style="width: 90px;"></span>
                                <div style="width: 42px;"></div>
                                <div class="growth-box new-element" style="padding: 4px 8px;"><span class="cyan-bold">"X"</span></div>
                                <div style="width: 42px;"></div>
                            </div>
                            <div class="growth-row">
                                <span class="growth-action" style="width: 90px;">3. extend():</span>
                                <div class="growth-box">"A"</div>
                                <div class="growth-box">"B"</div>
                                <span style="color: #bd00ff; font-weight:bold;">+</span>
                                <div class="growth-box new-element">["C", "D"]</div>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">live array expansion methods</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Append Items to the End</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># append() automatically tacks the item onto the tail index</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="var">fruits</span>.<span class="fn">append</span>(<span class="s">"cherry"</span>)</span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="fn">print</span>(<span class="var">fruits</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple', 'banana', 'cherry']</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Insert Items at a Specific Index</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># Squeeze "orange" precisely into index position 1</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="var">fruits</span>.<span class="fn">insert</span>(<span class="num">1</span>, <span class="s">"orange"</span>)</span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="fn">print</span>(<span class="var">fruits</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple', 'orange', 'banana']</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">Merge Elements with extend()</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="var">tropical</span> <span class="op2">=</span> [<span class="s">"mango"</span>, <span class="s">"pineapple"</span>]</span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="k"># Append all individual elements of tropical into fruits</span></span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="var">fruits</span>.<span class="fn">extend</span>(<span class="var">tropical</span>)</span></div>
                                    <div class="code-line"><span class="ln">5</span><span><span class="fn">print</span>(<span class="var">fruits</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple', 'banana', 'mango', 'pineapple']</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                Did you know that the <code>extend()</code> method doesn't limit you to merging just other lists? You can pass in **any iterable object**—such as Tuples `()`, Sets `{}`, or Dictionaries. Python will extract each piece of data and append it cleanly to the end of the destination list.
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Tail End Append</h4>
                                    <ul>
                                        <li>Create a list with two names of animals</li>
                                        <li>Deploy <span>append()</span> to add a third animal to the end</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Index Zero Injection</h4>
                                    <ul>
                                        <li>Initialize a list with numbers <code>[20, 30]</code></li>
                                        <li>Use <span>insert()</span> to force number <code>10</code> into index position <code>0</code></li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Double Group Fusion</h4>
                                    <ul>
                                        <li>Create two lists, each containing two distinct grocery items</li>
                                        <li>Use <span>extend()</span> to join them into a unified single list</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Cart Checkout Stream</h4>
                                    <ul>
                                        <li>Store an initial array baseline tracking selected digital items</li>
                                        <li>Append a premium accessory item string to the active list</li>
                                        <li>Print out the absolute total length using <code>len()</code></li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Rank Matrix Placement</h4>
                                    <ul>
                                        <li>Initialize a leaderboard string ranking tracking sequence</li>
                                        <li>Squeeze a new runner into the second place position (index <code>1</code>)</li>
                                        <li>Verify the subsequent items shifted safely further down the index line</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Cross-Collection Merge</h4>
                                    <ul>
                                        <li>Declare a dynamic list tracking core server system configurations</li>
                                        <li>Define a secondary immutable <b>Tuple</b> block containing system upgrades</li>
                                        <li>Deploy <span>extend()</span> to absorb the tuple constants directly into the list</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 Add List Challenge</h4>
                            <div class="quiz-item">
                                <p>1. Which method should you choose if you want to add all elements of a separate collection into your existing list?</p>
                                <input type="text" id="q1" placeholder="Type extend, append, or insert...">
                            </div>
                            <div class="quiz-item">
                                <p>2. How many parameters/arguments does the <code>append()</code> method accept?</p>
                                <input type="text" id="q2" placeholder="Type a number...">
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
                { id: 'q1', ans: "extend" },
                { id: 'q2', ans: "1" }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim().toLowerCase().replace('()', ''); 

                if (val !== field.ans) {
                    input.style.border = "3px solid #ff4d4d";
                    allCorrect = false;
                } else {
                    input.style.border = "2px solid #58a6ff";
                }
            });

            if (allCorrect) {
                feedback.style.color = "#58a6ff";
                feedback.innerHTML = "✔ ACCESS GRANTED — Array expansion logic pipelines fully mapped and approved ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Incorrect method selection or argument parameter signature mismatch.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>