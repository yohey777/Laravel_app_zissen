
<?php
namespace App\MyClasses;


class MyService implements MyServiceIntereface
{
    public function setId(int $id);
    public function say();
    public function allData();
    public function data(int $id);
}

