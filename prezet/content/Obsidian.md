---
title: 옵시디언 Blog 만들기
slug: 옵시디언 Blog 만들기
excerpt: 옵시디언에서 작성된 마크다운 파일을 Laravel 을 이용해서 웹사이트를 만드는 방법을 소개한다.
date: 2024-12-20
draft: false
category: Obsidian
tags:
  - obsidian
image: /prezet/img/ogimages/obsidian.webp
---

> 옵시디언에서 작성된 마크다운 파일을 Laravel 을 이용해서 웹사이트를 만드는 방법을 소개한다.

```html +parse
<x-prezet::alert
    type="warning"
    title="Synology NAS"
    body="고정IP 가 물려진 Synology NAS 를 서비스한다. (사무실에서 서비스중..)"
/>
```

문서는 Obsidian 을 이용하고, 파일 Indexing 과 OGimage 는 VScode 를 이용해서 업데이트 한다. 수정된 내용은 Synology 서버에 업로드 하면 된다.
## Obsidian

[https://obsidian.md/](https://obsidian.md/)

![https://obsidian.md/images/screenshot-1.0-hero-combo.png](https://obsidian.md/images/screenshot-1.0-hero-combo.png)

> 당신의 생각은 당신의 것입니다.

> Obsidian은 귀하의 기기에 메모를 저장하므로 오프라인에서도 빠르게 액세스할 수 있습니다. 다른 사람은 아무도, 심지어 우리도 읽을 수 없습니다.
당신의 마음은 독특합니다.

> 수천 개의 플러그인 과 테마를 이용하면 Obsidian을 당신의 생각에 맞춰 꾸밀 수 있습니다.
여러분의 지식은 오래 지속되어야 합니다.

> Obsidian은 독점적이지 않고 개방된 파일을 사용하므로 결코 갇히지 않고 장기간 데이터를 보존할 수 있습니다.



## Markdown Blogging for Laravel
[PREZET](https://prezet.com/)

> PREZET 은 마크다운으로 작성된 파일을 라라벨 패키지를 이용해서 웹사이트에서 퍼블리쉬 해준다.