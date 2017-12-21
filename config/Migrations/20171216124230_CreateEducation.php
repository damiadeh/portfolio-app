<?php
use Migrations\AbstractMigration;

class CreateEducation extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('education');
        $table->addColumn('school_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('sch_duration', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('sch_description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
