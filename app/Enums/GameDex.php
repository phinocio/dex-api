<?php

declare(strict_types=1);

namespace App\Enums;

enum GameDex: int
{
    case GEN_1_NATIONAL = 1; // Red, Blue, Yellow
    case GEN_2_NATIONAL = 2; // Gold, Silver, Crystal
    case GEN_3_NATIONAL = 3; // Ruby, Sapphire, Emerald
    case GEN_4_NATIONAL = 4; // Diamond, Pearl, Platinum, HeartGold, SoulSilver, Brilliant Diamond, Shining Pearl
    case GEN_5_NATIONAL = 5; // Black, White, Black 2, White 2
    case GEN_6_NATIONAL = 6; // X, Y, Omega Ruby, Alpha Sapphire
    case GEN_7_NATIONAL = 7; // Sun, Moon, Ultra Sun, Ultra Moon
    case HOME_NATIONAL = 8; // Always All Pokemon

    case GEN_1_GENERATIONAL = 9; // Red, Blue, Yellow, FireRed, LeafGreen, Let's Go, Pikachu!, Let's Go, Eevee!
    case GEN_2_GENERATIONAL = 10; // Gold, Silver, Crystal, HeartGold, SoulSilver
    case GEN_3_GENERATIONAL = 11; // Ruby, Sapphire, Emerald, Omega Ruby, Alpha Sapphire
    case GEN_4_GENERATIONAL = 12; // Diamond, Pearl, Platinum, Brilliant Diamond, Shining Pearl, Legends: Arceus
    case GEN_5_GENERATIONAL = 13; // Black, White, Black 2, White 2
    case GEN_6_GENERATIONAL = 14; // X, Y
    case GEN_7_GENERATIONAL = 15; // Sun, Moon, Ultra Sun, Ultra Moon
    case GEN_8_GENERATIONAL = 16; // Sword, Shield
    case GEN_9_GENERATIONAL = 17; // Scarlet, Violet

    case RSE_REGIONAL = 18; // Ruby, Sapphire, Emerald
    case FRLG_REGIONAL = 19; // Fire Red, Leaf Green
    case DP_REGIONAL = 20; // Diamond, Pearl
    case PT_REGIONAL = 21; // Platinum
    case HGSS_REGIONAL = 22; // HeartGold, SoulSilver
    case BW_REGIONAL = 23; // Black, White
    case B2W2_REGIONAL = 24; // Black 2, White 2
    case XY_REGIONAL = 25; // X, Y
    case ORAS_REGIONAL = 26; // Omega Ruby, Alpha Sapphire
    case SM_REGIONAL = 27; // Sun, Moon
    case USUM_REGIONAL = 28; // Ultra Sun, Ultra Moon
    case LGPE_REGIONAL = 29; // Let's Go, Pikachu! and Let's Go, Eevee!
    case SWSH_REGIONAL = 30; // Sword, Shield
    case SWSH_IOA_REGIONAL = 31; // Isle of Armor
    case SWSH_CT_REGIONAL = 32; // Crown Tundra
    case BDSP_REGIONAL = 33; // Brilliant Diamond, Shining Pearl
    case LA_REGIONAL = 34; // Legends: Arceus
    case SV_REGIONAL = 35; // Scarlet, Violet
    case SV_TM_REGIONAL = 36; // Teal Mask
    case SV_ID_REGIONAL = 37; // Indigo Disk

    public function name(): string
    {
        return match ($this) {
            self::GEN_1_NATIONAL => 'Gen 1 National',
            self::GEN_2_NATIONAL => 'Gen 2 National',
            self::GEN_3_NATIONAL => 'Gen 3 National',
            self::GEN_4_NATIONAL => 'Gen 4 National',
            self::GEN_5_NATIONAL => 'Gen 5 National',
            self::GEN_6_NATIONAL => 'Gen 6 National',
            self::GEN_7_NATIONAL => 'Gen 7 National',
            self::HOME_NATIONAL => 'Home National',

            self::GEN_1_GENERATIONAL => 'Gen 1 Generational',
            self::GEN_2_GENERATIONAL => 'Gen 2 Generational',
            self::GEN_3_GENERATIONAL => 'Gen 3 Generational',
            self::GEN_4_GENERATIONAL => 'Gen 4 Generational',
            self::GEN_5_GENERATIONAL => 'Gen 5 Generational',
            self::GEN_6_GENERATIONAL => 'Gen 6 Generational',
            self::GEN_7_GENERATIONAL => 'Gen 7 Generational',
            self::GEN_8_GENERATIONAL => 'Gen 8 Generational',
            self::GEN_9_GENERATIONAL => 'Gen 9 Generational',

            self::RSE_REGIONAL => 'Hoenn Regional',
            self::FRLG_REGIONAL => 'Kanto (FRLG) Regional',
            self::DP_REGIONAL => 'Sinnoh Regional',
            self::PT_REGIONAL => 'Sinnoh (Pt) Regional',
            self::HGSS_REGIONAL => 'Johto (HGSS) Regional',
            self::BW_REGIONAL => 'Unova Regional',
            self::B2W2_REGIONAL => 'Unova (B2W2) Regional',
            self::XY_REGIONAL => 'Kalos Regional',
            self::ORAS_REGIONAL => 'Hoenn (ORAS) Regional',
            self::SM_REGIONAL => 'Alola Regional',
            self::USUM_REGIONAL => 'Alola (USUM) Regional',
            self::LGPE_REGIONAL => 'Kanto (LGPE) Regional',
            self::SWSH_REGIONAL => 'Galar Regional',
            self::SWSH_IOA_REGIONAL => 'Isle of Armor Regional',
            self::SWSH_CT_REGIONAL => 'Crown Tundra Regional',
            self::BDSP_REGIONAL => 'Sinnoh (BDSP) Regional',
            self::LA_REGIONAL => 'Sinnoh (LA) Regional',
            self::SV_REGIONAL => 'Paldea Regional',
            self::SV_TM_REGIONAL => 'Kitakami Regional',
            self::SV_ID_REGIONAL => 'Blueberry Regional',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::GEN_1_NATIONAL => 'gen-1-national',
            self::GEN_2_NATIONAL => 'gen-2-national',
            self::GEN_3_NATIONAL => 'gen-3-national',
            self::GEN_4_NATIONAL => 'gen-4-national',
            self::GEN_5_NATIONAL => 'gen-5-national',
            self::GEN_6_NATIONAL => 'gen-6-national',
            self::GEN_7_NATIONAL => 'gen-7-national',
            self::HOME_NATIONAL => 'home-national',

            self::GEN_1_GENERATIONAL => 'gen-1-generational',
            self::GEN_2_GENERATIONAL => 'gen-2-generational',
            self::GEN_3_GENERATIONAL => 'gen-3-generational',
            self::GEN_4_GENERATIONAL => 'gen-4-generational',
            self::GEN_5_GENERATIONAL => 'gen-5-generational',
            self::GEN_6_GENERATIONAL => 'gen-6-generational',
            self::GEN_7_GENERATIONAL => 'gen-7-generational',
            self::GEN_8_GENERATIONAL => 'gen-8-generational',
            self::GEN_9_GENERATIONAL => 'gen-9-generational',

            self::RSE_REGIONAL => 'hoenn-regional',
            self::FRLG_REGIONAL => 'kanto-frlg-regional',
            self::DP_REGIONAL => 'sinnoh-regional',
            self::PT_REGIONAL => 'sinnohpt-regional',
            self::HGSS_REGIONAL => 'johto-hgss-regional',
            self::BW_REGIONAL => 'unova-regional',
            self::B2W2_REGIONAL => 'unova-b2w2-regional',
            self::XY_REGIONAL => 'kalos-regional',
            self::ORAS_REGIONAL => 'hoenn-oras-regional',
            self::SM_REGIONAL => 'alola-regional',
            self::USUM_REGIONAL => 'alolausum-regional',
            self::LGPE_REGIONAL => 'kanto-lgpe-regional',
            self::SWSH_REGIONAL => 'galar-regional',
            self::SWSH_IOA_REGIONAL => 'isle-of-armor-regional',
            self::SWSH_CT_REGIONAL => 'crown-tundra-regional',
            self::BDSP_REGIONAL => 'sinnoh-bdsp-regional',
            self::LA_REGIONAL => 'sinnoh-la-regional',
            self::SV_REGIONAL => 'paldea-regional',
            self::SV_TM_REGIONAL => 'kitakami-regional',
            self::SV_ID_REGIONAL => 'blueberry-regional',
        };
    }

    public function type(): string
    {
        return match ($this) {

            self::GEN_1_NATIONAL, self::GEN_2_NATIONAL, self::GEN_3_NATIONAL,
            self::GEN_4_NATIONAL, self::GEN_5_NATIONAL, self::GEN_6_NATIONAL,
            self::GEN_7_NATIONAL, self::HOME_NATIONAL,
            => DexType::NATIONAL->value,

            self::GEN_1_GENERATIONAL, self::GEN_2_GENERATIONAL, self::GEN_3_GENERATIONAL,
            self::GEN_4_GENERATIONAL, self::GEN_5_GENERATIONAL, self::GEN_6_GENERATIONAL,
            self::GEN_7_GENERATIONAL, self::GEN_8_GENERATIONAL, self::GEN_9_GENERATIONAL,
            => DexType::GENERATIONAL->value,

            self::RSE_REGIONAL, self::FRLG_REGIONAL,self::DP_REGIONAL,
            self::PT_REGIONAL, self::HGSS_REGIONAL, self::BW_REGIONAL,
            self::B2W2_REGIONAL, self::XY_REGIONAL, self::ORAS_REGIONAL,
            self::SM_REGIONAL, self::USUM_REGIONAL, self::LGPE_REGIONAL,
            self::SWSH_REGIONAL, self::SWSH_IOA_REGIONAL, self::SWSH_CT_REGIONAL,
            self::BDSP_REGIONAL, self::LA_REGIONAL, self::SV_REGIONAL,
            self::SV_TM_REGIONAL, self::SV_ID_REGIONAL,
            => DexType::REGIONAL->value,
        };
    }
}
