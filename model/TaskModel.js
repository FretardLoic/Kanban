
function TaskModel(desciption, affectation, deadline) {
  this.desc = description;
  this.affect = affectation;
  this.deadline = deadline;
}

TaskModel.prototype.getDesc = function() {
  return this.desc;
}

TaskModel.prototype.getAffect = function() {
  return this.affect;
}

TaskModel.prototype.getDeadline = function() {
  return this.deadline;
}
