<?php

namespace App\Providers;

use App\Http\View\Composers\FiltersComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PHPMailer::class, function($app) {
            $phpMailer = new PHPMailer(true);
            $phpMailer->isSMTP();
            $phpMailer->Host = env('ZOHO_HOST');
            $phpMailer->SMTPAuth = true;
            $phpMailer->Username = env('ZOHO_EMAIL');
            $phpMailer->Password = env('ZOHO_PASSWORD');
            $phpMailer->SMTPSecure = "tls";
            $phpMailer->Port = 587;
            $phpMailer->isHTML(true);
            $phpMailer->CharSet = "UTF-8";
            return $phpMailer;
        });

        $this->app->singleton(Post::class, function($app) {
            return new Client(HttpClient::create(['timeout' => 1000]));
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Money Format
        \Blade::directive('money', function ($amount) {
            return "<?php echo number_format($amount, 2); ?>";
        });

        // For Global Data
        View::composer('*', FiltersComposer::class);
    }
}
