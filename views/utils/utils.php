<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 24/09/2018
 * Time: 01:10
 * @param $data
 */

function chartJs($data){

    $count = count($data);
    $value = "";
    $label = "";
    $couleur = "";
    $text = "";
    for($i = 0; $i < $count; $i++){
        if($i == 0){
            $value = " ". $data[$i]['value'];
        }else{
            $value .= ", ". $data[$i]['value'];
        }
    }

    for($i = 0; $i < $count; $i++){
        if($i == 0){
            $label = "\"". $data[$i]['label'] ."\"";
        }else{
            $label .= ", \"". $data[$i]['label'] ."\"";
        }
    }

    for($i = 0; $i < $count; $i++){
        if($i == 0){
            $couleur = "\"". $data[$i]['couleur'] ."\"";
        }else{
            $couleur .= ", \"". $data[$i]['couleur']. "\"";
        }
    }

    for($i = 0; $i < $count; $i++){
        if($i == 0){
            $text = "\"". $data[$i]['text'] ."\"";
        }else{
            $text .= ", \"". $data[$i]['text']. "\"";
        }
    }

    echo "test.data.labels = Array($label);";

    echo "test.data.datasets[0].backgroundColor = Array($couleur);";

    echo "test.data.datasets[0].data = Array($value);";

    echo "test.data.datasets[0].label = Array($text);";
}