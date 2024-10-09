<?php

declare(strict_types=1);

use App\Enums\Game;
use App\Enums\GameDex;

return [
    'game_dex_mappings' => [
        Game::RED->value => GameDex::RBY_NATIONAL->value,
        Game::BLUE->value => GameDex::RBY_NATIONAL->value,
        Game::YELLOW->value => GameDex::RBY_NATIONAL->value,
        Game::GOLD->value => [GameDex::GSC_GENERATIONAL->value, GameDex::GSC_NATIONAL->value],
        Game::SILVER->value => [GameDex::GSC_GENERATIONAL->value, GameDex::GSC_NATIONAL->value],
        Game::CRYSTAL->value => [GameDex::GSC_GENERATIONAL->value, GameDex::GSC_NATIONAL->value],
        Game::RUBY->value => [GameDex::RSE_REGIONAL->value, GameDex::RSE_NATIONAL->value],
        Game::SAPPHIRE->value => [GameDex::RSE_REGIONAL->value, GameDex::RSE_NATIONAL->value],
        Game::EMERALD->value => [GameDex::RSE_REGIONAL->value, GameDex::RSE_NATIONAL->value],
        Game::DIAMOND->value => GameDex::DP_REGIONAL->value,
        Game::PEARL->value => GameDex::DP_REGIONAL->value,
        Game::PLATINUM->value => [GameDex::DPPT_NATIONAL->value, GameDex::DPPT_GENERATIONAL->value, GameDex::PT_REGIONAL->value],
        Game::HEART_GOLD->value => [GameDex::HGSS_REGIONAL->value, GameDex::HGSS_NATIONAL->value, GameDex::HGSS_GENERATIONAL->value],
        Game::SOUL_SILVER->value => [GameDex::HGSS_REGIONAL->value, GameDex::HGSS_NATIONAL->value, GameDex::HGSS_GENERATIONAL->value],
        Game::BLACK->value => GameDex::BW_REGIONAL->value,
        Game::WHITE->value => GameDex::BW_REGIONAL->value,
        Game::BLACK_2->value => [GameDex::BW_B2W2_NATIONAL->value, GameDex::BW_B2W2_GENERATIONAL->value],
        Game::WHITE_2->value => [GameDex::BW_B2W2_NATIONAL->value, GameDex::BW_B2W2_GENERATIONAL->value],
        Game::X->value => [GameDex::XY_REGIONAL->value, GameDex::XY_NATIONAL->value, GameDex::XY_GENERATIONAL->value],
        Game::Y->value => [GameDex::XY_REGIONAL->value, GameDex::XY_NATIONAL->value, GameDex::XY_GENERATIONAL->value],
        Game::OMEGA_RUBY->value => [GameDex::ORAS_REGIONAL->value, GameDex::ORAS_NATIONAL->value, GameDex::ORAS_GENERATIONAL->value],
        Game::ALPHA_SAPPHIRE->value => [GameDex::ORAS_REGIONAL->value, GameDex::ORAS_NATIONAL->value, GameDex::ORAS_GENERATIONAL->value],
        Game::SUN->value => [GameDex::SM_REGIONAL->value, GameDex::SM_USUM_NATIONAL->value, GameDex::SM_USUM_GENERATIONAL->value],
        Game::MOON->value => [GameDex::SM_REGIONAL->value, GameDex::SM_USUM_NATIONAL->value, GameDex::SM_USUM_GENERATIONAL->value],
        Game::ULTRA_SUN->value => GameDex::USUM_REGIONAL->value,
        Game::ULTRA_MOON->value => GameDex::USUM_REGIONAL->value,
        Game::LETS_GO_PIKACHU->value => [GameDex::LGPE_REGIONAL->value, GameDex::LGPE_NATIONAL->value, GameDex::LGPE_GENERATIONAL->value],
        Game::LETS_GO_EEVEE->value => [GameDex::LGPE_REGIONAL->value, GameDex::LGPE_NATIONAL->value, GameDex::LGPE_GENERATIONAL->value],
        Game::SWORD->value => [GameDex::SWSH_REGIONAL->value, GameDex::SWSH_GENERATIONAL->value, GameDex::SWSH_IOA_REGIONAL->value, GameDex::SWSH_CT_REGIONAL->value],
        Game::SHIELD->value => [GameDex::SWSH_REGIONAL->value, GameDex::SWSH_GENERATIONAL->value, GameDex::SWSH_IOA_REGIONAL->value, GameDex::SWSH_CT_REGIONAL->value],
        Game::LEGENDS_ARCEUS->value => [GameDex::LA_REGIONAL->value, GameDex::LA_GENERATIONAL->value],
        Game::SCARLET->value => [GameDex::SV_REGIONAL->value, GameDex::SV_NATIONAL->value, GameDex::SV_GENERATIONAL->value, GameDex::SV_TM_REGIONAL->value],
        Game::VIOLET->value => [GameDex::SV_REGIONAL->value, GameDex::SV_NATIONAL->value, GameDex::SV_GENERATIONAL->value],
    ],
];
