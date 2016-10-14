# laravel 更新日志

*此文档记录了对laravel功能的更新，以作参考*

## 填写示例：

- 更新时间
- 更新操作人 <邮箱>
- 更新插件名称[类型]
- 功能描述
- 环境支持(laravel、php等)
- 安装方法
- 使用示例
- 参考链接

***

## 更新日志正文：

- 2016-10-14 10:35

- 吴睿楠 <Ryansimver@gmail.com>

- Intervention Image [laravel插件]

- PHP图片操作处理库，为图片创建、修改及压缩等处理提供了便捷方式。此外，还提供了服务提供者和门面以便集成到Laravel应用中。

- 环境支持：

  安装Intervention Image之前，需要确保PHP版本>=5.4并且安装了Fileinfo扩展，以及GD库（>=2.0）或者Imagick扩展（>=6.5.7）。

  开启 php fileinfo：

  ​	去除 php.ini 文件中下列代码的注释即可启用 php fileinfo

  ```
  extension=php_fileinfo.dll
  ```

  ​	启用后可在phpinfo()页面查看

- 安装方法：

  我们使用Composer在命令行安装最新版本的Intervention Image：

  ```
  composer require intervention/image
  ```

  安装好Intervention Image后，打开`config/app.php`，注册如下服务提供者到`$providers`数组：

  ```
  Intervention\Image\ImageServiceProvider::class
  ```

  然后添加如下门面到`$aliaes`数组：

  ```
  'Image' => Intervention\Image\Facades\Image::class
  ```

  这样我们就可以在Laravel应用代码中直接使用`Image`了。

  另：

  默认情况下，Intervention Image使用PHP的GD库扩展处理所有图片，如果你想要切换到Imagick，你可以将配置文件拉到应用中：

  ```
  php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5"
  ```

  这样对应的配置文件会被拷贝到`config/image.php`，这样你可以在该配置文件中修改图片处理驱动配置。

- 使用示例：

  ```
  Route::get('/', function(){
      $img = Image::make('foo.jpg')->resize(300, 200);
      return $img->response('jpg');
  });
  ```

- 参考链接

  [laravel 学院关于此插件的方法](http://laravelacademy.org/post/3585.html "在 Laravel 5 中集成 Intervention Image 实现对图片的创建、修改和压缩处理")

  [Intervention Image 官方文档](http://image.intervention.io/ "Intervention Image 官方文档")

***