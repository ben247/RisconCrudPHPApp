<?php

class Pagination {
    public $current_page;
    public $per_page;
    public $total_count;

    // Define an instance of pagination
    public function __construct($page=1, $per_page=1, $total_count=0) {
        $this->current_page = (int) $page; //The page number in the URL is a string so use (int)
        $this->per_page = (int) $per_page;
        $this->total_count = (int) $total_count;
    }

    // Find the offset using this formula
    public function offset() {
        return $this->per_page * ($this->current_page - 1);
    }

    // Round up using ceil in case total_count is odd
    public function total_pages() {
        return ceil($this->total_count / $this->per_page);
    }

    // Check to see if there is a pre or next page
    public function previous_page() {
        $prev = $this->current_page - 1;
        return ($prev > 0) ? $prev : false;
    }

    public function next_page() {
        $next = $this->current_page + 1;
        return ($next <= $this->total_pages()) ? $next : false;
    }

}

?>