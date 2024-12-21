---
title: Obsidian Web
excerpt: 옵시디언에서 작성된 마크다운 파일을 Laravel 을 이용해서 웹사이트를 만드는 방법을 소개한다.
category: 기본세팅
date: 2024-12-21
draft: false
---
## Synology NAS 작업순서

Synology NAS 에서 Container Manager 를 이용해서 Laravel 컨테이너를 만들고 웹서버를 설정하고 Prezet 를 추가하는 방법을 소개한다.

### 1. Container Manager 설정하기

1. 레지스트리 > bitnami/laravel 다운로드

![Pasted image 20241220233933.png](Pasted%20image%2020241220233933.png)

2. 원하는 이미지 버전 선택   
   ![Pasted image 20241220234337.png](Pasted%20image%2020241220234337.png)
latest 버전은 가능하면 설치하지 않는다. 특정 버전을 설치하자.

이미지 버전 : **bitnami/laravel 11.5.0**

3. 컨테이너 생성하기
   
   ![Pasted image 20241221135230.png](Pasted%20image%2020241221135230.png)
4. 볼륨 설정하기
     
      ![Pasted image 20241221135403.png](Pasted%20image%2020241221135403.png)

폴더추가
/app 와 매핑함.

5. 컨테이너 생성됨
   
   ![Pasted image 20241221135805.png](Pasted%20image%2020241221135805.png)


### 2. Web Station 웹서버 설정하기

1. 웹 사이트 만들기
   ![Pasted image 20241221135935.png](Pasted%20image%2020241221135935.png)
웹 서비스 포털을 선택함.

2. 사이트 설정하기
   
   ![Pasted image 20241221140045.png](Pasted%20image%2020241221140045.png)

3. 사이트 연결확인 - 에러발생
   
      ![Pasted image 20241221141450.png](Pasted%20image%2020241221141450.png)

4. DB 연결 설정하기 - 환경설정
   
   컨테이너 중지하고 세부 사항을 열어서 다음을 추가한다. mysql 에 db가 이미 만들어져 있어야 한다.
      ![Pasted image 20241221132223.png](Pasted%20image%2020241221132223.png)

DB_HOST=192.168.11.201
DB_PORT=3306
DB_DATABASE=obsidian
DB_USERNAME=obsidian
DB_PASSWORD=prezet@760638!O

컨테이너 시작하고 다시 접속해 보자.

![Pasted image 20241221141938.png](Pasted%20image%2020241221141938.png)



## 3. Prezet 추가하기

1. 컨테이너에서 터미널 열기
   
   ![Pasted image 20241221142233.png](Pasted%20image%2020241221142233.png)

2. prezet 추가하기

```bash
composer require benbjurstrom/prezet
```

```bash
php artisan prezet:install
```


4. resources/views/vendor/prezet/components/template.blade.php
   
   헤더에 다음을 추가해야 함.
```html
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
```

5. routes/prezet.php

```php
Route::get('/', IndexController::class)
   ->name('prezet.index');
   
Route::get('/{slug}', ShowController::class)
   ->name('prezet.show')
```

6. https://obsidian.yaver.com/ 접속해보기

7. 목록 업데이트
   
```bash
   php artisan prezet:index
```

혹시 다음과 에러가 발생할 수 있다.
```
Database file at path [obsidian] does not exist. Ensure this is an absolute pat h to the database. (Connection: sqlite, SQL: update "cache_locks" set "owner" = k G0tu9XdZraujWU8, "expiration" = 1734761861 where "key" = prezet-update-index and ("owner" = kG0tu9XdZraujWU8 or "expiration" <= 1734761851)) at vendor/laravel/framework/src/Illuminate/Database/Connection.php:825
```

## 작업 방법에 대한 내용이다.

동일한 프로젝트를 vscode 에서 세팅하고 문서 작업은 Obsidian 에서 한다. 문서 작업이 모두 끝나면 vscode 에서 php artisan prezet:index 로 목록을 업데이트 하고 서버에 업데이트 된 문서와 prezet.sqlite 를 덮어 쓴다.

SUMMARY.md 파일도 업데이트 했다면 이것도 업로드 해주면 된다.

**즉..모든 작업은 로컬에서 하고 서버에 파일을 업로드 해주면 된다.**

