<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include $head;
?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $rootProject;?>">Contabilidade - Computação UFMA 2015.2</a>
            </div>
            <!-- /.navbar-header -->

            <?php
            include $templates;
            ?>

            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Depreciação</h1>
                        <h2 class="page-header">Simulações<br/>
                            <small>Linear</small>
                        </h2>
                    </div>
                </div>
                <div>
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed" aria-expanded="false">Exercício Exemplo</a></h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <p>
                                D = Depreciação por periódica<br>
                                P = valor ou custo inicial do bem.<br>
                                VR = Valor residual<br>
                                N = Vida útil<br>
                            </p>
                            <p>

                                Exemplo: Qual será a depreciação anual de um equipamento que foi adquirido por R$ 220.000,00 que terá uma vida útil de cinco anos e o valor residual após cinco anos será nulo .
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col-lg-12 -->
            <form role="form">
                <div class="col-xs-12 col-md-12">
                    <div id="chart_div">
                    </div>
                    <br/>
                    <label><i class="fa fa-money"></i> Valor da depreciação mensal</label>
                    <label class="control-label text-danger" id="depreMensal">-</label>
                    <br/>
                    <label><i class="fa fa-money "></i> Valor da depreciação anual</label>
                    <label class="control-label text-danger" id="depreAnual">-</label>
                    <hr>
                </div>
                <div class="col-xs-12 col-md-4">
                    <label>Meses</label>
                    <select class="form-control" name="depreQtdMes">
                        <?php
                        for($mes = 1; $mes<=120;$mes++)
                            echo "<option>$mes</option>"
                        ?>
                    </select>
                </div>
                <div class="col-xs-6 col-md-4">
                    <label>Valor Inicial</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" class="form-control" name="depreValorInicial">
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <label>Valor Final</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" class="form-control" name="depreValorFinal">
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <button id="depreSimuMensalCal" type="button" class="btn btn-success" onClick="depreciacao_simulacao_valor_final(this.form)">Calcular</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </div>
    </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Simulações<br/><small>Linear</small> </h2>
                </div>
                <form role="form">
                    <div class="col-lg-12">
                        <div id="chart_div">
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <label>Meses</label>
                        <select class="form-control" name="depreQtdMes">
                            <?php
                            for($mes = 1; $mes<=120;$mes++)
                                echo "<option>$mes</option>"
                            ?>
                        </select>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <label>Valor Inicial</label>
                        <div class="form-group input-group">
                            <span class="input-group-addon">R$</span>
                            <input type="text" class="form-control" name="depreValorInicial">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label>Depreciação ao Mês</label>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" name="depreAoMes">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <button id="depreSimuMensalCal" type="button" class="btn btn-success" onClick="depreciacao_simulacao_mensal(this.form)">Calcular</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </div>
                </form>
            </div>
        -->
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php
include $footerScript;
?>
</body>
</html>