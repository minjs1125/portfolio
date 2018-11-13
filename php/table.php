<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>테이블만들기</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <header class="w3-container w3-teal">
        <h2>테이블 만들기</h2>
        <h5>생성할 테이블의 행과 열을 입력해 주세요.</h5>
    </header>
    <section>
        <form name="table_form" action="table_res.php" method="get">
            <!--method="get"은 주소줄로 전송 post라면 전송하지만 보여지지 않음-->
            <table class="w3-table w3-bordered w3-hoverable">
                <tr>
                    <td style="width:20%">행 갯수</td>
                    <td>
                        <select name="row" class="w3-select">
                        <!--name이라는값인 변수명에 값을 담아 전송함-->
                            <? for($i=1; $i<=10; $i++) { ?>
                                <option value="<? echo $i; ?>"><? echo $i; ?></option>
                                <!--echo 대신 =-->
                            <? } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width:20%">열 갯수</td>
                    <td>
                        <select name="col" class="w3-select">
                            <? for($i=1; $i<=10; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                             } 
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="w3-center w3-margin"><button type="submit" class="w3-button w3-teal">확인</button></div>
        </form>
    </section>
</body>
</html>