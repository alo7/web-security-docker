### CSRF

启动命令:

```shell
cd ./back-end/JSON\ Hijacking
docker-compose up --build --force-recreate
```

打开浏览器，访问: [http://127.0.0.1:8089](http://127.0.0.1:8089)

使用账号 `william` 和密码 `000000` 进行登陆。

登陆成功后，再打开 [http://127.0.0.1:8089](http://127.0.0.1:8089)

现在去看看 `/back-end/JSON\ Hijacking/hacker_web/info.txt` 文件里的内容吧