---
title: Route 세팅하기
excerpt: prezet 링크를 root 로 변경하기
slug: Route 세팅하기
date: 2024-12-20
category: Prezet
image: /prezet/img/ogimages/route.webp
---

routes/prezet.php

```php
Route::get('/', IndexController::class)
->name('prezet.index');

Route::get('/{slug}', ShowController::class)
->name('prezet.show')
->where('slug', '.*');
```

