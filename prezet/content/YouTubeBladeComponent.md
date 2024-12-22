---
title: YouTube 영상 넣기
excerpt: 유튜브 영상을 마크다운 문서에 삽입하는 방법입니다.
category: Prezet
date: 2024-12-22
tags:
  - prezet
  - youtube
draft: false
image: /prezet/img/ogimages/youtubebladecomponent.webp
---

유튜브 영상을 마크다운 문서에 삽입하는 방법입니다.

## 컴포넌트 태그 삽입하기

<x-prezet::youtube />

prezet/components/youtube.blade.php 에 정의되어 있다.


## 코드 삽입

```html +parse
<x-prezet::youtube videoid="MizxE3Xl_uA" title="가면을 벗고 여행을 떠나자." date="2024-06-29" />
```

위 영상은 아래의 코드를 코드 블록에 넣어서 유튜브 영상을 나타낼 수 있다.

```
```html +parse
<x-prezet::youtube 
  videoid="MizxE3Xl_uA" 
  title="가면을 벗고 여행을 떠나자." 
  date="2024-06-29" />
```

### 필수 입력 속성

- videoid
- title
- date

https://www.youtube.com/watch?v=MizxE3Xl_uA
유튜브 영상 URL 에서 v= 이후의 값을 videoid 로 넣으면 됨.



