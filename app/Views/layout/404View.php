<style>
body{
    background-color: #64F40D !important;
    font-family: "Fredoka", sans-serif !important;
}

.mt-5 { margin-top:5px !important; }
.mt-7 { margin-top:7px !important; }
.mt-10 { margin-top:10px !important; }
.mt-15 { margin-top:15px !important; }
.mt-17 { margin-top:17px !important; }
.mt-30 { margin-top:30px !important; }
.mt-150 { margin-top:150px !important; }
.mt-250 { margin-top:250px !important; }
.primer{
    font-size: 60px;
    margin-bottom: 50px;
}
.segundo{
    font-size: 30px;
}
.tercero{
    font-size: 60px;
    margin-top: 40px;
}

.tercero-dos{
    margin-top: -18px;
    padding-left: 35px;
}
.rounded-button {
      border: 2px solid black; /* Color del borde */
      background-color: transparent; /* Fondo transparente */
      color: black; /* Color del texto */
      border-radius: 25px; /* Bordes redondeados */
      padding: 10px 20px; /* Espaciado interno */
      font-size: 36px; /* Tamaño del texto */
      cursor: pointer; /* Cambiar el cursor a mano */
      transition: background-color 0.3s, color 0.3s; /* Animación suave */
      text-decoration: none;
    }

    .rounded-button:hover {
      background-color: black; /* Fondo azul al pasar el ratón */
      color: white; /* Texto blanco al pasar el ratón */
    }

    .rounded-button:focus {
      outline: none; /* Quitar el contorno de enfoque */
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Efecto de enfoque */
    }

    .image-rick{
        background-color: transparent !important;
        padding-top: 200px;
        padding-left: 50px;
        
    }
</style>
<?php 
  echo $header;

  $frases = [
    "¡Es culpa de Jerry! Siempre arruinándolo todo.",
    "El portal no funciona... prueba otro destino.",
    "404: El multiverso colapsó en este punto.",
    "Este universo no existe. Quizás nunca lo hizo.",
    "¡Morty! Creo que tomamos la curva equivocada.",
    "Rick se llevó esta página para sus experimentos.",
    "404: ¡Cuidado! Aquí habita un Meeseeks descontrolado.",
    "¿Qué esperabas encontrar? ¿Una salsa Szechuan?",
    "¡Jerry pisó este enlace! Ahora todo está roto.",
    "Lo siento, Morty, pero esta página es ciencia imposible.",
    "404: Otra dimensión lo tiene mejor que nosotros.",
    "Este es un territorio prohibido del Consejo de Ricks.",
    "¡Burrrp! Lo siento, Morty, me bebí la página.",
    "¡El camino al episodio perdido no está aquí!",
    "El señor Caca de Pantalones escondió esta página.",
    "Wubba Lubba Dub-Dub! Nada que ver aquí.",
    "404: Esto es lo más cerca que llegarás a la verdad.",
    "¿Esperabas respuestas aquí? ¡Por favor!",
    "Esta página fue absorbida por una dimensión alternativa.",
    "¡No culpes a Summer! Ella no fue esta vez.",
    "Este lugar está más vacío que los ojos de un Jerry.",
    "404: Página no encontrada, pero siempre está el Cthulhu.",
    "Si encuentras la salsa secreta, ¡llámame!",
    "404: Nada que ver aquí, como en la vida de Jerry.",
    "¡Morty! Creo que desactivé la ruta correcta por accidente.",
    "Rick dejó esta página flotando en el espacio-tiempo.",
    "404: El universo implosionó. Intenta más tarde.",
    "¿Esperabas la verdad del universo aquí? ¡Ja!",
    "Este camino fue borrado por la pistola de portales.",
    "Jerry tocó algo... y bueno, ya ves el resultado.",
    "404: Error existencial detectado. ¿De qué sirve nada?",
    "¡Burrrp! Mejor ve a otra parte.",
    "Esta página está en otra dimensión... ¡Ups!",
    "Nada aquí, excepto un millón de realidades desperdiciadas.",
    "404: La página fue secuestrada por el Consejo de Summers.",
    "Este enlace se evaporó más rápido que un Meeseeks.",
    "¡Wubba Lubba Dub-Dub! Sigue buscando, Morty.",
    "404: Este universo no tiene sentido... ni esta página.",
    "Rick destruyó esta página para salvar el multiverso.",
    "404: Morty, ¡cuidado con las garrapatas espaciales!",
    "Jerry intentó arreglarlo, y ahora no hay nada.",
    "¿Esperabas algo funcional aquí? ¡Ja, ilusiones!",
    "404: Esta página fue robada por Pájaro Persona.",
    "Nada aquí excepto partículas de inutilidad.",
    "404: ¡Hicimos un Big Rip en este enlace!",
    "¡Morty! Creo que la página está en Schrödinger ahora.",
    "Este enlace tiene la lógica de un Jerry.",
    "404: ¡Por qué no buscas en Google, Morty!",
    "Nada que ver aquí... como las aspiraciones de Jerry.",
    "¡Rick modificó esta página! ¿Qué esperabas?",
    "404: Este enlace se autodestruyó como los Meeseeks.",
];

// Selección aleatoria
$text = $frases[array_rand($frases)];
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-150">
            <div class="col-12 primer">Oops!</div>
            <div class="col-12 segundo"><?= esc($text); ?></div>
            <div class="col-12 tercero">
                <div class="mx-auto"><img src="<?= base_url('images/boton.png') ?>" alt="" srcset=""></div>
                <div class="mx-auto tercero-dos">
                    <a href=" <?= base_url('/')?>
                     " class="rounded-button">Volver</a>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 110;">
            <div class="image-rick" style="width:400px">
                    <img src="<?=  base_url('images/rick.png') ?>" style="width:110%">
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
  echo $footer;
?>
