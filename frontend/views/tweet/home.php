<?php 

// print_r($tweets);

foreach ($tweets as $noOfTweet => $tweet) {
	
/*	echo $tweet->tweet_id;
	echo '<br>';
	echo nl2br($tweet->tweet_content);
	echo '<br>';
	echo $tweet->tweet_time;
	echo '<br>';
	echo $tweet->tweet_user;
	echo '<br>';
	echo $tweet->tweet_image;
*/

  ?>

<h1>
<?= $tweet->tweet_id ?>
	
</h1>

<!-- user yii 2 formatter 'asRelativeDate'  -->
<?= $tweet->tweet_time ?>

<div>
 <?= // $tweet->tweet_user ?>
	<?php echo $tweet->tweetUser->username ?>
</div>

<p>
	
<?= nl2br($tweet->tweet_content) ?>
</p>



<?= $tweet->tweet_image ?>



 <?php 

}

 ?>



