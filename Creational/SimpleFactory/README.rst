Simple Factory
==============

Purpose
-------

The simple factory pattern is a creational pattern that creates objects without exposing the instantiation logic to the client. It encapsulates the object creation code, but keeps control over how the object is created. A simple factory is often implemented as a class with a static method that returns the object requested. This is sometimes referred to as a static factory. We use a common interface to refer to the newly created object.

The implementation is simple:

* The client needs an object, but rather than creating it with the new operator, it asks the factory for a new object, providing information about the type of object it requires.
* The factory instantiates a new concrete object and then returns it to the client.
* The client uses the object as an abstract type without being aware about its concrete implementation.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Simple Factory UML Diagram
   :align: center


Usage
-----

.. code-block::  php
   :linenos:

    $mobile = NotifierFactory::getNotifier("SMS", "07111111111");
    echo $mobile->sendNotification();
    $email = NotifierFactory::getNotifier("Email", "test@example.com");
    echo $email->sendNotification();

Test
----

Tests/SimpleFactoryTest.php

.. literalinclude:: Tests/SimpleFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/torkhani/design-patterns-php/tree/main/Creational/SimpleFactory