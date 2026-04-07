<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. venues ya existe — insertar salas base si no existen
        if (DB::table('venues')->where('slug', 'bro')->doesntExist()) {
            DB::table('venues')->insert([
                'name' => 'Brø Málaga', 'slug' => 'bro', 'active' => true,
                'created_at' => now(), 'updated_at' => now(),
            ]);
        }
        if (DB::table('venues')->where('slug', 'playa_aruba')->doesntExist()) {
            DB::table('venues')->insert([
                'name' => 'Playa Aruba', 'slug' => 'playa_aruba', 'active' => true,
                'created_at' => now(), 'updated_at' => now(),
            ]);
        }

        // 2. venue_id ya existe — rellenar desde venue (enum) si hay filas sin rellenar
        $venues = DB::table('venues')->pluck('id', 'slug');
        foreach ($venues as $slug => $id) {
            DB::table('events')->where('venue', $slug)->update(['venue_id' => $id]);
        }

        // 3. Eliminar la FK antigua (SET NULL — incompatible con NOT NULL)
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_venue_id_foreign');
        });

        // 4. Hacer venue_id NOT NULL
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('venue_id')->nullable(false)->change();
        });

        // 5. Añadir FK nueva con cascadeOnDelete
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('venue_id')->references('id')->on('venues')->cascadeOnDelete();
        });

        // 6. Eliminar columna venue antigua
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('venue');
        });
    }

    public function down(): void
    {
        if (!Schema::hasColumn('events', 'venue')) {
            Schema::table('events', function (Blueprint $table) {
                $table->enum('venue', ['bro', 'playa_aruba'])->nullable()->after('id');
            });
        }

        $venues = DB::table('venues')->pluck('slug', 'id');
        foreach ($venues as $id => $slug) {
            DB::table('events')->where('venue_id', $id)->update(['venue' => $slug]);
        }

        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['venue_id']);
            $table->dropColumn('venue_id');
        });

        Schema::dropIfExists('venues');
    }
};
