# whvcse学生基本信息查询接口

## 该接口数据来源为校内各公开文件
<font color=red>本接口仅供交流学习，切勿用作违法用途；

仅对武软在校师生开放；

请合理使用该接口；

使用即视为有保护个人信息之责任；

请遵守《中华人民共和国网络安全法》
</font>

这个接口跑在1h2g1m云服务器上，做了负载均衡后，哥们儿两台肉鸡4000线程cc攻击压测无异常；

[接口使用指南V2](http://mp.weixin.qq.com/s?__biz=Mzg3NzA5ODYwMg==&mid=2247483742&idx=1&sn=790f742718d3e3ff06f7e156a424e032&chksm=cf29625bf85eeb4dbcf5edbd836312c38de9e2b962b62a1f1743d6c89987324d5f7c6a9d9659&mpshare=1&scene=23&srcid=&sharer_sharetime=1593657175024&sharer_shareid=bd451472098b909c977b4bea5d828a86#rd
). 

### 请求地址：
    URL=https://api.hycloud365.cn:9999/API/stuinfo.php
### 请求方法：
    GET
### 请求参数
参数     | 类型    |  是否必须  | 说明
-------- | -----    | -------- | ------
user  | String  | 必须  | 用户账号
key  | String  |  必须  | 用户密码
name  | String  |  必须  | 查询姓名
year  | String  |  必须  |  目标年级
