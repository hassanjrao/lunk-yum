<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->foreignId('school_id')->constrained('schools')->after('password');
            $table->string('student_name')->after('school_id');
            $table->string('student_grade')->after('student_name');
            $table->string('student_id_image')->after('student_grade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('school_id');
            $table->dropColumn('student_name');
            $table->dropColumn('student_grade');
            $table->dropColumn('student_id_image');
        });
    }
}
