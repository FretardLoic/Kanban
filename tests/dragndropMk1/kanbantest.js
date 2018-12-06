function dragTask(ev) {
  ev.dataTransfer.setData('text/html', ev.currentTarget.cloneNode(true).outerHTML);
  var tmp = ev.currentTarget.cloneNode(true);
  ev.dataTransfer.setDragImage(tmp, 0, 0);
  ev.currentTarget.classList.add('dragged');
  console.log(tmp);
  ev.dataTransfer.effectAllowed='move';
  ev.dataTransfer.dropEffect='move';
}

function dropTask(ev) {
  ev.preventDefault();    // drop interdit par défaut
  ev.stopPropagation();   // évite le double drop
  var data = ev.dataTransfer.getData('text/html');
  switch (ev.currentTarget.className) {
    case 'column':
      ev.currentTarget.insertAdjacentHTML('beforeend', data);
      removeDragged();
      break;
    case 'task':
      ev.currentTarget.insertAdjacentHTML('beforebegin', data);
      removeDragged();
      break;
    default:
      cancelDrag();
  }
}

function allowDrop(ev) {
  ev.preventDefault();    // drop interdit par défaut
}

function removeDragged() {
  var oldTasks = document.getElementsByClassName('dragged');
  for (var k = 0; k < oldTasks.length; ++k) {
    oldTasks[k].remove();
  }
}

function cancelDrag() {
  var oldTasks = document.getElementsByClassName('dragged');
  for (var k = 0; k < oldTasks.length; ++k) {
    oldTasks[k].classList.remove('dragged');
  }
}
