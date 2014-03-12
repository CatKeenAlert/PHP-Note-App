<?php 
namespace Home\Controller;
use Think\Controller;

class NoteController extends Controller{
	public function NoteList(){
		//echo "获取list列表";
		//echo "get note list 哈哈哈";

		//echo(C('USERNAME')); //C('')方法读取配置项

		//p($_SERVER);

		//dump($_SERVER);

		//var_dump($_SERVER);

		//echo "<pre>";
		//print_r($_SERVER);

		//say();

		$this->display();

		$db = M('data');

		$result = $db->select();
		dump($result);
	}

	public function index(){
		//Note首页Index，展示note列表

		$note = D('note');
		//p($note);

		$list = $note -> select();

		//p($list);

		$this->assign('note',$list);

		$this->display();
	}

	public function addNote(){
		//添加note方法
		header("Content-type: text/html; charset=utf-8");

		$note = M('note');
		
		//p($_POST);
		//echo $_POST['content'];

		$note->username= $_POST['username'];
		$note->content=$_POST['content'];
		$note->time=date('Y-m-d H:i:s');

		$note->add();

		$this->redirect('index');
	}

	//修改视图对应的Controller
	public function edit(){
		header("Content-type: text/html; charset=utf-8");
		//p($_GET);

		$note = M('note');

		//根据noteId再查一遍
		$row = $note->where('id='.$_GET['noteId'])->select();
		//p($row);

		$this->assign('editNote',$row);


		$this->display();
	}


	//编辑方法
	public function updateNote(){
		header("Content-type: text/html; charset=utf-8");
		//p($_POST);
		//die();

		$Note = M("Note");
		$Note->username = $_POST['username'];
		$Note->content = $_POST['content'];
		$Note->time = date('Y-m-d H:i:s');

		$Note->where('id='.$_POST['id'])->save(); 
		$this-> redirect('index');	
	}

	public function deleteNote(){
		//删除note方法
		$note = M('note');

		//p($_GET['noteId']);

		$note -> where('id='.$_GET['noteId']) -> delete();
		$this -> redirect('index');


	}

}
?>