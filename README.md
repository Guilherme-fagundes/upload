#### Coffeebreaks/upload

<p>This library uploads images and files</p>

##### Instalation
```bash
Composer require coffeebreaks/upload 
```

##### Usage

```php
use coffeebreaks\upload\Upload;

 $upload = new Upload();

 $upload->image('array filter file', 'permissions', 'path to upload');
if ($upload->getResult()){
  //your code ...

}
```