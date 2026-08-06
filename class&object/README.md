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

This version is suitable for a GitHub repository and explains the code in a clear, beginner-friendly way.



