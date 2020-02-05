<?php

include_once "Models/Tag.php";

$tag = new Tag("a", [
   // "type" => "text"
]);

$tag->addAttribute("style", "color: red;");

$tag->addAttributes(["href" => "https://google.com"]);

//$tag->selfClosing();

$tag->prependBody("Hello");
$tag->appendBody(" world");

echo $tag->getString();


