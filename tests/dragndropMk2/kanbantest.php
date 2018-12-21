<!DOCTYPE html>
<html lang='fr'>
  <head>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' >
    <link rel='stylesheet' type='text/css' href='kanbantest.css' >
    <script type='application/javascript' src='kanbantest.js' ></script>
    <noscript>Cette application nécessite javascript</noscript>
    <title>Kanban</title>
  </head>
  <body onload='initListeners();' >
    <div class='kanban'>
      <div class='column' id='todo' >
        <h1>To Do</h1>
      <?php
        foreach (array('plop', 'plip', 'plup', 'plap', 'plep') as $task) {
      ?>
        <div class='task' draggable='true' >
          <?php echo $task; ?>
        </div>
      <?php
        }
      ?>
      </div>
      <div class='column' id='done' >
        <h1>Done</h1>

      </div>
    </div>
  </body>
</html>