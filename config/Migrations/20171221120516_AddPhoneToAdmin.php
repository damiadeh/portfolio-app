<?php
use Migrations\AbstractMigration;

class AddPhoneToAdmin extends AbstractMigration
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
        $table = $this->table('admin');
        $table->addColumn('phone', 'biginteger', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
        $table->update();
    }
}
