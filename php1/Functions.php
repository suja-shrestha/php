<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }

        .task {
            background-color: #e9ecef;
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        h2 {
            text-transform: capitalize;
        }

        h1 {
            text-transform: capitalize;
        }

        input {
            background: white;
            border: 2px solid black;
            border-radius: 10px;
            padding: 5px;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <ol>
        <li>
            <div class="task">
                <h1>FUNCTION </h1>
                <?php
                class Functions
                {
                    public $name;
                    public $age;
                    public $email;
                }

                $ref = new Functions();
                $ref->name = "sujal";
                $ref->age = 14;
                $ref->email = "shresthasujal949@gmail.com";

                echo $ref->name . "<br>";
                echo $ref->age . "<br>";
                echo $ref->email;
                ?>

            </div>
        </li>
    </ol>


</body>

</html>