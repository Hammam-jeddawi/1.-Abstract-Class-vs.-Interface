<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php 

     abstract class Shape {
       protected $area;

       public function getArea(): float {
         return $this->area;
       }

       abstract public function getSpecificArea(): float;
     }

     class Square extends Shape {
       public $sideLength;

       public function __construct(float $sideLength) {
         $this->sideLength = $sideLength;
       }

       public function getSpecificArea(): float {
         $this->area = $this->sideLength * $this->sideLength;
         return $this->area;
       }
     }

     class Circle extends Shape {
       public $radius;

       public function __construct(float $radius) {
         $this->radius = $radius;
       }

       public function getSpecificArea(): float {
         $this->area = pi() * pow($this->radius, 2);
         return $this->area;
       }
     }


      ?>

      <?php
      abstract class AbstractShape {
          protected $color;

          public function __construct($color) {
              $this->color = $color;
          }

          abstract public function area();
          abstract public function perimeter();

          public function getColor() {
              return $this->color;
          }
      }

      class Circle extends AbstractShape {
          private $radius;

          public function __construct($color, $radius) {
              parent::__construct($color);
              $this->radius = $radius;
          }

          public function area() {
              return pi() * $this->radius ** 2;
          }

          public function perimeter() {
              return 2 * pi() * $this->radius;
          }
      }

       ?>
  </body>
</html>
