<?php

if (!function_exists('getApi')) {
    function getAll()
    {
        // Configurar opciones de la solicitud
        $url = "https://rickandmortyapi.com/api";
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => "Content-Type: application/json\r\n" .
                            "Accept: application/json\r\n",
                'timeout' => 10, // Tiempo de espera
            ],
        ]);

        // Realizar la solicitud
        $response = @file_get_contents($url, false, $context);

        // Manejar errores
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener la respuesta desde la API.',
            ];
        }

        // Decodificar JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'JSON decode error: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getApi')) {
    function getAllCharacters()
    {
        // Configurar opciones de la solicitud
        $url = "https://rickandmortyapi.com/api/character";
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => "Content-Type: application/json\r\n" .
                            "Accept: application/json\r\n",
                'timeout' => 10, // Tiempo de espera
            ],
        ]);

        // Realizar la solicitud
        $response = @file_get_contents($url, false, $context);

        // Manejar errores
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener la respuesta desde la API.',
            ];
        }

        // Decodificar JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'JSON decode error: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getCharacterById')) {
    function getCharacterById(int $id)
    {
        $url = "https://rickandmortyapi.com/api/character/$id";

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener datos de la API.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getMultipleCharacters')) {
    function getMultipleCharacters(array $ids)
    {
        // Convertir los IDs en una cadena separada por comas
        $idList = implode(',', $ids);
        $url = "https://rickandmortyapi.com/api/character/[$idList]";

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener datos de la API.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('filterCharacters')) {
    function filterCharacters(array $filters): array
    {
        // Construir la URL con los filtros
        $queryParams = http_build_query($filters);
        $url = "https://rickandmortyapi.com/api/character/?" . $queryParams;

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener datos de la API.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getAllLocations')) {
    function getAllLocations(): array
    {
        $url = "https://rickandmortyapi.com/api/location";

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener datos de la API.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getSingleLocation')) {
    function getSingleLocation(int $id): array
    {
        $url = "https://rickandmortyapi.com/api/location/" . $id;

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener los datos de la API.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getAllEpisodes')) {
    function getAllEpisodes(): array
    {
        $url = "https://rickandmortyapi.com/api/episode";

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener los datos de la API.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getEpisodeById')) {
    function getEpisodeById($id): array
    {
        $url = "https://rickandmortyapi.com/api/episode/{$id}";

        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener los datos del episodio.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getCharactersByPage')) {
    function getCharactersByPage($url): array
    {
        // Configurar las opciones de contexto
        $options = [
            'http' => [
                'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                'method'  => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        // Realizar la solicitud usando file_get_contents
        $response = @file_get_contents($url, false, $context);

        // Manejar errores en la solicitud
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener los datos de la página.',
            ];
        }

        // Decodificar la respuesta JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'Error al decodificar JSON: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}

if (!function_exists('getApi')) {
    function getApi(string $url): array
    {
        // Configurar opciones de la solicitud
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => "Content-Type: application/json\r\n" .
                            "Accept: application/json\r\n",
                'timeout' => 10, // Tiempo de espera
            ],
        ]);

        // Realizar la solicitud
        $response = @file_get_contents($url, false, $context);

        // Manejar errores
        if ($response === false) {
            return [
                'success' => false,
                'error' => 'Error al obtener la respuesta desde la API.',
            ];
        }

        // Decodificar JSON
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'error' => 'JSON decode error: ' . json_last_error_msg(),
            ];
        }

        return [
            'success' => true,
            'data' => $data,
        ];
    }
}
