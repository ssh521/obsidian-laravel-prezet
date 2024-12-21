---
title: Synology Container
excerpt: 옵시디언에서 작성된 마크다운 파일을 Laravel 을 이용해서 웹사이트를 만드는 방법을 소개한다.
category: 기본세팅
date: 2024-12-21
draft: false
tags:
  - obsidian
  - laravel
  - prezet
---
Synology NAS 에서 Container Manager 를 이용해서 Laravel 이미지를 다운로드 하고, Laravel 컨테이너를 만들고 웹서버를 설정한 후 Prezet package 를 추가하는 방법.

### Container Manager 설정하기

- [bitnami/laravel](https://hub.docker.com/r/bitnami/laravel/) 


1. **레지스트리 > bitnami/laravel 다운로드**

![Pasted image 20241220233933.png](Pasted%20image%2020241220233933.png)

2. **원하는 이미지 버전 선택**   
   ![Pasted image 20241220234337.png](Pasted%20image%2020241220234337.png)
latest 버전은 보다는 원하는 특정 버전을 설치하자.

다운로드 이미지 버전 : **bitnami/laravel 11.5.0** 선택했다.

3. **컨테이너 생성하기**
   
   ![Pasted image 20241221135230.png](Pasted%20image%2020241221135230.png)
다운로드된 이미지를 선택하고, 컨테이너 이름을 정한다.


4. **볼륨 설정하기**
   
     
      ![Pasted image 20241221135403.png](Pasted%20image%2020241221135403.png)

+폴더추가 
`/app` 와 매핑함.

선택한 폴더와 컨테이너 폴더의 `/app` 와 매핑된다.


5. **컨테이너 생성됨**
   
   ![Pasted image 20241221135805.png](Pasted%20image%2020241221135805.png)
