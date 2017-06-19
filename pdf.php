<?
	class pdf implements Page{
		public function createPage(){
			echo 'new ' . __CLASS__ . ' page';
		}
	}