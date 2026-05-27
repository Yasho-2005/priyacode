<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Tuples</title>

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
            background: rgba(189, 0, 255, 0.05);
            border-left: 4px solid #bd00ff;
            padding: 20px;
            margin: 20px 0 30px 0;
            border-radius: 0 8px 8px 0;
        }
        .brainstorm-title {
            color: #bd00ff;
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
            color: #bd00ff;
            font-size: 1rem;
        }
        .use-case-card p {
            margin: 0;
            font-size: 0.85rem;
            color: #8b949e;
            line-height: 1.4;
        }

        /* Redesigned Neon Methods Reference Table Stylings */
        .table-scroll {
            width: 100%;
            overflow-x: auto;
            margin: 20px 0;
            border: 1px solid #30363d;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        .methods-table {
            width: 100%;
            border-collapse: collapse;
            font-family: monospace;
            text-align: left;
            background-color: #0d1117;
        }
        .methods-table th {
            background-color: #161b22;
            color: #bd00ff;
            padding: 14px 16px;
            font-size: 0.95rem;
            border-bottom: 2px solid #30363d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .methods-table td {
            padding: 14px 16px;
            border-bottom: 1px solid #21262d;
            color: #c9d1d9;
            font-size: 0.9rem;
            vertical-align: middle;
        }
        .methods-table tr:hover {
            background-color: #161b22;
        }
        /* Highlighted Cyber Neon Green Style for Tuple Methods */
        .method-name-neon {
            color: #00ff87;
            font-weight: bold;
            font-size: 0.95rem;
            text-shadow: 0 0 8px rgba(0, 255, 135, 0.3);
            background: rgba(0, 255, 135, 0.05);
            padding: 4px 8px;
            border-radius: 4px;
            border: 1px solid rgba(0, 255, 135, 0.15);
            display: inline-block;
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

            <div class="python-page-wrapper" style="padding-top: 20px;">

                <div class="py-wrap">

                    <div class="py-topbar">

                        <div class="py-dot" style="background:#ff5f56"></div>
                        <div class="py-dot" style="background:#ffbd2e"></div>
                        <div class="py-dot" style="background:#27c93f"></div>

                        <span class="py-topbar-title">
                            python_tuples.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Tuples
                        </h1>

                        <div class="py-banner">
                            A <b>Tuple</b> is an immutable, ordered sequence collection in Python. Unlike lists, tuples are enclosed in parentheses <code>()</code> and their contents **cannot be changed, added, or removed** once declared in memory.
                        </div>

                        <div class="brainstorm-container">
                            <div class="brainstorm-title">
                                <i class="fa-solid fa-lock"></i> Real-Life Architecture: Why Use a Tuple Instead of a List?
                            </div>
                            <p style="margin: 0 0 15px 0; color: #c9d1d9; font-size: 0.95rem;">
                                If lists can do everything, why do we need tuples? The answer is **Data Protection**. Lists are dangerous for constant systems because any rogue line of code can mutate your constants. Tuples act as write-protected collections.
                            </p>
                            
                            <div class="use-case-grid">
                                <div class="use-case-card">
                                    <h5>📍 GPS Coordinates</h5>
                                    <p>Storing fixed Latitude and Longitude variables. A map pin's physical location should never be accidentally appended or modified.</p>
                                </div>
                                <div class="use-case-card">
                                    <h5>🎨 UI Design Schemes</h5>
                                    <p>Locking down core theme parameters like RGB color configurations <code>(255, 45, 120)</code> that must remain constant across screens.</p>
                                </div>
                                <div class="use-case-card">
                                    <h5>🔒 Database Records</h5>
                                    <p>Fetching fixed configurations from a database row—like a server port array configuration that must be read-only for security.</p>
                                </div>
                                <div class="use-case-card">
                                    <h5>⚙️ System Constants</h5>
                                    <p>Mapping system defaults like days of the week or months of the year where structure mutations would break backend routing paths.</p>
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
                                    an ordered, unchangeable (immutable) data sequence collection enclosed in parentheses
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    insulates data sets from accidental runtime adjustments and speeds up performance compilation execution
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    returning multiple structured values from data backend functions, constant records, settings maps
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">my_tuple = ("item1", "item2", "item3")</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">
                            <div class="py-label">tuple built-in methods matrix</div>
                            <div class="table-scroll">
                                <table class="methods-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 25%;">Neon Method Syntax</th>
                                            <th style="width: 45%;">Operational Behavior Description</th>
                                            <th style="width: 30%;">Code Action Example Snippet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="method-name-neon">count(x)</span></td>
                                            <td>Scans the tuple block data matrix and counts how many times value <code class="pink-bold">x</code> occurs inside.</td>
                                            <td><code>grades.count("A")</code></td>
                                        </tr>
                                        <tr>
                                            <td><span class="method-name-neon">index(x)</span></td>
                                            <td>Searches the tuple sequence and yields the zero-based target address index where value <code class="pink-bold">x</code> first resides.</td>
                                            <td><code>colors.index("Blue")</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live tuple engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">Tuple Declaration & Coordinate Extraction</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">location</span> <span class="op2">=</span> (<span class="num">40.7128</span>, <span class="op2">-</span><span class="num">74.0060</span>)  <span class="k"># New York City Coordinates</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="fn">print</span>(<span class="var">location</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="k"># Index reading functions just like array lists</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">location</span>[<span class="num">0</span>])</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">(40.7128, -74.006)<br>40.7128</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge" style="background: #ff2d78; color: #fff;">Immutability Safety Barrier (Error Demo)</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">rgb_color</span> <span class="op2">=</span> (<span class="num">255</span>, <span class="num">0</span>, <span class="num">120</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="k"># Attempting to reassign an internal item value index will trigger a crash</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">rgb_color</span>[<span class="num">1</span>] <span class="op2">=</span> <span class="num">50</span></span>
                                    </div>
                                </div>

                                <div class="output-bar" style="background: #221216; border-top: 1px solid #ff4d4d;">
                                    <span class="arrow" style="color: #ff4d4d;">❌</span>
                                    <span class="val" style="color: #ff4d4d; font-weight: bold;">TypeError: 'tuple' object does not support item assignment</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">Utilizing Built-In Tuple Methods</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">responses</span> <span class="op2">=</span> (<span class="s">"Yes"</span>, <span class="s">"No"</span>, <span class="s">"Yes"</span>, <span class="s">"Maybe"</span>, <span class="s">"Yes"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="k"># 1. Using count() to track frequencies</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">yes_count</span> <span class="op2">=</span> <span class="var">responses</span>.<span class="fn">count</span>(<span class="s">"Yes"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="k"># 2. Using index() to detect index placement coordinates</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="var">maybe_pos</span> <span class="op2">=</span> <span class="var">responses</span>.<span class="fn">index</span>(<span class="s">"Maybe"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span><span class="fn">print</span>(<span class="s">"Total Yes items:"</span>, <span class="var">yes_count</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">8</span>
                                        <span><span class="fn">print</span>(<span class="s">"Index location of Maybe:"</span>, <span class="var">maybe_pos</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Total Yes items: 3<br>Index location of Maybe: 3</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                What if you genuinely need to edit an existing tuple value dataset? <br>
                                There is a sneaky workaround trick: convert the tuple into a standard array list using <code class="cyan-bold">list(my_tuple)</code>, execute your modifications or appends inside that list array, then convert it straight back via <code class="pink-bold">tuple(my_list)</code>!
                            </p>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                practice assignments
                            </div>

                            <div class="tasks-grid">

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 01 (EASY)</div>
                                    <h4>Immutable Weekdays</h4>
                                    <ul>
                                        <li>Create a tuple containing the names of the weekend days</li>
                                        <li>Print the entire sequence array collection directly to screen</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 02 (EASY)</div>
                                    <h4>Single Extraction Loop</h4>
                                    <ul>
                                        <li>Initialize a tuple with <code>("Gold", "Silver", "Bronze")</code></li>
                                        <li>Access and print only the <code>"Gold"</code> value using its index coordinate</li>
                                    </ul>
                                </div>

                                <div class="task-card" style="border-top: 3px solid #2ea44f;">
                                    <div class="task-num" style="color: #2ea44f;">TASK 03 (EASY)</div>
                                    <h4>Crash Simulation Run</h4>
                                    <ul>
                                        <li>Build a simple 3-item numerical constant value tuple</li>
                                        <li>Write a line attempting to change index position 0 to a new value</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 04</div>
                                    <h4>Frequency Audit Core</h4>
                                    <ul>
                                        <li>Store a series of server status response strings inside a tuple</li>
                                        <li>Run the <span>count()</span> method to extract total error logs</li>
                                        <li>Print out the final metric variables value to terminal</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 05</div>
                                    <h4>Target Address Radar</h4>
                                    <ul>
                                        <li>Initialize a unique chemical compound name tuple database</li>
                                        <li>Apply the <span>index()</span> method tracker targeting a specific string</li>
                                        <li>Log out the resulting integer position safely</li>
                                    </ul>
                                </div>

                                <div class="task-card">
                                    <div class="task-num">TASK 06</div>
                                    <h4>Tuple Converter Flip</h4>
                                    <ul>
                                        <li>Declare a locked tuple collection sequence model</li>
                                        <li>Cast the structure into a list variable dynamically to append data</li>
                                        <li>Lock the dataset back down into a clean tuple block</li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Tuple Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which brackets or wrapper symbols are used to define an immutable Python Tuple structure?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="parentheses, square, or curly?">
                            </div>

                            <div class="quiz-item">
                                <p>2. What is the technical term used to describe a data structure whose values cannot be changed after creation?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Type term (mutable or immutable)...">
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
                    ans: "parentheses"
                },
                {
                    id: 'q2',
                    ans: "immutable"
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
                    "✔ ACCESS GRANTED — Tuple memory immutability patterns fully authenticated ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Invalid structure character validation or sequence trait mismatch.";

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