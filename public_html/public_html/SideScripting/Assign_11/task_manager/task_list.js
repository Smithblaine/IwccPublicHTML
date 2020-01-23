"use strict";
var $ = function(id) { return document.getElementById(id); };

var addToTaskList = function() { 
    var taskTextbox = $("task");
    var newTask = new Task(taskTextbox.value);
    if (newTask.isValid()) {
        tasklist.add(newTask);
        tasklist.save();
        tasklist.display();
        taskTextbox.value = "";        
    } else {
        alert("Please enter a task.");
    }
    taskTextbox.focus();
};

var clearTaskList = function() {
    tasklist.clear();
    $("task").focus();
};

var deleteFromTaskList = function() {
    tasklist.delete(this.title); // 'this' = clicked link
    tasklist.save();
    tasklist.display();   
    $("task").focus();
};
var editTaskList = function() {
    var editedTask = prompt("Please enter a new task:  ", tasklist.tasks[this.title]);
    var replacedTask = new Task(editedTask);
    if(replacedTask.isValid())
    {
        tasklist.edit(this.title, replacedTask).save();
        tasklist.display();
        $("task").focus();
    }
    else
    {
        alert("Enter a valid task");
    }
    
};

window.onload = function() {
    $("add_task").onclick = addToTaskList;
    $("clear_tasks").onclick = clearTaskList;   
    
    tasklist.displayDiv = $("tasks");
    tasklist.deleteClickHandler = deleteFromTaskList;
    tasklist.editClickHandler = editTaskList;

    tasklist.load();
    tasklist.display();
    
    $("task").focus();
};