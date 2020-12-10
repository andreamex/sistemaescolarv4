<?php
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';

DB::table('calificaciones')
->insert(['calificacion' => $_POST['calificacion']]);

echo "<h1>guardado</h1><br>
<a class='button' href='inicio.php'>REGRESAR</a>";