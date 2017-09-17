<?php
if (! isset ( $_SESSION ['SearchInSugestions'] )) {
	$_SESSION ['SearchInSugestions'] = new SearchInSugestions ();
	$canShowResult = false;
} else {
	if (isset ( $_POST ['choose'] ))
		$_SESSION ['SearchInSugestions']->moveTo ( $_POST ['choose'] );
	if ($_SESSION ['SearchInSugestions']->getAdjacent ()->isEmpty ()) {
		$canShowResult = true;
	}
}
?>

<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo (!$canShowResult ? "Informe o que lhe aflige" : "Resultados");?></h3>
			</div>
			<div class="panel-body">
				<table class="table">
					<tbody>
						<form method="post" action="">
                            <?php for ($position = 0; $position < $_SESSION['SearchInSugestions']->getAdjacent()->size(); $position += 1): ?>
                                <tr>
								<td><input type="submit" name="choose"
									value="<?= $_SESSION['SearchInSugestions']->getAdjacent()->get($position)->getVertex()->getVertexName() ?>">
								</td>
							</tr>
                            <?php endfor ?>
                        </form>
					</tbody>
				</table>
                    <?php
						if ($canShowResult) {
							$showInformation = $_SESSION ['SearchInSugestions']->results ();
							unset ( $_SESSION ['SearchInSugestions'] );
							echo "<h3>Use " . $showInformation->name . "</h3>";
							echo "<p align='center'>" . $showInformation->about . "</p>";
						}
					?>
			</div>
		</div>
	</div>
	<!-- /.col-sm-4 -->
	<div class="col-sm-4"></div>
</div>
