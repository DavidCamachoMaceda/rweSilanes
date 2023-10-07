<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('iniciales');
            $table->string('fecha_nacimiento');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('estado');
            $table->string('educacion');
            $table->string('motivo');
            $table->string('id_medico');
            $table->string('id_paciente');
            $table->string('id_consultorio');
            $table->string('id_medicamento');
            $table->string('id_laboratorio');
            $table->string('id_padecimiento');
            $table->string('id_seguimiento');
            $table->string('id_visita');
            $table->string('id_semanal');
            $table->string('id_mensual');
            $table->string('id_calidadvida');
            $table->string('id_satdiab');
            $table->string('id_adhdiab');
            $table->string('id_sathta');
            $table->string('id_tratamiento');
            $table->string('estatus');
            $table->string('rol');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
