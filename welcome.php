<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Fix the viewport meta tag -->
    <title>STUDENT EVALUATOR SYSTEM</title>
    <style>
        body {
            background-image: url('img/banana.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin-top: 33%;
        }

        .container p {
            color: #000000;
            font-size: 50px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-shadow: 1px 1px #535353;
            text-align: center;
            letter-spacing: 5px;
            margin-top: -15%;
            margin-left: 19%;
            margin-right: auto;
            font-weight: 300;
        }

        .container{
  width: 100%;
  height: 15vh;
  display: flex;
  justify-content: center;
}

button {
            color: #040D12;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 16px 40px;
            border-radius: 500px;
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

        button:hover {
            background-color: #FAF0E6;
        }

    </style>
</head>
<body>
    <div class="container">
        <p>STUDENT EVALUATOR SYSTEM</p>
    </div>
    <?php
class Button {
    private $label;
    
    public function __construct($label) {
        $this->label = $label;
    }
    
    public function render($url) {
        
        echo '<button  onclick="location.href=\'' . $url . '\'">' . $this->label . '</button>';
    }
}

$startButton = new Button("GET STARTED");

$startButton->render('Usertype.php');
?>

</body>
</html>
