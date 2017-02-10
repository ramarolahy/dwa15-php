<?php

# File: Book.php

class Book {

	# Properties
    public $title;
	public $author;
	public $publishedDate;


	# Methods
	/**
	*
	*/
	public function getPurchaseUrl(String $title) {

		$title = urlencode($title);

		return 'http://www.barnesandnoble.com/s/'.$title;
	}

	/**
	*
	*/
	public function getSummary() {
		return $this->title.' was written by '.$this->author.' and published in '.$this->publishedDate;
	}


}
