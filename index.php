<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $file = 'school.json';
      if(file_exists($file)){
        $filedata = file_get_contents($file);
        $objson = json_decode($filedata, true);
          echo"<hr><code><pre>";
          print_r($objson);
          echo"</pre></code><hr>";
      }
      else echo $file . ' file does not exist';

      echo($objson['school']);
      echo("<br>");
      echo($objson['category']);
      echo("<br>");
      echo($objson['nr_students']);
      echo("<br>");
    ?>

  </body>
</html>
