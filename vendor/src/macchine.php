<?php



function macchine() {

    return [
        'marche' => ['BMW', 'Audi', 'Nissan', 'Toyota', 'Mazda', 'Land Rover', 'Jeep', 'Suzuki'],
        'modelli' => [
            'BMW' => ['x3', 'x5'],
            'Audi' => ['A3', 'A4', 'A6'],
            'Nissan' => ['X-Trail', 'Qashqai', 'Micra', 'Juke'],
            'Toyota' => ['Rav4', 'Corolla', 'Prius'],
            'Mazda' => ['5', '3', '6'],
            'Land Rover' => ['Defender', 'Outlander', 'Discovery'],
            'Jeep' => ['Compass', 'Cherokee', 'Renegade', 'Wrangler'],
            'Suzuki' => ['Jimny', 'Vitara', 'Samurai'],
        ],
        'carburante' => ['benzina', 'gasolio', 'metano', 'elettrico', 'gpl'],

    ];
}



function macchine_1() {

    return [
        array(
            'id' => 0,
            'marca' => 'Peugeot',
            'modello' => '208',
            'carburante' => 'benz',
            'km' => '120000',
            'targa' => '123abc',
        ),
        array(
            'id' => 1,
            'marca' => 'Mazda',
            'modello' => '5',
            'carburante' => 'gasolio',
            'km' => '50000',
            'targa' => '432mkj',
        ),
        array(
            'id' => 2,
            'marca' => 'Nissan',
            'modello' => 'X-Trail',
            'carburante' => 'gasolio',
            'km' => '24000',
            'targa' => '298hsj',
        ),
        array(
            'id' => 3,
            'marca' => 'Mazda',
            'modello' => '5',
            'carburante' => 'gasolio',
            'km' => '50000',
            'targa' => '432mkj',
        ),
    ];
}




