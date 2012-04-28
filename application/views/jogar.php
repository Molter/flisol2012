<?if(isset($vencedor)):?>
	<h1><?=$vencedor?></h1>
<?endif?>

<form method="post">
	<p>
		<label>
			Jogador 1
		</label>
		<select name="j1">
			<?foreach($jogadas as $ljogada):?>
				<option value="<?=$ljogada->id?>">
					<?=$ljogada->nome?>
				</option>
			<?endforeach?>
		</select>
	</p>
	<p>
		<label>
			Jogador 2
		</label>
		<select name="j2">
			<?foreach($jogadas as $ljogada):?>
				<option value="<?=$ljogada->id?>">
					<?=$ljogada->nome?>
				</option>
			<?endforeach?>
		</select>
	</p>
	<p>
		<input type="submit" name="submit" value="Jogar">
	</p>
</form>
<?=anchor("jokempo","Voltar")?>
