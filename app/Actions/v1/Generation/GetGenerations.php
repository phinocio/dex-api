<?php

declare(strict_types=1);

namespace App\Actions\v1\Generation;

use App\Models\Generation;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

final class GetGenerations
{
    public function execute(Request $request): mixed
    {
        $generations = QueryBuilder::for(Generation::class)
            ->allowedIncludes([
                AllowedInclude::relationship('games'),
                AllowedInclude::relationship('pokemon'),
            ])
            ->defaultSort('id')
            ->allowedSorts([
                AllowedSort::field('id'),
                AllowedSort::field('name'),
                AllowedSort::field('slug'),
                AllowedSort::field('new_pokemon'),
                AllowedSort::field('total_pokemon'),
            ])
            ->when($request->query('query'), function ($query) use ($request) {
                return $query->where(function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhere('slug', 'LIKE', '%'.$request->query('query').'%');
                });
            });

        $queryParams = $request->query();
        $pageParams = isset($queryParams['page']) && is_array($queryParams['page'])
            ? $queryParams['page']
            : [];

        if (isset($pageParams['size']) && $pageParams['size'] === 'all') {
            return $generations->clone()->get()->all();
        }

        if (isset($pageParams['size']) && is_numeric($pageParams['size'])) {
            return $generations->clone()->paginate((int) $pageParams['size']);
        }

        return $generations->clone()->paginate(30);
    }
}
