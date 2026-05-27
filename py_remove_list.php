<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python - Remove List Items</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Deletion Visualizer Card */
        .deletion-visualizer {
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
        }
        .deletion-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin: 8px 0;
        }
        .deletion-box {
            background: #0d1117;
            border: 1px solid #30363d;
            padding: 8px 12px;
            border-radius: 4px;
            text-align: center;
        }
        .deletion-box.purged {
            border-color: #ff2d78;
            background: rgba(255, 45, 120, 0.05);
            text-decoration: line-through;
            opacity: 0.4;
        }
        .deletion-action {
            color: #8b949e;
            font-size: 0.85rem;
        }

        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            background-color: #0d1117 !important; 
            color: #00ffe7 !important; /* Regular unhighlighted characters get crisp cyan */           
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
                        <span class="py-topbar-title">remove_list_items.py — Python Tutorial</span>
                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python - Remove List Items
                        </h1>

                        <div class="py-banner">
                            Python provides multiple ways to remove items from a list. You can target items by <b>value name</b> using <code>remove()</code>, strip items by <b>index location</b> using <code>pop()</code>, delete entire elements or slices out of memory using the <code>del</code> keyword, or completely wipe a list clean with <code>clear()</code>.
                        </div>

                        <h3 style="color: #58a6ff; margin-top: 25px;">[Collection Deletion Engine Map]</h3>
                        <div class="deletion-visualizer">
                            <div class="deletion-row">
                                <span class="deletion-action" style="width: 110px;">1. remove("B"):</span>
                                <div class="deletion-box">"A"</div>
                                <div class="deletion-box purged">"B"</div>
                                <div class="deletion-box">"C"</div>
                            </div>
                            <div class="deletion-row">
                                <span class="deletion-action" style="width: 110px;">2. pop(2):</span>
                                <div class="deletion-box">"A"</div>
                                <div class="deletion-box">"B"</div>
                                <div class="deletion-box purged">"C"</div>
                            </div>
                            <div class="deletion-row">
                                <span class="deletion-action" style="width: 110px;">3. del items[0]:</span>
                                <div class="deletion-box purged">"A"</div>
                                <div class="deletion-box">"B"</div>
                                <div class="deletion-box">"C"</div>
                            </div>
                            <div class="deletion-row">
                                <span class="deletion-action" style="width: 110px;">4. clear():</span>
                                <div class="deletion-box" style="border-style: dashed; color:#8b949e; width: 140px;">[ Empty List ]</div>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">live data deletion methods</div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Remove by Specified Value</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="k"># remove() targets the exact matching element content</span></div>
                                    <div class="code-line"><span class="ln">3</span><span class="var">fruits</span>.<span class="fn">remove</span>(<span class="s">"banana"</span>)</div>
                                    <div class="code-line"><span class="ln">4</span><span class="fn">print</span>(<span class="var">fruits</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple', 'cherry']</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Pop by Index (or Pop Last)</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">fruits</span> <span class="op2">=</span> [<span class="s">"apple"</span>, <span class="s">"banana"</span>, <span class="s">"cherry"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="k"># pop() removes and returns index 1 ("banana")</span></div>
                                    <div class="code-line"><span class="ln">3</span><span class="var">fruits</span>.<span class="fn">pop</span>(<span class="num">1</span>)</div>
                                    <div class="code-line"><span class="ln">4</span><span class="k"># Leaving pop() empty automatically extracts the absolute last item</span></div>
                                    <div class="code-line"><span class="ln">5</span><span class="var">fruits</span>.<span class="fn">pop</span>()</div>
                                    <div class="code-line"><span class="ln">6</span><span class="fn">print</span>(<span class="var">fruits</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['apple']</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">The del Keyword vs clear()</span>
                                </div>
                                <div class="repl-code">
                                    <div class="code-line"><span class="ln">1</span><span class="var">alpha</span> <span class="op2">=</span> [<span class="s">"X"</span>, <span class="s">"Y"</span>, <span class="s">"Z"</span>]</div>
                                    <div class="code-line"><span class="ln">2</span><span class="var">beta</span> <span class="op2">=</span> [<span class="s">"X"</span>, <span class="s">"Y"</span>, <span class="s">"Z"</span>]</div>
                                    <div class="code-line"><span class="ln">3</span><span class="k"># del obliterates index 0 out of memory completely</span></div>
                                    <div class="code-line"><span class="ln">4</span><span class="purple-bold">del</span> <span class="var">alpha</span>[<span class="num">0</span>]</div>
                                    <div class="code-line"><span class="ln">5</span><span class="k"># clear() flushes the entire list container out, leaving it empty</span></div>
                                    <div class="code-line"><span class="ln">6</span><span class="var">beta</span>.<span class="fn">clear</span>()</div>
                                    <div class="code-line"><span class="ln">7</span><span class="fn">print</span>(<span class="var">alpha</span>)</div>
                                    <div class="code-line"><span class="ln">8</span><span class="fn">print</span>(<span class="var">beta</span>)</div>
                                </div>
                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['Y', 'Z']<br>[]</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">
                            <div class="think-label">&gt;&gt;&gt; THINK</div>
                            <p>
                                What happens if you run the <code>remove()</code> method on a list that has **duplicate** items? It won't remove all of them! Python will scan the list from front to back and delete only the **very first occurrence** of that value. To catch the rest, you would need to run a loop or condition block.
                            </p>
                        </div>

                        <div class="py-section">
                            <div class="py-label">practice assignments</div>
                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Exact Name Removal</h4>
                                    <ul>
                                        <li>Create a list holding 3 item values: <code>["Mac", "Windows", "Linux"]</code></li>
                                        <li>Deploy <span>remove()</span> to strip <code>"Windows"</code> entirely from the list</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Tail End Pop</h4>
                                    <ul>
                                        <li>Initialize an array containing 3 numerical integers</li>
                                        <li>Execute empty <span>pop()</span> parameters to pull off the final element</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Total Workspace Wipe</h4>
                                    <ul>
                                        <li>Build a list packed with temporary configuration data strings</li>
                                        <li>Deploy the <span>clear()</span> method to leave the list structure completely empty</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Index Target Extraction</h4>
                                    <ul>
                                        <li>Store an entry tracking log sequence containing 4 distinct tokens</li>
                                        <li>Use <code>pop()</code> targeting index <code>1</code> to remove the second item</li>
                                        <li>Print out the item that was removed and the updated list to verify</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Memory Destruction Slip</h4>
                                    <ul>
                                        <li>Create a variable list containing core operating user structures</li>
                                        <li>Apply the low-level <code>del</code> statement to drop index position 0</li>
                                        <li>Log out the remaining active structure records safely</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Duplicate Purge Check</h4>
                                    <ul>
                                        <li>Declare an array listing duplicate names: <code>["A", "B", "A", "C"]</code></li>
                                        <li>Run <span>remove("A")</span> once on the list</li>
                                        <li>Print out the list to verify that the second <code>"A"</code> is still there</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="mini-quiz-section">
                            <h4>🐍 Remove List Challenge</h4>
                            <div class="quiz-item">
                                <p>1. Which list method removes an item, but defaults to stripping the very last element if you don't specify an index?</p>
                                <input type="text" id="q1" placeholder="Type method name...">
                            </div>
                            <div class="quiz-item">
                                <p>2. What keyword completely destroys an entire list variable out of system memory, causing a crash if you try to print it later?</p>
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
                { id: 'q1', ans: "pop" },
                { id: 'q2', ans: "del" }
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
                feedback.innerHTML = "✔ ACCESS GRANTED — Deletion tracking operations validated and fully synced ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Misunderstanding detected on memory extraction vs container flushing methods.";
                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => { document.querySelector('.mini-quiz-section').classList.remove('shake'); }, 500);
                return false;
            }
        }
    </script>

</body>
</html>