'use strict';

// utilisation des évènements "drag and drop" 

function dragTask(ev) {
  ev.dataTransfer.setData('dragged', 'tasks');
  ev.currentTarget.classList.add('dragged');
  ev.dataTransfer.effectAllowed='move';
  ev.dataTransfer.dropEffect='move';
}

function dropTask(ev) {
  ev.preventDefault();    // drop interdit par défaut
  ev.stopPropagation();   // évite le double drop

  if (ev.dataTransfer.getData('dragged') == 'tasks') {
    var tasks = document.getElementsByClassName('dragged task');
    switch (ev.currentTarget.className) {
      case 'column':
        for (var t = 0; t < tasks.length; ++t) {
          ev.currentTarget.insertAdjacentElement('beforeend', tasks[t]);
          tasks[t].classList.remove('dragged');
        }
        break;
      case 'task':
        for (var t = 0; t < tasks.length; ++t) {
          ev.currentTarget.insertAdjacentElement('beforebegin', tasks[t]);
          tasks[t].classList.remove('dragged');
        }
        break;
      default:
        cancelDrag();
    }
  } else {
    cancelDrag();
  }
}

function allowDrop(ev) {
  ev.preventDefault();    // drop interdit par défaut
}

function cancelDrag() {
  var oldTasks = document.getElementsByClassName('dragged');
  for (var k = 0; k < oldTasks.length; ++k) {
    oldTasks[k].classList.remove('dragged');
  }
}

function initListeners() {
  var cols = document.getElementsByClassName('column');
  for (var k = 0; k < cols.length; ++k) {
    cols[k].addEventListener('dragover', allowDrop);
    cols[k].addEventListener('drop', dropTask);
  }

  var tasks = document.getElementsByClassName('task');
  for (var k = 0; k < tasks.length; ++k) {
    tasks[k].addEventListener('dragover', allowDrop);
    tasks[k].addEventListener('drop', dropTask);
    tasks[k].addEventListener('dragstart', dragTask);
    tasks[k].addEventListener('dragend', cancelDrag);
  }
}
