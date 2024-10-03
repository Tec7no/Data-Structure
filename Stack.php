<?php

class Car {
    private $cars = array(); // Initialize array
    private $top = -1;       // Initialize top

    // Function to push an element to the stack
    public function push($x) {
        $this->top++;
        $this->cars[$this->top] = $x;
    }
    
    // Function to remove the top element from the stack
    public function pop() {
        if ($this->top < 0) {
            echo "Stack is empty.<br>";
        } else {
            unset($this->cars[$this->top]);
            $this->top--;
        }
    }
    
    // Function to peek at the top element of the stack
    public function peek() {
        if ($this->top < 0) {
            echo "Stack is empty.<br>";
        } else {
            echo "Top: " . $this->top . "<br>";
            echo "Array: " . $this->cars[$this->top] . "<br>"; 
        }
    }
    
    // Function to display the contents of the stack
    public function display() {
        echo "<pre>" . print_r($this->cars, true) . "</pre>";
    }
}
?>

