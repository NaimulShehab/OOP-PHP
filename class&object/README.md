# PHP Object-Oriented Programming (OOP) – Car Class Example

## Overview

This project is a simple example of Object-Oriented Programming (OOP) in PHP. It demonstrates how to create a class, define properties and methods, create objects, and use getter and setter methods to access and update data.

This example is designed for beginners who are learning the basics of PHP OOP.

## Features

* Create a PHP class named `Car`
* Define a public property (`name`)
* Create methods to get and set the car name
* Use the `$this` keyword to access the current object's properties
* Create multiple objects from the same class
* Show that each object has its own data

## Concepts Covered

### 1. Class

The `Car` class acts as a blueprint for creating car objects.

### 2. Properties

The class contains a public property called `name`, which stores the name of the car.

```php
public $name = "Car";
```

### 3. Methods

The class contains two methods:

* `getCarName()` – Returns the current car name.
* `setCarName($car_name)` – Updates the car name.

### 4. The `$this` Keyword

The `$this` keyword refers to the current object. It allows methods inside the class to access or modify the object's properties.

Example:

```php
$this->name = $car_name;
```

## How It Works

### First Object

A `Car` object named `$bmw` is created.

```php
$bmw = new Car();
```

The car name is changed directly:

```php
$bmw->name = "BMW";
```

Then the program prints the name using:

* Direct property access
* The `getCarName()` method

### Second Object

Another object named `$nissan` is created.

```php
$nissan = new Car();
```

Instead of changing the property directly, the setter method is used:

```php
$nissan->setCarName("Nissan Car");
```

Finally, the name is displayed using the getter method.

## Learning Outcomes

After studying this example, you will understand:

* What a class is
* What an object is
* How to create objects using the `new` keyword
* How properties store object data
* How methods perform actions
* How getter and setter methods work
* How the `$this` keyword works in PHP
* How different objects created from the same class can store different values

## Expected Output

```text
BMW
BMW
Nissan Car
```

> **Note:** Depending on how `echo` statements are written, the output may appear on the same line. You can add `<br>` or `PHP_EOL` to display each result on a new line.

## Requirements

* PHP 7.0 or later
* Any local server such as XAMPP, WAMP, Laragon, or PHP CLI

## Purpose

This project is intended for students and beginners who are learning PHP Object-Oriented Programming. It provides a simple and practical introduction to classes, objects, properties, methods, and the `$this` keyword before moving on to more advanced OOP concepts such as constructors, inheritance, interfaces, and polymorphism.

## Constructor in PHP — Simple Note

### What is a Constructor?

A **constructor** is a special method in a PHP class that is **automatically called when an object is created**.

In PHP, the constructor is written as:

```php
__construct()
```

It is mainly used to **initialize the properties of an object** when the object is created.

---

### Constructor in Your Code

```php
public function __construct($animal_name = "Human", $animal_species = "Homosepience"){
    $this->name = $animal_name;
    $this->species = $animal_species;
}
```

Here, `__construct()` receives two values:

* `$animal_name` → animal's name
* `$animal_species` → animal's species

Then it stores them in the object's properties:

```php
$this->name = $animal_name;
$this->species = $animal_species;
```

### Default Values

```php
$human = new Animal();
```

No values are provided, so the constructor uses the default values:

```text
name = Human
species = Homosepience
```

Output:

```text
Human
Homosepience
```

### Passing Values to Constructor

```php
$doyel_pakhi = new Animal(
    "Oriental magpie-robin",
    "Copsychus saularis"
);
```

Here, values are provided when creating the object.

So:

```text
name = Oriental magpie-robin
species = Copsychus saularis
```

Output:

```text
Oriental magpie-robin
Copsychus saularis
```

### Simple Example

```php
class Animal {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$animal = new Animal("Cat");

echo $animal->name;
```

Output:

```text
Cat
```

### Remember

**Constructor = Automatically runs when an object is created.**

```text
new Animal()
     ↓
__construct() runs automatically
     ↓
Properties are initialized
```

**Main purpose:** To give initial values to an object's properties.

## PHP Destructor — Simple Note

### What is a Destructor?

A **destructor** is a special method in PHP that is **automatically called when an object is destroyed** or when the PHP script finishes.

In PHP, a destructor is written as:

```php
__destruct()
```

### Why is Destructor Used?

A destructor is mainly used to **perform cleanup tasks**, such as:

* Closing a file
* Closing a database connection
* Releasing resources
* Performing some final actions before an object is removed

---

## Simple Example

```php
<?php

class Animal {

    public $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        echo "Animal object created.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Animal object destroyed.<br>";
    }
}

$animal = new Animal("Cat");

echo "Animal name: " . $animal->name . "<br>";

?>
```

### Output

```text
Animal object created.
Animal name: Cat
Animal object destroyed.
```

### How It Works

When this line runs:

```php
$animal = new Animal("Cat");
```

PHP creates an object and automatically calls:

```php
__construct()
```

So:

```text
Object created
      ↓
Constructor runs
```

When the object is no longer needed, PHP automatically calls:

```php
__destruct()
```

So:

```text
Object destroyed
      ↓
Destructor runs
```

---

## Constructor vs Destructor

| Constructor                               | Destructor                          |
| ----------------------------------------- | ----------------------------------- |
| `__construct()`                           | `__destruct()`                      |
| Runs when object is created               | Runs when object is destroyed       |
| Used to initialize properties             | Used for cleanup                    |
| Runs at the beginning of an object's life | Runs at the end of an object's life |

### Easy Way to Remember

**Constructor → Start**

**Destructor → Finish**

```php
class Animal {

    public function __construct() {
        // runs when object is created
    }

    public function __destruct() {
        // runs when object is destroyed
    }
}
```

**Important:** You normally don't call `__destruct()` yourself. PHP automatically calls it when the object is destroyed or when the script ends.


