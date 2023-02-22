<?php
namespace Analistics\Customers\Commom\Contracts;

interface SerializerInterface{
     function serializer();
     function deserializer($thisObjectSerializer);
}
?>