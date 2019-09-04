<?php



/**
 * classe controller dos posts
 */
class PostsController extends AppController 
{
	public $name = "Posts";
	public $helpers = ['Html', 'Form'];

	public function index()
    {

		//enviandos dados para a view através da variavel posts
		$this->set('posts', $this->Post->find('all'));
		//so podemos usar $this->Post pois seguimoso padrão de nomeclatura cake
	}

	public function view(int $num_id = null): void
    {
        if ( ( ! is_numeric($num_id ) ) || is_null($num_id) ) {
            throw new ValueNotAllowedException();
            return;
        }

        $this->set('post', $this->Post->findById($sanitized_id));
	}
    
    public function create(): void
    {   
        if ( $this->request->is('post') ) {
            $this->Post->save($this->request->data);
            $this->Flash->success('Postado com sucesso!');
            $this->redirect(['action' => 'index']);
        }

    }

    /**
    *@param int $id
    *@return void
    */
    public function edit(int $num_id = null): void
    {   
        if ( ( ! is_numeric($num_id ) ) || is_null($num_id) ) {
            
            throw new ValueNotAllowedException();
            return;
        
        }
        
        if ( $this->request->is('get') ){
            
            $this->request->data = $this->Post->findById($num_id);

        }   

        if ($this->request->is(['put', 'post'])) {

            $this->Post->save($this->request->data);
            $this->Flash->success("Registro editado com sucesso");
            $this->redirect(['controller' => 'Posts', 'action' => 'index' ]);
        
        }

    }

    public function delete(int $num_id = null): void
    {   
        if ( ( ! is_numeric($num_id) ) || is_null($num_id) ) {
            
            throw new ValueNotAllowedException();
            return;
        }

            //retorna  true or false
        if ($this->Post->delete($num_id)) {

            $this->Flash->success('Registro deletado com sucesso');
            $this->redirect(['action' => 'index']);
        }  

    }

}
