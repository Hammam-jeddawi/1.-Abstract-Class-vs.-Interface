
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
//Using an Interface:

      interface Shape {
        public function calculateArea(): float;
      }

      class Square implements Shape {
        public $sideLength;

        public function __construct(float $sideLength) {
          $this->sideLength = $sideLength;
        }

        public function calculateArea(): float {
          return $this->sideLength * $this->sideLength;
        }
      }

      class Circle implements Shape {
        public $radius;

        public function __construct(float $radius) {
          $this->radius = $radius;
        }

        public function calculateArea(): float {
          return pi() * pow($this->radius, 2);
        }
      }


       ?>

       <?php

       interface Loggable {
           public function logMessage($message);
       }

       class FileLogger implements Loggable {
           public function logMessage($message) {
               // Code to log message to a file
           }
       }

       class DatabaseLogger implements Loggable {
           public function logMessage($message) {
               // Code to log message to a database
           }
       }

       class EventLogger implements Loggable {
           public function logMessage($message) {
               // Code to log message to an event tracking system
           }
       }


        ?>

  </body>
</html>
