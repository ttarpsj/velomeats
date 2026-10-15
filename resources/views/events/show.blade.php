<section class="hero" aria-labelledby="event-title">
    <video class="hero-video" autoplay muted loop playsinline preload="metadata" poster="{{ site_url($event['hero_image']) }}" aria-label="{{ $event['hero_alt'] }}"><source src="{{ site_url('mp4/12382125_1920_1080_25fps.mp4') }}" type="video/mp4"></video>
    <div class="hero-wash" aria-hidden="true"></div>
    <div class="hero-event">
        <div class="hero-date"><strong>SEASON 01<br>2027</strong></div>
        <div class="city-grid" role="group" aria-label="Season 01 host cities">
            @foreach ($event['series_stops'] as $stop)
                <button type="button" class="city-button" data-series-stop='@json($stop)' aria-pressed="{{ $loop->first ? 'true' : 'false' }}"><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>{{ $stop['city'] }}</button>
            @endforeach
        </div>
        <div class="event-actions" aria-label="Event actions"><span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18h16M6 15l5-6 4 3 3-5"/></svg>Road race</span><a href="#calendar"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3v4m12-4v4M4 9h16M5 5h14v15H5z"/></svg>Add to calendar</a><a href="#share"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 5l4 4-4 4m4-4H9M5 5v14h10"/></svg>Share</a></div>
        <dl class="event-facts">
            <div><dt><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3v4m10-4v4M4 9h16M5 5h14v15H5zM8 13h3m2 0h3"/></svg>Date</dt><dd data-stop-date>{{ $event['series_stops'][0]['date'] }}</dd></div>
            <div><dt><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s6-5.2 6-11a6 6 0 1 0-12 0c0 5.8 6 11 6 11Z"/><circle cx="12" cy="10" r="2"/></svg>Location</dt><dd data-stop-location>{{ $event['series_stops'][0]['location'] }}</dd></div>
            <div><dt><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v14H4zM4 7l8 6 8-6"/></svg>Contact</dt><dd><a href="mailto:hello@velomeats.com">hello@velomeats.com</a></dd></div>
            <div><dt><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 20V6l7-3 7 3v14M9 20v-6h6v6"/></svg>Field limit</dt><dd data-stop-field-limit>{{ $event['series_stops'][0]['field_limit'] }}</dd></div>
            <div><dt><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m12 3 2.2 4.5 5 .7-3.6 3.5.9 5-4.5-2.4-4.5 2.4.9-5-3.6-3.5 5-.7Z"/></svg>Presented by</dt><dd>Velomeats</dd></div>
            <div><dt><img src="{{ site_url('images/USA_Cycling_logo.svg') }}" alt="USA Cycling">Permit</dt><dd data-stop-permit>{{ $event['series_stops'][0]['permit'] }}</dd></div>
        </dl>
        <div class="event-map" data-event-map aria-label="{{ $event['series_stops'][0]['map_label'] }}">
            <iframe data-map-frame title="{{ $event['series_stops'][0]['map_label'] }}" src="{{ $event['series_stops'][0]['map_url'] }}" loading="lazy"></iframe>
        </div>
    </div>
    <div class="hero-copy" data-hero-intro>
        <p class="kicker">VELOMEATS PRESENTS</p>
        <h1 id="event-title">MAKE YOUR<br><em>MOVE.</em></h1>
        <p class="hero-summary">A new road-racing series for the riders who turn every corner into a statement.</p>
    </div>
    <div class="race-flyer-panel" data-race-flyer aria-hidden="true">
        <div class="race-flyer-card">
            <div class="race-flyer-placeholder" data-flyer-placeholder aria-hidden="true"></div>
            <iframe data-race-flyer-frame title="Race flyer" hidden loading="lazy"></iframe>
            <button type="button" class="race-flyer-expand" data-flyer-expand aria-expanded="false" aria-label="Expand race flyer"></button>
        </div>
        <a class="registration-link" data-bikereg-link aria-disabled="true">BikeReg registration link</a>
    </div>
    <button type="button" class="race-flyer-backdrop" data-flyer-backdrop hidden aria-label="Close expanded race flyer"></button>
</section>

<section class="lineup" id="lineup" aria-labelledby="lineup-title">
    <div class="lineup-heading"><p class="eyebrow">THE START LIST</p><h2 id="lineup-title" class="sr-only">The Start List media</h2></div>
    <div class="media-grid" aria-label="Start List media">
        @foreach (array_slice($event['gallery']['tiles'], 0, 6) as $tile)
            @php($media = $tile['media'] ?? [])
            <figure class="media-tile">
                @if (!empty($media))
                    <img src="{{ site_url($media[0]['path']) }}" alt="{{ $media[0]['alt'] ?? '' }}" loading="lazy">
                @else
                    <span aria-hidden="true"></span>
                @endif
            </figure>
        @endforeach
    </div>
</section>

<section class="program" id="program" aria-label="Race flyers">
    <div class="flyer-carousel" data-flyer-carousel aria-roledescription="carousel">
        <article class="flyer is-active" data-flyer-slide aria-roledescription="slide" aria-label="1 of 3">
            <img src="{{ site_url($event['hero_image']) }}" alt="Cyclists racing through an urban circuit" loading="lazy">
            <div class="flyer-overlay"><p>VELOMEATS / 01</p><h2>CHICAGO<br><em>CRIT.</em></h2><span>SEPT 14 · COURSE TBC</span></div>
        </article>
        <article class="flyer" data-flyer-slide aria-roledescription="slide" aria-label="2 of 3" hidden>
            <img src="{{ site_url($event['support_image']) }}" alt="Cyclist sweeping through a road-race corner" loading="lazy">
            <div class="flyer-overlay"><p>VELOMEATS / 02</p><h2>SAN DIEGO<br><em>ROAD.</em></h2><span>OCT 05 · COURSE TBC</span></div>
        </article>
        <article class="flyer" data-flyer-slide aria-roledescription="slide" aria-label="3 of 3" hidden>
            <img src="{{ site_url($event['hero_image']) }}" alt="Peloton riding in formation" loading="lazy">
            <div class="flyer-overlay"><p>VELOMEATS / 03</p><h2>SEATTLE<br><em>NIGHT.</em></h2><span>OCT 26 · COURSE TBC</span></div>
        </article>
        <div class="flyer-controls"><button type="button" data-flyer-previous aria-label="Previous race flyer">←</button><p data-flyer-status aria-live="polite">01 / 03</p><button type="button" data-flyer-next aria-label="Next race flyer">→</button></div>
    </div>
</section>

<section class="stories" id="stories" aria-labelledby="stories-title">
    <div class="story-carousel" data-story-carousel aria-roledescription="carousel">
        <div class="story-copy">
            <p class="eyebrow">FROM THE ROAD</p>
            <p class="story-count" data-story-status aria-live="polite">01 / 05</p>
        </div>
        <article class="story-slide is-active" data-story-slide aria-roledescription="slide" aria-label="1 of 5">
            <h2 id="stories-title">AMERICAN CYCLING<br>IS <em>MOVING.</em></h2>
            <div><p>More people are riding. More people are racing. More athletes are discovering endurance sport, buying bikes, joining clubs, and looking for somewhere to put that enthusiasm.</p><p>The opportunity is already here.</p><p>The challenge is making local racing feel like something people want to be part of.</p><p>Criteriums. Road races. Time trials. Community rides. They should be more than a date on a calendar and a registration link. They can become places people return to, communities rally around, and brands want to associate with.</p></div>
        </article>
        <article class="story-slide" data-story-slide aria-roledescription="slide" aria-label="2 of 5" aria-hidden="true">
            <h2>MORE RACING<br>CREATES <em>MOMENTUM.</em></h2>
            <div><p>American cycling has momentum. Brandon McNulty is wearing the rainbow jersey. Participation in endurance sport continues to introduce new athletes to cycling. And underneath the professional level sits an enormous pool of riders who need races to develop, compete, earn upgrade points, and move through the sport.</p><p>More racing creates more opportunity.</p><p>More riders create deeper fields.</p><p>Deeper fields create stronger competition.</p><p>And stronger events create something worth paying attention to.</p></div>
        </article>
        <article class="story-slide" data-story-slide aria-roledescription="slide" aria-label="3 of 5" aria-hidden="true">
            <h2>THE PROBLEM<br>ISN'T THE <em>RACE.</em></h2>
            <div><p>It's how the race is presented.</p><p>A great course can still disappear into the calendar.</p><p>A passionate organizing team can still struggle to reach beyond the riders who already know them.</p><p>A strong event can still look small to sponsors if the story around it feels small.</p><p>That is where we come in.</p></div>
        </article>
        <article class="story-slide" data-story-slide aria-roledescription="slide" aria-label="4 of 5" aria-hidden="true">
            <h2>BUILD THE EVENT<br>BEYOND <em>RACE DAY.</em></h2>
            <div><p>You handle the course, permits, volunteers, timing, safety, and everything that makes the event physically happen.</p><p>We build the world around it.</p><p>Creative direction. Identity. Campaigns. Digital presentation. Media. Advertising. Sponsor positioning. Community outreach.</p><p>Not for the sake of making the event look bigger than it is.</p><p>For the sake of showing people what it could become.</p><p>The goal is to create enough consistent attention that riders see a race worth entering, communities see something worth supporting, and brands see an opportunity to participate in experiences people will remember.</p></div>
        </article>
        <article class="story-slide" data-story-slide aria-roledescription="slide" aria-label="5 of 5" aria-hidden="true">
            <h2>YOU RUN THE RACE.<br>WE MAKE IT <em>MATTER.</em></h2>
            <div><p>Successful events don't need to begin with national sponsors or enormous budgets.</p><p>They need a reason for people nearby to care.</p><p>Build locally.</p><p>Make the experience good.</p><p>Tell the story properly.</p><p>Bring people back.</p><p>Then give larger partners something real to step into.</p><p>That is how an event stops surviving from year to year and starts building momentum of its own.</p><p>We help make sure people know why it matters.</p></div>
        </article>
        <div class="story-controls"><button type="button" data-story-previous aria-label="Previous story">← Previous</button><button type="button" data-story-next aria-label="Next story">Next →</button></div>
    </div>
</section>

@if (!empty($event['gallery']))
    <section class="visual-gallery" id="gallery" aria-labelledby="gallery-title">
        <div class="visual-gallery-inner">
            <p class="eyebrow">THE VISUAL ARCHIVE</p>
            <h2 id="gallery-title">{{ $event['gallery']['title'] }}</h2>
            <div class="visual-gallery-grid" aria-label="VeloMeats visual archive">
                @foreach ($event['gallery']['tiles'] as $tile)
                    @php($media = $tile['media'] ?? [])
                    <figure class="visual-gallery-tile" data-gallery-tile>
                        @forelse ($media as $item)
                            <span class="visual-gallery-layer {{ $loop->first ? 'is-active' : '' }}">
                                <img src="{{ site_url($item['path']) }}" alt="{{ $item['alt'] ?? '' }}" loading="lazy">
                            </span>
                        @empty
                            @foreach ($event['gallery']['placeholder_colors'] as $color)
                                <span class="visual-gallery-layer visual-gallery-placeholder {{ $loop->first ? 'is-active' : '' }}" style="background-color: {{ $color }}" aria-hidden="true"></span>
                            @endforeach
                        @endforelse
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
@endif
