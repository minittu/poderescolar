<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
		<li><span style='color: red'><b>ATENÇÃO: O depósito deve, necessariamente, ser identificado. Não será garantida a vaga de quem realizar o depósito sem indentificação.</b></span> </li>
        <li class="heading">Informações para inscrição de experiências:</li>
        <li>1) Escrever o resumo da experiência escolar desenvolvida por profissionais da escola. O resumo deve ter uma página digitada em letra Times New Roman, tamanho 12, no formato Word;
Obs: Serão aceitas experiências com até 4 autores/as. Cada inscrito/a poderá apresentar até duas experiências, tanto na condição de autor quanto na de co-autor.
<br/>Obs: EIXOS TEMÁTICOS PARA RESUMOS:<br>
- <b>Educação Infantil<br>
- Ensino Fundamental Anos Iniciais<br>
- Ensino Fundamental Anos Finais<br>
- Ensino Médio<br>
- Gestão Escolar e Formação Continuada</b><br><br>
2) Pagar a taxa de inscrição no valor único de R$ 50,00 em <span class="heading"><b>depósito identificado</span>:<br/>
Banco do Brasil<br/>
Agência 4468-7<br/>
Conta 15.840-2<br/>
VALOR DA INSCRIÇAO R$ 50.00</b><br><br>
3) Preencher os dados pessoais na ficha de inscrição constante no site;<br><br>
4) Inserir na ficha de inscrição o arquivo com o resumo;<br><br>
5) Inserir na ficha de inscrição a cópia do <b>comprovante identificado</b> de pagamento da inscrição.<br><br>
</li>
    </ul>
</nav>
<div class="experiencias form large-9 medium-8 columns content">
    <?= $this->Form->create($experiencia, array('enctype' => 'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Experiência') ?></legend>
        <?php
            echo $this->Form->input('nome',array('label'=> 'Nome'));
            echo $this->Form->input('cpf',array('label'=> 'Cpf','maxlength'=>'11')); 
			
			?>			            
			
		<?php 
			echo $this->Form->input('endereco',array('label'=> 'Endereço'));
            echo $this->Form->input('telefone',array('label'=> 'Telefone','type' => 'number'));
            echo $this->Form->input('telefone2',array('label'=> 'Outro Telefone','type' => 'number'));
            echo $this->Form->input('email',array('label'=> 'E-mail'));
			echo $this->Form->label('Necessidade Especial');
            $options=array('0'=>'Não','1'=>'Sim');
			$attributes=array('legend'=>true);
			echo $this->Form->radio('nec_especiais',$options,$attributes);			
			
            echo $this->Form->label('Eixo Temático');
			$opcoes=array('Educação Infantil'=>'Educação Infantil','Ensino Fundamental Anos Iniciais'=>'Ensino Fundamental Anos Iniciais','Ensino Fundamental Anos Finais' => 'Ensino Fundamental Anos Finais','Ensino Médio' => 'Ensino Médio', 'Gestão Escolar e Formação Continuada' => 'Gestão Escolar e Formação Continuada');
			echo $this->Form->select('eixo_tematico',$opcoes);
            echo $this->Form->input('titulo_experiencia',array('label'=> 'Titulo da Experiência'));
            echo $this->Form->input('autor1', array('label'=> 'Autor Principal'));
            echo $this->Form->input('autor2',array('label'=> 'Autor 2'));
            echo $this->Form->input('autor3', array('label'=> 'Autor 3'));
            echo $this->Form->input('autor4', array('label'=> 'Autor 4'));
            //echo $this->Form->input('autor5', array('label'=> 'Autor 5'));
            echo $this->Form->input('escola',array('label'=> 'Escola'));
            echo $this->Form->input('escola_munic',array('label'=> 'Município da Escola')); ?>
			<div style="height: 100%;background-color: #f0f0f0;width: 100%;margin-bottom: 14px;">
				<p style="color: red;"><b>Atenção!</b></br>Os arquivos referentes ao resumo de experiências e ao depósito bancário devem possuir o tamanho máximo de <b>2mb</b> cada.<br/>
					E não se esqueça que o <b>depósito bancário</b> tem que ser <b>identificado</b>.
				</p>
			</div>
			<?php
            echo $this->Form->input('resumo',array('between'=>'<br />','type'=>'file', 'label' => 'Resumo da Experiência (.doc,.docx)'));
            echo $this->Form->input('deposito',array('between'=>'<br />','type'=>'file', 'label' => 'Depósito Identificado (.pdf,.jpg,.png)') );
            //echo $this->Form->input('resumo_titulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>