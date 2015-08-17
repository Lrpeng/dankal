<?php
	require_once '../Excel/entering.php';
	class upload{
		
		protected $fileName;
		protected $maxSize;
	
		protected $allowExt;
		protected $uploadPath;
		protected $imgFlag;
		protected $fileInfo;
		protected $error;
		protected $ext;
		
		/**
	 * @param string $fileName
	 * @param string $uploadPath
	 * @param string $imgFlag
	 * @param number $maxSize
	 * @param array $allowExt
	 * @param array $allowMime
	 */
	public function __construct($fileName,$uploadPath,$maxSize,$allowExt){
//		$this->fileName=$fileName;
		$this->maxSize=$maxSize;
		$this->allowExt=$allowExt;
		$this->uploadPath=$uploadPath;
		if(isset($_FILES[$fileName])){
			$this->fileInfo=$_FILES[$fileName];
		}else{
			echo "null";
		}
		
	}
	/**
	 * 检测上传文件是否出错
	 * @return boolean
	 */
	protected function checkError(){
		if(!is_null($this->fileInfo)){
			if($this->fileInfo['error']>0){
				switch($this->fileInfo['error']){
					case 1:
						$this->error='超过了PHP配置文件中upload_max_filesize选项的值';
						break;
					case 2:
						$this->error='超过了表单中MAX_FILE_SIZE设置的值';
						break;
					case 3:
						$this->error='文件部分被上传';
						break;
					case 4:
						$this->error='没有选择上传文件';
						break;
					case 6:
						$this->error='没有找到临时目录';
						break;
					case 7:
						$this->error='文件不可写';
						break;
					case 8:
						$this->error='由于PHP的扩展程序中断文件上传';
						break;
						
				}
				return false;
			}else{
				return true;
			}
		}else{
			$this->error='文件上传出错';
			return false;
		}
	}
	/**
	 * 检测上传文件的大小
	 * @return boolean
	 */
	protected function checkSize(){
		if($this->fileInfo['size']>$this->maxSize){
			$this->error='上传文件过大';
			return false;
		}
		return true;
	}
	/**
	 * 检测扩展名
	 * @return boolean
	 */
	protected function checkExt(){
		$this->ext=strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
		if(!in_array($this->ext,$this->allowExt)){
			$this->error='不允许的扩展名';
			return false;
		}
		return true;
	}
	
	/**
	 * 检测是否通过HTTP POST方式上传上来的
	 * @return boolean
	 */
	protected function checkHTTPPost(){
		if(!is_uploaded_file($this->fileInfo['tmp_name'])){
			$this->error='文件不是通过HTTP POST方式上传上来的';
			return false;
		}
		return true;
	}
	/**
	 *显示错误 
	 */
	protected function showError(){
		exit('<span style="color:red">'.$this->error.'</span>');
	}
	/**
	 * 检测目录不存在则创建
	 */
	protected function checkUploadPath(){
		if(!file_exists($this->uploadPath)){
			mkdir($this->uploadPath,0777,true) or die ('创建失败');
		}
	}
	/**
	 * 产生唯一字符串
	 * @return string
	 */
	protected function getUniName(){
		return md5(uniqid(microtime(true),true));
	}
	/**
	 * 上传文件
	 * @return string
	 */
	public function uploadFile($phonebook_id){
//		echo $phonebook_id."from upload";
		
		if($this->checkError()&&$this->checkSize()&&$this->checkExt()&&$this->checkHTTPPost()){
			$this->checkUploadPath();
			$this->destination=$this->uploadPath.'/'.$this->fileInfo['name'];
			if(@move_uploaded_file($this->fileInfo['tmp_name'], $this->destination)){
				$entering = new Entering();
				$entering -> reader_excel($this->destination,$phonebook_id);
				return  $this->destination;
			}else{
				$this->error='文件移动失败';
				$this->showError();
			}
		}else{
			$this->showError();
		}
	}
	}
	
	