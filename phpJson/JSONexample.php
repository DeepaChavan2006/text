<?php
    $assocObj = array("College"=>"SDM","Code"=>"2SD","Location"=>"Dharwad");
    $Ecode_obj = json_encode(assocObj);
    echo $Ecode_obj;

    echo "JSON object decode format <br/>";
    var_dump(json_decode($Ecode_obj));
    
    echo "encodeded JSON object data <br/>";
    var_dump(json_encode($Ecode_obj));

   
   
    echo "<br/><hr>";
    echo "Multidimensional Array"
    $empdata = array(
            'person' => array(
                  'name' => 'vikas hegde',
                  'age' =>30,
            'address' => array(
                'city' => "Dhavangere",
                'country' => 'india')

            ),
        'company'=> array (
            'name'=>'ABC'
             'designation'=>'project manager'
        )
            
    );
    //convert the multidimensional array  to JSON obj
    $jsonString = json_encode($empdata);

    $D_empdataj = json_decode($jsonString, true);
    var_dump($D_empdataj);

    $D_empdataj['esignation'] ='Tech Lead';
    var_dump($D_empdataj);

    echo "$D_empdataj=>company=>name";
?>