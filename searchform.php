<div class="row">
	<form action="<?php home_url( '/' );?>" method="get" class="col-md-6 col-md-offset-3">
		<div id="search-bar" class="input-group input-group-lg">
			<input type="text" class="form-control" name="s" placeholder="Search" value="<?php the_search_query(); ?>">
			<span class="input-group-btn">
				<input type="submit" class="btn btn-default" value="Go">
			</span>
		</div>
	</form>
</div>