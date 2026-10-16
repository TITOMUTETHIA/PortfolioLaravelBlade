<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span>Get In Touch</span>
            </div>
            <h2 class="section-title">
                Let's Discuss <span class="text-gradient">Opportunities</span>
            </h2>
            <p class="section-desc">
                Currently open for junior developer opportunities, and collaborative technical projects. Reach out directly or send a message below.
            </p>
        </div>

        <div class="contact-grid">
            <!-- Left: Direct Contact Channels with Copy Buttons -->
            <div class="contact-info-list">
                <!-- Email Card -->
                <div class="glass-card contact-channel-card">
                    <div class="channel-main">
                        <div class="channel-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <div class="channel-label">Direct Email</div>
                            <div class="channel-val">
                                <a href="mailto:{{ $profile['email'] }}" style="color: inherit;">{{ $profile['email'] }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="channel-actions">
                        <button type="button" class="btn-copy" data-copy="{{ $profile['email'] }}" data-label="Email Address">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span>Copy</span>
                        </button>
                        <a href="mailto:{{ $profile['email'] }}" class="btn btn-primary btn-sm">Email</a>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="glass-card contact-channel-card">
                    <div class="channel-main">
                        <div class="channel-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <div class="channel-label">Mobile Phone</div>
                            <div class="channel-val">
                                <a href="tel:{{ $profile['phone_intl'] }}" style="color: inherit;">{{ $profile['phone'] }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="channel-actions">
                        <button type="button" class="btn-copy" data-copy="{{ $profile['phone'] }}" data-label="Phone Number">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span>Copy</span>
                        </button>
                        <a href="tel:{{ $profile['phone_intl'] }}" class="btn btn-secondary btn-sm">Call</a>
                    </div>
                </div>

                <!-- GitHub Card -->
                <div class="glass-card contact-channel-card">
                    <div class="channel-main">
                        <div class="channel-icon">
                            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                            </svg>
                        </div>
                        <div>
                            <div class="channel-label">GitHub Profile</div>
                            <div class="channel-val font-mono" style="font-size: 0.88rem;">github.com/titomutethia</div>
                        </div>
                    </div>
                    <div class="channel-actions">
                        <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
                            <span>Visit Profile</span>
                            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="glass-card contact-channel-card">
                    <div class="channel-main">
                        <div class="channel-icon">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="channel-label">Postal Address</div>
                            <div class="channel-val">{{ $profile['location'] }}</div>
                        </div>
                    </div>
                    <div class="channel-actions">
                        <button type="button" class="btn-copy" data-copy="{{ $profile['location'] }}" data-label="Address">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span>Copy</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right: Functional Laravel Contact Form -->
            <div class="glass-card contact-form-card">
                <h3 class="about-title" style="margin-bottom: 0.5rem;">
                    <svg class="about-title-icon" width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <span>Send a Direct Message</span>
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 1.5rem;">
                    Your message will be processed by Laravel and recorded. You can also trigger your desktop or mobile email application directly.
                </p>

                <!-- Feedback Alerts -->
                @if(session('success'))
                    <div class="form-feedback-alert alert-success">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink: 0; margin-top: 2px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 13l4 4L19 7" />
                        </svg>
                        <div>
                            <div>{{ session('success') }}</div>
                            @if(session('direct_mailto'))
                                <div style="margin-top: 0.75rem;">
                                    <a href="{{ session('direct_mailto') }}" class="btn btn-primary btn-sm">
                                        Open in Mail App (Pre-filled)
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="form-feedback-alert alert-error">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink: 0; margin-top: 2px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <strong style="display: block; margin-bottom: 0.25rem;">Please review the errors below:</strong>
                            <ul style="margin-left: 1.25rem; font-size: 0.84rem;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="contact-name" class="form-label">Your Name <span style="color: var(--accent-cyan); font-weight: 700;">*</span></label>
                        <input 
                            type="text" 
                            id="contact-name" 
                            name="name" 
                            class="form-control" 
                            placeholder="e.g. Hiring Manager / Recruiter"
                            value="{{ old('name') }}"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact-email" class="form-label">Your Email Address <span style="color: var(--accent-cyan); font-weight: 700;">*</span></label>
                        <input 
                            type="email" 
                            id="contact-email" 
                            name="email" 
                            class="form-control" 
                            placeholder="e.g. recruiter@company.com"
                            value="{{ old('email') }}"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact-subject" class="form-label">Subject <span style="color: var(--accent-cyan); font-weight: 700;">*</span></label>
                        <input 
                            type="text" 
                            id="contact-subject" 
                            name="subject" 
                            class="form-control" 
                            placeholder="e.g. Software Developer Internship Opportunity"
                            value="{{ old('subject') }}"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact-message" class="form-label">Message <span style="color: var(--accent-cyan); font-weight: 700;">*</span></label>
                        <textarea 
                            id="contact-message" 
                            name="message" 
                            class="form-control" 
                            placeholder="Write your inquiry or role details..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
