<?php
if (!isset($_SESSION['SearchInSugestions']))
    $_SESSION['SearchInSugestions'] = new SearchInSugestions();
else {
    if (isset($_POST['choose']))
        $_SESSION['SearchInSugestions']->moveTo($_POST['choose']);
}
?>

<div class="row">
    <div class="col-sm-4">
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
                                        <input type="submit" name="choose"
                                               value="<?= $_SESSION['SearchInSugestions']->getAdjacent()->get($position)->getVertex()->getVertexName() ?>">
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
