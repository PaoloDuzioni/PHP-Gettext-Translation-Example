# PHP GETTEXT LIBRARY INTEGRATION DEMO

*Version: 1.0.0*  
*Author: Paolo Duzioni*

Fast demo with php-gettext library integration for string translation in a multilingual web page end some minor utilities made by me:

- get string translation and return it as value: `<?php $text = __("string"); ?>`
- get string translation and print it: `<p><?php _e("string"); ?></p>`
- constant `CURRENT_LANG` to detect the current language, for ex: `'en_EN'`.
