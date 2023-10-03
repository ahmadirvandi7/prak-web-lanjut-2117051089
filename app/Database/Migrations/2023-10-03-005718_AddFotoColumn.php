<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFotoColumn extends Migration
{
    $this>forge->addColumn('user',[
        'foto' => [
            'type' => 'VARCHAR',
            'constraint'=> 255,
            'null' => true,
        ]
    ]);
    $this->forge->dropColumn('user',['foto']);
    public function up()
    {
        //
    }

    public function down()
    {
        //
    }
}
