<?php

declare(strict_types=1);

namespace App\Enums;

enum Gen9Pokemon: int
{
    case SPRIGATITO = 906;
    case FLORAGATO = 907;
    case MEOWSCARADA = 908;
    case FUECOCO = 909;
    case CROCALOR = 910;
    case SKELEDIRGE = 911;
    case QUAXLY = 912;
    case QUAXWELL = 913;
    case QUAQUAVAL = 914;
    case LECHONK = 915;
    case OINKOLOGNE = 916;  // Has two forms
    case TAROUNTULA = 917;
    case SPIDOPS = 918;
    case NYMBLE = 919;
    case LOKIX = 920;
    case PAWMI = 921;
    case PAWMO = 922;
    case PAWMOT = 923;
    case TANDEMAUS = 924;
    case MAUSHOLD = 925;  // Has two forms
    case FIDOUGH = 926;
    case DACHSBUN = 927;
    case SMOLIV = 928;
    case DOLLIV = 929;
    case ARBOLIVA = 930;
    case SQUAWKABILLY = 931;  // Has four forms
    case NACLI = 932;
    case NACLSTACK = 933;
    case GARGANACL = 934;
    case CHARCADET = 935;
    case ARMAROUGE = 936;
    case CERULEDGE = 937;
    case TADBULB = 938;
    case BELLIBOLT = 939;
    case WATTREL = 940;
    case KILOWATTREL = 941;
    case MASCHIFF = 942;
    case MABOSSTIFF = 943;
    case SHROODLE = 944;
    case GRAFAIAI = 945;
    case BRAMBLIN = 946;
    case BRAMBLEGHAST = 947;
    case TOEDSCOOL = 948;
    case TOEDSCRUEL = 949;
    case KLAWF = 950;
    case CAPSAKID = 951;
    case SCOVILLAIN = 952;
    case RELLOR = 953;
    case RABSCA = 954;
    case FLITTLE = 955;
    case ESPATHRA = 956;
    case TINKATINK = 957;
    case TINKATUFF = 958;
    case TINKATON = 959;
    case WIGLETT = 960;
    case WUGTRIO = 961;
    case BOMBIRDIER = 962;
    case FINIZEN = 963;
    case PALAFIN = 964;  // Has two forms
    case VAROOM = 965;
    case REVAVROOM = 966;
    case CYCLIZAR = 967;
    case ORTHWORM = 968;
    case GLIMMET = 969;
    case GLIMMORA = 970;
    case GREAVARD = 971;
    case HOUNDSTONE = 972;
    case FLAMIGO = 973;
    case CETODDLE = 974;
    case CETITAN = 975;
    case VELUZA = 976;
    case DONDOZO = 977;
    case TATSUGIRI = 978;  // Has three forms
    case ANNIHILAPE = 979;
    case CLODSIRE = 980;
    case FARIGIRAF = 981;
    case DUDUNSPARCE = 982;
    case KINGAMBIT = 983;
    case GREAT_TUSK = 984;
    case SCREAM_TAIL = 985;
    case BRUTE_BONNET = 986;
    case FLUTTER_MANE = 987;
    case SLITHER_WING = 988;
    case SANDY_SHOCKS = 989;
    case IRON_TREADS = 990;
    case IRON_BUNDLE = 991;
    case IRON_HANDS = 992;
    case IRON_JUGULIS = 993;
    case IRON_MOTH = 994;
    case IRON_THORNS = 995;
    case FRIGIBAX = 996;
    case ARCTIBAX = 997;
    case BAXCALIBUR = 998;
    case GIMMIGHOUL = 999;
    case GHOLDENGO = 1000;
    case WO_CHIEN = 1001;
    case CHIEN_PAO = 1002;
    case TING_LU = 1003;
    case CHI_YU = 1004;
    case ROARING_MOON = 1005;
    case IRON_VALIANT = 1006;
    case KORAIDON = 1007;
    case MIRAIDON = 1008;
    case WALKING_WAKE = 1009;
    case IRON_LEAVES = 1010;
    case DIPPLIN = 1011;
    case POLCHAGEIST = 1012;
    case SINISTCHA = 1013;
    case OKIDOGI = 1014;
    case MUNKIDORI = 1015;
    case FEZANDIPITI = 1016;
    case OGERPON = 1017;
    case ARCHALUDON = 1018;
    case HYDRAPPLE = 1019;
    case GOUGING_FIRE = 1020;
    case RAGING_BOLT = 1021;
    case IRON_BOULDER = 1022;
    case IRON_CROWN = 1023;
    case TERAPAGOS = 1024;
    case PECHARUNT = 1025;

    public function generation(): Generation
    {
        return Generation::IX;
    }

    public function name(): string
    {
        return match ($this) {
            self::SPRIGATITO => 'Sprigatito',
            self::FLORAGATO => 'Floragato',
            self::MEOWSCARADA => 'Meowscarada',
            self::FUECOCO => 'Fuecoco',
            self::CROCALOR => 'Crocalor',
            self::SKELEDIRGE => 'Skeledirge',
            self::QUAXLY => 'Quaxly',
            self::QUAXWELL => 'Quaxwell',
            self::QUAQUAVAL => 'Quaquaval',
            self::LECHONK => 'Lechonk',
            self::OINKOLOGNE => 'Oinkologne',
            self::TAROUNTULA => 'Tarountula',
            self::SPIDOPS => 'Spidops',
            self::NYMBLE => 'Nymble',
            self::LOKIX => 'Lokix',
            self::PAWMI => 'Pawmi',
            self::PAWMO => 'Pawmo',
            self::PAWMOT => 'Pawmot',
            self::TANDEMAUS => 'Tandemaus',
            self::MAUSHOLD => 'Maushold',
            self::FIDOUGH => 'Fidough',
            self::DACHSBUN => 'Dachsbun',
            self::SMOLIV => 'Smoliv',
            self::DOLLIV => 'Dolliv',
            self::ARBOLIVA => 'Arboliva',
            self::SQUAWKABILLY => 'Squawkabilly',
            self::NACLI => 'Nacli',
            self::NACLSTACK => 'Naclstack',
            self::GARGANACL => 'Garganacl',
            self::CHARCADET => 'Charcadet',
            self::ARMAROUGE => 'Armarouge',
            self::CERULEDGE => 'Ceruledge',
            self::TADBULB => 'Tadbulb',
            self::BELLIBOLT => 'Bellibolt',
            self::WATTREL => 'Wattrel',
            self::KILOWATTREL => 'Kilowattrel',
            self::MASCHIFF => 'Maschiff',
            self::MABOSSTIFF => 'Mabosstiff',
            self::SHROODLE => 'Shroodle',
            self::GRAFAIAI => 'Grafaiai',
            self::BRAMBLIN => 'Bramblin',
            self::BRAMBLEGHAST => 'Brambleghast',
            self::TOEDSCOOL => 'Toedscool',
            self::TOEDSCRUEL => 'Toedscruel',
            self::KLAWF => 'Klawf',
            self::CAPSAKID => 'Capsakid',
            self::SCOVILLAIN => 'Scovillain',
            self::RELLOR => 'Rellor',
            self::RABSCA => 'Rabsca',
            self::FLITTLE => 'Flittle',
            self::ESPATHRA => 'Espathra',
            self::TINKATINK => 'Tinkatink',
            self::TINKATUFF => 'Tinkatuff',
            self::TINKATON => 'Tinkaton',
            self::WIGLETT => 'Wiglett',
            self::WUGTRIO => 'Wugtrio',
            self::BOMBIRDIER => 'Bombirdier',
            self::FINIZEN => 'Finizen',
            self::PALAFIN => 'Palafin',
            self::VAROOM => 'Varoom',
            self::REVAVROOM => 'Revavroom',
            self::CYCLIZAR => 'Cyclizar',
            self::ORTHWORM => 'Orthworm',
            self::GLIMMET => 'Glimmet',
            self::GLIMMORA => 'Glimmora',
            self::GREAVARD => 'Greavard',
            self::HOUNDSTONE => 'Houndstone',
            self::FLAMIGO => 'Flamigo',
            self::CETODDLE => 'Cetoddle',
            self::CETITAN => 'Cetitan',
            self::VELUZA => 'Veluza',
            self::DONDOZO => 'Dondozo',
            self::TATSUGIRI => 'Tatsugiri',
            self::ANNIHILAPE => 'Annihilape',
            self::CLODSIRE => 'Clodsire',
            self::FARIGIRAF => 'Farigiraf',
            self::DUDUNSPARCE => 'Dudunsparce',
            self::KINGAMBIT => 'Kingambit',
            self::GREAT_TUSK => 'Great Tusk',
            self::SCREAM_TAIL => 'Scream Tail',
            self::BRUTE_BONNET => 'Brute Bonnet',
            self::FLUTTER_MANE => 'Flutter Mane',
            self::SLITHER_WING => 'Slither Wing',
            self::SANDY_SHOCKS => 'Sandy Shocks',
            self::IRON_TREADS => 'Iron Treads',
            self::IRON_BUNDLE => 'Iron Bundle',
            self::IRON_HANDS => 'Iron Hands',
            self::IRON_JUGULIS => 'Iron Jugulis',
            self::IRON_MOTH => 'Iron Moth',
            self::IRON_THORNS => 'Iron Thorns',
            self::FRIGIBAX => 'Frigibax',
            self::ARCTIBAX => 'Arctibax',
            self::BAXCALIBUR => 'Baxcalibur',
            self::GIMMIGHOUL => 'Gimmighoul',
            self::GHOLDENGO => 'Gholdengo',
            self::WO_CHIEN => 'Wo-Chien',
            self::CHIEN_PAO => 'Chien-Pao',
            self::TING_LU => 'Ting-Lu',
            self::CHI_YU => 'Chi-Yu',
            self::ROARING_MOON => 'Roaring Moon',
            self::IRON_VALIANT => 'Iron Valiant',
            self::KORAIDON => 'Koraidon',
            self::MIRAIDON => 'Miraidon',
            self::WALKING_WAKE => 'Walking Wake',
            self::IRON_LEAVES => 'Iron Leaves',
            self::DIPPLIN => 'Dipplin',
            self::POLCHAGEIST => 'Poltchageist',
            self::SINISTCHA => 'Sinistcha',
            self::OKIDOGI => 'Okidogi',
            self::MUNKIDORI => 'Munkidori',
            self::FEZANDIPITI => 'Fezandipiti',
            self::OGERPON => 'Ogerpon',
            self::ARCHALUDON => 'Archaludon',
            self::HYDRAPPLE => 'Hydrapple',
            self::GOUGING_FIRE => 'Gouging Fire',
            self::RAGING_BOLT => 'Raging Bolt',
            self::IRON_BOULDER => 'Iron Boulder',
            self::IRON_CROWN => 'Iron Crown',
            self::TERAPAGOS => 'Terapagos',
            self::PECHARUNT => 'Pecharunt',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::SPRIGATITO => 'sprigatito',
            self::FLORAGATO => 'floragato',
            self::MEOWSCARADA => 'meowscarada',
            self::FUECOCO => 'fuecoco',
            self::CROCALOR => 'crocalor',
            self::SKELEDIRGE => 'skeledirge',
            self::QUAXLY => 'quaxly',
            self::QUAXWELL => 'quaxwell',
            self::QUAQUAVAL => 'quaquaval',
            self::LECHONK => 'lechonk',
            self::OINKOLOGNE => 'oinkologne',
            self::TAROUNTULA => 'tarountula',
            self::SPIDOPS => 'spidops',
            self::NYMBLE => 'nymble',
            self::LOKIX => 'lokix',
            self::PAWMI => 'pawmi',
            self::PAWMO => 'pawmo',
            self::PAWMOT => 'pawmot',
            self::TANDEMAUS => 'tandemaus',
            self::MAUSHOLD => 'maushold',
            self::FIDOUGH => 'fidough',
            self::DACHSBUN => 'dachsbun',
            self::SMOLIV => 'smoliv',
            self::DOLLIV => 'dolliv',
            self::ARBOLIVA => 'arboliva',
            self::SQUAWKABILLY => 'squawkabilly',
            self::NACLI => 'nacli',
            self::NACLSTACK => 'naclstack',
            self::GARGANACL => 'garganacl',
            self::CHARCADET => 'charcadet',
            self::ARMAROUGE => 'armarouge',
            self::CERULEDGE => 'ceruledge',
            self::TADBULB => 'tadbulb',
            self::BELLIBOLT => 'bellibolt',
            self::WATTREL => 'wattrel',
            self::KILOWATTREL => 'kilowattrel',
            self::MASCHIFF => 'maschiff',
            self::MABOSSTIFF => 'mabosstiff',
            self::SHROODLE => 'shroodle',
            self::GRAFAIAI => 'grafaiai',
            self::BRAMBLIN => 'bramblin',
            self::BRAMBLEGHAST => 'brambleghast',
            self::TOEDSCOOL => 'toedscool',
            self::TOEDSCRUEL => 'toedscruel',
            self::KLAWF => 'klawf',
            self::CAPSAKID => 'capsakid',
            self::SCOVILLAIN => 'scovillain',
            self::RELLOR => 'rellor',
            self::RABSCA => 'rabsca',
            self::FLITTLE => 'flittle',
            self::ESPATHRA => 'espathra',
            self::TINKATINK => 'tinkatink',
            self::TINKATUFF => 'tinkatuff',
            self::TINKATON => 'tinkaton',
            self::WIGLETT => 'wiglett',
            self::WUGTRIO => 'wugtrio',
            self::BOMBIRDIER => 'bombirdier',
            self::FINIZEN => 'finizen',
            self::PALAFIN => 'palafin',
            self::VAROOM => 'varoom',
            self::REVAVROOM => 'revavroom',
            self::CYCLIZAR => 'cyclizar',
            self::ORTHWORM => 'orthworm',
            self::GLIMMET => 'glimmet',
            self::GLIMMORA => 'glimmora',
            self::GREAVARD => 'greavard',
            self::HOUNDSTONE => 'houndstone',
            self::FLAMIGO => 'flamigo',
            self::CETODDLE => 'cetoddle',
            self::CETITAN => 'cetitan',
            self::VELUZA => 'veluza',
            self::DONDOZO => 'dondozo',
            self::TATSUGIRI => 'tatsugiri',
            self::ANNIHILAPE => 'annihilape',
            self::CLODSIRE => 'clodsire',
            self::FARIGIRAF => 'farigiraf',
            self::DUDUNSPARCE => 'dudunsparce',
            self::KINGAMBIT => 'kingambit',
            self::GREAT_TUSK => 'great-tusk',
            self::SCREAM_TAIL => 'scream-tail',
            self::BRUTE_BONNET => 'brute-bonnet',
            self::FLUTTER_MANE => 'flutter-mane',
            self::SLITHER_WING => 'slither-wing',
            self::SANDY_SHOCKS => 'sandy-shocks',
            self::IRON_TREADS => 'iron-treads',
            self::IRON_BUNDLE => 'iron-bundle',
            self::IRON_HANDS => 'iron-hands',
            self::IRON_JUGULIS => 'iron-jugulis',
            self::IRON_MOTH => 'iron-moth',
            self::IRON_THORNS => 'iron-thorns',
            self::FRIGIBAX => 'frigibax',
            self::ARCTIBAX => 'arctibax',
            self::BAXCALIBUR => 'baxcalibur',
            self::GIMMIGHOUL => 'gimmighoul',
            self::GHOLDENGO => 'gholdengo',
            self::WO_CHIEN => 'wo-chien',
            self::CHIEN_PAO => 'chien-pao',
            self::TING_LU => 'ting-lu',
            self::CHI_YU => 'chi-yu',
            self::ROARING_MOON => 'roaring-moon',
            self::IRON_VALIANT => 'iron-valiant',
            self::KORAIDON => 'koraidon',
            self::MIRAIDON => 'miraidon',
            self::WALKING_WAKE => 'walking-wake',
            self::IRON_LEAVES => 'iron-leaves',
            self::DIPPLIN => 'dipplin',
            self::POLCHAGEIST => 'polchageist',
            self::SINISTCHA => 'sinistcha',
            self::OKIDOGI => 'okidogi',
            self::MUNKIDORI => 'munkidori',
            self::FEZANDIPITI => 'fezandipiti',
            self::OGERPON => 'ogerpon',
            self::ARCHALUDON => 'archaludon',
            self::HYDRAPPLE => 'hydrapple',
            self::GOUGING_FIRE => 'gouging-fire',
            self::RAGING_BOLT => 'raging-bolt',
            self::IRON_BOULDER => 'iron-boulder',
            self::IRON_CROWN => 'iron-crown',
            self::TERAPAGOS => 'terapagod',
            self::PECHARUNT => 'pecharunt',
        };
    }
}
