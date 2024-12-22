---
title: Route 세팅하기
excerpt: prezet 링크를 root 로 변경하기
category: Prezet
date: 2024-12-20
image: /prezet/img/ogimages/route.webp
slug: Route 세팅하기
---

routes/prezet.php

```php
Route::get('/', IndexController::class)
->name('prezet.index');

Route::get('/{slug}', ShowController::class)
->name('prezet.show')
->where('slug', '.*');
```

