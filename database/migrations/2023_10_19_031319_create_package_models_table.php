<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\PackageModel;
class CreatePackageModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('package_models', function (Blueprint $table) {
            $table->uuid('transaction_id');
            $table->string('customer_name');
            $table->string('customer_code');
            $table->decimal('transaction_amount', 10, 2);
            $table->decimal('transaction_discount', 10, 2);
            $table->string('transaction_additional_field');
            $table->integer('transaction_payment_type');
            $table->string('transaction_state');
            $table->string('transaction_code');
            $table->integer('transaction_order');
            $table->string('location_id');
            $table->integer('organization_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('transaction_payment_type_name');
            $table->decimal('transaction_cash_amount', 10, 2);
            $table->decimal('transaction_cash_change', 10, 2);
            $table->json('customer_attribute');
            $table->json('connote');
            $table->uuid('connote_id');
            $table->json('origin_data');
            $table->json('destination_data');
            $table->uuid('koli_data');
            $table->json('custom_field');
            $table->json('currentLocation');
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_models');
    }
}
