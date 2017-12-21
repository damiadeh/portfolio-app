<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestimonyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestimonyTable Test Case
 */
class TestimonyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestimonyTable
     */
    public $Testimony;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.testimony'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Testimony') ? [] : ['className' => TestimonyTable::class];
        $this->Testimony = TableRegistry::get('Testimony', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Testimony);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
