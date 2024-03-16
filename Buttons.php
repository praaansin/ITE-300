<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>ADMIN</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>

body {
  width: 100%;
  min-height: 80vh;
  background-color: #EF9595;
  background-size: 150%;
  margin: 0 auto;
}

.container{
  width: 100%;
  height: 15vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
h1 {
  color: #000;
  font-size: 50px;
  font-family:'Times New Roman', Times, serif;
  text-shadow: 1px 1px #535353;
  text-align: center;
  letter-spacing: 5px;
  margin-top: 110px;;
  margin-left: 3%;
  margin-right: auto;
  font-weight: 300;
}

.button {
            color: #040D12;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 16px 40px;
            border-radius: 100px;
            font-weight: bold;
            transition: all 0.4s ease-in-out;
            background-size: 152%;
            border: 2px solid black;
            background: transparent;
            text-decoration: none;
            position: absolute;
            top: 55%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
        }

        .button:hover {
            background-color: transparent;
        }

        .enroll-button {
        background-color: #F9F3CC;
        border: 2px solid black;
        top: 55%;
        left: 40%;
    }

    .evaluate-button {
        background-color: #F9F3CC;
        border: 2px solid black;
        top: 55%;
        left: 60%;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>
    </div>
<?php
class Button {
    private $label;
    private $class;
    
    public function __construct($label,$class) {
        $this->label = $label;
        $this->class = $class;
    }
    
    public function render($url) {
        echo '<button class="' . $this->class . '" onclick="location.href=\'' . $url . '\'">' . $this->label . '</button>';
    }
}

$enrollButton = new Button("Enroll Students", "button enroll-button");
$evaluateButton = new Button("Evaluate", "button evaluate-button");

$enrollButton->render('enrollIndex.php');
$evaluateButton->render('evaluateIndex.php');
?>
</body>
</html>