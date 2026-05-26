<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C Features | PresentCode</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'includes/navigation.php'; ?>

  <?php include 'includes/header.php'; ?>
  <section class="main">
    <?php include 'sidebar.php' ?>

    <div class="content">
      <h3>Features of C</h3>
      <div style="text-align: center;">
  <img class="flowchart-img" src="img/cfeatures.png" alt="If-Else Flowchart" height="300px" width="500px">
</div>
      <p>
        <strong>Simple & Efficient:-</strong>   Easy to learn, with a clean syntax. <br>
        <strong>Fast & Powerful:-</strong> Provides direct memory access and low-level programming. <br>
        <strong>Portable:-</strong> Write once, compile anywhere with minimal changes. <br>
        <strong>Structured Programming:-</strong> Supports functions, loops, and conditionals for organized code. <br>
        <strong>Rich Library Support:-</strong> Standard libraries for input/output, math, string handling, etc. <br>
        <strong>Memory Management:-</strong> Uses pointers for direct memory manipulation. <br>
        <strong>Low-Level Programming Capabilities:-</strong> Can work with hardware directly. <br>
        <strong>Modularity:-</strong> Large programs can be split into functions/modules. <br>
        <strong>Dynamic Memory Allocation:-</strong> Supports <code>malloc()</code>, <code>calloc()</code>, <code>free()</code>, etc. <br>
        <strong>Extensible:-</strong> Can add features using libraries and custom functions. <br>
      </p>
      <div class="code-navigation">
        <?php if ($prev): ?>
          <a href="<?= $prev ?>" class="nav-btn">&laquo; Prev</a>
        <?php endif; ?>

        <?php if ($next): ?>
          <a href="<?= $next ?>" class="nav-btn">Next &raquo;</a>
        <?php endif; ?>
      </div>
      <?php include 'includes/exam.php'; ?>
    </div>
  </section>


  <?php include 'includes/footers.php'; ?>
  <script src="script.js"></script>

</body>

</html>