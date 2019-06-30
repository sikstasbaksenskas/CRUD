<?php


namespace App\Controller;
use App\Controller\AppController;

class PostsController extends AppController
{
    public function index()
    {
        $this->set('posts', $this->Posts->find('all'));
    }

    public function add()
    {
        $post = $this->Posts->newEntity();
        if($this->request->is('post'))
        {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if($this->Posts->save($post))
            {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('post', $post);
    }

    public function edit($id)
    {
        $post = $this->Posts->get($id);
        if($this->request->is(['post','put']))
        {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if($this->Posts->save($post))
            {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('vardas', $post->vardas);
        $this->set('pavarde', $post->pavarde);
        $this->set('amzius', $post->amzius);
        $this->set('adresas', $post->adresas);
        $this->set('posts', $post);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        $this->Posts->delete($post);
        return $this->redirect(['action'=>'index']);
    }

    public function apiemus()
    {

    }

    public function paslaugos()
    {

    }

    public function kontaktai()
    {

    }
}
