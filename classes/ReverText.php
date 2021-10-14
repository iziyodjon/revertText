<?php

namespace Revert;

class ReverText
{

    public function reverText($text){
        // определить тип данных
        $type = gettype($text);

        // Проверка тип данных и после идет процесс revert иначе ошибка
        if($type === 'string'){
            $result = strrev($text);
        }else{
            $result = "Тип параметра должен быть string";
        }

        // Возвращаем результат
        return $result;
    }
}