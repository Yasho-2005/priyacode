<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Elif Ladder</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon aesthetic mappings */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }
        
        /* Cleaned Mascot Section */
        .mascot-container {
            display: flex;
            align-items: center;
            padding: 10px 0;
            margin: 20px 0;
            background: none;
            border: none;
        }
        .dolphin-mascot {
            font-size: 3rem;
            margin-right: 20px;
            user-select: none;
        }
        .chat-bubble {
            color: #ffffff;
            font-size: 1rem;
            line-height: 1.6;
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
        .table-scroll {
            width: 100%;
            overflow-x: auto;
            margin: 15px 0;
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
                            elif_ladder.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Elif Ladder Statements
                        </h1>

                        <div class="py-banner">
                            When an application requires more than two processing branches, Python utilizes the <b>elif ladder</b>. Short for "else if", it sequentially tests multiple condition criteria from top to bottom, stopping at the very first match.
                        </div>

                        <div class="mascot-container">
                            <div class="dolphin-mascot">🐬</div>
                            <div class="chat-bubble">
                                "🏋️‍♂️ <strong>FIRST MATCH WINS THE RACE!</strong> 💅 <br>
                                Python evaluates an <code>elif</code> stack in a linear progression. <br>
                                The moment a condition triggers <span class="cyan-bold">True</span>, its block runs, and Python drops out of the remaining tests entirely! Order your rules from most specific to most general! Let's build those logic gains! ✨💪"
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    chained conditional gates providing multiple sequential evaluation steps
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    prevents ugly, deep nested `if` statements that destroy code readability
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    menu option dispatchers, classification tools, and dynamic criteria ranking engines
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">if / elif / elif / else</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live hands-on code simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">marks grading matrix</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">marks</span> <span class="op2">=</span> <span class="num">82</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">marks</span> <span class="op2">&gt;=</span> <span class="num">90</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Excellent Performance: Tier A"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">marks</span> <span class="op2">&gt;=</span> <span class="num">80</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Very Good: Tier B"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">marks</span> <span class="op2">&gt;=</span> <span class="num">70</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Satisfactory: Tier C"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">8</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">9</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Requires Development: Tier D"</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Very Good: Tier B</span>
                                </div>
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">weeks tracker translation</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">day_num</span> <span class="op2">=</span> <span class="num">3</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">day_num</span> <span class="op2">==</span> <span class="num">1</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Monday"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">day_num</span> <span class="op2">==</span> <span class="num">2</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Tuesday"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">day_num</span> <span class="op2">==</span> <span class="num">3</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Wednesday"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">8</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">9</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Later Part of Week"</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Wednesday</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 03</span>
                                    <span class="badge">vowel vs consonant classification</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">char</span> <span class="op2">=</span> <span class="s">"e"</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">char</span> <span class="op2">==</span> <span class="s">"a"</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Vowel A identified"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">char</span> <span class="op2">==</span> <span class="s">"e"</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Vowel E identified"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="purple-bold">elif</span> <span class="var">char</span> <span class="op2">==</span> <span class="s">"i"</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">7</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Vowel I identified"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">8</span>
                                        <span><span class="purple-bold">else</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">9</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Character is a Consonant or alternative token"</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val" style="color: #00ffe7;">Vowel E identified</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Always remember: once a single condition block returns <span class="cyan-bold">True</span> inside an <code>elif</code> chain, Python immediately shortcuts past all subsequent conditional expressions. This optimizes engine speeds and cuts out redundant processing operations!
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

                                    <h4>Grade Threshold Validation</h4>

                                    <ul>
                                        <li><span>score</span> = 65</li>
                                        <li>Add logic paths for 90, 70, 50 limits</li>
                                        <li>Print custom message responses per level</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Weekend Vector Engine</h4>

                                    <ul>
                                        <li><span>day_index</span> = 6</li>
                                        <li>Map indices to text values using <span>elif</span></li>
                                        <li>Catch unmatched values via an <span>else</span> gate</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Alphanumeric Token Parser</h4>

                                    <ul>
                                        <li>Test character target variables</li>
                                        <li>Explicitly inspect vowel components inline</li>
                                        <li>Verify output changes based on inputs</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Elif Challenge</h4>

                            <div class="quiz-item">
                                <p>1. If a value satisfies multiple conditions inside an elif ladder, which one executes?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="First, Second, or Last match?">
                            </div>

                            <div class="quiz-item">
                                <p>2. What is the execution result of evaluating a ladder where all if and elif gates are False?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Which block executes?">
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
                    ans: "first"
                },
                {
                    id: 'q2',
                    ans: "else"
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
                    "✔ ACCESS GRANTED — Elif branching hierarchies verified successfully ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Invalid sequential logic matching response parameters.";

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