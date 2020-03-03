<?php

use Phinx\Migration\AbstractMigration;

class CreateTasksTable extends AbstractMigration
{
    public function up()
    {
        $this->execute(<<<SQL
create table task
(
	id int auto_increment primary key, 
	task varchar(255) null, 
	is_done bool default 0 null,
	is_deleted bool default 0 null,
	created datetime default current_timestamp not null,
	modified datetime default current_timestamp ON UPDATE CURRENT_TIMESTAMP not null
);

create unique index task_id_uindex
	on task (id);

SQL
        );
    }

    public function down()
    {
        $this->table('task')->drop()->save();
    }
}
