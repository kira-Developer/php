<?php

/*

file_put_contents(file,data,mode,context)
Mode:
FILE_APPEND
LOCK_EX
FILE_USE_INCLUDE_PATH
*/

file_put_contents('test.txt', "kira", LOCK_EX);

