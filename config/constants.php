<?php

declare(strict_types=1);

use App\Enums\Game;
use App\Enums\GameDex;

return [
    'game_dex_mappings' => [

        Game::HOME->value => GameDex::HOME_NATIONAL,

        Game::RED->value => [GameDex::GEN_1_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value],
        Game::BLUE->value => [GameDex::GEN_1_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value],
        Game::YELLOW->value => [GameDex::GEN_1_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value],

        Game::GOLD->value => [GameDex::GEN_2_NATIONAL->value, GameDex::GEN_2_GENERATIONAL->value],
        Game::SILVER->value => [GameDex::GEN_2_NATIONAL->value, GameDex::GEN_2_GENERATIONAL->value],
        Game::CRYSTAL->value => [GameDex::GEN_2_NATIONAL->value, GameDex::GEN_2_GENERATIONAL->value],

        Game::RUBY->value => [GameDex::GEN_3_NATIONAL->value, GameDex::GEN_3_GENERATIONAL->value, GameDex::RSE_REGIONAL->value],
        Game::SAPPHIRE->value => [GameDex::GEN_3_NATIONAL->value, GameDex::GEN_3_GENERATIONAL->value, GameDex::RSE_REGIONAL->value],
        Game::EMERALD->value => [GameDex::GEN_3_NATIONAL->value, GameDex::GEN_3_GENERATIONAL->value, GameDex::RSE_REGIONAL->value],
        Game::FIRE_RED->value => [GameDex::GEN_3_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value, GameDex::FRLG_REGIONAL->value],
        Game::LEAF_GREEN->value => [GameDex::GEN_3_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value, GameDex::FRLG_REGIONAL->value],

        Game::DIAMOND->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_4_GENERATIONAL->value, GameDex::DP_REGIONAL->value],
        Game::PEARL->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_4_GENERATIONAL->value, GameDex::DP_REGIONAL->value],
        Game::PLATINUM->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_4_GENERATIONAL->value, GameDex::PT_REGIONAL->value],
        Game::HEART_GOLD->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_2_GENERATIONAL->value, GameDex::HGSS_REGIONAL->value],
        Game::SOUL_SILVER->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_2_GENERATIONAL->value, GameDex::HGSS_REGIONAL->value],

        Game::BLACK->value => [GameDex::GEN_5_NATIONAL->value, GameDex::GEN_5_GENERATIONAL->value, GameDex::BW_REGIONAL->value],
        Game::WHITE->value => [GameDex::GEN_5_NATIONAL->value, GameDex::GEN_5_GENERATIONAL->value, GameDex::BW_REGIONAL->value],
        Game::BLACK_2->value => [GameDex::GEN_5_NATIONAL->value, GameDex::GEN_5_GENERATIONAL->value, GameDex::B2W2_REGIONAL->value],
        Game::WHITE_2->value => [GameDex::GEN_5_NATIONAL->value, GameDex::GEN_5_GENERATIONAL->value, GameDex::B2W2_REGIONAL->value],

        Game::X->value => [GameDex::GEN_6_NATIONAL->value, GameDex::GEN_6_GENERATIONAL->value, GameDex::XY_REGIONAL->value],
        Game::Y->value => [GameDex::GEN_6_NATIONAL->value, GameDex::GEN_6_GENERATIONAL->value, GameDex::XY_REGIONAL->value],
        Game::OMEGA_RUBY->value => [GameDex::GEN_6_NATIONAL->value, GameDex::GEN_3_GENERATIONAL->value, GameDex::ORAS_REGIONAL->value],
        Game::ALPHA_SAPPHIRE->value => [GameDex::GEN_6_NATIONAL->value, GameDex::GEN_3_GENERATIONAL->value, GameDex::ORAS_REGIONAL->value],

        Game::SUN->value => [GameDex::GEN_7_NATIONAL->value, GameDex::GEN_7_GENERATIONAL->value, GameDex::SM_REGIONAL->value],
        Game::MOON->value => [GameDex::GEN_7_NATIONAL->value, GameDex::GEN_7_GENERATIONAL->value, GameDex::SM_REGIONAL->value],
        Game::ULTRA_SUN->value => [GameDex::GEN_7_NATIONAL->value, GameDex::GEN_7_GENERATIONAL->value, GameDex::USUM_REGIONAL->value],
        Game::ULTRA_MOON->value => [GameDex::GEN_7_NATIONAL->value, GameDex::GEN_7_GENERATIONAL->value, GameDex::USUM_REGIONAL->value],
        Game::LETS_GO_PIKACHU->value => [GameDex::GEN_1_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value, GameDex::LGPE_REGIONAL->value],
        Game::LETS_GO_EEVEE->value => [GameDex::GEN_1_NATIONAL->value, GameDex::GEN_1_GENERATIONAL->value, GameDex::LGPE_REGIONAL->value],

        Game::SWORD->value => [GameDex::GEN_8_GENERATIONAL->value, GameDex::SWSH_REGIONAL->value, GameDex::SWSH_IOA_REGIONAL->value, GameDex::SWSH_CT_REGIONAL->value],
        Game::SHIELD->value => [GameDex::GEN_8_GENERATIONAL->value, GameDex::SWSH_REGIONAL->value, GameDex::SWSH_IOA_REGIONAL->value, GameDex::SWSH_CT_REGIONAL->value],
        Game::BRILLIANT_DIAMOND->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_4_GENERATIONAL->value, GameDex::BDSP_REGIONAL->value],
        Game::SHINING_PEARL->value => [GameDex::GEN_4_NATIONAL->value, GameDex::GEN_4_GENERATIONAL->value, GameDex::BDSP_REGIONAL->value],
        Game::LEGENDS_ARCEUS->value => [GameDex::GEN_4_GENERATIONAL->value, GameDex::LA_REGIONAL->value],

        Game::SCARLET->value => [GameDex::GEN_9_GENERATIONAL->value, GameDex::SV_REGIONAL->value, GameDex::SV_TM_REGIONAL->value, GameDex::SV_ID_REGIONAL->value],
        Game::VIOLET->value => [GameDex::GEN_9_GENERATIONAL->value, GameDex::SV_REGIONAL->value, GameDex::SV_TM_REGIONAL->value, GameDex::SV_ID_REGIONAL->value],
    ],
];
