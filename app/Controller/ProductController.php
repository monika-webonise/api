<?php
App::uses('AppController','Controller');



class ProductController extends AppController{


   public function index(){

      $this->loadModel('Product');
      $this->set(compact('Product'));
        $this->set('_serialize', ['Product']);
   }

   public function addProduct() {

    $this->Product->set($this->request->data);
      
    $this->layout = false;
    
    if($this->request->is('post')){

        $data = $this->request->data('json_decode', true);
       
            if(empty($data)){
                $data = $this->request->data;
            }
            
            if(!empty($data)){

                if($this->Product->save($data)){

                    $response = array('status'=>'success','message'=>'Product successfully created');
                } else{

                    $response = array('status'=>'failed', 'message'=>'Failed to save data');
                }
            }
        }

        $this->response->type('application/json');
        $this->response->body(json_encode($response));
        return $this->response->send();
    } 

    public function updateproduct(){
        
    $this->layout = false;
    
    if($this->request->is('put')){
        
        $data = $this->request->input('json_decode', true);
        if(empty($data)){
            $data = $this->request->data;
        }

        if(!empty($data['id'])){
            
            $this->Product->id = $data['id'];
            if($this->Category->save($data)){
                $response = array('status'=>'success','message'=>'Product successfully updated.');
            } else {
                $response['message'] = "Failed to update product";
            }
        } else {
            $response['message'] = 'Please provide product id.';
        }
    }

     $this->response->type('application/json');
     $this->response->body(json_encode($response));
     return $this->response->send();
  }
  
  public function getproduct($id = null){
    
    $this->layout = false;

    if(!empty($id)){
        
        $result = $this->Product->findById($id);
        if(!empty($result)){
            $response = array('status'=>'success','data'=>$result);  
        } else {
            $response['message'] = 'Found no matching data';
        }  
    } else {
        $response['message'] = "Please provide ID";
    }
        
    $this->response->type('application/json');

    $this->response->body(json_encode($response));
    return $this->response->send();
  }

  
  public function deleteproduct($id)
    
    {
       $this->request->allowMethod(['delete']);
       $Category = $this->Product->get($id);
       $message = 'Deleted';
        
       if (!$this->Product->delete($Category)) {
            $message = 'Error';
    }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}

?>