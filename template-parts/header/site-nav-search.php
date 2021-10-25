<div class="site-nav-search container">
    <form action="<?php bloginfo('url') ?>" role="search">
        <label for="header-search-input" class="sr_only">Search for:</label>
        <input type="text" id="header-search-input" name="s" placeholder="search..." value="<?=get_search_query()?>">
        <button type="submit" aria-label="Submit"><i class="fa fa-search"></i></button>
    </form>
</div>