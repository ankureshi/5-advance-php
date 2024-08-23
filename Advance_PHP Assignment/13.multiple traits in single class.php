<!--13.create multiple traits and use it in a single class-->
<?php
trait a
{
    public function display()
    {
        echo "hello"."<br>";
    }
}
trait b
{
    public function display1()
    {
        echo "i m trait ";
    }
}
class c
{
    use a,b;
}
$obj= new c ;
$obj -> display();
$obj -> display1();
?>
