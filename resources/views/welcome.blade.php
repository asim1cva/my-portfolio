@extends('layouts.app')

@section('title', 'My Portfolio')

@php
    $projects = [
        [
            'title' => 'Travel Clothing Club',
            'description' => 'Cross-platform app using Flutter with Getx as State Management, REST-APIs, Firebase, Pusher for real-time chat, and Stripe for payments.',
            'url' => 'https://apps.apple.com/us/app/travel-clothing-club/id6754902957',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767870399/1024_tvosnx.png'
        ],
        [
            'title' => 'FON VPN',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/vpn-global-protect-fonvpn/id6468386565',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767870655/1024_wvxsiu.png'
        ],
        [
            'title' => 'VPN-Lightning',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/vpn-lightning/id1585962294',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767875119/1024_bmfe6j.png'
        ],
        [
            'title' => 'Mite VPN',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/mite-vpn/id6745258516',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767875372/MiteVPN_h5dvj7.jpg'
        ],
        [
            'title' => 'Urban Shield VPN',
            'description' => 'VPN application for iOS using SwiftUI with the MVVM architectural pattern, integrating REST APIs for server management and user authentication, implementing iOS subscriptions via StoreKit for premium features',
            'url' => 'https://apps.apple.com/us/app/urban-shield-vpn/id6753347161',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767876486/Icon-Light-1024x1024_k5rnms.png'
        ],
        [
            'title' => 'Bundle Up',
            'description' => 'Cross-platform app using Flutter with Getx as State Management, REST-APIs, Firebase, Firestore for real-time chat, and Stripe for payments.',
            'url' => 'https://apps.apple.com/us/app/bundle-up/id6741536037',
            'image' => 'https://res.cloudinary.com/dgq11ggb9/image/upload/v1767874107/1024_s1gj9o.png'
        ]
    ];

    $skills = [
        'Flutter & Dart',
        'Swift / SwiftUI / Xcode (iOS)',
        'Kotlin / Java / Android Studio (Android)',
        'Firebase/FCM/Cloud Firestore',
        'REST APIs (OpenAI, Stripe, Google Maps, Pusher, etc.)',
        'UI / UX Design'
    ];

    $statistics = [
        ['number' => '6+', 'label' => 'Apps Published'],
        ['number' => '4+', 'label' => 'Years Experience'],
        ['number' => '100%', 'label' => 'Client Satisfaction'],
        ['number' => '50K+', 'label' => 'App Downloads']
    ];

    $experience = [
        [
            'title' => 'iOS app Developer(SwiftUI) / Flutter Developer',
            'company' => 'digitalD.tech',
            'company_url' => 'https://digitald.tech',
            'period' => 'Feb 2025 - Present',
            'description' => 'Developed and published 6+ mobile applications on App Store. Specialized in Flutter cross-platform development and native iOS apps using SwiftUI.',
            'achievements' => [
                'Published 6+ apps on Apple App Store',
                'Implemented MVVM and Clean Architecture patterns',
                'Integrated payment systems (Stripe, StoreKit)',
                'Optimized app performance and reduced crash rates'
            ]
        ],
        [
            'title' => 'Mobile App Developer',
            'company' => 'Digixvalley LLC',
            'company_url' => 'https://digixvalley.com',
            'period' => 'Feb 2022 - Oct 2024',
            'description' => 'Developed mobile applications for clients, focusing on user experience and performance optimization.',
            'achievements' => [
                'Delivered 10+ production-ready apps using ',
                'Collaborated with cross-functional teams',
                'Improved app load times by 40%'
            ]
        ],
        [
            'title' => 'Mobile App Developer (Android, IOS)',
            'company' => 'DevSaar',
            'company_url' => 'https://www.thedevsaar.com',
            'period' => 'Jan 2020 - Feb 2022',
            'description' => 'Developed mobile applications for clients, focusing on user experience and performance optimization.',
            'achievements' => [
                'Delivered 10+ production-ready apps using ',
                'Collaborated with cross-functional teams',
                'Improved app load times by 40%'
            ]
        ]
    ];

    $technologies = [
        'Languages' => ['Dart', 'Swift', 'Kotlin', 'Java'],
        'Frameworks' => ['Flutter', 'SwiftUI', 'UIKit', 'Android SDK'],
        'State Management' => ['GetX', 'Provider', 'Riverpod', 'MVVM'],
        'Backend & APIs' => ['REST APIs', 'Firebase', 'AWS'],
        'Tools & Services' => ['Zoho','Git', 'Jira', 'Postman', 'Stripe', 'Pusher', 'FCM'],
        'Design' => ['UI/UX Design', 'Google Material Design','Human Interface Guidelines']
    ];
@endphp

@section('header')
    <x-header 
        name="Muhammad Asim" 
        tagline="Mobile App Developer | Flutter • iOS • Android" 
    />
@endsection

@section('content')
    <section data-aos="fade-up">
        <h2 class="section-title">About Me</h2>
        <div class="about">
            <div>
                <p>
                I’m a Mobile App Developer with 4+ years of experience delivering robust, high-quality mobile applications across both cross-platform (Flutter) and native (iOS/Android) environments. 
                I specialize in modern state management solutions (Provider, GetX, Riverpod, SwiftUI), scalable architectures (MVVM, Clean Architecture), responsive UI design, seamless REST API integration, and performance optimization.
                </p>
            </div>
            <img src="https://avatars.githubusercontent.com/u/84513468?v=4" alt="Developer">
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics" data-aos="fade-up">
        <div class="stats-grid">
            @foreach($statistics as $stat)
                <div class="stat-card">
                    <div class="stat-number">{{ $stat['number'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <section data-aos="fade-up">
        <h2 class="section-title">Skills</h2>
        <div class="skills">
            @foreach($skills as $skill)
                <div class="skill-card">{{ $skill }}</div>
            @endforeach
        </div>
    </section>

    <!-- Technologies & Tools Section -->
    <section data-aos="fade-up">
        <h2 class="section-title">Technologies & Tools</h2>
        <div class="technologies">
            @foreach($technologies as $category => $items)
                <div class="tech-category">
                    <h3 class="tech-category-title">{{ $category }}</h3>
                    <div class="tech-tags">
                        @foreach($items as $item)
                            <span class="tech-tag">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Experience Section -->
    <section data-aos="fade-up">
        <h2 class="section-title">Experience</h2>
        <div class="experience-timeline">
            @foreach($experience as $exp)
                <div class="experience-item">
                    <div class="exp-header">
                        <div>
                            <h3 class="exp-title">{{ $exp['title'] }}</h3>
                            @if(isset($exp['company_url']) && $exp['company_url'])
                                <a href="{{ $exp['company_url'] }}" target="_blank" rel="noopener noreferrer" class="exp-company">
                                    {{ $exp['company'] }}
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            @else
                                <p class="exp-company">{{ $exp['company'] }}</p>
                            @endif
                        </div>
                        <span class="exp-period">{{ $exp['period'] }}</span>
                    </div>
                    <p class="exp-description">{{ $exp['description'] }}</p>
                    <ul class="exp-achievements">
                        @foreach($exp['achievements'] as $achievement)
                            <li><i class="fas fa-check-circle"></i> {{ $achievement }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <section data-aos="fade-up">
        <h2 class="section-title">Projects</h2>
        <div class="projects">
            @foreach($projects as $project)
                <x-project-card
                    :title="$project['title']"
                    :description="$project['description']"
                    :url="$project['url']"
                    :image="$project['image']"
                />
            @endforeach
        </div>
    </section>

    <section class="contact" data-aos="zoom-in">
        <h2 class="section-title">Contact</h2>
        <p>Interested in working together? Let's talk.</p>
        <div class="contact-links">
            <a href="mailto:asim1cva@gmail.com" class="contact-link">
                <i class="fas fa-envelope"></i>
                <span>Email</span>
            </a>
            <a href="https://github.com/asim1cva" target="_blank" rel="noopener noreferrer" class="contact-link">
                <i class="fab fa-github"></i>
                <span>GitHub</span>
            </a>
            <a href="https://linkedin.com/in/yourprofile" target="_blank" rel="noopener noreferrer" class="contact-link">
                <i class="fab fa-linkedin"></i>
                <span>LinkedIn</span>
            </a>
        </div>
    </section>
@endsection

@section('footer')
    <x-footer 
        name="Muhammad Asim" 
        title="Mobile App Developer" 
    />
@endsection
