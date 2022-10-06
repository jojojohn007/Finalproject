<?php
if(isset($_GET['calltype'])){

$calltype=$_GET['calltype'];


switch($calltype){
case 'programme1':
    echo json_encode(array(
        'status' => 'succes',
        'title' => 'video1',
        'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
        'url' => 'c-5-sec1/'.$calltype.'.php',
        'data' => 'loaded',
       'location'=>'c-5-sec1/'.$calltype.'.php'
    
    ));
    case 'programme2':
        echo json_encode(array(
            'status' => 'succes',
            'title' => 'video1',
            'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
            'url' => 'c-5-sec1/'.$calltype.'.php',
            'data' => 'loaded',
           'location'=>'c-5-sec1/'.$calltype.'.php' 
         
        ));
        break ;
        case 'programme3':
            echo json_encode(array(
                'status' => 'succes',
                'title' => 'video1',
                'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                'url' => 'c-5-sec1/'.$calltype.'.php',
                'data' => 'loaded',
               'location'=>'c-5-sec1/'.$calltype.'.php'
            
            ));
            break ;
            case 'programme4':
                echo json_encode(array(
                    'status' => 'succes',
                    'title' => 'video1',
                    'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                    'url' => 'c-5-sec1/'.$calltype.'.php',
                    'data' => 'loaded',
                   'location'=>'c-5-sec1/'.$calltype.'.php'
                
                ));
                break ;
                case 'programme5':
                    echo json_encode(array(
                        'status' => 'succes',
                        'title' => 'video1',
                        'description' => 'Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic',
                        'url' => 'c-5-sec1/'.$calltype.'.php',
                        'data' => 'loaded',
                       'location'=>'c-5-sec1/'.$calltype.'.php'
                    
                    ));
                    break ;


} ;




}

?>