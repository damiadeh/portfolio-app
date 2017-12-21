<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperienceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperienceTable Test Case
 */
class ExperienceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperienceTable
     */
    public $Experience;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.experience'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Experience') ? [] : ['className' => ExperienceTable::class];
        $this->Experience = TableRegistry::get('Experience', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Experience);

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
