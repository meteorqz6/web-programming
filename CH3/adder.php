<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>덧셈 서버와의 연동 결과</title>
    </head>
    <body>
        <h3>서버로 데이터 전송 완료!</h3>
        <hr>
        현재 보시는 문서는 서버의 응용인 <strong>adder.php</strong>가 전송한 문서입니다.<br>
        서버에 더하기 요청 버튼을 통해 폼으로부터 데이터를 전송받았습니다.
        <hr>
        <?php
        $num1 = (int)($_GET['num1'] ?? 0);
        $num2 = (int)($_GET['num2'] ?? 0);
        $sum = $num1 + $num2;
        ?>
        당신이 제출한 두 수의 합은 <?php echo $num1 . " + " . $num2 . " = " . $sum; ?>입니다.<br>     
    </body>
</html>