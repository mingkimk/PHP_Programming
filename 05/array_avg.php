<?php
	//배열이용 합계, 평균구하기, 배열의 원소는 0부터 시작한다.

   	$score[0] = 90;     // 영어
   	$score[1] = 80;     // 컴퓨터 개론
   	$score[2] = 85;     // 프로그래밍 기초
   	$score[3] = 95;     // 기초수학
   	$score[4] = 93;    // 알고리즘

   	$sum = 0;
   	for($a=0; $a<=4; $a++)
   	{
       	    $sum = $sum + $score[$a];
   	}
   
   	$avg = $sum/5;

   	echo("과목 점수 : $score[0], $score[1], $score[2], $score[3], $score[4]<br>");   
   	echo("합계 : $sum, 평균 : $avg <br>");
?>