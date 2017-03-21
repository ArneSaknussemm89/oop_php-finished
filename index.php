<?php

include "autoload.php";

use Base\Ball;
use Extended\BeachBall;

$beachBall = new BeachBall();
$ball = new Ball();

$beachBall->setRadius(20);
$beachBall->setColor('orange');
$color = $beachBall->getColor();
$beachWidth = ($beachBall->getRadius() * 2);

$ball->setRadius(40);
$ballWidth = ($ball->getRadius() * 2);

echo "<div style='background-color: $color; color: #fff; padding: 16px; margin-bottom: 24px; display: block; width: $beachWidth; height: $beachWidth; border-radius: 50%'>";
echo "</div>";

echo "<div style='background-color: #000; color: #fff; padding: 16px; margin-bottom: 24px; display: block; width: $ballWidth; height: $ballWidth; border-radius: 50%'>";
echo "</div>";