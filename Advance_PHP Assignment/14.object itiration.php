<!--14.write a php script of object itiration-->
<?php

class person
{
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }
}
$person = new person("amrin");
foreach($person as $key =>$value)
{
    echo "$key: $value";

}
?>