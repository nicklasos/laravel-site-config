# Laravel SiteConfig

Multi-site config with single codebase.

```php

// config/design.php
return [
    'menu' => 'horizontal',
    'images' => 'round',
];

// config/sites/fake-news/design.php
return [
    'menu' => 'vertical',
];

// config/sites/new-blog/design.php
return [
    'images' => 'square',
];


// with SITE=fake-news in .env
echo site_config('design.menu'); // vertical
echo site_config('design.images'); // round

// with SITE=new-blog in .env
echo site_config('design.menu'); // horizontal
echo site_config('design.images'); // square
```
