<?php

// Public-facing, cycling-specific content. Details marked TBC remain placeholders
// until a real Velomeats calendar, venue agreements and entries are announced.
return [
    'brand' => 'VELOMEATS',
    'name' => 'VELOMEATS',
    'name_lines' => ['VELO', 'MEATS'],
    'date' => 'SEASON 01 · 2027',
    'location' => 'CITY CIRCUITS',
    'venue' => 'CHICAGO · SAN DIEGO · SEATTLE',
    'venue_note' => 'Host circuits, dates and road permissions will be announced when confirmed.',
    'tagline' => 'The breakaway begins here.',
    'description' => 'An editorial cycling series for the riders who make every city circuit count.',
    'demo_notice' => 'CONCEPT SERIES — calendar, courses, host cities, rider fields and results are illustrative until officially announced.',
    'hero_image' => 'images/velo/hero-circuit.png',
    'hero_alt' => 'A peloton of road cyclists rounding a city circuit corner at blue hour.',
    // Add the public path to the event's PNG flyer when it is ready.
    'flyer_image' => null,
    'flyer_alt' => 'VELOMEATS race flyer',
    'support_image' => 'images/velo/peloton-corner.png',
    'support_alt' => 'Close view of road cyclists leaning through a wet city criterium corner.',
    'registration_url' => null, 'tickets_url' => null, 'watch_url' => null, 'results_url' => null, 'newsletter_url' => null, 'contact_email' => null,
    'organizer' => 'VELOMEATS — independent cycling events, in development.',
    'socials' => ['Instagram' => null, 'X' => null, 'YouTube' => null, 'Spotify' => null],
    'navigation' => ['schedule' => 'Race program', 'information' => 'Rider info', 'results' => 'Archive'],
    'schedule_note' => 'Provisional sample formats only. Start times, course distances, lap counts and host circuits will be confirmed in each official rider guide.',
    'sessions' => ['amateur' => 'Open racing · details TBC', 'elite' => 'Elite racing · details TBC'],
    'series_stops' => [
        ['city' => 'Chicago', 'date' => 'September 14, 2027', 'location' => 'Chicago, Illinois', 'field_limit' => '150 riders', 'permit' => 'Permit #2027-0001', 'map_label' => 'Map centered on Chicago, Illinois', 'map_url' => 'https://www.openstreetmap.org/export/embed.html?bbox=-87.655%2C41.867%2C-87.603%2C41.891&layer=mapnik&marker=41.8781%2C-87.6298'],
        ['city' => 'San Diego', 'date' => 'October 05, 2027', 'location' => 'San Diego, California', 'field_limit' => '150 riders', 'permit' => 'Permit TBC', 'map_label' => 'Map centered on San Diego, California', 'map_url' => 'https://www.openstreetmap.org/export/embed.html?bbox=-117.185%2C32.700%2C-117.125%2C32.745&layer=mapnik&marker=32.7157%2C-117.1611'],
        ['city' => 'Seattle', 'date' => 'October 26, 2027', 'location' => 'Seattle, Washington', 'field_limit' => '150 riders', 'permit' => 'Permit TBC', 'map_label' => 'Map centered on Seattle, Washington', 'map_url' => 'https://www.openstreetmap.org/export/embed.html?bbox=-122.375%2C47.580%2C-122.300%2C47.635&layer=mapnik&marker=47.6062%2C-122.3321'],
        ['city' => 'Austin', 'date' => 'Date TBC', 'location' => 'Austin, Texas', 'field_limit' => 'Field limit TBC', 'permit' => 'Permit TBC', 'map_label' => 'Map centered on Austin, Texas', 'map_url' => 'https://www.openstreetmap.org/export/embed.html?bbox=-97.780%2C30.240%2C-97.710%2C30.300&layer=mapnik&marker=30.2672%2C-97.7431'],
        ['city' => 'Brooklyn', 'date' => 'Date TBC', 'location' => 'Brooklyn, New York', 'field_limit' => 'Field limit TBC', 'permit' => 'Permit TBC', 'map_label' => 'Map centered on Brooklyn, New York', 'map_url' => 'https://www.openstreetmap.org/export/embed.html?bbox=-74.035%2C40.650%2C-73.920%2C40.720&layer=mapnik&marker=40.6782%2C-73.9442'],
        ['city' => 'Portland', 'date' => 'Date TBC', 'location' => 'Portland, Oregon', 'field_limit' => 'Field limit TBC', 'permit' => 'Permit TBC', 'map_label' => 'Map centered on Portland, Oregon', 'map_url' => 'https://www.openstreetmap.org/export/embed.html?bbox=-122.720%2C45.490%2C-122.620%2C45.560&layer=mapnik&marker=45.5152%2C-122.6784'],
    ],
    'meet_locations' => [
        'chicago' => ['label' => 'Chicago · TBC', 'sessions' => ['amateur' => 'Open racing · rider check-in TBC', 'elite' => 'Elite program · technical briefing TBC'], 'schedule' => [
            'amateur' => [['time' => 'TBC', 'event' => 'Circuit race', 'division' => 'Open categories', 'course' => 'Course / laps TBC', 'note' => 'Rider check-in TBC'], ['time' => 'TBC', 'event' => 'Criterium', 'division' => 'Club & amateur', 'course' => 'Course / duration TBC'], ['time' => 'TBC', 'event' => 'Time trial', 'division' => 'Open categories', 'course' => 'Distance TBC']],
            'elite' => [['time' => 'TBC', 'event' => 'Elite criterium', 'division' => 'Women / Men', 'course' => 'Circuit / laps TBC', 'note' => 'Start & finish TBC'], ['time' => 'TBC', 'event' => 'Elite road race', 'division' => 'Women / Men', 'course' => 'Distance / duration TBC']],
        ]],
        'san-diego' => ['label' => 'San Diego · TBC', 'sessions' => ['amateur' => 'Open racing · rider check-in TBC', 'elite' => 'Elite program · technical briefing TBC'], 'schedule' => [
            'amateur' => [['time' => 'TBC', 'event' => 'Road race', 'division' => 'Open categories', 'course' => 'Route / distance TBC'], ['time' => 'TBC', 'event' => 'Circuit race', 'division' => 'Club & amateur', 'course' => 'Circuit / laps TBC']],
            'elite' => [['time' => 'TBC', 'event' => 'Elite circuit race', 'division' => 'Women / Men', 'course' => 'Circuit / laps TBC'], ['time' => 'TBC', 'event' => 'Elite time trial', 'division' => 'Women / Men', 'course' => 'Distance TBC']],
        ]],
        'seattle' => ['label' => 'Seattle · TBC', 'sessions' => ['amateur' => 'Open racing · rider check-in TBC', 'elite' => 'Elite program · technical briefing TBC'], 'schedule' => [
            'amateur' => [['time' => 'TBC', 'event' => 'Criterium', 'division' => 'Open categories', 'course' => 'Circuit / duration TBC'], ['time' => 'TBC', 'event' => 'Road race', 'division' => 'Club & amateur', 'course' => 'Route / distance TBC']],
            'elite' => [['time' => 'TBC', 'event' => 'Elite criterium', 'division' => 'Women / Men', 'course' => 'Circuit / laps TBC'], ['time' => 'TBC', 'event' => 'Elite road race', 'division' => 'Women / Men', 'course' => 'Distance / duration TBC']],
        ]],
    ],
    'information' => [
        'details' => ['label' => 'Event details', 'eyebrow' => 'A new way to race', 'title' => 'BUILT FOR THE BUNCH.', 'paragraphs' => ['VELO SERIES is a developing concept for a multi-city cycling program: road races, criteriums, circuit races and time trials presented with equal care.', 'Confirmed categories, entry standards, schedules and ticket information will appear here only when a host event is announced.'], 'facts' => ['Format' => 'Road, criterium, circuit & time trial', 'Entry status' => 'Not yet open', 'Tickets' => 'Not yet on sale']],
        'awards' => ['label' => 'Awards & prizes', 'eyebrow' => 'Worth the effort', 'title' => 'THE PODIUM AWAITS.', 'paragraphs' => ['Awards and prize-money structures will be published with each confirmed event. No prize purse, sponsorship or payment commitment is currently represented.'], 'facts' => ['Podium' => 'Recognition format TBC', 'Prize details' => 'To be announced']],
        'venue' => ['label' => 'Venue & course', 'eyebrow' => 'Know the route', 'title' => 'COURSES WITH CHARACTER.', 'paragraphs' => ['Host cities and final courses are not confirmed. Each official event page will publish its circuit map, road closures, start and finish areas, spectator access and accessible viewing information.', 'Please do not make travel plans based on this concept site.']],
        'rules' => ['label' => 'Competition rules', 'eyebrow' => 'Fair, clear, fast', 'title' => 'RACE WITH RESPECT.', 'paragraphs' => ['The final technical regulations will be published after sanctioning and event operations are confirmed.'], 'items' => ['Riders will be seeded and assigned categories using the published event criteria.', 'Rider check-in, equipment checks and neutral-service information will appear in the technical guide.', 'Course conduct, timing, protests and safety procedures will be defined for every confirmed race.']],
        'stay' => ['label' => 'Travel & local guide', 'eyebrow' => 'Make a weekend of it', 'title' => 'RIDE. STAY. EXPLORE.', 'paragraphs' => ['A local guide will bring together transport, bike-friendly stays, food and spectator information when each host city is confirmed.', 'No accommodation or travel partners are currently announced.'], 'facts' => ['Stay' => 'Guide coming soon', 'Travel' => 'Details TBC', 'Local partners' => 'To be announced']],
        'handbook' => ['label' => 'Rider handbook', 'eyebrow' => 'Arrive ready', 'title' => 'RACE DAY, SORTED.', 'paragraphs' => ['The final rider handbook will contain mandatory check-in windows, number collection, equipment requirements and race-day support locations.'], 'items' => ['Before arrival: review your category, start information and technical guide.', 'At the venue: collect your race number and complete rider check-in.', 'Before the start: attend the technical briefing when required and enter the start pen on instruction.', 'After your race: follow marshal direction through the finish and recovery areas.']],
        'guide' => ['label' => 'Race guide', 'eyebrow' => 'The essential lines', 'title' => 'FIND YOUR FORMAT.', 'paragraphs' => ['Open categories provide a welcoming route to the start line. Elite fields compete in dedicated, high-tempo programs. Course maps and start lists will follow confirmation.', 'Use the Amateur and Elite selector to explore the provisional race-format framework.'], 'link' => ['label' => 'Explore the race program', 'href' => '#schedule']],
        'achievements' => ['label' => 'Results & certificates', 'eyebrow' => 'Make it count', 'title' => 'A RECORD OF THE RIDE.', 'paragraphs' => ['This archive is a format preview only. Official results, lap times and certificates will be available only after a confirmed event has taken place.'], 'link' => ['label' => 'View the concept archive', 'href' => '#results']],
        'terms' => ['label' => 'Terms & conditions', 'eyebrow' => 'Before you enter', 'title' => 'CLEAR AT EVERY TURN.', 'paragraphs' => ['This is a portfolio concept, not an offer to enter a race or purchase tickets. No payment, booking or personal-data submission is accepted here.', 'Participation terms, cancellation arrangements, eligibility requirements and privacy information will be supplied before launch.']],
        'disclaimer' => ['label' => 'Disclaimer', 'eyebrow' => 'The small print', 'title' => 'CONCEPT. NOT ANNOUNCED.', 'paragraphs' => ['VELO SERIES is a fictional cycling-event concept. Dates, host cities, courses, riders, awards, schedules and results are illustrative; no real event or commercial relationship is represented.', 'Photography is AI-generated concept imagery and does not depict actual entrants. No sponsor, federation, rider or venue endorsement is implied.']],
        'faqs' => ['label' => 'FAQs', 'eyebrow' => 'Good questions', 'title' => 'BEFORE YOU RIDE.', 'faqs' => [['question' => 'Can I register or buy a ticket?', 'answer' => 'Not yet. VELO SERIES is a portfolio concept and no registration or ticket service is connected.'], ['question' => 'Are the host cities and dates confirmed?', 'answer' => 'No. The calendar, host cities, circuits and course details remain placeholders until formally announced.'], ['question' => 'Are Amateur and Elite separate events?', 'answer' => 'They are separate competition programs within the same series format. Use the race-program selector to explore both.'], ['question' => 'Where can I find the course map?', 'answer' => 'Confirmed course maps and rider guides will be released with each announced event.']]],
    ],
    'past_results' => [
        ['year' => '2027', 'summary' => 'Future edition', 'rows' => [['race' => 'Elite criterium', 'athlete' => 'Start list to be announced', 'time' => 'Results pending'], ['race' => 'Open circuit race', 'athlete' => 'Start list to be announced', 'time' => 'Results pending']]],
        ['year' => '2026', 'summary' => 'Concept archive', 'rows' => [['race' => 'Road race', 'athlete' => 'No official result', 'time' => '—']]],
    ],
    // Add image paths and alt text to a tile's media array as photography becomes available.
    // Empty media arrays use the animated VeloMeats color treatment in the gallery.
    'gallery' => [
        'title' => 'Gallery',
        'placeholder_colors' => ['#0a0a0a', '#353534', '#9b9b96', '#d6d6d1', '#73736f'],
        'tiles' => [
            ['media' => []], ['media' => []], ['media' => []], ['media' => []],
            ['media' => []], ['media' => []], ['media' => []], ['media' => []],
            ['media' => []], ['media' => []], ['media' => []], ['media' => []],
        ],
    ],
    'media' => [
        ['title' => 'Press accreditation', 'body' => 'A considered space for the people who tell the story. Accreditation details will be published when a real VELO SERIES event is announced.'],
        ['title' => 'Partners', 'body' => 'Partner opportunities will be shared with confirmed host events. No current sponsor relationship is represented.'],
    ],
];
