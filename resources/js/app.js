const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.getElementById('mobile-navigation');
const setMenu = (open) => {
    if (!menuButton || !mobileMenu) return;
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.querySelector('[data-menu-label]').textContent = open ? 'Close' : 'Menu';
    mobileMenu.hidden = !open;
    document.querySelector('.site-header').classList.toggle('menu-open', open);
};
menuButton?.addEventListener('click', () => setMenu(menuButton.getAttribute('aria-expanded') !== 'true'));
mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => setMenu(false)));

document.querySelectorAll('[data-flyer-carousel]').forEach((carousel) => {
    const slides = [...carousel.querySelectorAll('[data-flyer-slide]')];
    const status = carousel.querySelector('[data-flyer-status]');
    const reduceMotion = matchMedia('(prefers-reduced-motion: reduce)');
    let current = 0;
    let timer;
    const show = (index) => {
        current = (index + slides.length) % slides.length;
        slides.forEach((slide, slideIndex) => {
            const active = slideIndex === current;
            slide.hidden = !active;
            slide.classList.toggle('is-active', active);
            slide.setAttribute('aria-hidden', String(!active));
        });
        status.textContent = `${String(current + 1).padStart(2, '0')} / ${String(slides.length).padStart(2, '0')}`;
    };
    const stop = () => window.clearInterval(timer);
    const start = () => {
        stop();
        if (!reduceMotion.matches) timer = window.setInterval(() => show(current + 1), 5000);
    };
    carousel.querySelector('[data-flyer-previous]').addEventListener('click', () => { show(current - 1); start(); });
    carousel.querySelector('[data-flyer-next]').addEventListener('click', () => { show(current + 1); start(); });
    carousel.addEventListener('mouseenter', stop);
    carousel.addEventListener('mouseleave', start);
    carousel.addEventListener('focusin', stop);
    carousel.addEventListener('focusout', (event) => { if (!carousel.contains(event.relatedTarget)) start(); });
    reduceMotion.addEventListener('change', start);
    start();
});

document.querySelectorAll('[data-story-carousel]').forEach((carousel) => {
    const slides = [...carousel.querySelectorAll('[data-story-slide]')];
    const status = carousel.querySelector('[data-story-status]');
    let current = 0;
    const show = (index) => {
        current = (index + slides.length) % slides.length;
        slides.forEach((slide, slideIndex) => {
            const active = slideIndex === current;
            slide.classList.toggle('is-active', active);
            slide.setAttribute('aria-hidden', String(!active));
        });
        status.textContent = `${String(current + 1).padStart(2, '0')} / ${String(slides.length).padStart(2, '0')}`;
    };
    carousel.querySelector('[data-story-previous]').addEventListener('click', () => show(current - 1));
    carousel.querySelector('[data-story-next]').addEventListener('click', () => show(current + 1));
});

const stopButtons = [...document.querySelectorAll('[data-series-stop]')];
const eventMap = document.querySelector('[data-event-map]');
const mapFrame = eventMap?.querySelector('[data-map-frame]');
const heroIntro = document.querySelector('[data-hero-intro]');
const raceFlyer = document.querySelector('[data-race-flyer]');
const flyerFrame = raceFlyer?.querySelector('[data-race-flyer-frame]');
const flyerPlaceholder = raceFlyer?.querySelector('[data-flyer-placeholder]');
const flyerExpand = raceFlyer?.querySelector('[data-flyer-expand]');
const flyerBackdrop = document.querySelector('[data-flyer-backdrop]');
const bikeRegLink = raceFlyer?.querySelector('[data-bikereg-link]');
const headerRegistration = document.querySelector('[data-header-registration]');
const mobileFlyer = matchMedia('(max-width: 800px)');
const heroSection = raceFlyer?.closest('.hero');

const setRaceFlyer = (stop) => {
    if (!raceFlyer) return;
    const flyerUrl = stop.flyer_url ?? '';
    const registrationUrl = stop.registration_url ?? '';
    flyerFrame.hidden = !flyerUrl;
    flyerPlaceholder.hidden = Boolean(flyerUrl);
    flyerFrame.dataset.flyerUrl = flyerUrl;
    flyerExpand.disabled = !flyerUrl;
    flyerExpand.setAttribute('aria-label', flyerUrl && mobileFlyer.matches ? 'Open race flyer in a new tab' : 'Expand race flyer');
    if (flyerUrl) flyerFrame.src = flyerUrl;
    if (registrationUrl) {
        bikeRegLink.href = registrationUrl;
        bikeRegLink.removeAttribute('aria-disabled');
        headerRegistration?.setAttribute('href', registrationUrl);
        headerRegistration?.removeAttribute('aria-disabled');
    } else {
        bikeRegLink.removeAttribute('href');
        bikeRegLink.setAttribute('aria-disabled', 'true');
        headerRegistration?.removeAttribute('href');
        headerRegistration?.setAttribute('aria-disabled', 'true');
    }
};

const closeExpandedFlyer = () => {
    if (!raceFlyer) return;
    raceFlyer.classList.remove('is-expanded');
    heroSection?.classList.remove('flyer-modal-active');
    flyerExpand?.setAttribute('aria-expanded', 'false');
    if (flyerBackdrop) flyerBackdrop.hidden = true;
};

const toggleExpandedFlyer = () => {
    if (!raceFlyer?.classList.contains('is-visible')) return;
    if (mobileFlyer.matches) {
        const flyerUrl = flyerFrame?.dataset.flyerUrl;
        if (flyerUrl) window.open(flyerUrl, '_blank', 'noopener');
        return;
    }
    const expanded = raceFlyer.classList.toggle('is-expanded');
    heroSection?.classList.toggle('flyer-modal-active', expanded);
    flyerExpand?.setAttribute('aria-expanded', String(expanded));
    if (flyerBackdrop) flyerBackdrop.hidden = !expanded;
};

const selectSeriesStop = (button) => {
    const stop = JSON.parse(button.dataset.seriesStop);
    stopButtons.forEach((item) => item.setAttribute('aria-pressed', String(item === button)));
    document.querySelector('[data-stop-date]').textContent = stop.date;
    document.querySelector('[data-stop-location]').textContent = stop.location;
    document.querySelector('[data-stop-field-limit]').textContent = stop.field_limit;
    document.querySelector('[data-stop-permit]').textContent = stop.permit;
    eventMap?.setAttribute('aria-label', stop.map_label);
    mapFrame?.setAttribute('title', stop.map_label);
    if (mapFrame) mapFrame.src = stop.map_url;
    setRaceFlyer(stop);
};

stopButtons.forEach((button) => button.addEventListener('click', () => selectSeriesStop(button)));
if (stopButtons[0]) setRaceFlyer(JSON.parse(stopButtons[0].dataset.seriesStop));

window.setTimeout(() => {
    heroIntro?.classList.add('is-hidden');
    raceFlyer?.classList.add('is-visible');
    raceFlyer?.setAttribute('aria-hidden', 'false');
}, 5000);

flyerExpand?.addEventListener('click', toggleExpandedFlyer);
flyerBackdrop?.addEventListener('click', closeExpandedFlyer);
mobileFlyer.addEventListener('change', (event) => {
    closeExpandedFlyer();
    const flyerUrl = flyerFrame?.dataset.flyerUrl;
    flyerExpand?.setAttribute('aria-label', flyerUrl && event.matches ? 'Open race flyer in a new tab' : 'Expand race flyer');
});
bikeRegLink?.addEventListener('click', (event) => {
    if (!bikeRegLink.href) event.preventDefault();
});
headerRegistration?.addEventListener('click', (event) => {
    if (!headerRegistration.getAttribute('href')) event.preventDefault();
});
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeExpandedFlyer();
});
window.addEventListener('scroll', () => {
    if (raceFlyer?.classList.contains('is-expanded')) closeExpandedFlyer();
}, { passive: true });

const galleryMotion = matchMedia('(prefers-reduced-motion: reduce)');
const startGalleryTiles = () => {
    if (galleryMotion.matches) return;

    document.querySelectorAll('[data-gallery-tile]').forEach((tile, tileIndex) => {
        if (tile.dataset.galleryStarted) return;
        const layers = [...tile.querySelectorAll('.visual-gallery-layer')];
        if (layers.length < 2) return;

        tile.dataset.galleryStarted = 'true';
        let current = 0;
        const show = (index) => {
            current = (index + layers.length) % layers.length;
            layers.forEach((layer, layerIndex) => layer.classList.toggle('is-active', layerIndex === current));
        };
        window.setTimeout(() => window.setInterval(() => show(current + 1), 6200 + (tileIndex % 3) * 800), tileIndex * 480);
    });
};

startGalleryTiles();
