<article style="
    padding: 5px 20px;
	background: #eeeeee;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px; 
    border-radius: 4px;

">
<h1><?= $profile-> name; ?></h1>
<p> 
	Trabalha na <?= $profile->company; ?></br>
	<a title="mailto:<?=$profile->email;?>">Enviar E-mail</a>
</p>
</article>