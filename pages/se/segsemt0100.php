<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Modulo</h3>
      </div>
      <!--              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>-->
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!--                    <h2>Modulos <small>Aqu&iacute; puede consultar todos los Modulos, filtrandolos por: C&oacute;digo o Descripci&oacute;n</small></h2>-->
            <h2><small>Aqu&iacute; puede consultar todos los Modulos, filtrandolos por: C&oacute;digo o Descripci&oacute;n</small></h2>
            <!--                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>-->
            <div class="clearfix"></div>
          </div>
          <div class="x_content"> <br />
            <form id="frmC" name="frmC" method="post" action="" data-parsley-validate class="form-horizontal form-label-left">
              <input type="hidden" name="hid_frmEstado" id="hid_frmEstado" value="" /> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">C&oacute;digo </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="txt_idmodulo" name="txt_idmodulo" required class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Descripci&oacute;n </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="txt_descripcion" name="txt_descripcion" required class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button" name="btn_enviar" id="btn_enviar" onclick="btn_EnviarOnClick();" title="Consultar registros que cumplan los criterios seleccionados">Consultar</button>                  <!--						  <button class="btn btn-primary" type="reset">Reset</button>-->
                  <button type="submit" class="btn btn-success">Agregar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  <div id="div_resultado">  
  </div>
</div>
</div>
   <script type="text/javascript" src="../../js/formToCallPost.js"></script>   
    <script language="javascript">
        function btn_EnviarOnClick(){
          var f = document.frmC;
          if (f.btn_enviar.disabled == true) { return false;}
          f.hid_frmEstado.value = '1';
          eval(formToCallPost(f,'segsemt0100-p.php','div_resultado',''));
        } //--
    </script>
