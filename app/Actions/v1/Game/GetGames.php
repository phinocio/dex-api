<?php

declare(strict_types=1);

namespace App\Actions\v1\Game;

use App\Models\Game;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

final class GetGames
{
    public function execute(Request $request): mixed
    {
        $games = QueryBuilder::for(Game::class)
            ->allowedIncludes([
                'pokemon',
                AllowedInclude::relationship('generation'),
                AllowedInclude::relationship('game_dexes', 'gameDexes'),
                AllowedInclude::relationship('national_dex', 'nationalDex'),
                AllowedInclude::relationship('regional_dex', 'regionalDex'),
                AllowedInclude::relationship('generational_dex', 'generationalDex'),
            ])
            ->defaultSort('name')
            ->allowedSorts([
                AllowedSort::field('name'),
                AllowedSort::field('slug'),
                AllowedSort::field('generation', 'generation_id'),
            ])
            ->when($request->query('query'), function ($query) use ($request) {
                return $query->where(function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhere('slug', 'LIKE', '%'.$request->query('query').'%')
                        ->orWhereRelation('generation', 'name', 'LIKE', '%'.$request->query('query').'%');
                });
            });

        $queryParams = $request->query();
        $pageParams = isset($queryParams['page']) && is_array($queryParams['page'])
            ? $queryParams['page']
            : [];

        if (isset($pageParams['size']) && $pageParams['size'] === 'all') {
            return $games->clone()->get()->all();
        }

        if (isset($pageParams['size']) && is_numeric($pageParams['size'])) {
            return $games->clone()->paginate((int) $pageParams['size']);
        }

        return $games->clone()->paginate(30);
    }
}
