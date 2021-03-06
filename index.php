<?php


/**
 * Created by PhpStorm.
 * User: imal365
 * Date: 9/6/17
 * Time: 10:52 AM
 */


//require_once "lib/Shape.php";
//require_once "lib/Image.php";
//require_once "lib/Node.php";



use App\lib\Shape;

require('vendor/autoload.php');


/*
 * |--/
 * | /
 * |/
 *
 * */
$traingle_one = new \App\lib\Triangle("./images.jpeg");
$traingle_one->setPointOne(0,0,true);
$traingle_one->setPointTwo(0,100,true);
$traingle_one->setPointThree(100,0,true);
$traingle_one->scale(40);
$traingle_one->build();


$traingle_two = new \App\lib\Triangle("./image2.jpg");
$traingle_two->setPointOne(0,100,true);
$traingle_two->setPointTwo(100,100,true);
$traingle_two->setPointThree(100,0,true);
$traingle_two->scale(40);
$traingle_two->build();


$image = $traingle_one->merge($traingle_two,0,0);

$shape = new Shape($image->getResource());
$shape->pushPresentage(new \App\lib\Node(33,33));
$shape->pushPresentage(new \App\lib\Node(66,33));
$shape->pushPresentage(new \App\lib\Node(66,66));
$shape->pushPresentage(new \App\lib\Node(33,66));
$shape->build();

$shape->dump();
