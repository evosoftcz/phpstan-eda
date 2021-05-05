<?php declare(strict_types = 1);

namespace PHPStan\Reflection\Eda;

use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\MethodsClassReflectionExtension;

class EdaFlowClassReflectionExtension implements MethodsClassReflectionExtension
{

	public function hasMethod(ClassReflection $classReflection, string $methodName): bool
	{
		return $classReflection->getName() === 'Eda\Flow';
	}

	public function getMethod(ClassReflection $classReflection, string $methodName): MethodReflection
	{
		return new EdaFlowMethodReflection($methodName, $classReflection);
	}

}
