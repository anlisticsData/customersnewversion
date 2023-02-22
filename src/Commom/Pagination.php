<?php

namespace Analistics\Customers\Commom;

class Pagination{
	private $totalPager=0;
	private $limit;
	private $maxLinks;
	private $pager=0;
	private $queryPagination="";


	public function __construct($totalPager,$pager,$queryPagination="",$limit=10,$maxLinks=2){
		$this->totalPager =  $totalPager;
		$this->limit=$limit;
		$this->maxLinks = $maxLinks;
		$this->pager=$pager;
		$this->queryPagination =$queryPagination;
	}

	public function calculatePaginationLinks(){
		return ceil($this->maxLinks / 2);
	}

	public function initialPaginationLink(){
		return  $this->pager - $this->calculatePaginationLinks();
	}

	public function endPaginationLink(){
		return  $this->pager + $this->calculatePaginationLinks();
	}


	public function links(){
		$paginar=array(
			"initial"=>($this->initialPaginationLink() > 0) ? $this->initialPaginationLink():0,
			"end"    =>$this->endPaginationLink(),
			"limit"  =>$this->limit,
			"pager"	 =>$this->pager,
			"pager_active"=>0,
			"next_pager"=>array(),
		);
		$limit = $this->endPaginationLink();
		$paginar["limit"] =$limit ;
		for ($nextLink = $this->initialPaginationLink(); $nextLink <= $limit ; $nextLink++)
		{
			if ($nextLink == $this->pager){
				$paginar["pager_active"] = $nextLink;
			 }else{
				  if ($nextLink >= 1 && $nextLink <= $this->totalPager){
				   $paginar["next_pager"][] = $nextLink;
				  }
		 	}
		}
		return $paginar;
	}	
}


?>