<?php
    // ===ODD OR EVEN===
    echo "===ODD OR EVEN===\n";
    $num = readline("Enter a number: ");
    $result = "EVEN";
    if ($num % 2 != 0) {
        $result = "ODD";
    }
    echo "The number is $result\n";

    // ===PRIME NUMBER OR NOT===
    echo "===PRIME NUMBER OR NOT===\n";
    $num = readline("Enter a number: ");
    if (!is_numeric($num)){
        echo "Invalid input. Please enter a number.\n";
        exit;
    }

    $num = (int) $num;
    for ($ctr = 2; $ctr <= $num; $ctr++){
        echo isPrime($ctr);
    }

    function isPrime($num){
        if ($num < 2 ) {
            return "{$num} is NOT PRIME number\n";
        };

        if ($num === 2){
            return "{$num} is A PRIME number\n";
        };

        if ($num % 2 == 0){
            return "{$num} is NOT PRIME number\n";
        };

        $sqrtNumber = sqrt($num);
        for ($i = 3; $i <= $sqrtNumber; $i += 2){
            if($num % $i === 0){
                return "{$num} is NOT PRIME number\n";
            }
        }

        return "{$num} is A PRIME number\n";
    }

    // ===SLUGIFY===
    echo "===SLUGIFY===\n";
    require __DIR__ . '/vendor/autoload.php';
    use Cocur\Slugify\Slugify;
    $input = readline("Input a string: ");
    $slugify = new Slugify();
    echo $slugify->slugify("{$input}\n");

    // ===UUID===
    echo "\n===UUID===\n";
    use Ramsey\Uuid\Uuid;
    $uuid = Uuid::uuid4();
    echo $uuid->toString();

    // ===FAKER===
    echo "\n===FAKER===";
    $faker = Faker\Factory::create();
    echo "\nName: ".$faker->name();
    echo "\nEmail: ".$faker->email();
    echo "\n".$faker->text();
?>
