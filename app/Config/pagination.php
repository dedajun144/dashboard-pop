<?php
$config = [
    'baseURL' => base_url('blog'), // the base URL for the pagination links
    'totalRows' => $total_posts, // the total number of items to paginate
    'perPage' => 10, // the number of items to display per page
    'uriSegment' => 2, // the URI segment that contains the page number
    'usePageNumbers' => true, // use page numbers instead of offsets
    'fullTagOpen' => '<nav aria-label="Page navigation"><ul class="pagination">', // opening tag for the pagination container
    'fullTagClose' => '</ul></nav>', // closing tag for the pagination container
    'firstLink' => 'First', // text for the "first" link
    'lastLink' => 'Last', // text for the "last" link
    'nextLink' => 'Next', // text for the "next" link
    'prevLink' => 'Previous', // text for the "previous" link
    'attributes' => ['class' => 'page-link'], // HTML attributes for the pagination links
];