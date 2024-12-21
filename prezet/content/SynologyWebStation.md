---
title: Synology WebStation
excerpt: 옵시디언에서 작성된 마크다운 파일을 Laravel 을 이용해서 웹사이트를 만드는 방법을 소개한다.
category: "\b기본세팅"
date: 2024-12-21
draft: false
---
## Web Station 웹서버 설정하기

Synology NAS 에서 Container Manager 에 다운로드 한 Bitnami/Laravel 이미지를 선택하고, 웹 서비스 포털를 선택하고, 웹서버를 설정한다.

### 1. 포털 유형 선택
   ![Pasted image 20241221135935.png](Pasted%20image%2020241221135935.png)
웹 서비스 포털을 선택함.

### 2. 웹 서비스 포털 설정 (웹사이트 설정)
   
   ![Pasted image 20241221140045.png](Pasted%20image%2020241221140045.png)

### 3. 사이트 연결확인 (에러발생)
   
![Pasted image 20241221141450.png](Pasted%20image%2020241221141450.png)


### 4. DB 연결 설정하기 (환경설정)
   
   컨테이너 중지하고 세부 사항을 열어서 다음을 추가한다. mysql db가 이미 만들어져 있어야 한다.
      ![Pasted image 20241221132223.png](Pasted%20image%2020241221132223.png)

DB_HOST=192.168.11.201
DB_PORT=3306
DB_DATABASE=obsidian
DB_USERNAME=obsidian
DB_PASSWORD=

컨테이너 시작하고 다시 접속해 보자.

![Pasted image 20241221141938.png](Pasted%20image%2020241221141938.png)