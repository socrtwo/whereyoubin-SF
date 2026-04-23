<?php
declare(strict_types=1);

namespace TravelLog;

/**
 * ISO 3166-1 alpha-2 codes → country name + emoji flag.
 * A trimmed but representative list; new countries can be added any time.
 */
final class Countries
{
    /** @return array<string, string> */
    public static function all(): array
    {
        static $list = [
            'AR' => '🇦🇷 Argentina','AU' => '🇦🇺 Australia','AT' => '🇦🇹 Austria','BE' => '🇧🇪 Belgium',
            'BR' => '🇧🇷 Brazil','CA' => '🇨🇦 Canada','CL' => '🇨🇱 Chile','CN' => '🇨🇳 China',
            'CO' => '🇨🇴 Colombia','CR' => '🇨🇷 Costa Rica','HR' => '🇭🇷 Croatia','CU' => '🇨🇺 Cuba',
            'CZ' => '🇨🇿 Czechia','DK' => '🇩🇰 Denmark','EG' => '🇪🇬 Egypt','FI' => '🇫🇮 Finland',
            'FR' => '🇫🇷 France','DE' => '🇩🇪 Germany','GR' => '🇬🇷 Greece','HK' => '🇭🇰 Hong Kong',
            'HU' => '🇭🇺 Hungary','IS' => '🇮🇸 Iceland','IN' => '🇮🇳 India','ID' => '🇮🇩 Indonesia',
            'IE' => '🇮🇪 Ireland','IL' => '🇮🇱 Israel','IT' => '🇮🇹 Italy','JP' => '🇯🇵 Japan',
            'KE' => '🇰🇪 Kenya','KR' => '🇰🇷 South Korea','MY' => '🇲🇾 Malaysia','MX' => '🇲🇽 Mexico',
            'MA' => '🇲🇦 Morocco','NL' => '🇳🇱 Netherlands','NZ' => '🇳🇿 New Zealand','NO' => '🇳🇴 Norway',
            'PE' => '🇵🇪 Peru','PH' => '🇵🇭 Philippines','PL' => '🇵🇱 Poland','PT' => '🇵🇹 Portugal',
            'RO' => '🇷🇴 Romania','RU' => '🇷🇺 Russia','SA' => '🇸🇦 Saudi Arabia','SG' => '🇸🇬 Singapore',
            'ZA' => '🇿🇦 South Africa','ES' => '🇪🇸 Spain','SE' => '🇸🇪 Sweden','CH' => '🇨🇭 Switzerland',
            'TW' => '🇹🇼 Taiwan','TH' => '🇹🇭 Thailand','TR' => '🇹🇷 Türkiye','AE' => '🇦🇪 UAE',
            'GB' => '🇬🇧 United Kingdom','US' => '🇺🇸 United States','VN' => '🇻🇳 Vietnam',
        ];
        return $list;
    }

    public static function name(?string $code): string
    {
        if ($code === null) return '—';
        return self::all()[strtoupper($code)] ?? strtoupper($code);
    }
}
