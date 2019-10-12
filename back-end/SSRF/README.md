### SSRF

启动命令:

```shell
cd ./back-end/SSRF
docker-compose up --build --force-recreate
```

打开浏览器，访问: [http://127.0.0.1:8087](http://127.0.0.1:8087)

先在输入框里输入 `https://www.baidu.com/`，看看是否可以拿到百度首页的 `HTML` 源码。

现在再在输入框里输入 `http://inner-web`，看看能不能访问到内网资源吧

> `inner-web` 是 `docker-compose` 在启动 `docker` 时 `link` 的作用，在 `docker` 容器的 `hosts`，会加上 `内网ip inner-web`
> 关于 `link` 的更多介绍，可见: [关于对docker run --link的理解](https://www.jianshu.com/p/21d66ca6115e)、[Legacy container links](https://docs.docker.com/network/links/)

那除了可以访问内网的 `http[s]`，还有什么呢？

答案是，如果网站的代码或者过滤没有写好的话，是支持 `ftp`、`file` 等协议的。

现在，再在输入框里输入: `file:///etc/passwd`，来进行尝试吧。