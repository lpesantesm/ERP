<?php
session_start();

$msgError = '';

$pagnum = 1;
$pagsize = 10;//$_SESSION['pageSize'];
$pageTotal = 0;
$primeraVez = true;

//// primera vez
//if ($primeraVez){
//    // inicializo campos
//    $frmEstado = 1;
//    $postAnterior['hid_frmEstado'] = $frmEstado;
//    $postAnterior['txt_codigo'] = $codigo;
//    $postAnterior['txt_descripcion'] = $descripcion;
//    //unset($_SESSION['pag']);
//} else {
    // obtiene todos los campos del request POST
    //print_r($_POST);
    foreach (/*$postAnterior*/$_POST as $nombre_campo => $valor) {
        $asignacion = "\$" . substr($nombre_campo, 4) . "='" . $valor . "';";
		//echo "$asignacion";        
        eval($asignacion);
    } // for
//} //($primeraVez)

//consulta de registro
if ($frmEstado == 1 || $frmEstado == 2){
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/se/clsSe_Modulo.php');
    $ose_modulo = new Se_Modulo();
    $reg = $ose_modulo->getAllPagineo($idmodulo, $pagnum, $pagsize); 
    if (is_array($reg) && isset($reg[0])){
        if($frmEstado == 1){?>
            <table id="tbl_data" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>C&oacute;digo</th>
                <th>Descripci&oacute;n</th>
                <th class="no-sort">Acci&oacute;n</th>
              </tr>
              </thead>
              <tbody>
        <?php} 
        if($frmEstado == 1 || $frmEstado == 2){
            foreach($reg as $key => $regdetalle){ ?>
            <tr>
              <td><?php echo $regdetalle["idmodulo"]; ?></td>
              <td><?php echo $regdetalle["nombre"]; ?>
              </td>
              <td>Ver</td>
            </tr>                  
       <?php } }
       if($frmEstado == 1){?>
        </tbody>
        <tfoot>
        <tr>
          <th>C&oacute;digo</th>
          <th>Descripci&oacute;n</th>
          <th></th>
        </tr>
        </tfoot>
      </table>           
       <?php }
    }else{ echo 'No hay datos.'; } 
//}
?>






