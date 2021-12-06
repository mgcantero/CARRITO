
<?php
    require_once "./conexion.php";
    class Modulos{
        public function Mostrar_tabla(){
            $sql = "SELECT `id`, `nombre`, `tablla`, `precio`, `url` FROM `productos`";
            $pdo = Conexion::CBD()->prepare($sql);
            $pdo -> execute();

            foreach($pdo as $key => $value){
                echo '
                    <tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["tablla"].'</td>
                    <td>'.$value["precio"].'</td>
                    <td><img src="'.$value["url"].'" class="d-block img-thumbnail"></td>
                    </tr>
                ';
            }
        }
        public function registrar_producto(){
            $carpeta = "imagenes/";
            opendir($carpeta);
            $destino = $carpeta.$_FILES['imagen']['name'];
            copy($_FILES['imagen']['tmp_name'],$destino);

            $nombre = $_POST["nombre"];
            $talla = $_POST["talla"];
            $precio = $_POST["precio"];
            $pdo = Conexion::CBD()->prepare("INSERT INTO `productos`(`nombre`, `tablla`, `precio`,`url`) VALUES (:nombre,:talla,:precio,:url)");
            $pdo -> bindParam(":nombre", $nombre,PDO::PARAM_STR);
            $pdo -> bindParam(":talla",$talla,PDO::PARAM_STR);
            $pdo -> bindParam(":precio",$precio,PDO::PARAM_STR);
            $pdo -> bindParam(":url",$destino,PDO::PARAM_STR);
            $pdo -> execute();
            $pdo  -> close();
            $pdo = null;
        }
    }

?>