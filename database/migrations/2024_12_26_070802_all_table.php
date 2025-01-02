<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255);
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('phone', 16);
            $table->string('email', 91);
            $table->timestamps();
        });

        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('province_id')->constrained('provinces');
            $table->timestamps();
        });

        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('district_id')->constrained('districts');
            $table->timestamps();
        });

        Schema::create('juridicals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name', 255);
            $table->timestamps();
        });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('code', 16);
        //     $table->string('email', 255);
        //     $table->string('username', 128);
        //     $table->string('password', 128);
        //     $table->string('name', 255);
        //     $table->tinyInteger('gender');
        //     $table->datetime('birthday');
        //     $table->string('address', 255);
        //     $table->string('phone', 16);
        //     $table->text('avata');
        //     $table->foreignId('role_id')->constrained('roles');
        //     $table->tinyInteger('status');
        //     $table->timestamps();
        // });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('intro', 255);
            $table->text('content');
            $table->string('meta_key', 255);
            $table->datetime('created_date');
            $table->text('image_link');
            $table->string('author', 255);
            $table->integer('view');
            $table->tinyInteger('status');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('post_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->decimal('price', 20, 2);
            $table->decimal('vat', 20, 2);
            $table->integer('day');
            $table->decimal('total', 20, 2);
            $table->string('name2', 255);
            $table->timestamps();
        });

        Schema::create('property_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255);
            $table->string('name', 255);
            $table->string('investor', 255);
            $table->string('address', 255);
            $table->text('image_link');
            $table->text('image_lish');
            $table->text('description');
            $table->decimal('price', 20, 2);
            $table->bigInteger('area');
            $table->string('scale', 255);
            $table->bigInteger('floors');
            $table->bigInteger('bedrooms');
            $table->bigInteger('bathrooms');
            $table->foreignId('direction_id')->constrained('directions');
            $table->foreignId('juridical_id')->constrained('juridicals');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('type_id')->constrained('property_types');
            $table->foreignId('ward_id')->constrained('wards');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('cus_id')->constrained('customers');
            $table->foreignId('post_type_id')->constrained('post_types');
            $table->text('map');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
        Schema::dropIfExists('post_types');
        Schema::dropIfExists('news');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('juridicals');
        Schema::dropIfExists('wards');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('directions');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('categories');
    }
};
