<?php
echo '1';
   // connect to mongodb
   $m = new MongoClient();
echo '2';   // select a database
   $db = $m->dealhunter;
   echo '3';
   $collection = $db->admin;
 ?>