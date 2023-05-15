# 2023 졸업작품 프로젝트⚡

## 📝MT TODO!📌

### 작품의 필요성
- 일의 우선순위를 설정함으로 시간 관리 능력 개선
- 누구나 쓸 수 있는 직관적인 기능
- 할 일을 적고, 해결함으로서 성취도 향상

---------------------------------------------------------------------------------------------------------------------


### **👪팀원**  

 - 이소현
 - 김예진


---
### 🔧개발 환경

- VIsual Studio Code 
   - HTML
   - JavaScript
   - PHP
- DB server
   - MySQL
   - Maria DB
---
###  📃블럭도 설명
<center>
     <img src=https://github.com/yejinnnnnn/graduation_project/assets/105187744/68ce0e95-f202-4f6e-a61a-541d3bc061e0>
</center>

- MySQL을 사용하여 DB에 회원가입 정보를 저장
---
###  📘코드 설명
 

 > 코드

```php
	$sname= "121.186.228.127:3306";
	$uname= "root";	
	$password="0000";
	$db_name = "login";

	$conn = mysqli_connect($sname, $uname, $password, $db_name);
	mysqli_query($conn, 'SET NAMES utf8');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
```
- DB 서버와 연결 코드


###  💻구동화면

 >  WEB 회면
   
<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/02ad292d-5aca-4699-a446-52b79fd2e2c4.PNG">
</center>

- 투두리스트 첫 메인화면 

 
<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/9ae4e4d4-22c6-41b4-8f8f-66981c26cd43.PNG">
</center>

- 투두리스트 회원가입 화면 


<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/f1fa38b3-317e-4839-8f62-02b260812240.PNG">
</center>

- 로그인 성공 화면

<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/df1edbe8-4b96-4120-a37d-411e241abadd.PNG">
</center>
- 투두리스트 로그인 후 mytodolist 화면 


<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/080f5d12-99d3-4824-aedd-b09398072eec.PNG">
</center>
- 투두리스트 할 일 추가시 화면


<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/0c670447-303b-4405-9e14-d7081f4372ea.PNG">
</center>
- 투두리스트 할 일 완료시 화면


<center>
     <img src="https://github.com/yejinnnnnn/graduation_project/assets/105187744/8d595daf-9c9a-400a-8a7f-02f4b871eb10.PNG">
</center>
- 기한이 지난 할 일시 화면


---


###  📟서버 

> DB서버 사용 .php 파일 사용

- 회원가입을 실행한 경우 MySQL workbench에 저장되는 정보
- 비밀번호의 경우 암호화 하여 저장 <md5()함수 사용>

<center>
     <img src="https://user-images.githubusercontent.com/105187744/236686546-d59a8419-921d-4ea5-85c7-4844a0d723a7.PNG">
</center>
- 사용자의 이름, 사용자의 번호, ID, password 저장


<center>
     <img src="https://user-images.githubusercontent.com/105187744/236686646-bdfcd016-48c0-4037-82c4-2eea02a31c5c.PNG">
</center>
- Raspberry PI 내부에서 MySQL을 사용하여 DB의 저장된 내용을 터미널로 확인
 
---
###  🎥구동 영상 

Link : [MY TODO](https://youtu.be/aXOt62TffUs, "GO TO MY TODOLIST link")

---
### ❗보완

※휴대성이 좋은 휴대폰에서도 사용할 수 있도록 WEB뿐만 아니라 APP으로도 만들 수 있도록 보완

---
참고 자료 및 사이트
