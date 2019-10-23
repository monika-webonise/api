<?php
App::uses('AppController','Controller');



class CartController extends AppController{


   public function index(){

      $this->loadModel('Carts');
      $this->set(compact('Carts'));
        $this->set('_serialize', ['Carts']);
   }

   public function addCart() {

    $this->Carts->set($this->request->data);
      
    $this->layout = false;
    
    if($this->request->is('post')){

        $data = $this->request->data('json_decode', true);
       
            if(empty($data)){

                $data = $this->request->data;
            }
            
            if(!empty($data)){
                if($this->Carts->save($data)){

                    $response = array('status'=>'success','message'=>'Cart successfully created');
                } else{

                    $response = array('status'=>'failed', 'message'=>'Failed to save data');
                }
            }
        }
        
        $this->response->type('application/json');
        $this->response->body(json_encode($response));
        return $this->response->send();
    } 


    public function updateCart(){
    
    $this->layout = false;
    
    //check if HTTP method is PUT
    if($this->request->is('put')){
        
        $data = $this->request->input('json_decode', true);
        if(empty($data)){
            $data = $this->request->data;
        }
        
        //check if product ID was provided
        if(!empty($data['id'])){
            
            //set the product ID to update
            $this->Carts->id = $data['id'];
            if($this->Carts->save($data)){
                $response = array('status'=>'success','message'=>'Cart successfully updated.');
            } else {
                $response['message'] = "Failed to update Cart";
            }
        } else {
            $response['message'] = 'Please provide Cart id.';
        }
    }
    
    $this->response->type('application/json');
    $this->response->body(json_encode($response));
    return $this->response->send();
  }

  public function deleteCart(){

    $this->layout = false;

      //check if HTTP method is DELETE
    if($this->request->is('delete')){
        //get data from request object
        $data = $this->request->input('json_decode', true);
        if(empty($data)){
            $data = $this->request->data;
        }
        
        //check if product ID was provided
        if(!empty($data['id'])){
            if($this->Carts->delete($id, true)){
                $response = array('status'=>'success','message'=>'Cart successfully deleted');
            }
        }
    }

    $this->response->type('application/json');
    $this->response->body(json_encode($response));
    return $this->response->send();
  }

}

?>