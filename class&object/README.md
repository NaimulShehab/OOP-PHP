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


# PHP Inheritance — Simple Note

### What is Inheritance?

**Inheritance** is an OOP feature that allows a **child class to use the properties and methods of a parent class**.

In PHP, inheritance is created using the `extends` keyword.

### Basic Syntax

```php
class Child extends Parent {
    // child class properties and methods
}
```

Think of it like:

```text
Parent Class
     ↓
 Child Class
```

The child class gets the accessible members of the parent class.

---

## Simple Example

```php
<?php

class Animal {

    public $name = "Animal";

    public function eat() {
        echo "Animal is eating";
    }
}

class Dog extends Animal {

    public function bark() {
        echo "Dog is barking";
    }
}

$dog = new Dog();

echo $dog->name . "<br>";
$dog->eat();
echo "<br>";
$dog->bark();

?>
```

### Output

```text
Animal
Animal is eating
Dog is barking
```

### How does it work?

We have a parent class:

```php
class Animal {
```

And a child class:

```php
class Dog extends Animal {
```

Because `Dog` extends `Animal`, the `Dog` object can use the accessible members of `Animal`.

So this works:

```php
$dog->name;
```

Even though `$name` was declared inside `Animal`.

This also works:

```php
$dog->eat();
```

because `eat()` belongs to the parent class.

And `Dog` can have its own method:

```php
public function bark() {
    echo "Dog is barking";
}
```

---

# Inheritance with Properties and Methods

```php
<?php

class Animal {

    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {

    public function bark() {
        return "Woof Woof";
    }
}

$dog = new Dog();

$dog->setName("Tommy");

echo $dog->getName() . "<br>";
echo $dog->bark();

?>
```

### Output

```text
Tommy
Woof Woof
```

Here:

```text
Animal
 ├── $name
 ├── setName()
 └── getName()
       ↑
       │ inherited
       │
Dog
 └── bark()
```

The `Dog` class inherits:

* `$name`
* `setName()`
* `getName()`

from `Animal`.

It also has its own method:

* `bark()`

---

# `protected` and Inheritance

`protected` is especially useful with inheritance because a child class can access a parent's protected properties and methods.

```php
<?php

class Animal {

    protected $name = "Animal";
}

class Dog extends Animal {

    public function showName() {
        return $this->name;
    }
}

$dog = new Dog();

echo $dog->showName();

?>
```

Output:

```text
Animal
```

The child class can access:

```php
$this->name
```

because `$name` is `protected`.

But this would not work:

```php
echo $dog->name;
```

because `protected` members cannot be accessed directly from outside the class.

---

# `private` and Inheritance

A `private` property or method **cannot be directly accessed by the child class**.

```php
<?php

class Animal {

    private $name = "Animal";
}

class Dog extends Animal {

    public function showName() {
        return $this->name;
    }
}

$dog = new Dog();

echo $dog->showName();

?>
```

The child class cannot directly access the parent's private `$name`.

So remember:

| Access Modifier | Same Class | Child Class | Outside |
| --------------- | ---------- | ----------- | ------- |
| `public`        | ✅          | ✅           | ✅       |
| `protected`     | ✅          | ✅           | ❌       |
| `private`       | ✅          | ❌           | ❌       |

---

# Method Overriding

A child class can **replace/redefine a parent's method**. This is called **method overriding**.

```php
<?php

class Animal {

    public function sound() {
        echo "Animal makes a sound";
    }
}

class Dog extends Animal {

    public function sound() {
        echo "Dog barks";
    }
}

$dog = new Dog();

$dog->sound();

?>
```

Output:

```text
Dog barks
```

Although `Animal` has a `sound()` method, `Dog` provides its own version.

---

# `parent` Keyword

The `parent` keyword is used to access the **parent class's property or method**.

```php
<?php

class Animal {

    public function sound() {
        echo "Animal makes a sound";
    }
}

class Dog extends Animal {

    public function sound() {

        parent::sound();

        echo "<br>Dog barks";
    }
}

$dog = new Dog();

$dog->sound();

?>
```

Output:

```text
Animal makes a sound
Dog barks
```

Here:

```php
parent::sound();
```

calls the `sound()` method from the parent class.

---

# Constructor and Inheritance

A child class can also have its own constructor.

```php
<?php

class Animal {

    public function __construct() {
        echo "Animal constructor<br>";
    }
}

class Dog extends Animal {

    public function __construct() {
        echo "Dog constructor<br>";
    }
}

$dog = new Dog();

?>
```

Output:

```text
Dog constructor
```

If the child has its own constructor, the parent's constructor is **not automatically called**.

You can call it using:

```php
parent::__construct();
```

Example:

```php
<?php

class Animal {

    public function __construct() {
        echo "Animal constructor<br>";
    }
}

class Dog extends Animal {

    public function __construct() {

        parent::__construct();

        echo "Dog constructor<br>";
    }
}

$dog = new Dog();

?>
```

Output:

```text
Animal constructor
Dog constructor
```

---

## Easy Way to Remember

```text
             Animal
            /      \
           /        \
         Dog        Cat
```

`Animal` = **Parent class**

`Dog` = **Child class**

`Cat` = **Child class**

Both `Dog` and `Cat` can inherit common properties and methods from `Animal`.

### Key Points

* **Inheritance** allows one class to acquire features of another class.
* `extends` is used to create inheritance.
* The original class is called the **parent/superclass**.
* The new class is called the **child/subclass**.
* `public` members can be inherited and accessed from outside.
* `protected` members can be accessed by the child class.
* `private` members cannot be directly accessed by the child class.
* `parent::` is used to access parent class methods or constructors.
* Redefining a parent method in a child class is called **method overriding**.

# PHP `final` Keyword 

The **`final` keyword** is used to **prevent inheritance or overriding** in PHP.

It can be used with:

1. **Class**
2. **Method**

---

## 1. `final` Class

If a class is declared as `final`, **another class cannot extend/inherit it**.

### Example

```php
<?php

final class Animal {

    public function sound() {
        echo "Animal makes sound";
    }
}

// This is NOT allowed
class Dog extends Animal {

}

?>
```

This will produce an error because `Animal` is a `final` class.

### Simple idea

```text
final class Animal
        ↓
Cannot be inherited
```

So:

```php
class Dog extends Animal
```

❌ Not allowed.

---

# 2. `final` Method

A `final` method **can be inherited**, but it **cannot be overridden** by a child class.

### Example

```php
<?php

class Animal {

    final public function sound() {
        echo "Animal makes sound";
    }
}

class Dog extends Animal {

    // NOT allowed
    public function sound() {
        echo "Dog barks";
    }
}

?>
```

This will produce an error because the `sound()` method is declared as `final` in the parent class.

### Simple idea

```text
Animal
  |
  |-- final sound()
  ↓
Dog
  |
  └── Cannot change sound()
```

The child class can **use** the method:

```php
<?php

class Animal {

    final public function sound() {
        echo "Animal makes sound";
    }
}

class Dog extends Animal {
}

$dog = new Dog();

$dog->sound();

?>
```

Output:

```text
Animal makes sound
```

So, `final` does **not** stop inheritance of the method. It only stops the child from **overriding** it.

---

# `final` Class vs `final` Method

| `final`        | Meaning                     |
| -------------- | --------------------------- |
| `final class`  | Class cannot be inherited   |
| `final method` | Method cannot be overridden |

### Remember

```text
final class
    ↓
NO inheritance


final method
    ↓
Inheritance allowed
    ↓
But NO overriding
```

---

## Important Point

A `final` keyword is **not normally used with properties** in PHP.

For example:

```php
final public $name;
```

❌ This is not valid PHP syntax for a property.

`final` is mainly used with **classes and methods** to prevent unwanted inheritance or method overriding.

# PHP Constants

### What is a Constant?

A **constant** is a value that **cannot be changed after it has been defined**.

Constants are useful when you have a value that should remain the same throughout your program, such as:

* Website name
* Company name
* Pi value
* Tax rate
* Database configuration values

---

## 1. Creating a Constant Using `define()`

PHP provides the `define()` function to create constants.

### Syntax

```php
define("CONSTANT_NAME", value);
```

### Example

```php
<?php

define("SITE_NAME", "My Website");

echo SITE_NAME;

?>
```

### Output

```text
My Website
```

Notice that we **don't use `$`** before a constant:

```php
echo SITE_NAME;
```

Not:

```php
echo $SITE_NAME; // ❌
```

---

## 2. Constants Cannot Be Changed

Once a constant is defined, you cannot change its value.

```php
<?php

define("PI", 3.1416);

echo PI;

?>
```

Output:

```text
3.1416
```

You should not try to assign another value to it.

```php
PI = 3.14; // ❌
```

---

# 3. Using `const`

PHP also allows you to create constants using the `const` keyword.

```php
<?php

const SITE_NAME = "My Website";

echo SITE_NAME;

?>
```

Output:

```text
My Website
```

So there are two common ways:

```php
define("SITE_NAME", "My Website");
```

and

```php
const SITE_NAME = "My Website";
```

---

# 4. Constant Inside a Class

Constants can also be created inside a class using `const`.

```php
<?php

class Student {

    const COLLEGE = "Dhaka Commerce College";

}

echo Student::COLLEGE;

?>
```

### Output

```text
Dhaka Commerce College
```

To access a class constant, we use:

```php
ClassName::CONSTANT_NAME
```

Here:

```php
Student::COLLEGE
```

`::` is called the **scope resolution operator**.

---

# 5. Constant with a Class Object

A class constant does not need an object to be accessed.

```php
<?php

class Animal {

    const TYPE = "Mammal";
}

echo Animal::TYPE;

?>
```

Output:

```text
Mammal
```

You don't need:

```php
$animal = new Animal();
```

to access `TYPE`.

---

# Constant vs Variable

| Variable             | Constant                |
| -------------------- | ----------------------- |
| Uses `$`             | Does not use `$`        |
| Value can be changed | Value cannot be changed |
| Example: `$name`     | Example: `NAME`         |
| Can be reassigned    | Cannot be reassigned    |

### Example

```php
$name = "Naimul";

$name = "Shehab"; // ✅ Allowed
```

But:

```php
define("NAME", "Naimul");

define("NAME", "Shehab"); // ❌ Cannot redefine
```

---

## Easy Way to Remember

```text
Variable
   ↓
Can change

Constant
   ↓
Cannot change
```

### Simple Example

```php
<?php

define("COUNTRY", "Bangladesh");
define("LANGUAGE", "PHP");

echo COUNTRY . "<br>";
echo LANGUAGE;

?>
```

Output:

```text
Bangladesh
PHP
```

### Key Points

* A **constant** stores a fixed value.
* A constant's value **cannot be changed** after it is defined.
* Constants normally **do not use `$`**.
* `define()` can create constants.
* `const` can also create constants.
* Class constants are accessed using `ClassName::CONSTANT_NAME`.
* Constants are useful for values that should remain unchanged.

# PHP Abstract Class

### What is an Abstract Class?

An **abstract class** is a class that is used as a **base/parent class** for other classes.

An abstract class **cannot be used to create an object directly**.

In PHP, we use the `abstract` keyword to create an abstract class.

```php
abstract class Animal {
    // properties and methods
}
```

---

## 1. Simple Abstract Class Example

```php
<?php

abstract class Animal {

    public function eat() {
        echo "Animal is eating";
    }
}

class Dog extends Animal {

}

$dog = new Dog();

$dog->eat();

?>
```

### Output

```text
Animal is eating
```

Here:

```php
abstract class Animal
```

is the **abstract class**.

```php
class Dog extends Animal
```

means `Dog` inherits from `Animal`.

The `Dog` object can use the `eat()` method.

---

## 2. Cannot Create Object of Abstract Class

You **cannot** do this:

```php
$animal = new Animal();
```

❌ This will produce an error because `Animal` is an abstract class.

Instead, create an object of a child class:

```php
$dog = new Dog();
```

✅

---

# Abstract Method

An abstract class can contain an **abstract method**.

An abstract method is a method that has **only a declaration and no body**.

### Example

```php
<?php

abstract class Animal {

    abstract public function sound();
}

class Dog extends Animal {

    public function sound() {
        echo "Dog barks";
    }
}

$dog = new Dog();

$dog->sound();

?>
```

### Output

```text
Dog barks
```

Here:

```php
abstract public function sound();
```

says that every child class **must provide its own implementation** of `sound()`.

The `Dog` class does this:

```php
public function sound() {
    echo "Dog barks";
}
```

---

# Another Example

```php
<?php

abstract class Animal {

    abstract public function sound();

    public function eat() {
        echo "Animal is eating<br>";
    }
}

class Dog extends Animal {

    public function sound() {
        echo "Dog barks<br>";
    }
}

class Cat extends Animal {

    public function sound() {
        echo "Cat meows<br>";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->sound();
$dog->eat();

$cat->sound();
$cat->eat();

?>
```

### Output

```text
Dog barks
Animal is eating
Cat meows
Animal is eating
```

Here, `Animal` provides a common structure:

```text
             Animal
          (Abstract Class)
             /    \
            /      \
          Dog      Cat
           ↓        ↓
        barks     meows
```

Both `Dog` and `Cat` **must implement** the `sound()` method.

---

## Abstract Class Can Have Normal Methods

An abstract class can contain:

### Normal method

```php
public function eat() {
    echo "Eating";
}
```

### Abstract method

```php
abstract public function sound();
```

So an abstract class can contain **both normal and abstract methods**.

---

## Important Rules

### Rule 1: Cannot create an object

```php
$animal = new Animal();
```

❌ Not allowed.

### Rule 2: Child class must implement abstract methods

```php
abstract public function sound();
```

If `Dog` extends `Animal`, `Dog` must implement `sound()`.

### Rule 3: Abstract class is mainly used as a base class

```php
abstract class Animal
```

↓

```php
class Dog extends Animal
```

↓

```php
$dog = new Dog();
```

---

# Abstract Class vs Normal Class

| Normal Class              | Abstract Class                 |
| ------------------------- | ------------------------------ |
| Can create objects        | ❌ Cannot create objects        |
| Can be inherited          | ✅ Yes                          |
| Can have normal methods   | ✅ Yes                          |
| Can have abstract methods | ❌ No                           |
| Used directly             | Can be used as a base/template |

---

## Easy Way to Remember

Think of an abstract class as a **blueprint/template**.

```text
Abstract Class
      ↓
Defines what child classes should have
      ↓
Child Classes
      ↓
Provide the actual implementation
```

### One-line Definition

> **An abstract class is a class that cannot be instantiated directly and is designed to be inherited by child classes; it can contain abstract methods that child classes must implement.**





