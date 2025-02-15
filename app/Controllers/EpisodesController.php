<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class EpisodesController extends Controller{

    public function index($temporada){

        $temporada = $this->getTemporada($temporada);
        $header = view('layout/headerCharacterView');
        $footer = view('layout/footerCharacterView');
        $data = [
            'header' => $header,
            'footer' => $footer,
            'temporada' => $temporada,
        ];
        return view('layout/seasonView',$data);
    }

    public function Home(){
        // Definir el rango de temporadas que deseas obtener
        $temporadaNumbers = [1, 2, 3, 4, 5, 6, 7]; // Aquí puedes cambiar por cualquier rango de temporadas

        // Inicializa el arreglo de temporadas
        $temporadas = [];

        // Obtener cada temporada y agregarla al arreglo $temporadas
        foreach ($temporadaNumbers as $seasonNumber) {
            $temporada = $this->getTemporada($seasonNumber);
            if ($temporada['success']) {
                $temporadas[] = $temporada['data']; // Solo agregar datos si 'success' es true
            }
        }
        $header = view('layout/headerCharacterView');
        $footer = view('layout/footerCharacterView');
        $data = [
            'header' => $header,
            'footer' => $footer,
            'temporadas' => $temporadas,
        ];
        return view('layout/seasonsView',$data);
    }

    public function getTemporada($seasonNumber)
    {
       
        $temporada = [
            1 => [
                "episodios" => [
                    "Buscando las semillas" => "https://drive.google.com/file/d/1WHDLkJahKI2N_kiOfc4zcC5t7-P3x2Lg/preview",
                    "Invasión canina" => "https://drive.google.com/file/d/1dFagYRX2655OKARHQFOBwGC9aGvvOfne/preview",
                    "Parque Anatómico" => "https://drive.google.com/file/d/1V5ieY09eTwgM57zbxOPNbWPVJUg5xKcB/preview",
                    "La simulación alienígena" => "https://drive.google.com/file/d/1SNMrOrQxzpcwSBasGXj9ahSs76JCpH7u/preview",
                    "Meeseeks destructores" => "https://drive.google.com/file/d/12uvJuWLSymmqnx6DXYD3oblQt4ZmOhgn/preview",
                    "La poción de Rick" => "https://drive.google.com/file/d/1Re962VzZQx1wsV9G-NaA7qldx2-707Jz/preview",
                    "Criando un Gazorpazorp" => "https://drive.google.com/file/d/1EkWZvIzioD_7VDW5et7T_wSHUrYmQBpf/preview",
                    "Televisión Interdimensional" => "https://drive.google.com/file/d/1MBRO6jyLZQaU4Sxd7uO0TZytj-Sc49HR/preview",
                    "Cosas necesarias" => "https://drive.google.com/file/d/14PUWgAe8sSXAQb51sbAZ1eJEyAGfAEr7/preview",
                    "Encuentros cercanos a lo Rick" => "https://drive.google.com/file/d/1wnPnlTr4oiruAeiy23F9pWa90TlEWslr/preview",
                    "Es hora de la fiesta" => "https://drive.google.com/file/d/1h8QZH23-enAIMvPQmQUhDx0RggInQeUM/preview"
                ],
                "capitulos" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-01.jpg",
            ],
            2 => [
                "episodios" => [
                    "Rupturas en el tiempo" => "https://drive.google.com/file/d/17K6w7jmRqRI_mr5E7Wl24d6h5GniNjqY/preview",
                    "Morty escapa en la noche" => "https://drive.google.com/file/d/1Wvj-P9nEHGUg0wls1T6ELpj6AKlaLKtj/preview",
                    "Asimilación autoerótica" => "https://drive.google.com/file/d/1PtZ9L08MHi_rh5FveK4_okAfRjZPAQr-/preview",
                    "Rick vengador del futuro" => "https://drive.google.com/file/d/1Jv6HSFF3sBP23iIPLoPsMi9Hky-dqTZk/preview",
                    "Ponte Rickoso" => "https://drive.google.com/file/d/1kP6jVRg0aIXsLBQUh3Om8hQ77p5ToiTq/preview",
                    "Los Ricks deben estar locos" => "https://drive.google.com/file/d/1JrCeYe2N2qF2jQmQ40ELea-J6xZIMzKt/preview",
                    "Problemas con Mini Rick" => "https://drive.google.com/file/d/1YQkPDVRu4LyADi40wIxqzDecwfEnhmN6/preview",
                    "Televisión Interdimensional 2" => "https://drive.google.com/file/d/1l_2wf6JqGsOO113ga744d2D88n-04O1s/preview",
                    "El día de la purga" => "https://drive.google.com/file/d/1ILee8iCEcQyFVHToQoUeLDSSQU9nUpzY/preview",
                    "La Squanch boda" => "https://drive.google.com/file/d/1sxC_XjHuvrD0NL_b0x2rmSjrPi9PRSlC/preview"
                ],
                "capitulos" => [12, 13, 14, 15, 16, 17, 18, 19, 20, 21],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-02.jpg",
            ],
            3 => [
                "episodios" => [
                    "La redención de Rick" => "https://drive.google.com/file/d/1hJKvREyCQsXRtNiR2naz7t5haJmbQixT/preview",
                    "Rickusando la piedra" => "https://drive.google.com/file/d/17LM_dXQq8R7gokU0muaJgyyFSpzUPCgP/preview",
                    "Pepinillo Rick" => "https://drive.google.com/file/d/1iEWZhwwrUxiWyhHfCkVdjJ_TCSZkZAgv/preview",
                    "Los Vindicadores" => "https://drive.google.com/file/d/18ds2LQocPp2Z8MP6kVb6u46Gu2_54reD/preview",
                    "La conspiración Whirly Dirly" => "https://drive.google.com/file/d/1WPVLnoDhJH1O_ByHfHCAtPQ1ljsJtTDK/preview",
                    "Descanso y Ricklajación" => "https://drive.google.com/file/d/1HYf2a6TkBJ_wcxXXR7pEKUkVIEOWzelZ/preview",
                    "Cuentos de la Ciudadela" => "https://drive.google.com/file/d/1rUwfZu_ma2xA2eBW0uOl7bHUeNPkbmBF/preview",
                    "Los recuerdos de Morty" => "https://drive.google.com/file/d/1n84TkzwfjBS2gTDHa333-QwBegME3mZI/preview",
                    "ABC de Beth" => "https://drive.google.com/file/d/1nre8BKN_W5VmYK77bYE5CWgTHq5nuxiL/preview",
                    "Día de Rick y Morty" => "https://drive.google.com/file/d/144KgNpvmn8uwCsGMdSe3wPJT8INKSPoI/preview"
                ],
                "capitulos" => [22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-03.jpg",
            ],
            4 => [
                "episodios" => [
                    "Aprovechando el Mortymento" => "https://drive.google.com/file/d/1Ge1b0th3gqXZLzPCJ70anj7_lnX2D2u8/preview",
                    "El Anciano y el trono" => "https://drive.google.com/file/d/1DTDtiqw4Ch8XVnxEx1J2dASGpuh0a8m0/preview",
                    "Una Pandilla para el Patético Morty" => "https://drive.google.com/file/d/1vPi77K3zTvekP6DCXzmtMss3iLc4P9MC/preview",
                    "La Ley y el Dragorden" => "https://drive.google.com/file/d/1l65fxuLq7CrsFVj9et0BxCQTX0xwFuYS/preview",
                    "Rattlestar Rickláctica" => "https://drive.google.com/file/d/1eDzTdDoPPvqPHpSylc6hMk8ZarWSPmsc/preview",
                    "Un tren de antologías" => "https://drive.google.com/file/d/1auccYCsG9rJF_UlGwXkJYgeJtSNyjWCu/preview",
                    "Alienígenas" => "https://drive.google.com/file/d/1TMlMVA4ag2ijeTFCurklVXIPeV0J08cn/preview",
                    "El Episodio del Tanque de Ácido" => "https://drive.google.com/file/d/1taYJrBn-xNST7oeRFH8GFwxRffBIufQw/preview",
                    "Childrick of Morta" => "https://drive.google.com/file/d/1ii_daCktYfCXPNhoRj0PrH48MRGcrXjy/preview",
                    "El Rickgreso del Jerri" => "https://drive.google.com/file/d/1htD6lh-XcfEIZT9GW3ODo8ohaEt0wWEQ/preview"
                ],
                "capitulos" => [32, 33, 34, 35, 36, 37, 38, 39, 40, 41],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-04.jpg",
            ],
            5 => [
                "episodios" => [
                    "Mi Cena con André a la Morty" => "https://drive.google.com/file/d/1NAZGse6MFzihZTFr1djoqomqVROLvVX3/preview",
                    "Mortyplicidad" => "https://drive.google.com/file/d/1rQP1CH1RJLa9bX7T7tU8_ZDfK6bjjrY6/preview",
                    "Una Mortyandad conveniente" => "https://drive.google.com/file/d/18gu0Qk__a4P7cBJBBJldkup5b0ATY_9_/preview",
                    "Día de la Rickdependencia" => "https://drive.google.com/file/d/1YhpOeH35SebRVyjz5MX8bXXE-5mC_i6o/preview",
                    "Grickfitti Amortycano" => "https://drive.google.com/file/d/10MrKBEO3Pb7J9tehv3zb1v8YfCIDuyid/preview",
                    "El increíble día de explota Acción de Gracias" => "https://drive.google.com/file/d/14qQTy3Wv_lPzftHHVjmCqX6HpDxnUhQQ/preview",
                    "Gotron, Jerrys y Rickvangelion" => "https://drive.google.com/file/d/1YwJbJpwRmVa-AwnKgCeS7ZhWFKcylDmB/preview",
                    "Eterna amistad de una mente sin Rickcuerdos" => "https://drive.google.com/file/d/1BxMw_2BtRCoY2qLRASTU1HThYgfWbUg2/preview",
                    "Cómo Sobrevivir a Mi Rick" => "https://drive.google.com/file/d/18ojx7lr_mkOrwRja0jCp7cPbMGoXJ-xk/preview",
                    "Rickmurai Jack" => "https://drive.google.com/file/d/1JpQ86E1l78EvGsS5Co200KJvmfz5OvcW/preview"
                ],
                "capitulos" => [42, 43, 44, 45, 46, 47, 48, 49, 50, 51],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-05.jpg",
            ],
            6 => [
                "episodios" => [
                   "Solaricks" => "https://drive.google.com/file/d/1aZdxWl83omWujba6C6j7lI47B616A1QZ/preview",
                    "Rick, una Morty vida" => "https://drive.google.com/file/d/1Clnu0TcNLhgxMk6w0ilQBKUCfJUdUSHX/preview",
                    "Gemelinstinto Béthico" => "https://drive.google.com/file/d/1PvHIRe4BdvkyLN79B54tDQeaDoc3GCrb/preview",
                    "Familia nocturna" => "https://drive.google.com/file/d/1plsgGijZgml4t0sG1yHFrTbJbSZypDc1/preview",
                    "DeSmithno final" => "https://drive.google.com/file/d/1HLAqQ_E_Ydpf7yuRfc-WCD1A9y4hsj6P/preview",
                    "Mundo JuRicksico" => "https://drive.google.com/file/d/1PRU_fNehr_VwvxaS7EAwu1XmXGfKDdFe/preview",
                    "La meta naRicktiva" => "https://drive.google.com/file/d/1YkIK_cS-JUtsb73Xe4o4mIcuhmLbPAc7/preview",
                    "Anal-ízame" => "https://drive.google.com/file/d/1fqDaibheZys8y_kTUA4evoN6LFObN5gh/preview",
                    "El sacrificio del rey Morturo" => "https://drive.google.com/file/d/1RrmSCcu6nP6ogKRQlGynuZKnbefwMKMu/preview",
                    "Rickacciones de Mortyvidad" => "https://drive.google.com/file/d/1Jp0W8BUhDC1b3fKrNsRSEXQ7jvn10f1A/preview"
                ],
                "capitulos" => [52, 53, 54, 55, 56, 57, 58, 59, 60, 61],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-06.jpg",
            ],
            7 => [
                "episodios" => [
                    "La nueva vida del Sr. Pantalones de Popó" => "https://drive.google.com/file/d/1_e8PV-24F4lHnSFZ29avgMvW6uaGdG5P/preview",
                    "Juego de Jerricky" => "https://drive.google.com/file/d/1YFe_1g7pJ6yAqqbFP4S9BvlLUcdxZJe9/preview",
                    "Air Force Wong" => "https://drive.google.com/file/d/1CjJBcyMyz6zTGSt6GF-CL0Va37TBWKRZ/preview",
                    "Es Amorte" => "https://drive.google.com/file/d/1VpBcO8gsCZ4uRIIeML6cQpSTXZRIOdQW/preview",
                    "Los inmortinables" => "https://drive.google.com/file/d/1gqbtggUWnkD2OSwemDs2uqCh1cQforUY/preview",
                    "Defensa mortal" => "https://drive.google.com/file/d/13UuZbiypOnSqEJf90Quc-Ow09e4J2CbL/preview",
                    "Una búsqueda incuatable" => "https://drive.google.com/file/d/1mqfaplMtCoNIuLnJpyWDQ7rDyxZi-bVR/preview",
                    "El levantamiento de lso numericones" => "https://drive.google.com/file/d/1Znd_cUp33Q6dbhSSiVZ6NAC0amlYi3LL/preview",
                    "Mortaranald Rick" => "https://drive.google.com/file/d/1HHAsb_BHYqfjZMnLDaSzaR-7UUaVEz32/preview",
                    "No más miedos" => "https://drive.google.com/file/d/1slAUs1_ikyYMVnR9NP4R_J6BTFJQ2J4q/preview"
                ],
                "capitulos" => [62, 63, 64, 65, 66, 67, 68, 69, 70, 71],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-07.jpg",
            ]
        ];
        

        if (isset($temporada[$seasonNumber])) {
            return [
                "success" => true,
                "data" => $temporada[$seasonNumber],
            ];
        }

        return [
            "success" => false,
            "error" => "Temporada no encontrada.",
        ];
    }


    public function epidsodes()
    {
        // Recupera y decodifica los episodios desde GET
        $episodios = [];
        if ($this->request->getGet('data')) { // Cambiado a getGet
            $episodios = json_decode(urldecode($this->request->getGet('data')), true);
        }
        $character = [];
        if ($this->request->getGet('character')) { // Cambiado a getGet
            $character = json_decode(urldecode($this->request->getGet('character')), true);
        }
        
        $temporada = [
            1 => [
                "episodios" => [
                    "Buscando las semillas" => "https://drive.google.com/file/d/1WHDLkJahKI2N_kiOfc4zcC5t7-P3x2Lg/preview",
                    "Invasión canina" => "https://drive.google.com/file/d/1dFagYRX2655OKARHQFOBwGC9aGvvOfne/preview",
                    "Parque Anatómico" => "https://drive.google.com/file/d/1V5ieY09eTwgM57zbxOPNbWPVJUg5xKcB/preview",
                    "La simulación alienígena" => "https://drive.google.com/file/d/1SNMrOrQxzpcwSBasGXj9ahSs76JCpH7u/preview",
                    "Meeseeks destructores" => "https://drive.google.com/file/d/12uvJuWLSymmqnx6DXYD3oblQt4ZmOhgn/preview",
                    "La poción de Rick" => "https://drive.google.com/file/d/1Re962VzZQx1wsV9G-NaA7qldx2-707Jz/preview",
                    "Criando un Gazorpazorp" => "https://drive.google.com/file/d/1EkWZvIzioD_7VDW5et7T_wSHUrYmQBpf/preview",
                    "Televisión Interdimensional" => "https://drive.google.com/file/d/1MBRO6jyLZQaU4Sxd7uO0TZytj-Sc49HR/preview",
                    "Cosas necesarias" => "https://drive.google.com/file/d/14PUWgAe8sSXAQb51sbAZ1eJEyAGfAEr7/preview",
                    "Encuentros cercanos a lo Rick" => "https://drive.google.com/file/d/1wnPnlTr4oiruAeiy23F9pWa90TlEWslr/preview",
                    "Es hora de la fiesta" => "https://drive.google.com/file/d/1h8QZH23-enAIMvPQmQUhDx0RggInQeUM/preview"
                ],
                "capitulos" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-01.jpg",
            ],
            2 => [
                "episodios" => [
                    "Rupturas en el tiempo" => "https://drive.google.com/file/d/17K6w7jmRqRI_mr5E7Wl24d6h5GniNjqY/preview",
                    "Morty escapa en la noche" => "https://drive.google.com/file/d/1Wvj-P9nEHGUg0wls1T6ELpj6AKlaLKtj/preview",
                    "Asimilación autoerótica" => "https://drive.google.com/file/d/1PtZ9L08MHi_rh5FveK4_okAfRjZPAQr-/preview",
                    "Rick vengador del futuro" => "https://drive.google.com/file/d/1Jv6HSFF3sBP23iIPLoPsMi9Hky-dqTZk/preview",
                    "Ponte Rickoso" => "https://drive.google.com/file/d/1kP6jVRg0aIXsLBQUh3Om8hQ77p5ToiTq/preview",
                    "Los Ricks deben estar locos" => "https://drive.google.com/file/d/1JrCeYe2N2qF2jQmQ40ELea-J6xZIMzKt/preview",
                    "Problemas con Mini Rick" => "https://drive.google.com/file/d/1YQkPDVRu4LyADi40wIxqzDecwfEnhmN6/preview",
                    "Televisión Interdimensional 2" => "https://drive.google.com/file/d/1l_2wf6JqGsOO113ga744d2D88n-04O1s/preview",
                    "El día de la purga" => "https://drive.google.com/file/d/1ILee8iCEcQyFVHToQoUeLDSSQU9nUpzY/preview",
                    "La Squanch boda" => "https://drive.google.com/file/d/1sxC_XjHuvrD0NL_b0x2rmSjrPi9PRSlC/preview"
                ],
                "capitulos" => [12, 13, 14, 15, 16, 17, 18, 19, 20, 21],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-02.jpg",
            ],
            3 => [
                "episodios" => [
                    "La redención de Rick" => "https://drive.google.com/file/d/1hJKvREyCQsXRtNiR2naz7t5haJmbQixT/preview",
                    "Rickusando la piedra" => "https://drive.google.com/file/d/17LM_dXQq8R7gokU0muaJgyyFSpzUPCgP/preview",
                    "Pepinillo Rick" => "https://drive.google.com/file/d/1iEWZhwwrUxiWyhHfCkVdjJ_TCSZkZAgv/preview",
                    "Los Vindicadores" => "https://drive.google.com/file/d/18ds2LQocPp2Z8MP6kVb6u46Gu2_54reD/preview",
                    "La conspiración Whirly Dirly" => "https://drive.google.com/file/d/1WPVLnoDhJH1O_ByHfHCAtPQ1ljsJtTDK/preview",
                    "Descanso y Ricklajación" => "https://drive.google.com/file/d/1HYf2a6TkBJ_wcxXXR7pEKUkVIEOWzelZ/preview",
                    "Cuentos de la Ciudadela" => "https://drive.google.com/file/d/1rUwfZu_ma2xA2eBW0uOl7bHUeNPkbmBF/preview",
                    "Los recuerdos de Morty" => "https://drive.google.com/file/d/1n84TkzwfjBS2gTDHa333-QwBegME3mZI/preview",
                    "ABC de Beth" => "https://drive.google.com/file/d/1nre8BKN_W5VmYK77bYE5CWgTHq5nuxiL/preview",
                    "Día de Rick y Morty" => "https://drive.google.com/file/d/144KgNpvmn8uwCsGMdSe3wPJT8INKSPoI/preview"
                ],
                "capitulos" => [22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-03.jpg",
            ],
            4 => [
                "episodios" => [
                    "Aprovechando el Mortymento" => "https://drive.google.com/file/d/1Ge1b0th3gqXZLzPCJ70anj7_lnX2D2u8/preview",
                    "El Anciano y el trono" => "https://drive.google.com/file/d/1DTDtiqw4Ch8XVnxEx1J2dASGpuh0a8m0/preview",
                    "Una Pandilla para el Patético Morty" => "https://drive.google.com/file/d/1vPi77K3zTvekP6DCXzmtMss3iLc4P9MC/preview",
                    "La Ley y el Dragorden" => "https://drive.google.com/file/d/1l65fxuLq7CrsFVj9et0BxCQTX0xwFuYS/preview",
                    "Rattlestar Rickláctica" => "https://drive.google.com/file/d/1eDzTdDoPPvqPHpSylc6hMk8ZarWSPmsc/preview",
                    "Un tren de antologías" => "https://drive.google.com/file/d/1auccYCsG9rJF_UlGwXkJYgeJtSNyjWCu/preview",
                    "Alienígenas" => "https://drive.google.com/file/d/1TMlMVA4ag2ijeTFCurklVXIPeV0J08cn/preview",
                    "El Episodio del Tanque de Ácido" => "https://drive.google.com/file/d/1taYJrBn-xNST7oeRFH8GFwxRffBIufQw/preview",
                    "Childrick of Morta" => "https://drive.google.com/file/d/1ii_daCktYfCXPNhoRj0PrH48MRGcrXjy/preview",
                    "El Rickgreso del Jerri" => "https://drive.google.com/file/d/1htD6lh-XcfEIZT9GW3ODo8ohaEt0wWEQ/preview"
                ],
                "capitulos" => [32, 33, 34, 35, 36, 37, 38, 39, 40, 41],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-04.jpg",
            ],
            5 => [
                "episodios" => [
                    "Tiemblen todos ante el imperio Rick" => "https://drive.google.com/file/d/1bb2zQIAX-QJzG3-v-yFw-Nh8WbOdP7Z9/preview",
                    "El juicio final de Rick" => "https://drive.google.com/file/d/1aybQ9n-jf5X2pzUvZK7BwOV0z8I4wEZW/preview",
                    "Viviendo en la dimensión C" => "https://drive.google.com/file/d/1A-KvBD6pycEoICN0e8BdODcBfUkVdJp4/preview",
                    "No queremos que te mueras" => "https://drive.google.com/file/d/1tNJzkYXqbbrT-EF44Da-S8_oO4pKr7jl/preview",
                    "Hijos de todo el universo" => "https://drive.google.com/file/d/1ya6KhfnINW7XUwNVghd0D68sUSqUqvc2/preview",
                    "Soltando a los presos" => "https://drive.google.com/file/d/1zDmb7TbeGScqC0UrxexxA1RYB0qO3bKH/preview",
                    "Viajando al futuro con Rick" => "https://drive.google.com/file/d/1gpgA17k7yhpPfgvCfkB5w4gTcZ10eHzl/preview",
                    "La boda de los Morty" => "https://drive.google.com/file/d/1PBhf1nAYHZaVwChf0AmcKmcFy3pOVRe9/preview",
                    "Volviendo a los recuerdos" => "https://drive.google.com/file/d/1-Ffg0PbOZvMNweF5Gi8G7LqOqbdc8kWl/preview",
                    "Vuelve el asesino Rick" => "https://drive.google.com/file/d/1rIUjknSe0xPywtWx3Xq8uJ0dVqg-rQ8x/preview"
                ],
                "capitulos" => [42, 43, 44, 45, 46, 47, 48, 49, 50, 51],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-05.jpg",
            ],
            6 => [
                "episodios" => [
                    "Lo que pasa en la dimensión de Rick" => "https://drive.google.com/file/d/1bbz7X7bFLz_0d3c6tR6Tqg9V5GFdHEoZ/preview",
                    "El regreso de Rickmorty" => "https://drive.google.com/file/d/1e7b6Z8vFV0CH8nZmFL50jhdkwzQd0Zqd/preview",
                    "La cueva del perro alienígena" => "https://drive.google.com/file/d/1zqphx_N5hyx9MuaJXlQsbWvxj_JgmTLk/preview",
                    "Guerra de robots interdimensionales" => "https://drive.google.com/file/d/1-X6hkgGOqpF1NYBZTczBsh3mh2tGpTZZ/preview",
                    "El exilio del Doctor Evil" => "https://drive.google.com/file/d/1JgzywwKz5hhbQLVbBeq1sdMhhWvXgyAw/preview",
                    "Crisis de conciencia" => "https://drive.google.com/file/d/1jN8lI7gVr-0Qf7e2E4I1PZtwa8-qp9Mn/preview",
                    "Apocalipsis Rick" => "https://drive.google.com/file/d/1HQCnMQ1Lg0meRsOTLYj4v9dwsrl88UQ_/preview",
                    "Unión de los planetas de la galaxia" => "https://drive.google.com/file/d/1H6vvNq3HhROdTLy1yn0_9_aVQ_EFO7dq/preview",
                    "El coloso se estampa con un Rick" => "https://drive.google.com/file/d/1Nq8d0PZtTRkVfszw8GZ6cX0f6YzvAx4r/preview",
                    "Rick y Morty se encuentran con dos aliens" => "https://drive.google.com/file/d/1tshS9n5VR4NcQhvGVHkA8mnwVjR1xyj_/preview"
                ],
                "capitulos" => [52, 53, 54, 55, 56, 57, 58, 59, 60, 61],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-06.jpg",
            ],
            7 => [
                "episodios" => [
                    "Los rickestricos" => "https://drive.google.com/file/d/1fw0idLnRE8QQX6Yk_V0NEEymjU6oyQzv/preview",
                    "Realidad distorsionada" => "https://drive.google.com/file/d/1ALP-ITq9A0V6Xv_m34U6wyTuW2jy6tKs/preview",
                    "La batalla de los universos" => "https://drive.google.com/file/d/1bgVg5Qp97t5xeJd4eEpcftCHH1LzvHqs/preview",
                    "Final del círculo infinito" => "https://drive.google.com/file/d/1r3_0hsEV2e-m8Am7j3cA2Jb-9F1T7Nml/preview",
                    "El retorno de la ciencia" => "https://drive.google.com/file/d/1y9ScGvqJWiOFHY_Thf_Ut45fxIT62wcn/preview",
                    "Lucha de los mundos" => "https://drive.google.com/file/d/1q9mdcnxCP17b9hPqkqQf4v_vPMf1y5-Q/preview",
                    "La ley de Rick" => "https://drive.google.com/file/d/1uOXz_XbnOkFwmMvQ_N3Pjj57obgBYhL_/preview",
                    "La guerra de los intereses" => "https://drive.google.com/file/d/1G2qIXv0CofLUa-M6ZDBcOnl8wF4k2ARp/preview",
                    "Las múltiples realidades de los Rick" => "https://drive.google.com/file/d/1E85LPfGk6I3xkvcFJ_hyLXG_f2VpvKmB/preview",
                    "Los secretos del Multiverso" => "https://drive.google.com/file/d/1Q0JrpkqFCIEsdaVO8b8U4tStjlTewvc-/preview"
                ],
                "capitulos" => [62, 63, 64, 65, 66, 67, 68, 69, 70, 71],
                "cover" => "https://pepinillo-rick.web.app/rym/media/temp-07.jpg",
            ]
        ];
        

        $resultado = [];
        foreach ($temporada as $numTemporada => $detallesTemporada) {
            // Extraer los capítulos de esta temporada
            $capitulos = $detallesTemporada['capitulos'];

            // Filtrar los episodios que coinciden con los capítulos de esta temporada
            $episodiosCoincidentes = array_intersect($episodios, $capitulos);

            // Guardar los episodios y nombres correspondientes
            foreach ($episodiosCoincidentes as $index) {
                $nombreEpisodio = array_keys($detallesTemporada['episodios'])[$index - min($capitulos)];
                $resultado[] = [
                    'episodio' => $index,
                    'temporada' => $numTemporada,
                    'nombre' => $nombreEpisodio,
                    'url' => $detallesTemporada['episodios'][$nombreEpisodio],
                ];
            }

            // Ordenar el array por temporada y número de episodio
            usort($resultado, function($a, $b) {
                // Primero ordenar por temporada
                if ($a['temporada'] === $b['temporada']) {
                    // Si las temporadas son iguales, ordenar por episodio
                    return $a['episodio'] - $b['episodio'];
                }
                return $a['temporada'] - $b['temporada'];
            });
        }

        $header = view('layout/headerCharacterView');
        $footer = view('layout/footerCharacterView');
        // Preparar datos para la vista
        $data = [
            'episodios' => $resultado,
            'header' => $header,
            'footer' => $footer,
            'character' => $character,
        ];

        // Carga la vista y pasa los datos
        return view('layout/characterEpisodeView', $data);
    }

}