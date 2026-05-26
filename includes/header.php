<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Particles container -->
<div id="particles-js"></div>
<link rel="stylesheet" href="style.css">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EQ6YBRP1J8"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-EQ6YBRP1J8');
</script>
<link rel="shortcut icon" href="img/favicol.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<header class="header">
    <div class="flex">
        <a href="index.php" class="logo"><img src="img/priy_removebg.png" alt="" height="40px"></a>
        <?php if ($currentPage != 'index.php') : ?>
            <div class="hamburger">&#9776;</div>
        <?php endif; ?>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="c.php">C</a>
            <a href="sql_intro.php">SQL</a>
            <a href="py_intro.php">Python</a>
            <!-- <a href="">C++</a>
            <a href="">Java</a>
            <a href="">PHP</a>
            <a href="">.NET</a>
            <a href="">C#</a> -->
        </nav>

        <!-- Dark Mode Toggle (Moon & Sun Icons) -->
        <span id="light-mode-toggle" class="light-mode-toggle"></span>
<div id="audioToggle" title="Ambient sound">
  🌌
</div>

<audio id="spaceAudio" loop>
  <source src="audio/space.mp3" type="audio/mpeg">
</audio>


    </div>
</header>
<!-- Particles.js Script -->

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    particlesJS.load('particles-js', 'particles.json', function() {
        console.log('Particles.js loaded.');
    });

const audio = document.getElementById("spaceAudio");
const toggle = document.getElementById("audioToggle");

let enabled = localStorage.getItem("spaceAudio") === "on";

function playAudio() {
  audio.volume = 0.15;
  audio.play().then(() => {
    toggle.classList.add("active");
    localStorage.setItem("spaceAudio", "on");
    enabled = true;
  }).catch(() => {
    // blocked until user clicks
  });
}

toggle.addEventListener("click", () => {
  if (!enabled) {
    playAudio();
  } else {
    audio.pause();
    toggle.classList.remove("active");
    localStorage.setItem("spaceAudio", "off");
    enabled = false;
  }
});

// auto-start for returning users
window.addEventListener("load", () => {
  if (enabled) {
    playAudio();
  }
});

</script>
<script src="script.js"></script>