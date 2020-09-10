<?Php



/*  1. index array
    2. Associative array
    3. Multiple/Multidimentional array */


    //idex array 
    $number = array(1, 2, 3 , 4);
    $a = [1, 2 , 3 , 4];
    
    //Associative array 
    $student =[
        'Name'=>'Badsha',
        'Roll'=> 1,
        'Dpt'=> 'Computer'

    ];
    // echo "<pre>";
    // var_dump($student);
    // echo $student['Name']



    // Multiple/MUltidimentional array
    // $a = [1, [1, 2, 3], 2, [4, 5] , 4];
    // echo $a[3][1];
    $student = [
        'Badsha'=>[
            'dept'=>'Computer',
            'roll'=> 1,
        ],
        'Mahamudul' => [
            'dept' => 'Computer',
            'roll' =>2,
        ],

    ];


    echo $student['Mahamudul']['roll'];




?>