<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Walrus Operator</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Cyber-neon branding alignments */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }
        
        /* Mascot container layouts */
        .mascot-container {
            display: flex;
            align-items: center;
            background: rgba(255, 45, 120, 0.07);
            border: 1px dashed #ff2d78;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
        .walrus-mascot {
            font-size: 2.5rem;
            margin-right: 15px;
            user-select: none;
        }
        .chat-bubble {
            color: #ffffff;
            font-size: 0.95rem;
            line-height: 1.5;
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
                            walrus_operator.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> The Walrus Operator <span class="cyan-bold">(:=)</span>
                        </h1>

                        <div class="py-banner">
                            Introduced in Python 3.8, the <b>Assignment Expression</b> operator—affectionately known as the 
                            <b>Walrus Operator</b>—allows you to assign values to a variable <i>inside</i> an expression where variables usually aren't allowed.
                        </div>

                        <div class="mascot-container">
                            <div class="walrus-mascot">🦭</div>
                            <div class="chat-bubble">
                                "🚨 <strong>WHY AM I CALLED A WALRUS?</strong> 💅 <br>
                                Turn your head sideways and look closely at my face: <code>:=</code> <br>
                                The colon <code>:</code> represents my big, staring eyes, and the equals sign <code>=</code> is my majestic, heavy-duty mustache tusks! <br>
                                I'm here to compress your sloppy code lines into a single, high-efficiency workout set! Let's get lean! ✨💪"
                            </div>
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    an inline operator that assigns a value and returns it immediately
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    prevents double computation, eliminates redundant boilerplate code lines
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    inside `while` condition loops, `if-elif` validations, and data array filtering
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">variable := expression</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live code engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">BEFORE</span>
                                    <span class="badge" style="background: #444;">the boring old way</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">text_len</span> <span class="op2">=</span> <span class="fn">len</span>(<span class="s">"Cyber_System_Overdrive"</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="purple-bold">if</span> <span class="var">text_len</span> <span class="op2">&gt;</span> <span class="num">10</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Too long:"</span>, <span class="var">text_len</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">Too long: 22</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">AFTER</span>
                                    <span class="badge">the walrus optimization</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="purple-bold">if</span> (<span class="var">n</span> <span class="pink-bold">:=</span> <span class="fn">len</span>(<span class="s">"Cyber_System_Overdrive"</span>)) <span class="op2">&gt;</span> <span class="num">10</span>:</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fn">print</span>(<span class="s">"Too long:"</span>, <span class="var">n</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">Too long: 22</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Notice the parentheses around the walrus expression: <code>(n := len(...))</code>. Because the regular comparison operators (like <code>&gt;</code>) have higher operator precedence than the walrus operator, omitting the parentheses would cause Python to evaluate <code>len(...) &gt; 10</code> first, saving a boolean <span class="cyan-bold">True</span> or <span class="pink-bold">False</span> directly into <code>n</code>! Always wrap your walrus assignments in safety brackets!
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

                                    <h4>Inline Data Stream</h4>

                                    <ul>
                                        <li>Create an <span>if</span> block checking item counts</li>
                                        <li>Use <span class="pink-bold">:=</span> to save array length into variable <span>c</span></li>
                                        <li>Print <span>c</span> inside the block condition</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Precedence Fixer</h4>

                                    <ul>
                                        <li>Fix this broken code structure:</li>
                                        <li><code>if status := True == True: print(status)</code></li>
                                        <li>Isolate assignment using wrapping braces</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Console Input Trap</h4>

                                    <ul>
                                        <li>Simulate testing a username string check</li>
                                        <li>Assign user value inline using a walrus expression</li>
                                        <li>Verify length is larger than zero</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Walrus Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Type out the literal characters that form the Walrus Operator symbol:</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type symbol...">
                            </div>

                            <div class="quiz-item">
                                <p>2. What version of Python officially unleashed the walrus onto your codebase scripts?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="Type version code (e.g. 3.X)...">
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
                    ans: ":="
                },
                {
                    id: 'q2',
                    ans: "3.8"
                }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim();

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
                    "✔ ACCESS GRANTED — Tusk compilation metrics completely optimized ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Missing mustache tusks or mismatched version protocols.";

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