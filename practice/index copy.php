<?php 
require_once 'HtmlElement.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php 
$head= new HtmlElement("h1");

$head->id= "name";
$head->class= "text-center border";
// $head->GetAttributes();
echo $head->RenderElement("this is the firstcontent from htmlelement class");

$head= new HtmlElement("p");

$head->id= "paragraph";
$head->class= "text-right border p-3 my-4";
// $head->GetAttributes();
echo $head->RenderElement("this is the firstcontent from paragraph class");

?>




    <h1 class="text-center border" id="head">Content</h1>
</body>
</html>