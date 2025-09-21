<?php

declare(strict_types=1);

namespace App\Actions\v1\Pokemon;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

final class GetPokemons
{
    public function execute(Request $request): mixed
    {
        $pokemon = QueryBuilder::for(Pokemon::class)
            ->allowedIncludes([
                AllowedInclude::relationship('evolvesFrom'),
                AllowedInclude::relationship('forms'),
                AllowedInclude::relationship('games'),
                AllowedInclude::relationship('generation'),
                AllowedInclude::relationship('sprites'),
            ])
            ->defaultSort('national_dex_number')
            ->allowedSorts([
                AllowedSort::field('national_dex_number'),
                AllowedSort::field('name'),
                AllowedSort::field('slug'),
                AllowedSort::field('generation', 'generation_id'),
            ])
            ->when($request->query('query'), function ($query) use ($request) {
                return $query->where(function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhere('slug', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhere('national_dex_number', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhereRelation('generation', 'name', 'LIKE', '%'.$request->query('query').'%');
                });
            });

        $queryParams = $request->query();
        $pageParams = isset($queryParams['page']) && is_array($queryParams['page'])
            ? $queryParams['page']
            : [];

        if (isset($pageParams['size']) && $pageParams['size'] === 'all') {
            return $pokemon->clone()->get()->all();
        }

        if (isset($pageParams['size']) && is_numeric($pageParams['size'])) {
            return $pokemon->clone()->paginate((int) $pageParams['size']);
        }

        return $pokemon->clone()->paginate(30);
    }
}
