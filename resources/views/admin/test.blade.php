<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="infinite-scroll">
	    @foreach($comments as $comment)
	        <h4 class="media-heading">{{ $comment->author_name }}
	            <small>{{ $comment->created_at->diffForHumans() }}</small>
	        </h4>
	        {{ $comment->body }}
	        <hr>
	    @endforeach

	    {{ $comments->links() }}
	</div>
</body>
</html>