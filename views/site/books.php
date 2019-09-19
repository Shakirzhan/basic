<?

$arr = [];

$author_id = $_GET['author_id'];

foreach ($books as $book) {
	if (isset($author_id)) {
		if ($book->author_id == $author_id) {
			array_push($arr, array(
				'id' => $book->id,
				'name_book' => $book->name_book,
				'fullname_author' => $book->fullname_author,
				'author_id' => $book->author_id,
			));
		}
	} else {
		array_push($arr, array(
			'id' => $book->id,
			'name_book' => $book->name_book,
			'fullname_author' => $book->fullname_author,
			'author_id' => $book->author_id,
		));
	}
}

?>
<pre><?php print_r($arr); ?></pre>