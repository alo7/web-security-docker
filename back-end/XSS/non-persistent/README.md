### 反射型XSS

启动命令:

```shell
cd ./back-end/XSS/non-persistent
docker-compose up --force-recreate
```

打开浏览器，访问: [http://127.0.0.1:8082](http://127.0.0.1:8082)

尝试把url改为下面这样:
* `http://127.0.0.1:8082/?bg=123' onclick='alert(1)`
