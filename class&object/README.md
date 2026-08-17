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

# PHP Access Modifiers

**Access modifiers** are keywords used to control **where properties and methods of a class can be accessed**.

PHP has three main access modifiers:

1. `public`
2. `protected`
3. `private`

They can be used with both **properties** and **methods**.

---

## 1. `public`

A `public` property or method can be accessed **from anywhere**:

* Inside the class
* From a child class
* From outside the class

### Example with Property

```php
<?php

class Student {

    public $name = "Naimul";

}

$student = new Student();

echo $student->name;

?>
```

### Output

```text
Naimul
```

Because `$name` is `public`, we can directly access it from outside the class:

```php
$student->name;
```

### Example with Method

```php
<?php

class Student {

    public function getName() {
        return "Naimul";
    }

}

$student = new Student();

echo $student->getName();

?>
```

The `getName()` method is public, so it can be called from outside the class.

---

# 2. `protected`

A `protected` property or method can be accessed:

* Inside the same class
* Inside child classes

But **it cannot be accessed directly from outside the class**.

### Example with Property

```php
<?php

class Student {

    protected $name = "Naimul";

    public function getName() {
        return $this->name;
    }
}

$student = new Student();

echo $student->getName();

?>
```

### Output

```text
Naimul
```

Here:

```php
protected $name = "Naimul";
```

We **cannot** do this:

```php
echo $student->name;
```

because `$name` is protected.

Instead, we use a public method:

```php
echo $student->getName();
```

The `getName()` method can access `$name` because it is inside the same class.

### Protected with Inheritance

```php
<?php

class Animal {

    protected $name = "Animal";
}

class Dog extends Animal {

    public function getName() {
        return $this->name;
    }
}

$dog = new Dog();

echo $dog->getName();

?>
```

### Output

```text
Animal
```

The child class `Dog` can access the protected `$name` property.

---

# 3. `private`

A `private` property or method can be accessed **only inside the same class**.

It cannot be directly accessed:

* From outside the class
* From a child class

### Example with Property

```php
<?php

class Student {

    private $name = "Naimul";

    public function getName() {
        return $this->name;
    }
}

$student = new Student();

echo $student->getName();

?>
```

### Output

```text
Naimul
```

But this will cause an error:

```php
echo $student->name;
```

because `$name` is `private`.

---

## Private and Child Class

```php
<?php

class Animal {

    private $name = "Animal";
}

class Dog extends Animal {

    public function getName() {
        return $this->name;
    }
}

$dog = new Dog();

echo $dog->getName();

?>
```

This will **not work as expected**, because `$name` is private to the `Animal` class.

A child class cannot directly access a parent's private property.

---

# Access Modifiers with Methods

Access modifiers can also be used with methods.

### Public Method

```php
public function showName() {
    return $this->name;
}
```

Can be called from outside:

```php
$student->showName();
```

### Protected Method

```php
protected function showName() {
    return $this->name;
}
```

Cannot be called directly from outside.

It can be used inside the class or a child class.

### Private Method

```php
private function showName() {
    return $this->name;
}
```

Can only be called inside the same class.

---

# Complete Example

```php
<?php

class Student {

    public $college = "Dhaka Commerce College";

    protected $department = "CSE";

    private $password = "12345";


    public function showInformation() {

        echo $this->college . "<br>";
        echo $this->department . "<br>";
        echo $this->password . "<br>";
    }
}

$student = new Student();

echo $student->college . "<br>";  // Allowed

// echo $student->department;      // Not allowed
// echo $student->password;        // Not allowed

$student->showInformation();       // Allowed

?>
```

### Output

```text
Dhaka Commerce College
Dhaka Commerce College
CSE
12345
```

The first `Dhaka Commerce College` comes from the direct access:

```php
echo $student->college;
```

The remaining values are displayed through:

```php
$student->showInformation();
```

because the method is inside the class and can access all three properties.

---

# Easy Comparison

| Modifier    | Same Class | Child Class | Outside Class |
| ----------- | ---------- | ----------- | ------------- |
| `public`    | ✅ Yes      | ✅ Yes       | ✅ Yes         |
| `protected` | ✅ Yes      | ✅ Yes       | ❌ No          |
| `private`   | ✅ Yes      | ❌ No        | ❌ No          |

### Easy Way to Remember

```text
public
↓
Everyone can access


protected
↓
Class + Child Class


private
↓
Only Same Class
```

### Property vs Method

Access modifiers work the same way for both:

```php
class Example {

    public $name;              // Property
    protected $age;             // Property
    private $password;          // Property

    public function getName() { }       // Method
    protected function getAge() { }     // Method
    private function getPassword() { } // Method
}
```

**In short:** Access modifiers are used to control the **visibility and accessibility** of properties and methods in PHP.

