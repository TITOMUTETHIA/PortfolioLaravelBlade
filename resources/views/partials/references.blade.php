<section id="references" class="section-padding" style="background: rgba(11, 25, 44, 0.45);">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span>Academic Verification</span>
            </div>
            <h2 class="section-title">
                Academic <span class="text-gradient">References</span>
            </h2>
            <p class="section-desc">
                Distinguished educators, technical commitment, and character.
            </p>
        </div>

        <div class="references-grid">
            @foreach($references as $ref)
                <div class="glass-card reference-card">
                    <div class="reference-profile">
                        <div class="reference-avatar">
                            {{ substr($ref['name'], 0, 1) }}
                        </div>
                        <div>
                            <h3 class="reference-name">{{ $ref['name'] }}</h3>
                            <div class="reference-title">{{ $ref['title'] }}</div>
                            <div class="reference-institution">{{ $ref['institution'] }}</div>
                        </div>
                    </div>

                    <div class="reference-contacts">
                        <a href="mailto:{{ $ref['email'] }}" class="ref-contact-link" title="Send Email">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $ref['email'] }}</span>
                        </a>

                        <a href="tel:{{ str_replace(' ', '', $ref['phone']) }}" class="ref-contact-link" title="Call">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>{{ $ref['phone'] }}</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
