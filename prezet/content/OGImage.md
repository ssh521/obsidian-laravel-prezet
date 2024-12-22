---
title: OGImage
excerpt: Open Graph (OG) 오픈 그래프(OG) 이미지는 소셜 미디어 플랫폼에서 콘텐츠가 공유될 때 나타나는 웹 페이지의 시각적 미리보기 입니다.
category: Prezet
date: 2024-12-20
tags: [prezet, laravel, obsidian]
image: /prezet/img/ogimages/ogimage.webp
draft: false
slug: OGImage
---

Open Graph (OG) 오픈 그래프(OG) 이미지는 소셜 미디어 플랫폼에서 콘텐츠가 공유될 때 나타나는 웹 페이지의 시각적 미리보기 입니다.

![https://obsidian.yaver.com/prezet/img/ogimages/obsidian.webp](https://obsidian.yaver.com/prezet/img/ogimages/obsidian.webp)

## OG 이미지 추가하기

frontmatter 에 image 태그 추가 해서 나타낼 수 있다.

## OG 이미지 자동생성

설치패키지 : [puppeteer](https://spatie.be/docs/browsershot/v4/requirements)

```bash
npm install puppeteer
```

### 명령어

모든 파일 적용하기
```bash
php artisan prezet:ogimage --all
```

하나의 파일만 생성하기
```bash
php artisan prezet:ogimage
```

### 미리보기 URL

```html
/prezet/ogimage/{slug}
```

## 이미지 템플릿 수정

ogimage.blade.php

```php
resources/views/vendor/prezet/ogimage.blade.php
```

`OgimageController`

