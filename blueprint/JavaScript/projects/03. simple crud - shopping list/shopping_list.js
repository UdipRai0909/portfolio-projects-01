function closeInput() {
 document.getElementById('spoiler').style.display = 'none';
}

var app = new function () {
 this.el = document.getElementById('foodItems');             // Get Id of the tbody element

 this.foodItems = ['Potato', 'Tomato', 'Dragon Fruit', 'Spinach', 'Coriander', 'Chilly Flakes', 'Avacado', 'Mango', 'Blueberries', 'Cornflakes'];                      // My default list of food items

 // Counter for the number of food items
 this.count = function (data) {
  var el = document.getElementById('counter');
  var suffix_name = 'food item';

  if (data) {
   if (data > 1) {                                             // Plural Case
    suffix_name = 'food items';
   }
   el.innerHTML = data + ' ' + suffix_name;
  } else {                                                     // No data exists
   el.innerHTML = 'No ' + suffix_name;
  }
 };


 // Display all the items in the beginning
 this.fetchAll = function () {
  var data = '';
  if (this.foodItems.length > 0) {
   for (i = 0; i < this.foodItems.length; i++) {
    data += '<tr>'
    data += '<td>' + this.foodItems[i] + '</td>'
    data += '<td><button onclick="app.edit(' + i + ')">Edit</button></td>';
    data += '<td><button onclick="app.delete(' + i + ')">Delete</button></td>';
    data += '</tr>';
   }
  }
  this.count(this.foodItems.length);
  return this.el.innerHTML = data;
 };

 // Add an item to the list
 this.add = function () {
  var el = document.getElementById('add-item');
  var result = el.value;
  if (result) {
   this.foodItems.push(result.trim());                         // Add a new value to the array
   el.value = '';                                              // Reset input value 
   this.fetchAll();                                            // Display the new list
  }
 };

 // Edit the item on the list
 this.edit = function (i) {
  document.getElementById('spoiler').style.display = 'block';  // Show the edit form 
  var el = document.getElementById('edit-item');               // Get the id of the input box
  el.value = this.foodItems[i];                                // Fill the input box with the list value
  self = this;

  document.getElementById('saveEdit').onsubmit = function () { // Make form perform action with onsubmit
   var item = el.value;                                        // Get the value from the input box
   if (item) {
    self.foodItems.splice(i, 1, item.trim());                  // Edit value
    self.fetchAll();                                           // Display the new list 
    closeInput();                                              // Hide fields
   }
  }
 };

 // Delete the item on the list
 this.delete = function (i) {
  this.foodItems.splice(i, 1);                                 // Remove '1' item at index 'i'
  this.fetchAll();                                             // Display the new list
 }
};
app.fetchAll();


