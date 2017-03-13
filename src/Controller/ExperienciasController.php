<?php namespace App\Controller;
use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Experiencias Controller
 *
 * @property \App\Model\Table\ExperienciasTable $Experiencias
 */
class ExperienciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		/*
        $experiencias = $this->paginate($this->Experiencias);

        $this->set(compact('experiencias'));
        $this->set('_serialize', ['experiencias']);
		*/
    }

    /**
     * View method
     *
     * @param string|null $id Experiencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		/*
        $experiencia = $this->Experiencias->get($id, [
            'contain' => []
        ]);

        $this->set('experiencia', $experiencia);
        $this->set('_serialize', ['experiencia']);
		*/
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function inscricao()
    {
        $experiencia = $this->Experiencias->newEntity();
		
        if ($this->request->is('post')) {
			
			if($this->valida_cpf($this->request->data['cpf'])){
				$query = $this->Experiencias->find('all')
											->where(['Experiencias.cpf =' => $this->request->data['cpf']]);	
				
				$total = $query->count();
				if( $total <= 0){
					$this->request->data['resumo_titulo'] = $this->request->data['resumo']['name'];				
					$this->uparquivos($this->request->data);			
					if(!$this->request->data['resumo'] || !$this->request->data['deposito']){
						$this->Flash->error(__('Arquivo com erro ou maior que o tamanho permitido(2mb).Reveja seus arquivos e tente novamente'));	
					}else{
						$experiencia = $this->Experiencias->patchEntity($experiencia, $this->request->data);												
						if ($result = $this->Experiencias->save($experiencia)) {
							$this->Flash->success(__('Experiência Salva com Sucesso. Nº de Inscrição: '.$result->id));
							//return $this->redirect(['controller' => 'Experiencias', 'action' => 'index']);
							//return $this->redirect(['action' => 'index']);

							
						}else{
							$this->Flash->error(__('Experiência não pode ser salva, verifique novamente os campos do formulário.'));
						}
					}
				}else{
						$this->Flash->error(__('Experiência não pode ser salva, pois esse cpf já está cadastrado.'));	
				}	
			}else{
				$this->Flash->error(__('Cpf inválido.'));
			}	
			
        }
		
        $this->set(compact('experiencia'));
        $this->set('_serialize', ['experiencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Experiencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		/*
        $experiencia = $this->Experiencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experiencia = $this->Experiencias->patchEntity($experiencia, $this->request->data);
            if ($this->Experiencias->save($experiencia)) {
                $this->Flash->success(__('The experiencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experiencia could not be saved. Please, try again.'));
        }
        $this->set(compact('experiencia'));
        $this->set('_serialize', ['experiencia']);
		*/
    }

    /**
     * Delete method
     *
     * @param string|null $id Experiencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		/*
        $this->request->allowMethod(['post', 'delete']);
        $experiencia = $this->Experiencias->get($id);
        if ($this->Experiencias->delete($experiencia)) {
            $this->Flash->success(__('The experiencia has been deleted.'));
        } else {
            $this->Flash->error(__('The experiencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
		*/
    }
	
	public function uparquivos($parametros = array())
	{	
		if(!empty($parametros['resumo']['name'])) {
			$this->request->data['resumo'] = $this->upload($parametros['resumo'],'experiencias',$parametros['cpf']);
				
		} else {
			unset($parametros['resumo']);
		}
		if(!empty($parametros['deposito']['name'])) {
			$this->request->data['deposito'] = $this->upload($parametros['deposito'],'depositos',$parametros['cpf']);
		} else {
			unset($parametros['deposito']);
		}
	}
	
	public function upload($arquivo = array(), $dir = 'upload',$cpf)
	{
		$dir = WWW_ROOT.$dir.DS;
		
		if(($arquivo['error']!=0) && ($arquivo['size']==0) || ($arquivo['size'] > 2097152)) {
			return false;
		}
		
		$this->checa_dir($dir);

		$arquivo = $this->checa_nome($arquivo, $cpf);

		$this->move_arquivos($arquivo, $dir);

		return $arquivo['name'];
	}
	public function checa_dir($dir)
	{		
		$folder = new Folder();
		if (!is_dir($dir)){
			$folder->create($dir);
		}
	}

	/**
	 * Verifica se o nome do arquivo jรก existe, se existir adiciona um numero ao nome e verifica novamente
	 * @access public
	 * @param Array $arquivo
	 * @param String $data
	 * @return nome da arquivo
	*/ 
	public function checa_nome($arquivo, $cpf)
	{
		$extensao 			= explode(".",$arquivo['name']);
		$final 				= count($extensao) - 1;
		$arquivo_nome 		= $cpf.".".$extensao[$final];
		$arquivo['name'] 	= $arquivo_nome;
		return $arquivo;
	}


	/**
	 * Move o arquivo para a pasta de destino.
	 * @access public
	 * @param Array $arquivo
	 * @param String $data
	*/ 
	public function move_arquivos($arquivo, $dir)
	{
				
		$arquivos = new File($arquivo['tmp_name']);
		$arquivos->copy($dir.$arquivo['name']);
		$arquivos->close();
	}
	
	public function valida_cpf($cpf = null) {
 
		// Verifica se um número foi informado
		if(empty($cpf)) {
			return false;
		}
		
		$cpf = str_replace(".","",str_replace("-","",$cpf));
		
		// Elimina possivel mascara
		$cpf = preg_replace('[^0-9]', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		 
		// Verifica se o numero de digitos informados é igual a 11 
		if (strlen($cpf) != 11) {
			return false;
		}
		// Verifica se nenhuma das sequências invalidas abaixo 
		// foi digitada. Caso afirmativo, retorna falso
		else if ($cpf == '00000000000' || 
			$cpf == '11111111111' || 
			$cpf == '22222222222' || 
			$cpf == '33333333333' || 
			$cpf == '44444444444' || 
			$cpf == '55555555555' || 
			$cpf == '66666666666' || 
			$cpf == '77777777777' || 
			$cpf == '88888888888' || 
			$cpf == '99999999999') {
			return false;
		 // Calcula os digitos verificadores para verificar se o
		 // CPF é válido
		 } else {   
			 
			for ($t = 9; $t < 11; $t++) {
				 
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) {
					return false;
				}
			}
	 
			return true;
		}
	}
}