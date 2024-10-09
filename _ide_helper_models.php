<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $generation_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GameDex> $dexes
 * @property-read int|null $dexes_count
 * @property-read \App\Models\Generation $generation
 * @property-read \App\Models\GameDex|null $generationalDex
 * @property-read \App\Models\GameDex|null $nationalDex
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pokemon> $pokemon
 * @property-read int|null $pokemon_count
 * @property-read \App\Models\GameDex|null $regionalDex
 * @method static \Illuminate\Database\Eloquent\Builder|Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereGenerationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereSlug($value)
 */
	class Game extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $game_id
 * @property string $type
 * @property-read \App\Models\Game $game
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pokemon> $pokemon
 * @property-read int|null $pokemon_count
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameDex whereType($value)
 */
	class GameDex extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $new_pokemon
 * @property int $total_pokemon
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Game> $games
 * @property-read int|null $games_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pokemon> $pokemon
 * @property-read int|null $pokemon_count
 * @method static \Illuminate\Database\Eloquent\Builder|Generation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Generation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Generation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereNewPokemon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereTotalPokemon($value)
 */
	class Generation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $generation_id
 * @property int $national_dex_number
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Game> $games
 * @property-read int|null $games_count
 * @property-read \App\Models\Generation $generation
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sprite> $sprites
 * @property-read int|null $sprites_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereGenerationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereNationalDexNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pokemon whereSlug($value)
 */
	class Pokemon extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $url
 * @property string $version
 * @property bool $shiny
 * @property int $pokemon_id
 * @property-read \App\Models\Pokemon $pokemon
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite wherePokemonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite whereShiny($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sprite whereVersion($value)
 */
	class Sprite extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

