<section id="skills" class="section-padding" style="background: rgba(11, 25, 44, 0.45);">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                <span>Technical Stack</span>
            </div>
            <h2 class="section-title">
                Skills & <span class="text-gradient">Technologies</span>
            </h2>
            <p class="section-desc">
                Verified technologies and tools cultivated through formal coursework at SLIATE, practical project implementations, and continuous learning.
            </p>
        </div>

        <div class="skills-container">
            {{-- Category 1: Programming Languages --}}
            <div class="glass-card skill-category-card">
                <div class="skill-category-header">
                    <div>
                        <h3 class="skill-category-title">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--accent-cyan);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $skills['languages']['title'] }}</span>
                        </h3>
                        <p class="skill-category-desc">{{ $skills['languages']['description'] }}</p>
                    </div>
                </div>

                <div class="skills-grid">
                    @foreach($skills['languages']['items'] as $item)
                        <div class="skill-item-card">
                            <div class="skill-tech-icon">
                                @if($item['icon'] === 'php')
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1.8 13.8l.5-2.6h1.2c1.3 0 2.2-.7 2.4-2 .3-1.4-.4-2.2-1.9-2.2H8.8l-1.3 6.8h1.7zm5.5 0l.5-2.6h1.2c1.3 0 2.2-.7 2.4-2 .3-1.4-.4-2.2-1.9-2.2h-3.6l-1.3 6.8h1.7z"/>
                                    </svg>
                                @elseif($item['icon'] === 'javascript')
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M3 3h18v18H3V3zm15.6 13.5c-.3 1.1-1.3 1.8-2.6 1.8-1.7 0-2.8-1.1-2.8-2.8 0-.2 0-.4.1-.6h1.9c0 .5.3.9.8.9.4 0 .7-.3.7-.8 0-.9-2.6-.9-2.6-2.9 0-1.1.9-1.9 2.3-1.9 1.4 0 2.4.8 2.6 1.9h-1.9c-.1-.4-.3-.6-.7-.6-.3 0-.6.2-.6.5 0 .8 2.6.7 2.6 2.8 0 .4-.1.8-.4 1.1zM11.9 13v3.7c0 1.2-.7 1.6-1.6 1.6-1 0-1.5-.6-1.8-1.3l1.5-.9c.2.4.3.6.5.6.2 0 .4-.1.4-.4V13h1z"/>
                                    </svg>
                                @elseif($item['icon'] === 'java')
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M4 19h16v2H4v-2zm8.5-17c-2 2.5-3 4-1 6 1.5 1.5 1 2.5 0 4-1.5-1.5-2-2.5-1-4 1.5-2 .5-3.5 0-6zm-4 3c-1.5 2-2 3.5-.5 5 1 1 1 2 0 3-1-1-1.5-2-.5-3.5 1-1.5.5-2.5 0-4.5zm6 2c-1.5 1.5-2 2.5-.5 4 1 1 1 2 0 3-1-1-1.5-2-.5-3.5 1-1.5.5-2.5 0-3.5z"/>
                                    </svg>
                                @elseif($item['icon'] === 'python')
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2c-3.1 0-5 1.2-5 3.5v2.5h5v1H5.5C3.2 9 2 10.9 2 14c0 3.2 1.3 5 4.5 5h1.5v-2.2c0-2.1 1.6-3.8 3.8-3.8h4.2v-1.5c0-2.8-2.2-4.5-5-4.5H16V5.5C16 3.2 14.1 2 12 2zm-2.2 2c.6 0 1 .4 1 1s-.4 1-1 1-1-.4-1-1 .4-1 1-1zm6.7 5.5v1.5c0 2.1-1.6 3.8-3.8 3.8H8.5v1.5c0 2.8 2.2 4.5 5 4.5h1c3.1 0 5-1.2 5-3.5v-2.5h-5v-1h6.5c2.3 0 3.5-1.9 3.5-5 0-3.2-1.3-5-4.5-5h-1.5v2.2zM14.2 18c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"/>
                                    </svg>
                                @endif
                            </div>
                            <div class="skill-item-info">
                                <div class="skill-item-name">{{ $item['name'] }}</div>
                                <div class="skill-item-tag">{{ $item['tag'] }}</div>
                            </div>
                            <span class="skill-badge">{{ $item['level'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Category 2: Web & Frontend --}}
            <div class="glass-card skill-category-card">
                <div class="skill-category-header">
                    <div>
                        <h3 class="skill-category-title">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--accent-cyan);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $skills['frontend']['title'] }}</span>
                        </h3>
                        <p class="skill-category-desc">{{ $skills['frontend']['description'] }}</p>
                    </div>
                </div>

                <div class="skills-grid">
                    @foreach($skills['frontend']['items'] as $item)
                        <div class="skill-item-card">
                            <div class="skill-tech-icon">
                                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <div class="skill-item-info">
                                <div class="skill-item-name">{{ $item['name'] }}</div>
                                <div class="skill-item-tag">{{ $item['tag'] }}</div>
                            </div>
                            <span class="skill-badge">{{ $item['level'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Category 3: Backend & APIs --}}
            <div class="glass-card skill-category-card">
                <div class="skill-category-header">
                    <div>
                        <h3 class="skill-category-title">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--accent-cyan);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                            <span>{{ $skills['backend']['title'] }}</span>
                        </h3>
                        <p class="skill-category-desc">{{ $skills['backend']['description'] }}</p>
                    </div>
                </div>

                <div class="skills-grid">
                    @foreach($skills['backend']['items'] as $item)
                        <div class="skill-item-card">
                            <div class="skill-tech-icon">
                                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div class="skill-item-info">
                                <div class="skill-item-name">{{ $item['name'] }}</div>
                                <div class="skill-item-tag">{{ $item['tag'] }}</div>
                            </div>
                            <span class="skill-badge">{{ $item['level'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Category 4: Databases & Tools Side by Side --}}
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.75rem;">
                {{-- Databases --}}
                <div class="glass-card skill-category-card">
                    <div class="skill-category-header">
                        <div>
                            <h3 class="skill-category-title">
                                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--accent-cyan);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                </svg>
                                <span>{{ $skills['databases']['title'] }}</span>
                            </h3>
                            <p class="skill-category-desc">{{ $skills['databases']['description'] }}</p>
                        </div>
                    </div>
                    <div class="skills-grid" style="grid-template-columns: 1fr;">
                        @foreach($skills['databases']['items'] as $item)
                            <div class="skill-item-card">
                                <div class="skill-tech-icon">
                                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4" />
                                    </svg>
                                </div>
                                <div class="skill-item-info">
                                    <div class="skill-item-name">{{ $item['name'] }}</div>
                                    <div class="skill-item-tag">{{ $item['tag'] }}</div>
                                </div>
                                <span class="skill-badge">{{ $item['level'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Developer Tools --}}
                <div class="glass-card skill-category-card">
                    <div class="skill-category-header">
                        <div>
                            <h3 class="skill-category-title">
                                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--accent-cyan);">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $skills['tools']['title'] }}</span>
                            </h3>
                            <p class="skill-category-desc">{{ $skills['tools']['description'] }}</p>
                        </div>
                    </div>
                    <div class="skills-grid" style="grid-template-columns: 1fr;">
                        @foreach($skills['tools']['items'] as $item)
                            <div class="skill-item-card">
                                <div class="skill-tech-icon">
                                    <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                    </svg>
                                </div>
                                <div class="skill-item-info">
                                    <div class="skill-item-name">{{ $item['name'] }}</div>
                                    <div class="skill-item-tag">{{ $item['tag'] }}</div>
                                </div>
                                <span class="skill-badge">{{ $item['level'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Category 5: Professional & Soft Skills from CV --}}
            <div class="glass-card skill-category-card">
                <div class="skill-category-header">
                    <div>
                        <h3 class="skill-category-title">
                            <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--accent-cyan);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span>{{ $skills['soft']['title'] }}</span>
                        </h3>
                        <p class="skill-category-desc">{{ $skills['soft']['description'] }}</p>
                    </div>
                </div>

                <div class="soft-skills-grid">
                    @foreach($skills['soft']['items'] as $item)
                        <div class="glass-card soft-skill-card">
                            <div class="soft-skill-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="soft-skill-name">{{ $item['name'] }}</h4>
                                <p class="soft-skill-desc">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
