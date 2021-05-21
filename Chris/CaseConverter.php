<?php

namespace Chris;

class CaseConverter
{
    private string $inputStr;

    public function __construct(string $inputStr)
    {
        $this->inputStr = $inputStr;
    }

    public function camelToSnake(): string
    {
        $str = lcfirst($this->inputStr);
        $result = '';
        
        for ($i = 0; $i < strlen($str); $i++) {
        
            $ascii = ord($str[$i]);
            
            if ($ascii >= 65 && $ascii <= 90) {
               $result .= '_' . strtolower($str[$i]);
            } else {
                $result .= $str[$i];
            }
        }
    
        return $result;
    }

    public function snakeToCamel(): string
    {
        $arr = explode('_', $this->inputStr);
        $result = array_shift($arr);
    
        foreach ($arr as $words) {
            $result .= ucfirst($words);
        }
    
        return $result;
    }
}