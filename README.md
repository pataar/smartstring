smartstring
===========
#####Creating a SmartString object
Either do 
```php
SmartString::create("Sample String");
```
Or 
```php
new SmartString("Sample String");
```

#####Using a SmartString object
After creating your SmartString, you can use several chainable methods to manipulate the string

For example; say you want to remove the word "String" of "Sample String"
You could use:
```php
$sampletext = "Sample String";

echo SmartString::create($sampletext)->remove("String").trim();
```
