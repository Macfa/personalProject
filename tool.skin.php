<!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
 
<div class="main">
	<div class="main_section_items">
		<div class="main_section_item">
			<h2>Sublime text 3 sftp 사용하기 in MAC</h2>
			<p>
				개인적으로 제작중이던 파일들을 호스팅 서버에 올리기 위해 
				sftp 기능 을 이용하기로 했다.
			</p>
			<p style="width:800px;">
				이용중인 툴은 sublime text 3<br>
				Command Palette ( Shift + command + p ) 를 실행하고 ( 메뉴바 Tool 안 )<br>
				install package 를 실행<br>
				창이 잠시 닫혔다가 다시 실행 되면<br>
				SFTP 설치
			</p>
			<p style="width:800px;">
				정상적으로 설치가 되었다면 문서가 하나 열릴 것이다 ( 시간이 된다면 읽어보는 것이... )<br>
				서브라임 메인 코드 창 왼쪽에서 업로드 할 폴더를 우측 클릭하여<br>
				SFTP/FTP -> Map to remote<br>
				해당 폴더 안에 sftp-config.json 이란 파일이 생성 되었을 것이다.<br>
				주요 수정 사항은
				host, user, password, port, remote_path<br>
				정도 이다. 앞에 3개는 원하는 정보를 넣으면 되고
				포트는 잘 모르겠다면 주석 상태 그대로 둬도 된다.<br>
				경로 부분인데 이를 잘 모른다면 넘어갔다가 업로드 할떄 나오는 경로로 지정해주면 된다.
			</p>
			<p style="width:800px;">
				파일 수정이 되었다면,
				업로드 할 폴더 우측클릭 -> SFTP/FTP -> Uplaod Forder<br>
				여기에서 path 지정이 틀렸다면 에러가 뜰텐데
				아래 부분에 log 를 보고 원하는 경로를 재지정 해주면 된다.
			</p>
		</div>
	</div>
</div>