<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Sofía Suárez Fernández UO270149" />
    <meta name="description" content="P4-Ejercicio6." />
    <title>Menú principal</title>
    <link rel="stylesheet" href="Ejercicio6.css" />
</head>

<body>
    <h1>Gestión de Base de Datos MySQL</h1>

    <nav>
        <ul>
            <li><a href="#baseEncabezado" title="Crear Base">Crear Base de Datos</a></li>
            <li><a href="#tablaEncabezado" title="Crear tabla">Crear una tabla</a></li>
            <li><a href="#insertarEncabezado" title="Insertar Datos">Insertar datos en una tabla</a></li>
            <li><a href="#buscarEncabezado" title="Buscar Datos">Buscar datos en una tabla</a></li>
            <li><a href="#modificarEncabezado" title="Modificar Datos">Modificar datos en una tabla</a></li>
            <li><a href="#eliminarEncabezado" title="Eliminar Datos">Eliminar datos de una tabla</a></li>
            <li><a href="#informeEncabezado" title="Generar Informe">Generar informe</a></li>
            <li><a href="#cargarEncabezado" title="Cargar datos">Cargar datos desde un archivo en una tabla de la Base de Datos</a></li>
            <li><a href="#exportarEncabezado" title="Exportar Datos">Exportar datos a un archivo los datos desde una tabla de la Base de Datos</a></li>
        </ul>
    </nav>

    <!-- CREAR BASE -->
    <h2 id="baseEncabezado">Crear Base de Datos</h2>
    <form id="formBase" action='#' method='post'>
        <input type='submit' class='button' name='crearBBDD' value="Crear BBDD" />
    </form>

    <!-- CREAR TABLA -->
    <h2 id="tablaEncabezado">Crear Tabla</h2>
    <form id="formBase" action='#' method='post'>
        <input type='submit' class='button' name='crearTabla' value="Crear Tabla" />
    </form>

    <!-- INSERTAR -->
    <h2 id="insertarEncabezado">Complete los datos a insertar en la tabla PruebasUsabilidad</h2>
    <form id="formBase" action='#' method='post'>
        <p>Datos del usuario:</p>
        <p>DNI:<input type="text" class="text" name="dni" /></p>
        <p>Nombre:<input type="text" class="text" name="nombre" /></p>
        <p>Apellidos:<input type="text" class="text" name="apellidos" /></p>
        <p>Email:<input type="text" class="text" name="email" /></p>
        <p>Telefono:<input type="text" class="text" name="telefono" /></p>
        <p>Edad:<input type="text" class="text" name="edad" /></p>
        <p>Sexo:<input type="text" class="text" name="sexo" /></p>

        <p>Datos de la prueba:</p>
        <p>Nivel de informática demostrado:
            <select name="nivelInformatica">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select></p>
        <p>Tiempo de realización:<input type="text" class="text" name="tiempo" /></p>
        <p>¿Tarea correcta?<input type="text" class="text" name="tareaCorrecta" /></p>

        <p>Otros:</p>
        <p>Comentarios:<input type="text" class="text" name="comentarios" /></p>
        <p>Propuestas de mejora:<input type="text" class="text" name="propuestasMejora" /></p>
        <p>Valoración:
            <select name="valoracion">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </p>

        <input type='submit' class='button' name='insert' value="Insertar Datos" />
    </form>

    <!-- BUSCAR -->
    <h2 id="buscarEncabezado">Buscar datos en la tabla PruebasUsabilidad</h2>
    <form id="formBase" action='#' method='post'>
        <p>DNI:<input type="text" class="text" name="dni" /></p>

        <input type='submit' class='button' name='search' value="Buscar Datos" />
    </form>

    <!-- MODIFICAR -->
    <h2 id="modificarEncabezado">Modificar los datos en la tabla PruebasUsabilidad</h2>
    <form id="formBase" action='#' method='post'>
        <p>DNI de la entrada a actualizar:<input type="text" class="text" name="dni" /></p>
        <p>Datos del usuario:</p>
        <p>Nombre:<input type="text" class="text" name="nombre" /></p>
        <p>Apellidos:<input type="text" class="text" name="apellidos" /></p>
        <p>Email:<input type="text" class="text" name="email" /></p>
        <p>Telefono:<input type="text" class="text" name="telefono" /></p>
        <p>Edad:<input type="text" class="text" name="edad" /></p>
        <p>Sexo:<input type="text" class="text" name="sexo" /></p>

        <p>Datos de la prueba:</p>
        <p>Nivel de informática demostrado:
            <select name="nivelInformatica">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select></p>
        <p>Tiempo de realización:<input type="text" class="text" name="tiempo" /></p>
        <p>¿Tarea correcta?<input type="text" class="text" name="tareaCorrecta" /></p>

        <p>Otros:</p>
        <p>Comentarios:<input type="text" class="text" name="comentarios" /></p>
        <p>Propuestas de mejora:<input type="text" class="text" name="propuestasMejora" /></p>
        <p>Valoración:
            <select name="valoracion">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </p>

        <input type='submit' class='button' name='update' value="Modificar Datos" />
    </form>

    <!-- ELIMINAR -->
    <h2 id="eliminarEncabezado">Eliminar datos de la tabla PruebasUsabilidad</h2>
    <form id="formBase" action='#' method='post'>
        <p>DNI:<input type="text" class="text" name="dni" /></p>

        <input type='submit' class='button' name='delete' value="Eliminar Datos" />
    </form>

    <!-- INFORME -->
    <h2 id="informeEncabezado">Informe detallado de las pruebas de usabilidad</h2>
    <form id="formBase" action='#' method='post'>
        <input type='submit' class='button' name='generate' value="Generar Informe" />
    </form>

    <!-- CARGAR DATOS -->
    <h2 id="cargarEncabezado">Cargar datos</h2>
    <form id="formBase" action='#' method='post'>
        <input type='submit' class='button' name='loadData' value="Cargar Datos" />
    </form>

    <!-- EXPORTAR DATOS -->
    <h2 id="exportarEncabezado">Exportar datos</h2>
    <form id="formBase" action='#' method='post'>
        <input type='submit' class='button' name='exportar' value="Exportar Datos" />
    </form>

    <?php
    class BaseDatos
    {
        private $server;
        private $username;
        private $password;
        private $database;

        public function __construct()
        {
            $this->server = "localhost";
            $this->username = "DBUSER2020";
            $this->password = "DBPSWD2020";
            $this->database = "usabilidad_php";
        }

        public function createDataBase()
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $query = "CREATE DATABASE IF NOT EXISTS usabilidad_php COLLATE utf8_spanish_ci";

            if ($db->query($query) === TRUE) {
                echo "<p id=\"confirm\">La base de datos 'usabilidad_php' ha sido creada con éxito.</p>";
            } else {
                echo "<p id=\"confirm\">La base de datos ya existe o no se ha podido crear.</p>";
                exit();
            }
            $db->close();
        }

        public function createTable()
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $query = "CREATE TABLE IF NOT EXISTS PruebasUsabilidad(
                dni VARCHAR(9) NOT NULL,
                nombre VARCHAR(255),
                apellidos VARCHAR(255),
                email VARCHAR(255),
                telefono VARCHAR(9),
                edad INT,
                sexo VARCHAR(30),
                nivelInformatica INT,
                tiempo INT,
                tareaCorrecta VARCHAR(3),
                comentarios VARCHAR(255),
                propuestasMejora VARCHAR(255),
                valoracion INT,
                PRIMARY KEY (dni),
                CHECK (nivelInformatica BETWEEN 0 AND 10),
                CHECK (valoracion BETWEEN 0 AND 10))";

            if ($db->query($query) === TRUE)
                echo "<p id=\"confirm\">La tabla 'PruebasUsabilidad' ha sido creada con éxito.</p>";
            else {
                echo "<p id=\"confirm\">La tabla ya existe o no se ha podido crear.</p>";
                exit();
            }
            $db->close();
        }

        public function insertData()
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $query = $db->prepare("INSERT INTO PruebasUsabilidad(dni, nombre, apellidos, email, telefono, edad, sexo, nivelInformatica, tiempo, tareaCorrecta, comentarios, propuestasMejora, valoracion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            if ((empty($_POST['dni'])) || (empty($_POST['nombre'])) || (empty($_POST['apellidos'])) || (empty($_POST['email'])) || (empty($_POST['telefono'])) || (empty($_POST['edad'])) || (empty($_POST['sexo'])) || (empty($_POST['nivelInformatica']))(empty($_POST['tiempo']))(empty($_POST['tareaCorrecta'])) || (empty($_POST['comentarios'])) || (empty($_POST['propuestasMejora'])) || (empty($_POST['valoracion']))) {
                echo "<p id=\"confirm\">No se puede realizar la inserción en la tabla, faltan campos por completar.</p>";
            } else {
                $query->bind_param('sssssisiisssi', $_POST["dni"], $_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["telefono"], $_POST["edad"], $_POST["sexo"], $_POST["nivelInformatica"], $_POST["tiempo"], $_POST["tareaCorrecta"], $_POST["comentarios"], $_POST["propuestasMejora"], $_POST["valoracion"]);

                $query->execute();

                echo "<p id=\"confirm\">Inserción de datos realizada con éxito.</p>";

                $query->close();
            }
            $db->close();
        }

        public function searchData()
        {
            if (empty($_POST['dni'])) {
                echo "<p id=\"confirm\">Introduzca el DNI.</p>";
            }

            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $query = $db->prepare("SELECT * FROM PruebasUsabilidad WHERE dni = ?");

            $query->bind_param('s', $_POST['dni']);

            $query->execute();

            $result = $query->get_result();

            if ($result->num_rows >= 1) {
                echo "<h2>Datos de la prueba de usabilidad con DNI solicitado:</h2>";

                echo "<ul>";

                while ($row = $result->fetch_assoc()) {
                    echo "<li>DNI del usuario: " . $row["dni"] . "</li>";
                    echo "<li>Nombre del usuario: " . $row["nombre"] . "</li>";
                    echo "<li>Apellidos del usuario: " . $row["apellidos"] . "</li>";
                    echo "<li>Email del usuario: " . $row["email"] . "</li>";
                    echo "<li>Telefono del usuario: " . $row["telefono"] . "</li>";
                    echo "<li>Edad del usuario: " . $row["edad"] . "</li>";
                    echo "<li>Sexo del usuario: " . $row["sexo"] . "</li>";
                    echo "<li>Nivel en Informática del usuario: " . $row["nivelInformatica"] . "</li>";
                    echo "<li>Tiempo de realización de la prueba del usuario: " . $row["tiempo"] . "</li>";
                    echo "<li>¿Tarea realizada correctamente? " . $row["tareaCorrecta"] . "</li>";
                    echo "<li>Comentarios: " . $row["comentarios"] . "</li>";
                    echo "<li>Propuestas de mejora del usuario: " . $row["propuestasMejora"] . "</li>";
                    echo "<li>Valoración del usuario: " . $row["valoracion"] . "</li>";
                }

                echo "</ul>";
            }

            $query->close();
            $db->close();
        }

        public function updateData()
        {
            if (empty($_POST['dni'])) {
                echo "<p id=\"confirm\">Introduzca el DNI.</p>";
            }

            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $query = $db->prepare("UPDATE PruebasUsabilidad SET nombre=?, apellidos=?, email=?, telefono=?, edad=?, sexo=?, nivelInformatica=?, tiempo=?, tareaCorrecta=?, comentarios=?, propuestasMejora=?, valoracion=? WHERE dni = ?");

            if ((empty($_POST['dni'])) || (empty($_POST['nombre'])) || (empty($_POST['apellidos'])) || (empty($_POST['email'])) || (empty($_POST['telefono'])) || (empty($_POST['edad'])) || (empty($_POST['sexo'])) || (empty($_POST['nivelInformatica']))(empty($_POST['tiempo']))(empty($_POST['tareaCorrecta'])) || (empty($_POST['comentarios'])) || (empty($_POST['propuestasMejora'])) || (empty($_POST['valoracion']))) {
                echo "<p id=\"confirm\">No se puede realizar la inserción en la tabla, faltan campos por completar.</p>";
            } else {
                $query->bind_param('sssssisiisssi', $_POST["dni"], $_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["telefono"], $_POST["edad"], $_POST["sexo"], $_POST["nivelInformatica"], $_POST["tiempo"], $_POST["tareaCorrecta"], $_POST["comentarios"], $_POST["propuestasMejora"], $_POST["valoracion"]);

                $query->execute();

                echo "<p id=\"confirm\">Actualización de datos realizada con éxito.</p>";

                $query->close();
            }

            $db->close();
        }

        public function deleteData()
        {
            if (empty($_POST['dni'])) {
                echo "<p id=\"confirm\">Introduzca el DNI.</p>";
            }

            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $query = $db->prepare("DELETE FROM PruebasUsabilidad WHERE dni=?");

            $query->bind_param('s', $_POST['dni']);

            $query->execute();

            $query->close();

            echo "<p id=\"confirm\">Datos eliminados con éxito.</p>";

            $db->close();
        }

        public function generateReport()
        {
            $totalUsers = $this->totalUsers();
            $edadMedia = $this->getMedia('edad');
            $porcentajeHombres = ($this->getCount('WHERE sexo="hombre"') / $totalUsers) * 100;
            $porcentajeMujeres = ($this->getCount('WHERE sexo="mujer"') / $totalUsers) * 100;
            $nivelInformaticaMedia = $this->getMedia('nivelInformatica');
            $tiempoMedia = $this->getMedia('tiempo');
            if ($totalUsers > 0) {
                $porcentajeTareaCorrecta = ($this->getCount('WHERE tareaCorrecta="si"') / $totalUsers) * 100;
            } else {
                $porcentajeTareaCorrecta = 0;
            }
            $valoracionMedia = $this->getMedia('valoracion');

            echo "<ul>";
            echo "<li>Edad media de los usuarios: $edadMedia años</li>";
            echo "<li>Frecuencia del %  de cada tipo de sexo entre los usuarios:
				<ul>
				<li>Hombres: $porcentajeHombres%</li>
				<li>Mujeres: $porcentajeMujeres%</li>
				</ul>
			</li>";
            echo "<br>";
            echo "<li>Valor medio del nivel o pericia informática de los usuarios: $nivelInformaticaMedia</li>";
            echo "<li>Tiempo medio para la tarea: $tiempoMedia</li>";
            echo "<li>Porcentaje de usuarios que han realizado la tarea correctamente: $porcentajeTareaCorrecta%</li>";
            echo "<li>Valor medio de la puntuación de los usuarios sobre la aplicación: $valoracionMedia</li>";
            echo "</ul>";
        }

        private function getMedia($val)
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $result = $db->query('SELECT AVG(' . $val . ') AS valor FROM PruebasUsabilidad');

            $media = null;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $media = $row['valor'];
                }
            }
            $db->close();
            return $media;
        }

        private function getCount($val)
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $result = $db->query('SELECT COUNT(*) AS count FROM PruebasUsabilidad' . $val);

            $total = null;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $total = $row['count'];
                }
            }
            $db->close();
            return $total;
        }

        private function totalUsers()
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $numUsers = $db->query('SELECT COUNT(*) AS count FROM PruebasUsabilidad');

            $total = null;

            if ($numUsers->num_rows > 0) {
                while ($row = $numUsers->fetch_assoc()) {
                    $total = $row['count'];
                }
            }
            $db->close();
            return $total;
        }

        public function loadData()
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $file = fopen("pruebasUsabilidad.csv", "r");

            while (($datos = fgetcsv($file, ",")) == true) {
                $query = $db->prepare("INSERT INTO PruebasUsabilidad(dni, nombre, apellidos, email, telefono, edad, sexo, nivelInformatica, tiempo, tareaCorrecta, comentarios, propuestasMejora, valoracion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $query->bind_param(
                    'sssssisiisssi',
                    $datos[0],
                    $datos[1],
                    $datos[2],
                    $datos[3],
                    $datos[4],
                    $datos[5],
                    $datos[6],
                    $datos[7],
                    $datos[8],
                    $datos[9],
                    $datos[10],
                    $datos[11],
                    $datos[12]
                );

                $query->execute();
            }

            $query->close();

            echo "<p id=\"confirm\">Datos cargados con éxito.</p>";
        }

        public function exportData()
        {
            $db = new mysqli($this->server, $this->username, $this->password, $this->database);

            $data = $db->query('SELECT * FROM PruebasUsabilidad');

            $stringToExport = "";

            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    $stringToExport .= $row['dni'] . "," . $row['nombre'] . "," . $row['apellidos'] . "," . $row['email'] . "," . $row['telefono'] . "," . $row['edad'] . "," . $row['sexo'] . "," . $row['nivelInformatica'] . "," . $row['tiempo'] . "," . $row['tareaCorrecta'] . "," . $row['comentarios'] . "," . $row['propuestasMejora'] . "," . $row['valoracion'] . "\n";
                }
            }

            $db->close();

            file_put_contents("pruebasUsabilidad.csv", $stringToExport);

            echo "<p id=\"confirm\">Archivo csv generado con éxito.</p>";
        }
    }

    if (!isset($_SESSION['bd'])) {
        $_SESSION['bd'] = new BaseDatos();
    }
    $bd = $_SESSION['bd'];

    if (count($_POST) > 0) {
        if (isset($_POST["crearBBDD"])) {
            $bd->createDataBase();
        } else if (isset($_POST["crearTabla"])) {
            $bd->createTable();
        } else if (isset($_POST["insert"])) {
            $bd->insertData();
        } else if (isset($_POST["search"])) {
            $bd->searchData();
        } else if (isset($_POST["update"])) {
            $bd->updateData();
        } else if (isset($_POST["delete"])) {
            $bd->deleteData();
        } else if (isset($_POST["generate"])) {
            $bd->generateReport();
        } else if (isset($_POST["loadData"])) {
            $bd->loadData();
        } else if (isset($_POST["exportar"])) {
            $bd->exportData();
        }
    }

    ?>

    <footer>
        <p>Autor: Sofía Suárez Fernández. Universidad de Oviedo. Software y Estándares para la Web</p>
        <a href="http://validator.w3.org/check/referer" hreflang="en-us">
            <img src="valid-html5-button.png" alt="¡HTML5 válido!" height="31" width="88" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="¡CSS Válido!" /></a>
    </footer>
</body>

</html>