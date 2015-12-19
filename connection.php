<?php
// the script creates a collection from scratch and inserts the data
$connection = new MongoClient( "mongodb://team8:team8@ds039484.mongolab.com:39484/team8" );
$mongodb = $connection->selectDB('team8');
$collection = new MongoCollection($mongodb,'new');
var_dump($connection);
var_dump($collection);
$collection->insert(array("username"=>"carlos", "password"=>"%12345"));
echo "data inserted\n";
/*$cursor = $collection->find(array("username"=>"carlos"));
echo "find results:\n";
foreach ($cursor as $doc)
{
  var_dump($doc);
}
http://howtoubuntu.org/how-to-install-lamp-on-ubuntu
http://howtoubuntu.org/how-to-install-lamp-on-ubuntu
*/

?>