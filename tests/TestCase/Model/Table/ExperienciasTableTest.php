<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperienciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperienciasTable Test Case
 */
class ExperienciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperienciasTable
     */
    public $Experiencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.experiencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Experiencias') ? [] : ['className' => 'App\Model\Table\ExperienciasTable'];
        $this->Experiencias = TableRegistry::get('Experiencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Experiencias);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
