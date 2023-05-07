# 2023 졸업작품 프로젝트⚡

## 웹사이트 TO DO LIST! 

### 작품의 필요성
- 일의 우선순위를 설정함으로 시간 관리 능력 개선
- 체크박스를 통한 성취감 향상
- 누구나 쓸 수 있는 직관적인 기능

---------------------------------------------------------------------------------------------------------------------


### **👪팀원**  

 - 이소현
 - 김예진


---
### ✔개발 환경

- VIsual Studio Code 
   - HTML
   - JavaScript
   - PHP
- DB server
   - MySQL
---
###  📃블럭도 설명
<center>
     <img src=https://user-images.githubusercontent.com/105187744/236647252-92aa792e-2d2f-4c93-83e9-f820404483bf.PNG>
</center>

- MySQL을 사용하여 DB에 회원가입 정보를 저장
- 투두리스트 목록에 D-DAY 기능 추가

- 현재 진행된 기능: 회원가입, 로그인, 투두리스트 작성 및 삭제
- 이후 진행 예정 기능: D-DAY 알림 기능, 계정탈퇴기능여부 고민중
---
###  📃코드 설명
 

 > 코드

```php
$sql2 = "INSERT INTO users(id, user_name, password, name) VALUES(2, '$uname', '$pass', '$name')";
$result2 = mysqli_query($conn, $sql2);
```
- 회원가입(임시코드)
###  📞구동화면

 >  WEB 회면
   
<center>
     <img src="https://user-images.githubusercontent.com/105187744/236647880-9b308bd3-f8bf-4d6a-b343-9ac0379cbcff.PNG">
</center>

- 투두리스트 첫 메인화면 

 
<center>
     <img src="https://user-images.githubusercontent.com/105187744/236648162-d13a711d-9695-4357-9f14-8b116e0fd811.PNG">
</center>

- 투두리스트 회원가입 화면 


<center>
     <img src="https://user-images.githubusercontent.com/105187744/236648275-8f5042ff-c18f-4684-89b9-b6ccb476061f.PNG">
</center>

- 로그인 성공 화면

<center>
     <img src="https://user-images.githubusercontent.com/105187744/236648272-1643d1ba-be5e-4027-a583-779107ed22e9.PNG">
</center>
- 투두리스트 로그인 후 mytodolist 화면 


<center>
     <img src="https://user-images.githubusercontent.com/105187744/236648275-8f5042ff-c18f-4684-89b9-b6ccb476061f.PNG">
</center>
- 투두리스트 할 일 추가시 화면 


Link : [TODOLIST](http://211.206.178.184:1880/ui/#!/0?socketid=9dEfMAmUUc7OH-74AAAN, "GO TO MY TODOLIST link")     
> 임시링크 아무것도 없음
---


###  📟서버 

> DB서버 사용할 예정 .php 파일 사용

- 회원가입을 실행한 경우 MySQL workbench에 저장되는 정보
- 비밀번호의 경우 암호화 하여 저장 <md5()함수 사용>

<center>
     <img src="https://user-images.githubusercontent.com/105187744/236684508-32566245-b52d-4ea2-b20d-5a8cda73bd1e.PNG">
</center>
- 사용자의 이름, 사용자의 번호, ID, password 저장


- Raspberry PI 내부에서 MySQL을 사용하여 DB의 저장된 내용을 터미널로 확인

- 사진 추가 
---
###  🎥구동 영상 


Link : 

---

참고 자료 및 사이트
