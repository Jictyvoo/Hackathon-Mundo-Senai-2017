<?php
require_once("../../models/SearchInSugestions.php");
if (!isset($_SESSION['SearchInSugestions']))
    $_SESSION['SearchInSugestions'] = new SearchInSugestions();
?>

<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">O que estás a sentir?</h3>
            </div>
            <div class="panel-body">
                Selecione
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Informe o que lhe aflige</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                        <form method="post" action="">
                            <?php for ($position = 0; $position < $_SESSION['SearchInSugestions']->getAdjacent()->size(); $position += 1): ?>
                                <tr>
                                    <td>
                                        <input type="submit" name="choose" value="<?= $_SESSION['SearchInSugestions']->getAdjacent()->get($position)->getVertex()->getVertexName() ?>">
                                    </td>
                                </tr>
                            <?php endfor ?>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.col-sm-4 -->
</div>
