<?php


class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $todos = Todo::getTodos();
        $this->view->todos = $todos;
    }

    
    public function formAction($id = null)
    {
        $object = new Todo();
        if($id) $object = Todo::findFirstById($id);
        if ($this->request->isPost()) {
            $request = $this->request->getPost();
            $object->title = $request['title'];
            $object->status = $request['status'] || 1;
            $object->save();
            if($object->save()){
                $this->flash->success('Thêm mới thành công');
                $this->response->redirect('/');
            }
        }
        $this->view->object = $object;
    }

    public function deleteAction($id)
    {
        $result = Todo::findFirstById($id);
        if ($result) {
            $result->delete();
            $this->flash->success("Xóa dữ liệu thành công");
            return $this->response->redirect('/');
        }
    }
}

