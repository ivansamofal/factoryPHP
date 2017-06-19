<?
	class PageFactory{
		public function getPage($type){
			
			switch($type){
				case "pdf": return new pdf;
				case "txt": return new txt;
				case "php": return new php;
				default: throw new Exception("Error type");
			}
		}
	}