<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
<link rel="stylesheet" href="style.css?v=1.1">
</head>
<body>
<?php include 'includes/header.php'; ?>
  <section class="main">

<section class="contact-section" id="login">
  <div class="contact-container">
    <div class="contact-text">
      <h2>👋 Login to Continue</h2>
      <p>Please enter your details to access the exams and questions.</p>
    </div>
    <form class="contact-form" action="login_process.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="text" name="phone" placeholder="Your Phone Number" required />
      <button type="submit">Login</button>
    </form>
  </div>
</section>
</section>

<script>
window.addEventListener('scroll', () => {
  const form = document.querySelector('.contact-form');
  const formTop = form.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (formTop < windowHeight - 100 && formTop > 0) {
    form.classList.add('reveal');
  } else {
    form.classList.remove('reveal');
  }
});


</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>
