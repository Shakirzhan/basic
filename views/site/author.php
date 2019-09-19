<?

$arr = [];

foreach ($books as $book) {
	array_push($arr, array(
		'id' => $book->id,
		'name_book' => $book->name_book,
		'fullname_author' => $book->fullname_author,
		'author_id' => $book->author_id,
	));
}
usort($arr, function($a, $b){
    return ($a['author_id'] - $b['author_id']);
});

$arr2 = [];
$author_id;
$i = [];

foreach ($arr as $el) {
	$author_id = $el['author_id'];
	if ($i[$el['author_id'].'-count'] == 3) {
		$i[$el['author_id']] = $el['author_id'];
	}
	
	if ( $i[$el['author_id'].'-count'] < 4 && $i[$el['author_id']] != $el['author_id']) {
		array_push($arr2, array(
			'id' => $el['id'],
			'name_book' => $el['name_book'],
			'fullname_author' => $el['fullname_author'],
			'author_id' => $el['author_id'],
		));
	}
	if ( !isset($i[$el['author_id'].'-count']) ) {
		$i[$el['author_id'].'-count'] = 0;
		$i[$el['author_id']] = null;
	}
	$i[$el['author_id'].'-count']++;
}

?>
<pre><?php print_r($arr2); ?></pre>