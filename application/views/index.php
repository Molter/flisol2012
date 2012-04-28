<ul>
	<?foreach($jogagas as $jogaga):?>
		<li>
			<?=$jogaga->nome?>
			<?=anchor("jokempo/jogada/".$jogaga->id,"Editar")?>
			<?=anchor("jokempo/delete/".$jogaga->id,"Deletar")?>
		</li>
	<?endforeach?>
</ul>
<?=anchor("jokempo/jogada","Adicionar")?>

<?=anchor("jokempo/jogar","Jogar")?>
