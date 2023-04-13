<?php
    // const HELLO_WORLD = 10; //konstante hea tavana margistatake all caps
    
    // $num = 1; // int
    // $num = 1.5; // float

    // //weak typed
    // $num = "hello"; // string
    // $num = HELLO_WORLD; // constant
    // $num = true; //boolean
    // $num = false;
    // $num = [1,2,3,4,5]; //array
    
    // $num = ['red' => 1, 'blue' => 2, 'green' => 3]; //array w. keys

    // /* Yhekordsed vs kahekordsed ylakomad, on vahe "tolgendab vaartuseid" vs 'tahendab, et tegemist on konkreetselt stringiga'*/

    // $num = ['red' => 1, 100 => 2, 3, 200 => 4, 5, 'foo' => 'bar']; //mixed array, w. and w.o keys

    // /*Basic math operators -------------*/
    // $num = 1;
    // $num = 1 + 1;
    // $num = 1 - 1;
    // $num = 1 * 1;
    // $num = 1 ** 1; //asendamine
    // $num = 1 / 1;
    // $num = 1 % 1;
    // $num += 1;
    // $num -= 1;
    // $num *= 1;
    // $num /= 1;
    // $num %= 1;
    // $num++;
    // $num--;
    // $num**= 1; //astendamine iseendaga

    // /* Loogilised tehted -------------*/
    // $num = true && false;
    // $num = true || false;
    // $num = 10 > 1;
    // $num = 10 < 1;
    // $num = 10 == 10; // Pehme vordsus
    // $num = '10' == 10; // Pehme vordsus
    // $num = 10 === 10; // Range vordsus, nii tyyp kui vaartus peavad olema samad
    // $num = '10' != 10; // Pehme ebavordsus  
    // $num = '10' !== 10; // Range ebavordsus, nii tyyp kui vaartus peavad olema ebavordsed

    // /* Muu kama ------------- */
    // $num = 'hello'.'world'; //stringide liitmine
    // $num .= 'world';

    // var_dump ($num); // var_dump funk. prindib valja kogu info
    
    // $num = 10;

    // if ($num > 10) {
    //     echo 'suurem';
    // } elseif ($num < 10) {
    //     echo 'väiksem';
    // } else {
    //     echo 'võrdne';
    // }

    // switch ($num) {
    //     case 1:
    //         echo 'üks';
    //         break;
    //     case 2:
    //         echo 'kaks';
    //         break;
    //     default:
    //         echo 'default';
    //         break;       
    // }

    // for ($i=0; $i<10; $i++) {
    //     echo "kordus $i\n";
    // }

    // while ($num<10) {
    //     echo "while loop";
    // }

    // do {
    //     echo "do while";
    // } while ($num<10);

    // //tavaline funktsioon
    // function hello($name) {
    //     return "hello $name";
    // }

    // //voimalik ette anda oodatud muutuja ja return tyybid
    // function hello_2 (string $name): string {
    //     return "hello $name";
    // }

    // $text = hello_2 ('Kenneth');
    // echo $text;

    // //rekursiivne funktsioon
    // function recursive ($i) {
    //     if ($i>0) {
    //         recursive ($i - 1);
    //     }
    //     echo $i;
    // }
    // recursive(10);

    class box {
        public $width;
        public $length;
        public $height;
        public $color;
        public $material;

        public function open(){
            echo 'box is open';
        }
    
        public function close(){
            echo 'box is closed';
        }
    }

    $box = new Box();
    $box -> width = 10;
    $box -> height = 10;
    $box -> length = 10;
    $box -> color = 'red';
?>
