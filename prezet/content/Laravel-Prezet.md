---
title: Laravel-Prezet
excerpt: 옵시디언에서 작성된 마크다운 파일을 Laravel 을 이용해서 웹사이트를 만드는 방법을 소개한다.
category: 기본세팅
date: 2024-12-21
draft: false
image: /prezet/img/ogimages/laravel-prezet.webp
tags: [prezet]
---

## Prezet Package 추가하기

Laravel 에 Prezet 패키지를 설치한다.

[https://prezet.com/](https://prezet.com/)

### 1. 컨테이너에서 터미널 열기

컨테이너에서 터미널 열기를 클릭한다.
   ![Pasted image 20241221142233.png](Pasted%20image%2020241221142233.png)
### 2. prezet 추가하기

```bash
composer require benbjurstrom/prezet
```

```bash
php artisan prezet:install
```


### 3. Meta 태그 추가

template.blade.php 의 경로
```php
resources/views/vendor/prezet/components/template.blade.php
```

헤더에 다음을 추가해야 함.
```html
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
```

### 4. 라우터 수정

기본 URL : www.example.com/perzet

기본 URL 을 root 경로로 변경한다. 필요에 따라서 별도 경로를 만들어서 사용하면 된다.

routes/prezet.php
```php
Route::get('/', IndexController::class)
   ->name('prezet.index');
   
Route::get('/{slug}', ShowController::class)
   ->name('prezet.show')
```

### 5. 웹사이트 접속해보기

[https://obsidian.yaver.com](https://obsidian.yaver.com)


### 6. 목록 업데이트
   
```bash
   php artisan prezet:index
```

**혹시 다음과 에러가 발생할 수 있다.**
```php
Database file at path [obsidian] does not exist. 
Ensure this is an absolute pat h to the database. 
(Connection: sqlite, SQL: update "cache_locks" set "owner" = k G0tu9XdZraujWU8, "expiration" = 1734761861 where "key" = prezet-update-index and ("owner" = kG0tu9XdZraujWU8 or "expiration" <= 1734761851)) at vendor/laravel/framework/src/Illuminate/Database/Connection.php:825
```

## 작업 방법에 대한 내용이다.

동일한 프로젝트를 vscode 에서 세팅하고 문서 작업은 Obsidian 에서 한다. 

문서 작업이 모두 끝나면 vscode 에서 php artisan prezet:index 로 목록을 업데이트 하고 서버에 업데이트 된 문서와 prezet.sqlite 를 덮어 쓴다.

SUMMARY.md 파일도 업데이트 했다면 이것도 업로드 해주면 된다.
public/prezet_sitemap.xml 파일도 업데이트.


**즉..모든 작업은 로컬에서 하고 서버에 파일을 업로드 해주면 된다.**

