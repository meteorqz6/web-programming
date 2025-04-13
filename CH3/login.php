<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>로그인 서버와의 연동 결과</title>
</head>
<body>
    <h3>서버로 데이터 전송 완료!</h3>
    <hr>
    현재 보시는 문서는 서버의 응용인 <strong>login.php</strong>가 전송한 문서입니다.<br>
    로그인 버튼을 통해 폼으로부터 데이터를 전송받았습니다.
    <hr>
    당신이 제출한 폼의 정보는 다음과 같습니다.<br>
    아이디: <?php echo htmlspecialchars($_GET['id'] ?? ''); ?><br>
    비밀번호: <?php echo htmlspecialchars($_GET['pw'] ?? ''); ?>
</body>
</html>