<?php 
	// Funções recursivas
	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				//Inicio: Diretor Comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					//Inicio: Gerente de Vendas
					'subordinarios' => array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Termino: Gerente de Vendas
				),
				//Ternio: Diretor Comercial
				// Inicio Diretor Financeiro
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						// Inicio: Gerente de Contas a Pagar
						array(
							'nome_cargo' => 'Gerente de Contas a Pagar',
							'subordinados' => array(
								// Inicio: Supervisor de Pagamentos
								array('nome_cargo' => 'Supervisor de Pagamentos')
								// Termino: Supervisor de Pagamentos
							)
						),
						// Termino: Gerente de Contas a Pagar
						//Inicio Gerente de Compras
						array(
							'nome_cargo' => 'Gerente de Compras',
							'subordinados' => array(
								// Inicio Supervisor de Suprimentos
								array(
									'nome_cargo' => 'Supervisor de Suprimentos',
									'subordinados' => array(
										array(
											'nome_cargo' => 'Funcionário'
										)
									)
								)
								// Inicio Supervisor de Suprimentos
							)
						)
						//Termino Gerente de Compras
					)
				)
				// Termino Diretor Financeiro
			)
		)
	);

function exibe($cargos){

	$html = "<ul>";

	foreach($cargos as $cargo){
		$html .= "<li>";
		$html .= $cargo['nome_cargo']; // Acessando o objeto

		/**
		 * Chamada recursiva da chave subordinados caso tenha um valor setado e maior que 0  ele irá chamar a function exibe passando a chave subordinados
		*/
		if(isset($cargo['subordinados']) /*&& count($cargo(['subordinados']) > 0)*/)
			$html .= exibe($cargo['subordinados']);

		$html .= "</li>";
	}


	$html .= "</ul>";

	return $html;



}

echo exibe($hierarquia);


 ?>