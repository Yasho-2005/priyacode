<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python If-Else Statements</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }
        
    
        /* High-Contrast Visibility Fixes for Dark REPL Terminals */
        .repl-code {
            /* background-color: #252d3a !important; */
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

        /* Interactive Chor-Police Animation UI Engine */
        .game-panel {
            background: #14181f;
            /* opacity: 5; */
            border: 1px solid #30363d;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .game-title {
            font-family: 'Courier New', monospace;
            color: #00ffe7;
            font-size: 1.4rem;
            margin-top: 0;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .game-controls {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
        }
        .btn-game {
            background: #21262d;
            border: 1px solid #30363d;
            color: #c9d1d9;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-family: monospace;
            transition: all 0.2s ease;
        }
        .btn-game:hover:not(:disabled) {
            background: #30363d;
            border-color: #8b949e;
            color: #fff;
        }
        .btn-game:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }
        #btn-play { border-color: #238636; color: #2ea44f; }
        #btn-play:hover:not(:disabled) { background: #238636; color: #fff; }
        #btn-run { border-color: #bd00ff; color: #bd00ff; }
        #btn-run:hover:not(:disabled) { background: #bd00ff; color: #fff; }

        .game-msg-prompt {
            color: #ff2d78;
            font-weight: bold;
            font-family: monospace;
            margin-bottom: 15px;
            min-height: 20px;
        }

        .avatar-deck {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        .avatar-card {
            flex: 1;
            background: #161b22;
            border: 2px solid #30363d;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
            opacity: 0.4; /* Default deactivated state */
            pointer-events: none;
        }
        .avatar-card.active-deck {
            opacity: 1;
            pointer-events: auto;
        }
        .avatar-card.active-deck:hover {
            border-color: #00ffe7;
            transform: translateY(-2px);
        }
        .avatar-card.selected {
            border-color: #ff2d78 !important;
            background: rgba(255, 45, 120, 0.05);
            box-shadow: 0 0 10px rgba(255, 45, 120, 0.2);
        }
        .avatar-icon {
            font-size: 2.5rem;
            margin-bottom: 8px;
        }
        .avatar-label {
            color: #c9d1d9;
            font-weight: bold;
            font-family: monospace;
            font-size: 0.9rem;
        }

        /* Mock Animated Output Terminal */
        .terminal-box {
            background: #010409;
            border: 1px solid #30363d;
            border-radius: 6px;
            padding: 15px;
            font-family: 'Courier New', monospace;
            min-height: 80px;
        }
        .term-header {
            color: #8b949e;
            font-size: 0.8rem;
            margin-bottom: 10px;
            border-bottom: 1px dashed #21262d;
            padding-bottom: 5px;
        }
        .term-row {
            margin: 4px 0;
            color: #58a6ff;
            display: none;
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
                            if_else_statements.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Conditional Control
                        </h1>

                        <div class="py-banner">
                            Conditional control blocks form the decision-making engine of code. They evaluate boolean logic triggers to dynamically steer execution branches.
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    structural control gates managing program paths using `if`, `elif`, and `else`
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    enables complex forks, dynamic filtering variations, and logic handling
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    authentication gateways, algorithmic score processors, and routine system checkers
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">if condition: block</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live code engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">the simple if condition</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">switch_state</span> <span class="op2">=</span> <span class="num">1</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">switch_state</span> <span class="op2">==</span> <span class="num">1</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Light is ON"</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Light is ON</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">if-else alternative branching</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">num</span> <span class="op2">=</span> <span class="num">15</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">num</span> <span class="op2">%</span> <span class="num">2</span> <span class="op2">==</span> <span class="num">0</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Even Number"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Odd Number"</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Odd Number</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">if-elif-else grading stack</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">score</span> <span class="op2">=</span> <span class="num">78</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">score</span> <span class="op2">&gt;=</span> <span class="num">90</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Grade A"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">score</span> <span class="op2">&gt;=</span> <span class="num">75</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Grade B"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Grade C"</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Grade B</span>
                                </div>
                            </div>

                        </div>

                        <div class="game-panel">
                            <h3 class="game-title">
                                <i class="fa-solid fa-gamepad"></i> Conditional Flow Game: chor-police
                            </h3>

                            <div class="game-controls">
                                <button type="button" id="btn-play" class="btn-game" onclick="initiateGame()">▶ Play Game</button>
                                <button type="button" id="btn-run" class="btn-game" onclick="executeDecisionEngine()" disabled>⚡ Run Script</button>
                            </div>

                            <div id="game-prompt" class="game-msg-prompt">System offline. Click Play to boot game matrix...</div>

                            <div class="avatar-deck">
                                <div class="avatar-card" id="card-police" onclick="selectIdentity('police')">
                                    <div class="avatar-icon">👮‍♂️</div>
                                    <div class="avatar-label">Police</div>
                                </div>
                                <div class="avatar-card" id="card-thief" onclick="selectIdentity('thief')">
                                    <div class="avatar-icon">🥷</div>
                                    <div class="avatar-label">Thief</div>
                                </div>
                                <div class="avatar-card" id="card-lawyer" onclick="selectIdentity('lawyer')">
                                    <div class="avatar-icon">👨‍💼</div>
                                    <div class="avatar-label">Lawyer</div>
                                </div>
                            </div>

                            <div class="terminal-box">
                                <div class="term-header">STDOUT CONSOLE MONITOR // EXECUTION LAYER</div>
                                <div id="line-eval" class="term-row" style="color: #8b949e;">>>> Evaluating identity parameters...</div>
                                <div id="line-out" class="term-row" style="color: #00ffe7; font-weight: bold; font-size: 1.1rem;"></div>
                            </div>
                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Notice the keyword <code class="cyan-bold">elif</code> instead of traditional <code>else if</code> structures seen in C or JavaScript. Python explicitly unifies multi-line checking conditions into one keyword structure to keep formatting alignments clean and easy to scan!
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

                                    <h4>Velocity Checker</h4>

                                    <ul>
                                        <li><span>speed</span> = 45</li>
                                        <li>If speed exceeds 50, log warning alert</li>
                                        <li>Add no optional secondary paths</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Thermal Tracker</h4>

                                    <ul>
                                        <li><span>temp</span> = -5</li>
                                        <li>Branch path to say "Freezing" if below zero</li>
                                        <li>Else report status path as "Liquid"</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Security Clearing</h4>

                                    <ul>
                                        <li>Check variable clearance level tokens</li>
                                        <li>Chain <span>if-elif-else</span> parameters</li>
                                        <li>Handle levels 1, 2, and fallback catch block paths</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Conditional Challenge</h4>

                            <div class="quiz-item">
                                <p>1. What keyword represents the intermediate evaluation step when tracking multiple alternative parameters?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type keyword...">
                            </div>

                            <div class="quiz-item">
                                <p>2. What punctuation symbol must terminate every conditional statement checking line declaration?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Type symbol...">
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
        let chosenIdentity = "";
        let isGameBooted = false;

        function initiateGame() {
            isGameBooted = true;
            chosenIdentity = "";
            
            // Clear current selection state
            document.querySelectorAll('.avatar-card').forEach(card => {
                card.classList.remove('selected');
                card.classList.add('active-deck'); // Activate interaction layer
            });

            // Update prompts and flags
            document.getElementById('game-prompt').style.color = "#00ffe7";
            document.getElementById('game-prompt').innerHTML = "⚡ SYSTEM LIVE: Choose who you are!";
            document.getElementById('btn-play').disabled = true;
            document.getElementById('btn-run').disabled = false;

            // Clear terminal row elements
            document.getElementById('line-eval').style.display = "none";
            document.getElementById('line-out').style.display = "none";
        }

        function selectIdentity(role) {
            if (!isGameBooted) return;
            chosenIdentity = role;

            document.querySelectorAll('.avatar-card').forEach(card => {
                card.classList.remove('selected');
            });

            if(role === 'police') document.getElementById('card-police').classList.add('selected');
            if(role === 'thief') document.getElementById('card-thief').classList.add('selected');
            if(role === 'lawyer') document.getElementById('card-lawyer').classList.add('selected');

            document.getElementById('game-prompt').style.color = "#58a6ff";
            document.getElementById('game-prompt').innerHTML = "Identity locked: Selected **" + role.toUpperCase() + "**. Ready to run script vectors.";
        }

        function executeDecisionEngine() {
            if (!chosenIdentity) {
                document.getElementById('game-prompt').style.color = "#ff4d4d";
                document.getElementById('game-prompt').innerHTML = "⚠ EXECUTION REJECTED: Choose who you are first!";
                return;
            }

            const evalRow = document.getElementById('line-eval');
            const outRow = document.getElementById('line-out');

            // Reset terminal rows display properties
            evalRow.style.display = "block";
            outRow.style.display = "none";

            let resultMsg = "";
            if (chosenIdentity === "police") {
                resultMsg = "▶ catch the thief";
            } else if (chosenIdentity === "thief") {
                resultMsg = "▶ talk with lawyer";
            } else if (chosenIdentity === "lawyer") {
                resultMsg = "▶ go find proof";
            }

            // Animate output processing simulation
            setTimeout(() => {
                outRow.innerHTML = resultMsg;
                outRow.style.display = "block";
                
                // Re-enable Play routine vectors
                document.getElementById('btn-play').disabled = false;
                document.getElementById('btn-run').disabled = true;
                document.getElementById('game-prompt').style.color = "#2ea44f";
                document.getElementById('game-prompt').innerHTML = "Script finished processing. Click Play to reset core system engine loop.";
                
                // Freeze deck changes until reset
                document.querySelectorAll('.avatar-card').forEach(card => {
                    card.classList.remove('active-deck');
                });
                isGameBooted = false;
            }, 900);
        }

        // Quiz Evaluation Mechanism
        function validateAndNext(event) {
            const fields = [
                { id: 'q1', ans: "elif" },
                { id: 'q2', ans: ":" }
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
                feedback.innerHTML = "✔ ACCESS GRANTED — Control routing vectors cleanly cleared ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML = "❌ ERROR: Indentation error or improper control sequences encountered.";

                document.querySelector('.mini-quiz-section').classList.add('shake');
                setTimeout(() => {
                    document.querySelector('.mini-quiz-section').classList.remove('shake');
                }, 500);

                return false;
            }
        }
    </script>

</body>

</html>