<?php

declare(strict_types=1);

namespace App\Enums;

enum Gen6Pokemon: int
{
    case CHESPIN = 650;
    case QUILLADIN = 651;
    case CHESNAUGHT = 652;
    case FENNEKIN = 653;
    case BRAIXEN = 654;
    case DELPHOX = 655;
    case FROAKIE = 656;
    case FROGADIER = 657;
    case GRENINJA = 658;
    case BUNNELBY = 659;
    case DIGGERSBY = 660;
    case FLETCHLING = 661;
    case FLETCHINDER = 662;
    case TALONFLAME = 663;
    case SCATTERBUG = 664;
    case SPEWPA = 665;
    case VIVILLON = 666;
    case LITLEO = 667;
    case PYROAR = 668;
    case FLABEBE = 669;
    case FLOETTE = 670;
    case FLORGES = 671;
    case SKIDDO = 672;
    case GOGOAT = 673;
    case PANCHAM = 674;
    case PANGORO = 675;
    case FURFROU = 676;
    case ESPURR = 677;
    case MEOWSTIC = 678;
    case HONEDGE = 679;
    case DOUBLADE = 680;
    case AEGISLASH = 681;
    case SPRITZEE = 682;
    case AROMATISSE = 683;
    case SWIRLIX = 684;
    case SLURPUFF = 685;
    case INKAY = 686;
    case MALAMAR = 687;
    case BINACLE = 688;
    case BARBARACLE = 689;
    case SKRELP = 690;
    case DRAGALGE = 691;
    case CLAUNCHER = 692;
    case CLAWITZER = 693;
    case HELIOPTILE = 694;
    case HELIOLISK = 695;
    case TYRUNT = 696;
    case TYRANTRUM = 697;
    case AMAURA = 698;
    case AURORUS = 699;
    case SYLVEON = 700;
    case HAWLUCHA = 701;
    case DEDENNE = 702;
    case CARBINK = 703;
    case GOOMY = 704;
    case SLIGGOO = 705;
    case GOODRA = 706;
    case KLEFKI = 707;
    case PHANTUMP = 708;
    case TREVENANT = 709;
    case PUMPKABOO = 710;
    case GOURGEIST = 711;
    case BERGMITE = 712;
    case AVALUGG = 713;
    case NOIBAT = 714;
    case NOIVERN = 715;
    case XERNEAS = 716;
    case YVELTAL = 717;
    case ZYGARDE = 718;
    case DIANCIE = 719;
    case HOOPA = 720;
    case VOLCANION = 721;

    public function generation(): Generation
    {
        return Generation::VI;
    }

    public function name(): string
    {
        return match ($this) {
            self::CHESPIN => 'Chespin',
            self::QUILLADIN => 'Quilladin',
            self::CHESNAUGHT => 'Chesnaught',
            self::FENNEKIN => 'Fennekin',
            self::BRAIXEN => 'Braixen',
            self::DELPHOX => 'Delphox',
            self::FROAKIE => 'Froakie',
            self::FROGADIER => 'Frogadier',
            self::GRENINJA => 'Greninja',
            self::BUNNELBY => 'Bunnelby',
            self::DIGGERSBY => 'Diggersby',
            self::FLETCHLING => 'Fletchling',
            self::FLETCHINDER => 'Fletchinder',
            self::TALONFLAME => 'Talonflame',
            self::SCATTERBUG => 'Scatterbug',
            self::SPEWPA => 'Spewpa',
            self::VIVILLON => 'Vivillon',
            self::LITLEO => 'Litleo',
            self::PYROAR => 'Pyroar',
            self::FLABEBE => 'Flabebe',
            self::FLOETTE => 'Floette',
            self::FLORGES => 'Florges',
            self::SKIDDO => 'Skiddo',
            self::GOGOAT => 'Gogoat',
            self::PANCHAM => 'Pancham',
            self::PANGORO => 'Pangoro',
            self::FURFROU => 'Furfrou',
            self::ESPURR => 'Espurr',
            self::MEOWSTIC => 'Meowstic',
            self::HONEDGE => 'Honedge',
            self::DOUBLADE => 'Doublade',
            self::AEGISLASH => 'Aegislash',
            self::SPRITZEE => 'Spritzee',
            self::AROMATISSE => 'Aromatisse',
            self::SWIRLIX => 'Swirlix',
            self::SLURPUFF => 'Slurpuff',
            self::INKAY => 'Inkay',
            self::MALAMAR => 'Malamar',
            self::BINACLE => 'Binacle',
            self::BARBARACLE => 'Barbaracle',
            self::SKRELP => 'Skrelp',
            self::DRAGALGE => 'Dragalge',
            self::CLAUNCHER => 'Clauncher',
            self::CLAWITZER => 'Clawitzer',
            self::HELIOPTILE => 'Helioptile',
            self::HELIOLISK => 'Heliolisk',
            self::TYRUNT => 'Tyrunt',
            self::TYRANTRUM => 'Tyrantrum',
            self::AMAURA => 'Amaura',
            self::AURORUS => 'Aurorus',
            self::SYLVEON => 'Sylveon',
            self::HAWLUCHA => 'Hawlucha',
            self::DEDENNE => 'Dedenne',
            self::CARBINK => 'Carbink',
            self::GOOMY => 'Goomy',
            self::SLIGGOO => 'Sliggoo',
            self::GOODRA => 'Goodra',
            self::KLEFKI => 'Klefki',
            self::PHANTUMP => 'Phantump',
            self::TREVENANT => 'Trevenant',
            self::PUMPKABOO => 'Pumpkaboo',
            self::GOURGEIST => 'Gourgeist',
            self::BERGMITE => 'Bergmite',
            self::AVALUGG => 'Avalugg',
            self::NOIBAT => 'Noibat',
            self::NOIVERN => 'Noivern',
            self::XERNEAS => 'Xerneas',
            self::YVELTAL => 'Yveltal',
            self::ZYGARDE => 'Zygarde',
            self::DIANCIE => 'Diancie',
            self::HOOPA => 'Hoopa',
            self::VOLCANION => 'Volcanion',
        };
    }

    public function slug(): string
    {
        return match ($this) {
            self::CHESPIN => 'chespin',
            self::QUILLADIN => 'quilladin',
            self::CHESNAUGHT => 'chesnaught',
            self::FENNEKIN => 'fennekin',
            self::BRAIXEN => 'braixen',
            self::DELPHOX => 'delphox',
            self::FROAKIE => 'froakie',
            self::FROGADIER => 'frogadier',
            self::GRENINJA => 'greninja',
            self::BUNNELBY => 'bunnelby',
            self::DIGGERSBY => 'diggersby',
            self::FLETCHLING => 'fletchling',
            self::FLETCHINDER => 'fletchinder',
            self::TALONFLAME => 'talonflame',
            self::SCATTERBUG => 'scatterbug',
            self::SPEWPA => 'spewpa',
            self::VIVILLON => 'vivillon',
            self::LITLEO => 'litleo',
            self::PYROAR => 'pyroar',
            self::FLABEBE => 'flabebe',
            self::FLOETTE => 'floette',
            self::FLORGES => 'florges',
            self::SKIDDO => 'skiddo',
            self::GOGOAT => 'gogoat',
            self::PANCHAM => 'pancham',
            self::PANGORO => 'pangoro',
            self::FURFROU => 'furfrou',
            self::ESPURR => 'espurr',
            self::MEOWSTIC => 'meowstic',
            self::HONEDGE => 'honedge',
            self::DOUBLADE => 'doublade',
            self::AEGISLASH => 'aegislash',
            self::SPRITZEE => 'spritzee',
            self::AROMATISSE => 'aromatise',
            self::SWIRLIX => 'swirlix',
            self::SLURPUFF => 'slurpuff',
            self::INKAY => 'inkay',
            self::MALAMAR => 'malamar',
            self::BINACLE => 'binacle',
            self::BARBARACLE => 'barbaracle',
            self::SKRELP => 'skrelp',
            self::DRAGALGE => 'dragalge',
            self::CLAUNCHER => 'clauncher',
            self::CLAWITZER => 'clawitzer',
            self::HELIOPTILE => 'helioptile',
            self::HELIOLISK => 'heliolisk',
            self::TYRUNT => 'tyrunt',
            self::TYRANTRUM => 'tyrantrum',
            self::AMAURA => 'amaura',
            self::AURORUS => 'aurorus',
            self::SYLVEON => 'sylveon',
            self::HAWLUCHA => 'hawlucha',
            self::DEDENNE => 'dedenne',
            self::CARBINK => 'carbink',
            self::GOOMY => 'goomy',
            self::SLIGGOO => 'sliggoo',
            self::GOODRA => 'goodra',
            self::KLEFKI => 'klefki',
            self::PHANTUMP => 'phantump',
            self::TREVENANT => 'trevenant',
            self::PUMPKABOO => 'pumpkaboo',
            self::GOURGEIST => 'gourgeist',
            self::BERGMITE => 'bergmite',
            self::AVALUGG => 'avalugg',
            self::NOIBAT => 'noibat',
            self::NOIVERN => 'noivern',
            self::XERNEAS => 'xerneas',
            self::YVELTAL => 'yveltal',
            self::ZYGARDE => 'zygarde',
            self::DIANCIE => 'diancie',
            self::HOOPA => 'hoopa',
            self::VOLCANION => 'volcanion',
        };
    }

}
