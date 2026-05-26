<?php
include 'questions.php';

$subject = $_GET['subject'] ?? 'c';
$current_questions = $questions[$subject] ?? [];
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$score = 0;

if ($submitted) {
    $user_answers = $_POST['answers'] ?? [];
    foreach ($current_questions as $index => $q) {
        if (isset($user_answers[$index]) && $user_answers[$index] == $q['answer']) {
            $score++;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Exam Results - <?php echo strtoupper($subject); ?></title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>
<div class="exam-background"></div>
    <section class="result-section">
        <div class="result-container">
            <h2>Exam Results - <?php echo strtoupper($subject); ?></h2>

            <?php if ($submitted): ?>
                <div class="score-box">
                    <p class="score">You scored <span><?php echo $score . " / " . count($current_questions); ?></span></p>
                    <p class="message">🎉 Congratulations!</p>
                </div>
                <a href="exams.php" class="retry-btn">Take Another Exam</a>
            <?php else: ?>
                <div class="error-message">
                    <p>No exam submitted yet. Please go back and submit your exam.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>
