<?php

namespace RobinDirksen1\LaravelRequestLogger;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class RequestLogger
{
    public function saveLog($data, $type = 'access')
    {
        if (empty($type)) {
            throw new \Exception('Type isnt correct set.');
        }

        $base_path = 'logs/laravel-request-logger';

        $folder = storage_path($base_path);

        if (! File::exists($folder)) {
            $result = File::makeDirectory($folder);

            if (! $result) {
                throw new \Exception('Cannot create folder in storage path.');
            }
        }

        $date_folder = Carbon::now()->format('Y-m-d');
        $file = storage_path($base_path.'/'.$date_folder.'/'.$type.'.log');

        $write_check = File::put($file, $data);
        if (! $write_check) {
            throw new \Exception('Cannot write content to file.');
        }

        return true;
    }
}
