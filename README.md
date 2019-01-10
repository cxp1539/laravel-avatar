# laravel-avatar
根据第一个字符或者汉字生成头像的laravel扩展包

## 基本使用
1. app.php 添加 providers
```php
Cxp\Avatar\AvatarProvider::class,
```
2. app.php 添加 aliases
```php
'Avatar' => Cxp\Avatar\Facades\Avatar::class
```
3 开始使用
```php
// 第一个参数姓名，第二个参数图片生成位置
Avatar::output('赵','zhao.png')
```
