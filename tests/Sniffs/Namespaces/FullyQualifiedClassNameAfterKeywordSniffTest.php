<?php declare(strict_types = 1);

namespace SlevomatCodingStandard\Sniffs\Namespaces;

class FullyQualifiedClassNameAfterKeywordSniffTest extends \SlevomatCodingStandard\Sniffs\TestCase
{

	public function testThrowExceptionForUndefinedConstant(): void
	{
		try {
			$this->checkFile(
				__DIR__ . '/data/fullyQualifiedExtends.php',
				['keywordsToCheck' => ['T_FOO']]
			);
			$this->fail();
		} catch (\SlevomatCodingStandard\Sniffs\Namespaces\UndefinedKeywordTokenException $e) {
			$this->assertContains('T_FOO', $e->getMessage());
			$this->assertSame('T_FOO', $e->getKeyword());
		}
	}

	public function testCheckNothingWhenNoKeywordsAreConfigured(): void
	{
		$fileReport = $this->checkFile(__DIR__ . '/data/fullyQualifiedExtends.php');
		$this->assertEmpty($fileReport->getErrors());
	}

	public function testFixableFullyQualified(): void
	{
		$report = $this->checkFile(__DIR__ . '/data/fixableFullyQualifiedClassNameAfterKeyword.php', [
			'keywordsToCheck' => [
				'T_EXTENDS',
				'T_IMPLEMENTS',
			],
		]);
		$this->assertAllFixedInFile($report);
	}

}
