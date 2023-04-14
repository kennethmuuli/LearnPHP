<?php

    //for regions use: maptz.regionfolder (<- extension ID)

    /* #region ------------- TYYBID -------------*/

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

    /* #endregion */

    /* #region ------------- BASIC MATH OPERATORS -------------*/

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

    /* #endregion */

    /* #region ------------- LOOGILISED TEHTED -------------*/

    // $num = true && false;
    // $num = true || false;
    // $num = 10 > 1;
    // $num = 10 < 1;
    // $num = 10 == 10; // Pehme vordsus
    // $num = '10' == 10; // Pehme vordsus
    // $num = 10 === 10; // Range vordsus, nii tyyp kui vaartus peavad olema samad
    // $num = '10' != 10; // Pehme ebavordsus  
    // $num = '10' !== 10; // Range ebavordsus, nii tyyp kui vaartus peavad olema ebavordsed

    /* #endregion */

    /* #region ------------- LOOPS ------------- */

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

    /* #endregion */

    /* #region ------------- KLASSID ------------- */

    // class box {
    //     //private, protected, public, "static" e. jagatud vaartus
    //     private $width;
    //     public $length;
    //     public $height;
    //     public $color;
    //     public $material;
    //     static $count;

        

    //     public function open(){
    //         echo 'box is open';
    //     }
    
    //     public function close(){
    //         echo 'box is closed';
    //     }

    //     public function setWidth($width){
    //         if($width > 0) {
    //             $this -> width = $width;
    //         } else {
    //             echo 'Width cannot be negative';     
    //         } 
    //     }
    // }

    // $box = new Box();
    // $box::$count = 1; //vaata kuidas viidatakse static muutujale
    // $box -> setWidth(10);
    // $box -> height = 10;
    // $box -> length = 10;
    // $box -> color = 'red';
    // $box -> material = 'wood';
    // //$box -> open();

    // $box2 = new Box();
    // $box2::$count = 2; //vaata kuidas viidatakse static muutujale
    // $box -> setWidth(10);
    // $box2 -> height = 12;
    // $box2 -> length = 12;
    // $box2 -> color = 'blue';
    // $box2 -> material = 'clay';
    // //$box2 -> close();

    // class MetalBox extends Box {
    //     public $material = 'metal';
    //     public $conductivity;

    //     public function electrify(){
    //         echo 'wuush';
    //     }

    //     //override naide / PS! keyword final voimaldab parent klassis piirata overridingut
    //     public function open(){
    //         echo "something else opened";
    //     }
    // }

    // $box3 = new MetalBox();
    // Box::$count = 3; //static muutuja alternatiiv

    // var_dump($box::$count);

    /* #endregion */

    /* #region ------------- TRAITS ------------- */

    //trait voimaldab erinevaid omadusi sattida erinevate klasside kylge, mis pole omavahel muidu yldse seotud
    trait SomeLogic {
        public $prop;

        public function method(){
            echo $this->prop;
        }
    }

    //traite voib klassile ka mitu tykki kylge panna
    trait SomeLogic2 {
        public $prop2;

        public function method2(){
            echo $this->prop;
        }
    }

    class Something {
        use SomeLogic, SomeLogic2;
    }

    class SomethingElse {
        use SomeLogic;
    }

    $obj = new Something();
    $obj -> method();
    $obj -> method2();


    /* #engregion */
?>
