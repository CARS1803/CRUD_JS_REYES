<?php
require '../../modelos/Cliente.php';
$metodo = $_SERVER['REQUEST_METHOD'];
$tipo = $_POST['tipo'];

// echo json_encode($_POST);
// exit;

try {
    
    switch ($metodo) {
        case 'POST':
            $cliente = new Cliente($_POST);

            if($tipo == 1){
                $resultado = $cliente->guardar();
                $mensaje = "Se guardó correctamente";
            }

            if($tipo == 2){
                $resultado = $cliente->guardar();
                $mensaje = "Se modifico correctamente";
            }

            if($tipo == 3){
                $resultado = $cliente->guardar();
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
            $cliente = new Cliente($_GET);
            $clientes = $cliente->buscar();
            echo json_encode($clientes);
            
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