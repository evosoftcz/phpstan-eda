<?php declare(strict_types = 1);

namespace PHPStan\Reflection\Eda;

use PHPStan\Reflection\ClassMemberReflection;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\FunctionVariant;
use PHPStan\Reflection\MethodReflection;
use PHPStan\TrinaryLogic;
use PHPStan\Type\Generic\TemplateTypeMap;
use PHPStan\Type\ObjectType;

class EdaFlowMethodReflection implements MethodReflection
{

	/** @var string */
	private $name;

	/** @var \PHPStan\Reflection\ClassReflection */
	private $edaFlow;

	public function __construct(string $name, ClassReflection $edaFlow)
	{
		$this->name = $name;
		$this->edaFlow = $edaFlow;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getDeclaringClass(): ClassReflection
	{
		return $this->edaFlow;
	}

	public function getPrototype(): ClassMemberReflection
	{
		return $this;
	}

	public function isStatic(): bool
	{
		return false;
	}

	public function isPrivate(): bool
	{
		return false;
	}

	public function isPublic(): bool
	{
		return true;
	}

	public function getVariants(): array
	{
		return [
			new FunctionVariant(
				TemplateTypeMap::createEmpty(),
				TemplateTypeMap::createEmpty(),
				[],
				true,
				new ObjectType('Eda\Flow')
			),
		];
	}

	public function getDocComment(): ?string
	{
		return null;
	}

	public function isDeprecated(): \PHPStan\TrinaryLogic
	{
		return TrinaryLogic::createNo();
	}

	public function getDeprecatedDescription(): ?string
	{
		return null;
	}

	public function isFinal(): \PHPStan\TrinaryLogic
	{
		return TrinaryLogic::createNo();
	}

	public function isInternal(): \PHPStan\TrinaryLogic
	{
		return TrinaryLogic::createNo();
	}

	public function getThrowType(): ?\PHPStan\Type\Type
	{
		return null;
	}

	public function hasSideEffects(): \PHPStan\TrinaryLogic
	{
		return TrinaryLogic::createYes();
	}

}
