<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Lists</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }

        /* Brainstorming Panel Stylings */
        .brainstorm-container {
            background: rgba(88, 166, 255, 0.05);
            border-left: 4px solid #58a6ff;
            padding: 20px;
            margin: 20px 0 30px 0;
            border-radius: 0 8px 8px 0;
        }
        .brainstorm-title {
            color: #58a6ff;
            font-family: 'Courier New', monospace;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .use-case-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }
        .use-case-card {
            background: #161b22;
            border: 1px solid #30363d;
            padding: 15px;
            border-radius: 6px;
        }
        .use-case-card h5 {
            margin: 0 0 8px 0;
            color: #00ffe7;
            font-size: 1rem;
        }
        .use-case-card p {
            margin: 0;
            font-size: 0.85rem;
            color: #8b949e;
            line-height: 1.4;
        }

        /* Methods Reference Table Stylings */
        .table-scroll {
            width: 100%;
            overflow-x: auto;
            margin: 20px 0;
            border: 1px solid #30363d;
            border-radius: 6px;
        }
        .methods-table {
            width: 100%;
            border-collapse: collapse;
            font-family: monospace;
            text-align: left;
            background-color: #161b22;
        }
        .methods-table th {
            background-color: #21262d;
            color: #58a6ff;
            padding: 12px;
            font-size: 0.95rem;
            border-bottom: 2px solid #30363d;
        }
        .methods-table td {
            padding: 12px;
            border-bottom: 1px solid #30363d;
            color: #c9d1d9;
            font-size: 0.9rem;
            vertical-align: top;
        }
        .methods-table tr:hover {
            background-color: #1f242c;
        }
        .method-name {
            color: #00ffe7;
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

        /* Custom Double Grid Layout for Tasks */
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

            <div class="python-page-wrapper">

                <div class="python-breadcrumb">
                    python-tutorial / <span>python_lists.py</span>
                </div>

                <div class="py-wrap">

                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            python_lists.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Lists
                        </h1>

                        <div class="py-banner">
                            A <b>List</b> is Python's built-in ordered data structure used to store collections of items inside a single variable. Lists are mutable, meaning they can be modified dynamically after creation.
                        </div>

                        <div class="brainstorm-container">
                            <div class="brainstorm-title">
                                <i class="fa-solid fa-brain"></i> Real-Life Architecture: Why Do We Need Lists?
                            </div>
                            <p style="margin: 0 0 15px 0; color: #c9d1d9; font-size: 0.95rem;">
                                Imagine trying to track 100 data points or users by inventing 100 unique variable names. It collapses instantly. Lists solve this by binding independent values into a single index-mapped track.
                            </p>
                            
                            <div class="use-case-grid">
                                <div class="use-case-card">
                                    <h5>📊 Data Science</h5>
                                    <p>Holding arrays of numerical observations, cleaning temperature metrics, or tracking matrices before loading them into data frames.</p>
                                </div>
                                <div class="use-case-card">
                                    <h5>🛒 Fullstack E-Commerce</h5>
                                    <p>Managing shopping cart systems where product IDs are appended, updated, or dropped as the consumer interacts with the UI.</p>
                                </div>
                                <div class="use-case-card">
                                    <h5>🎵 Media & Streaming</h5>
                                    <p>Queuing up music tracks or video assets sequentially, allowing users to reorder streams or skip indices smoothly.</p>
                                </div>
                                <div class="use-case-card">
                                    <h5>🎮 Gaming Inventories</h5>
                                    <p>Storing a player's collected weapon tokens or items, checking index slots, and wiping spent ammunition elements.</p>
                                </div>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    an ordered, changeable collection sequence allowing duplicate element entries
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    groups multiple related items together under a single index-searchable identifier
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    everywhere inside database results pooling, state history logging, and collection tracking
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">my_list = ["item1", "item2", "item3"]</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">
                            <div class="py-label">comprehensive methods checklist matrix</div>
                            <div class="table-scroll">
                                <table class="methods-table">
                                    <thead>
                                        <tr>
                                            <th>Method Syntax</th>
                                            <th>Operational Behavior Description</th>
                                            <th>Code Action Example Snippet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="method-name">append(x)</td>
                                            <td>Adds an item <code class="pink-bold">x</code> directly to the absolute end position of the list array.</td>
                                            <td><code>nums.append(5)</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">insert(i, x)</td>
                                            <td>Inserts an item <code class="pink-bold">x</code> at a targeted target index location <code class="cyan-bold">i</code>.</td>
                                            <td><code>nums.insert(0, "First")</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">remove(x)</td>
                                            <td>Searches and deletes the very first matching value token <code class="pink-bold">x</code> inside the data list.</td>
                                            <td><code>colors.remove("Red")</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">pop([i])</td>
                                            <td>Removes and returns the item sitting at index <code class="cyan-bold">i</code>. Defaults to tail index if omitted.</td>
                                            <td><code>last_item = items.pop()</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">clear()</td>
                                            <td>Completely flushes and strips away all element variables, leaving an empty list.</td>
                                            <td><code>session_logs.clear()</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">index(x)</td>
                                            <td>Returns the zero-based index value address location of the first matching item <code class="pink-bold">x</code>.</td>
                                            <td><code>pos = cards.index("Ace")</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">count(x)</td>
                                            <td>Counts and returns how many times an element <code class="pink-bold">x</code> occurs inside the array sequence.</td>
                                            <td><code>total = values.count(10)</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">sort()</td>
                                            <td>Permanently organizes all internal items in an ascending alphabetical or numerical order.</td>
                                            <td><code>scores.sort()</code></td>
                                        </tr>
                                        <tr>
                                            <td class="method-name">reverse()</td>
                                            <td>Flips the positional placement order of all elements inside the list upside down.</td>
                                            <td><code>queue.reverse()</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live array engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Basic List Initialization & Reading</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">playlist</span> <span class="op2">=</span> [<span class="s">"Song A"</span>, <span class="s">"Song B"</span>, <span class="s">"Song C"</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="fn">print</span>(<span class="var">playlist</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="k"># Reading individual items using 0-based indexes</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">playlist</span>[<span class="num">0</span>])</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['Song A', 'Song B', 'Song C']<br>Song A</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">Appending New Data Elements</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">cart</span> <span class="op2">=</span> [<span class="s">"laptop"</span>, <span class="s">"mouse"</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">cart</span>.<span class="fn">append</span>(<span class="s">"keyboard"</span>)  <span class="k"># Adds right to the very end</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="fn">print</span>(<span class="var">cart</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['laptop', 'mouse', 'keyboard']</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">Modifying / Changing Elements via Index</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">game_inventory</span> <span class="op2">=</span> [<span class="s">"shield"</span>, <span class="s">"sword"</span>, <span class="s">"potion"</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">game_inventory</span>[<span class="num">1</span>] <span class="op2">=</span> <span class="s">"laser gun"</span>  <span class="k"># Replaces "sword" at index 1</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="fn">print</span>(<span class="var">game_inventory</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['shield', 'laser gun', 'potion']</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 04</span>
                                    <span class="badge">Removing Elements via remove() vs del</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">users</span> <span class="op2">=</span> [<span class="s">"Alice"</span>, <span class="s">"Bob"</span>, <span class="s">"Charlie"</span>, <span class="s">"David"</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="k"># 1. remove() eliminates an item by matching its actual value text</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">users</span>.<span class="fn">remove</span>(<span class="s">"Bob"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="k"># 2. del eliminates an item strictly by pointing to its index location</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="purple-bold">del</span> <span class="var">users</span>[<span class="num">0</span>]  <span class="k"># Wipes whoever is sitting at index 0 currently ("Alice")</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span><span class="fn">print</span>(<span class="var">users</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">['Charlie', 'David']</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                What's the main difference between <code>remove()</code> and <code>del</code>? <br>
                                Use <code class="cyan-bold">remove()</code> when you know the specific text value name but don't care where it lives. Use <code class="pink-bold">del</code> when you want to target a specific placement coordinate, regardless of what text value is inside it!
                            </p>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                practice assignments
                            </div>

                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>My Friends Tracker</h4>
                                    <ul>
                                        <li>Create a list with 3 names of friends</li>
                                        <li>Print the entire collection list to the terminal</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Fruit Basket Growth</h4>
                                    <ul>
                                        <li>Initialize a list containing <code>["Apple", "Banana"]</code></li>
                                        <li>Use <span>append()</span> to add <code>"Orange"</code> to the basket</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Color Swap Trick</h4>
                                    <ul>
                                        <li>Store <code>["Red", "Blue", "Green"]</code> in a color variable</li>
                                        <li>Change <code>"Blue"</code> to <code>"Yellow"</code> using its index address</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Cart Pipeline Audit</h4>
                                    <ul>
                                        <li>Create a list of three unique groceries string objects</li>
                                        <li>Append a brand new commodity item to the list end</li>
                                        <li>Print entire array matrix to console monitor</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Index Target Override</h4>
                                    <ul>
                                        <li>Initialize a numbers sequence array dataset</li>
                                        <li>Target index 2 location explicitly via brackets</li>
                                        <li>Override value item content parameter tokens</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Data Purge Cleanup</h4>
                                    <ul>
                                        <li>Store four computer operating systems codes</li>
                                        <li>Apply <span>remove()</span> to erase one specific title</li>
                                        <li>Apply <span>del</span> to clear the tailing element target</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python List Challenge</h4>

                            <div class="quiz-item">
                                <p>1. What is the starting index address location for any list array sequence collection in Python?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type starting number index...">
                            </div>

                            <div class="quiz-item">
                                <p>2. Which array method adds an item to the absolute end position of a list collection?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Type method name...">
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
                    ans: "0"
                },
                {
                    id: 'q2',
                    ans: "append"
                }
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
                feedback.innerHTML =
                    "✔ ACCESS GRANTED — Array collection manipulation verified successfully ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Invalid index positioning or structural mutation method key.";

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