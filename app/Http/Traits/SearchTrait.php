<?php 

namespace App\Http\Traits;

use Illuminate\Support\Arr;
use Monolog\Handler\ElasticsearchHandler;

trait SearchTrait
{
    public static function bootSearchable()
    {
        self::observe(ElasticsearchObserver::class);
    }

    public function getSearchIndex(): string
    {
        return env('APP_NAME') . $this->getTable();
    }

    public function getSearchType(): string
    {
        return 'doc';
    }

    public function toSearchArray(): array 
    {
        return [ 'name' => $this->name, ];
    }
}