// ----------Exercise 1.---------- //


// Declares arrow function with one argument, that outputs a string with the argument
let greet = name => "Hey " + name + "!"

//Calls function twice with different arguments
console.log(greet("Hagrid"));
console.log(greet("Luna"));


// ----------Exercise 2.---------- //


// Declares arrow function with one argument
let isEven = num => num%2 === 0;


// ----------Exercise 3.---------- //


// Declares arrow function with one argument, less shorthand as the function spans over multiple lines
let counterFunc = counter => {
    if (counter > 100) {
      counter = 0;
    } else {
      counter++;
    }
    
    return counter;
  }


// ----------Exercise 4.---------- //


// Declares arrow function with two arguments
let nameAge = (name, age) => {
    console.log("Hello " + name);
    console.log("You are " + age + " years old");
  }

// Calls function, using two arguments
nameAge("Jamie", 25);


// ----------Exercise 5.---------- //


// Declares arrow function, which has no predefined arguments
let printOnly = () => console.log("printing");


// ----------Exercise 6.---------- //


// Declares arrow function with two arguments
let sum = (num1, num2) => console.log(num1 + num2)

// Calls functions with two arguments
sum(73, -32);