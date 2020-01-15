// creates empty array (or stack in our case) //
var stack = [];

stack.push("Pancake 1");
document.write(stack);
document.write("<br>");

stack.push("Pancake 2");
document.write(stack);
document.write("<br>");

stack.push("Pancake 3");
document.write(stack);
document.write("<br>");

stack.push("Pancake 4");
document.write(stack);
document.write("<br>");

stack.pop();
document.write(stack);
document.write("<br>");

stack.pop();
document.write(stack);
document.write("<br>");

stack.pop();
document.write(stack);
document.write("<br>");

// Create a 'queue' //

var queue = [];

// add to 'end' of queue //

queue.push("Person 1");
document.write(queue);
document.write("<br>");

// add some other people too //

queue.push("Person 2");
document.write(queue);
document.write("<br>");

queue.push("Person 3");
document.write(queue);
document.write("<br>");

queue.shift("Person 1");
document.write(queue);
document.write("<br>");