<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SQL Game — Level 3</title>
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

  body::after {
    content: '';
    position: fixed;
    inset: 0;
    background: repeating-linear-gradient(to bottom, transparent 0px, transparent 3px, rgba(0,0,0,0.08) 3px, rgba(0,0,0,0.08) 4px);
    pointer-events: none;
    z-index: 999;
  }

  #game { max-width: 860px; margin: 0 auto; padding: 40px 24px 80px; }
  .hud { display: flex; align-items: center; justify-content: space-between; margin-bottom: 36px; padding-bottom: 16px; border-bottom: 1px solid var(--border); }
  .level-badge { font-family: 'Orbitron', sans-serif; font-size: 11px; letter-spacing: 3px; color: var(--pink); background: rgba(255,45,120,0.1); border: 1px solid rgba(255,45,120,0.3); padding: 6px 14px; border-radius: 2px; }
  .mission-title { font-family: 'Orbitron', sans-serif; font-size: 10px; letter-spacing: 2px; color: rgba(0,255,231,0.45); }
  
  .mission { background: var(--panel); border: 1px solid var(--border); border-left: 3px solid var(--cyan); padding: 20px 24px; margin-bottom: 28px; border-radius: 2px; }
  .mission h2 { font-family: 'Orbitron', sans-serif; font-size: 13px; letter-spacing: 2px; color: var(--gold); margin-bottom: 10px; }
  .mission p { font-size: 13px; color: rgba(0,255,231,0.75); line-height: 1.7; }

  .table-wrap { margin-bottom: 28px; overflow-x: auto; }
  .data-label { font-size: 10px; letter-spacing: 2px; color: rgba(0,255,231,0.4); margin-bottom: 8px; }
  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  th { background: rgba(0,255,231,0.07); color: var(--cyan); padding: 10px 16px; text-align: left; border: 1px solid var(--border); }
  td { padding: 9px 16px; border: 1px solid var(--border); color: rgba(0,255,231,0.8); }

  #query { width: 100%; height: 110px; background: #050c1a; color: var(--cyan); border: 1px solid var(--border); padding: 16px; font-family: 'Share Tech Mono', monospace; font-size: 14px; outline: none; caret-color: var(--pink); }
  #query:focus { border-color: rgba(0,255,231,0.6); box-shadow: var(--glow); }

  .btn-row { display: flex; gap: 12px; margin: 14px 0 24px; }
  .btn { padding: 10px 24px; cursor: pointer; border: 1px solid; border-radius: 2px; font-family: inherit; transition: 0.1s; }
  .btn-run { background: var(--cyan); color: var(--bg); font-weight: 700; border-color: var(--cyan); }
  .btn-hint { background: transparent; color: var(--gold); border-color: rgba(255,216,77,0.4); }
  .btn:active { transform: scale(0.96); }

  #feedback { font-family: 'Orbitron', sans-serif; font-size: 12px; min-height: 24px; letter-spacing: 1px; }
  .feedback-ok { color: #00ffcc; text-shadow: 0 0 12px #00ffcc; }
  .feedback-err { color: var(--pink); }

  #overlay { position: fixed; inset: 0; background: rgba(6,13,26,0.92); display: none; align-items: center; justify-content: center; z-index: 200; overflow: hidden; }
  .popup { background: #0c1528; border: 1px solid rgba(0,255,231,0.35); border-top: 3px solid var(--cyan); padding: 40px 52px; text-align: center; animation: popIn 0.4s cubic-bezier(0.34,1.56,0.64,1) both; }
  @keyframes popIn { from { transform: scale(0.7); opacity: 0; } to { transform: scale(1); opacity: 1; } }

  /* ON-CLICK BURST ONLY */
  .burst { position: fixed; font-size: 18px; pointer-events: none; z-index: 998; animation: burst 0.9s ease-out forwards; }
  @keyframes burst { to { transform: translate(var(--bx), var(--by)) scale(0.3); opacity: 0; } }
</style>
</head>
<body>

<div id="game">
  <div class="hud">
    <div class="level-badge">LEVEL 03</div>
    <div class="mission-title">// PATTERN RECOGNITION //</div>
  </div>

  <div class="mission">
    <h2>📡 MISSION BRIEFING</h2>
    <p>Target identification required. Fetch all records from <code>customers</code> where the <code>name</code> starts with the letter <strong>'P'</strong>. Use the <code>LIKE</code> operator with the <code>%</code> wildcard.</p>
  </div>

  <div class="table-wrap">
    <div class="data-label">// ENCRYPTED REGISTRY: customers</div>
    <table>
      <thead><tr><th>id</th><th>name</th><th>city</th></tr></thead>
      <tbody id="fullTableBody"></tbody>
    </table>
  </div>

  <div class="editor-label">// ENTER SQL QUERY</div>
  <textarea id="query" spellcheck="false" placeholder="SELECT * FROM customers WHERE ..."></textarea>

  <div class="btn-row">
    <button class="btn btn-run" onclick="runQuery(event)">▶ RUN</button>
    <button class="btn btn-hint" onclick="showHint()">💡 HINT</button>
  </div>

  <div class="table-wrap" id="output"></div>
  <div id="feedback"></div>
</div>

<div id="overlay">
  <div class="popup">
    <h2 style="color:var(--cyan); letter-spacing:4px; margin-bottom:8px;">✦ ACCESS GRANTED ✦</h2>
    <p style="color:rgba(0,255,231,0.5); font-size:12px; margin-bottom:28px;">LEVEL 03 COMPLETE - PATTERN MATCHED</p>
    <button class="btn btn-run" onclick="nextLevel()">PROCEED →</button>
  </div>
</div>

<script>
let db;
const rawData = [
  [101, 'Priya', 'Delhi'],
  [102, 'Rahul', 'Mumbai'],
  [103, 'Prateek', 'Pune'],
  [104, 'Aman', 'Bangalore'],
  [105, 'Pooja', 'Mumbai'],
  [106, 'Sanya', 'Chennai'],
  [107, 'Vikram', 'Delhi'],
  [108, 'Parth', 'Kolkata']
];

initSqlJs({ locateFile: f => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/${f}` })
  .then(SQL => {
    db = new SQL.Database();
    db.run("CREATE TABLE customers (id INT, name TEXT, city TEXT);");
    rawData.forEach(row => db.run("INSERT INTO customers VALUES (?,?,?)", row));
    renderSchema();
  });

function renderSchema() {
  const tbody = document.getElementById('fullTableBody');
  rawData.forEach(row => {
    const tr = `<tr>${row.map(cell => `<td>${cell}</td>`).join('')}</tr>`;
    tbody.innerHTML += tr;
  });
}

function runQuery(e) {
  sprayBurst(e.clientX, e.clientY);
  const queryText = document.getElementById('query').value.trim();
  const output = document.getElementById('output');
  const feedback = document.getElementById('feedback');

  try {
    const result = db.exec(queryText);
    const correctResult = db.exec("SELECT * FROM customers WHERE name LIKE 'P%'");

    if (result.length) {
      output.innerHTML = buildTable(result[0]);
    } else {
      output.innerHTML = '<p style="color:rgba(0,255,231,0.4);">No records found.</p>';
    }

    if (JSON.stringify(result) === JSON.stringify(correctResult)) {
      feedback.textContent = '✅ PATTERN MATCHED — DATA EXTRACTED';
      feedback.className = 'feedback-ok';
      setTimeout(() => { document.getElementById('overlay').style.display = 'flex'; }, 800);
    } else {
      feedback.textContent = '✗ INCORRECT — USE LIKE "P%"';
      feedback.className = 'feedback-err';
    }
  } catch (err) {
    feedback.textContent = '✗ ERROR: ' + err.message;
    feedback.className = 'feedback-err';
  }
}

function buildTable(res) {
  let html = '<div class="data-label">// QUERY OUTPUT</div><table><thead><tr>';
  res.columns.forEach(c => html += `<th>${c}</th>`);
  html += '</tr></thead><tbody>';
  res.values.forEach(row => {
    html += '<tr>' + row.map(v => `<td>${v}</td>`).join('') + '</tr>';
  });
  return html + '</tbody></table>';
}

function sprayBurst(x, y) {
  const emojis = ['✨', '💎', '💠'];
  for (let i = 0; i < 8; i++) {
    const el = document.createElement('div');
    el.className = 'burst';
    el.textContent = emojis[Math.floor(Math.random() * emojis.length)];
    el.style.left = x + 'px'; el.style.top = y + 'px';
    el.style.setProperty('--bx', (Math.random() * 160 - 80) + 'px');
    el.style.setProperty('--by', (Math.random() * 160 - 80) + 'px');
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 900);
  }
}

function showHint() {
  const fb = document.getElementById('feedback');
  fb.textContent = "💡 HINT: WHERE name LIKE 'P%'";
  fb.style.color = 'var(--gold)';
}

function nextLevel() {
  document.body.style.transition = "opacity 0.4s";
  document.body.style.opacity = "0";
  setTimeout(() => {
    window.location.href = "sql_game4.php"; 
  }, 400);
}
</script>
</body>
</html>