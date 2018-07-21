<?php 
// PHP 파일 이름을 뺀 절대 서버 경로
$file_server_path = realpath(__FILE__);
// 파일이 위치해있는 디렉토리 경로
$server_path = str_replace(basename(__FILE__), "", $file_server_path);

// 기본 설정
require_once('./config.inc.php');
 ?>