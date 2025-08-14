<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>caculator</title>
</head>
<body>
<script>
    // Center the calculator container
 document.body.style.display = "flex";
 document.body.style.justifyContent = "center";
 document.body.style.alignItems = "center";
 document.body.style.height = "100vh";
 document.body.style.backgroundColor = "#1a1a1a"; 
 document.body.style.margin = "0";
 
 // Create calculator container
 const calculator = document.createElement("div");
 calculator.style.width = "200px";
 calculator.style.display = "grid";
 calculator.style.gridTemplateColumns = "repeat(4, 1fr)";
 calculator.style.gap = "10px";
 calculator.style.gridTemplateRows = "85px auto"; // Set rows for display and buttons
 document.body.appendChild(calculator);
 
 // Create display inside the calculator container
 const display = document.createElement("div");
 display.id = "display";
 display.style.gridColumn = "span 4"; // Make display span all columns
 display.style.height = "50px";
 display.style.fontSize = "24px";
 display.style.textAlign = "right";
 display.style.padding = "15px";
 display.style.backgroundColor = "#333";
 display.style.color = "gold";
 display.style.borderRadius = "8px";
 display.style.border = "1px solid #555";
 display.innerText = "0";
 calculator.appendChild(display);
 
 // Array of button labels
 const buttons = [
   "C", "DEL", "0", "+",
   "7", "8", "9", "x",
   "4", "5", "6", "-",
   "1", "2", "3", "/",
   "",  "",  "",  "="
 ];
 
 // Variables to keep track of input and operations
 let currentNumber = "";
 let previousNumber = "";
 let operation = null;
 let lastResult = null; // Store the last result for auto-repeat
 
 // Function to update the display
 function updateDisplay() {
   // Show full expression: previous number, operation, and current number
   if (previousNumber && operation) {
     display.innerText = `${previousNumber} ${operation} ${currentNumber}`;
   } else {
     display.innerText = currentNumber || "0";
   }
 }
 
 // Function to handle button clicks
 function handleButtonClick(value) {
   if (!isNaN(value)) {
     // If a number is clicked, add it to the current number
     currentNumber += value;
     updateDisplay(); // Call the updated display function
   } else if (value === "C") {
     // Clear button resets everything
     currentNumber = "";
     previousNumber = "";
     operation = null;
     lastResult = null; // Reset last result
     updateDisplay(); // Call the updated display function
   } else if (value === "DEL") {
     // Delete button removes the last digit
     currentNumber = currentNumber.slice(0, -1);
     updateDisplay(); // Call the updated display function
   } else if (value === "=") {
     // Equals button: evaluate the expression
     if (operation && previousNumber && currentNumber) {
       let result;
       const prev = parseFloat(previousNumber);
       const curr = parseFloat(currentNumber);
 
       switch (operation) {
         case "+":
           result = prev + curr;
           break;
         case "-":
           result = prev - curr;
           break;
         case "x":
           result = prev * curr;
           break;
         case "/":
           result = curr !== 0 ? prev / curr : "Error";
           break;
       }
 
       lastResult = result; 
       currentNumber = result.toString();
       previousNumber = ""; // Clear previous number for next operation
       operation = null; // Reset operation
       updateDisplay(); // Call the updated display function
     } else if (currentNumber === "" && lastResult !== null) {
       // If currentNumber is empty, use the last result for further calculations
       if (operation) { 
         // If there's an operation, apply it to the last result
         previousNumber = lastResult.toString();
         currentNumber = lastResult.toString(); // Set currentNumber to lastResult
         handleButtonClick("="); // Calculate with the last operation
       }
       updateDisplay(); // Call the updated display function
     }
   } else {
     // If an operation is clicked (+, -, x, /)
     if (currentNumber) {
       if (previousNumber && operation) {
         // If there's already a previous number and operation, calculate first
         handleButtonClick("="); // Calculate the current result
       }
       operation = value;
       previousNumber = currentNumber;
       currentNumber = ""; // Clear current number for next input
       updateDisplay(); // Call the updated display function
     }
   }
 }
 
 // Create buttons and add them to the calculator
 buttons.forEach((label) => {
   const button = document.createElement("button");
   button.innerText = label;
   button.style.padding = "15px";
   button.style.fontSize = "18px";
   button.style.cursor = "pointer";
   button.style.borderRadius = "5px";
   button.style.border = "none";
   button.style.color = "#fff";
   button.style.backgroundColor = label === "=" ? "gold" : "#333";
   button.style.fontWeight = label === "=" ? "bold" : "normal";
   
   button.onmouseover = () => {
     button.style.backgroundColor = label === "=" ? "#e6b800" : "#444";
   };
   button.onmouseout = () => {
     button.style.backgroundColor = label === "=" ? "gold" : "#333";
   };
 
   button.onclick = () => handleButtonClick(label);
   calculator.appendChild(button);
 });
                                                                                             
</script>
</body>
</html>