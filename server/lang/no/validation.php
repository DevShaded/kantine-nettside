<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Valideringsspråklinjer
    |--------------------------------------------------------------------------
    |
    | Følgende språklinjer inneholder standard feilmeldinger brukt av
    | validator-klassen. Noen av disse reglene har flere versjoner, slik
    | som størrelsesreglene. Du står fritt til å justere hver av meldingene her.
    |
    */

    'accepted' => 'Feltet :attribute må aksepteres.',
    'accepted_if' => 'Feltet :attribute må aksepteres når :other er :value.',
    'active_url' => 'Feltet :attribute må være en gyldig URL.',
    'after' => 'Feltet :attribute må være en dato etter :date.',
    'after_or_equal' => 'Feltet :attribute må være en dato etter eller lik :date.',
    'alpha' => 'Feltet :attribute må bare inneholde bokstaver.',
    'alpha_dash' => 'Feltet :attribute må bare inneholde bokstaver, tall, bindestreker og understreker.',
    'alpha_num' => 'Feltet :attribute må bare inneholde bokstaver og tall.',
    'array' => 'Feltet :attribute må være en matrise.',
    'ascii' => 'Feltet :attribute må bare inneholde en-byte alfanumeriske tegn og symboler.',
    'before' => 'Feltet :attribute må være en dato før :date.',
    'before_or_equal' => 'Feltet :attribute må være en dato før eller lik :date.',
    'between' => [
        'array' => 'Feltet :attribute må ha mellom :min og :max elementer.',
        'file' => 'Feltet :attribute må være mellom :min og :max kilobyte.',
        'numeric' => 'Feltet :attribute må være mellom :min og :max.',
        'string' => 'Feltet :attribute må være mellom :min og :max tegn.',
    ],
    'boolean' => 'Feltet :attribute må være sann eller falsk.',
    'can' => 'Feltet :attribute inneholder en uautorisert verdi.',
    'confirmed' => 'Bekreftelsen av feltet :attribute stemmer ikke overens.',
    'contains' => 'Feltet :attribute mangler en nødvendig verdi.',
    'current_password' => 'Passordet er feil.',
    'date' => 'Feltet :attribute må være en gyldig dato.',
    'date_equals' => 'Feltet :attribute må være en dato lik :date.',
    'date_format' => 'Feltet :attribute må samsvare med formatet :format.',
    'decimal' => 'Feltet :attribute må ha :decimal desimaler.',
    'declined' => 'Feltet :attribute må avvises.',
    'declined_if' => 'Feltet :attribute må avvises når :other er :value.',
    'different' => 'Feltet :attribute og :other må være forskjellige.',
    'digits' => 'Feltet :attribute må være :digits siffer.',
    'digits_between' => 'Feltet :attribute må være mellom :min og :max siffer.',
    'dimensions' => 'Feltet :attribute har ugyldige bildedimensjoner.',
    'distinct' => 'Feltet :attribute har en duplikatverdi.',
    'doesnt_end_with' => 'Feltet :attribute må ikke slutte med en av følgende: :values.',
    'doesnt_start_with' => 'Feltet :attribute må ikke starte med en av følgende: :values.',
    'email' => 'Feltet :attribute må være en gyldig e-postadresse.',
    'ends_with' => 'Feltet :attribute må slutte med en av følgende: :values.',
    'enum' => 'Den valgte :attribute er ugyldig.',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'extensions' => 'Feltet :attribute må ha en av følgende utvidelser: :values.',
    'file' => 'Feltet :attribute må være en fil.',
    'filled' => 'Feltet :attribute må ha en verdi.',
    'gt' => [
        'array' => 'Feltet :attribute må ha mer enn :value elementer.',
        'file' => 'Feltet :attribute må være større enn :value kilobyte.',
        'numeric' => 'Feltet :attribute må være større enn :value.',
        'string' => 'Feltet :attribute må være lengre enn :value tegn.',
    ],
    'gte' => [
        'array' => 'Feltet :attribute må ha :value elementer eller mer.',
        'file' => 'Feltet :attribute må være større enn eller lik :value kilobyte.',
        'numeric' => 'Feltet :attribute må være større enn eller lik :value.',
        'string' => 'Feltet :attribute må være større enn eller lik :value tegn.',
    ],
    'hex_color' => 'Feltet :attribute må være en gyldig heksadesimal farge.',
    'image' => 'Feltet :attribute må være et bilde.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => 'Feltet :attribute må finnes i :other.',
    'integer' => 'Feltet :attribute må være et heltall.',
    'ip' => 'Feltet :attribute må være en gyldig IP-adresse.',
    'ipv4' => 'Feltet :attribute må være en gyldig IPv4-adresse.',
    'ipv6' => 'Feltet :attribute må være en gyldig IPv6-adresse.',
    'json' => 'Feltet :attribute må være en gyldig JSON-streng.',
    'list' => 'Feltet :attribute må være en liste.',
    'lowercase' => 'Feltet :attribute må være små bokstaver.',
    'lt' => [
        'array' => 'Feltet :attribute må ha færre enn :value elementer.',
        'file' => 'Feltet :attribute må være mindre enn :value kilobyte.',
        'numeric' => 'Feltet :attribute må være mindre enn :value.',
        'string' => 'Feltet :attribute må være kortere enn :value tegn.',
    ],
    'lte' => [
        'array' => 'Feltet :attribute må ikke ha mer enn :value elementer.',
        'file' => 'Feltet :attribute må være mindre enn eller lik :value kilobyte.',
        'numeric' => 'Feltet :attribute må være mindre enn eller lik :value.',
        'string' => 'Feltet :attribute må være kortere enn eller lik :value tegn.',
    ],
    'mac_address' => 'Feltet :attribute må være en gyldig MAC-adresse.',
    'max' => [
        'array' => 'Feltet :attribute må ikke ha mer enn :max elementer.',
        'file' => 'Feltet :attribute må ikke være større enn :max kilobyte.',
        'numeric' => 'Feltet :attribute må ikke være større enn :max.',
        'string' => 'Feltet :attribute må ikke være lengre enn :max tegn.',
    ],
    'max_digits' => 'Feltet :attribute må ikke ha mer enn :max sifre.',
    'mimes' => 'Feltet :attribute må være en fil av typen: :values.',
    'mimetypes' => 'Feltet :attribute må være en fil av typen: :values.',
    'min' => [
        'array' => 'Feltet :attribute må ha minst :min elementer.',
        'file' => 'Feltet :attribute må være minst :min kilobyte.',
        'numeric' => 'Feltet :attribute må være minst :min.',
        'string' => 'Feltet :attribute må være minst :min tegn.',
    ],
    'min_digits' => 'Feltet :attribute må ha minst :min sifre.',
    'missing' => 'Feltet :attribute må være fraværende.',
    'missing_if' => 'Feltet :attribute må være fraværende når :other er :value.',
    'missing_unless' => 'Feltet :attribute må være fraværende med mindre :other er :value.',
    'missing_with' => 'Feltet :attribute må være fraværende når :values er til stede.',
    'missing_with_all' => 'Feltet :attribute må være fraværende når :values er til stede.',
    'multiple_of' => 'Feltet :attribute må være et multiplum av :value.',
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'not_regex' => 'Feltet :attribute har et ugyldig format.',
    'numeric' => 'Feltet :attribute må være et tall.',
    'password' => [
        'letters' => 'Feltet :attribute må inneholde minst én bokstav.',
        'mixed' => 'Feltet :attribute må inneholde minst én stor og én liten bokstav.',
        'numbers' => 'Feltet :attribute må inneholde minst ett tall.',
        'symbols' => 'Feltet :attribute må inneholde minst ett symbol.',
        'uncompromised' => 'Den angitte :attribute har dukket opp i et datalekkasjeregister. Vennligst velg en annen :attribute.',
    ],
    'present' => 'Feltet :attribute må være til stede.',
    'present_if' => 'Feltet :attribute må være til stede når :other er :value.',
    'present_unless' => 'Feltet :attribute må være til stede med mindre :other er :value.',
    'present_with' => 'Feltet :attribute må være til stede når :values er til stede.',
    'present_with_all' => 'Feltet :attribute må være til stede når :values er til stede.',
    'prohibited' => 'Feltet :attribute er forbudt.',
    'prohibited_if' => 'Feltet :attribute er forbudt når :other er :value.',
    'prohibited_unless' => 'Feltet :attribute er forbudt med mindre :other er i :values.',
    'prohibits' => 'Feltet :attribute forbyr at :other er til stede.',
    'regex' => 'Feltet :attribute har et ugyldig format.',
    'required' => 'Feltet :attribute er påkrevd.',
    'required_array_keys' => 'Feltet :attribute må inneholde oppføringer for: :values.',
    'required_if' => 'Feltet :attribute er påkrevd når :other er :value.',
    'required_if_accepted' => 'Feltet :attribute er påkrevd når :other er akseptert.',
    'required_if_declined' => 'Feltet :attribute er påkrevd når :other er avvist.',
    'required_unless' => 'Feltet :attribute er påkrevd med mindre :other er i :values.',
    'required_with' => 'Feltet :attribute er påkrevd når :values er til stede.',
    'required_with_all' => 'Feltet :attribute er påkrevd når :values er til stede.',
    'required_without' => 'Feltet :attribute er påkrevd når :values ikke er til stede.',
    'required_without_all' => 'Feltet :attribute er påkrevd når ingen av :values er til stede.',
    'same' => 'Feltet :attribute må samsvare med :other.',
    'size' => [
        'array' => 'Feltet :attribute må inneholde :size elementer.',
        'file' => 'Feltet :attribute må være :size kilobyte.',
        'numeric' => 'Feltet :attribute må være :size.',
        'string' => 'Feltet :attribute må være :size tegn.',
    ],
    'starts_with' => 'Feltet :attribute må starte med en av følgende: :values.',
    'string' => 'Feltet :attribute må være en streng.',
    'timezone' => 'Feltet :attribute må være en gyldig tidssone.',
    'unique' => 'Feltet :attribute er allerede tatt.',
    'uploaded' => 'Feltet :attribute kunne ikke lastes opp.',
    'uppercase' => 'Feltet :attribute må være store bokstaver.',
    'url' => 'Feltet :attribute må være en gyldig URL.',
    'ulid' => 'Feltet :attribute må være en gyldig ULID.',
    'uuid' => 'Feltet :attribute må være en gyldig UUID.',

    /*
    |--------------------------------------------------------------------------
    | Tilpassede valideringsspråklinjer
    |--------------------------------------------------------------------------
    |
    | Her kan du spesifisere tilpassede valideringsmeldinger for attributter ved å bruke
    | konvensjonen "attribute.rule" for å navngi linjene. Dette gjør det raskt å
    | spesifisere en spesifikk tilpasset språklinje for en gitt attributtregel.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'tilpasset melding',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tilpassede valideringsattributter
    |--------------------------------------------------------------------------
    |
    | Følgende språklinjer brukes til å bytte ut vår attributtplassholder
    | med noe mer leservennlig, for eksempel "E-postadresse" i stedet for "email".
    | Dette hjelper oss med å gjøre meldingen mer uttrykksfull.
    |
    */

    'attributes' => [],

];
