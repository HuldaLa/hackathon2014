<?php
namespace Controller;

class Universe {
    function showAll($engine, $template) {
        $place = new \Crud\Place();

        var_dump($place->get(10));
        exit;
    }

    function show($id, $engine, $template) {
        // Dummy data.
        $universe = array(
            'id' => 1,
            'name' => 'Walking Dead',
            'category' => array(
                array(
                    'id' => 1,
                    'name' => 'Series',
                ),
                array(
                    'id' => 2,
                    'name' => 'Season',
                    'parent' => 1,
                ),
                array(
                    'id' => 3,
                    'name' => 'Episode',
                    'parent' => 2,
                ),
            ),
        );

        echo $template->render('universe', compact('universe'));
    }

    function showCreate($engine, $template) {
        echo $template->render('forms/create_places');
    }

    function showUpdate($id, $engine, $template) {
        echo $template->render('forms/update_places');
    }

    function create($engine, $template) {
        echo "new place created!";
    }

    function update($id, $engine, $template) {
        echo "place $id updated!";
    }

    function delete($id, $engine, $template) {
        echo "place $id deleted";
    }

    function getTimeLineData($id) {
        // Dummy characater data.
        $character = array(
            'id' => 1,
            'name' => 'Walking Dead Character',
        );
        // Dummy place data.
        $place = array(
            'id' => 3,
            'name' => 'San Francisco',
        );
        // Fake database data.
        $database_data = array(
            array(
                'id' => 1,
                'name' => 'Some one dies',
                'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
                'sort' => 2,
                'weight' => 10,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 2,
                'name' => 'Infection starts',
                'description' => 'Lorem ipsum dolor sit amet, consetetur',
                'sort' => 1,
                'weight' => 1,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 3,
                'name' => 'First known "zombies"',
                'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At ergren,',
                'sort' => 3,
                'weight' => 5,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 4,
                'name' => 'All panic a lot',
                'description' => 'Lorem ipsum ',
                'sort' => 4,
                'weight' => 2,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 5,
                'name' => 'Find survivors',
                'description' => 'nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
                'sort' => 4,
                'weight' => 4,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 6,
                'name' => 'Bludiblub',
                'description' => 'Blablabla,',
                'sort' => 5,
                'weight' => 4,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 10,
                'name' => 'Hullahub-Wettbewerb',
                'description' => 'Lorem nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,',
                'sort' => 6,
                'weight' => 9,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 11,
                'name' => 'Splitting of the main group',
                'description' => 'Everyone gets the half of the half of everything after a hard battle of their zombie lawyers.',
                'sort' => 7,
                'weight' => 2,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
            array(
                'id' => 12,
                'name' => 'Intrigues and killing',
                'description' => 'DIE, bitch, DIE!',
                'sort' => 8,
                'weight' => 3,
                'character' => array(
                    $character,
                ),
                'place' => array(
                    $place,
                ),
            ),
        );

        // Data by sorting.
        $grouped_data = array();

        foreach ($database_data as $d) {
            if (!isset($grouped_data[$d['sort']])) {
                $grouped_data[$d['sort']] = array();
            }

            $grouped_data[$d['sort']][] = $d;
        }

        ksort($grouped_data);

        \Slim\Slim::getInstance()->contentType('application/json');

        echo json_encode($grouped_data);
    }

}