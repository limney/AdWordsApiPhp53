<?php

namespace AdWords\cm\v201109;



class Selector 
{
    /**
     * List of fields to select. Possible values are marked Selectable on the
     * entity&#039;s reference page. For example, for the CampaignService selector, refer
     * to the selectable fields from the {@link Campaign} reference page.
     * This field must contain distinct elements.
     * This field must not contain {@code null} elements.
     * This field is required and should not be {@code null}.
     * @var string
     */
    public $fields;
    /**
     * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
     * This field must not contain {@code null} elements.
     * @var \AdWords\cm\v201109\Predicate
     */
    public $predicates;
    /**
     * Range of dates for which you want to include data. If this value is omitted,
     * results for all dates are returned.
     * This range must be contained within the range [19700101, 20380101].
     * @var \AdWords\cm\v201109\DateRange
     */
    public $dateRange;
    /**
     * The fields on which you want to sort, and the sort order. The order in the list is
     * significant: The first element in the list indicates the primary sort order, the next
     * specifies the secondary sort order and so on.
     * @var \AdWords\cm\v201109\OrderBy
     */
    public $ordering;
    /**
     * Pagination information.
     * @var \AdWords\cm\v201109\Paging
     */
    public $paging;

    public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null)
    {
        $this->fields = $fields;
        $this->predicates = $predicates;
        $this->dateRange = $dateRange;
        $this->ordering = $ordering;
        $this->paging = $paging;
    }
}