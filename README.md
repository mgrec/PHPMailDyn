# PHPMailDyn
PHPMailDyn easy way to dynamise your HTML email


## Usage

### Create a mail template

Create a your html template and place #var.

```html
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>#name #lastname</h1>
<p>#email</p>
</body>
</html>
 ```

Put your template in folder "template/".

### Function dynamise()

Declare an array with your var.

```php
$tab = [
     '#name' => 'John',
     '#lastname' => 'doe',
     '#mail' => 'john.doe@gmail.com'
 ];
 ```

Call function.

```php
 dynamise($file, $tab_var)
 ```

Exemple :

 ```php
 $mail = $class->dynamise('mail.html', $tab);
 ```

 ### Function send()

 Call function.

 send($dest, $object, $content, $name, $sender)

 ```php
 send($dest, $object, $content, $name, $sender)
 ```

 Exemple :

 ```php
 $send = $class->send('maxime.grec@gmail.com', 'Test', $mail, 'John DOE', '')
 ```