<?php

namespace GollumSF\Doctrine;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class TinyInt extends Type {
	const TINYINT = 'tinyint';
	
	public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
		return 'TINYINT';
	}
	
	public function getName() {
		return self::TINYINT;
	}
}
