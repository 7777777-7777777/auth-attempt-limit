Captcha and Login attempts for laravel-admin
======
Add captcha and login attempts for laravel-admin


### Installation

```
composer require 7777777-7777777/auth-attempt-limit
```

### Configuration

In the extensions section of the `config/admin.php` file, add configurations
```
'extensions' => [
     'auth-attempt-limit' => [
         // set to false if you want to disable this extension
         'enable' => true,
         
         // configuration
         'maxAttempts'  => 5,
         'decayMinutes' => 1,
    ]
]
```

In the `resources/lang/en(example)/validation.php` file, add configurations
```
'captcha'    => 'The :attribute is invalid.',
'attributes' => [
    'captcha' => 'captcha',
],
```

If you need to modify the captcha configuration, please see [mews/captcha](https://github.com/mewebstudio/captcha)

And in the `config/captcha.php` file, add configurations
```
'admin' => [
    'length'    => 5,
    'width'     => 120,
    'height'    => 36,
    'quality'   => 90,
],
```

### Usage

Open your login page in your browser


### License

Licensed under [The MIT License (MIT)](LICENSE).

