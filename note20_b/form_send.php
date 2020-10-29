

<?php
// include "mailer.php";
include_once("./_common.php");

/*$mode = $_REQUEST['mode'];
$name = $_REQUEST['name'];
$hp1 = $_REQUEST['hp1'];
$hp2 = $_REQUEST['hp2'];
$hp3 = $_REQUEST['hp3'];
$hp = $hp1."-".$hp2."-".$hp3;
$email = $_REQUEST['email'];
$areaname = $_REQUEST['areaname'];
$questype = $_REQUEST['questype'];
$content = $_REQUEST['content'];
$ip = $_SERVER['REMOTE_ADDR'];
$wr_name = $_REQUEST['wr_name'];
$wr_1 = $_REQUEST['wr_1'];
$wr_2 = $_REQUEST['wr_2'];
$wr_3 = $_REQUEST['wr_3'];
$wr_5 =  date("Y-m-d");

$subject = "[상담신청] $wr_name";
$body = "";

$body .= "이 름: $wr_name<br>";
$body .= "휴대폰번호: $wr_1<br>";
$body .= "현재통신사: $wr_2<br>";
$body .= "희망기종: $wr_3<br>";

//$admin_email = "받을 메일주소 입력";
$admin_email = "morrie27@naver.com";*/

if($mode == "send") {
/*	//인증번호 체크
	$cp = preg_replace("/[^0-9]/", "", $_POST['wr_3']);
	$cpNum = preg_replace("/[^0-9]/", "", $cp);
	$authNum = trim($_POST['auth_number']);
	$sessAuthNum = get_session("authCp_".$cpNum);
	if ($authNum != $sessAuthNum) {
		alert("인증번호가 올바르지 않습니다.");
	}else{
		set_session("auchCp_".$cpNum,  '');
	}
	//파일첨부 시작
	for($i=1;$i<=3;$i++) {
		$file[$i] = $_FILES['userfile'.$i]['name'];
		$target[$i] = "./temp/".$file[$i];

		if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'], $target[$i])) {
			chmod("$target[$i]", 0777);
		}
	}

	$ret = mailer($name, $email, "Admin", $admin_email, $subject, $body.$body2, $file);

	if($file[1] != "") @unlink($target[1]);
	if($file[2] != "") @unlink($target[2]);
	if($file[3] != "") @unlink($target[3]);




ob_start();

$content = ob_get_contents();
ob_end_clean();*/

$bo_table = "online";
$write_table = $g5['write_prefix'] . $bo_table;

$wr_num = get_next_num($write_table);
$wr_reply = "";

$secret = "secret";

    $sql = " insert into $write_table
                set wr_num = '$wr_num',
                     wr_reply = '$wr_reply',
                     wr_comment = 0,
                     ca_name = '$ca_name',
                     wr_option = '$html,$secret,$mail',
                     wr_subject = '$wr_subject',
                     wr_content = '$wr_content',
                     wr_link1 = '$wr_link1',
                     wr_link2 = '$wr_link2',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '{$member['mb_id']}',
                     wr_password = '$wr_password',
                     wr_name = '$wr_name',
                     wr_email = '$wr_email',
                     wr_homepage = '$wr_homepage',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '$wr_1',
                     wr_2 = '$wr_2',
                     wr_3 = '$wr_3',
                     wr_4 = '$wr_4',
                     wr_5 = '$wr_5',
                     wr_6 = '$wr_6',
                     wr_7 = '$wr_7',
                     wr_8 = '$wr_8',
                     wr_9 = '$wr_9',
                     wr_10 = '$wr_10' ";
    sql_query($sql);

    $wr_id = sql_insert_id();

    // 부모 아이디에 UPDATE
    sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");

    // 새글 INSERT
    sql_query(" insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '{$bo_table}', '{$wr_id}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");

    // 게시글 1 증가
    sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = '{$bo_table}'");
}

?>

<?
//alert("상담이 접수되었습니다.");
?>

<!--<meta http-equiv="refresh" content="0.1;url=success.php">-->
