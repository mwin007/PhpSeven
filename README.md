PhpSeven Magento Extension
===
Compatibility module to get Magento 1.9.* working with >= PHP 7.0.0 RC 6. PHP7.  
This just overrides a core file using a class rewrite to avoid core file patching.  

Fixes PHP7 syntax error.  
Fixes product gallery image uploader in Magento admin.


Installation
---

A few install options:

* Install manually, [download here](https://github.com/MageMechanic/PhpSeven/archive/1.0.2.zip)

* Install with modman: 
```bash
modman clone https://github.com/MageMechanic/PhpSeven.git --branch 1.0.2
```
* Install with composer:
```bash
composer config repositories.magemechanic git https://github.com/MageMechanic/PhpSeven.git
composer require "magemechanic/phpseven:1.0.2"
```

References
---
http://afilina.com/magento-1-9-on-php7/  
http://www.bubblecode.net/en/2015/07/24/magento-php-7/  
http://magento.stackexchange.com/questions/74008/is-magento-ready-for-php-7#answer-80912  
http://www.code007.ro/making-work-magento-with-php-7-rc1/  

License
---
MIT. See LICENSE file.


[MageMechanic.com](http://www.magemechanic.com/)
