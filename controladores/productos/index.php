<?php
require '../../modelos/Producto.php';
$metodo = $_SERVER['REQUEST_METHOD'];
$tipo = $_POST['tipo'];

// echo json_encode($_POST);
// exit;

try {
    
    switch ($metodo) {
        case 'POST':
            $producto = new Producto($_POST);

            if($tipo == 1){
                $resultado = $producto->guardar();
                $mensaje = "Se guardó correctamente";
            }

            if($tipo == 2){
                $resultado = $producto->guardar();
                $mensaje = "Se modifico correctamente";
            }

            if($tipo == 3){
                $resultado = $producto->guardar();
                $mensaje = "Se elimino correctamente";
            }

            if($resultado){
            echo json_encode([
                'mensaje'=> $mensaje,
                'codigo' => 1
            ]);
        }else{
            echo json_encode([
                'mensaje'=> 'Ocurrio un error',
                'codigo' => 0
            ]);
        }

            break;
        case 'GET':
            $producto = new Producto($_GET);
            
            break;
        
        default:
        // http_response_code(405);
        echo json_encode([
            'mensaje'=> 'Metodo no permitido',
            'codigo' => 5
        ]);
            break;
    }


} catch (Exception $e) {
    // ! http_response_code(200);
echo json_encode([
    'detalle' => $e->getMessage(),
    'mensaje'=> 'Ocurrio un error',
    'codigo' => 0
]);
}