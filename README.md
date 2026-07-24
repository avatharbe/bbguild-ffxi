# bbGuild - Final Fantasy XI
[![Tests](https://github.com/avatharbe/bbguildffxi/actions/workflows/tests.yml/badge.svg)](https://github.com/avatharbe/bbguildffxi/actions/workflows/tests.yml)

Game plugin that adds Final Fantasy XI support to [bbGuild](https://github.com/avatharbe/bbguild).

## Features

- **FFXI Jobs** - 21 jobs (Warrior, Monk, White Mage, Black Mage, Red Mage, Thief, Paladin, Dark Knight, Beastmaster, Bard, Ranger, Samurai, Ninja, Dragoon, Summoner, Blue Mage, Corsair, Puppetmaster, Dancer, Scholar)
- **FFXI Races** - 6 playable races (Hume, Elvaan, Tarutaru, Mithra, Galka)
- **Nations** - 4 nations: Bastok, San d'Oria, Windurst, Jueno
- **Localization** - Job and race names in English, French, and German
- **Regions** - US, EU, and JP server regions
- **Allakhazam Links** - Boss and zone database URLs linked to FFXI Allakhazam

## Requirements

- phpBB >= 3.3.0
- PHP >= 8.1.0
- **bbGuild core** (`avathar/bbguild`) must be installed and enabled

## Installation

1. Ensure bbGuild core (`avathar/bbguild`) is installed and enabled.
2. Copy the `bbguildffxi` folder to `/ext/avathar/bbguildffxi/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Look for `bbGuild - Final Fantasy XI` under Disabled Extensions and click `Enable`.
5. Go to ACP > bbGuild > Games and install the **Final Fantasy XI** game.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Find `bbGuild - Final Fantasy XI` under Enabled Extensions and click `Disable`.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/avathar/bbguildffxi` folder.

**Note:** Disabling the extension does not delete existing guild or player data. Your roster and player records remain intact in bbGuild core.

## Game Data

### Nations

| ID | Nation |
|----|--------|
| 1 | Bastok |
| 2 | San d'Oria |
| 3 | Windurst |
| 4 | Jueno |

### Jobs (21)

| ID | Job |
|----|-----|
| 0 | Unknown |
| 1 | Warrior |
| 2 | Monk |
| 3 | White Mage |
| 4 | Black Mage |
| 5 | Red Mage |
| 6 | Thief |
| 7 | Paladin |
| 8 | Dark Knight |
| 9 | Beastmaster |
| 10 | Bard |
| 11 | Ranger |
| 12 | Samurai |
| 13 | Ninja |
| 14 | Dragoon |
| 15 | Summoner |
| 16 | Blue Mage |
| 17 | Corsair |
| 18 | Puppetmaster |
| 19 | Dancer |
| 20 | Scholar |

### Races (6)

Unknown, Hume, Elvaan, Tarutaru, Mithra, Galka

## License

[GNU General Public License v2](http://opensource.org/licenses/gpl-2.0.php)

## Links

- [bbGuild Core](https://github.com/avatharbe/bbguild)
- [FFXI Allakhazam](http://ffxi.allakhazam.com/)
- [Issue Tracker](https://github.com/avatharbe/bbguildffxi/issues)
