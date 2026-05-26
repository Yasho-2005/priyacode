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
