<!--12.what are php megic method/ functions ?List them. 
write a programfor static keyword in php-->

magic methods::
1. __construct(): 
This is the constructor method that is automatically called when an object of a class is instantiated.

2. __destruct(): 
This method is called automatically when an object is no longer referenced or when the script finishes execution.

3. __toString(): 
This method is called when an object is converted to a string, for example, when using echo or print.

4. __isset($property) and __unset($property): 
   These methods are called when isset() or unset() is used on inaccessible properties of an object, respectively.

<!--program for static keyword in php-->

class a
{
    static public function display()
    {
        $name=" i m static keyword";
        echo $name;
    }
}
a::display()


