// Get the values from the HTML
const form = document.getElementById("form");
const input = document.getElementById("input");
const todo = document.getElementById("todo");

// Create an array to store variables (JSON format here)
let todoList = [];

// prevent the form being submitted or redirecting to another page/link
form.addEventListener("submit", function (e) {
 e.preventDefault();
 addTodo();
});

// Add a todo item with this function
function addTodo() {
 const newTodo = input.value;
 if (!newTodo) return;

 // Add a new item to the array todoList
 todoList.push({
  text: newTodo,
  completed: false
 });

 // Store todoList array in a string variable (todos) in browser
 localStorage.setItem("todos", JSON.stringify(todoList));
 render();
}

// Call this main function everytime you add a todo item
function render() {

 // Clear the list or else you will stack your todo items
 todo.innerHTML = null;

 // Get the item from the initially stored variable in todos 
 const todos = localStorage.getItem("todos");

 // Convert the string to JSON object from the todoList array
 todoList = JSON.parse(todos) || [];

 for (let i = 0; i < todoList.length; i++) {

  // Create a new li item inside ul tag whose id=todo
  const item = document.createElement("li");

  // Create a checkbox to provide css/ make changes to the li item
  const checkbox = document.createElement("input");
  checkbox.type = "checkbox";

  // Create an on-click event for the checkbox
  checkbox.addEventListener("click", function (e) {
   todoList[i].completed = e.target.checked;

   // Make changes to the todos array variable
   localStorage.setItem("todos", JSON.stringify(todoList));

   // Check if the checkbox is ticked and apply css
   if (todoList[i].completed) {
    item.classList.add("completed");
    item.classList.remove("uncompleted");
    checkbox.checked = todoList[i].completed;
   } else {
    item.classList.add("uncompleted");
    item.classList.remove("completed");
    checkbox.checked = todoList[i].completed;
   }
  });

  // Create a new p tag inside the li element
  const text = document.createElement("p");

  // Fill the p tag with the text of todoList[i]
  text.innerText = todoList[i].text;

  // Create a new button to perform some action
  const button = document.createElement("button");

  // Make it like a 'Close' option in (for eg: a window/tab)
  button.innerText = "X";

  // Create an onclick event for the button 'X'
  button.addEventListener("click", function () {

   // Delete '1' item at index 'i' with the splice method in arrays
   todoList.splice(i, 1);

   // Make changes to your temporary storage variable when you delete
   localStorage.setItem("todos", JSON.stringify(todoList));
   render();
  });

  // Append the elements which you want to show in frontend
  item.appendChild(checkbox);
  item.appendChild(text);
  item.appendChild(button);
  todo.appendChild(item);

  // Reset the values after performing the operation
  input.value = null;
 }
}