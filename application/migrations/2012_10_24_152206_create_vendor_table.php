<?php

class Create_Vendor_Table {

    /**
     * Database Table Name
     * 
     * @var string
     */
    public $name = 'vendors';
    
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create Table
        Schema::create( $this->name, function($table){
            
            // Set the DB engine
            $table->engine = 'InnoDB';
            
            // Set the table columns
            $table->increments('id');
            $table->date('created_at')->nullable();
            $table->integer('asi_id')->unsigned();
            $table->integer('asi_number')->unsigned();
            $table->string('name')->nullable();
            $table->date('updated_at')->nullable(); 
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop Table
        Schema::drop( $this->name );
	}

}