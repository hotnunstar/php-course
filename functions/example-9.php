<?php

$hierarchy = array(

    array(
        'position_name' => 'CEO',
        'employees' => array(
            array(
                'position_name' => 'Commercial Director',
                'employees' => array(
                    array(
                        'position_name' => 'Sales Manager',
                    ),
                ),
            ),
            array(
                'position_name' => 'Financial Director',
                'employees' => array(
                    array(
                        'position_name' => 'Account Manager',
                        'employees' => array(
                            array(
                                'position_name' => 'Account Supervisor',
                            ),
                        ),
                    ),
                    array(
                        'position_name' => 'Purchase Manager',
                        'employees' => array(
                            array(
                                'position_name' => 'Stock Supervisor',
                            ),
                        ),
                    ),
                ),
            ),
        )
    )
);


function show($positions){
    $html = '<ul>';

    foreach ($positions as $position) {
        $html .= '<li>';

        $html .= $position['position_name'];

        if(isset($position['employees']) && count($position['employees']) > 0) $html .= show($position['employees']);

        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}

echo show($hierarchy);

?>