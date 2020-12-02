<?php
//echo timeago('2020-04-09 23:58:10');
function timeago($timestamp){
	$time_ago = strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $time_ago;
	$seconds = $time_difference;
	$minutes = round($seconds / 60);
	$hours = round($seconds / 3600);
	$days = round($seconds / 86400);
	$weeks = round($seconds / 604800);
	$months = round($seconds / 2629440);
	$years = round($seconds / 31553280);

	if($seconds <= 60){
		return "few seconds ago";
	}elseif($minutes <= 60){
		if($minutes == 1){
			return "One minute ago";
		}else{
			return "$minutes minutes ago";
		}
	}elseif($hours <= 24){
		if($hours == 1){
			return "an hours ago";
		}else{
			return "$hours hours ago";
		}
	}elseif($days <= 7){
		if($days == 1){
			return "1 day ago";
		}else{
			return "$days days ago";
		}
	}elseif($weeks <= 4.3){
		if($weeks == 1){
			return "a week ago";
		}else{
			return "$weeks weeks ago";
		}
	}elseif($months <= 12){
		if($months == 1){
			return "a month ago";
		}else{
			return "$months months ago";
		}
	}else{

		if($years == 1){
			return " 1 year ago";
		}else{
			return "$years years ago";
		}
	}
}

?>