<?php
function CheckSuccess($status){
    if($status =='Success'){
        echo '<div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                <b>Congratulations!</b> You have successfully submitted your request!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
}

function Success(){
    echo '<div class="alert alert-success alert-dismissible fade show col-12" role="alert">
            <b>Congratulations!</b> You are now in queue!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

    function deleteT(){
        if(!empty($_GET['delete'])){
            $delete = new delete($_GET['delete']);
            if($delete->deleteTask()){
                echo '<div class="d-flex justify-content-center">
                        <div class="col-md-6 alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Deleted</strong> , the queue is displayed.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        </div>';
            }else {
                echo '<div class="d-flex justify-content-center">
                    <div class="col-md-6 alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> cannot display queue.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>';
            }
        }
    }
function vald(){
     if(input::exists()){
      if(Token::check(Input::get('Token'))){
         if(!empty($_POST['Transaction'])){
             $_POST['Transaction'] = implode(',',input::get('Transaction'));
         }else{
            $_POST['Transaction'] ="";
         }
        $validate = new Validate;
        $validate = $validate->check($_POST,array(
            'username'=>array(
                'required'=>'true',
                'min'=>4,
                'max'=>20,
                'unique'=>'user'
            ),
            'Transaction'=>array(
                'required'=>'true'
            )));

            if($validate->passed()){
                $user = new user();
                $salt = Hash::salt(32);
                try {
                    $user->create(array(
                        'username'=>input::get('username'),
                        'transaction'=> input::get('Transaction'),
                    ));

                    $user->createC(array(
                        'checker'=> input::get('username'),

                    ));
                    $user->createV(array(
                        'verifier'=> input::get('username'),
                    ));

                    $user->createR(array(
                        'releasedby'=> input::get('username'),

                    ));
                } catch (Exception $e) {
                    die($e->getMessage());
                }

                Success();
            }else{
                foreach ($validate->errors()as $error) {
                pError($error);
                }
            }
        }
            }else{
                return false;
            }
        }

 ?>
