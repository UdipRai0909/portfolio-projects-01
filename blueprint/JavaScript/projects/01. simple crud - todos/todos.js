// DEFAULT TODO
const TODOS = [
 {
  title: 'Wake up early in the morning.',
  done: true
 },
 {
  title: 'Make a necessary list of the stuff you will be doing today.',
  done: true
 },
 {
  title: 'Take your meals and go to your office.',
  done: false
 },
 {
  title: 'Return back straight towards your home with some groceries.',
  done: true
 },
 {
  title: 'Prepare your dinner and enjoy your meal while watching YouTube.',
  done: false
 }
];

// Read todo
const displayTodo = () => {
 TODOS.forEach((item, index) => {
  var result = `${index + 1} . Todo : ${item.title} || DONE : ${item.done}`;
  return console.log(result);
 });
};
displayTodo();

// Create todo
const addTodo = (newTodo, done) => {
 TODOS.push({ title: newTodo, done: done });
 console.log("TODO added successfully!");
 displayTodo();
};
addTodo('Hit the gym', false);

// Update todo
const updateTodo = (prevTodo, newTodo) => {
 let updateIndex = TODOS.findIndex((todo) => {
  return todo.title === prevTodo
 });

 TODOS[updateIndex].title = newTodo;
 console.log('');
 console.log('TODO updated successfully!')
 displayTodo();
};
updateTodo('Wake up early in the morning.', 'Wake up at dawn.')

// Delete todo
const deleteTodo = (title) => {

 let deleteIndex = TODOS.findIndex((todo) => {
  return todo.title === title;
 });

 TODOS.splice(deleteIndex, 1);
 console.log('');
 console.log(`TODO "${title}" deleted successfully!`);
 displayTodo();
};
deleteTodo('Take your meals and go to your office.');

