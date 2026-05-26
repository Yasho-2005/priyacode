// Function to get particles settings based on theme
function getParticlesConfig(isLightMode) {
    let isMobile = window.innerWidth <= 768;
    let color = isLightMode ? "#808080" : "#00e6e6"; // Gray for light mode, Cyan for dark mode

    return {
        particles: {
            number: {
                value: isMobile ? 30 : 80,
                density: { enable: true, value_area: 800 }
            },
            color: { value: color },
            shape: { type: "circle" },
            opacity: { value: 0.5, random: true },
            size: { value: isMobile ? 2 : 3, random: true },
            move: { enable: true, speed: isMobile ? 1 : 2, direction: "none", out_mode: "out" },
            line_linked: {
                enable: true,
                color: color // Change line color based on theme
            }
        }
    };
}

// function createDolphin() {
//     const dolphin = document.createElement('div');
//     dolphin.classList.add('swimming-dolphin', 'sparkle');
//     dolphin.innerHTML = '🐬';

//     // Randomize vertical position and speed
//     const randomTop = Math.floor(Math.random() * 80) + 10;
//     const randomDuration = Math.floor(Math.random() * 10) + 15;

//     dolphin.style.top = randomTop + "%";
//     dolphin.style.animationDuration = randomDuration + "s";

//     document.body.appendChild(dolphin);

//     // Remove dolphin after animation finishes to keep site fast
//     setTimeout(() => {
//         dolphin.remove();
//     }, randomDuration * 1000);
// }

// Create a new dolphin every 5 seconds
// setInterval(createDolphin, 5000);

// Function to load particles
function loadParticles(isLightMode) {
    let particlesContainer = document.getElementById("particles-js");
    if (particlesContainer) {
        particlesContainer.innerHTML = ""; // Remove old particles before adding new ones
    }
    particlesJS("particles-js", getParticlesConfig(isLightMode));
}

// Initialize particles on page load
document.addEventListener("DOMContentLoaded", function () {
    let isLightMode = localStorage.getItem("lightMode") === "enabled";
    loadParticles(isLightMode);

    const toggleIcon = document.getElementById("light-mode-toggle");
    const body = document.body;

    if (!toggleIcon) {
        console.error("Light mode toggle icon not found!");
        return;
    }

    if (isLightMode) {
        body.classList.add("light-mode");
        toggleIcon.innerHTML = "🌙";
    }

    toggleIcon.addEventListener("click", function () {
        let isNowLightMode = body.classList.toggle("light-mode");

        if (isNowLightMode) {
            localStorage.setItem("lightMode", "enabled");
            toggleIcon.innerHTML = "🌙";
        } else {
            localStorage.setItem("lightMode", "disabled");
            toggleIcon.innerHTML = "☀️";
        }

        // Reload particles with the correct color
        loadParticles(isNowLightMode);
    });

    function updateBackground() {
        body.style.background = body.classList.contains("light-mode")
            ? "linear-gradient(to right, #f8f9fa, #dbeafe)"  // Light mode gradient
            : "linear-gradient(to right, #1a1a2e, #16213e)"; // Dark mode gradient
    }

    updateBackground();
    toggleIcon.addEventListener("click", updateBackground);
});


// Thank you fading out

document.addEventListener("DOMContentLoaded", () => {
    const successMsg = document.querySelector('.success-msg');
    if (successMsg) {
        setTimeout(() => {
            successMsg.classList.add('fade-out');
        }, 3000); // Fade out after 3 seconds
    }
});

//   document.addEventListener("DOMContentLoaded", function () {
//     const hamburger = document.querySelector(".hamburger");
//     const sidebar = document.querySelector(".sidebar");
//     const content = document.querySelector(".content");

//     hamburger.addEventListener("click", function () {
//         sidebar.classList.toggle("show"); // Toggle sidebar visibility

//         if (window.innerWidth < 700) {
//             window.scrollTo({ top: 0, behavior: "smooth" }); // 🟡 Scroll to top when sidebar opens
//         }
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const sidebars = document.querySelectorAll(".sidebar, .sql_sidebar"); // catch both
    const content = document.querySelector(".content");

    hamburger.addEventListener("click", function () {
        sidebars.forEach(sidebar => {
            sidebar.classList.toggle("show");
        });

        if (window.innerWidth < 700) {
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
    });
});


document.getElementById("hero-btn").addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector("#timeline").scrollIntoView({
        behavior: "smooth"
    });
});





document.addEventListener("DOMContentLoaded", () => {
    const audio = new Audio("img/bell.mp3");
    audio.loop = true;

    const btn = document.getElementById("soundBtn");
    if (btn) {
        btn.addEventListener("click", () => {
            audio.play().catch(err => console.error("Audio play failed:", err));
        });
    } else {
        console.error("soundBtn not found!");
    }
});



// function validateAndNext(event) {
//     // 1. Get user input
//     const ans1 = document.getElementById('q1').value.trim().toLowerCase();
//     const ans2 = document.getElementById('q2').value.trim().toLowerCase();
//     const feedback = document.getElementById('quiz-feedback');

//     // 2. Define correct answers
//     const correct1 = "select";
//     const correct2 = "database";

//     // 3. Validation Logic
//     if (ans1 === correct1 && ans2 === correct2) {
//         // Success: Allow the browser to follow the link
//         return true;
//     } else {
//         // Failure: Stop the link from working
//         event.preventDefault();

//         feedback.style.color = "#ff4d4d";
//         feedback.innerHTML = "❌ Wait! Please answer the quiz correctly to unlock the next topic.";

//         // Optional: Add a shake effect to the input fields
//         document.querySelector('.mini-quiz-section').classList.add('shake');
//         setTimeout(() => {
//             document.querySelector('.mini-quiz-section').classList.remove('shake');
//         }, 500);

//         return false;
//     }
// }

// // Keep your original checkAnswers for the manual button if you kept it
// function checkAnswers() {
//     const ans1 = document.getElementById('q1').value.trim().toLowerCase();
//     const ans2 = document.getElementById('q2').value.trim().toLowerCase();
//     const feedback = document.getElementById('quiz-feedback');

//     if (ans1 === "select" && ans2 === "database") {
//         feedback.style.color = "#4cc9f0";
//         feedback.innerHTML = "🐬 Splash! Correct! Click 'Next' to proceed.";
//     } else {
//         feedback.style.color = "#ff4d4d";
//         feedback.innerHTML = "❌ Not quite! Try again.";
//     }
// }
