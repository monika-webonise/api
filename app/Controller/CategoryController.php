<?php
App::uses('AppController','Controller');



class CategoryController extends AppController{


   public function index(){

      $this->loadModel('Category');
      $this->set(compact('Category'));
      $this->set('_serialize', ['Category']);
   }

    
   public function addcategory(){

    $this->Category->set($this->request->data);

     if (!$this->Category->validates()) {

        $this->response->statusCode(400);
        $this->set('_serialize', array(
           'message' => 'Invalid Parameter',
           'url' => '/resource',
        ));
    }

    $this->layout = false;

    if($this->request->is('post')){
       
        $data = $this->request->data('json_decode', true);

            if(empty($data)){
                
                $data = $this->request->data;
            }

            if ($this->Category->validates()) {
   
                if($this->Category->save($data)){

                    $response = array('status'=>'success','message'=>'Category successfully created');
                } else{

                    $response = array('status'=>'failed', 'message'=>'Failed to save data');
                }
        } else {
               
                // didn't validate logic
                $errors = $this->ModelName->validationErrors;
          }
            
        }

        $this->response->type('application/json');
        $this->response->body(json_encode($response));
        return $this->response->send();
    } 

    public function updatecategory(){

    $this->layout = false;
  
    if($this->request->is('put')){
        
        $data = $this->request->data('json_decode', true);
      
        if(empty($data)){
           
            $data = $this->request->data;
        }

        if(!empty($data['category_id'])){
            
            $this->Category->category_id = $data['category_id'];
            if($this->Category->save($data)){

                $response = array('status'=>'success','message'=>'Category successfully updated.');
            } else {

                $response['message'] = "Failed to update Category";
            }
        } else {

            $response['message'] = 'Please provide category id.';
        }
    }
        $this->response->type('application/json');
        $this->response->body(json_encode($response));
        return $this->response->send();
    }

    public function getcategory($id)
    {

        $Category = $this->Category->get($id);
        $this->set([
            'category' => $Category,
            '_serialize' => ['category']
        ]);
    }

    public function categorydelete($id)
    {
        $this->request->allowMethod(['delete']);
        $Category = $this->Category->get($id);
        $message = 'Deleted';
        if (!$this->Category->delete($Category)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}

?>