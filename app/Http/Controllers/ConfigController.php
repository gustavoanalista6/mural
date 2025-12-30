<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function __construct()
    {
        //
    }

    public function deploy()
    {
        // Lista de comandos para colocar o Laravel em produÃ§Ã£o
        $commands = [
            'composer install --no-dev --optimize-autoloader',
            'php artisan key:generate --force',
            'php artisan optimize:clear',
            'php artisan config:cache',
            'php artisan route:cache',
            'php artisan view:cache',
            'php artisan event:cache',
            'php artisan migrate --force',
            'php artisan db:seed --force',
            'chmod -R 775 storage bootstrap/cache',
            'chown -R www-data:www-data storage bootstrap/cache',
            'php artisan queue:restart',
            'php artisan optimize',
        ];

        // Detecta se o projeto usa Vite ou Laravel Mix
        if (file_exists(base_path('vite.config.js'))) {
            $commands[] = 'npm install';
            $commands[] = 'npm run build';
        } elseif (file_exists(base_path('webpack.mix.js'))) {
            $commands[] = 'npm install';
            $commands[] = 'npm run production';
        }

        $output = [];

        foreach ($commands as $command) {
            $output[] = "â–¶ï¸ Executando: {$command}";
            $result = shell_exec($command . ' 2>&1');
            
            // Corrige possÃ­veis problemas de encoding
            if ($result !== null) {
                $result = mb_convert_encoding($result, 'UTF-8', 'auto');
            }

            $output[] = $result ?: '(sem saÃ­da)';
            $output[] = str_repeat('-', 80);
        }

        // Garante que o JSON seja retornado corretamente em UTF-8
        return response()->json([
            'status' => 'success',
            'message' => 'Deploy executado com sucesso!',
            'output' => $output,
        ], 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
