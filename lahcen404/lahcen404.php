<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lahcen Ait Maskour</title>
</head>

<body>

    <?php
    // Simple Arrays
    $colors = ["Blue", "White", "Black", "Green", "Red", "Yellow", "Pink"];
    $numbers = [1, 2, 3, 4, 5, 6, 7];

    // Associative Arrays
    $users = [
        [
            'name' => 'AIT MASKOUR Lahcen',
            'age' => 22,
            'city' => 'Beni Mellal',
            'linkedin' => 'https://www.linkedin.com/in/lahcen-ait-maskour-32716422b/'
        ],
        [
            'name' => 'AIT MASKOUR Billal',
            'age' => 16,
            'city' => 'Beni Mellal',
            'linkedin' => 'https://www.linkedin.com/in/lahcen-ait-maskour-32716422b/'
        ],
        [
            'name' => 'SADIK Fati',
            'age' => 23,
            'city' => 'Ifrane',
            'linkedin' => 'https://www.linkedin.com/in/lahcen-ait-maskour-32716422b/'
        ],
        [
            'name' => 'NASSER Nada',
            'age' => 18,
            'city' => 'Casablanca',
            'linkedin' => 'https://www.linkedin.com/in/lahcen-ait-maskour-32716422b/'
        ]
    ];

    $color = $colors[1];
    $message = "Your color is ";

    // Switch example
    switch ($color) {
        case "Red":
            $urColor = "$message Red";
            break;
        case "Blue":
            $urColor = "$message Blue";
            break;
        case "Green":
            $urColor = "$message Green";
            break;
        case "White":
            $urColor = "$message White";
            break;
        case "Black":
            $urColor = "$message Black";
            break;
        default:
            $urColor = "No Color here";
            break;
    }
    ?>

    <div class="greeting-box">
        <h1>
            <?php echo "Hello Lahcen ! $urColor"; ?>
            <br>
            <?= $urColor ?>
        </h1>

        <div>
            <h2>Colors are:</h2>
            <?php foreach ($colors as $color) : ?>
                <li><?= $color ?></li>
            <?php endforeach ?>
        </div>

        <!-- FILTER USERS BY NAME -->

        <div>
            <h1>Users (Filtered by Name)</h1>

            <?php foreach (filterUsersF($users, 'AIT MASKOUR Lahcen') as $user) : ?>
                <ul>
                    <li><a href="<?= $user['linkedin'] ?>">LinkedIn</a></li>
                    <li><?= $user['name'] ?></li>
                    <li><?= $user['age'] ?></li>
                </ul>
            <?php endforeach ?>
        </div>

        <?php
        // Debug variable
        $x = 'test';
        var_dump($x);

        // Filter function
        function filterUsersF($users, $name)
        {
            $filtered = [];
            foreach ($users as $user) {
                if ($user['name'] === $name) {
                    $filtered[] = $user;
                }
            }
            return $filtered;
        }

        // Filter by Age
        function filterUsersByAge($users, $age)
        {
            $filteredUsers = [];
            foreach ($users as $u) {
                if ($u['age'] === $age) {
                    $filteredUsers[] = $u;
                }
            }
            return $filteredUsers;
        }

        // Filter Age = 22
        $filteredUsers = filterUsersByAge($users, 22);
        ?>

        <h5>List users filtered by Age (22)</h5>
        <?php foreach ($filteredUsers as $user) : ?>
            <ul>
                <li>Name: <?= $user['name'] ?></li>
                <li>Age: <?= $user['age'] ?></li>
            </ul>
        <?php endforeach ?>

        <?php
        // Filter Age = 18
        $filteredUsers = filterUsersByAge($users, 18);
        ?>

        <h1>List users filtered by Age (18)</h1>
        <?php foreach ($filteredUsers as $user) : ?>
            <ul>
                <li>Name: <?= $user['name'] ?></li>
                <li>Age: <?= $user['age'] ?></li>
            </ul>
        <?php endforeach ?>

        <!-- STRING FUNCTIONS -->
         <br> <br> <h1>String Functions </h1> <br> 

        <?php
            $name = "Lahcen Ait Maskour";
            $email = "testuser@example.com";
            $sentence = "php is a great language to learn";
            $username = "   lahcen123   "; // contains spaces
            $word = "HELLO";
            $word2 = "hello";

        ?>
        <?php

            echo "- length of my name is : " . strlen($name) . "<br>"; // length

            echo "- my name en upperCase is : " . strtoupper($name) . "<br>"; //toUpperCase

            echo "- My name en LowerCase is : " . strtolower($name) . "<br>";

            echo "- make first lettre uppercase :" . ucfirst($word2) . "<br>";

            echo "- make first lettre upperCase of each word :" . ucwords($sentence) . "<br>";

            echo "- Remove spaces in start and end : " . trim($username) . "<br>";

            echo "- get part of a string : " . substr($name, 0 , 6) . "<br>";

            echo "- get part of a string : " . substr($name, 7 , 11) . "<br>";

            echo "- replace word with other one :" . str_replace("php","JAVA" , $sentence) . "<br>";

            echo "- Comapre but sensitive to Case :" . strcmp($word , $word2) . "<br>"; // return -1 that's mean not equal

            echo "- compare but not  sensitive to case :" . strcasecmp($word,$word2) . "<br>"; // return 0 that's mean Equal

            echo " Return position of caractere :" . strpos($email , "@")  . "<br>";

            echo " Return position of word  :" . strpos($sentence , "great")  . "<br>";

            $split = explode(" ", $name);

           // Using print_r
echo "print_r => : ";
print_r($split); // print_r can output arrays directly
echo "<br>";


// Using var_export
echo "var_export => : ";
echo var_export($split);
echo "<br>";

// Using var_dump
echo "var_dump => : ";
echo "<pre>";
var_dump($split);
echo "</pre>";


echo "implode like join() in js : " . implode("-",$split) . "<br>";


        ?>

        <!-- Array Functions -->
         <br> <br> <h1>Array Functions </h1> <br> 

        <?php

        $numbers = [1, 2, 3, 4, 5];
        $fruits = ["apple", "banana", "orange", "mango"];
        $colors = ["red", "blue", "green"];
        $person = [
        "name" => "Lahcen",
        "age" => 21,
        "city" => "Beni Mellal"
        ];


        echo "Length of the array is :" . count($numbers) . "<br>";
        echo "sum of all numbers is :" . array_sum($numbers) . "<br>";
        echo "Multiplication of the all numbers is :" . array_product($numbers) . "<br<";

        echo "i added a limona to end of array :" . array_push($fruits,"Limona") . "<br>";
        //print_r($fruits);

        echo "I add a Dela7a at beginning of the array : " . array_unshift($fruits,"Dela7a") . "<br>";
        // print_r($fruits);

        echo "I remove the last fruit from the array :" . array_pop($fruits) . "<br>";
        //  echo "<pre>";
        // var_export($fruits);
        // echo "</pre>";

        echo "I remove the first fruit from the array :" . array_shift($fruits) . "<br>";
        // echo "<pre>";
        // var_dump($fruits);
        // echo "</pre>";

        echo "I want to check if the bana exist in the array : <br>";

        if(in_array("banana",$fruits)){
            echo " Yes Banana is in the array <br>";
        }

        echo "I want to find index of an elements , like Banana :" . array_search("banana",$fruits) . "<br>";

        echo "i want an array of just apple and banana : <br>";
        $array2 = array_slice($fruits,0,2) ;
        print_r($array2);

        echo "<br> I want to make this array as a strings ";
        $strings = implode("-",$fruits);
        echo $strings;


        

    

?>

    </div>

</body>

</html>
