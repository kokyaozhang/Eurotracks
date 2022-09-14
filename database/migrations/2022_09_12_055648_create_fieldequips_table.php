<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldequips', function (Blueprint $table) {
            $table->string('Identification_No')->primary();
            $table->string('Equipment_Name');
            $table->string('category');
            $table->string('Serial_No');
            $table->string('Software_Version');
            $table->string('Manufacturer_Name');
            $table->string('Supplier_Name');
            $table->string('classification');
            $table->date('date_received');
            $table->date('Service_date');
            $table->string('Location');
            $table->string('Operation_Section');
            $table->string('Manual_Location');
            $table->string('Authorized_User');
            $table->string('equip_limit');
            $table->text('Technical_Info');
            $table->string('Grouping');
            $table->string('Frequency');
            $table->string('Executor');
            $table->string('Registrant');
            $table->date('Registrant_date');
            $table->string('Authorizer');
            $table->date('Authorized_date');
            $table->string('Declaration');
            $table->date('Declaration_date');
            $table->string('Comment');
            $table->string('Comment_Approver');
            $table->date('Comment_Approval_date');
            $table->string('Notified_By');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fieldequips');
    }
};
