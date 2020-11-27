# sy/pwaupdate

Progressive web app update web component

## Installation

Install the latest version with

```bash
$ composer require sy/pwaupdate
```

## Basic Usage

```php
<?php

use Sy\Component\Html\Page;
use Sy\Component\Web\PwaUpdate;

$pwaupdate = new PwaUpdate([
	'swpath' => '/js/mysw.js'
]);

$page = new Page();

$page->addBody($pwaupdate);

echo $page;
```

Output:
```html
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate" crossorigin="anonymous" defer></script>
</head>
<body>
<pwa-update swpath="/js/mysw.js"></pwa-update>
</body>
</html>
```