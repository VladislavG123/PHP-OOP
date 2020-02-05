<?php

class Tag
{
    private $name;
    private $attrs;
    private $isSelfClosing;
    private $body;

    function __construct(string $name, array $attrs = [])
    {
        $this->attrs = $attrs;
        $this->name = $name;
        $this->isSelfClosing = false;
        $this->body = "";
    }

    function selfClosing()
    {
        $this->isSelfClosing = true;
    }

    function getString()
    {
        $result = "<$this->name";

        foreach($this->attrs as $key => $value){
            if(!is_null($value))
                $result .= " $key=\"$value\"";
            else
                $result .= " $key ";
        }

        $result .=  $this->isSelfClosing ? " />" : ">$this->body</$this->name>";

        return $result;
    }

    function prependBody($body){
        $this->body = $body . $this->body;
    }

    function appendBody($body){
        $this->body .= $body;
    }

    function addAttribute($key, $value = null)
    {
        $this->attrs[$key] = $value;
    }

    function addAttributes($attrs)
    {
        foreach($attrs as $key => $value)
            $this->addAttribute($key, $value);
    }
}