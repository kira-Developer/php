<?php


/*
  fopen(filename,mode,include_path,context)
  fread(Handle ,length)
  fwrite(handle , string , length)
  fseek(handle , offset whence) => SEEK_SET , SEEK_CUR , SEEK_END
  fclose(handle)
  Modes:

  r:Read Only Starting From Beginning Of The File [File Must Be Exist ]
  ٌr+: Read & Write Staring From Beginning Of The File [File Must Be Exist ]
  w: Write Only [Open & Clear The Content] + [Create The file If Not Exist ]
  w+: Write & ٌٌRead [Open & Clear The Content] + [Create The file If Not Exist ]
  a: Write Only [Open & Write To The End Of file] + [Create The file If Not Exist ]
  a+: Write & Read [Open & Write To The End Of file] + [Create The file If Not Exist ]
  x: Write Only [Create A New file ] + [file Must Not Be Exist Or Give Error ]
  x+: Write & Read [Create A New file ] + [file Must Not Be Exist Or Give Error ]

  
  
*/
$file ='ys.txt';

$Open = fopen($file, 'r+');
 
 $Read = fread($Open, filesize($file));


 echo  $Read;
 fseek($Open, '11');

fwrite($Open, 'I');



