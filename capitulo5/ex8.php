<?php

$file = file('http://www.google.com', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
print_r($file);