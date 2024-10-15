<?php

declare(strict_types=1);

use App\Enums\Game;
use App\Enums\GameDex;

return [
    'game_dex_mappings' => [
        Game::HOME->value => [GameDex::HOME_NATIONAL],

        Game::RED->value => [GameDex::GEN_1_NATIONAL, GameDex::GEN_1_GENERATIONAL],
        Game::BLUE->value => [GameDex::GEN_1_NATIONAL, GameDex::GEN_1_GENERATIONAL],
        Game::YELLOW->value => [GameDex::GEN_1_NATIONAL, GameDex::GEN_1_GENERATIONAL],

        Game::GOLD->value => [GameDex::GEN_2_NATIONAL, GameDex::GEN_2_GENERATIONAL],
        Game::SILVER->value => [GameDex::GEN_2_NATIONAL, GameDex::GEN_2_GENERATIONAL],
        Game::CRYSTAL->value => [GameDex::GEN_2_NATIONAL, GameDex::GEN_2_GENERATIONAL],

        Game::RUBY->value => [GameDex::GEN_3_NATIONAL, GameDex::GEN_3_GENERATIONAL, GameDex::RSE_REGIONAL],
        Game::SAPPHIRE->value => [GameDex::GEN_3_NATIONAL, GameDex::GEN_3_GENERATIONAL, GameDex::RSE_REGIONAL],
        Game::EMERALD->value => [GameDex::GEN_3_NATIONAL, GameDex::GEN_3_GENERATIONAL, GameDex::RSE_REGIONAL],
        Game::FIRE_RED->value => [GameDex::GEN_3_NATIONAL, GameDex::GEN_1_GENERATIONAL, GameDex::FRLG_REGIONAL],
        Game::LEAF_GREEN->value => [GameDex::GEN_3_NATIONAL, GameDex::GEN_1_GENERATIONAL, GameDex::FRLG_REGIONAL],

        Game::DIAMOND->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_4_GENERATIONAL, GameDex::DP_REGIONAL],
        Game::PEARL->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_4_GENERATIONAL, GameDex::DP_REGIONAL],
        Game::PLATINUM->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_4_GENERATIONAL, GameDex::PT_REGIONAL],
        Game::HEART_GOLD->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_2_GENERATIONAL, GameDex::HGSS_REGIONAL],
        Game::SOUL_SILVER->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_2_GENERATIONAL, GameDex::HGSS_REGIONAL],

        Game::BLACK->value => [GameDex::GEN_5_NATIONAL, GameDex::GEN_5_GENERATIONAL, GameDex::BW_REGIONAL],
        Game::WHITE->value => [GameDex::GEN_5_NATIONAL, GameDex::GEN_5_GENERATIONAL, GameDex::BW_REGIONAL],
        Game::BLACK_2->value => [GameDex::GEN_5_NATIONAL, GameDex::GEN_5_GENERATIONAL, GameDex::B2W2_REGIONAL],
        Game::WHITE_2->value => [GameDex::GEN_5_NATIONAL, GameDex::GEN_5_GENERATIONAL, GameDex::B2W2_REGIONAL],

        Game::X->value => [GameDex::GEN_6_NATIONAL, GameDex::GEN_6_GENERATIONAL, GameDex::XY_REGIONAL],
        Game::Y->value => [GameDex::GEN_6_NATIONAL, GameDex::GEN_6_GENERATIONAL, GameDex::XY_REGIONAL],
        Game::OMEGA_RUBY->value => [GameDex::GEN_6_NATIONAL, GameDex::GEN_3_GENERATIONAL, GameDex::ORAS_REGIONAL],
        Game::ALPHA_SAPPHIRE->value => [GameDex::GEN_6_NATIONAL, GameDex::GEN_3_GENERATIONAL, GameDex::ORAS_REGIONAL],

        Game::SUN->value => [GameDex::GEN_7_NATIONAL, GameDex::GEN_7_GENERATIONAL, GameDex::SM_REGIONAL],
        Game::MOON->value => [GameDex::GEN_7_NATIONAL, GameDex::GEN_7_GENERATIONAL, GameDex::SM_REGIONAL],
        Game::ULTRA_SUN->value => [GameDex::GEN_7_NATIONAL, GameDex::GEN_7_GENERATIONAL, GameDex::USUM_REGIONAL],
        Game::ULTRA_MOON->value => [GameDex::GEN_7_NATIONAL, GameDex::GEN_7_GENERATIONAL, GameDex::USUM_REGIONAL],
        Game::LETS_GO_PIKACHU->value => [GameDex::GEN_1_NATIONAL, GameDex::GEN_1_GENERATIONAL, GameDex::LGPE_REGIONAL],
        Game::LETS_GO_EEVEE->value => [GameDex::GEN_1_NATIONAL, GameDex::GEN_1_GENERATIONAL, GameDex::LGPE_REGIONAL],

        Game::SWORD->value => [GameDex::GEN_8_GENERATIONAL, GameDex::SWSH_REGIONAL, GameDex::SWSH_IOA_REGIONAL, GameDex::SWSH_CT_REGIONAL],
        Game::SHIELD->value => [GameDex::GEN_8_GENERATIONAL, GameDex::SWSH_REGIONAL, GameDex::SWSH_IOA_REGIONAL, GameDex::SWSH_CT_REGIONAL],
        Game::BRILLIANT_DIAMOND->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_4_GENERATIONAL, GameDex::BDSP_REGIONAL],
        Game::SHINING_PEARL->value => [GameDex::GEN_4_NATIONAL, GameDex::GEN_4_GENERATIONAL, GameDex::BDSP_REGIONAL],
        Game::LEGENDS_ARCEUS->value => [GameDex::GEN_4_GENERATIONAL, GameDex::LA_REGIONAL],

        Game::SCARLET->value => [GameDex::GEN_9_GENERATIONAL, GameDex::SV_REGIONAL, GameDex::SV_TM_REGIONAL, GameDex::SV_ID_REGIONAL],
        Game::VIOLET->value => [GameDex::GEN_9_GENERATIONAL, GameDex::SV_REGIONAL, GameDex::SV_TM_REGIONAL, GameDex::SV_ID_REGIONAL],
    ],
];
