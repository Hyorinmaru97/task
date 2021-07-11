<?php 
  $data ="((5*(4-2)))";
  if((strpos($data, ")")-strpos($data, "("))>0)
  {
    if((strrpos($data, ")")-strrpos($data, "("))>0)
    {
      $array = count_chars($data, 1);
      if ($array[ord(")")] == $array[ord("(")])
        echo " количество ( ) равно";
      else
        echo "количество ( ) не равно";
    } else
    echo "Выражение некорректно";
  } else
    echo "Выражение некорректно";
?>