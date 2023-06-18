<?php

namespace App\Doctrine;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Filter\SQLFilter;

class DiscontinuedFilter extends SQLFilter {
	public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias): string {
		dd($targetEntity, $targetTableAlias);
	}

}