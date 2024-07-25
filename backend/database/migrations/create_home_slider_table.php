Class CreateHomeSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slider_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_sliders');
    }

}