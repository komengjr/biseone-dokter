<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_doctor', function (Blueprint $table) {
            $table->id('M_DoctorID');
            $table->string('M_DoctorOldCode');
            $table->string('M_DoctorCode')->nullable();
            $table->string('M_DoctorM_BranchCode')->nullable();
            $table->string('M_DoctorPrefix')->nullable();
            $table->string('M_DoctorPrefix2')->nullable();
            $table->string('M_DoctorName')->nullable();
            $table->string('M_DoctorSufix')->nullable();
            $table->string('M_DoctorSufix2')->nullable();
            $table->string('M_DoctorSufix3')->nullable();
            $table->string('M_DoctorM_SexID')->nullable();
            $table->string('M_DoctorM_ReligionID')->nullable();
            $table->string('M_DoctorEmail')->nullable();
            $table->string('M_DoctorEmailIsDefault')->nullable();
            $table->string('M_DoctorHP')->nullable();
            $table->string('M_DoctorPhone')->nullable();
            $table->string('M_DoctorIsMarketingConfirm')->nullable();
            $table->string('M_DoctorIsPJ')->nullable();
            $table->string('M_DoctorIsDefaultPJ')->nullable();
            $table->string('M_DoctorM_SpecialID')->nullable();
            $table->string('M_DoctorIsClinic')->nullable();
            $table->string('M_DoctorIsDefault')->nullable();
            $table->string('M_DoctorIsDefaultMcu')->nullable();
            $table->string('M_DoctorCreated')->nullable();
            $table->string('M_DoctorLastUpdated')->nullable();
            $table->string('M_DoctorIsActive')->nullable();
            $table->string('M_DoctorReportCode')->nullable();
            $table->string('M_DoctorPrivateRequest')->nullable();
            $table->string('M_DoctorM_UserID')->nullable();
            $table->string('M_DoctorM_StaffID')->nullable();
            $table->string('M_DoctorM_StaffNIK')->nullable();
            $table->string('M_DoctorNote')->nullable();
            $table->string('M_DoctorIsUploaded')->nullable();
            $table->string('M_DoctorM_SpecialistID')->nullable();
            $table->string('M_DoctorDOB')->nullable();
            $table->string('M_DoctorUserID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_doctor');
    }
}
