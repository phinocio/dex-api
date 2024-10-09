<?php

declare(strict_types=1);

namespace App\Enums;

enum GameDex: int
{
    case RBY_NATIONAL = 1; // Red, Blue, Yellow
    case GSC_GENERATIONAL = 2; // Gold, Silver, Crystal
    case GSC_NATIONAL = 3; // Gold, Silver, Crystal
    case RSE_REGIONAL = 4; // Ruby, Sapphire, Emerald
    case RSE_NATIONAL = 5; // Ruby, Sapphire, Emerald
    case RSE_GENERATIONAL = 6; // Ruby, Sapphire, Emerald
    case DP_REGIONAL = 7; // Diamond, Pearl
    case DPPT_NATIONAL = 8; // Diamond, Pearl, Platinum
    case DPPT_GENERATIONAL = 9; // Diamond, Pearl, Platinum
    case PT_REGIONAL = 10; // Platinum
    case HGSS_REGIONAL = 11; // HeartGold, SoulSilver
    case HGSS_NATIONAL = 12; // HeartGold, SoulSilver
    case HGSS_GENERATIONAL = 13; // HeartGold, SoulSilver
    case BW_REGIONAL = 14; // Black, White
    case BW_B2W2_NATIONAL = 15; // Black, White, Black 2, White 2
    case BW_B2W2_GENERATIONAL = 16; // Black, White, Black 2, White 2
    case B2W2_REGIONAL = 17; // Black 2, White 2
    case XY_REGIONAL = 18; // X, Y
    case XY_NATIONAL = 19; // X, Y
    case XY_GENERATIONAL = 20; // X, Y
    case ORAS_REGIONAL = 21; // Omega Ruby, Alpha Sapphire
    case ORAS_NATIONAL = 22; // Omega Ruby, Alpha Sapphire
    case ORAS_GENERATIONAL = 23; // Omega Ruby, Alpha Sapphire
    case SM_REGIONAL = 24; // Sun, Moon
    case SM_USUM_NATIONAL = 25; // Sun, Moon
    case SM_USUM_GENERATIONAL = 26; // Sun, Moon
    case USUM_REGIONAL = 27; // Ultra Sun, Ultra Moon
    case LGPE_REGIONAL = 28; // Let's Go, Pikachu! and Let's Go, Eevee!
    case LGPE_NATIONAL = 29; // Let's Go, Pikachu! and Let's Go, Eevee!
    case LGPE_GENERATIONAL = 30; // Let's Go, Pikachu! and Let's Go, Eevee!
    case SWSH_REGIONAL = 31; // Sword, Shield
    case SWSH_GENERATIONAL = 32; // Sword, Shield
    case SWSH_IOA_REGIONAL = 33; // Isle of Armor
    case SWSH_CT_REGIONAL = 34; // Crown Tundra
    case LA_REGIONAL = 35; // Legends: Arceus
    case LA_GENERATIONAL = 36; // Legends: Arceus
    case SV_REGIONAL = 37; // Scarlet, Violet
    case SV_NATIONAL = 38; // Scarlet, Violet
    case SV_GENERATIONAL = 39; // Scarlet, Violet
    case SV_TM_REGIONAL = 40; // Teal Mask
    case SV_ID_REGIONAL = 41; // Indigo Disk

    public function name(): string
    {
        return match ($this) {
            self::RBY_NATIONAL => 'RBY National',
            self::GSC_GENERATIONAL => 'GSC Generational',
            self::GSC_NATIONAL => 'GSC National',
            self::RSE_REGIONAL => 'RSE Regional',
            self::RSE_NATIONAL => 'RSE National',
            self::RSE_GENERATIONAL => 'RSE Generational',
            self::DP_REGIONAL => 'DP Regional',
            self::DPPT_NATIONAL => 'DPPT National',
            self::DPPT_GENERATIONAL => 'DPPT Generational',
            self::PT_REGIONAL => 'Pt Regional',
            self::HGSS_REGIONAL => 'HGSS Regional',
            self::HGSS_NATIONAL => 'HGSS National',
            self::HGSS_GENERATIONAL => 'HGSS Generational',
            self::BW_REGIONAL => 'BW Regional',
            self::BW_B2W2_NATIONAL => 'BW B2W2 National',
            self::BW_B2W2_GENERATIONAL => 'BW B2W2 Generational',
            self::B2W2_REGIONAL => 'B2W2 Regional',
            self::XY_REGIONAL => 'XY Regional',
            self::XY_NATIONAL => 'XY National',
            self::XY_GENERATIONAL => 'XY Generational',
            self::ORAS_REGIONAL => 'ORAS Regional',
            self::ORAS_NATIONAL => 'ORAS National',
            self::ORAS_GENERATIONAL => 'ORAS Generational',
            self::SM_REGIONAL => 'SM Regional',
            self::SM_USUM_NATIONAL => 'SM USUM National',
            self::SM_USUM_GENERATIONAL => 'SM USUM Generational',
            self::USUM_REGIONAL => 'USUM Regional',
            self::LGPE_REGIONAL => 'LGPE Regional',
            self::LGPE_NATIONAL => 'LGPE National',
            self::LGPE_GENERATIONAL => 'LGPE Generational',
            self::SWSH_REGIONAL => 'SWSH Regional',
            self::SWSH_GENERATIONAL => 'SWSH Generational',
            self::SWSH_IOA_REGIONAL => 'SWSH Isle of Armor Regional',
            self::SWSH_CT_REGIONAL => 'SWSH Crown Tundra Regional',
            self::LA_REGIONAL => 'LA Regional',
            self::LA_GENERATIONAL => 'LA Generational',
            self::SV_REGIONAL => 'SV Regional',
            self::SV_NATIONAL => 'SV National',
            self::SV_GENERATIONAL => 'SV Generational',
            self::SV_TM_REGIONAL => 'SV Teal Mask Regional',
            self::SV_ID_REGIONAL => 'SV Indigo Disk Regional',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::RBY_NATIONAL => 'rby-national',
            self::GSC_GENERATIONAL => 'gsc-generational',
            self::GSC_NATIONAL => 'gsc-national',
            self::RSE_REGIONAL => 'rse-regional',
            self::RSE_NATIONAL => 'rse-national',
            self::RSE_GENERATIONAL => 'rse-generational',
            self::DP_REGIONAL => 'dp-regional',
            self::DPPT_NATIONAL => 'dppt-national',
            self::DPPT_GENERATIONAL => 'dppt-generational',
            self::PT_REGIONAL => 'pt-regional',
            self::HGSS_REGIONAL => 'hgss-regional',
            self::HGSS_NATIONAL => 'hgss-national',
            self::HGSS_GENERATIONAL => 'hgss-generational',
            self::BW_REGIONAL => 'bw-regional',
            self::BW_B2W2_NATIONAL => 'bw-b2w2-national',
            self::BW_B2W2_GENERATIONAL => 'bw-b2w2-generational',
            self::B2W2_REGIONAL => 'b2w2-regional',
            self::XY_REGIONAL => 'xy-regional',
            self::XY_NATIONAL => 'xy-national',
            self::XY_GENERATIONAL => 'xy-generational',
            self::ORAS_REGIONAL => 'oras-regional',
            self::ORAS_NATIONAL => 'oras-national',
            self::ORAS_GENERATIONAL => 'oras-generational',
            self::SM_REGIONAL => 'sm-regional',
            self::SM_USUM_NATIONAL => 'sm-usum-national',
            self::SM_USUM_GENERATIONAL => 'sm-usum-generational',
            self::USUM_REGIONAL => 'usum-regional',
            self::LGPE_REGIONAL => 'lgpe-regional',
            self::LGPE_NATIONAL => 'lgpe-national',
            self::LGPE_GENERATIONAL => 'lgpe-generational',
            self::SWSH_REGIONAL => 'swhs-regional',
            self::SWSH_GENERATIONAL => 'swhs-generational',
            self::SWSH_IOA_REGIONAL => 'swhs-ioa-regional',
            self::SWSH_CT_REGIONAL => 'swhs-ct-regional',
            self::LA_REGIONAL => 'la-regional',
            self::LA_GENERATIONAL => 'la-generational',
            self::SV_REGIONAL => 'sv-regional',
            self::SV_NATIONAL => 'sv-national',
            self::SV_GENERATIONAL => 'sv-generational',
            self::SV_TM_REGIONAL => 'sv-tm-regional',
            self::SV_ID_REGIONAL => 'sv-id-regional',
        };
    }

    public function type(): DexType
    {
        return match ($this) {
            /** National Dexes **/
            self::RBY_NATIONAL, self::GSC_NATIONAL, self::RSE_NATIONAL,
            self::DPPT_NATIONAL, self::HGSS_NATIONAL, self::BW_B2W2_NATIONAL,
            self::XY_NATIONAL, self::ORAS_NATIONAL, self::SM_USUM_NATIONAL,
            self::LGPE_NATIONAL, self::SV_NATIONAL
            => DexType::NATIONAL,

            /** Generational Dexes **/
            self::GSC_GENERATIONAL, self::RSE_GENERATIONAL, self::DPPT_GENERATIONAL,
            self::HGSS_GENERATIONAL, self::BW_B2W2_GENERATIONAL, self::XY_GENERATIONAL,
            self::ORAS_GENERATIONAL, self::SM_USUM_GENERATIONAL, self::LGPE_GENERATIONAL,
            self::SWSH_GENERATIONAL, self::LA_GENERATIONAL, self::SV_GENERATIONAL
            => DexType::GENERATIONAL,

            /** Regional Dexes **/
            self::RSE_REGIONAL, self::DP_REGIONAL, self::PT_REGIONAL,
            self::HGSS_REGIONAL, self::BW_REGIONAL, self::B2W2_REGIONAL,
            self::XY_REGIONAL, self::ORAS_REGIONAL, self::SM_REGIONAL,
            self::USUM_REGIONAL, self::LGPE_REGIONAL, self::SWSH_REGIONAL,
            self::SWSH_IOA_REGIONAL, self::SWSH_CT_REGIONAL, self::LA_REGIONAL,
            self::SV_REGIONAL, self::SV_TM_REGIONAL, self::SV_ID_REGIONAL
            => DexType::REGIONAL,

        };
    }
}
