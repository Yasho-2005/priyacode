<?php
// Get subject from query
include 'questions.php';

$subject = $_GET['subject'] ?? 'c';
$current_questions = $questions[$subject] ?? [];
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$score = 0;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Start Exam - <?php echo strtoupper($subject); ?></title>
    <style>
        body {
    margin: 0;
    font-family: Arial;
}

.main {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 40px 20px;
    z-index: 1;
    position: relative;
}
.main h2{
    background: linear-gradient(to right, #1ebb1e, #1aff1a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}


        .question-box {
    width: 500px;
    max-width: 90%;
    padding: 30px;
    margin-bottom: 30px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
    color: white;
    font-size: 18px;
}

.question-box h4 {
    color: white;
    margin-bottom: 15px;
    font-size: 20px;
    font-weight: bold;
}
input[type="submit"] {
    padding: 12px 28px;
    font-size: 16px;
    background: #4CAF50;
    border: none;
    color: white;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

input[type="submit"]:hover {
    background: #45a049;
}


.result {
    font-size: 22px;
    font-weight: bold;
    color: #333;
    text-align: center;
}
#timer {
  position: sticky;
  margin-left: 700px;
  top: 10px;
  margin-bottom: 20px;
  text-align: center;
}

    </style>
<link rel="stylesheet" href="style.css?v=1.1">
    <script src="https://unpkg.com/lottie-web@5.7.4/build/player/lottie.min.js"></script>
    <script
  src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
  type="module"
></script>

</head>

<body>
    <div class="exam-background"></div>
    <dotlottie-player
  src="https://lottie.host/c413b404-cee0-4e22-8d33-a8f44f4c883a/w3jM0EJuU8.lottie"
  background="transparent"
  speed="1"
  style="width: 300px; height: 300px; margin-top: 30px;"
  loop
  autoplay
></dotlottie-player>
    <div id="lottie-right" class="lottie-side lottie-right"></div>
    <section class="main">
    <h2><?php echo strtoupper($subject); ?> Exam</h2>
    <div id="timer" style="font-size: 20px; font-weight: bold; color: red;"></div>

<form method="post" action="result.php">
    <?php foreach ($current_questions as $index => $q): ?>
        <div class="question-box">
            <h4>Q<?php echo $index + 1; ?>: <?php echo $q['question']; ?></h4>
            <?php foreach ($q['options'] as $optionIndex => $option): ?>
                <div>
                    <input type="radio" name="answers[<?php echo $index; ?>]" value="<?php echo $optionIndex + 1; ?>" required>
                    <?php echo $option; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <input type="submit" value="Submit Exam">
</form>
    </section>

    <script>
    lottie.loadAnimation({
        container: document.getElementById('lottie-right'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'https://assets5.lottiefiles.com/packages/lf20_qp1q7mct.json'
    });
    lottie.setSpeed(0.3);
</script>
<script>
  let totalSeconds = 15 * 60; // 15 minutes in seconds
  const timerDisplay = document.getElementById('timer');

  function updateTimer() {
    const minutes = Math.floor(totalSeconds / 60);
    const seconds = totalSeconds % 60;
    timerDisplay.textContent = `⏳ Time Left: ${minutes}:${seconds.toString().padStart(2, '0')}`;

    if (totalSeconds <= 0) {
      clearInterval(timerInterval);
      alert("⏰ Time's up! Submitting your exam.");
      document.querySelector("form").submit();
    }

    totalSeconds--;
  }

  updateTimer(); // Initial call
  const timerInterval = setInterval(updateTimer, 1000);
</script>




</body>

</html>