<!DOCTYPE html>
<html lang='fr'>
  <head>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' >
    <link rel='stylesheet' type='text/css' href='kanbantest.css' >
    <script type='application/javascript' src='kanbantest.js' ></script>
    <noscript>Cette application nécessite javascript</noscript>
    <title>Kanban</title>
  </head>
  <body>
    <div class='kanban'>
      <div class='column' id='todo'
        ondragover="allowDrop(event);"
        ondrop="dropTask(event);">
        <h1>To Do</h1>
      <?php
        foreach (array('plop', 'plip', 'plup', 'plap', 'plep') as $task) {
      ?>
        <div class='task' draggable='true'
          ondragstart="dragTask(event);"
          ondrop="dropTask(event);"
          ondragover="allowDrop(event);"
          ondragend="cancelDrag(event)" >
          <?php echo $task; ?>
        </div>
      <?php
        }
      ?>
      </div>
      <div class='column' id='done'
        ondragover="allowDrop(event);"
        ondrop="dropTask(event);" >
        <h1>Done</h1>

      </div>
    </div>
  </body>
</html>