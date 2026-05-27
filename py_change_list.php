<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - Change List Items</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Mutation Visualizer Card */
        .mutation-visualizer {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
        }
        .mutation-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin: 5px 0;
        }
        .mutation-box {
            background: #0d1117;
            color:#00ffe7;
            border: 1px solid #30363d;
            padding: 8px 12px;
            border-radius: 4px;
            text-align: center;
            min-width: 60px;
        }
        .mutation-box.changed {
            border-color: #ff2d78;
            background: rgba(255, 45, 120, 0.05);
        }
        .mutation-arrow {
            color: #8b949e;
            font-weight: bold;
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
                        <span class="py-topbar-title">change_list_items.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - Change List Items
                        </h1>

                        <div class="py-banner">
                            Because Python lists are <b>mutable</b> (changeable), you can easily overwrite any element or slice slice out a whole range of items to update them simultaneously. You can even use the <code>insert()</code> method to push elements into a specific slot without deleting anything.
                        </div>

                        <h3 style="color: #58a6ff; margin-top: 25px;">[Item Mutation Tracker]</h3>
                        <div class="mutation-visualizer">
                            <div class="mutation-row">
                                <span style="color: #8b949e; width: 60px;">Before:</span>
                                <div class="mutation-box">"A"</div>
                                <div class="mutation-box">"B"</div>
                                <div class="mutation-box">"C"</div>
                            </div>
                            <div class="mutation-row">
                                <div class="mutation-arrow">items[1] = "X"</div>
                            </div>
                            <div class="mutation-row">
                                <span style="color: #ff2d78; width: 60px; font-weight: bold;">After:</span>
                                <div class="mutation-box">"A"</div>
                                <div class="mutation-box changed"><span class="pink-bold">"X"</span></div>
                                <div class="mutation-box">"C"</div>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">live value manipulation engine</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Change Specific Item Value</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># Target index 1 directly to overwrite "banana"</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="var">fruits</span>[<span class="num">1</span>] <span class="op2">=</span> <span class="s">"blackcurrant"</span></span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="fn">print</span>(<span class="var">fruits</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple', 'blackcurrant', 'cherry']</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Change a Range of Values</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">colors</span> <span class="op2">=</span> [<span class="s">"red"</span>, <span class="s">"blue"</span>, <span class="s">"green"</span>, <span class="s">"orange"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># Replace index 1 and 2 with an entirely new sub-array block</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="var">colors</span>[<span class="num">1</span>:<span class="num">3</span>] <span class="op2">=</span> [<span class="s">"cyan"</span>, <span class="s">"magenta"</span>]</span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="fn">print</span>(<span class="var">colors</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['red', 'cyan', 'magenta', 'orange']</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">Insert Items with insert()</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span><span class="var">cart</span> <span class="op2">=</span> [<span class="s">"laptop"</span>, <span class="s">"mouse"</span>]</span></div>
                                    <div class="code-line"><span class="ln">2</span><span><span class="k"># Insert a new item at index 1 without destroying "mouse"</span></span></div>
                                    <div class="code-line"><span class="ln">3</span><span><span class="var">cart</span>.<span class="fn">insert</span>(<span class="num">1</span>, <span class="s">"keyboard"</span>)</span></div>
                                    <div class="code-line"><span class="ln">4</span><span><span class="fn">print</span>(<span class="var">cart</span>)</span></div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['laptop', 'keyboard', 'mouse']</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                What happens if you insert <b>more</b> items into a slice than you originally targeted? Python handles it effortlessly! It dynamically expands the list size and shifts the remaining items further down the index timeline. For instance, replacing <code>[1:2]</code> with three distinct items makes the entire list grow by 2 slots.
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Index Target Override</h4>
                                    <ul>
                                        <li>Create a list with names: <code>["Alex", "Bob", "Chris"]</code></li>
                                        <li>Change <code>"Bob"</code> to <code>"Ben"</code> using its explicit index</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Inline Insertion Drill</h4>
                                    <ul>
                                        <li>Initialize a list containing <code>["Item A", "Item C"]</code></li>
                                        <li>Deploy <span>insert()</span> to slide <code>"Item B"</code> cleanly into index position 1</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Double Range Swap</h4>
                                    <ul>
                                        <li>Create a list holding four distinct digital numbers</li>
                                        <li>Replace the middle two numbers via a range slice assignment</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Inventory Pipeline Upgrade</h4>
                                    <ul>
                                        <li>Store a series of hardware device inventory string names</li>
                                        <li>Target the last element using negative indexing logic (<code>[-1]</code>)</li>
                                        <li>Swap its text contents out with a premium device item asset</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Array Expansion Stretch</h4>
                                    <ul>
                                        <li>Create a 3-item programming languages tracker array</li>
                                        <li>Slice out index slot <code>[1:2]</code> and swap in an array of 3 new tools</li>
                                        <li>Print out the final resulting array count matrix length</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Queue Priority Slip</h4>
                                    <ul>
                                        <li>Build a queue line up representing priority background logs</li>
                                        <li>Inject a critical high-priority ticket into index position 0 via <code>insert()</code></li>
                                        <li>Log out the mutated lineup sequence map safely</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 Change List Challenge</h4>
                            <div class="quiz-item">
                                <p>1. Which list method lets you inject a brand-new element directly at a specific index without overwriting existing data?</p>
                                <input type="text" id="q1" placeholder="Type method name...">
                            </div>
                            <div class="quiz-item">
                                <p>2. If you modify a list using <code>items[1:3] = ["X"]</code>, does the overall size of the list shrink, grow, or stay the same?</p>
                                <input type="text" id="q2" placeholder="Type shrink, grow, or same...">
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
                { id: 'q1', ans: "insert" },
                { id: 'q2', ans: "shrink" }
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
                feedback.innerHTML = "✔ ACCESS GRANTED — Structural mutations and length shifts verified successfully ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Verification mismatch on array expansion mechanics or insertion keywords.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>