<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SQL Game — Level 1</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/sql-wasm.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Orbitron:wght@400;700&display=swap');

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --cyan:   #00ffe7;
    --pink:   #ff2d78;
    --gold:   #ffd84d;
    --bg:     #060d1a;
    --panel:  #0c1528;
    --border: rgba(0,255,231,0.25);
    --glow:   0 0 12px rgba(0,255,231,0.5);
  }

  body {
    background: var(--bg);
    color: var(--cyan);
    font-family: 'Share Tech Mono', monospace;
    min-height: 100vh;
    overflow-x: hidden;
  }

  /* ───── SCANLINE OVERLAY ───── */
  body::after {
    content: '';
    position: fixed;
    inset: 0;
    background: repeating-linear-gradient(
      to bottom,
      transparent 0px,
      transparent 3px,
      rgba(0,0,0,0.08) 3px,
      rgba(0,0,0,0.08) 4px
    );
    pointer-events: none;
    z-index: 999;
  }

  /* ───── FLOATING AMBIENT FLOWERS ───── */
  .ambient {
    position: fixed;
    font-size: 26px;
    opacity: 0.12;
    animation: sway 7s ease-in-out infinite;
    pointer-events: none;
  }
  .ambient:nth-child(1) { top: 12%; left: 6%;  animation-delay: 0s; }
  .ambient:nth-child(2) { top: 70%; left: 88%; animation-delay: 2.5s; }
  .ambient:nth-child(3) { top: 40%; left: 92%; animation-delay: 1.2s; }
  .ambient:nth-child(4) { top: 85%; left: 4%;  animation-delay: 3.8s; }
  @keyframes sway {
    0%,100% { transform: translateY(0) rotate(-5deg); }
    50%      { transform: translateY(-18px) rotate(5deg); }
  }

  /* ───── INTRO SCREEN ───── */
  #intro {
    position: fixed;
    inset: 0;
    background: var(--bg);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 24px;
    z-index: 50;
  }

  .logo {
    font-family: 'Orbitron', sans-serif;
    font-size: clamp(28px, 5vw, 52px);
    font-weight: 700;
    color: var(--cyan);
    letter-spacing: 6px;
    text-shadow: 0 0 30px var(--cyan);
  }

  .tagline {
    font-size: 13px;
    color: rgba(0,255,231,0.55);
    letter-spacing: 3px;
  }

  #typeText {
    font-size: 14px;
    color: rgba(0,255,231,0.7);
    max-width: 420px;
    text-align: center;
    min-height: 40px;
    line-height: 1.7;
  }

  #typeText::after {
    content: '▋';
    animation: blink 0.8s step-end infinite;
  }
  @keyframes blink { 50% { opacity: 0; } }

  .start-btn {
    margin-top: 12px;
    padding: 14px 40px;
    font-family: 'Orbitron', sans-serif;
    font-size: 13px;
    letter-spacing: 3px;
    color: var(--bg);
    background: var(--cyan);
    border: none;
    border-radius: 2px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: transform 0.15s;
  }
  .start-btn:hover { transform: scale(1.04); }
  .start-btn::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(255,255,255,0.15);
    transform: translateX(-100%);
    transition: transform 0.3s;
  }
  .start-btn:hover::before { transform: translateX(0); }

  /* ───── GAME AREA ───── */
  #game {
    display: none;
    max-width: 860px;
    margin: 0 auto;
    padding: 40px 24px 80px;
  }

  .hud {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 36px;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--border);
  }

  .level-badge {
    font-family: 'Orbitron', sans-serif;
    font-size: 11px;
    letter-spacing: 3px;
    color: var(--pink);
    background: rgba(255,45,120,0.1);
    border: 1px solid rgba(255,45,120,0.3);
    padding: 6px 14px;
    border-radius: 2px;
  }

  .mission-title {
    font-family: 'Orbitron', sans-serif;
    font-size: 10px;
    letter-spacing: 2px;
    color: rgba(0,255,231,0.45);
  }

  /* ───── MISSION CARD ───── */
  .mission {
    background: var(--panel);
    border: 1px solid var(--border);
    border-left: 3px solid var(--cyan);
    padding: 20px 24px;
    margin-bottom: 28px;
    border-radius: 2px;
  }

  .mission h2 {
    font-family: 'Orbitron', sans-serif;
    font-size: 13px;
    letter-spacing: 2px;
    color: var(--gold);
    margin-bottom: 10px;
  }

  .mission p {
    font-size: 13px;
    color: rgba(0,255,231,0.75);
    line-height: 1.7;
  }

  /* ───── TABLE ───── */
  .table-wrap {
    margin-bottom: 28px;
    overflow-x: auto;
  }

  .data-label {
    font-size: 10px;
    letter-spacing: 2px;
    color: rgba(0,255,231,0.4);
    margin-bottom: 8px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
  }

  th {
    background: rgba(0,255,231,0.07);
    color: var(--cyan);
    padding: 10px 16px;
    text-align: left;
    font-weight: 400;
    letter-spacing: 1px;
    border: 1px solid var(--border);
  }

  td {
    padding: 9px 16px;
    border: 1px solid var(--border);
    color: rgba(0,255,231,0.8);
  }

  tr:hover td { background: rgba(0,255,231,0.04); }

  /* ───── EDITOR ───── */
  .editor-label {
    font-size: 10px;
    letter-spacing: 2px;
    color: rgba(0,255,231,0.4);
    margin-bottom: 8px;
  }

  #query {
    width: 100%;
    height: 110px;
    background: #050c1a;
    color: var(--cyan);
    border: 1px solid var(--border);
    border-radius: 2px;
    padding: 16px;
    font-family: 'Share Tech Mono', monospace;
    font-size: 14px;
    resize: vertical;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
    caret-color: var(--pink);
  }
  #query:focus {
    border-color: rgba(0,255,231,0.6);
    box-shadow: var(--glow);
  }

  /* ───── BUTTONS ───── */
  .btn-row {
    display: flex;
    gap: 12px;
    margin-top: 14px;
    margin-bottom: 24px;
  }

  .btn {
    padding: 10px 24px;
    font-family: 'Share Tech Mono', monospace;
    font-size: 13px;
    border-radius: 2px;
    cursor: pointer;
    letter-spacing: 1px;
    transition: transform 0.12s, opacity 0.15s;
    border: 1px solid;
  }
  .btn:active { transform: scale(0.97); }

  .btn-run {
    background: var(--cyan);
    color: var(--bg);
    border-color: var(--cyan);
    font-weight: 700;
  }
  .btn-run:hover { opacity: 0.88; }

  .btn-hint {
    background: transparent;
    color: var(--gold);
    border-color: rgba(255,216,77,0.4);
  }
  .btn-hint:hover { background: rgba(255,216,77,0.08); }

  /* ───── OUTPUT / FEEDBACK ───── */
  #output {
    margin-bottom: 16px;
    overflow-x: auto;
  }

  #feedback {
    font-family: 'Orbitron', sans-serif;
    font-size: 12px;
    letter-spacing: 2px;
    min-height: 24px;
    transition: color 0.3s;
  }

  .feedback-ok  { color: #00ffcc; text-shadow: 0 0 12px #00ffcc; }
  .feedback-err { color: var(--pink); }

  /* ───── LEVEL COMPLETE OVERLAY ───── */
  #overlay {
    position: fixed;
    inset: 0;
    background: rgba(6,13,26,0.92);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 200;
    overflow: hidden;
  }

  .popup {
    background: #0c1528;
    border: 1px solid rgba(0,255,231,0.35);
    border-top: 3px solid var(--cyan);
    padding: 40px 52px;
    border-radius: 4px;
    text-align: center;
    position: relative;
    z-index: 201;
    box-shadow: 0 0 60px rgba(0,255,231,0.15);
    animation: popIn 0.4s cubic-bezier(0.34,1.56,0.64,1) both;
  }
  @keyframes popIn {
    from { transform: scale(0.7); opacity: 0; }
    to   { transform: scale(1);   opacity: 1; }
  }

  .popup h2 {
    font-family: 'Orbitron', sans-serif;
    font-size: 22px;
    color: var(--cyan);
    letter-spacing: 4px;
    margin-bottom: 8px;
  }

  .popup p {
    font-size: 12px;
    color: rgba(0,255,231,0.5);
    letter-spacing: 2px;
    margin-bottom: 28px;
  }

  .btn-next {
    padding: 12px 36px;
    font-family: 'Orbitron', sans-serif;
    font-size: 12px;
    letter-spacing: 3px;
    background: var(--cyan);
    color: var(--bg);
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-weight: 700;
    transition: opacity 0.15s, transform 0.12s;
  }
  .btn-next:hover  { opacity: 0.85; }
  .btn-next:active { transform: scale(0.97); }

  /* ───── FALLING FLOWERS ───── */
  .petal {
    position: absolute;
    top: -60px;
    pointer-events: none;
    animation: fallDown linear forwards;
    will-change: transform;
  }
  @keyframes fallDown {
    0%   { transform: translateY(0)     translateX(0)               rotate(0deg);   opacity: 1; }
    80%  { opacity: 1; }
    100% { transform: translateY(105vh) translateX(var(--drift))    rotate(var(--spin)); opacity: 0; }
  }

  /* ───── BURST ───── */
  .burst {
    position: fixed;
    font-size: 18px;
    pointer-events: none;
    z-index: 998;
    animation: burst 0.9s ease-out forwards;
  }
  @keyframes burst {
    to { transform: translate(var(--bx), var(--by)) scale(0.3); opacity: 0; }
  }
</style>
</head>
<body>

<!-- ambient decorations -->
<div class="ambient">🌸</div>
<div class="ambient">🌼</div>
<div class="ambient">🌻</div>
<div class="ambient">🌸</div>

<!-- ── INTRO ── -->
<div id="intro">
  <div class="logo">SQL_QUEST</div>
  <div class="tagline">// INFILTRATE THE DATABASE //</div>
  <p id="typeText"></p>
  <button class="start-btn" onclick="startGame()">▶ BEGIN MISSION</button>
</div>

<!-- ── GAME ── -->
<div id="game">
  <div class="hud">
    <div class="level-badge">LEVEL 01</div>
    <div class="mission-title">// DATABASE INFILTRATION //</div>
  </div>

  <div class="mission">
    <h2>📡 MISSION BRIEFING</h2>
    <p>The customer registry is locked. Extract <strong>all records</strong> from the <code>customers</code> table to proceed.</p>
  </div>

  <div class="table-wrap">
    <div class="data-label">// TABLE: customers</div>
    <table id="schemaTable">
      <thead><tr><th>id</th><th>name</th><th>city</th></tr></thead>
      <tbody>
        <tr><td>1</td><td>Rahul</td><td>Mumbai</td></tr>
        <tr><td>2</td><td>Priya</td><td>Delhi</td></tr>
        <tr><td>3</td><td>Aman</td><td>Pune</td></tr>
      </tbody>
    </table>
  </div>

  <div class="editor-label">// ENTER SQL QUERY</div>
  <textarea id="query" spellcheck="false" placeholder="SELECT ..."></textarea>

  <div class="btn-row">
    <button class="btn btn-run"  onclick="runQuery(event)">▶ RUN</button>
    <button class="btn btn-hint" onclick="showHint()">💡 HINT</button>
  </div>

  <div class="table-wrap" id="output"></div>
  <div id="feedback"></div>
</div>

<!-- ── LEVEL COMPLETE ── -->
<div id="overlay">
  <div class="popup">
    <h2>✦ ACCESS GRANTED ✦</h2>
    <p>LEVEL 01 COMPLETE</p>
    <button class="btn-next" onclick="nextLevel()">NEXT LEVEL →</button>
  </div>
</div>

<!-- sounds -->
<audio id="sndClick"   src="https://www.soundjay.com/buttons/sounds/button-16.mp3" preload="auto"></audio>
<audio id="sndSuccess" src="https://www.soundjay.com/buttons/sounds/button-4.mp3"  preload="auto"></audio>

<script>
/* ── DB SETUP ── */
let db;
initSqlJs({ locateFile: f => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/${f}` })
  .then(SQL => {
    db = new SQL.Database();
    db.run(`
      CREATE TABLE customers (id INT, name TEXT, city TEXT);
      INSERT INTO customers VALUES (1,'Rahul','Mumbai');
      INSERT INTO customers VALUES (2,'Priya','Delhi');
      INSERT INTO customers VALUES (3,'Aman','Pune');
    `);
  });

/* ── TYPEWRITER ── */
const introMessages = [
  "Connecting to remote server...",
  "Authentication bypass initiated...",
  "Target database located. Awaiting your query."
];
let msgIdx = 0, charIdx = 0;
function typeWriter() {
  const el = document.getElementById('typeText');
  const msg = introMessages[msgIdx];
  if (charIdx < msg.length) {
    el.textContent += msg[charIdx++];
    setTimeout(typeWriter, 38);
  } else if (msgIdx < introMessages.length - 1) {
    setTimeout(() => {
      el.textContent = '';
      charIdx = 0;
      msgIdx++;
      typeWriter();
    }, 900);
  }
}
window.addEventListener('load', typeWriter);

/* ── START ── */
function startGame() {
  playSound('sndClick');
  document.getElementById('intro').style.display = 'none';
  document.getElementById('game').style.display  = 'block';
}

/* ── RUN QUERY ── */
function runQuery(e) {
  playSound('sndClick');
  sprayBurst(e.clientX, e.clientY);

  const queryText = document.getElementById('query').value.trim();
  const output    = document.getElementById('output');
  const feedback  = document.getElementById('feedback');

  if (!db) { feedback.textContent = 'DB loading…'; return; }

  try {
    const result  = db.exec(queryText);
    const correct = db.exec('SELECT * FROM customers');

    if (result.length) {
      output.innerHTML = buildTable(result[0]);
    } else {
      output.innerHTML = '<p style="color:rgba(0,255,231,0.4);font-size:13px;">No rows returned.</p>';
    }

    if (JSON.stringify(result) === JSON.stringify(correct)) {
      feedback.textContent = '✅ ACCESS GRANTED — DATA EXTRACTED';
      feedback.className   = 'feedback-ok';
      playSound('sndSuccess');
      setTimeout(showComplete, 900);
    } else {
      feedback.textContent = '✗ INCORRECT — TRY AGAIN';
      feedback.className   = 'feedback-err';
    }
  } catch (err) {
    output.innerHTML     = '';
    feedback.textContent = '✗ SYNTAX ERROR: ' + err.message;
    feedback.className   = 'feedback-err';
  }
}

function buildTable(res) {
  let html = '<div class="data-label">// QUERY OUTPUT</div><table><thead><tr>';
  res.columns.forEach(c => html += `<th>${c}</th>`);
  html += '</tr></thead><tbody>';
  res.values.forEach(row => {
    html += '<tr>';
    row.forEach(v => html += `<td>${v}</td>`);
    html += '</tr>';
  });
  return html + '</tbody></table>';
}

/* ── SHOW COMPLETE ── */
function showComplete() {
  const overlay = document.getElementById('overlay');
  overlay.style.display = 'flex';
  launchPetals();
}

/* ── FALLING PETALS — fixed: each petal gets unique --drift ── */
function launchPetals() {
  const overlay = document.getElementById('overlay');

  // remove old petals
  overlay.querySelectorAll('.petal').forEach(p => p.remove());

  const emojis = ['🌸', '🌼', '🍂', '✨', '💫', '🌺'];

  for (let i = 0; i < 45; i++) {
    const el = document.createElement('div');
    el.className = 'petal';
    el.textContent = emojis[Math.floor(Math.random() * emojis.length)];

    const duration = 3.5 + Math.random() * 5;   // 3.5s – 8.5s
    const delay    = Math.random() * 3;           // stagger up to 3s
    const drift    = (Math.random() * 220 - 110) + 'px';  // -110px to +110px
    const spin     = (Math.random() * 720 - 360) + 'deg'; // random rotation

    el.style.left                = (Math.random() * 100) + 'vw';
    el.style.top                 = '-60px';
    el.style.fontSize            = (14 + Math.random() * 22) + 'px';
    el.style.animationDuration   = duration + 's';
    el.style.animationDelay      = delay + 's';
    el.style.setProperty('--drift', drift);
    el.style.setProperty('--spin',  spin);

    overlay.appendChild(el);

    // auto-clean after animation ends
    setTimeout(() => el.remove(), (duration + delay + 0.5) * 1000);
  }
}

/* ── BURST ON CLICK ── */
function sprayBurst(x, y) {
  const emojis = ['🌸', '🌼', '🍂'];
  for (let i = 0; i < 10; i++) {
    const el = document.createElement('div');
    el.className = 'burst';
    el.textContent = emojis[Math.floor(Math.random() * emojis.length)];
    el.style.left = x + 'px';
    el.style.top  = y + 'px';
    el.style.setProperty('--bx', (Math.random() * 180 - 90) + 'px');
    el.style.setProperty('--by', (Math.random() * 180 - 90) + 'px');
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 950);
  }
}

/* ── HINT ── */
function showHint() {
  playSound('sndClick');
  const fb = document.getElementById('feedback');
  fb.textContent  = '💡 HINT: SELECT * FROM customers';
  fb.className    = '';
  fb.style.color  = 'rgba(255,216,77,0.85)';
}

/* ── NEXT LEVEL ── */
function nextLevel() {
  playSound('sndClick');

  document.body.style.transition = "opacity 0.4s";
  document.body.style.opacity = "0";

  setTimeout(() => {
    window.location.href = "sql_game2.php";
  }, 400);
}

/* ── SOUND ── */
function playSound(id) {
  try {
    const s = document.getElementById(id);
    s.currentTime = 0;
    s.play().catch(() => {});
  } catch(e) {}
}
</script>
</body>
</html>