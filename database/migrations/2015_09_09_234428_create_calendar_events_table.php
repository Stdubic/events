<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCalendarEventsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_events', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->string('title');
            $table->string('phone');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->boolean('is_all_day');
            $table->string('background_color')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calendar_events');
    }
}