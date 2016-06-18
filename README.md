SmartString
===========
###Installation
Using Composer:
```sh
composer require pataar/smartstring
```
###Usage
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
After creating your SmartString, you can use several chainable methods to manipulate the string.

Some examples:
```php
$sampletext = "Sample String";

echo SmartString::create($sampletext)->remove("String")->trim();
//which would echo "Sample"

echo SmartString::create($sampletext)->prefix("A new")->normalize();
//which would echo "a-new-sample-string"

echo SmartString::create($sampletext)->toMd5WithSalt("Salting is good");
//which would echo "560fbd0056c4354c5dd0de0580c8c523"

echo SmartString::create($sampletext)->remove("String")->trim()->toLower()->prefix("String ");
//which would echo "String sample"
```

###Functions
####toUpper()
Creates an uppercase version of the string.

```php
$smartString->toUpper();
```
####toLower()
Creates an lowercase version of the string.

```php
$smartString->toLower();
```

####Trim()
Trims the string. So removes any trailing whitespaces and spaces.

```php
$smartString->trim();
```
####printme()
Prints the string.

```php
$smartString->printme();
```
####indexOf($input)
Returns the index of a certain $input string.

```php
$smartString->indexOf($input);
```
####substring($start, $length)
Creates a substring of an existing string.

```php
$smartString->substring($start, $length);
```
####toMd5()
Creates an MD5 hash of the string.

```php
$smartString->toMd5();
```
####toMd5WithSalt($salt)
Creates an salted MD5 hash of the string. Using both a prefix and suffix containing the given `$salt`.

```php
$smartString->toMd5WithSalt($salt);
```
####encodeB64() || decodeB64()
Encodes or decodes a B64 string.

```php
$smartString->encodeB64();
$smartString->decodeB64();
```
####charAt($index)
Tells you on which index a certain character is placed.
```php
$smartString->charAt($index);
```

####equals($string)
Returns when the $string matches the $smartString.
```php
$smartString->equals($string);
```

####prefix($prefix)
Adds a $prefix to the string.
```php
$smartString->prefix($prefix);
```

####suffix($suffix)
Adds a $suffix to the string.
```php
$smartString->suffix($suffix);
```

####concat($string)
Concats a string.
```php
$smartString->concat($string);
```

####replace($search, $replacement)
Replace a string with an other string.
```php
$smartString->replace($search, $replacement);
```

####replacePattern($pattern, $replacement)
Replaces a pattern.
```php
$smartString->replacePattern($pattern, $replacement);
```

####remove($string)
Remove a string
```php
$smartString->remove($string);
```

####length()
Returns the length of the string.
```php
$smartString->length();
```

####normalize()
Normalizes the string. Making it URL/slug compatible.
```php
$smartString->normalize();
```

