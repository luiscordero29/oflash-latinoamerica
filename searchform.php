<form id="search-input" class="form-inline" method="get"  action="<?php echo home_url( '/' ); ?>">
  	<div class="input-group">
	    <input type="text" class="form-control" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s">
        <div class="input-group-append">
          	<div class="input-group-text"><i class="fa fa-search"></i></div>
        </div>
  	</div>
</form>