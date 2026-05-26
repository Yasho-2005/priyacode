<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL DEFAULT Constraint</title>
    <link rel="stylesheet" href="style.css?v=1.1">
    <style>
        .assignment-box {
            width: 80%;
            margin: 25px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #48dbfb; /* Sky Blue for Default */
            border-radius: 12px;
            box-shadow: 0 0 10px #48dbfb;
            color: #fff;
            font-size: 18px;
            line-height: 28px;
            position: relative;
        }

        .assignment-box h3 {
            margin-top: 0;
            font-size: 22px;
            color: #48dbfb;
            text-shadow: 0 0 10px #48dbfb;
        }

        .assignment-box .task {
            color: #48dbfb;
            background: rgba(72, 219, 251, 0.1);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid rgba(72, 219, 251, 0.4);
            margin: 10px 0;
            font-size: 16px;
        }

        .syntax {
            font-family: 'Fira Code', monospace;
            background: #1a1f2a;
            padding: 12px 15px;
            border-left: 4px solid #48dbfb;
            border-radius: 6px;
            margin: 15px 0;
            color: #48dbfb;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <?php include 'includes/sql_navigation.php'; ?>
    <?php include 'includes/header.php'; ?>

    <section class="main">
        <?php include 'sql_sidebar.php'; ?>

        <div class="content">
            <h3>DEFAULT Constraint</h3>

            <div class="mascot-container">
                <div class="dolphin-mascot">🐬</div>
                <div class="chat-bubble">
                    "🛋️ <strong>DON'T STRESS, I GOT YOU!</strong> 💅 <br>
                    The <strong>DEFAULT</strong> constraint is like your database's auto-fill! <br>
                    If you forget to provide a value, I’ll just slide in a default one for you. <br>
                    It’s giving <em>prepared and professional</em> energy! ✨🌊"
                </div>
            </div>

            <p>
                The <b>DEFAULT</b> constraint is used to <b>set a default value</b> for a column.
                The default value will be added to all new records if no other value is specified.
            </p>

            <h4>Syntax</h4>
            <div class="syntax">
                CREATE TABLE table_name ( <br>
                &nbsp;&nbsp;column_name datatype DEFAULT 'default_value' <br>
                );
            </div>

            <h4>Example: Order Status</h4>
            <div class="syntax">
                CREATE TABLE orders ( <br>
                &nbsp;&nbsp;id INT PRIMARY KEY, <br>
                &nbsp;&nbsp;item_name VARCHAR(50), <br>
                &nbsp;&nbsp;status VARCHAR(20) DEFAULT 'Pending' <br>
                );
            </div>

            <p>✔ <b>Automatic Fill:</b> <code>INSERT INTO orders (id, item_name) VALUES (1, 'Laptop');</code> <br>
                Even though we didn't mention 'status', SQL will automatically set it to <b>'Pending'</b>.</p>

            <hr>

            <h4>Assignment 1</h4>
            <div class="assignment-box">
                <h3>The Global Citizen</h3>
                <p>Assume everyone is from India unless they tell you otherwise.</p>
                <div class="task">
                    ➤ Create a table <b>travelers</b> with fields:<br>
                    &nbsp;&nbsp;• tid (INT) PRIMARY KEY<br>
                    &nbsp;&nbsp;• name (VARCHAR(50))<br>
                    &nbsp;&nbsp;• country (VARCHAR(30)) <b>DEFAULT 'India'</b>
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Insert a traveler without providing a country and check if it auto-fills! 🌏
                </div>
            </div>

            <h4>Assignment 2</h4>
            <div class="assignment-box">
                <h3>E-Commerce Pricing</h3>
                <p>Set a default shipping cost for all new orders.</p>
                <div class="task">
                    ➤ Create a table <b>shipping_logs</b> with fields:<br>
                    &nbsp;&nbsp;• order_id (INT) PRIMARY KEY<br>
                    &nbsp;&nbsp;• delivery_fee (INT) <b>DEFAULT 50</b>
                </div>
                <div class="task">
                    ➤ <b>Practice:</b> Insert an order and let the Assistant handle the fee for you! 🛋️
                </div>
            </div>

            <div class="mini-quiz-section">
                <h4>✨ The Backup Challenge: Who's Got Your Back?</h4>

                <div class="quiz-item">
                    <p>1. Which keyword provides a value when none is specified during an INSERT?</p>
                    <input type="text" id="q1" placeholder="Type constraint...">
                </div>

                <div class="quiz-item">
                    <p>2. Can you still manually override a DEFAULT value during an INSERT? (Yes/No)</p>
                    <input type="text" id="q2" placeholder="Yes or No?">
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

            <?php include 'includes/exam.php'; ?>

        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
    <script>
    function validateAndNext(event) {
        const fields = [
            { id: 'q1', ans: "default" },
            { id: 'q2', ans: "yes" }
        ];

        let allCorrect = true;
        const feedback = document.getElementById('quiz-feedback');

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const val = input.value.trim().toLowerCase();

            if (val !== field.ans) {
                input.style.border = "3px solid #ff4d4d";
                allCorrect = false;
            } else {
                input.style.border = "2px solid #48dbfb";
            }
        });

        if (allCorrect) {
            feedback.style.color = "#48dbfb";
            feedback.innerHTML = "✔ SLAY! You’re prepared for anything. Proceeding...";
            return true; 
        } else {
            event.preventDefault(); 
            feedback.style.color = "#ff4d4d";
            feedback.innerHTML = "❌ WAIT! The backup plan failed! Fix the red borders.";
            
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