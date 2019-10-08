### DOM XSS

启动命令:

```shell
cd ./front-end/XSS/DOM-XSS
docker-compose up
```

打开浏览器，访问: [http://127.0.0.1:8081](http://127.0.0.1:8081)

尝试把url改为下面这样:
* `http://127.0.0.1:8081/#javascript:alert(1)`
