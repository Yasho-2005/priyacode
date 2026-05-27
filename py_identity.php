<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Identity Operators</title>

    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="py_style.css?v=1.2">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Neon accents for matching your terminal interface */
        .pink-bold { color: #ff2d78; font-weight: bold; }
        .cyan-bold { color: #00ffe7; font-weight: bold; }
        .purple-bold { color: #bd00ff; font-weight: bold; }
        
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
                            identity_operators.py — Python Tutorial
                        </span>

                    </div>

                    <div class="py-body">

                        <h1 class="page-heading">
                            <span>#</span> Python Identity Operators
                        </h1>

                        <div class="py-banner">
                            Identity operators compare the memory locations of two objects. 
                            They don't just check if two variables have the same value—they check if they are the <span class="cyan-bold">exact same object</span> in memory.
                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                what / why / where / how
                            </div>

                            <div class="py-what">

                                <div>
                                    <span class="k"># what:</span>
                                    operators that check if variables share the same memory location (ID)
                                </div>

                                <div>
                                    <span class="k"># why:</span>
                                    ensuring absolute object integrity, verifying `None` types, optimizing memory tracking
                                </div>

                                <div>
                                    <span class="k"># where:</span>
                                    state machine architecture, deep tracking references, caching mechanics
                                </div>

                                <div>
                                    <span class="k"># how:</span>
                                    <span class="s">is | is not</span>
                                </div>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                operator reference
                            </div>

                            <div class="table-scroll">

                                <table class="py-table">

                                    <thead>
                                        <tr>
                                            <th>Operator</th>
                                            <th>Description</th>
                                            <th>Condition for True</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="op">is</td>
                                            <td>Identity IS</td>
                                            <td>Returns True if variables point to the <span class="cyan-bold">same object</span></td>
                                            <td class="ex">x is y</td>
                                        </tr>

                                        <tr>
                                            <td class="op">is not</td>
                                            <td>Identity IS NOT</td>
                                            <td>Returns True if variables point to <span class="pink-bold">different objects</span></td>
                                            <td class="ex">x is not y</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <div class="py-section">

                            <div class="py-label">
                                live code engine simulations
                            </div>

                            <div class="repl" style="margin-bottom: 25px;">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 01</span>
                                    <span class="badge">identity vs equality</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">list_a</span> <span class="op2">=</span> [<span class="num">1</span>, <span class="num">2</span>, <span class="num">3</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">list_b</span> <span class="op2">=</span> [<span class="num">1</span>, <span class="num">2</span>, <span class="num">3</span>]</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">list_c</span> <span class="op2">=</span> <span class="var">list_a</span>  <span class="com"># Points to same object</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">list_a</span> <span class="op2">==</span> <span class="var">list_b</span>)  <span class="com"># Checks values</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">list_a</span> <span class="purple-bold">is</span> <span class="var">list_b</span>)   <span class="com"># Checks memory location</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">6</span>
                                        <span><span class="fn">print</span>(<span class="var">list_a</span> <span class="purple-bold">is</span> <span class="var">list_c</span>)   <span class="com"># Checks memory location</span></span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True<br>False<br>True</span>
                                </div>
                            </div>

                            <div class="repl">
                                <div class="repl-bar">
                                    <span class="ex-label">EXAMPLE 02</span>
                                    <span class="badge">checking empty system states</span>
                                </div>

                                <div class="repl-code">
                                    <div class="code-line">
                                        <span class="ln">1</span>
                                        <span><span class="var">api_response</span> <span class="op2">=</span> <span class="cyan-bold">None</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">2</span>
                                        <span><span class="var">is_empty</span> <span class="op2">=</span> <span class="var">api_response</span> <span class="purple-bold">is</span> <span class="cyan-bold">None</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">3</span>
                                        <span><span class="var">has_data</span> <span class="op2">=</span> <span class="var">api_response</span> <span class="purple-bold">is not</span> <span class="cyan-bold">None</span></span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">4</span>
                                        <span><span class="fn">print</span>(<span class="var">is_empty</span>)</span>
                                    </div>
                                    <div class="code-line">
                                        <span class="ln">5</span>
                                        <span><span class="fn">print</span>(<span class="var">has_data</span>)</span>
                                    </div>
                                </div>

                                <div class="output-bar">
                                    <span class="arrow">▶</span>
                                    <span class="val">True<br>False</span>
                                </div>
                            </div>

                        </div>

                        <div class="think-box">

                            <div class="think-label">
                                &gt;&gt;&gt; THINK
                            </div>

                            <p>
                                Think of identity this way: Twin brothers have identical features (<code class="cyan-bold">==</code> is True), but they are two distinct human beings living in separate bodies (<code class="pink-bold">is</code> is False). Python uses the built-in function <code>id(variable)</code> under the hood to fetch a variable's unique memory address tracking point!
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

                                    <h4>Data Pointer Verification</h4>

                                    <ul>
                                        <li><span>x</span> = [10, 20]</li>
                                        <li><span>y</span> = [10, 20]</li>
                                        <li>Evaluate if <span>x is y</span> and print it</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 02
                                    </div>

                                    <h4>Null Signal Monitor</h4>

                                    <ul>
                                        <li><span>log_stream</span> = None</li>
                                        <li>Check if log_stream <span class="pink-bold">is</span> None</li>
                                        <li>Verify memory matching mapping</li>
                                    </ul>

                                </div>

                                <div class="task-card">

                                    <div class="task-num">
                                        TASK 03
                                    </div>

                                    <h4>Alias Identification</h4>

                                    <ul>
                                        <li><span>original</span> = [5, 6]</li>
                                        <li><span>clone</span> = original</li>
                                        <li>Check if original <span class="pink-bold">is not</span> clone</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="mini-quiz-section">

                            <h4>🐍 Python Identity Challenge</h4>

                            <div class="quiz-item">
                                <p>1. Which identity operator evaluates to True if variables point to different objects?</p>

                                <input type="text"
                                    id="q1"
                                    placeholder="Type keyword operator...">
                            </div>

                            <div class="quiz-item">
                                <p>2. If a = [1] and b = [1], what does <b>a is b</b> evaluate to?</p>

                                <input type="text"
                                    id="q2"
                                    placeholder="True or False...">
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
                    ans: "is not"
                },
                {
                    id: 'q2',
                    ans: "False"
                }
            ];

            let allCorrect = true;
            const feedback = document.getElementById('quiz-feedback');

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                let val = input.value.trim();
                
                // Normalizing spatial spacing format for identity verification
                if(field.id === 'q1') {
                    val = val.replace(/\s+/g, ' ').toLowerCase();
                }
                
                // Keep standard True/False formatting capitalization pattern match
                if(field.id === 'q2') {
                    val = val.charAt(0).toUpperCase() + val.slice(1).toLowerCase();
                }

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
                    "✔ ACCESS GRANTED — Object memory references verified ⚡";
                return true;
            } else {
                event.preventDefault();
                feedback.style.color = "#ff4d4d";
                feedback.innerHTML =
                    "❌ ERROR: Memory registry address lookup failed.";

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