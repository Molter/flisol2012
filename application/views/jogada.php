<?=form_open_multipart()?>
	<p>
		<label>
			Nome
		</label>
		<input type="text" name="nome">
	</p>
	<p>
		<label>
			Foto
		</label>
		<input type="file" name="file">
	</p>
	<p>
		<input type="submit" name="submit" value="Cadastrar">
	</p>

<?=form_close()?>
