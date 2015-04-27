<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 0:26
 */

App::uses('AppController', 'Controller');

class DecksController extends AppController{
    public function add() {
        $this->loadModel('Category');
        $categorys = $this->Category->find('all', [
            'order' => [
                'Category.name' => 'ASC'
            ]
        ]);
        $this->set('categorys', $categorys);
        if($this->request->is('POST')){
            $User = $this->Session->read('User');
            pr($this->request->data);
            $data = [
                'Deck' => [
                    'name' => trim($this->request->data['Deck']['deckname']),
                    'description' => trim($this->request->data['Deck']['description']),
                    'status' => trim($this->request->data['Deck']['select']),
                    'user_id' => $User['User']['id'],
                    'category_id' => '1',
                    'created' => date("Y-m-d H:i:s"),
                    'modified' => date("Y-m-d H:i:s")
                ]
            ];

            if($this->Deck->saveAssociated($data)){
                $this->loadModel('Card');
                $this->Card->create();
                $data1 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front1']['name'],
                        'back' =>$this->request->data['Deck']['back1']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data1);
                $data2 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front2']['name'],
                        'back' =>$this->request->data['Deck']['back2']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data2);

                $data3 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front3']['name'],
                        'back' =>$this->request->data['Deck']['back3']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data3);

                $data4 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front4']['name'],
                        'back' =>$this->request->data['Deck']['back4']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data4);

                $data5 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front5']['name'],
                        'back' =>$this->request->data['Deck']['back5']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data5);

                $data6 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front6']['name'],
                        'back' =>$this->request->data['Deck']['back6']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data6);

                $data7 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front7']['name'],
                        'back' =>$this->request->data['Deck']['back7']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data7);

                $data8 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front8']['name'],
                        'back' =>$this->request->data['Deck']['back8']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data8);

                $data9 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front9']['name'],
                        'back' =>$this->request->data['Deck']['back9']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data9);

                $data10 = [
                    'Card' => [
                        'deck_id' => $this->Deck->getLastInsertId(),
                        'front' =>$this->request->data['Deck']['front10']['name'],
                        'back' =>$this->request->data['Deck']['back10']['name'],
                        'created' => date("Y-m-d H:i:s"),
                        'modified' => date("Y-m-d H:i:s")
                    ]
                ];
                $this->Card->saveAssociated($data10);
//
//                $data11 = [
//                    'Card' => [
//                        'deck_id' => $this->Deck->getLastInsertId(),
//                        'front' =>$this->request->data['Deck']['front11']['name'],
//                        'back' =>$this->request->data['Deck']['back11']['name'],
//                        'created' => date("Y-m-d H:i:s"),
//                        'modified' => date("Y-m-d H:i:s")
//                    ]
//                ];
//                $this->Card->saveAssociated($data11);
//
//                $data12 = [
//                    'Card' => [
//                        'deck_id' => $this->Deck->getLastInsertId(),
//                        'front' =>$this->request->data['Deck']['front12']['name'],
//                        'back' =>$this->request->data['Deck']['back12']['name'],
//                        'created' => date("Y-m-d H:i:s"),
//                        'modified' => date("Y-m-d H:i:s")
//                    ]
//                ];
//                $this->Card->saveAssociated($data12);
//
//                $data13 = [
//                    'Card' => [
//                        'deck_id' => $this->Deck->getLastInsertId(),
//                        'front' =>$this->request->data['Deck']['front13']['name'],
//                        'back' =>$this->request->data['Deck']['back13']['name'],
//                        'created' => date("Y-m-d H:i:s"),
//                        'modified' => date("Y-m-d H:i:s")
//                    ]
//                ];
//                $this->Card->saveAssociated($data13);
//
//                $data14 = [
//                    'Card' => [
//                        'deck_id' => $this->Deck->getLastInsertId(),
//                        'front' =>$this->request->data['Deck']['front14']['name'],
//                        'back' =>$this->request->data['Deck']['back14']['name'],
//                        'created' => date("Y-m-d H:i:s"),
//                        'modified' => date("Y-m-d H:i:s")
//                    ]
//                ];
//                $this->Card->saveAssociated($data14);
//
//                $data15 = [
//                    'Card' => [
//                        'deck_id' => $this->Deck->getLastInsertId(),
//                        'front' =>$this->request->data['Deck']['front15']['name'],
//                        'back' =>$this->request->data['Deck']['back15']['name'],
//                        'created' => date("Y-m-d H:i:s"),
//                        'modified' => date("Y-m-d H:i:s")
//                    ]
//                ];
//
//                $this->Card->saveAssociated($data15);

                $this->Session->setFlash('Create quiz is success','default', array("class" => 'alert alert-success'));
                $this->redirect([
                    'controller' => 'users',
                    'action' => 'index'
                ]);
            }else{
                $this->Session->setFlash('Create quiz is fail','default', array("class" => 'alert alert-danger'));
            }
        }

    }

    function uploadFiles($image=null,$name=null)
    {
        $image = $image;
        //allowed image types
        $imageTypes = array("image/gif", "image/jpeg", "image/png");
        //upload folder - make sure to create one in webroot
        $uploadFolder = "/img/profilepic";
        //full path to upload folder
        $uploadPath = WWW_ROOT . $uploadFolder;

        //check if image type fits one of allowed types
        foreach ($imageTypes as $type) {
            if ($type == $image['type']) {
                if ($image['error'] == 0) {
                    //image file name
                    $imageName = $image['name'];
//                    //check if file exists in upload folder
//                    if (file_exists($uploadPath . '/' . $imageName)) {
//                        //create full filename with timestamp
//                        $imageName = date('His') . $imageName;
//                    }
                    //create full path with image name
                    $full_image_path = $uploadPath . '/' . $imageName;
                    //upload image to upload folder
                    if (move_uploaded_file($image['tmp_name'], $full_image_path)) {
                        $this->Session->setFlash('File saved successfully');
                        //$this->set('imageName',$imageName);
                    } else {
                        $this->Session->setFlash('There was a problem uploading file. Please try again.');
                    }
                } else {
                    $this->Session->setFlash('Error uploading file.');
                }
                break;
            } else {
                $this->Session->setFlash('Unacceptable file type');
            }
        }
    }
}