#!/opt/homebrew/bin/php
<?php
echo preg_replace('/\n|\r|\r\n/', ' ', getenv('POPCLIP_TEXT'))
?>