<?php

declare(strict_types=1);

namespace App\Actions\v1\GameDex;

use App\Models\GameDex;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

final class GetGameDexes
{
    public function execute(Request $request): mixed
    {
        $gameDexes = QueryBuilder::for(GameDex::class)
            ->allowedIncludes([
                AllowedInclude::relationship('games'),
                AllowedInclude::relationship('pokemon'),
            ])
            ->defaultSort('name')
            ->allowedSorts([
                AllowedSort::field('name'),
                AllowedSort::field('slug'),
                AllowedSort::field('type'),
            ])
            ->when($request->query('query'), function ($query) use ($request) {
                return $query->where(function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhere('slug', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhere('type', 'LIKE', '%'.$request->query('query').'%');
                });
            });

        $queryParams = $request->query();
        $pageParams = isset($queryParams['page']) && is_array($queryParams['page'])
            ? $queryParams['page']
            : [];

        if (isset($pageParams['size']) && $pageParams['size'] === 'all') {
            return $gameDexes->clone()->get()->all();
        }

        if (isset($pageParams['size']) && is_numeric($pageParams['size'])) {
            return $gameDexes->clone()->paginate((int) $pageParams['size']);
        }

        return $gameDexes->clone()->paginate(30);
    }
}
