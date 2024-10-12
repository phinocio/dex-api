<?php

declare(strict_types=1);

namespace App\Enums;

enum Gen4Pokemon: int
{
    case TURTWIG = 387;
    case GROTLE = 388;
    case TORTERRA = 389;
    case CHIMCHAR = 390;
    case MONFERNO = 391;
    case INFERNAPE = 392;
    case PIPLUP = 393;
    case PRINPLUP = 394;
    case EMPOLEON = 395;
    case STARLY = 396;
    case STARAVIA = 397;
    case STARAPTOR = 398;
    case BIDOOF = 399;
    case BIBAREL = 400;
    case KRICKETOT = 401;
    case KRICKETUNE = 402;
    case SHINX = 403;
    case LUXIO = 404;
    case LUXRAY = 405;
    case BUDEW = 406;
    case ROSERADE = 407;
    case CRANIDOS = 408;
    case RAMPARDOS = 409;
    case SHIELDON = 410;
    case BASTIODON = 411;
    case BURMY = 412;
    case WORMADAM = 413;
    case MOTHIM = 414;
    case COMBEE = 415;
    case VESPIQUEN = 416;
    case PACHIRISU = 417;
    case BUIZEL = 418;
    case FLOATZEL = 419;
    case CHERUBI = 420;
    case CHERRIM = 421;
    case SHELLOS = 422;
    case GASTRODON = 423;
    case AMBIPOM = 424;
    case DRIFLOON = 425;
    case DRIFBLIM = 426;
    case BUNEARY = 427;
    case LOPUNNY = 428;
    case MISMAGIUS = 429;
    case HONCHKROW = 430;
    case GLAMEOW = 431;
    case PURUGLY = 432;
    case CHINGLING = 433;
    case STUNKY = 434;
    case SKUNTANK = 435;
    case BRONZOR = 436;
    case BRONZONG = 437;
    case BONSLY = 438;
    case MIME_JR = 439;
    case HAPPINY = 440;
    case CHATOT = 441;
    case SPIRITOMB = 442;
    case GIBLE = 443;
    case GABITE = 444;
    case GARCHOMP = 445;
    case MUNCHLAX = 446;
    case RIOLU = 447;
    case LUCARIO = 448;
    case HIPPOPOTAS = 449;
    case HIPPOWDON = 450;
    case SKORUPI = 451;
    case DRAPION = 452;
    case CROAGUNK = 453;
    case TOXICROAK = 454;
    case CARNIVINE = 455;
    case FINNEON = 456;
    case LUMINEON = 457;
    case MANTYKE = 458;
    case SNOVER = 459;
    case ABOMASNOW = 460;
    case WEAVILE = 461;
    case MAGNEZONE = 462;
    case LICKILICKY = 463;
    case RHYPERIOR = 464;
    case TANGROWTH = 465;
    case ELECTIVIRE = 466;
    case MAGMORTAR = 467;
    case TOGEKISS = 468;
    case YANMEGA = 469;
    case LEAFEON = 470;
    case GLACEON = 471;
    case GLISCOR = 472;
    case MAMOSWINE = 473;
    case PORYGON_Z = 474;
    case GALLADE = 475;
    case PROBOPASS = 476;
    case DUSKNOIR = 477;
    case FROSLASS = 478;
    case ROTOM = 479;
    case UXIE = 480;
    case MESPRIT = 481;
    case AZELF = 482;
    case DIALGA = 483;
    case PALKIA = 484;
    case HEATRAN = 485;
    case REGIGIGAS = 486;
    case GIRATINA = 487;
    case CRESSELIA = 488;
    case PHIONE = 489;
    case MANAPHY = 490;
    case DARKRAI = 491;
    case SHAYMIN = 492;
    case ARCEUS = 493;

    public function evolvesFrom(): self|Gen1Pokemon|Gen2Pokemon|Gen3Pokemon|null
    {
        return match ($this) {
            self::GROTLE => self::TURTWIG,
            self::TORTERRA => self::GROTLE,
            self::MONFERNO => self::CHIMCHAR,
            self::INFERNAPE => self::MONFERNO,
            self::PRINPLUP => self::PIPLUP,
            self::EMPOLEON => self::PRINPLUP,
            self::STARAVIA => self::STARLY,
            self::STARAPTOR => self::STARAVIA,
            self::BIBAREL => self::BIDOOF,
            self::KRICKETUNE => self::KRICKETOT,
            self::LUXRAY => self::SHINX,
            self::ROSERADE => Gen3Pokemon::ROSELIA,
            self::RAMPARDOS => self::CRANIDOS,
            self::BASTIODON => self::SHIELDON,
            self::WORMADAM => self::BURMY,
            self::MOTHIM => self::BURMY,
            self::VESPIQUEN => self::COMBEE,
            self::FLOATZEL => self::BUIZEL,
            self::CHERRIM => self::CHERUBI,
            self::GASTRODON => self::SHELLOS,
            self::AMBIPOM => Gen2Pokemon::AIPOM,
            self::DRIFBLIM => self::DRIFLOON,
            self::LOPUNNY => self::BUNEARY,
            self::MISMAGIUS => Gen2Pokemon::MISDREAVUS,
            self::HONCHKROW => Gen2Pokemon::MURKROW,
            self::PURUGLY => self::GLAMEOW,
            self::SKUNTANK => self::STUNKY,
            self::BRONZONG => self::BRONZOR,
            self::GABITE => self::GIBLE,
            self::GARCHOMP => self::GABITE,
            self::LUCARIO => self::RIOLU,
            self::HIPPOWDON => self::HIPPOPOTAS,
            self::DRAPION => self::SKORUPI,
            self::TOXICROAK => self::CROAGUNK,
            self::LUMINEON => self::FINNEON,
            self::ABOMASNOW => self::SNOVER,
            self::WEAVILE => Gen2Pokemon::SNEASEL,
            self::MAGNEZONE => Gen1Pokemon::MAGNETON,
            self::LICKILICKY => Gen1Pokemon::LICKITUNG,
            self::RHYPERIOR => Gen1Pokemon::RHYDON,
            self::TANGROWTH => Gen1Pokemon::TANGELA,
            self::ELECTIVIRE => Gen1Pokemon::ELECTABUZZ,
            self::MAGMORTAR => Gen1Pokemon::MAGMAR,
            self::TOGEKISS => Gen2Pokemon::TOGETIC,
            self::YANMEGA => Gen2Pokemon::YANMA,
            self::LEAFEON => Gen1Pokemon::EEVEE,
            self::GLACEON => Gen1Pokemon::EEVEE,
            self::GLISCOR => Gen2Pokemon::GLIGAR,
            self::MAMOSWINE => Gen2Pokemon::PILOSWINE,
            self::PORYGON_Z => Gen2Pokemon::PORYGON2,
            self::GALLADE => Gen3Pokemon::KIRLIA,
            self::PROBOPASS => Gen3Pokemon::NOSEPASS,
            self::DUSKNOIR => Gen3Pokemon::DUSCLOPS,
            self::FROSLASS => Gen3Pokemon::SNORUNT,
            default => null,
        };
    }

    public function name(): string
    {
        return match ($this) {
            self::TURTWIG => 'Turtwig',
            self::GROTLE => 'Grotle',
            self::TORTERRA => 'Torterra',
            self::CHIMCHAR => 'Chimchar',
            self::MONFERNO => 'Monferno',
            self::INFERNAPE => 'Infernape',
            self::PIPLUP => 'Piplup',
            self::PRINPLUP => 'Prinplup',
            self::EMPOLEON => 'Empoleon',
            self::STARLY => 'Starly',
            self::STARAVIA => 'Staravia',
            self::STARAPTOR => 'Staraptor',
            self::BIDOOF => 'Bidoof',
            self::BIBAREL => 'Bibarel',
            self::KRICKETOT => 'Kricketot',
            self::KRICKETUNE => 'Kricketune',
            self::SHINX => 'Shinx',
            self::LUXIO => 'Luxio',
            self::LUXRAY => 'Luxray',
            self::BUDEW => 'Budew',
            self::ROSERADE => 'Roserade',
            self::CRANIDOS => 'Cranidos',
            self::RAMPARDOS => 'Rampardos',
            self::SHIELDON => 'Shieldon',
            self::BASTIODON => 'Bastiodon',
            self::BURMY => 'Burmy',
            self::WORMADAM => 'Wormadam',
            self::MOTHIM => 'Mothim',
            self::COMBEE => 'Combee',
            self::VESPIQUEN => 'Vespiquen',
            self::PACHIRISU => 'Pachirisu',
            self::BUIZEL => 'Buizel',
            self::FLOATZEL => 'Floatzel',
            self::CHERUBI => 'Cherubi',
            self::CHERRIM => 'Cherrim',
            self::SHELLOS => 'Shellos',
            self::GASTRODON => 'Gastrodon',
            self::AMBIPOM => 'Ambipom',
            self::DRIFLOON => 'Drifloon',
            self::DRIFBLIM => 'Drifblim',
            self::BUNEARY => 'Buneary',
            self::LOPUNNY => 'Lopunny',
            self::MISMAGIUS => 'Mismagius',
            self::HONCHKROW => 'Honchkrow',
            self::GLAMEOW => 'Glameow',
            self::PURUGLY => 'Purugly',
            self::CHINGLING => 'Chingling',
            self::STUNKY => 'Stunky',
            self::SKUNTANK => 'Skuntank',
            self::BRONZOR => 'Bronzor',
            self::BRONZONG => 'Bronzong',
            self::BONSLY => 'Bonsly',
            self::MIME_JR => 'Mime Jr.',
            self::HAPPINY => 'Happiny',
            self::CHATOT => 'Chatot',
            self::SPIRITOMB => 'Spiritomb',
            self::GIBLE => 'Gible',
            self::GABITE => 'Gabite',
            self::GARCHOMP => 'Garchomp',
            self::MUNCHLAX => 'Munchlax',
            self::RIOLU => 'Riolu',
            self::LUCARIO => 'Lucario',
            self::HIPPOPOTAS => 'Hippopotas',
            self::HIPPOWDON => 'Hippowdon',
            self::SKORUPI => 'Skorupi',
            self::DRAPION => 'Drapion',
            self::CROAGUNK => 'Croagunk',
            self::TOXICROAK => 'Toxicroak',
            self::CARNIVINE => 'Carnivine',
            self::FINNEON => 'Finneon',
            self::LUMINEON => 'Lumineon',
            self::MANTYKE => 'Mantyke',
            self::SNOVER => 'Snover',
            self::ABOMASNOW => 'Abomasnow',
            self::WEAVILE => 'Weavile',
            self::MAGNEZONE => 'Magnezone',
            self::LICKILICKY => 'Lickilicky',
            self::RHYPERIOR => 'Rhyperior',
            self::TANGROWTH => 'Tangrowth',
            self::ELECTIVIRE => 'Electivire',
            self::MAGMORTAR => 'Magmortar',
            self::TOGEKISS => 'Togekiss',
            self::YANMEGA => 'Yanmega',
            self::LEAFEON => 'Leafeon',
            self::GLACEON => 'Glaceon',
            self::GLISCOR => 'Gliscor',
            self::MAMOSWINE => 'Mamoswine',
            self::PORYGON_Z => 'Porygon-Z',
            self::GALLADE => 'Gallade',
            self::PROBOPASS => 'Probopass',
            self::DUSKNOIR => 'Dusknoir',
            self::FROSLASS => 'Froslass',
            self::ROTOM => 'Rotom',
            self::UXIE => 'Uxie',
            self::MESPRIT => 'Mesprit',
            self::AZELF => 'Azelf',
            self::DIALGA => 'Dialga',
            self::PALKIA => 'Palkia',
            self::HEATRAN => 'Heatran',
            self::REGIGIGAS => 'Regigigas',
            self::GIRATINA => 'Giratina',
            self::CRESSELIA => 'Cresselia',
            self::PHIONE => 'Phione',
            self::MANAPHY => 'Manaphy',
            self::DARKRAI => 'Darkrai',
            self::SHAYMIN => 'Shaymin',
            self::ARCEUS => 'Arceus',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::TURTWIG => 'turtwig',
            self::GROTLE => 'grotle',
            self::TORTERRA => 'torterra',
            self::CHIMCHAR => 'chimchar',
            self::MONFERNO => 'monferno',
            self::INFERNAPE => 'infernape',
            self::PIPLUP => 'piplup',
            self::PRINPLUP => 'prinplup',
            self::EMPOLEON => 'empoleon',
            self::STARLY => 'starly',
            self::STARAVIA => 'staravia',
            self::STARAPTOR => 'staraptor',
            self::BIDOOF => 'bidoof',
            self::BIBAREL => 'bibarel',
            self::KRICKETOT => 'kricketot',
            self::KRICKETUNE => 'kricketune',
            self::SHINX => 'shinx',
            self::LUXIO => 'luxio',
            self::LUXRAY => 'luxray',
            self::BUDEW => 'budew',
            self::ROSERADE => 'roserade',
            self::CRANIDOS => 'cranidos',
            self::RAMPARDOS => 'rampardos',
            self::SHIELDON => 'shieldon',
            self::BASTIODON => 'bastiodon',
            self::BURMY => 'burmy',
            self::WORMADAM => 'wormadam',
            self::MOTHIM => 'mothim',
            self::COMBEE => 'combee',
            self::VESPIQUEN => 'vespiquen',
            self::PACHIRISU => 'pachirisu',
            self::BUIZEL => 'buizel',
            self::FLOATZEL => 'floatzel',
            self::CHERUBI => 'cherubi',
            self::CHERRIM => 'cherrim',
            self::SHELLOS => 'shellos',
            self::GASTRODON => 'gastrodon',
            self::AMBIPOM => 'ambipom',
            self::DRIFLOON => 'drifloon',
            self::DRIFBLIM => 'drifblim',
            self::BUNEARY => 'buneary',
            self::LOPUNNY => 'lopunny',
            self::MISMAGIUS => 'mismagius',
            self::HONCHKROW => 'honchkrow',
            self::GLAMEOW => 'glameow',
            self::PURUGLY => 'purugly',
            self::CHINGLING => 'chingling',
            self::STUNKY => 'stunky',
            self::SKUNTANK => 'skuntank',
            self::BRONZOR => 'bronzor',
            self::BRONZONG => 'bronzong',
            self::BONSLY => 'bonsly',
            self::MIME_JR => 'mimejr',
            self::HAPPINY => 'happiny',
            self::CHATOT => 'chatot',
            self::SPIRITOMB => 'spiritomb',
            self::GIBLE => 'gible',
            self::GABITE => 'gabite',
            self::GARCHOMP => 'garchomp',
            self::MUNCHLAX => 'munchlax',
            self::RIOLU => 'riolu',
            self::LUCARIO => 'lucario',
            self::HIPPOPOTAS => 'hippopotas',
            self::HIPPOWDON => 'hippowdon',
            self::SKORUPI => 'skorupi',
            self::DRAPION => 'drapion',
            self::CROAGUNK => 'croagunk',
            self::TOXICROAK => 'toxicroak',
            self::CARNIVINE => 'carnivine',
            self::FINNEON => 'finneon',
            self::LUMINEON => 'lumineon',
            self::MANTYKE => 'mantyke',
            self::SNOVER => 'snover',
            self::ABOMASNOW => 'abomasnow',
            self::WEAVILE => 'weavile',
            self::MAGNEZONE => 'magnezone',
            self::LICKILICKY => 'lickilicky',
            self::RHYPERIOR => 'rhyperior',
            self::TANGROWTH => 'tangrowth',
            self::ELECTIVIRE => 'electivire',
            self::MAGMORTAR => 'magmortar',
            self::TOGEKISS => 'togekiss',
            self::YANMEGA => 'yanmega',
            self::LEAFEON => 'leafeon',
            self::GLACEON => 'glaceon',
            self::GLISCOR => 'gliscor',
            self::MAMOSWINE => 'mamoswine',
            self::PORYGON_Z => 'porygon-z',
            self::GALLADE => 'gallade',
            self::PROBOPASS => 'probopass',
            self::DUSKNOIR => 'dusknoir',
            self::FROSLASS => 'froslass',
            self::ROTOM => 'rotom',
            self::UXIE => 'uxie',
            self::MESPRIT => 'mesprit',
            self::AZELF => 'azelf',
            self::DIALGA => 'dialga',
            self::PALKIA => 'palkia',
            self::HEATRAN => 'heatran',
            self::REGIGIGAS => 'regigigas',
            self::GIRATINA => 'giratina',
            self::CRESSELIA => 'cresselia',
            self::PHIONE => 'phione',
            self::MANAPHY => 'manaphy',
            self::DARKRAI => 'darkrai',
            self::SHAYMIN => 'shaymin',
            self::ARCEUS => 'arceus',
        };
    }
}
