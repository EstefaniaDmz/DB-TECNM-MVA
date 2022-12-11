<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnodocumentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnodocumentoTable Test Case
 */
class AlumnodocumentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnodocumentoTable
     */
    protected $Alumnodocumento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Alumnodocumento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alumnodocumento') ? [] : ['className' => AlumnodocumentoTable::class];
        $this->Alumnodocumento = $this->getTableLocator()->get('Alumnodocumento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alumnodocumento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlumnodocumentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
