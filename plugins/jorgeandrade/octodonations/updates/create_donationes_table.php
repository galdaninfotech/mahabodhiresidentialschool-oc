<?php namespace JorgeAndrade\OctoDonations\Updates;

use Schema;
use DB;
use October\Rain\Database\Updates\Migration;

class CreateDonationesTable extends Migration
{

    public function up()
    {
        Schema::create('jorgeandrade_octodonations_donationes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('country')->nullable();
            $table->text('comment')->nullable();
            $table->string('paymentid');
            $table->string('amount');
            $table->string('currency');
            $table->string('hash')->nullable();
            $table->boolean('is_complete')->default(0);
            $table->boolean('is_cancel')->default(0);
            $table->boolean('is_live')->default(0);
            $table->timestamps();
        });

        // DB::insert('insert into ');
    }

    public function down()
    {
        Schema::dropIfExists('jorgeandrade_octodonations_donationes');
    }

}
