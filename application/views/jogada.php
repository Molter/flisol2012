<form method="post" action="<?=site_url("jokempo/jogada")?>/<?=isset($jogada)?$jogada->id:""?>">
	<p>
		<label>
			Nome
		</label>
		<input type="text" name="nome" value="<?=isset($jogada)?$jogada->nome:""?>" >
	</p>
	<p>
		<label>
			Ganha
		</label>
		<select name="ganha">
			<?foreach($jogadas as $ljogada):?>
				<option value="<?=$ljogada->id?>" <?=(isset($jogada) && $ljogada->id == $jogada->ganha)?"selected":""?>>
					<?=$ljogada->nome?>
				</option>
			<?endforeach?>
		</select>
	</p>
		<p>
		<label>
			Perde
		</label>
		<select name="perde">
			<?foreach($jogadas as $ljogada):?>
				<option value="<?=$ljogada->id?>" <?=(isset($jogada) && $ljogada->id == $jogada->perde)?"selected":""?>>
					<?=$ljogada->nome?>
				</option>
			<?endforeach?>
		</select>
	</p>
	<p>
		<input type="submit" name="submit" value="Cadastrar">
	</p>

</form>
<?=anchor("jokempo","Voltar")?>
